<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'LUMINA_THEME_VERSION', '1.0.0' );

/**
 * Page slug mapping for navigation.
 * Key = nav label, Value = page slug.
 * Update these when pages are created in WordPress admin.
 */
function lumina_page_slugs(): array {
	return array(
		'produk'   => 'produk',
		'kandungan' => 'kandungan',
		'review'   => 'review',
		'tips'     => 'tips',
		'faq'      => 'faq',
		'kontak'   => 'kontak',
		'privasi'  => 'kebijakan-privasi',
	);
}

/**
 * Get the URL for a page slug.
 * Falls back to home_url( '/slug/' ) if the page doesn't exist.
 */
function lumina_page_url( string $slug ): string {
	$slugs = lumina_page_slugs();
	$path  = $slugs[ $slug ] ?? $slug;
	$page  = get_page_by_path( $path );
	if ( $page ) {
		return esc_url( get_permalink( $page->ID ) );
	}
	return esc_url( home_url( '/' . $path . '/' ) );
}

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
					},
					colors: {
						emerald: {
							50: "#EDE9FE",
							100: "#DDD6FE",
							200: "#C4B5FD",
							300: "#A78BFA",
							400: "#8B5CF6",
							500: "#7C3AED",
							600: "#6D28D9",
							700: "#5B21B6",
							800: "#4C1D95",
							900: "#3B0764",
							950: "#2E1065",
						},
						stone: {
							50: "#FAF5FF",
							100: "#F3E8FF",
							200: "#E9D5FF",
							300: "#D8B4FE",
							400: "#C084FC",
							500: "#A855F7",
							600: "#9333EA",
							700: "#7E22CE",
							800: "#6B21A8",
							900: "#581C87",
							950: "#3B0764",
						},
						amber: {
							50: "#FDF2F8",
							100: "#FCE7F3",
							200: "#FBCFE8",
							300: "#F9A8D4",
							400: "#F472B6",
							500: "#EC4899",
							600: "#DB2777",
							700: "#BE185D",
							800: "#9D174D",
							900: "#831843",
							950: "#500724",
						},
					}
				}
			}
		}
	' );

	wp_add_inline_script( 'tailwind-cdn', '
		document.addEventListener( "DOMContentLoaded", function() {
			document.querySelectorAll( "a[href^=\\"#\\"]" ).forEach( function( anchor ) {
				anchor.addEventListener( "click", function( e ) {
					e.preventDefault();
					var target = document.querySelector( this.getAttribute( "href" ) );
					if ( target ) {
						target.scrollIntoView( { behavior: "smooth", block: "start" } );
					}
				} );
			} );
		} );
	' );
}
add_action( 'wp_enqueue_scripts', 'lumina_enqueue_assets' );
