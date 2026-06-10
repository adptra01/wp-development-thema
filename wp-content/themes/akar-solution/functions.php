<?php
/**
 * Akar Solution — Child Theme functions.php
 *
 * @package AkarSolution
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'AKAR_VERSION', '1.0.0' );
define( 'AKAR_PATH', get_stylesheet_directory() );
define( 'AKAR_URI', get_stylesheet_directory_uri() );

/**
 * Enqueue parent + child styles + fonts
 */
add_action( 'wp_enqueue_scripts', 'akar_enqueue_assets' );
function akar_enqueue_assets(): void {
    // Parent theme
    wp_enqueue_style(
        'hello-elementor',
        get_template_directory_uri() . '/style.css',
        [],
        wp_get_theme( 'hello-elementor' )->get( 'Version' )
    );

    // Child theme CSS
    wp_enqueue_style(
        'akar-main',
        AKAR_URI . '/assets/css/akar.css',
        [ 'hello-elementor' ],
        AKAR_VERSION
    );

    // Child theme JS
    wp_enqueue_script(
        'akar-main',
        AKAR_URI . '/assets/js/akar.js',
        [],
        AKAR_VERSION,
        true
    );

    // FontShare fonts
    wp_enqueue_style(
        'akar-fonts',
        'https://api.fontshare.com/v2/css?f[]=clash-display@400,500,600,700&f[]=satoshi@400,500,700&display=swap',
        [],
        null
    );
}

/**
 * Include icon library
 */
require_once AKAR_PATH . '/template-parts/ak-icons.php';

/**
 * Customizer settings
 */
require_once AKAR_PATH . '/includes/customizer.php';

/**
 * Helper: get WhatsApp number
 */
function akar_whatsapp_number(): string {
    return get_theme_mod( 'akar_whatsapp', '6285951572182' );
}

/**
 * Helper: get WhatsApp URL
 */
function akar_whatsapp_url( string $message = '' ): string {
    $number = akar_whatsapp_number();
    $text   = $message ? rawurlencode( $message ) : rawurlencode( 'Halo Akar Solution, saya tertarik dengan layanan Anda.' );
    return "https://wa.me/{$number}?text={$text}";
}

/**
 * Helper: get email
 */
function akar_email(): string {
    return get_theme_mod( 'akar_email', 'halo@akarsolution.id' );
}

/**
 * Helper: get Instagram handle
 */
function akar_instagram(): string {
    return get_theme_mod( 'akar_instagram', 'akarsolution' );
}

/**
 * Helper: get brand name
 */
function akar_brand(): string {
    return get_theme_mod( 'akar_brand', 'Akar Solution' );
}

/**
 * Helper: get address
 */
function akar_address(): string {
    return get_theme_mod( 'akar_address', 'Jambi, Indonesia' );
}

/**
 * Helper: get working hours
 */
function akar_hours(): string {
    return get_theme_mod( 'akar_hours', 'Sen—Jum, 09:00–17:00' );
}
