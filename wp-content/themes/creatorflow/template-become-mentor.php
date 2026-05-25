<?php
/**
 * Template Name: Become a Mentor
 *
 * @package CreatorFlow
 * @since 1.0.0
 */

get_header();

$benefits = [
    [
        'icon'  => 'dollar-linear',
        'title' => __( 'Set your own rates', 'creatorflow' ),
        'desc'  => __( 'You decide what your time is worth. Choose your pricing per session and adjust whenever you want.', 'creatorflow' ),
    ],
    [
        'icon'  => 'clock-circle-linear',
        'title' => __( 'Flexible schedule', 'creatorflow' ),
        'desc'  => __( 'Accept sessions around your existing content calendar. No minimum commitment required.', 'creatorflow' ),
    ],
    [
        'icon'  => 'users-group-rounded-linear',
        'title' => __( 'Reach new audiences', 'creatorflow' ),
        'desc'  => __( 'Get discovered by motivated creators who are actively looking for your exact expertise.', 'creatorflow' ),
    ],
];

$steps = [
    [
        'num'   => '01',
        'title' => __( 'Submit your application', 'creatorflow' ),
        'desc'  => __( 'Tell us about your content journey, audience metrics, and the specific areas where you can provide the most value.', 'creatorflow' ),
    ],
    [
        'num'   => '02',
        'title' => __( 'Vetting & review', 'creatorflow' ),
        'desc'  => __( 'Our team manually reviews every application. We look for proven results, clear communication, and genuine passion for teaching.', 'creatorflow' ),
    ],
    [
        'num'   => '03',
        'title' => __( 'Set up your profile', 'creatorflow' ),
        'desc'  => __( 'We\'ll help you craft a compelling profile with your bio, expertise tags, session formats, and pricing.', 'creatorflow' ),
    ],
    [
        'num'   => '04',
        'title' => __( 'Start mentoring', 'creatorflow' ),
        'desc'  => __( 'Go live, accept booking requests, and get paid. We handle payments, scheduling, and support.', 'creatorflow' ),
    ],
];

$team_members = [
    [ 'name' => 'Sarah Jenkins', 'title' => __( 'Brand Strategist', 'creatorflow' ), 'img' => CREATORFLOW_IMG . '/sarah-jenkins/56/56', 'sessions' => 47, 'rating' => 4.98 ],
    [ 'name' => 'David Chen', 'title' => __( 'Video Growth Expert', 'creatorflow' ), 'img' => CREATORFLOW_IMG . '/david-chen/56/56', 'sessions' => 38, 'rating' => 4.92 ],
    [ 'name' => 'Amina Yusuf', 'title' => __( 'Lifestyle Creator', 'creatorflow' ), 'img' => CREATORFLOW_IMG . '/amina-yusuf/56/56', 'sessions' => 52, 'rating' => 4.95 ],
];
?>

