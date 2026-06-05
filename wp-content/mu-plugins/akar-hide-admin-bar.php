<?php
/**
 * Plugin Name: Akar Solution — Hide Admin Bar for Public Visitors
 * Description: Hides WordPress admin bar on the frontend for visitors who are not logged in. Logged-in admins still see it for site management.
 * Version: 1.0.0
 * Author: Akar Solution
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_filter( 'show_admin_bar', function( $show ) {
	return current_user_can( 'edit_posts' ) ? $show : false;
} );

add_action( 'wp_enqueue_scripts', function() {
	if ( ! is_user_logged_in() ) {
		wp_add_inline_style( 'admin-bar', 'body { margin-top: -32px !important; }' );
	}
}, 100 );

add_action( 'after_setup_theme', function() {
	if ( ! is_user_logged_in() ) {
		show_admin_bar( false );
	}
} );
