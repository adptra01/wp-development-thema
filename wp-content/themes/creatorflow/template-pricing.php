<?php
/**
 * Template Name: Pricing
 *
 * @package CreatorFlow
 * @since 1.0.0
 */

get_header();

$plans = [
    'starter' => [
        'name'       => __( 'Starter', 'creatorflow' ),
        'price'      => 150,
        'unit'       => __( 'per session', 'creatorflow' ),
        'desc'       => __( 'Perfect for a single focused breakthrough.', 'creatorflow' ),
        'featured'   => false,
        'features'   => [
            __( 'One 45-min 1:1 video session', 'creatorflow' ),
            __( 'Pre-session questionnaire', 'creatorflow' ),
            __( 'Session recording', 'creatorflow' ),
            __( 'Actionable summary & roadmap', 'creatorflow' ),
            __( '48-hr email follow-up', 'creatorflow' ),
        ],
        'cta'        => __( 'Book a Session', 'creatorflow' ),
        'icon'       => 'rocket-linear',
    ],
    'pro' => [
        'name'       => __( 'Professional', 'creatorflow' ),
        'price'      => 480,
        'unit'       => __( '4 sessions', 'creatorflow' ),
        'desc'       => __( 'Sustained support for real momentum.', 'creatorflow' ),
        'featured'   => true,
        'features'   => [
            __( 'Four 45-min 1:1 sessions', 'creatorflow' ),
            __( 'Pre-session questionnaire each time', 'creatorflow' ),
            __( 'All session recordings', 'creatorflow' ),
            __( 'Shared progress dashboard', 'creatorflow' ),
            __( 'Priority email support', 'creatorflow' ),
            __( '30-day check-in call', 'creatorflow' ),
        ],
        'cta'        => __( 'Start Growing', 'creatorflow' ),
        'icon'       => 'rocket-2-linear',
    ],
    'enterprise' => [
        'name'       => __( 'Enterprise', 'creatorflow' ),
        'price'      => 1200,
        'unit'       => __( '12 sessions', 'creatorflow' ),
        'desc'       => __( 'Full-scale strategic transformation.', 'creatorflow' ),
        'featured'   => false,
        'features'   => [
            __( 'Twelve 45-min 1:1 sessions', 'creatorflow' ),
            __( 'Dedicated mentor pairing', 'creatorflow' ),
            __( 'Custom curriculum design', 'creatorflow' ),
            __( 'Asset & content reviews', 'creatorflow' ),
            __( 'Slack-style chat access', 'creatorflow' ),
            __( 'Quarterly strategy audit', 'creatorflow' ),
            __( 'Team session option', 'creatorflow' ),
        ],
        'cta'        => __( 'Get in Touch', 'creatorflow' ),
        'icon'       => 'cup-first-linear',
    ],
];

$pricing_faqs = [
    [ 'q' => __( 'What happens if I need to reschedule?', 'creatorflow' ), 'a' => __( 'You can reschedule up to 24 hours before the session at no cost. Late cancellations may incur a partial fee.', 'creatorflow' ) ],
    [ 'q' => __( 'Can I switch mentors between sessions?', 'creatorflow' ), 'a' => __( 'Yes. Professional & Enterprise plans let you switch mentors at any time. Starter sessions are tied to the mentor you book.', 'creatorflow' ) ],
    [ 'q' => __( 'Is there a money-back guarantee?', 'creatorflow' ), 'a' => __( 'Absolutely. If a session doesn\'t deliver the value promised, we\'ll refund the full amount. No questions asked.', 'creatorflow' ) ],
];
?>

<section class="pt-24 pb-8 sm:pt-32 sm:pb-12">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="reveal font-heading text-4xl font-medium tracking-tight text-brand-dark sm:text-5xl">
            <?php esc_html_e( 'Simple pricing for serious growth.', 'creatorflow' ); ?>
        </h1>
        <p class="mx-auto mt-4 max-w-2xl text-base leading-relaxed text-brand-dark/70">
            <?php esc_html_e( 'Invest in your craft with transparent pricing. No hidden fees, no lock-in contracts.', 'creatorflow' ); ?>
        </p>
    </div>
</section>