<!-- Hero -->
<section class="pt-24 pb-12 sm:pt-32 sm:pb-16">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <h1 class="reveal font-heading text-4xl font-medium tracking-tight text-brand-dark sm:text-5xl">
                <?php esc_html_e( 'Share your expertise. Earn on your terms.', 'creatorflow' ); ?>
            </h1>
            <p class="hero-subtitle mx-auto mt-4 max-w-2xl text-base leading-relaxed text-brand-dark/70">
                <?php esc_html_e( 'Join a curated network of top creators who mentor the next generation. Set your rates, manage your availability, and get paid for the knowledge you\'ve already earned.', 'creatorflow' ); ?>
            </p>
            <a href="#apply-form" class="mt-8 inline-flex items-center gap-2 rounded-full bg-brand-dark px-8 py-4 text-sm font-medium text-white transition hover:bg-brand-pink shadow-lg shadow-brand-dark/10">
                <?php echo creatorflow_solar_icon( 'user-plus-rounded-linear' ); ?>
                <?php esc_html_e( 'Apply Now', 'creatorflow' ); ?>
            </a>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="border-y border-brand-dark/5 bg-brand-light/30 py-10">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-3 gap-8 text-center">
            <div>
                <div class="stat-item font-heading text-3xl font-medium tracking-tight text-brand-dark">50+</div>
                <div class="mt-1 text-sm text-brand-dark/60"><?php esc_html_e( 'Active mentors', 'creatorflow' ); ?></div>
            </div>
            <div>
                <div class="stat-item font-heading text-3xl font-medium tracking-tight text-brand-dark">10k+</div>
                <div class="mt-1 text-sm text-brand-dark/60"><?php esc_html_e( 'Sessions completed', 'creatorflow' ); ?></div>
            </div>
            <div>
                <div class="stat-item font-heading text-3xl font-medium tracking-tight text-brand-dark">$2.5k</div>
                <div class="mt-1 text-sm text-brand-dark/60"><?php esc_html_e( 'Avg. monthly earnings', 'creatorflow' ); ?></div>
            </div>
        </div>
    </div>
</section>

<!-- Why Join -->
<section class="py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mb-12 max-w-2xl">
            <h2 class="reveal font-heading text-3xl font-medium tracking-tight text-brand-dark sm:text-4xl">
                <?php esc_html_e( 'Why join CreatorFlow?', 'creatorflow' ); ?>
            </h2>
        </div>
        <div class="grid gap-6 md:grid-cols-3">
            <?php foreach ( $benefits as $benefit ) : ?>
                <div class="rounded-2xl border border-brand-dark/10 bg-white p-8 transition-all hover:shadow-md">
                    <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-xl bg-brand-dark/5 text-brand-dark">
                        <?php echo creatorflow_solar_icon( $benefit['icon'], 24 ); ?>
                    </div>
                    <h3 class="font-heading text-xl font-medium tracking-tight text-brand-dark"><?php echo esc_html( $benefit['title'] ); ?></h3>
                    <p class="mt-3 text-sm leading-relaxed text-brand-dark/60"><?php echo esc_html( $benefit['desc'] ); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="border-t border-brand-dark/5 bg-brand-light/30 py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mb-16 max-w-2xl">
            <h2 class="reveal font-heading text-3xl font-medium tracking-tight text-brand-dark sm:text-4xl">
                <?php esc_html_e( 'How it works.', 'creatorflow' ); ?>
            </h2>
        </div>
        <div class="grid gap-6 md:grid-cols-4">
            <?php foreach ( $steps as $step ) : ?>
                <div class="relative">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-brand-dark text-sm font-medium text-white"><?php echo esc_html( $step['num'] ); ?></div>
                    <h3 class="font-heading text-lg font-medium tracking-tight text-brand-dark"><?php echo esc_html( $step['title'] ); ?></h3>
                    <p class="mt-2 text-sm leading-relaxed text-brand-dark/60"><?php echo esc_html( $step['desc'] ); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Mentor Previews -->
<section class="py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mb-12 text-center">
            <h2 class="reveal font-heading text-3xl font-medium tracking-tight text-brand-dark sm:text-4xl">
                <?php esc_html_e( 'Join creators like them.', 'creatorflow' ); ?>
            </h2>
        </div>
        <div class="grid gap-6 md:grid-cols-3">
            <?php foreach ( $team_members as $member ) : ?>
            <div class="rounded-2xl border border-brand-dark/10 bg-white p-6 flex items-start gap-4">
                <img src="<?php echo esc_url( $member['img'] ); ?>" alt="<?php echo esc_attr( $member['name'] ); ?>" width="56" height="56" class="h-14 w-14 rounded-xl object-cover" loading="lazy" />
                <div>
                    <div class="font-heading font-medium text-brand-dark"><?php echo esc_html( $member['name'] ); ?></div>
                    <div class="text-xs text-brand-dark/60"><?php echo esc_html( $member['title'] ); ?></div>
                    <div class="mt-1 flex items-center gap-3 text-xs text-brand-dark/50">
                        <span class="flex items-center gap-1"><iconify-icon icon="solar:star-bold" width="12" height="12" class="text-yellow-400"></iconify-icon><?php echo esc_html( number_format_i18n( $member['rating'], 2 ) ); ?></span>
                        <span><?php echo esc_html( $member['sessions'] ); ?> sessions</span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Application Form -->
