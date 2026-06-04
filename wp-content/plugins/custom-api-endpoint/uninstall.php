<?php
/**
 * Uninstall handler for Custom API Endpoint plugin.
 *
 * Removes all plugin data: API keys, access logs, and the endpoint file.
 */

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

delete_option( 'custom_api_endpoint_keys' );
delete_option( 'custom_api_endpoint_access_log' );

$endpoint_path = ABSPATH . 'wp-api-proxy.php';
if ( file_exists( $endpoint_path ) ) {
	wp_delete_file( $endpoint_path );
}

global $wpdb;
$wpdb->query(
	$wpdb->prepare(
		"DELETE FROM {$wpdb->options} WHERE option_name LIKE %s",
		$wpdb->esc_like( '_transient_cap_resp_' ) . '%'
	)
);
$wpdb->query(
	$wpdb->prepare(
		"DELETE FROM {$wpdb->options} WHERE option_name LIKE %s",
		$wpdb->esc_like( '_transient_timeout_cap_resp_' ) . '%'
	)
);
$wpdb->query(
	$wpdb->prepare(
		"DELETE FROM {$wpdb->options} WHERE option_name LIKE %s",
		$wpdb->esc_like( '_transient_cap_rl_' ) . '%'
	)
);
$wpdb->query(
	$wpdb->prepare(
		"DELETE FROM {$wpdb->options} WHERE option_name LIKE %s",
		$wpdb->esc_like( '_transient_timeout_cap_rl_' ) . '%'
	)
);
