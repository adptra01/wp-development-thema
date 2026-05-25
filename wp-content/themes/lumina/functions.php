<?php
/**
 * Lumina Theme Functions
 *
 * @package Lumina
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'LUMINA_VERSION', '1.0.0' );
define( 'LUMINA_THEME_URI', get_template_directory_uri() );
define( 'LUMINA_THEME_DIR', get_template_directory() );

require_once LUMINA_THEME_DIR . '/inc/setup.php';
require_once LUMINA_THEME_DIR . '/inc/enqueue.php';