<section id="apply-form" class="border-t border-brand-dark/5 bg-brand-light/30 py-16 sm:py-24">
    <div class="mx-auto max-w-2xl px-4 sm:px-6 lg:px-8">
        <div class="mb-12 text-center">
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-brand-dark/5 text-brand-dark mb-4"><?php echo creatorflow_solar_icon( 'pen-new-round-linear', 20 ); ?></span>
            <h2 class="font-heading text-3xl font-medium tracking-tight text-brand-dark"><?php esc_html_e( 'Apply to become a mentor.', 'creatorflow' ); ?></h2>
            <p class="mt-2 text-sm text-brand-dark/60"><?php esc_html_e( 'We\'ll review your application and get back to you within 5 business days.', 'creatorflow' ); ?></p>
        </div>

        <?php
        $mf_status = sanitize_text_field( wp_unslash( $_GET['mf_status'] ?? '' ) );
        $mf_messages = [
            'sent'  => __( 'Application submitted! We will review it and get back to you within 5 business days.', 'creatorflow' ),
            'error' => __( 'Something went wrong. Please try again or email us directly.', 'creatorflow' ),
            'empty' => __( 'Please fill in all required fields before submitting.', 'creatorflow' ),
        ];
        if ( $mf_status && isset( $mf_messages[ $mf_status ] ) ) :
        ?>
        <div class="cf-status cf-status--<?php echo esc_attr( $mf_status ); ?>">
            <?php echo esc_html( $mf_messages[ $mf_status ] ); ?>
        </div>
        <?php endif; ?>

        <form class="space-y-6" method="POST" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
            <?php wp_nonce_field( 'cf_mentor_apply', 'cf_mentor_nonce' ); ?>
            <input type="hidden" name="action" value="cf_mentor_apply_submit">

            <div class="grid gap-6 sm:grid-cols-2">
                <div>
                    <label for="mentor-name" class="block text-sm font-medium text-brand-dark mb-1.5"><?php esc_html_e( 'Full name', 'creatorflow' ); ?></label>
                    <input type="text" id="mentor-name" name="mentor_name" required class="block w-full rounded-xl border border-brand-dark/10 bg-white px-4 py-3 text-sm text-brand-dark outline-none transition focus:border-brand-pink/50 focus:ring-1 focus:ring-brand-pink/20 placeholder:text-brand-dark/30" placeholder="<?php esc_attr_e( 'e.g. Alex Rivera', 'creatorflow' ); ?>" />
                </div>
                <div>
                    <label for="mentor-email" class="block text-sm font-medium text-brand-dark mb-1.5"><?php esc_html_e( 'Email address', 'creatorflow' ); ?></label>
                    <input type="email" id="mentor-email" name="mentor_email" required class="block w-full rounded-xl border border-brand-dark/10 bg-white px-4 py-3 text-sm text-brand-dark outline-none transition focus:border-brand-pink/50 focus:ring-1 focus:ring-brand-pink/20 placeholder:text-brand-dark/30" placeholder="<?php esc_attr_e( 'you@example.com', 'creatorflow' ); ?>" />
                </div>
            </div>

            <div>
                <label for="mentor-platform" class="block text-sm font-medium text-brand-dark mb-1.5"><?php esc_html_e( 'Primary platform', 'creatorflow' ); ?></label>
                <select id="mentor-platform" name="mentor_platform" class="block w-full rounded-xl border border-brand-dark/10 bg-white px-4 py-3 text-sm text-brand-dark outline-none transition focus:border-brand-pink/50 focus:ring-1 focus:ring-brand-pink/20">
                    <option value=""><?php esc_html_e( 'Select a platform...', 'creatorflow' ); ?></option>
                    <option value="youtube">YouTube</option>
                    <option value="instagram">Instagram</option>
                    <option value="tiktok">TikTok</option>
                    <option value="twitter">X / Twitter</option>
                    <option value="linkedin">LinkedIn</option>
                    <option value="newsletter">Newsletter</option>
                    <option value="multiple">Multiple platforms</option>
                </select>
            </div>

            <div>
                <label for="mentor-social" class="block text-sm font-medium text-brand-dark mb-1.5"><?php esc_html_e( 'Social / channel URL', 'creatorflow' ); ?></label>
                <input type="url" id="mentor-social" name="mentor_social" required class="block w-full rounded-xl border border-brand-dark/10 bg-white px-4 py-3 text-sm text-brand-dark outline-none transition focus:border-brand-pink/50 focus:ring-1 focus:ring-brand-pink/20 placeholder:text-brand-dark/30" placeholder="<?php esc_attr_e( 'https://youtube.com/@yourchannel', 'creatorflow' ); ?>" />
            </div>

            <div>
                <label for="mentor-audience" class="block text-sm font-medium text-brand-dark mb-1.5"><?php esc_html_e( 'Audience size / key metrics', 'creatorflow' ); ?></label>
                <input type="text" id="mentor-audience" name="mentor_audience" class="block w-full rounded-xl border border-brand-dark/10 bg-white px-4 py-3 text-sm text-brand-dark outline-none transition focus:border-brand-pink/50 focus:ring-1 focus:ring-brand-pink/20 placeholder:text-brand-dark/30" placeholder="<?php esc_attr_e( 'e.g. 150k subscribers, 5M monthly views', 'creatorflow' ); ?>" />
            </div>

            <div>
                <label for="mentor-expertise" class="block text-sm font-medium text-brand-dark mb-1.5"><?php esc_html_e( 'Areas of expertise', 'creatorflow' ); ?></label>
                <textarea id="mentor-expertise" name="mentor_expertise" rows="3" class="block w-full rounded-xl border border-brand-dark/10 bg-white px-4 py-3 text-sm text-brand-dark outline-none transition focus:border-brand-pink/50 focus:ring-1 focus:ring-brand-pink/20 placeholder:text-brand-dark/30 resize-none" placeholder="<?php esc_attr_e( 'Tell us what you can teach. Video strategy, copywriting, brand deals, analytics, systems, design...', 'creatorflow' ); ?>"></textarea>
            </div>

            <div>
                <label for="mentor-bio" class="block text-sm font-medium text-brand-dark mb-1.5"><?php esc_html_e( 'Why do you want to mentor?', 'creatorflow' ); ?></label>
                <textarea id="mentor-bio" name="mentor_bio" rows="4" class="block w-full rounded-xl border border-brand-dark/10 bg-white px-4 py-3 text-sm text-brand-dark outline-none transition focus:border-brand-pink/50 focus:ring-1 focus:ring-brand-pink/20 placeholder:text-brand-dark/30 resize-none" placeholder="<?php esc_attr_e( 'Share your motivation and what makes your perspective unique...', 'creatorflow' ); ?>"></textarea>
            </div>

            <button type="submit" class="inline-flex w-full items-center justify-center gap-2 rounded-full bg-brand-dark px-8 py-4 text-sm font-medium text-white transition hover:bg-brand-pink shadow-lg shadow-brand-dark/10">
                <?php echo creatorflow_solar_icon( 'send-square-linear' ); ?>
                <?php esc_html_e( 'Submit Application', 'creatorflow' ); ?>
            </button>
        </form>
    </div>
</section>

<?php
get_footer();
