<?php
defined( 'ABSPATH' ) || exit;
?>

<div class="flex flex-col gap-2 mb-10 pt-8">
    <h2 class="text-3xl md:text-4xl font-medium font-geist text-white tracking-tight">
        <?php esc_html_e( 'Everything You Need to Build', 'lumina' ); ?>
    </h2>
    <p class="text-zinc-500 max-w-lg">
        <?php esc_html_e( 'AI-powered analytics, real-time monitoring, and seamless deployment for modern Laravel applications.', 'lumina' ); ?>
    </p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 pointer-events-auto min-h-[70vh]">
    <!-- Feature 1 – Analytics -->
    <div class="glass-card group relative overflow-hidden rounded-3xl p-7 lg:p-8 row-span-1 col-span-1 flex flex-col gap-4 bg-gradient-to-br from-zinc-900/40 to-zinc-950/80 hover:border-zinc-700/50">
        <div class="flex items-center gap-3 mb-1">
            <span class="flex items-center justify-center w-10 h-10 rounded-xl bg-emerald-400/10 text-emerald-400 text-lg">📊</span>
            <h3 class="text-lg font-medium text-zinc-300 font-geist"><?php esc_html_e( 'Real-Time Analytics', 'lumina' ); ?></h3>
        </div>
        <p class="text-zinc-400 text-base leading-relaxed">
            <?php esc_html_e( 'Monitor your application performance with real-time metrics, custom dashboards, and AI-powered anomaly detection. Track response times, error rates, and user activity.', 'lumina' ); ?>
        </p>
        <div class="flex flex-wrap gap-2 mt-auto">
            <span class="px-3 py-1 text-xs font-mono rounded-full bg-zinc-800 text-zinc-400 border border-zinc-700/50">Latency</span>
            <span class="px-3 py-1 text-xs font-mono rounded-full bg-zinc-800 text-zinc-400 border border-zinc-700/50">Throughput</span>
            <span class="px-3 py-1 text-xs font-mono rounded-full bg-zinc-800 text-zinc-400 border border-zinc-700/50">Errors</span>
        </div>
    </div>

    <!-- Feature 2 – Queue Monitor -->
    <div class="glass-card group relative overflow-hidden rounded-3xl p-7 lg:p-8 row-span-1 col-span-1 flex flex-col gap-4 bg-gradient-to-br from-zinc-900/40 to-zinc-950/80 hover:border-zinc-700/50">
        <div class="flex items-center gap-3 mb-1">
            <span class="flex items-center justify-center w-10 h-10 rounded-xl bg-emerald-400/10 text-emerald-400 text-lg">⚡</span>
            <h3 class="text-lg font-medium text-zinc-300 font-geist"><?php esc_html_e( 'Queue Management', 'lumina' ); ?></h3>
        </div>
        <p class="text-zinc-400 text-base leading-relaxed">
            <?php esc_html_e( 'Visualize and manage your Laravel Horizon queues with real-time job monitoring, failed job retries, and worker scaling insights at a glance.', 'lumina' ); ?>
        </p>
        <div class="flex flex-wrap gap-2 mt-auto">
            <span class="px-3 py-1 text-xs font-mono rounded-full bg-zinc-800 text-zinc-400 border border-zinc-700/50">Horizon</span>
            <span class="px-3 py-1 text-xs font-mono rounded-full bg-zinc-800 text-zinc-400 border border-zinc-700/50">Jobs</span>
            <span class="px-3 py-1 text-xs font-mono rounded-full bg-zinc-800 text-zinc-400 border border-zinc-700/50">Workers</span>
        </div>
    </div>

    <!-- Feature 3 – Deployment -->
    <div class="glass-card group relative overflow-hidden rounded-3xl p-7 lg:p-8 row-span-1 col-span-1 flex flex-col gap-4 bg-gradient-to-br from-zinc-900/40 to-zinc-950/80 hover:border-zinc-700/50">
        <div class="flex items-center gap-3 mb-1">
            <span class="flex items-center justify-center w-10 h-10 rounded-xl bg-emerald-400/10 text-emerald-400 text-lg">🚀</span>
            <h3 class="text-lg font-medium text-zinc-300 font-geist"><?php esc_html_e( 'Zero-Downtime Deployments', 'lumina' ); ?></h3>
        </div>
        <p class="text-zinc-400 text-base leading-relaxed">
            <?php esc_html_e( 'Deploy with confidence using atomic releases, instant rollbacks, and automated health checks. Integrated with your existing CI/CD pipeline.', 'lumina' ); ?>
        </p>
        <div class="flex flex-wrap gap-2 mt-auto">
            <span class="px-3 py-1 text-xs font-mono rounded-full bg-zinc-800 text-zinc-400 border border-zinc-700/50">CI/CD</span>
            <span class="px-3 py-1 text-xs font-mono rounded-full bg-zinc-800 text-zinc-400 border border-zinc-700/50">Docker</span>
            <span class="px-3 py-1 text-xs font-mono rounded-full bg-zinc-800 text-zinc-400 border border-zinc-700/50">Rollback</span>
        </div>
    </div>

    <!-- Feature 4 – Database -->
    <div class="glass-card group relative overflow-hidden rounded-3xl p-7 lg:p-8 row-span-1 col-span-1 flex flex-col gap-4 bg-gradient-to-br from-zinc-900/40 to-zinc-950/80 hover:border-zinc-700/50">
        <div class="flex items-center gap-3 mb-1">
            <span class="flex items-center justify-center w-10 h-10 rounded-xl bg-emerald-400/10 text-emerald-400 text-lg">💾</span>
            <h3 class="text-lg font-medium text-zinc-300 font-geist"><?php esc_html_e( 'Database Insights', 'lumina' ); ?></h3>
        </div>
        <p class="text-zinc-400 text-base leading-relaxed">
            <?php esc_html_e( 'Query analysis, slow query detection, index recommendations, and connection pool monitoring. Optimize your MySQL and PostgreSQL performance.', 'lumina' ); ?>
        </p>
        <div class="flex flex-wrap gap-2 mt-auto">
            <span class="px-3 py-1 text-xs font-mono rounded-full bg-zinc-800 text-zinc-400 border border-zinc-700/50">MySQL</span>
            <span class="px-3 py-1 text-xs font-mono rounded-full bg-zinc-800 text-zinc-400 border border-zinc-700/50">PostgreSQL</span>
            <span class="px-3 py-1 text-xs font-mono rounded-full bg-zinc-800 text-zinc-400 border border-zinc-700/50">Redis</span>
        </div>
    </div>

    <!-- Feature 5 – Cache -->
    <div class="glass-card group relative overflow-hidden rounded-3xl p-7 lg:p-8 row-span-1 col-span-1 flex flex-col gap-4 bg-gradient-to-br from-zinc-900/40 to-zinc-950/80 hover:border-zinc-700/50">
        <div class="flex items-center gap-3 mb-1">
            <span class="flex items-center justify-center w-10 h-10 rounded-xl bg-emerald-400/10 text-emerald-400 text-lg">🧠</span>
            <h3 class="text-lg font-medium text-zinc-300 font-geist"><?php esc_html_e( 'Cache & Performance', 'lumina' ); ?></h3>
        </div>
        <p class="text-zinc-400 text-base leading-relaxed">
            <?php esc_html_e( 'Intelligent caching strategies with Redis, OPcache, and HTTP caching. Automatic cache invalidation and warming for lightning-fast responses.', 'lumina' ); ?>
        </p>
        <div class="flex flex-wrap gap-2 mt-auto">
            <span class="px-3 py-1 text-xs font-mono rounded-full bg-zinc-800 text-zinc-400 border border-zinc-700/50">Redis</span>
            <span class="px-3 py-1 text-xs font-mono rounded-full bg-zinc-800 text-zinc-400 border border-zinc-700/50">OPcache</span>
            <span class="px-3 py-1 text-xs font-mono rounded-full bg-zinc-800 text-zinc-400 border border-zinc-700/50">HTTP/2</span>
        </div>
    </div>

    <!-- Feature 6 – Monitoring -->
    <div class="glass-card group relative overflow-hidden rounded-3xl p-7 lg:p-8 row-span-1 col-span-1 flex flex-col gap-4 bg-gradient-to-br from-zinc-900/40 to-zinc-950/80 hover:border-zinc-700/50">
        <div class="flex items-center gap-3 mb-1">
            <span class="flex items-center justify-center w-10 h-10 rounded-xl bg-emerald-400/10 text-emerald-400 text-lg">🔔</span>
            <h3 class="text-lg font-medium text-zinc-300 font-geist"><?php esc_html_e( 'Smart Alerts', 'lumina' ); ?></h3>
        </div>
        <p class="text-zinc-400 text-base leading-relaxed">
            <?php esc_html_e( 'AI-powered alerting system that learns your application patterns. Get notified about anomalies before they become incidents.', 'lumina' ); ?>
        </p>
        <div class="flex flex-wrap gap-2 mt-auto">
            <span class="px-3 py-1 text-xs font-mono rounded-full bg-zinc-800 text-zinc-400 border border-zinc-700/50">Slack</span>
            <span class="px-3 py-1 text-xs font-mono rounded-full bg-zinc-800 text-zinc-400 border border-zinc-700/50">Email</span>
            <span class="px-3 py-1 text-xs font-mono rounded-full bg-zinc-800 text-zinc-400 border border-zinc-700/50">Webhook</span>
        </div>
    </div>
</div>
