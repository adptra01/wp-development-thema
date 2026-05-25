<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'LUMINA_THEME_VERSION', '1.0.0' );

function lumina_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'custom-logo', array(
		'height'      => 36,
		'width'       => 100,
		'flex-height' => true,
		'flex-width'  => true,
	) );

	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'lumina-skin' ),
	) );
}
add_action( 'after_setup_theme', 'lumina_theme_setup' );

function lumina_enqueue_assets() {
	wp_enqueue_style(
		'lumina-google-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,500;1,600&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'lumina-skin-style',
		get_template_directory_uri() . '/assets/css/lumina.css',
		array(),
		LUMINA_THEME_VERSION
	);

	wp_enqueue_script(
		'tailwind-cdn',
		'https://cdn.tailwindcss.com',
		array(),
		null,
		false
	);

	wp_add_inline_script( 'tailwind-cdn', '
		tailwind.config = {
			theme: {
				extend: {
					fontFamily: {
						playfair: ["Playfair Display", "serif"],
						sans: ["Inter", "sans-serif"],
					}
				}
			}
		}
	' );
}
add_action( 'wp_enqueue_scripts', 'lumina_enqueue_assets' );
