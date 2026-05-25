<?php
defined( 'ABSPATH' ) || exit;

$testimonials = [
    [
        'quote' => __( 'Lumina transformed how we monitor our Laravel application. The queue insights alone saved us hours of debugging time every week.', 'lumina' ),
        'name'  => 'Sarah Chen',
        'role'  => 'CTO, TechFlow Inc.',
    ],
    [
        'quote' => __( 'The zero-downtime deployments are a game-changer. We went from stressful releases to shipping multiple times a day with confidence.', 'lumina' ),
        'name'  => 'Marcus Johnson',
        'role'  => 'Lead Developer, ScaleUp',
    ],
    [
        'quote' => __( 'Best monitoring tool for Laravel we have ever used. The AI-powered anomaly detection caught issues before they affected our users.', 'lumina' ),
        'name'  => 'Elena Rodriguez',
        'role'  => 'DevOps Engineer, DataStream',
    ],
];
?>

<div class="pt-8">
    <div class="flex flex-col gap-2 mb-10">
        <h2 class="text-3xl md:text-4xl font-medium font-geist text-white tracking-tight">
            <?php esc_html_e( 'Trusted by Developers', 'lumina' ); ?>
        </h2>
        <p class="text-zinc-500 max-w-lg">
            <?php esc_html_e( 'Join thousands of developers who rely on Lumina every day.', 'lumina' ); ?>
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
        <?php foreach ( $testimonials as $t ) : ?>
            <div class="glass-card pointer-events-auto relative overflow-hidden rounded-3xl p-7 lg:p-8 flex flex-col gap-5 bg-gradient-to-br from-zinc-900/40 to-zinc-950/80 hover:border-zinc-700/50 transition-all duration-700">
                <span class="text-4xl text-emerald-400/30 font-serif leading-none">"</span>
                <p class="text-zinc-300 text-base leading-relaxed"><?php echo esc_html( $t['quote'] ); ?></p>
                <div class="flex items-center gap-3 mt-auto">
                    <span class="w-10 h-10 rounded-full bg-zinc-700 flex items-center justify-center text-sm text-zinc-300 font-medium"><?php echo esc_html( substr( $t['name'], 0, 2 ) ); ?></span>
                    <div>
                        <div class="text-sm font-medium text-zinc-200 font-geist"><?php echo esc_html( $t['name'] ); ?></div>
                        <div class="text-xs text-zinc-500"><?php echo esc_html( $t['role'] ); ?></div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
