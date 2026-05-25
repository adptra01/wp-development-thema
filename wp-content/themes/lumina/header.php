<!DOCTYPE html>
<html <?php language_attributes(); ?> class="antialiased">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'min-h-screen overflow-x-hidden selection:bg-white/10 font-sans bg-[#09090b] relative text-white' ); ?>>
<?php wp_body_open(); ?>

<!-- Background Glow Effects -->
<div class="fixed inset-0 z-0 pointer-events-none overflow-hidden flex items-center justify-center">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-px h-[60vh] bg-gradient-to-b from-zinc-400/30 via-zinc-500/5 to-transparent z-10"></div>
    <div class="absolute top-[10%] left-1/2 -translate-x-1/2 w-48 h-56 blur-[100px] rounded-full z-10 bg-zinc-400/10"></div>
    <div class="absolute -top-[50vh] w-[150vw] h-[100vh] rounded-[100%] border border-zinc-500/10 shadow-[0_0_120px_rgba(161,161,170,0.1)]"></div>
    <div class="absolute top-[20vh] w-[120vw] h-[120vh] rounded-[100%] border shadow-[0_0_80px_rgba(161,161,170,0.05)] border-zinc-600/5"></div>
    <div class="absolute top-[30%] left-[15%] w-64 h-64 bg-zinc-500/5 blur-[80px] rounded-full"></div>
    <div class="absolute bottom-[20%] right-[20%] w-80 h-80 blur-[100px] rounded-full bg-zinc-400/5"></div>
</div>

<!-- Navigation -->
<header class="fixed flex md:px-12 z-50 pointer-events-auto pt-6 pr-6 pb-6 pl-6 top-0 right-0 left-0 items-center justify-between">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-2.5 text-xl tracking-tight font-medium hover:opacity-80 transition-opacity font-geist text-white no-underline">
        <span class="text-emerald-400 font-bold">✦</span>
        <span><?php esc_html_e( 'Lumina', 'lumina' ); ?></span>
    </a>

    <nav class="hidden md:flex items-center gap-10 text-base font-normal text-zinc-400">
        <a href="#features" class="transition-colors hover:text-zinc-200 no-underline"><?php esc_html_e( 'Features', 'lumina' ); ?></a>
        <a href="#pricing" class="transition-colors hover:text-zinc-200 no-underline"><?php esc_html_e( 'Pricing', 'lumina' ); ?></a>
        <a href="#testimonials" class="transition-colors hover:text-zinc-200 no-underline"><?php esc_html_e( 'Testimonials', 'lumina' ); ?></a>
    </nav>

    <div class="hidden md:flex items-center gap-6">
        <a href="#" class="text-sm font-normal text-zinc-400 hover:text-zinc-200 transition-colors no-underline"><?php esc_html_e( 'Sign In', 'lumina' ); ?></a>
        <a href="#" class="px-5 py-2.5 rounded-full text-sm font-medium bg-white text-black hover:bg-zinc-200 transition-colors no-underline shadow-[0_0_20px_rgba(255,255,255,0.1)]">
            <?php esc_html_e( 'Get Started', 'lumina' ); ?>
        </a>
    </div>
</header>

<main class="z-20 container px-6 md:px-12 mr-auto ml-auto relative justify-center">
