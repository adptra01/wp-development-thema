<?php
/**
 * Authentication handler for Custom API Endpoint plugin.
 *
 * Manages API key creation, validation, permissions, and logging.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Custom_API_Auth {

	private const OPTION_KEY      = 'custom_api_endpoint_keys';
	private const LOG_OPTION_KEY  = 'custom_api_endpoint_access_log';
	private const MAX_LOG_ENTRIES = 500;
	private const COUNTER_INTERVAL = 60;

	private static ?array $keys_cache = null;
	private static int $last_save_time = 0;

	public function get_all_keys(): array {
		if ( null !== self::$keys_cache ) {
			return self::$keys_cache;
		}
		$keys = get_option( self::OPTION_KEY, array() );
		self::$keys_cache = is_array( $keys ) ? $keys : array();
		return self::$keys_cache;
	}

	private function save_keys_persistent(): void {
		$now = time();
		if ( $now - self::$last_save_time < self::COUNTER_INTERVAL && 0 !== self::$last_save_time ) {
			return;
		}
		self::$last_save_time = $now;
		update_option( self::OPTION_KEY, self::$keys_cache, false );
	}

	public function save_keys( array $keys ): void {
		self::$keys_cache = $keys;
		update_option( self::OPTION_KEY, $keys, false );
	}

	public function generate_key(): string {
		return 'cap_' . bin2hex( random_bytes( 24 ) );
	}

	public function add_key( string $label, array $permissions = array() ): array {
		$keys              = $this->get_all_keys();
		$key_string        = $this->generate_key();
		$all_permissions   = $this->get_available_permissions();
		$valid_permissions = array_intersect( $permissions, $all_permissions );

		if ( empty( $valid_permissions ) ) {
			$valid_permissions = $all_permissions;
		}

		$keys[ $key_string ] = array(
			'label'       => sanitize_text_field( $label ),
			'permissions' => $valid_permissions,
			'created'     => current_time( 'mysql' ),
			'last_used'   => '',
			'request_count' => 0,
			'enabled'     => true,
		);

		$this->save_keys( $keys );

		return array(
			'key'         => $key_string,
			'label'       => $label,
			'permissions' => $valid_permissions,
		);
	}

	public function revoke_key( string $key_string ): bool {
		$keys = $this->get_all_keys();
		if ( isset( $keys[ $key_string ] ) ) {
			unset( $keys[ $key_string ] );
			$this->save_keys( $keys );
			return true;
		}
		return false;
	}

	public function toggle_key( string $key_string ): bool {
		$keys = $this->get_all_keys();
		if ( isset( $keys[ $key_string ] ) ) {
			$keys[ $key_string ]['enabled'] = ! $keys[ $key_string ]['enabled'];
			$this->save_keys( $keys );
			return true;
		}
		return false;
	}

	public function validate_key( string $key_string ): array {
		$keys = $this->get_all_keys();
		if ( ! isset( $keys[ $key_string ] ) ) {
			return array( 'valid' => false, 'reason' => 'unknown_key' );
		}

		$key_data = $keys[ $key_string ];

		if ( empty( $key_data['enabled'] ) ) {
			return array( 'valid' => false, 'reason' => 'key_disabled' );
		}

		$key_data['last_used']     = current_time( 'mysql' );
		$key_data['request_count'] = ( $key_data['request_count'] ?? 0 ) + 1;
		self::$keys_cache[ $key_string ] = $key_data;
		$this->save_keys_persistent();

		return array(
			'valid'       => true,
			'permissions' => $key_data['permissions'] ?? $this->get_available_permissions(),
		);
	}

	public function has_permission( string $key_string, string $permission ): bool {
		$validation = $this->validate_key( $key_string );
		if ( ! $validation['valid'] ) {
			return false;
		}
		return in_array( $permission, $validation['permissions'], true );
	}

	public function get_available_permissions(): array {
		return array( 'posts', 'pages', 'taxonomies', 'users', 'seo', 'custom', 'metadata' );
	}

	public function log_request( string $key_string, string $action, string $method, int $status_code, float $duration ): void {
		$logs = get_option( self::LOG_OPTION_KEY, array() );
		if ( ! is_array( $logs ) ) {
			$logs = array();
		}

		array_unshift( $logs, array(
			'time'        => current_time( 'mysql' ),
			'key'         => substr( $key_string, 0, 12 ) . '...',
			'action'      => $action,
			'method'      => $method,
			'status_code' => $status_code,
			'duration_ms' => round( $duration * 1000, 2 ),
		) );

		if ( count( $logs ) > self::MAX_LOG_ENTRIES ) {
			$logs = array_slice( $logs, 0, self::MAX_LOG_ENTRIES );
		}

		update_option( self::LOG_OPTION_KEY, $logs, false );
	}

	public function get_logs( int $limit = 50 ): array {
		$logs = get_option( self::LOG_OPTION_KEY, array() );
		if ( ! is_array( $logs ) ) {
			return array();
		}
		return array_slice( $logs, 0, absint( $limit ) );
	}

	public function clear_logs(): void {
		delete_option( self::LOG_OPTION_KEY );
	}
}
