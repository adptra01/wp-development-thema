<?php
defined( 'ABSPATH' ) || exit;
?>

<div class="pt-8 pb-16">
    <div class="glass-card pointer-events-auto relative overflow-hidden rounded-3xl p-8 lg:p-12 flex flex-col gap-6 bg-gradient-to-br from-zinc-900/40 to-zinc-950/80 border-zinc-800 text-center items-center">
        <!-- Glow overlay -->
        <div class="absolute -top-20 left-1/2 -translate-x-1/2 w-80 h-80 bg-emerald-500/10 blur-[120px] rounded-full pointer-events-none"></div>

        <div class="relative z-10 flex flex-col gap-2 max-w-xl">
            <h2 class="text-3xl md:text-4xl font-medium font-geist text-white tracking-tight">
                <?php esc_html_e( 'Ready to Ship Faster?', 'lumina' ); ?>
            </h2>
            <p class="text-zinc-400">
                <?php esc_html_e( 'Start monitoring your Laravel application in minutes. Free trial, no credit card required.', 'lumina' ); ?>
            </p>
        </div>

        <div class="relative z-10 flex flex-wrap items-center justify-center gap-4 pt-2">
            <a href="#"
               class="group relative inline-flex min-w-[140px] cursor-pointer transition-all duration-[1000ms] ease-[cubic-bezier(0.15,0.83,0.66,1)] hover:-translate-y-[2px] shadow-[0_2.8px_2.2px_rgba(0,0,0,0.3),_0_6.7px_5.3px_rgba(0,0,0,0.35),_0_12.5px_10px_rgba(0,0,0,0.4)] overflow-hidden font-normal tracking-tight bg-white text-black rounded-full px-8 py-3.5 text-lg items-center justify-center no-underline">
                <span class="relative z-10 flex items-center gap-2 rounded-full transition-all duration-500 ease-out group-hover:translate-y-8 group-hover:opacity-0 group-hover:blur-md">
                    <?php esc_html_e( 'Start Free Trial', 'lumina' ); ?>
                    <span>→</span>
                </span>
                <span class="absolute inset-0 z-10 flex items-center justify-center gap-2 transition-all duration-300 ease-in-out -translate-y-8 group-hover:translate-y-0 group-hover:opacity-100 group-hover:blur-none opacity-0 blur-md">
                    <?php esc_html_e( 'Start Free Trial', 'lumina' ); ?>
                    <span>→</span>
                </span>
            </a>

            <a href="#"
               class="px-8 py-3.5 rounded-full border bg-transparent text-lg font-normal transition-colors backdrop-blur-sm border-zinc-800 text-zinc-300 hover:bg-zinc-800/50 hover:text-white no-underline">
                <?php esc_html_e( 'Talk to Sales', 'lumina' ); ?>
            </a>
        </div>

        <div class="relative z-10 flex items-center gap-4 text-xs text-zinc-600 font-mono pt-2">
            <span><?php esc_html_e( 'No credit card required', 'lumina' ); ?></span>
            <span class="w-1 h-1 rounded-full bg-zinc-700"></span>
            <span><?php esc_html_e( 'Free 14-day trial', 'lumina' ); ?></span>
            <span class="w-1 h-1 rounded-full bg-zinc-700"></span>
            <span><?php esc_html_e( 'Cancel anytime', 'lumina' ); ?></span>
        </div>
    </div>
</div>
