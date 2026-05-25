<?php
/**
 * Template Name: Mentors Directory
 *
 * @package CreatorFlow
 * @since 1.0.0
 */

get_header();

$categories = [
    'all'              => __( 'All', 'creatorflow' ),
    'video-strategy'   => __( 'Video Strategy', 'creatorflow' ),
    'copywriting'      => __( 'Copywriting', 'creatorflow' ),
    'brand-monetization' => __( 'Brand & Monetization', 'creatorflow' ),
    'visual-design'    => __( 'Visual Design', 'creatorflow' ),
    'growth-analytics' => __( 'Growth Analytics', 'creatorflow' ),
    'systems-ops'      => __( 'Systems & Operations', 'creatorflow' ),
];

$mentors = [
    [
        'name'   => 'Sarah Jenkins',
        'title'  => __( 'Creative Director & Brand Strategist', 'creatorflow' ),
        'avatar' => CREATORFLOW_IMG . '/sarah-jenkins/64/64',
        'tags'   => [ 'Video Strategy', 'Brand & Monetization' ],
        'cat'    => 'video-strategy',
        'rating' => 4.98,
        'price'  => 150,
    ],
    [
        'name'   => 'Marcus Webb',
        'title'  => __( 'Content Educator & Systems Expert', 'creatorflow' ),
        'avatar' => CREATORFLOW_IMG . '/marcus-webb/64/64',
        'tags'   => [ 'Systems & Operations', 'Growth Analytics' ],
        'cat'    => 'systems-ops',
        'rating' => 4.89,
        'price'  => 120,
    ],
    [
        'name'   => 'David Chen',
        'title'  => __( 'Tech Reviewer & Video Strategist', 'creatorflow' ),
        'avatar' => CREATORFLOW_IMG . '/david-chen/64/64',
        'tags'   => [ 'Video Strategy', 'Growth Analytics' ],
        'cat'    => 'video-strategy',
        'rating' => 4.92,
        'price'  => 130,
    ],
    [
        'name'   => 'Amina Yusuf',
        'title'  => __( 'Lifestyle Creator & Copywriter', 'creatorflow' ),
        'avatar' => CREATORFLOW_IMG . '/amina-yusuf/64/64',
        'tags'   => [ 'Copywriting', 'Brand & Monetization' ],
        'cat'    => 'copywriting',
        'rating' => 4.95,
        'price'  => 140,
    ],
    [
        'name'   => 'Jamie Torres',
        'title'  => __( 'Visual Designer & Art Director', 'creatorflow' ),
        'avatar' => CREATORFLOW_IMG . '/jamie-torres/64/64',
        'tags'   => [ 'Visual Design', 'Brand & Monetization' ],
        'cat'    => 'visual-design',
        'rating' => 4.87,
        'price'  => 110,
    ],
    [
        'name'   => 'Elena Rossi',
        'title'  => __( 'Growth Analyst & Data Strategist', 'creatorflow' ),
        'avatar' => CREATORFLOW_IMG . '/elena-rossi/64/64',
        'tags'   => [ 'Growth Analytics', 'Systems & Operations' ],
        'cat'    => 'growth-analytics',
        'rating' => 4.91,
        'price'  => 160,
    ],
];
?>

<section class="pt-24 pb-8 sm:pt-32 sm:pb-12">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="reveal font-heading text-4xl font-medium tracking-tight text-brand-dark sm:text-5xl">
            <?php esc_html_e( 'Find your perfect mentor.', 'creatorflow' ); ?>
        </h1>
        <p class="mx-auto mt-4 max-w-2xl text-base leading-relaxed text-brand-dark/70">
            <?php esc_html_e( 'Browse our curated roster of active creators ready to help you break through your next plateau.', 'creatorflow' ); ?>
        </p>
    </div>
</section>

