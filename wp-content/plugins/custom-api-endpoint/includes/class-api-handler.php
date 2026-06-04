<?php
/**
 * Core API request handler for Custom API Endpoint plugin.
 *
 * Routes incoming requests, validates authentication, delegates
 * to data providers, and returns JSON responses.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Custom_API_Handler {

	private Custom_API_Auth $auth;
	private Custom_API_Data_Provider $provider;

	public function __construct() {
		$this->auth     = new Custom_API_Auth();
		$this->provider = new Custom_API_Data_Provider();
	}

	private array $route_segments = array();
	private string $resource_id    = '';

	public function handle_request(): void {
		$start_time = microtime( true );

		$this->send_cors_headers();
		$this->send_no_cache_headers();

		if ( 'OPTIONS' === $_SERVER['REQUEST_METHOD'] ) {
			http_response_code( 204 );
			exit;
		}

		$method     = sanitize_text_field( wp_unslash( $_SERVER['REQUEST_METHOD'] ?? 'GET' ) );
		$api_key    = $this->extract_api_key();
		$action     = $this->resolve_action();

		if ( 'status' === $action ) {
			$this->send_json( array(
				'status'    => 'ok',
				'wordpress' => get_bloginfo( 'version' ),
				'php'       => PHP_VERSION,
				'endpoint'  => 'wp-api-proxy.php',
				'time'      => current_time( 'c' ),
			) );
		}

		$validation = $this->auth->validate_key( $api_key );

		if ( ! $validation['valid'] ) {
			$status_code = 'unknown_key' === $validation['reason'] ? 401 : 403;
			$this->auth->log_request( $api_key, $action ?: 'unknown', $method, $status_code, microtime( true ) - $start_time );
			$this->send_error( $validation['reason'], $status_code );
		}

		if ( ! $this->check_rate_limit( $api_key ) ) {
			$this->send_error( 'rate_limit_exceeded', 429 );
		}

		try {
			$response = $this->get_cached_or_fetch( $action, $api_key );

			if ( is_array( $response ) && isset( $response['error'] ) ) {
				$status_code = (int) ( $response['status'] ?? 400 );
				$duration = microtime( true ) - $start_time;
				$this->auth->log_request( $api_key, $action, $method, $status_code, $duration );
				$this->send_error( $response['error'], $status_code );
			}

			$duration = microtime( true ) - $start_time;
			$this->auth->log_request( $api_key, $action, $method, 200, $duration );
			$this->send_json( $response );
		} catch ( Exception $e ) {
			$duration = microtime( true ) - $start_time;
			$this->auth->log_request( $api_key, $action, $method, 400, $duration );
			$this->send_error( $e->getMessage(), 400 );
		}
	}

	/**
	 * Resolve the action from URL path segments or query parameter.
	 *
	 * Path-based (RESTful style):
	 *   /wp-api-proxy.php/posts
	 *   /wp-api-proxy.php/posts/1          → action=post, id=1
	 *   /wp-api-proxy.php/posts/hello-world → action=post, slug=hello-world
	 *   /wp-api-proxy.php/users
	 *   /wp-api-proxy.php/seo/1            → action=seo, id=1
	 *   /wp-api-proxy.php/terms?taxonomy=category
	 *   /wp-api-proxy.php/taxonomies/post  → action=taxonomies, post_type=post
	 *
	 * Query-based (legacy):
	 *   /wp-api-proxy.php?action=posts
	 */
	private function resolve_action(): string {
		$path = $this->get_request_path();
		if ( $path ) {
			$segments = array_values( array_filter( explode( '/', trim( $path, '/' ) ) ) );
			$this->route_segments = $segments;

			$action = $segments[0] ?? '';

			if ( isset( $segments[1] ) ) {
				$this->resource_id = $segments[1];
			}

			if ( isset( $segments[2] ) ) {
				$_GET['taxonomy'] = $segments[2];
			}

			return $action;
		}

		return sanitize_text_field( wp_unslash( $_GET['action'] ?? '' ) );
	}

	/**
	 * Extract the URL path after the script filename.
	 */
	private function get_request_path(): string {
		$path_info = wp_unslash( $_SERVER['PATH_INFO'] ?? '' );
		if ( $path_info && '/' !== $path_info ) {
			return $path_info;
		}

		$request_uri = wp_unslash( $_SERVER['REQUEST_URI'] ?? '' );
		$request_uri = strtok( $request_uri, '?' );
		$script_name = wp_unslash( $_SERVER['SCRIPT_NAME'] ?? '' );

		$basedir = dirname( $script_name );
		if ( $basedir && '/' !== $basedir ) {
			$uri = substr( $request_uri, strlen( $basedir ) );
		} else {
			$uri = $request_uri;
		}

		$script_basename = basename( $script_name );
		$pos = strpos( $uri, $script_basename );
		if ( false !== $pos ) {
			$uri = substr( $uri, $pos + strlen( $script_basename ) );
		}

		return trim( $uri, '/' ) ? '/' . trim( $uri, '/' ) : '';
	}

	private function check_rate_limit( string $api_key ): bool {
		$limit    = defined( 'CUSTOM_API_RATE_LIMIT' ) ? (int) CUSTOM_API_RATE_LIMIT : 120;
		$window   = defined( 'CUSTOM_API_RATE_WINDOW' ) ? (int) CUSTOM_API_RATE_WINDOW : 60;
		$transient_key = 'cap_rl_' . md5( $api_key );

		$count = (int) get_transient( $transient_key );
		if ( $count >= $limit ) {
			return false;
		}

		if ( 0 === $count ) {
			set_transient( $transient_key, 1, $window );
		} else {
			set_transient( $transient_key, $count + 1, $window );
		}

		return true;
	}

	private function get_cached_or_fetch( string $action, string $api_key ): array {
		$request_method = sanitize_text_field( wp_unslash( $_SERVER['REQUEST_METHOD'] ?? 'GET' ) );
		$nocache = ! empty( $_GET['nocache'] );

		if ( 'GET' !== $request_method || $nocache ) {
			return $this->route_request( $action, $api_key );
		}

		$cache_key = 'cap_resp_' . md5( $this->get_request_path() . wp_json_encode( $_GET ) );
		$cached = get_transient( $cache_key );

		if ( false !== $cached && is_array( $cached ) ) {
			return $cached;
		}

		$response = $this->route_request( $action, $api_key );

		if ( ! isset( $response['error'] ) ) {
			set_transient( $cache_key, $response, 60 );
		}

		return $response;
	}

	private function route_request( string $action, string $api_key ): array {
		switch ( $action ) {
			case 'posts':
				if ( isset( $this->route_segments[1] ) ) {
					return $this->resolve_posts_route( $api_key );
				}
				return $this->provider->get_posts( $_GET );

			case 'post':
				if ( empty( $_GET['id'] ) && empty( $_GET['slug'] ) ) {
					throw new Exception( 'Missing id or slug parameter.' );
				}
				$result = $this->provider->get_posts( $_GET );
				if ( empty( $result['results'] ) ) {
					$this->send_error( 'Post not found.', 404 );
				}
				return array( 'post' => $result['results'][0] );

			case 'post_types':
				return $this->provider->get_post_types();

			case 'taxonomies':
				if ( ! empty( $this->resource_id ) ) {
					$_GET['post_type'] = $this->resource_id;
				}
				return $this->provider->get_taxonomies( $_GET );

			case 'terms':
				if ( empty( $_GET['taxonomy'] ) ) {
					throw new Exception( 'Missing taxonomy parameter.' );
				}
				return $this->provider->get_terms( $_GET );

			case 'users':
				return $this->provider->get_users( $_GET, true );

			case 'seo':
				if ( ! empty( $this->resource_id ) ) {
					$_GET['id'] = $this->resource_id;
				}
				if ( empty( $_GET['id'] ) ) {
					throw new Exception( 'Missing id parameter.' );
				}
				$seo_data = $this->provider->get_seo_data( (int) $_GET['id'] );
				if ( empty( $seo_data ) ) {
					return array( 'message' => 'No SEO plugins detected.', 'data' => (object) array() );
				}
				return array( 'data' => $seo_data );

			case 'status':
				return array(
					'status'    => 'ok',
					'wordpress' => get_bloginfo( 'version' ),
					'php'       => PHP_VERSION,
					'endpoint'  => 'wp-api-proxy.php',
					'time'      => current_time( 'c' ),
				);

			default:
				return array(
					'message' => 'Custom API Endpoint is active.',
					'available_actions' => array(
						'posts'       => 'GET /posts — List posts (supports type, per_page, page, status, search, category, tag, author, orderby, order, slug, id, taxonomy+term, include_meta, include_taxonomies)',
						'post'        => 'GET /posts/{id|slug} — Single post by id or slug (auto-detected)',
						'post_types'  => 'GET /post_types — List available post types',
						'taxonomies'  => 'GET /taxonomies[/post_type] — List taxonomies (optionally filtered by post_type)',
						'terms'       => 'GET /terms?taxonomy=xxx — List terms in a taxonomy',
						'users'       => 'GET /users — List users (requires users permission)',
						'seo'         => 'GET /seo/{id} — SEO data for a post by id (requires seo permission)',
						'status'      => 'GET /status — Endpoint health check',
					),
					'permissions'       => $this->auth->validate_key( $api_key )['permissions'] ?? array(),
				);
		}
	}

	/**
	 * Route posts path: /posts/{id|slug} resolves to single post.
	 */
	private function resolve_posts_route( string $api_key ): array {
		$segment = $this->route_segments[1] ?? '';

		if ( '' !== $segment ) {
			if ( is_numeric( $segment ) ) {
				$_GET['id'] = absint( $segment );
			} else {
				$_GET['slug'] = sanitize_title( $segment );
			}

			$result = $this->provider->get_posts( $_GET );
			if ( empty( $result['results'] ) ) {
				$this->send_error( 'Post not found.', 404 );
			}
			return array( 'post' => $result['results'][0] );
		}

		return $this->provider->get_posts( $_GET );
	}

	private function extract_api_key(): string {
		if ( ! empty( $_GET['api_key'] ) ) {
			return sanitize_text_field( wp_unslash( $_GET['api_key'] ) );
		}

		if ( ! empty( $_SERVER['HTTP_X_API_KEY'] ) ) {
			return sanitize_text_field( wp_unslash( $_SERVER['HTTP_X_API_KEY'] ) );
		}

		if ( ! empty( $_SERVER['HTTP_AUTHORIZATION'] ) ) {
			$auth_header = sanitize_text_field( wp_unslash( $_SERVER['HTTP_AUTHORIZATION'] ) );
			if ( preg_match( '/^Bearer\s+(.+)$/i', $auth_header, $matches ) ) {
				return $matches[1];
			}
		}

		return '';
	}

	private function send_json( array $data ): void {
		header( 'Content-Type: application/json; charset=utf-8' );
		echo wp_json_encode( $data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT );
		exit;
	}

	private function send_error( string $message, int $status_code = 400 ): void {
		http_response_code( $status_code );
		$error = str_replace( '_', ' ', $message );
		$this->send_json( array( 'error' => $error, 'status' => $status_code ) );
	}

	private function send_cors_headers(): void {
		$origin = $this->get_allowed_origin();
		header( 'Access-Control-Allow-Origin: ' . $origin );
		header( 'Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS' );
		header( 'Access-Control-Allow-Headers: Content-Type, Authorization, X-API-Key' );
		header( 'Access-Control-Max-Age: 3600' );
	}

	private function get_allowed_origin(): string {
		if ( defined( 'CUSTOM_API_ALLOWED_ORIGINS' ) ) {
			$allowed = explode( ',', CUSTOM_API_ALLOWED_ORIGINS );
			$request_origin = $_SERVER['HTTP_ORIGIN'] ?? '';

			foreach ( $allowed as $pattern ) {
				$pattern = trim( $pattern );
				if ( '*' === $pattern ) {
					return '*';
				}
				if ( $request_origin && strpos( $request_origin, $pattern ) !== false ) {
					return $request_origin;
				}
			}
		}

		return $_SERVER['HTTP_ORIGIN'] ?? '*';
	}

	private function send_no_cache_headers(): void {
		header( 'Cache-Control: no-cache, no-store, must-revalidate' );
		header( 'Pragma: no-cache' );
		header( 'Expires: 0' );
	}
}
