<?php
/**
 * Asset Enqueueing
 *
 * Minimal — only essential CSS. No JS, no icon libraries, no animations.
 *
 * @package Lumina
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_action( 'wp_enqueue_scripts', 'lumina_assets' );
function lumina_assets(): void {
    // Tailwind CSS (compiled via PostCSS)
    wp_enqueue_style(
        'lumina-tailwind',
        LUMINA_THEME_URI . '/assets/css/tailwind.css',
        [],
        filemtime( LUMINA_THEME_DIR . '/assets/css/tailwind.css' )
    );

    // Main Stylesheet (includes Google Fonts @import + all custom CSS)
    wp_enqueue_style(
        'lumina-style',
        LUMINA_THEME_URI . '/assets/css/lumina.css',
        [ 'lumina-tailwind' ],
        LUMINA_VERSION
    );
}
