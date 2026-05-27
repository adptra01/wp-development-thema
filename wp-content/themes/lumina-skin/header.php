<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class( 'min-h-screen bg-white text-[#2E1065] antialiased font-sans' ); ?>>
<?php wp_body_open(); ?>
<a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:inset-2 focus:z-[100] focus:flex focus:items-center focus:justify-center focus:rounded-lg focus:bg-white focus:px-4 focus:py-2 focus:text-sm focus:font-medium focus:text-[#2E1065] focus:shadow-lg focus:ring-2 focus:ring-[#8B5CF6]"><?php esc_html_e( 'Skip to content', 'lumina-skin' ); ?></a>
<div class="min-h-screen flex flex-col">
<header class="border-b border-[#DDD6FE] bg-white/90 backdrop-blur-sm sticky top-0 z-50">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex items-center justify-between gap-4">
    <div class="flex items-center gap-2">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center">
        <?php if ( has_custom_logo() ) : ?>
          <?php the_custom_logo(); ?>
        <?php else : ?>
          <span class="text-lg font-semibold tracking-tight font-playfair text-[#2E1065]"><?php bloginfo( 'name' ); ?></span>
        <?php endif; ?>
      </a>
    </div>
    <nav class="hidden md:flex items-center gap-7 text-sm text-[#6D28D9]/80">
      <a href="<?php echo esc_url( is_front_page() ? '#produk' : lumina_page_url( 'produk' ) ); ?>" class="hover:text-[#2E1065] transition-colors"><?php esc_html_e( 'Produk', 'lumina-skin' ); ?></a>
      <a href="<?php echo esc_url( is_front_page() ? '#kandungan' : lumina_page_url( 'kandungan' ) ); ?>" class="hover:text-[#2E1065] transition-colors"><?php esc_html_e( 'Kandungan', 'lumina-skin' ); ?></a>
      <a href="<?php echo esc_url( is_front_page() ? '#review' : lumina_page_url( 'review' ) ); ?>" class="hover:text-[#2E1065] transition-colors"><?php esc_html_e( 'Review', 'lumina-skin' ); ?></a>
      <a href="<?php echo esc_url( lumina_page_url( 'tips' ) ); ?>" class="hover:text-[#2E1065] transition-colors"><?php esc_html_e( 'Tips', 'lumina-skin' ); ?></a>
      <a href="<?php echo esc_url( lumina_page_url( 'faq' ) ); ?>" class="hover:text-[#2E1065] transition-colors"><?php esc_html_e( 'FAQ', 'lumina-skin' ); ?></a>
      <a href="<?php echo esc_url( lumina_page_url( 'kontak' ) ); ?>" class="hover:text-[#2E1065] transition-colors"><?php esc_html_e( 'Kontak', 'lumina-skin' ); ?></a>
    </nav>
    <div class="flex items-center gap-3">
      <a href="https://www.tokopedia.com/glad2glow" target="_blank" rel="noopener noreferrer" class="hidden sm:inline-flex items-center gap-2 rounded-full bg-[#8B5CF6] text-white px-4 py-2 text-xs sm:text-sm font-medium hover:bg-[#7C3AED] hover:shadow-sm transition-colors no-underline">
        <span><?php esc_html_e( 'Belanja', 'lumina-skin' ); ?></span>
        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" style="stroke-width:1.5" aria-hidden="true"><path fill="currentColor" d="m14.707 5.636l5.657 5.657a1 1 0 0 1 0 1.414l-5.657 5.657a1 1 0 0 1-1.414-1.414l3.95-3.95H4a1 1 0 1 1 0-2h13.243l-3.95-3.95a1 1 0 1 1 1.414-1.414"/></svg>
      </a>
      <button id="menu-toggle" class="md:hidden inline-flex items-center justify-center p-2 rounded-lg text-[#6D28D9] hover:text-[#2E1065] hover:bg-[#FDF2F8] transition-colors" aria-label="<?php esc_attr_e( 'Toggle menu', 'lumina-skin' ); ?>" aria-expanded="false">
        <svg id="menu-icon-open" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
        <svg id="menu-icon-close" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="hidden"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
      </button>
    </div>
  </div>
  <div id="mobile-menu" class="md:hidden hidden border-t border-[#DDD6FE] bg-white/95 backdrop-blur-sm">
    <nav class="flex flex-col px-4 py-4 space-y-3 text-sm text-[#6D28D9]/80">
      <a href="<?php echo esc_url( is_front_page() ? '#produk' : lumina_page_url( 'produk' ) ); ?>" class="hover:text-[#2E1065] transition-colors py-2"><?php esc_html_e( 'Produk', 'lumina-skin' ); ?></a>
      <a href="<?php echo esc_url( is_front_page() ? '#kandungan' : lumina_page_url( 'kandungan' ) ); ?>" class="hover:text-[#2E1065] transition-colors py-2"><?php esc_html_e( 'Kandungan', 'lumina-skin' ); ?></a>
      <a href="<?php echo esc_url( is_front_page() ? '#review' : lumina_page_url( 'review' ) ); ?>" class="hover:text-[#2E1065] transition-colors py-2"><?php esc_html_e( 'Review', 'lumina-skin' ); ?></a>
      <a href="<?php echo esc_url( lumina_page_url( 'tips' ) ); ?>" class="hover:text-[#2E1065] transition-colors py-2"><?php esc_html_e( 'Tips', 'lumina-skin' ); ?></a>
      <a href="<?php echo esc_url( lumina_page_url( 'faq' ) ); ?>" class="hover:text-[#2E1065] transition-colors py-2"><?php esc_html_e( 'FAQ', 'lumina-skin' ); ?></a>
      <a href="<?php echo esc_url( lumina_page_url( 'kontak' ) ); ?>" class="hover:text-[#2E1065] transition-colors py-2"><?php esc_html_e( 'Kontak', 'lumina-skin' ); ?></a>
      <a href="https://www.tokopedia.com/glad2glow" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 rounded-full bg-[#8B5CF6] text-white px-4 py-2 text-sm font-medium hover:bg-[#7C3AED] transition-colors no-underline mt-2">
        <span><?php esc_html_e( 'Belanja', 'lumina-skin' ); ?></span>
        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" style="stroke-width:1.5" aria-hidden="true"><path fill="currentColor" d="m14.707 5.636l5.657 5.657a1 1 0 0 1 0 1.414l-5.657 5.657a1 1 0 0 1-1.414-1.414l3.95-3.95H4a1 1 0 1 1 0-2h13.243l-3.95-3.95a1 1 0 1 1 1.414-1.414"/></svg>
      </a>
    </nav>
  </div>
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    var toggle = document.getElementById('menu-toggle');
    if (toggle) {
      toggle.addEventListener('click', function() {
        var menu = document.getElementById('mobile-menu');
        var open = document.getElementById('menu-icon-open');
        var close = document.getElementById('menu-icon-close');
        var expanded = this.getAttribute('aria-expanded') === 'true';
        menu.classList.toggle('hidden');
        open.classList.toggle('hidden');
        close.classList.toggle('hidden');
        this.setAttribute('aria-expanded', !expanded);
      });
    }
  });
  </script>
</header>
<main id="main-content" class="flex-1 w-full">
