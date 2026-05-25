<?php
defined( 'ABSPATH' ) || exit;
?>

<div class="pt-8">
    <div class="flex flex-col gap-2 mb-10">
        <h2 class="text-3xl md:text-4xl font-medium font-geist text-white tracking-tight">
            <?php esc_html_e( 'Powerful Dashboard', 'lumina' ); ?>
        </h2>
        <p class="text-zinc-500 max-w-lg">
            <?php esc_html_e( 'Everything you need to monitor and manage your application from one place.', 'lumina' ); ?>
        </p>
    </div>

    <!-- Dashboard Mockup -->
    <div class="glass-card pointer-events-auto relative overflow-hidden rounded-3xl p-1 animate-dashboard-float">
        <div class="relative w-full rounded-2xl overflow-hidden bg-gradient-to-br from-zinc-900/90 to-black/90 border border-zinc-800/50">
            <!-- Dashboard Top Bar -->
            <div class="flex items-center justify-between px-6 py-4 border-b border-zinc-800/50">
                <div class="flex items-center gap-4">
                    <span class="text-sm font-medium text-zinc-200 font-geist">Dashboard</span>
                    <span class="text-xs text-zinc-600 font-mono">/overview</span>
                </div>
                <div class="flex items-center gap-3">
                    <span class="px-3 py-1 text-xs rounded-full bg-emerald-400/10 text-emerald-400 font-mono">All Systems Normal</span>
                    <span class="w-6 h-6 rounded-full bg-zinc-700 flex items-center justify-center text-xs text-zinc-400">AP</span>
                </div>
            </div>

            <!-- Dashboard Content -->
            <div class="grid grid-cols-12 gap-4 p-6">
                <!-- Sidebar -->
                <div class="col-span-2 hidden lg:flex flex-col gap-2">
                    <div class="px-3 py-2 rounded-lg bg-zinc-800/40 text-xs text-emerald-400 font-mono">Overview</div>
                    <div class="px-3 py-2 rounded-lg text-xs text-zinc-500 font-mono hover:text-zinc-300">Analytics</div>
                    <div class="px-3 py-2 rounded-lg text-xs text-zinc-500 font-mono hover:text-zinc-300">Queues</div>
                    <div class="px-3 py-2 rounded-lg text-xs text-zinc-500 font-mono hover:text-zinc-300">Deployments</div>
                    <div class="px-3 py-2 rounded-lg text-xs text-zinc-500 font-mono hover:text-zinc-300">Database</div>
                    <div class="px-3 py-2 rounded-lg text-xs text-zinc-500 font-mono hover:text-zinc-300">Settings</div>
                </div>

                <!-- Main Content -->
                <div class="col-span-12 lg:col-span-10 flex flex-col gap-4">
                    <!-- Stats Cards Row -->
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">
                        <div class="rounded-xl bg-zinc-800/30 p-4 flex flex-col gap-1">
                            <span class="text-xs text-zinc-500 font-mono"><?php esc_html_e( 'Active Users', 'lumina' ); ?></span>
                            <span class="text-2xl font-bold text-white font-geist">2,847</span>
                            <span class="text-xs text-emerald-400 font-mono">+12.5%</span>
                        </div>
                        <div class="rounded-xl bg-zinc-800/30 p-4 flex flex-col gap-1">
                            <span class="text-xs text-zinc-500 font-mono"><?php esc_html_e( 'Avg Response', 'lumina' ); ?></span>
                            <span class="text-2xl font-bold text-white font-geist">12ms</span>
                            <span class="text-xs text-emerald-400 font-mono">-8.3%</span>
                        </div>
                        <div class="rounded-xl bg-zinc-800/30 p-4 flex flex-col gap-1">
                            <span class="text-xs text-zinc-500 font-mono"><?php esc_html_e( 'Error Rate', 'lumina' ); ?></span>
                            <span class="text-2xl font-bold text-white font-geist">0.02%</span>
                            <span class="text-xs text-emerald-400 font-mono">-2.1%</span>
                        </div>
                        <div class="rounded-xl bg-zinc-800/30 p-4 flex flex-col gap-1">
                            <span class="text-xs text-zinc-500 font-mono"><?php esc_html_e( 'Queue Jobs', 'lumina' ); ?></span>
                            <span class="text-2xl font-bold text-white font-geist">142</span>
                            <span class="text-xs text-zinc-500 font-mono">0 <?php esc_html_e( 'pending', 'lumina' ); ?></span>
                        </div>
                    </div>

                    <!-- Chart Area -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                        <div class="rounded-xl bg-zinc-800/30 p-5 flex flex-col gap-3">
                            <div class="flex justify-between items-center">
                                <span class="text-xs text-zinc-400 font-mono"><?php esc_html_e( 'Request Volume (Last 7 Days)', 'lumina' ); ?></span>
                                <span class="text-xs text-emerald-400 font-mono">+18.4%</span>
                            </div>
                            <div class="h-20 flex items-end gap-2">
                                <span class="flex-1 bg-emerald-400/30 rounded-sm h-[30%]"></span>
                                <span class="flex-1 bg-emerald-400/40 rounded-sm h-[45%]"></span>
                                <span class="flex-1 bg-emerald-400/50 rounded-sm h-[60%]"></span>
                                <span class="flex-1 bg-emerald-400/70 rounded-sm h-[80%]"></span>
                                <span class="flex-1 bg-emerald-400/60 rounded-sm h-[65%]"></span>
                                <span class="flex-1 bg-emerald-400/80 rounded-sm h-[95%]"></span>
                                <span class="flex-1 bg-emerald-400/90 rounded-sm h-[100%]"></span>
                            </div>
                            <div class="flex justify-between text-[10px] text-zinc-600 font-mono">
                                <span>Mon</span><span>Tue</span><span>Wed</span><span>Thu</span><span>Fri</span><span>Sat</span><span>Sun</span>
                            </div>
                        </div>
                        <div class="rounded-xl bg-zinc-800/30 p-5 flex flex-col gap-3">
                            <div class="flex justify-between items-center">
                                <span class="text-xs text-zinc-400 font-mono"><?php esc_html_e( 'Recent Transactions', 'lumina' ); ?></span>
                                <span class="text-xs text-zinc-500 font-mono"><?php esc_html_e( 'View All', 'lumina' ); ?> →</span>
                            </div>
                            <div class="flex flex-col gap-2">
                                <div class="flex items-center justify-between py-1.5 border-b border-zinc-800/30">
                                    <div class="flex items-center gap-2">
                                        <span class="w-6 h-6 rounded-full bg-zinc-700 text-[8px] flex items-center justify-center text-zinc-400">JD</span>
                                        <span class="text-xs text-zinc-300 font-mono">john@example.com</span>
                                    </div>
                                    <span class="text-xs text-emerald-400 font-mono">+$49.00</span>
                                </div>
                                <div class="flex items-center justify-between py-1.5 border-b border-zinc-800/30">
                                    <div class="flex items-center gap-2">
                                        <span class="w-6 h-6 rounded-full bg-zinc-700 text-[8px] flex items-center justify-center text-zinc-400">SM</span>
                                        <span class="text-xs text-zinc-300 font-mono">sarah@example.com</span>
                                    </div>
                                    <span class="text-xs text-emerald-400 font-mono">+$99.00</span>
                                </div>
                                <div class="flex items-center justify-between py-1.5">
                                    <div class="flex items-center gap-2">
                                        <span class="w-6 h-6 rounded-full bg-zinc-700 text-[8px] flex items-center justify-center text-zinc-400">MK</span>
                                        <span class="text-xs text-zinc-300 font-mono">mike@example.com</span>
                                    </div>
                                    <span class="text-xs text-emerald-400 font-mono">+$149.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Summary -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-6 pointer-events-auto">
        <div class="glass-card rounded-2xl p-5 text-center bg-gradient-to-br from-zinc-900/40 to-zinc-950/80">
            <div class="text-3xl font-bold font-geist text-emerald-400">99.9%</div>
            <div class="text-sm text-zinc-500 mt-1"><?php esc_html_e( 'Uptime SLA', 'lumina' ); ?></div>
        </div>
        <div class="glass-card rounded-2xl p-5 text-center bg-gradient-to-br from-zinc-900/40 to-zinc-950/80">
            <div class="text-3xl font-bold font-geist text-emerald-400">10M+</div>
            <div class="text-sm text-zinc-500 mt-1"><?php esc_html_e( 'Requests/Day', 'lumina' ); ?></div>
        </div>
        <div class="glass-card rounded-2xl p-5 text-center bg-gradient-to-br from-zinc-900/40 to-zinc-950/80">
            <div class="text-3xl font-bold font-geist text-emerald-400">50+</div>
            <div class="text-sm text-zinc-500 mt-1"><?php esc_html_e( 'Integrations', 'lumina' ); ?></div>
        </div>
        <div class="glass-card rounded-2xl p-5 text-center bg-gradient-to-br from-zinc-900/40 to-zinc-950/80">
            <div class="text-3xl font-bold font-geist text-emerald-400">5K+</div>
            <div class="text-sm text-zinc-500 mt-1"><?php esc_html_e( 'Developers', 'lumina' ); ?></div>
        </div>
    </div>
</div>
