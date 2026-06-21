<?php
/**
 * Jambi Press Theme Functions
 *
 * @package Jambi_Press
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'JP_VERSION', '1.0.0' );
define( 'JP_DIR', get_template_directory() );
define( 'JP_URI', get_template_directory_uri() );

/* ============================================================
   THEME SETUP
   ============================================================ */

add_action( 'after_setup_theme', function() {
    load_theme_textdomain( 'jambi-press', JP_DIR . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'
    ] );
    add_theme_support( 'custom-logo', [
        'height'      => 40,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ] );
    add_theme_support( 'editor-styles' );

    register_nav_menus( [
        'primary'   => __( 'Navigasi Utama', 'jambi-press' ),
        'categories' => __( 'Kategori Berita', 'jambi-press' ),
        'footer'    => __( 'Footer Links', 'jambi-press' ),
    ] );

    add_image_size( 'jp-hero', 1200, 630, true );
    add_image_size( 'jp-card', 600, 400, true );
    add_image_size( 'jp-thumb', 300, 200, true );
} );

/* ============================================================
   ENQUEUE SCRIPTS & STYLES
   ============================================================ */

add_action( 'wp_enqueue_scripts', function() {
    // Cabinet Grotesk font
    wp_enqueue_style( 'cabinet-grotesk',
        'https://api.fontshare.com/v2/css?f[]=cabinet-grotesk@400,500,700,800,900&display=swap',
        [],
        null
    );

    // Theme base styles (hand-crafted, no CDN dependency)
    wp_enqueue_style( 'jambi-press-style', JP_URI . '/style.css', [ 'cabinet-grotesk' ], JP_VERSION );

    // GSAP + ScrollTrigger (admin bar aware)
    wp_enqueue_script( 'gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', [], '3.12.5', true );
    wp_enqueue_script( 'gsap-scrolltrigger', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js', [ 'gsap' ], '3.12.5', true );

    // Theme JS
    wp_enqueue_script( 'jambi-press-main', JP_URI . '/assets/main.js', [ 'gsap', 'gsap-scrolltrigger' ], JP_VERSION, true );
    wp_localize_script( 'jambi-press-main', 'jpData', [
        'ajaxUrl' => admin_url( 'admin-ajax.php' ),
        'nonce'   => wp_create_nonce( 'jp_nonce' ),
    ] );
} );

/* ============================================================
   WIDGET AREAS
   ============================================================ */

add_action( 'widgets_init', function() {
    register_sidebar( [
        'name'          => __( 'Sidebar Berita', 'jambi-press' ),
        'id'            => 'sidebar-news',
        'before_widget' => '<div class="mb-6">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 style="font-size:1.125rem; font-weight:800; margin:0 0 12px; padding:0 0 8px; border-bottom:3px solid var(--jp-red);">',
        'after_title'   => '</h3>',
    ] );

    register_sidebar( [
        'name'          => __( 'Area Iklan Atas', 'jambi-press' ),
        'id'            => 'ad-top',
        'before_widget' => '<div class="jp-ad-slot w-full h-24 md:h-32 mb-6">',
        'after_widget'  => '</div>',
        'before_title'  => '<span class="sr-only">',
        'after_title'   => '</span>',
    ] );

    register_sidebar( [
        'name'          => __( 'Area Iklan Bawah', 'jambi-press' ),
        'id'            => 'ad-bottom',
        'before_widget' => '<div class="jp-ad-slot w-full h-24 md:h-32 mb-6">',
        'after_widget'  => '</div>',
        'before_title'  => '<span class="sr-only">',
        'after_title'   => '</span>',
    ] );

    register_sidebar( [
        'name'          => __( 'Footer Widget 1', 'jambi-press' ),
        'id'            => 'footer-1',
        'before_widget' => '<div class="mb-6">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 style="font-size:.8125rem; font-weight:800; text-transform:uppercase; letter-spacing:.14em; color:var(--jp-white); margin:0 0 16px;">',
        'after_title'   => '</h4>',
    ] );

    register_sidebar( [
        'name'          => __( 'Footer Widget 2', 'jambi-press' ),
        'id'            => 'footer-2',
        'before_widget' => '<div class="mb-6">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 style="font-size:.8125rem; font-weight:800; text-transform:uppercase; letter-spacing:.14em; color:var(--jp-white); margin:0 0 16px;">',
        'after_title'   => '</h4>',
    ] );
} );

/* ============================================================
   HELPER FUNCTIONS
   ============================================================ */

/**
 * Get latest posts for news sections
 */
function jp_get_posts( $args = [] ) {
    $defaults = [
        'posts_per_page' => 6,
        'post_status'    => 'publish',
        'no_found_rows'  => true,
    ];
    $args = wp_parse_args( $args, $defaults );
    return new WP_Query( $args );
}

/**
 * Get categories for navigation
 */
function jp_get_categories() {
    return get_categories( [
        'hide_empty' => true,
        'number'     => 12,
        'orderby'    => 'count',
        'order'      => 'DESC',
    ] );
}

/**
 * Post meta: reading time estimate
 */
function jp_reading_time( $post_id = null ) {
    $post_id = $post_id ?: get_the_ID();
    $content = get_post_field( 'post_content', $post_id );
    $word_count = str_word_count( strip_tags( $content ) );
    $minutes = max( 1, ceil( $word_count / 200 ) );
    return $minutes . ' menit';
}

/**
 * Post meta: time ago
 */
function jp_time_ago() {
    $time = get_the_time( 'U' );
    $diff = time() - $time;

    if ( $diff < 60 )    return 'Baru saja';
    if ( $diff < 3600 )  return floor( $diff / 60 ) . ' menit lalu';
    if ( $diff < 86400 ) return floor( $diff / 3600 ) . ' jam lalu';
    if ( $diff < 604800 ) return floor( $diff / 86400 ) . ' hari lalu';
    return get_the_date();
}

/**
 * Excerpt with custom length
 */
function jp_excerpt( $length = 20, $post_id = null ) {
    $post_id = $post_id ?: get_the_ID();
    $excerpt = get_the_excerpt( $post_id );
    $words = explode( ' ', $excerpt );
    if ( count( $words ) > $length ) {
        $excerpt = implode( ' ', array_slice( $words, 0, $length ) ) . '...';
    }
    return $excerpt;
}

/**
 * Category badge color mapping
 */
function jp_category_color( $cat_id ) {
    $colors = [
        'politik'       => 'bg-red-600',
        'pemerintahan'  => 'bg-blue-700',
        'ekonomi'       => 'bg-emerald-600',
        'kriminal'      => 'bg-orange-600',
        'pendidikan'    => 'bg-indigo-600',
        'olahraga'      => 'bg-green-600',
        'budaya'        => 'bg-amber-600',
        'wisata'        => 'bg-teal-600',
        'umkm'          => 'bg-pink-600',
    ];

    $cat = get_category( $cat_id );
    if ( ! $cat ) return 'bg-jp-red';

    $slug = strtolower( $cat->slug );
    foreach ( $colors as $key => $color ) {
        if ( strpos( $slug, $key ) !== false ) return $color;
    }
    return 'bg-jp-red';
}

/**
 * Custom except length
 */
add_filter( 'excerpt_length', function() { return 20; } );
add_filter( 'excerpt_more', function() { return '...'; } );

/**
 * Add custom body classes
 */
add_filter( 'body_class', function( $classes ) {
    $classes[] = 'jambi-press-theme';
    if ( is_front_page() ) $classes[] = 'jp-front-page';
    return $classes;
} );

/**
 * Disable WordPress emoji for performance
 */
add_action( 'init', function() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
} );

/**
 * Remove unnecessary head items
 */
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
