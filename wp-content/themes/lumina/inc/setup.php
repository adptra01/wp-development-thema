<?php
/**
 * Theme Setup
 *
 * @package Lumina
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_action( 'after_setup_theme', 'lumina_setup' );
function lumina_setup(): void {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', [
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ] );
    add_theme_support( 'html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ] );
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'custom-spacing' );
    add_theme_support( 'wp-block-styles' );

    load_theme_textdomain( 'lumina', LUMINA_THEME_DIR . '/languages' );
}

add_filter( 'body_class', 'lumina_body_classes' );
function lumina_body_classes( array $classes ): array {
    if ( is_front_page() ) {
        $classes[] = 'front-page';
    }
    $classes[] = 'bg-[#09090b]';
    return $classes;
}
