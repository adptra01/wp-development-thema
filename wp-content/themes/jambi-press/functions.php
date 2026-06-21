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
    add_theme_support( 'automatic-feed-links' );
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
    add_image_size( 'jp-square', 200, 200, true );
    add_image_size( 'jp-list', 120, 80, true );
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
        'before_widget' => '<div style="margin-bottom:24px;">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 style="font-size:1.125rem; font-weight:800; margin:0 0 12px; padding:0 0 8px; border-bottom:3px solid var(--jp-red);">',
        'after_title'   => '</h3>',
    ] );

    register_sidebar( [
        'name'          => __( 'Area Iklan Atas', 'jambi-press' ),
        'id'            => 'ad-top',
        'before_widget' => '<div class="jp-ad" style="width:100%; height:96px; margin-bottom:24px;">',
        'after_widget'  => '</div>',
        'before_title'  => '<span style="position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0;">',
        'after_title'   => '</span>',
    ] );

    register_sidebar( [
        'name'          => __( 'Area Iklan Bawah', 'jambi-press' ),
        'id'            => 'ad-bottom',
        'before_widget' => '<div class="jp-ad" style="width:100%; height:96px; margin-bottom:24px;">',
        'after_widget'  => '</div>',
        'before_title'  => '<span style="position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0;">',
        'after_title'   => '</span>',
    ] );

    register_sidebar( [
        'name'          => __( 'Footer Widget 1', 'jambi-press' ),
        'id'            => 'footer-1',
        'before_widget' => '<div style="margin-bottom:24px;">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 style="font-size:.8125rem; font-weight:800; text-transform:uppercase; letter-spacing:.14em; color:var(--jp-white); margin:0 0 16px;">',
        'after_title'   => '</h4>',
    ] );

    register_sidebar( [
        'name'          => __( 'Footer Widget 2', 'jambi-press' ),
        'id'            => 'footer-2',
        'before_widget' => '<div style="margin-bottom:24px;">',
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
 * Custom except length
 */
add_filter( 'excerpt_length', function() { return 20; } );
add_filter( 'excerpt_more', function() { return '...'; } );

/**
 * Placeholder image for posts without featured image
 */
function jp_placeholder_img( $width = 600, $height = 400 ) {
    $color = '#E5E5E5';
    $text_color = '#A3A3A3';
    $text = 'Jambi Press';
    return 'data:image/svg+xml,' . rawurlencode( '<svg xmlns="http://www.w3.org/2000/svg" width="' . $width . '" height="' . $height . '" viewBox="0 0 ' . $width . ' ' . $height . '"><rect fill="' . $color . '" width="' . $width . '" height="' . $height . '"/><text fill="' . $text_color . '" font-family="system-ui,sans-serif" font-size="14" font-weight="600" text-anchor="middle" x="' . ($width/2) . '" y="' . ($height/2) . '" dominant-baseline="middle">' . $text . '</text></svg>' );
}

/**
 * Get post thumbnail or placeholder
 */
function jp_post_thumb( $size = 'jp-thumb', $width = 600, $height = 400, $loading = 'lazy' ) {
    if ( has_post_thumbnail() ) {
        the_post_thumbnail( $size, [ 'style' => 'width:100%; height:100%; object-fit:cover;', 'loading' => $loading ] );
    } else {
        echo '<img src="' . jp_placeholder_img( $width, $height ) . '" alt="" style="width:100%; height:100%; object-fit:cover;" loading="' . $loading . '">';
    }
}

/**
 * Check if post is sponsored / advertorial
 */
function jp_is_sponsored( $post_id = null ) {
    $post_id = $post_id ?: get_the_ID();
    return get_post_meta( $post_id, 'jp_sponsored', true ) === '1';
}

function jp_sponsored_badge( $post_id = null ) {
    if ( jp_is_sponsored( $post_id ) ) {
        echo '<span class="jp-sponsor">Sponsored</span>';
    }
}

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
 * Enable Yoast breadcrumb support
 */
add_theme_support( 'yoast-seo-breadcrumbs' );

/**
 * Remove unnecessary head items
 */
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );

/**
 * Auto-create required pages on theme activation
 */
add_action( 'after_switch_theme', function() {
    $pages = [
        'e-paper' => [
            'title'   => 'E-Paper',
            'content' => 'Edisi digital Jambi Press dapat diakses di sini. Pilih edisi terbaru atau cari arsip berdasarkan tanggal.',
            'template'=> 'template-epaper.php',
        ],
        'hubungi-redaksi' => [
            'title'   => 'Kontak Redaksi',
            'content' => 'Hubungi redaksi Jambi Press untuk informasi, pengaduan, atau kerja sama.',
            'template'=> 'template-contact.php',
        ],
        'pedoman-media-siber' => [
            'title'   => 'Pedoman Media Siber',
            'content' => 'Jambi Press berkomitmen mengikuti Pedoman Media Siber Indonesia dalam setiap aspek pemberitaan dan pengelolaan media.',
            'template'=> 'template-pedoman.php',
        ],
        'kebijakan-privasi' => [
            'title'   => 'Kebijakan Privasi',
            'content' => 'Kebijakan privasi Jambi Press mengatur pengumpulan, penggunaan, dan perlindungan data pribadi pengguna.',
            'template'=> '',
        ],
        'tentang-kami' => [
            'title'   => 'Tentang Kami',
            'content' => 'Jambi Press adalah portal media digital resmi untuk Provinsi Jambi. Berita kredibel, cepat, dan independen.',
            'template'=> '',
        ],
    ];

    foreach ( $pages as $slug => $page ) {
        $existing = get_posts( [ 'name' => $slug, 'post_type' => 'page', 'post_status' => 'any', 'posts_per_page' => 1 ] );
        if ( ! $existing ) {
            $id = wp_insert_post( [
                'post_title'   => $page['title'],
                'post_content' => $page['content'],
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_name'    => $slug,
            ] );
            if ( $id && $page['template'] ) {
                update_post_meta( $id, '_wp_page_template', $page['template'] );
            }
        }
    }
} );