<!-- Pricing Table -->
<section class="pb-16 sm:pb-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid gap-8 lg:grid-cols-3 lg:items-start">
            <?php foreach ( $plans as $plan ) : ?>
            <div class="relative flex flex-col rounded-3xl border bg-white p-8 <?php echo $plan['featured'] ? 'border-brand-pink/30 shadow-xl shadow-brand-pink/5 scale-[1.02] lg:scale-105' : 'border-brand-dark/10'; ?>">
                <?php if ( $plan['featured'] ) : ?>
                    <span class="absolute -top-3 left-1/2 -translate-x-1/2 inline-flex items-center gap-1 rounded-full bg-brand-pink px-4 py-1 text-xs font-medium uppercase tracking-wider text-white shadow-sm">
                        <iconify-icon icon="solar:star-bold" width="12" height="12"></iconify-icon>
                        <?php esc_html_e( 'Most Popular', 'creatorflow' ); ?>
                    </span>
                <?php endif; ?>

                <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-xl bg-brand-dark/5 text-brand-dark">
                    <?php echo creatorflow_solar_icon( $plan['icon'], 24 ); ?>
                </div>

                <h2 class="font-heading text-xl font-medium tracking-tight text-brand-dark"><?php echo esc_html( $plan['name'] ); ?></h2>
                <p class="mt-1 text-sm text-brand-dark/60"><?php echo esc_html( $plan['desc'] ); ?></p>

                <div class="mt-6 flex items-baseline gap-1">
                    <span class="font-heading text-4xl font-medium tracking-tight text-brand-dark">$<?php echo esc_html( $plan['price'] ); ?></span>
                    <span class="text-sm text-brand-dark/50"><?php echo esc_html( $plan['unit'] ); ?></span>
                </div>

                <ul class="mt-8 flex-1 space-y-3">
                    <?php foreach ( $plan['features'] as $feature ) : ?>
                        <li class="flex items-start gap-3 text-sm text-brand-dark/80">
                            <iconify-icon icon="solar:check-circle-bold-duotone" width="18" height="18" class="shrink-0 mt-0.5 <?php echo $plan['featured'] ? 'text-brand-pink' : 'text-brand-dark/40'; ?>"></iconify-icon>
                            <span><?php echo esc_html( $feature ); ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="mt-8 inline-flex items-center justify-center gap-2 rounded-full px-6 py-3.5 text-sm font-medium transition <?php echo $plan['featured'] ? 'bg-brand-dark text-white hover:bg-brand-pink shadow-lg shadow-brand-dark/10' : 'border border-brand-dark/10 text-brand-dark hover:bg-brand-dark/5'; ?>">
                    <?php echo creatorflow_solar_icon( 'calendar-linear', 16 ); ?>
                    <?php echo esc_html( $plan['cta'] ); ?>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Pricing FAQ -->
<section class="border-t border-brand-dark/5 bg-brand-light/30 py-16 sm:py-24">
    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
        <div class="mb-12 text-center">
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-brand-dark/5 text-brand-dark mb-4"><?php echo creatorflow_solar_icon( 'chat-round-dots-linear', 20 ); ?></span>
            <h2 class="font-heading text-3xl font-medium tracking-tight text-brand-dark"><?php esc_html_e( 'Pricing FAQ.', 'creatorflow' ); ?></h2>
        </div>
        <div class="space-y-4">
            <?php foreach ( $pricing_faqs as $faq ) : ?>
            <details class="faq-item group rounded-2xl border border-brand-dark/10 bg-white p-6 [&_summary::-webkit-details-marker]:hidden">
                <summary class="flex cursor-pointer items-center justify-between gap-4 font-medium text-brand-dark outline-none">
                    <?php echo esc_html( $faq['q'] ); ?>
                    <span class="transition group-open:rotate-180 text-brand-dark/50 group-hover:text-brand-pink">
                        <?php echo creatorflow_solar_icon( 'alt-arrow-down-linear', 20 ); ?>
                    </span>
                </summary>
                <p class="mt-4 text-sm leading-relaxed text-brand-dark/70 border-t border-brand-dark/5 pt-4"><?php echo esc_html( $faq['a'] ); ?></p>
            </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
get_footer();
