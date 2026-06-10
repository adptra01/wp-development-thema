<?php
/**
 * Akar Solution — Shared design system
 * Navigation + icon loading. CSS is enqueued via functions.php.
 * Pair with template-parts/ak-chrome-foot.php at the bottom.
 *
 * @package AkarSolution
 */

if ( ! defined( 'ABSPATH' ) ) exit;
require_once get_stylesheet_directory() . '/template-parts/ak-icons.php';

$brand    = function_exists( 'akar_brand' ) ? akar_brand() : 'Akar Solution';
$wa_url   = function_exists( 'akar_whatsapp_url' ) ? akar_whatsapp_url() : '#';
?>
<nav class="ak-nav" id="akNav">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ak-nav-logo"><?php echo esc_html( $brand ); ?></a>
  <ul class="ak-nav-links">
    <li class="ak-nav-has-dropdown">
      <a href="<?php echo esc_url( home_url( '/services' ) ); ?>"><?php esc_html_e( 'Layanan', 'akar-solution' ); ?></a>
      <ul class="ak-nav-dropdown">
        <li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>"><?php esc_html_e( 'Semua Layanan', 'akar-solution' ); ?></a></li>
        <li class="ak-nav-dropdown-divider"></li>
        <li><a href="<?php echo esc_url( home_url( '/services/website-umkm' ) ); ?>"><?php esc_html_e( 'Website UMKM', 'akar-solution' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/services/aplikasi-custom' ) ); ?>"><?php esc_html_e( 'Aplikasi Custom', 'akar-solution' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/services/maintenance' ) ); ?>"><?php esc_html_e( 'Maintenance', 'akar-solution' ); ?></a></li>
        <li class="ak-nav-dropdown-divider"></li>
        <li><a href="<?php echo esc_url( home_url( '/services/mentoring-skripsi' ) ); ?>"><?php esc_html_e( 'Mentoring Skripsi', 'akar-solution' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/services/konsultasi-proyek' ) ); ?>"><?php esc_html_e( 'Konsultasi Proyek', 'akar-solution' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/services/code-review' ) ); ?>"><?php esc_html_e( 'Code Review', 'akar-solution' ); ?></a></li>
      </ul>
    </li>
    <li><a href="<?php echo esc_url( home_url( '/pricing' ) ); ?>"><?php esc_html_e( 'Harga', 'akar-solution' ); ?></a></li>
    <li><a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>"><?php esc_html_e( 'Portfolio', 'akar-solution' ); ?></a></li>
    <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>"><?php esc_html_e( 'Tentang', 'akar-solution' ); ?></a></li>
    <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>"><?php esc_html_e( 'Blog', 'akar-solution' ); ?></a></li>
  </ul>
  <div class="ak-nav-cta-wrap">
    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="ak-nav-cta"><?php esc_html_e( 'Konsultasi', 'akar-solution' ); ?></a>
  </div>
</nav>