<!-- Filter Tabs -->
<section class="pb-8">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-center gap-2" id="mentor-filters">
            <?php foreach ( $categories as $key => $label ) : ?>
                <button class="mentor-filter rounded-full border border-brand-dark/10 px-4 py-2 text-sm font-medium text-brand-dark/70 transition hover:border-brand-pink/30 hover:text-brand-pink <?php echo 'all' === $key ? 'bg-brand-dark text-white border-brand-dark hover:text-white' : 'bg-white'; ?>" data-filter="<?php echo esc_attr( $key ); ?>">
                    <?php echo esc_html( $label ); ?>
                </button>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Mentor Grid -->
<section class="pb-24 sm:pb-32">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3" id="mentor-grid">
            <?php foreach ( $mentors as $mentor ) : ?>
            <article class="mentor-card group rounded-2xl border border-brand-dark/10 bg-white p-6 transition-all hover:shadow-lg hover:shadow-brand-dark/5 hover:border-brand-pink/20" data-category="<?php echo esc_attr( $mentor['cat'] ); ?>">
                <div class="flex items-start gap-4">
                    <div class="shrink-0">
                        <img src="<?php echo esc_url( $mentor['avatar'] ); ?>" alt="<?php echo esc_attr( $mentor['name'] ); ?>" width="64" height="64" class="h-16 w-16 rounded-xl object-cover" loading="lazy" />
                    </div>
                    <div class="min-w-0 flex-1">
                        <h3 class="font-heading text-lg font-medium tracking-tight text-brand-dark"><?php echo esc_html( $mentor['name'] ); ?></h3>
                        <p class="mt-0.5 text-xs text-brand-dark/60"><?php echo esc_html( $mentor['title'] ); ?></p>
                        <div class="mt-1 flex items-center gap-1 text-sm font-medium text-brand-dark">
                            <?php echo esc_html( number_format_i18n( $mentor['rating'], 2 ) ); ?>
                            <iconify-icon icon="solar:star-bold" width="14" height="14" class="text-yellow-400"></iconify-icon>
                        </div>
                    </div>
                </div>
                <div class="mt-4 flex flex-wrap gap-1.5">
                    <?php foreach ( $mentor['tags'] as $tag ) : ?>
                        <span class="rounded-full border border-brand-dark/5 bg-brand-dark/[0.03] px-2.5 py-0.5 text-xs text-brand-dark/70"><?php echo esc_html( $tag ); ?></span>
                    <?php endforeach; ?>
                </div>
                <div class="mt-5 flex items-center justify-between border-t border-brand-dark/5 pt-4">
                    <div>
                        <span class="font-heading text-xl font-medium tracking-tight text-brand-dark">$<?php echo esc_html( $mentor['price'] ); ?></span>
                        <span class="text-xs text-brand-dark/50">/session</span>
                    </div>
                    <button class="inline-flex items-center gap-1.5 rounded-full bg-brand-dark px-4 py-2 text-xs font-medium text-white transition hover:bg-brand-pink"><?php echo creatorflow_solar_icon( 'calendar-linear', 14 ); ?><?php esc_html_e( 'Book', 'creatorflow' ); ?></button>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="border-t border-brand-dark/5 bg-brand-light/30 py-16 sm:py-24">
    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="reveal font-heading text-3xl font-medium tracking-tight text-brand-dark sm:text-4xl">
            <?php esc_html_e( 'Not sure who to pick?', 'creatorflow' ); ?>
        </h2>
        <p class="mx-auto mt-4 max-w-xl text-sm leading-relaxed text-brand-dark/70">
            <?php esc_html_e( 'Take our quick assessment and we\'ll match you with the perfect mentor for your goals.', 'creatorflow' ); ?>
        </p>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="mt-8 inline-flex items-center gap-2 rounded-full bg-brand-dark px-8 py-4 text-sm font-medium text-white transition hover:bg-brand-pink">
            <?php echo creatorflow_solar_icon( 'magic-star-linear' ); ?>
            <?php esc_html_e( 'Get matched', 'creatorflow' ); ?>
        </a>
    </div>
</section>

<?php
get_footer();
