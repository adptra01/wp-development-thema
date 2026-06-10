<?php
/**
 * Akar Solution — Customizer Settings
 *
 * @package AkarSolution
 */

if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'customize_register', 'akar_customize_register' );
function akar_customize_register( $wp_customize ): void {

    // ── Panel: Akar Solution ──
    $wp_customize->add_panel( 'akar_panel', [
        'title'    => 'Akar Solution',
        'priority' => 30,
    ] );

    // ── Section: Contact Info ──
    $wp_customize->add_section( 'akar_contact', [
        'title' => 'Contact Info',
        'panel' => 'akar_panel',
    ] );

    // WhatsApp Number
    $wp_customize->add_setting( 'akar_whatsapp', [
        'default'           => '6285951572182',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ] );
    $wp_customize->add_control( 'akar_whatsapp', [
        'label'   => 'WhatsApp Number (with country code)',
        'section' => 'akar_contact',
        'type'    => 'text',
    ] );

    // Email
    $wp_customize->add_setting( 'akar_email', [
        'default'           => 'halo@akarsolution.id',
        'sanitize_callback' => 'sanitize_email',
        'transport'         => 'refresh',
    ] );
    $wp_customize->add_control( 'akar_email', [
        'label'   => 'Email Address',
        'section' => 'akar_contact',
        'type'    => 'email',
    ] );

    // Instagram
    $wp_customize->add_setting( 'akar_instagram', [
        'default'           => 'akarsolution',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ] );
    $wp_customize->add_control( 'akar_instagram', [
        'label'   => 'Instagram Handle (without @)',
        'section' => 'akar_contact',
        'type'    => 'text',
    ] );

    // Address
    $wp_customize->add_setting( 'akar_address', [
        'default'           => 'Jambi, Indonesia',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ] );
    $wp_customize->add_control( 'akar_address', [
        'label'   => 'Address',
        'section' => 'akar_contact',
        'type'    => 'text',
    ] );

    // Working Hours
    $wp_customize->add_setting( 'akar_hours', [
        'default'           => 'Sen—Jum, 09:00–17:00',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ] );
    $wp_customize->add_control( 'akar_hours', [
        'label'   => 'Working Hours',
        'section' => 'akar_contact',
        'type'    => 'text',
    ] );

    // ── Section: Branding ──
    $wp_customize->add_section( 'akar_branding', [
        'title' => 'Branding',
        'panel' => 'akar_panel',
    ] );

    // Brand Name
    $wp_customize->add_setting( 'akar_brand', [
        'default'           => 'Akar Solution',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ] );
    $wp_customize->add_control( 'akar_brand', [
        'label'   => 'Brand Name',
        'section' => 'akar_branding',
        'type'    => 'text',
    ] );

    // Primary Color
    $wp_customize->add_setting( 'akar_color_primary', [
        'default'           => '#111111',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'refresh',
    ] );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'akar_color_primary', [
        'label'   => 'Primary Color',
        'section' => 'akar_branding',
    ] ) );

    // Background Color
    $wp_customize->add_setting( 'akar_color_bg', [
        'default'           => '#f2f2f2',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'refresh',
    ] );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'akar_color_bg', [
        'label'   => 'Background Color',
        'section' => 'akar_branding',
    ] ) );

    // Accent Color
    $wp_customize->add_setting( 'akar_color_accent', [
        'default'           => '#6b7280',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'refresh',
    ] );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'akar_color_accent', [
        'label'   => 'Accent Color (muted text)',
        'section' => 'akar_branding',
    ] ) );
}

/**
 * Output Customizer CSS
 */
add_action( 'wp_head', 'akar_customizer_css', 99 );
function akar_customizer_css(): void {
    $primary = get_theme_mod( 'akar_color_primary', '#111111' );
    $bg      = get_theme_mod( 'akar_color_bg', '#f2f2f2' );
    $accent  = get_theme_mod( 'akar_color_accent', '#6b7280' );
    ?>
    <style id="akar-customizer-css">
      :root {
        --dark: <?php echo esc_attr( $primary ); ?>;
        --bg: <?php echo esc_attr( $bg ); ?>;
        --text-soft: <?php echo esc_attr( $accent ); ?>;
      }
    </style>
    <?php
}
