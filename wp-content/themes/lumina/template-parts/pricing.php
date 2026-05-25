<?php
defined( 'ABSPATH' ) || exit;

$plans = [
    [
        'name'        => __( 'Starter', 'lumina' ),
        'price'       => '$29',
        'period'      => __( '/month', 'lumina' ),
        'desc'        => __( 'Perfect for small projects and personal use.', 'lumina' ),
        'features'    => [
            __( 'Up to 10K requests/day', 'lumina' ),
            __( 'Real-time analytics', 'lumina' ),
            __( '1 team member', 'lumina' ),
            __( '7-day data retention', 'lumina' ),
            __( 'Email support', 'lumina' ),
        ],
        'cta'         => __( 'Get Started', 'lumina' ),
        'featured'    => false,
    ],
    [
        'name'        => __( 'Professional', 'lumina' ),
        'price'       => '$79',
        'period'      => __( '/month', 'lumina' ),
        'desc'        => __( 'Ideal for growing teams and production apps.', 'lumina' ),
        'features'    => [
            __( 'Up to 100K requests/day', 'lumina' ),
            __( 'Advanced analytics + AI insights', 'lumina' ),
            __( '5 team members', 'lumina' ),
            __( '30-day data retention', 'lumina' ),
            __( 'Queue monitoring', 'lumina' ),
            __( 'Priority support', 'lumina' ),
        ],
        'cta'         => __( 'Get Started', 'lumina' ),
        'featured'    => true,
    ],
    [
        'name'        => __( 'Enterprise', 'lumina' ),
        'price'       => '$199',
        'period'      => __( '/month', 'lumina' ),
        'desc'        => __( 'For large-scale applications and teams.', 'lumina' ),
        'features'    => [
            __( 'Unlimited requests', 'lumina' ),
            __( 'All features + custom dashboards', 'lumina' ),
            __( 'Unlimited team members', 'lumina' ),
            __( '90-day data retention', 'lumina' ),
            __( 'Dedicated support', 'lumina' ),
            __( 'Custom integrations', 'lumina' ),
            __( 'SLA guarantee', 'lumina' ),
        ],
        'cta'         => __( 'Contact Sales', 'lumina' ),
        'featured'    => false,
    ],
];
?>

<div class="pt-8">
    <div class="flex flex-col gap-2 mb-10">
        <h2 class="text-3xl md:text-4xl font-medium font-geist text-white tracking-tight">
            <?php esc_html_e( 'Simple, Transparent Pricing', 'lumina' ); ?>
        </h2>
        <p class="text-zinc-500 max-w-lg">
            <?php esc_html_e( 'Start for free, scale as you grow. No hidden fees.', 'lumina' ); ?>
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
        <?php foreach ( $plans as $plan ) : ?>
            <div class="glass-card pointer-events-auto relative overflow-hidden rounded-3xl p-7 lg:p-8 flex flex-col gap-6 bg-gradient-to-br from-zinc-900/40 to-zinc-950/80 hover:border-zinc-700/50 transition-all duration-700 <?php echo $plan['featured'] ? 'border-emerald-500/30 ring-1 ring-emerald-500/10' : ''; ?>">
                <?php if ( $plan['featured'] ) : ?>
                    <div class="absolute top-5 right-5 px-3 py-1 text-xs font-mono rounded-full bg-emerald-400/10 text-emerald-400 border border-emerald-400/20">
                        <?php esc_html_e( 'Most Popular', 'lumina' ); ?>
                    </div>
                <?php endif; ?>

                <div class="flex flex-col gap-2">
                    <h3 class="text-xl font-medium text-zinc-200 font-geist"><?php echo esc_html( $plan['name'] ); ?></h3>
                    <p class="text-zinc-500 text-sm"><?php echo esc_html( $plan['desc'] ); ?></p>
                </div>

                <div class="flex items-baseline gap-1">
                    <span class="text-4xl font-bold text-white font-geist"><?php echo esc_html( $plan['price'] ); ?></span>
                    <span class="text-zinc-500 text-sm"><?php echo esc_html( $plan['period'] ); ?></span>
                </div>

                <ul class="flex flex-col gap-3">
                    <?php foreach ( $plan['features'] as $feature ) : ?>
                        <li class="flex items-center gap-3 text-zinc-400 text-sm">
                            <span class="w-4 h-4 rounded-full bg-emerald-400/10 flex items-center justify-center text-[8px] text-emerald-400">✓</span>
                            <?php echo esc_html( $feature ); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <a href="#" class="<?php echo $plan['featured'] ? 'bg-white text-black hover:bg-zinc-200' : 'bg-zinc-800/50 text-zinc-300 hover:bg-zinc-700/50'; ?> rounded-full py-3 text-sm font-medium text-center transition-all no-underline">
                    <?php echo esc_html( $plan['cta'] ); ?>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
