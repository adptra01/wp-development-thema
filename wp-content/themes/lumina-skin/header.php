<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class( 'min-h-screen bg-[#1b2320] text-emerald-50 antialiased font-sans' ); ?>>
<?php wp_body_open(); ?>
<div class="min-h-screen flex flex-col">
<header class="border-b border-emerald-900/50 bg-[#1b2320]/90 backdrop-blur-sm">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex items-center justify-between gap-4">
    <div class="flex items-center gap-2">
      <?php if ( has_custom_logo() ) : ?>
        <div class="flex items-center">
          <?php the_custom_logo(); ?>
        </div>
      <?php else : ?>
        <span class="text-lg font-semibold tracking-tight font-playfair text-emerald-50"><?php bloginfo( 'name' ); ?></span>
      <?php endif; ?>
    </div>
    <nav class="hidden md:flex items-center gap-7 text-sm text-emerald-200/80">
      <a href="#" class="hover:text-emerald-50 transition-colors"><?php esc_html_e( 'Rituals', 'lumina-skin' ); ?></a>
      <a href="#" class="hover:text-emerald-50 transition-colors"><?php esc_html_e( 'Ingredients', 'lumina-skin' ); ?></a>
      <a href="#" class="hover:text-emerald-50 transition-colors"><?php esc_html_e( 'Results', 'lumina-skin' ); ?></a>
      <a href="#" class="hover:text-emerald-50 transition-colors"><?php esc_html_e( 'Stories', 'lumina-skin' ); ?></a>
    </nav>
    <div class="flex items-center gap-3">
      <button class="hidden sm:inline-flex items-center gap-2 rounded-full border border-emerald-800/80 px-3.5 py-1.5 text-xs font-medium text-emerald-100 hover:border-emerald-500 hover:bg-emerald-900/30 transition-colors">
        <span><?php esc_html_e( 'Sign in', 'lumina-skin' ); ?></span>
      </button>
      <button class="inline-flex items-center gap-2 rounded-full bg-emerald-400 text-emerald-950 px-4 py-2 text-xs sm:text-sm font-medium hover:bg-emerald-300 hover:shadow-sm transition-colors">
        <span><?php esc_html_e( 'Shop ritual', 'lumina-skin' ); ?></span>
        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" style="stroke-width:1.5" aria-hidden="true"><path fill="currentColor" d="m14.707 5.636l5.657 5.657a1 1 0 0 1 0 1.414l-5.657 5.657a1 1 0 0 1-1.414-1.414l3.95-3.95H4a1 1 0 1 1 0-2h13.243l-3.95-3.95a1 1 0 1 1 1.414-1.414"/></svg>
      </button>
    </div>
  </div>
</header>
<main class="flex-1 w-full">
