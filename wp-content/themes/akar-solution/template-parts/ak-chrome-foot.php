<?php
/**
 * Akar Solution — Footer + Floating CTA
 * JS is enqueued via functions.php.
 *
 * @package AkarSolution
 */
if ( ! defined( 'ABSPATH' ) ) exit;

$brand      = function_exists( 'akar_brand' ) ? akar_brand() : 'Akar Solution';
$wa_url     = function_exists( 'akar_whatsapp_url' ) ? akar_whatsapp_url() : '#';
$wa_chat    = function_exists( 'akar_whatsapp_url' ) ? akar_whatsapp_url( 'Halo Akar Solution, saya tertarik dengan layanan Anda.' ) : '#';
$email      = function_exists( 'akar_email' ) ? akar_email() : 'halo@akarsolution.id';
$address    = function_exists( 'akar_address' ) ? akar_address() : 'Jambi, Indonesia';
$hours      = function_exists( 'akar_hours' ) ? akar_hours() : 'Sen—Jum, 09:00–17:00';
$instagram  = function_exists( 'akar_instagram' ) ? akar_instagram() : 'akarsolution';
?>

<footer class="ak-footer">
  <div class="ak-footer-grid">
    <div>
      <div class="ak-footer-brand"><?php echo esc_html( $brand ); ?></div>
      <p><?php esc_html_e( 'Mitra digital terpercaya — website profesional, aplikasi custom, dan pendampingan IT untuk bisnis lokal dan mahasiswa.', 'akar-solution' ); ?></p>
    </div>
    <div>
      <h4><?php esc_html_e( 'Layanan', 'akar-solution' ); ?></h4>
      <a href="<?php echo esc_url( home_url( '/services/website-umkm' ) ); ?>"><?php esc_html_e( 'Website UMKM', 'akar-solution' ); ?></a>
      <a href="<?php echo esc_url( home_url( '/services/aplikasi-custom' ) ); ?>"><?php esc_html_e( 'Aplikasi Custom', 'akar-solution' ); ?></a>
      <a href="<?php echo esc_url( home_url( '/services/maintenance' ) ); ?>"><?php esc_html_e( 'Maintenance', 'akar-solution' ); ?></a>
      <a href="<?php echo esc_url( home_url( '/services/mentoring-skripsi' ) ); ?>"><?php esc_html_e( 'Mentoring Skripsi', 'akar-solution' ); ?></a>
      <a href="<?php echo esc_url( home_url( '/services/code-review' ) ); ?>"><?php esc_html_e( 'Code Review', 'akar-solution' ); ?></a>
      <a href="<?php echo esc_url( home_url( '/pricing' ) ); ?>"><?php esc_html_e( 'Harga', 'akar-solution' ); ?></a>
    </div>
    <div>
      <h4><?php esc_html_e( 'Perusahaan', 'akar-solution' ); ?></h4>
      <a href="<?php echo esc_url( home_url( '/about' ) ); ?>"><?php esc_html_e( 'Tentang', 'akar-solution' ); ?></a>
      <a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>"><?php esc_html_e( 'Portfolio', 'akar-solution' ); ?></a>
      <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>"><?php esc_html_e( 'Blog', 'akar-solution' ); ?></a>
      <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Kontak', 'akar-solution' ); ?></a>
    </div>
    <div>
      <h4><?php esc_html_e( 'Hubungi', 'akar-solution' ); ?></h4>
      <a href="<?php echo esc_url( $wa_url ); ?>" target="_blank" rel="noopener"><?php echo esc_html( $address ); ?></a>
      <a><span class="ak-ic-inline"><?php echo ak_icon('pin'); ?></span> <?php echo esc_html( $address ); ?></a>
      <a><span class="ak-ic-inline"><?php echo ak_icon('clock'); ?></span> <?php echo esc_html( $hours ); ?></a>
    </div>
  </div>
  <div class="ak-footer-bottom">
    &copy; <?php echo esc_html( date('Y') ); ?> <?php echo esc_html( $brand ); ?>. <?php esc_html_e( 'All rights reserved.', 'akar-solution' ); ?>
    <span class="ak-footer-credit">Illustrations by <a href="https://www.streamlinehq.com/illustrations" target="_blank" rel="noopener">Streamline</a> (CC BY 4.0)</span>
  </div>
</footer>

<div class="ak-float">
  <a href="<?php echo esc_url( $wa_chat ); ?>" target="_blank" rel="noopener" title="<?php esc_attr_e( 'Chat via WhatsApp', 'akar-solution' ); ?>" aria-label="<?php esc_attr_e( 'Chat via WhatsApp', 'akar-solution' ); ?>"><?php echo ak_icon('message'); ?></a>
</div>
