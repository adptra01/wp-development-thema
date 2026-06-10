<?php
/**
 * Data provider for Custom API Endpoint plugin.
 *
 * Handles all data retrieval: posts, pages, CPTs, taxonomies,
 * users, metadata, SEO data, and custom queries.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Custom_API_Data_Provider {

	public function get_posts( array $args = array() ): array {
		$post_type = sanitize_text_field( $args['type'] ?? 'post' );

		if ( ! post_type_exists( $post_type ) ) {
			return array( 'error' => 'Invalid post type: ' . $post_type, 'status' => 404 );
		}

		$query_args = array(
			'post_type'      => $post_type,
			'post_status'    => $this->get_allowed_post_status( $args ),
			'posts_per_page' => min( absint( $args['per_page'] ?? 10 ), 100 ),
			'paged'          => absint( $args['page'] ?? 1 ),
			'orderby'        => sanitize_text_field( $args['orderby'] ?? 'date' ),
			'order'          => strtoupper( sanitize_text_field( $args['order'] ?? 'DESC' ) ),
		);

		if ( ! empty( $args['category'] ) ) {
			$query_args['cat'] = absint( $args['category'] );
		}
		if ( ! empty( $args['tag'] ) ) {
			$query_args['tag_id'] = absint( $args['tag'] );
		}
		if ( ! empty( $args['author'] ) ) {
			$query_args['author'] = absint( $args['author'] );
		}
		if ( ! empty( $args['search'] ) ) {
			$query_args['s'] = sanitize_text_field( $args['search'] );
		}
		if ( ! empty( $args['slug'] ) ) {
			$query_args['name'] = sanitize_title( $args['slug'] );
		}
		if ( ! empty( $args['id'] ) ) {
			$query_args['p'] = absint( $args['id'] );
		}
		if ( ! empty( $args['include_meta'] ) && '1' === $args['include_meta'] ) {
			$query_args['update_post_meta_cache'] = true;
		}
		if ( ! empty( $args['taxonomy'] ) && ! empty( $args['term'] ) ) {
			$query_args['tax_query'] = array(
				array(
					'taxonomy' => sanitize_text_field( $args['taxonomy'] ),
					'field'    => sanitize_text_field( $args['term_field'] ?? 'slug' ),
					'terms'    => sanitize_text_field( $args['term'] ),
				),
			);
		}

		$query   = new WP_Query( $query_args );
		$results = array();

		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				$results[] = $this->format_post( get_post(), $args );
			}
			wp_reset_postdata();
		}

		return array(
			'total'        => $query->found_posts,
			'page'         => $query_args['paged'],
			'per_page'     => $query_args['posts_per_page'],
			'total_pages'  => (int) ceil( $query->found_posts / $query_args['posts_per_page'] ),
			'results'      => $results,
		);
	}

	private function format_post( WP_Post $post, array $args ): array {
		$include_meta = ! empty( $args['include_meta'] ) && '1' === $args['include_meta'];
		$include_tax  = ! empty( $args['include_taxonomies'] ) && '1' === $args['include_taxonomies'];

		$data = array(
			'id'            => $post->ID,
			'title'         => get_the_title( $post ),
			'slug'          => $post->post_name,
			'type'          => $post->post_type,
			'status'        => $post->post_status,
			'date'          => get_the_date( 'c', $post ),
			'modified'      => get_the_modified_date( 'c', $post ),
			'excerpt'       => get_the_excerpt( $post ),
			'content'       => $this->get_post_content( $post, $args ),
			'link'          => get_permalink( $post ),
			'featured_image'=> $this->get_featured_image( $post->ID ),
			'author'        => $this->get_author_info( $post->post_author ),
			'comment_count' => (int) $post->comment_count,
		);

		if ( $include_meta ) {
			$data['meta'] = $this->get_post_meta_safe( $post->ID );
		}

		if ( $include_tax ) {
			$data['taxonomies'] = $this->get_taxonomies_for_post( $post );
		}

		return $data;
	}

	public function get_taxonomies_for_post( WP_Post $post ): array {
		$taxonomies = get_post_taxonomies( $post );
		$result     = array();

		foreach ( $taxonomies as $taxonomy ) {
			$terms = get_the_terms( $post->ID, $taxonomy );
			if ( $terms && ! is_wp_error( $terms ) ) {
				$result[ $taxonomy ] = array_map( function ( $term ) {
					return array(
						'id'          => $term->term_id,
						'name'        => $term->name,
						'slug'        => $term->slug,
						'description' => $term->description,
						'count'       => $term->count,
						'link'        => get_term_link( $term ),
					);
				}, $terms );
			}
		}

		return $result;
	}

	private function get_post_content( WP_Post $post, array $args ): string {
		if ( ! empty( $args['content_type'] ) && 'raw' === $args['content_type'] ) {
			return $post->post_content;
		}
		return apply_filters( 'the_content', $post->post_content );
	}

	private function get_post_meta_safe( int $post_id ): array {
		$meta = get_post_meta( $post_id );
		if ( ! is_array( $meta ) ) {
			return array();
		}

		$skip_prefixes = array( '_edit_', '_wp_', '_encloseme', '_pingme' );

		$filtered = array();
		foreach ( $meta as $key => $values ) {
			$skip = false;
			foreach ( $skip_prefixes as $prefix ) {
				if ( strpos( $key, $prefix ) === 0 ) {
					$skip = true;
					break;
				}
			}
			if ( ! $skip ) {
				$filtered[ $key ] = count( $values ) === 1 ? $values[0] : $values;
			}
		}

		return $filtered;
	}

	private function get_featured_image( int $post_id ): ?array {
		$thumbnail_id = get_post_thumbnail_id( $post_id );
		if ( ! $thumbnail_id ) {
			return null;
		}

		$full = wp_get_attachment_image_src( $thumbnail_id, 'full' );
		$thumb = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail' );
		$medium = wp_get_attachment_image_src( $thumbnail_id, 'medium' );

		return array(
			'id'     => $thumbnail_id,
			'alt'    => get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true ),
			'full'   => $full ? $full[0] : null,
			'thumbnail' => $thumb ? $thumb[0] : null,
			'medium' => $medium ? $medium[0] : null,
		);
	}

	private function get_author_info( int $author_id ): array {
		$user = get_userdata( $author_id );
		if ( ! $user ) {
			return array( 'id' => $author_id );
		}

		return array(
			'id'          => $user->ID,
			'display_name'=> $user->display_name,
			'login'       => $user->user_login,
			'avatar'      => get_avatar_url( $user->ID ),
			'link'        => get_author_posts_url( $user->ID ),
		);
	}

	public function get_users( array $args = array(), bool $api_access = false ): array {
		if ( ! $api_access && ! current_user_can( 'list_users' ) ) {
			return array( 'error' => 'Insufficient permissions to list users', 'status' => 403 );
		}

		$query_args = array(
			'number' => min( absint( $args['per_page'] ?? 10 ), 100 ),
			'paged'  => absint( $args['page'] ?? 1 ),
			'orderby'=> sanitize_text_field( $args['orderby'] ?? 'ID' ),
			'order'  => strtoupper( sanitize_text_field( $args['order'] ?? 'DESC' ) ),
		);

		if ( ! empty( $args['role'] ) ) {
			$query_args['role'] = sanitize_text_field( $args['role'] );
		}
		if ( ! empty( $args['search'] ) ) {
			$query_args['search'] = '*' . sanitize_text_field( $args['search'] ) . '*';
		}

		$user_query = new WP_User_Query( $query_args );
		$users      = array();

		foreach ( $user_query->get_results() as $user ) {
			$users[] = array(
				'id'            => $user->ID,
				'login'         => $user->user_login,
				'display_name'  => $user->display_name,
				'roles'         => $user->roles,
				'registered'    => $user->user_registered,
				'avatar'        => get_avatar_url( $user->ID ),
				'link'          => get_author_posts_url( $user->ID ),
			);
		}

		return array(
			'total'       => $user_query->get_total(),
			'page'        => $query_args['paged'],
			'per_page'    => $query_args['number'],
			'total_pages' => (int) ceil( $user_query->get_total() / $query_args['number'] ),
			'results'     => $users,
		);
	}

	public function get_terms( array $args = array() ): array {
		$taxonomy = sanitize_text_field( $args['taxonomy'] ?? 'category' );

		if ( ! taxonomy_exists( $taxonomy ) ) {
			return array( 'error' => 'Invalid taxonomy: ' . $taxonomy, 'status' => 404 );
		}

		$term_args = array(
			'hide_empty' => ! empty( $args['hide_empty'] ) ? filter_var( $args['hide_empty'], FILTER_VALIDATE_BOOLEAN ) : false,
			'number'     => absint( $args['per_page'] ?? 0 ),
			'orderby'    => sanitize_text_field( $args['orderby'] ?? 'name' ),
			'order'      => strtoupper( sanitize_text_field( $args['order'] ?? 'ASC' ) ),
		);

		if ( ! empty( $args['search'] ) ) {
			$term_args['search'] = sanitize_text_field( $args['search'] );
		}
		if ( ! empty( $args['parent'] ) ) {
			$term_args['parent'] = absint( $args['parent'] );
		}
		if ( ! empty( $args['slug'] ) ) {
			$term_args['slug'] = sanitize_title( $args['slug'] );
		}

		$terms = get_terms( $taxonomy, $term_args );

		if ( is_wp_error( $terms ) ) {
			return array( 'error' => $terms->get_error_message(), 'status' => 500 );
		}

		if ( empty( $terms ) ) {
			return array( 'results' => array() );
		}

		$results = array();
		foreach ( $terms as $term ) {
			$results[] = array(
				'id'          => $term->term_id,
				'name'        => $term->name,
				'slug'        => $term->slug,
				'description' => $term->description,
				'taxonomy'    => $term->taxonomy,
				'parent'      => $term->parent,
				'count'       => $term->count,
				'link'        => get_term_link( $term ),
			);
		}

		return array( 'results' => $results );
	}

	public function get_taxonomies( array $args = array() ): array {
		$post_type  = ! empty( $args['post_type'] ) ? sanitize_text_field( $args['post_type'] ) : '';
		$taxonomies = get_object_taxonomies( $post_type ?: 'post', 'objects' );
		$results    = array();

		foreach ( $taxonomies as $tax ) {
			$results[] = array(
				'name'        => $tax->name,
				'label'       => $tax->label,
				'description' => $tax->description,
				'hierarchical'=> $tax->hierarchical,
				'public'      => $tax->public,
				'rewrite_slug'=> $tax->rewrite['slug'] ?? '',
			);
		}

		return array( 'results' => $results );
	}

	public function get_seo_data( int $post_id ): array {
		$data = array();

		if ( defined( 'WPSEO_VERSION' ) ) {
			$yoast_meta = get_post_meta( $post_id );
			$data['yoast'] = array(
				'title'            => get_post_meta( $post_id, '_yoast_wpseo_title', true ),
				'description'      => get_post_meta( $post_id, '_yoast_wpseo_metadesc', true ),
				'focus_keyword'    => get_post_meta( $post_id, '_yoast_wpseo_focuskw', true ),
				'canonical'        => get_post_meta( $post_id, '_yoast_wpseo_canonical', true ),
				'robots_noindex'   => get_post_meta( $post_id, '_yoast_wpseo_meta-robots-noindex', true ),
				'robots_nofollow'  => get_post_meta( $post_id, '_yoast_wpseo_meta-robots-nofollow', true ),
				'og_title'         => get_post_meta( $post_id, '_yoast_wpseo_opengraph-title', true ),
				'og_description'   => get_post_meta( $post_id, '_yoast_wpseo_opengraph-description', true ),
				'og_image'         => get_post_meta( $post_id, '_yoast_wpseo_opengraph-image', true ),
				'twitter_title'    => get_post_meta( $post_id, '_yoast_wpseo_twitter-title', true ),
				'twitter_description' => get_post_meta( $post_id, '_yoast_wpseo_twitter-description', true ),
				'twitter_image'    => get_post_meta( $post_id, '_yoast_wpseo_twitter-image', true ),
				'readability_score' => get_post_meta( $post_id, '_yoast_wpseo_content_score', true ),
			);
		}

		if ( defined( 'RANK_MATH_VERSION' ) ) {
			$data['rank_math'] = array(
				'title'       => get_post_meta( $post_id, 'rank_math_title', true ),
				'description' => get_post_meta( $post_id, 'rank_math_description', true ),
				'focus_keyword' => get_post_meta( $post_id, 'rank_math_focus_keyword', true ),
				'robots'      => get_post_meta( $post_id, 'rank_math_robots', true ),
				'og_title'    => get_post_meta( $post_id, 'rank_math_facebook_title', true ),
				'og_description' => get_post_meta( $post_id, 'rank_math_facebook_description', true ),
				'og_image'    => get_post_meta( $post_id, 'rank_math_facebook_image', true ),
			);
		}

		if ( defined( 'AIOSEO_VERSION' ) ) {
			$data['aioseo'] = array(
				'title'       => get_post_meta( $post_id, '_aioseo_title', true ),
				'description' => get_post_meta( $post_id, '_aioseo_description', true ),
				'keywords'    => get_post_meta( $post_id, '_aioseo_keywords', true ),
				'og_title'    => get_post_meta( $post_id, '_aioseo_og_title', true ),
				'og_description' => get_post_meta( $post_id, '_aioseo_og_description', true ),
			);
		}

		return $data;
	}

	public function get_post_types(): array {
		$post_types = get_post_types( array( 'public' => true ), 'objects' );
		$results    = array();

		foreach ( $post_types as $pt ) {
			$results[] = array(
				'name'        => $pt->name,
				'label'       => $pt->label,
				'description' => $pt->description,
				'hierarchical'=> $pt->hierarchical,
				'rest_base'   => $pt->rest_base ?? null,
				'has_archive' => $pt->has_archive,
			);
		}

		return array( 'results' => $results );
	}

	private function get_allowed_post_status( array $args ) {
		$status = sanitize_text_field( $args['status'] ?? 'publish' );
		$allowed = array( 'publish', 'draft', 'pending', 'private', 'future', 'trash', 'any' );

		if ( in_array( $status, $allowed, true ) ) {
			if ( 'any' === $status ) {
				return array( 'publish', 'draft', 'pending' );
			}
			return $status;
		}

		return 'publish';
	}
}
