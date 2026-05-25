<?php
/**
 * CreatorFlow Theme Functions
 *
 * @package CreatorFlow
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'CREATORFLOW_VERSION', '1.0.0' );
define( 'CREATORFLOW_THEME_URI', get_template_directory_uri() );
define( 'CREATORFLOW_IMG', 'https://picsum.photos/seed' );

add_action( 'after_setup_theme', 'creatorflow_setup' );
function creatorflow_setup(): void {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', [
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ] );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ] );
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );

    register_nav_menus( [
        'primary' => esc_html__( 'Primary Menu', 'creatorflow' ),
        'footer'  => esc_html__( 'Footer Menu', 'creatorflow' ),
    ] );
}

add_action( 'wp_head', 'creatorflow_resource_hints', 1 );
function creatorflow_resource_hints(): void {
    $origins = [
        'https://fonts.googleapis.com',
        'https://fonts.gstatic.com',
        'https://cdn.tailwindcss.com',
        'https://code.iconify.design',
        'https://cdnjs.cloudflare.com',
        'https://picsum.photos',
    ];

    foreach ( $origins as $origin ) {
        echo '<link rel="dns-prefetch" href="' . esc_url( $origin ) . '">' . "\n";
        echo '<link rel="preconnect" href="' . esc_url( $origin ) . '" crossorigin>' . "\n";
    }
}

add_action( 'wp_enqueue_scripts', 'creatorflow_assets' );
function creatorflow_assets(): void {
    wp_enqueue_style(
        'creatorflow-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=Manrope:wght@400;500;600&display=swap',
        [],
        CREATORFLOW_VERSION
    );

    wp_enqueue_script(
        'creatorflow-tailwind',
        'https://cdn.tailwindcss.com',
        [],
        '3.4',
        false
    );

    wp_enqueue_script(
        'creatorflow-iconify',
        'https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js',
        [],
        '1.0.7',
        true
    );

    wp_enqueue_script(
        'creatorflow-gsap',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js',
        [],
        '3.12.5',
        true
    );

    wp_enqueue_script(
        'creatorflow-gsap-scroll',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js',
        [ 'creatorflow-gsap' ],
        '3.12.5',
        true
    );

    wp_add_inline_script( 'creatorflow-tailwind', '
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ["Inter", "sans-serif"],
                        heading: ["Manrope", "sans-serif"],
                    },
                    colors: {
                        brand: {
                            dark: "#112345",
                            pink: "#FB2875",
                            light: "#f8fafc",
                        },
                    },
                },
            },
        };
    ' );

    wp_enqueue_style(
        'creatorflow-style',
        CREATORFLOW_THEME_URI . '/assets/css/style.css',
        [ 'creatorflow-google-fonts' ],
        CREATORFLOW_VERSION
    );

    wp_enqueue_script(
        'creatorflow-main',
        CREATORFLOW_THEME_URI . '/assets/js/main.js',
        [ 'creatorflow-gsap', 'creatorflow-gsap-scroll' ],
        CREATORFLOW_VERSION,
        true
    );
}

add_filter( 'script_loader_tag', 'creatorflow_async_scripts', 10, 2 );
function creatorflow_async_scripts( string $tag, string $handle ): string {
    $async_handles = [ 'creatorflow-iconify' ];
    if ( in_array( $handle, $async_handles, true ) ) {
        $tag = str_replace( ' src', ' async src', $tag );
    }
    return $tag;
}

add_filter( 'body_class', 'creatorflow_body_classes' );
function creatorflow_body_classes( array $classes ): array {
    if ( is_front_page() ) {
        $classes[] = 'front-page';
    }
    return $classes;
}

add_action( 'init', 'creatorflow_register_post_types' );
function creatorflow_register_post_types(): void {
    register_post_type( 'cf_service', [
        'labels'       => [
            'name'          => esc_html__( 'Services', 'creatorflow' ),
            'singular_name' => esc_html__( 'Service', 'creatorflow' ),
            'add_new'       => esc_html__( 'Add New Service', 'creatorflow' ),
            'edit_item'     => esc_html__( 'Edit Service', 'creatorflow' ),
            'menu_name'     => esc_html__( 'Services', 'creatorflow' ),
        ],
        'public'       => true,
        'has_archive'  => false,
        'show_in_rest' => true,
        'menu_icon'    => 'dashicons-megaphone',
        'supports'     => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
        'rewrite'      => [ 'slug' => 'services' ],
    ] );

    register_post_type( 'cf_team', [
        'labels'       => [
            'name'          => esc_html__( 'Team', 'creatorflow' ),
            'singular_name' => esc_html__( 'Team Member', 'creatorflow' ),
            'add_new'       => esc_html__( 'Add New Member', 'creatorflow' ),
            'edit_item'     => esc_html__( 'Edit Member', 'creatorflow' ),
            'menu_name'     => esc_html__( 'Team', 'creatorflow' ),
        ],
        'public'       => true,
        'has_archive'  => false,
        'show_in_rest' => true,
        'menu_icon'    => 'dashicons-groups',
        'supports'     => [ 'title', 'editor', 'thumbnail' ],
        'rewrite'      => [ 'slug' => 'team' ],
    ] );
}

function creatorflow_nav_items(): array {
    $loc     = get_nav_menu_locations();
    $menu_id = $loc['primary'] ?? 0;

    $site_url       = untrailingslashit( home_url() );
    $excluded_urls  = [
        $site_url,
        $site_url . '/blog',
        $site_url . '/about',
        $site_url . '/contact',
    ];

    $page_links = [];
    if ( $menu_id && ( $menu = wp_get_nav_menu_object( $menu_id ) ) ) {
        $menu_items = wp_get_nav_menu_items( $menu->term_id );
        if ( $menu_items ) {
            foreach ( $menu_items as $item ) {
                if ( in_array( untrailingslashit( $item->url ), $excluded_urls, true ) ) {
                    continue;
                }
                $page_links[] = [
                    'url'   => $item->url,
                    'label' => $item->title,
                ];
            }
        }
    }

    if ( is_front_page() ) {
        return $page_links;
    }

    return $page_links;
}

function creatorflow_solar_icon( string $icon, int $size = 20 ): string {
    return '<iconify-icon icon="solar:' . esc_attr( $icon ) . '" width="' . $size . '" height="' . $size . '" stroke-width="1.5"></iconify-icon>';
}

add_action( 'admin_post_creatorflow_contact_submit', 'creatorflow_handle_contact' );
add_action( 'admin_post_nopriv_creatorflow_contact_submit', 'creatorflow_handle_contact' );
function creatorflow_handle_contact(): void {
    $nonce = sanitize_text_field( wp_unslash( $_POST['cf_contact_nonce'] ?? '' ) );
    if ( ! wp_verify_nonce( $nonce, 'creatorflow_contact' ) ) {
        wp_die( esc_html__( 'Security check failed.', 'creatorflow' ) );
    }

    $name    = sanitize_text_field( wp_unslash( $_POST['cf_name'] ?? '' ) );
    $email   = sanitize_email( wp_unslash( $_POST['cf_email'] ?? '' ) );
    $subject = sanitize_text_field( wp_unslash( $_POST['cf_subject'] ?? '' ) );
    $message = sanitize_textarea_field( wp_unslash( $_POST['cf_message'] ?? '' ) );

    if ( ! $name || ! $email || ! $subject || ! $message ) {
        wp_safe_redirect( add_query_arg( 'cf_status', 'empty', wp_get_referer() ) );
        exit;
    }

    $to      = get_option( 'admin_email' );
    $headers = [
        'Content-Type: text/html; charset=UTF-8',
        'From: ' . $name . ' <' . $email . '>',
        'Reply-To: ' . $email,
    ];
    $email_subject = '[Contact] ' . $subject;
    $email_body    = '<p><strong>Name:</strong> ' . esc_html( $name ) . '</p>';
    $email_body   .= '<p><strong>Email:</strong> ' . esc_html( $email ) . '</p>';
    $email_body   .= '<p><strong>Subject:</strong> ' . esc_html( $subject ) . '</p>';
    $email_body   .= '<p><strong>Message:</strong></p><p>' . nl2br( esc_html( $message ) ) . '</p>';

    $sent = wp_mail( $to, $email_subject, $email_body, $headers );

    $status = $sent ? 'sent' : 'error';
    wp_safe_redirect( add_query_arg( 'cf_status', $status, wp_get_referer() ) );
    exit;
}

add_action( 'admin_post_cf_mentor_apply_submit', 'creatorflow_handle_mentor_apply' );
add_action( 'admin_post_nopriv_cf_mentor_apply_submit', 'creatorflow_handle_mentor_apply' );
function creatorflow_handle_mentor_apply(): void {
    $nonce = sanitize_text_field( wp_unslash( $_POST['cf_mentor_nonce'] ?? '' ) );
    if ( ! wp_verify_nonce( $nonce, 'cf_mentor_apply' ) ) {
        wp_die( esc_html__( 'Security check failed.', 'creatorflow' ) );
    }

    $name     = sanitize_text_field( wp_unslash( $_POST['mentor_name'] ?? '' ) );
    $email    = sanitize_email( wp_unslash( $_POST['mentor_email'] ?? '' ) );
    $platform = sanitize_text_field( wp_unslash( $_POST['mentor_platform'] ?? '' ) );
    $social   = esc_url_raw( wp_unslash( $_POST['mentor_social'] ?? '' ) );
    $audience = sanitize_text_field( wp_unslash( $_POST['mentor_audience'] ?? '' ) );
    $expertise = sanitize_textarea_field( wp_unslash( $_POST['mentor_expertise'] ?? '' ) );
    $bio      = sanitize_textarea_field( wp_unslash( $_POST['mentor_bio'] ?? '' ) );

    if ( ! $name || ! $email || ! $platform || ! $social || ! $bio ) {
        wp_safe_redirect( add_query_arg( 'mf_status', 'empty', wp_get_referer() ) );
        exit;
    }

    $to      = get_option( 'admin_email' );
    $headers = [
        'Content-Type: text/html; charset=UTF-8',
        'From: Mentor Application <' . $email . '>',
        'Reply-To: ' . $email,
    ];
    $body  = '<h2>Mentor Application</h2>';
    $body .= '<p><strong>Name:</strong> ' . esc_html( $name ) . '</p>';
    $body .= '<p><strong>Email:</strong> ' . esc_html( $email ) . '</p>';
    $body .= '<p><strong>Platform:</strong> ' . esc_html( $platform ) . '</p>';
    $body .= '<p><strong>URL:</strong> ' . esc_url( $social ) . '</p>';
    $body .= '<p><strong>Audience:</strong> ' . esc_html( $audience ) . '</p>';
    $body .= '<p><strong>Expertise:</strong></p><p>' . nl2br( esc_html( $expertise ) ) . '</p>';
    $body .= '<p><strong>Bio:</strong></p><p>' . nl2br( esc_html( $bio ) ) . '</p>';

    $sent = wp_mail( $to, '[Mentor Application] ' . $name, $body, $headers );

    $status = $sent ? 'sent' : 'error';
    wp_safe_redirect( add_query_arg( 'mf_status', $status, wp_get_referer() ) );
    exit;
}
