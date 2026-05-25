<?php
defined( 'ABSPATH' ) || exit;
?>

<div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-12 pointer-events-auto min-h-[80vh] gap-x-16 gap-y-16 items-center pt-8">
    <div class="flex flex-col gap-8 lg:pr-8">
        <div class="flex items-center gap-2 text-sm font-mono text-zinc-500">
            <span class="inline-block w-2 h-2 rounded-full bg-emerald-400"></span>
            <?php esc_html_e( 'Modern SaaS Platform — Build with Laravel', 'lumina' ); ?>
        </div>

        <h1 class="sm:text-6xl md:text-7xl leading-[1.1] text-5xl font-medium tracking-tight font-geist text-white/95">
            <?php esc_html_e( 'Build Smarter', 'lumina' ); ?>
            <br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-zinc-100 to-zinc-400"><?php esc_html_e( 'Ship Faster', 'lumina' ); ?></span>
        </h1>

        <p class="text-lg md:text-xl text-zinc-400 max-w-xl">
            <?php esc_html_e( 'Lumina helps you build, deploy, and scale modern web applications with AI-powered insights, real-time monitoring, and zero configuration.', 'lumina' ); ?>
        </p>

        <div class="flex flex-wrap items-center gap-4">
            <a href="#"
               class="group relative inline-flex min-w-[120px] cursor-pointer transition-all duration-[1000ms] ease-[cubic-bezier(0.15,0.83,0.66,1)] hover:-translate-y-[2px] shadow-[0_2.8px_2.2px_rgba(0,0,0,0.3),_0_6.7px_5.3px_rgba(0,0,0,0.35),_0_12.5px_10px_rgba(0,0,0,0.4)] overflow-hidden font-normal tracking-tight bg-white text-black rounded-full px-8 py-3.5 text-lg items-center justify-center no-underline">
                <span class="relative z-10 flex items-center gap-2 rounded-full transition-all duration-500 ease-out group-hover:translate-y-8 group-hover:opacity-0 group-hover:blur-md">
                    <?php esc_html_e( 'Get Started Free', 'lumina' ); ?>
                    <span>→</span>
                </span>
                <span class="absolute inset-0 z-10 flex items-center justify-center gap-2 transition-all duration-300 ease-in-out -translate-y-8 group-hover:translate-y-0 group-hover:opacity-100 group-hover:blur-none opacity-0 blur-md">
                    <?php esc_html_e( 'Get Started Free', 'lumina' ); ?>
                    <span>→</span>
                </span>
            </a>

            <a href="#"
               class="px-8 py-3.5 rounded-full border bg-transparent text-lg font-normal transition-colors backdrop-blur-sm border-zinc-800 text-zinc-300 hover:bg-zinc-800/50 hover:text-white no-underline">
                <?php esc_html_e( 'See Documentation', 'lumina' ); ?>
            </a>
        </div>

        <div class="flex flex-wrap items-center gap-6 pt-4 text-sm text-zinc-500 font-mono">
            <span class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                SOC 2 Compliant
            </span>
            <span class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                99.9% Uptime
            </span>
            <span class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                PHP 8.x Optimized
            </span>
        </div>
    </div>

    <!-- Right Side: Floating Image Cluster -->
    <div class="lg:h-[650px] hidden md:block w-full h-[500px] z-50 pointer-events-auto relative">
        <div class="glass-card float-card-1 absolute top-[5%] left-[5%] w-40 lg:w-48 aspect-square -rotate-[4deg] z-[61] p-2 md:p-3">
            <div class="relative w-full h-full rounded-xl overflow-hidden shadow-[0_0_10px_rgba(0,0,0,0.5)] bg-gradient-to-br from-zinc-800 to-zinc-900 p-4 flex flex-col gap-2">
                <div class="flex justify-between items-center">
                    <span class="text-[10px] text-zinc-500 font-mono">Revenue</span>
                    <span class="text-[10px] text-emerald-400 font-mono">+12.5%</span>
                </div>
                <div class="flex items-end gap-1 flex-1">
                    <span class="w-2 bg-emerald-400/60 rounded-sm animate-bar-pulse" style="height: 60%"></span>
                    <span class="w-2 bg-emerald-400/60 rounded-sm animate-bar-pulse" style="height: 40%"></span>
                    <span class="w-2 bg-emerald-400/60 rounded-sm animate-bar-pulse" style="height: 80%"></span>
                    <span class="w-2 bg-emerald-400/60 rounded-sm animate-bar-pulse" style="height: 55%"></span>
                    <span class="w-2 bg-emerald-400/60 rounded-sm animate-bar-pulse" style="height: 90%"></span>
                    <span class="w-2 bg-emerald-400/60 rounded-sm animate-bar-pulse" style="height: 70%"></span>
                </div>
            </div>
            <div class="glass-highlight"></div>
        </div>
        <div class="glass-card float-card-2 absolute top-[15%] right-[5%] w-48 lg:w-56 aspect-[4/3] rotate-[3deg] z-[62] p-2 md:p-3">
            <div class="relative w-full h-full rounded-xl overflow-hidden shadow-[0_0_10px_rgba(0,0,0,0.5)] bg-zinc-900 p-4 flex flex-col gap-2">
                <div class="flex items-center gap-2">
                    <span class="w-6 h-6 rounded-full bg-emerald-400/20 flex items-center justify-center text-[10px]">✓</span>
                    <span class="text-[10px] text-zinc-300 font-mono">Deployment #142</span>
                </div>
                <div class="text-[10px] text-zinc-500 font-mono mt-1">Production · 23s ago</div>
                <div class="flex gap-1 mt-auto">
                    <span class="px-1.5 py-0.5 text-[8px] rounded bg-emerald-400/10 text-emerald-400 font-mono">passed</span>
                    <span class="px-1.5 py-0.5 text-[8px] rounded bg-zinc-800 text-zinc-500 font-mono">3 tests</span>
                </div>
            </div>
            <div class="glass-highlight"></div>
        </div>
        <div class="glass-card float-card-3 absolute top-[40%] left-[0%] w-36 lg:w-44 aspect-[3/4] -rotate-[2deg] z-[63] p-2 md:p-3">
            <div class="relative w-full h-full rounded-xl overflow-hidden shadow-[0_0_10px_rgba(0,0,0,0.5)] bg-zinc-900 p-4 flex flex-col gap-2">
                <div class="text-[10px] text-zinc-500 font-mono">Latency</div>
                <div class="text-lg font-bold text-emerald-400 font-geist">12ms</div>
                <div class="text-[8px] text-zinc-600 font-mono">Avg. response time</div>
                <div class="mt-auto flex gap-0.5">
                    <span class="w-1 h-3 bg-emerald-400/40 rounded-sm"></span>
                    <span class="w-1 h-4 bg-emerald-400/60 rounded-sm"></span>
                    <span class="w-1 h-2 bg-emerald-400/40 rounded-sm"></span>
                    <span class="w-1 h-5 bg-emerald-400/80 rounded-sm"></span>
                    <span class="w-1 h-3 bg-emerald-400/40 rounded-sm"></span>
                </div>
            </div>
            <div class="glass-highlight"></div>
        </div>
        <div class="glass-card float-card-4 absolute top-[35%] right-[15%] w-52 lg:w-64 aspect-square rotate-[2deg] z-[64] p-2 md:p-3">
            <div class="relative w-full h-full rounded-xl overflow-hidden shadow-[0_0_10px_rgba(0,0,0,0.5)] bg-gradient-to-br from-zinc-800 to-zinc-900 p-4 flex flex-col gap-2">
                <div class="flex justify-between">
                    <span class="text-[10px] text-zinc-400 font-mono">Active Users</span>
                    <span class="text-[10px] text-emerald-400 font-mono">+8.2%</span>
                </div>
                <div class="text-2xl font-bold text-white font-geist">2,847</div>
                <div class="flex gap-0.5 items-end flex-1">
                    <span class="w-2 bg-emerald-400/30 rounded-sm" style="height: 30%"></span>
                    <span class="w-2 bg-emerald-400/40 rounded-sm" style="height: 50%"></span>
                    <span class="w-2 bg-emerald-400/60 rounded-sm" style="height: 70%"></span>
                    <span class="w-2 bg-emerald-400/80 rounded-sm" style="height: 90%"></span>
                    <span class="w-2 bg-emerald-400/60 rounded-sm" style="height: 75%"></span>
                    <span class="w-2 bg-emerald-400/90 rounded-sm" style="height: 100%"></span>
                </div>
            </div>
            <div class="glass-highlight"></div>
        </div>
        <div class="glass-card float-card-5 absolute bottom-[5%] left-[20%] w-44 lg:w-52 aspect-square rotate-[4deg] z-[62] p-2 md:p-3">
            <div class="relative w-full h-full rounded-xl overflow-hidden shadow-[0_0_10px_rgba(0,0,0,0.5)] bg-zinc-900 p-4 flex flex-col gap-2">
                <div class="flex items-center gap-2">
                    <span class="w-4 h-4 rounded bg-blue-500/20 flex items-center justify-center text-[8px]">⚡</span>
                    <span class="text-[10px] text-zinc-300 font-mono">API Status</span>
                </div>
                <div class="flex gap-1 mt-1">
                    <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                    <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                    <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                    <span class="w-2 h-2 rounded-full bg-zinc-600"></span>
                    <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                </div>
                <div class="mt-auto text-[8px] text-zinc-600 font-mono">5 endpoints online</div>
            </div>
            <div class="glass-highlight"></div>
        </div>
        <div class="glass-card float-card-6 absolute bottom-[0%] right-[10%] w-36 lg:w-44 aspect-[4/3] -rotate-[3deg] z-[61] p-2 md:p-3">
            <div class="relative w-full h-full rounded-xl overflow-hidden shadow-[0_0_10px_rgba(0,0,0,0.5)] bg-zinc-900 p-4 flex flex-col gap-2">
                <span class="text-[10px] text-zinc-500 font-mono">Queue</span>
                <div class="flex items-center gap-1">
                    <span class="animate-pulse-glow w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                    <span class="text-xs text-zinc-300 font-mono">0 pending</span>
                </div>
                <div class="mt-auto text-[8px] text-zinc-600 font-mono">Laravel Horizon</div>
            </div>
            <div class="glass-highlight"></div>
        </div>
    </div>
</div>
