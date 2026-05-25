<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'bg-white text-brand-dark antialiased selection:bg-brand-pink/20 selection:text-brand-dark font-sans overflow-x-hidden relative' ); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">

<!-- Container Lines -->
<div class="fixed inset-y-0 left-1/2 hidden w-full max-w-7xl -translate-x-1/2 lg:block pointer-events-none z-0" aria-hidden="true">
    <div class="absolute inset-y-0 left-4 w-px bg-brand-dark/5"></div>
    <div class="absolute inset-y-0 right-4 w-px bg-brand-dark/5"></div>
    <div class="absolute left-4 top-32 h-1.5 w-1.5 -translate-x-1/2 border border-brand-dark/10 bg-white"></div>
    <div class="absolute right-4 top-32 h-1.5 w-1.5 translate-x-1/2 border border-brand-dark/10 bg-white"></div>
    <div class="absolute left-4 bottom-32 h-1.5 w-1.5 -translate-x-1/2 border border-brand-dark/10 bg-white"></div>
    <div class="absolute right-4 bottom-32 h-1.5 w-1.5 translate-x-1/2 border border-brand-dark/10 bg-white"></div>
</div>

<!-- Header -->
<header class="sticky top-0 z-40 border-b border-brand-dark/5 bg-white/80 backdrop-blur-xl">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8 relative z-10">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-3 group" aria-label="CreatorFlow home">
            <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-dark text-white transition-transform group-hover:scale-105">
                <?php echo creatorflow_solar_icon( 'pen-new-round-linear' ); ?>
            </span>
            <div>
                <div class="text-sm font-heading font-medium tracking-tight text-brand-dark">CreatorFlow</div>
                <div class="text-xs text-brand-dark/50">Content mentorship</div>
            </div>
        </a>

        <?php $nav_items = creatorflow_nav_items(); ?>

        <!-- Desktop Nav -->
        <nav class="hidden items-center gap-1 lg:flex" aria-label="<?php esc_attr_e( 'Primary Menu', 'creatorflow' ); ?>">
            <?php foreach ( $nav_items as $item ) : ?>
                <a href="<?php echo esc_url( $item['url'] ); ?>" class="rounded-lg px-3 py-2 text-sm font-medium text-brand-dark/70 transition hover:bg-brand-dark/5 hover:text-brand-dark">
                    <?php echo esc_html( $item['label'] ); ?>
                </a>
            <?php endforeach; ?>
        </nav>

        <!-- Hamburger -->
        <button id="menu-toggle" class="lg:hidden min-h-[44px] min-w-[44px] flex items-center justify-center rounded-lg transition hover:bg-brand-dark/5 active:bg-brand-dark/10" aria-controls="mobile-menu" aria-expanded="false" type="button">
            <?php echo creatorflow_solar_icon( 'hamburger-menu-linear', 24 ); ?>
            <span class="screen-reader-text"><?php esc_html_e( 'Menu', 'creatorflow' ); ?></span>
        </button>

        <!-- Desktop CTA -->
        <div class="hidden lg:flex items-center gap-3">
            <a href="#mentor-cta" class="inline-flex items-center gap-1.5 rounded-full px-4 py-2 text-sm font-medium text-brand-dark transition hover:bg-brand-dark/5"><?php echo creatorflow_solar_icon( 'user-plus-linear', 16 ); ?><?php esc_html_e( 'Join as Mentor', 'creatorflow' ); ?></a>
            <a href="#hero-cta" class="inline-flex items-center gap-1.5 rounded-full bg-brand-pink px-4 py-2 text-sm font-medium text-white transition hover:bg-[#e01e65] shadow-sm shadow-brand-pink/20"><?php echo creatorflow_solar_icon( 'magnifer-linear', 16 ); ?><?php esc_html_e( 'Find an Expert', 'creatorflow' ); ?></a>
        </div>
    </div>

    <!-- Mobile Menu Panel -->
    <div id="mobile-menu" class="hidden border-t border-brand-dark/5 bg-white px-4 pb-6 pt-4 lg:hidden relative z-50">
        <nav class="flex flex-col gap-1" aria-label="<?php esc_attr_e( 'Mobile Menu', 'creatorflow' ); ?>">
            <?php foreach ( $nav_items as $item ) : ?>
                <a href="<?php echo esc_url( $item['url'] ); ?>" class="rounded-xl px-4 py-3 text-sm font-medium text-brand-dark transition hover:bg-brand-dark/5">
                    <?php echo esc_html( $item['label'] ); ?>
                </a>
            <?php endforeach; ?>
            <hr class="border-brand-dark/5 my-2">
            <a href="#mentor-cta" class="inline-flex items-center gap-2 rounded-xl px-4 py-3 text-sm font-medium text-brand-dark transition hover:bg-brand-dark/5"><?php echo creatorflow_solar_icon( 'user-plus-linear', 16 ); ?><?php esc_html_e( 'Join as Mentor', 'creatorflow' ); ?></a>
            <a href="#hero-cta" class="mt-1 inline-flex items-center justify-center gap-2 rounded-full bg-brand-pink px-5 py-3 text-sm font-medium text-white shadow-sm shadow-brand-pink/20"><?php echo creatorflow_solar_icon( 'magnifer-linear', 16 ); ?><?php esc_html_e( 'Find an Expert', 'creatorflow' ); ?></a>
        </nav>
    </div>
</header>

<main id="main" class="site-main relative z-10">
