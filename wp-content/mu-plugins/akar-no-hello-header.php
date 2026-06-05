<?php
/**
 * Plugin Name: Akar Solution — Disable Hello Elementor Default Header/Footer
 * Description: Hides Hello Elementor's default site header and footer on all pages. Our custom ak-* design system provides the navigation and footer.
 * Version: 1.0.0
 * Author: Akar Solution
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_filter( 'hello_elementor_header_footer', '__return_false' );
add_filter( 'hello_elementor_page_title', '__return_false' );
