<?php
/**
 * Front Page Template
 *
 * @package CreatorFlow
 * @since 1.0.0
 */

get_header();
?>

<!-- Hero Section -->
<section class="relative overflow-hidden pt-16 pb-12 sm:pt-24 lg:pt-32 lg:pb-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-brand-pink/5 rounded-full blur-[100px] pointer-events-none" aria-hidden="true"></div>

        <div class="grid items-center gap-12 lg:grid-cols-[1.1fr_0.9fr] lg:gap-8">
            <div class="max-w-2xl relative z-10">
                <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-brand-dark/10 bg-white px-3 py-1.5 text-xs font-medium text-brand-dark/70 shadow-sm">
                    <span class="flex h-2 w-2 rounded-full bg-brand-pink relative">
                        <span class="absolute inset-0 rounded-full bg-brand-pink animate-ping opacity-75"></span>
                    </span>
                    <?php esc_html_e( 'Elite strategists available now', 'creatorflow' ); ?>
                </div>

                <h1 class="reveal font-heading text-4xl font-medium leading-tight tracking-tight text-brand-dark sm:text-5xl lg:text-6xl">
                    <?php esc_html_e( 'Elevate your content game with industry experts.', 'creatorflow' ); ?>
                </h1>

                <p class="hero-subtitle mt-6 max-w-xl text-base leading-relaxed text-brand-dark/70 sm:text-lg">
                    <?php esc_html_e( 'Stop guessing the algorithm. Get practical 1:1 guidance on strategy, production, and monetization from creators who have actually done it.', 'creatorflow' ); ?>
                </p>

                <div id="hero-cta" class="mt-8 flex flex-col gap-4 sm:flex-row">
                    <a href="#categories" class="inline-flex items-center justify-center gap-2 rounded-full bg-brand-dark px-6 py-3.5 text-sm font-medium text-white transition hover:bg-brand-dark/90 shadow-lg shadow-brand-dark/10">
                        <?php echo creatorflow_solar_icon( 'magnifer-linear' ); ?>
                        <?php esc_html_e( 'Browse Mentors', 'creatorflow' ); ?>
                    </a>
                    <a href="#how" class="inline-flex items-center justify-center gap-2 rounded-full border border-brand-dark/10 bg-white px-6 py-3.5 text-sm font-medium text-brand-dark transition hover:bg-brand-dark/5">
                        <?php echo creatorflow_solar_icon( 'play-circle-linear' ); ?>
                        <?php esc_html_e( 'See how it works', 'creatorflow' ); ?>
                    </a>
                </div>

                <div class="mt-12 grid max-w-lg grid-cols-3 gap-6 border-t border-brand-dark/5 pt-8">
                    <div class="stat-item flex items-start gap-2 sm:block">
                        <?php echo creatorflow_solar_icon( 'user-plus-linear', 18 ); ?>
                        <div>
                            <div class="font-heading text-2xl font-medium tracking-tight text-brand-dark">50+</div>
                            <div class="mt-1 text-xs text-brand-dark/60"><?php esc_html_e( 'Vetted creators', 'creatorflow' ); ?></div>
                        </div>
                    </div>
                    <div class="stat-item flex items-start gap-2 sm:block">
                        <?php echo creatorflow_solar_icon( 'clock-circle-linear', 18 ); ?>
                        <div>
                            <div class="font-heading text-2xl font-medium tracking-tight text-brand-dark">10k+</div>
                            <div class="mt-1 text-xs text-brand-dark/60"><?php esc_html_e( 'Hours mentored', 'creatorflow' ); ?></div>
                        </div>
                    </div>
                    <div class="stat-item flex items-start gap-2 sm:block">
                        <?php echo creatorflow_solar_icon( 'star-linear', 18 ); ?>
                        <div>
                            <div class="font-heading text-2xl font-medium tracking-tight text-brand-dark">4.9/5</div>
                            <div class="mt-1 text-xs text-brand-dark/60"><?php esc_html_e( 'Average rating', 'creatorflow' ); ?></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative mx-auto w-full max-w-md lg:max-w-none">
                <div class="rounded-[2.5rem] p-[1px]" style="background:linear-gradient(135deg,rgba(17,35,69,0.15),rgba(251,40,117,0.2),rgba(17,35,69,0.05))">
                    <div class="relative overflow-hidden rounded-[calc(2.5rem-1px)] bg-white p-2">
                        <div class="relative overflow-hidden rounded-[2rem] aspect-[4/5]">
                            <img src="<?php echo esc_url( CREATORFLOW_IMG . '/elena-rossi/600/750' ); ?>" alt="<?php esc_attr_e( 'Content creator mentoring session', 'creatorflow' ); ?>" width="600" height="750" class="h-full w-full object-cover" fetchpriority="high" />
                            <div class="absolute bottom-6 left-6 right-6 rounded-2xl border border-white/20 bg-white/90 p-4 backdrop-blur-md shadow-xl">
                                <div class="flex items-center gap-3">
                                    <img src="<?php echo esc_url( CREATORFLOW_IMG . '/jamie-torres/40/40' ); ?>" alt="" width="40" height="40" class="h-10 w-10 rounded-full object-cover border border-brand-dark/10" loading="lazy" />
                                    <div class="flex-1">
                                        <div class="text-sm font-medium text-brand-dark"><?php esc_html_e( 'Session with Elena', 'creatorflow' ); ?></div>
                                        <div class="text-xs text-brand-dark/60"><?php esc_html_e( 'Brand Strategy Review', 'creatorflow' ); ?></div>
                                    </div>
                                    <div class="flex h-8 w-8 items-center justify-center rounded-full bg-brand-pink/10 text-brand-pink">
                                        <?php echo creatorflow_solar_icon( 'check-circle-linear' ); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Logo Cloud -->
<section id="logos" class="border-y border-brand-dark/5 bg-brand-light/30 py-8">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <p class="text-center text-xs font-medium uppercase tracking-[0.15em] text-brand-dark/40 mb-6"><?php esc_html_e( 'Mentors featured in', 'creatorflow' ); ?></p>
        <div class="flex flex-wrap justify-center gap-8 md:gap-16 opacity-60 grayscale">
            <div class="logo-item text-lg font-heading font-medium tracking-tight">Forbes</div>
            <div class="logo-item text-lg font-heading font-medium tracking-tight">Vogue</div>
            <div class="logo-item text-lg font-heading font-medium tracking-tight">TechCrunch</div>
            <div class="logo-item text-lg font-heading font-medium tracking-tight">FastCompany</div>
        </div>
    </div>
</section>

<!-- How It Works -->
<section id="how" class="py-16 sm:py-24 lg:py-32 relative">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mb-16 max-w-2xl">
            <h2 class="reveal font-heading text-3xl font-medium tracking-tight text-brand-dark sm:text-4xl">
                <?php esc_html_e( 'Your path to mastering the digital landscape.', 'creatorflow' ); ?>
            </h2>
            <p class="mt-4 text-sm leading-relaxed text-brand-dark/70 sm:text-base">
                <?php esc_html_e( 'A streamlined process designed to get you the exact actionable advice you need, without the fluff.', 'creatorflow' ); ?>
            </p>
        </div>

        <div class="grid gap-6 md:grid-cols-3">
            <?php
            $phases = [
                [ 'icon' => 'target-bold-duotone', 'label' => 'Phase 01', 'title' => __( 'Define the goal', 'creatorflow' ), 'desc' => __( 'Identify your current bottleneck—whether it\'s audience retention, aesthetic coherence, or monetization pathways.', 'creatorflow' ) ],
                [ 'icon' => 'users-group-rounded-bold-duotone', 'label' => 'Phase 02', 'title' => __( 'Match with an expert', 'creatorflow' ), 'desc' => __( 'Browse profiles of vetted industry leaders based on your specific niche and desired outcomes.', 'creatorflow' ) ],
                [ 'icon' => 'video-frame-bold-duotone', 'label' => 'Phase 03', 'title' => __( 'Execute in 1:1 sessions', 'creatorflow' ), 'desc' => __( 'Jump on a focused video call to review strategy, analyze data, and build an actionable roadmap together.', 'creatorflow' ) ],
            ];

            foreach ( $phases as $phase ) :
            ?>
            <article class="step-card group rounded-3xl border border-brand-dark/10 bg-white p-8 transition-all duration-300 hover:-translate-y-1 hover:border-brand-pink/40 hover:shadow-xl hover:shadow-brand-pink/5">
                <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-full bg-brand-dark/5 text-brand-dark transition-all duration-300 group-hover:bg-brand-pink/10 group-hover:text-brand-pink group-hover:scale-110">
                    <?php echo creatorflow_solar_icon( $phase['icon'], 24 ); ?>
                </div>
                <div class="text-xs font-medium text-brand-pink mb-2"><?php echo esc_html( $phase['label'] ); ?></div>
                <h3 class="font-heading text-xl font-medium tracking-tight text-brand-dark"><?php echo esc_html( $phase['title'] ); ?></h3>
                <p class="mt-3 text-sm leading-relaxed text-brand-dark/60"><?php echo esc_html( $phase['desc'] ); ?></p>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Categories / Areas of Expertise -->
<section id="categories" class="border-t border-brand-dark/5 bg-brand-light/20 py-16 sm:py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mb-12 flex flex-col gap-6 md:flex-row md:items-end md:justify-between">
            <div class="max-w-2xl">
                <h2 class="reveal font-heading text-3xl font-medium tracking-tight text-brand-dark sm:text-4xl">
                    <?php esc_html_e( 'Areas of expertise.', 'creatorflow' ); ?>
                </h2>
                <p class="mt-4 text-sm leading-relaxed text-brand-dark/70">
                    <?php esc_html_e( 'Targeted support across the entire content lifecycle.', 'creatorflow' ); ?>
                </p>
            </div>
            <a href="<?php echo esc_url( home_url( '/mentors/' ) ); ?>" class="inline-flex items-center gap-2 text-sm font-medium text-brand-pink hover:text-[#e01e65]">
                <?php esc_html_e( 'View all categories', 'creatorflow' ); ?>
                <?php echo creatorflow_solar_icon( 'arrow-right-linear', 16 ); ?>
            </a>
        </div>

        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            <?php
            $categories = [
                [ 'icon' => 'clapperboard-edit-linear', 'title' => __( 'Video Strategy', 'creatorflow' ), 'desc' => __( 'YouTube growth, short-form editing, scripting, and retention mechanics.', 'creatorflow' ) ],
                [ 'icon' => 'pen-linear', 'title' => __( 'Copywriting', 'creatorflow' ), 'desc' => __( 'Newsletters, Twitter threads, persuasive landing pages, and storytelling.', 'creatorflow' ) ],
                [ 'icon' => 'tag-price-linear', 'title' => __( 'Brand & Monetization', 'creatorflow' ), 'desc' => __( 'Sponsorship deals, digital products, positioning, and funnel architecture.', 'creatorflow' ) ],
                [ 'icon' => 'palette-linear', 'title' => __( 'Visual Design', 'creatorflow' ), 'desc' => __( 'Thumbnail design, aesthetic consistency, and platform-native visuals.', 'creatorflow' ) ],
                [ 'icon' => 'chart-square-linear', 'title' => __( 'Growth Analytics', 'creatorflow' ), 'desc' => __( 'Data interpretation, A/B testing, and actionable metric tracking.', 'creatorflow' ) ],
                [ 'icon' => 'laptop-linear', 'title' => __( 'Systems & Operations', 'creatorflow' ), 'desc' => __( 'Content pipelines, hiring editors, and scaling your personal brand.', 'creatorflow' ) ],
            ];

            foreach ( $categories as $cat ) :
            ?>
            <a href="<?php echo esc_url( home_url( '/mentors/' ) ); ?>" class="category-card group flex items-start gap-4 rounded-2xl border border-brand-dark/10 bg-white p-6 transition-all duration-300 hover:-translate-y-0.5 hover:border-brand-pink/40 hover:shadow-lg hover:shadow-brand-pink/5">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-brand-dark text-white transition-all duration-300 group-hover:bg-brand-pink group-hover:scale-110 group-hover:shadow-sm group-hover:shadow-brand-pink/30">
                    <?php echo creatorflow_solar_icon( $cat['icon'], 20 ); ?>
                </div>
                <div class="transition-all duration-300 group-hover:translate-x-0.5">
                    <h3 class="font-heading text-lg font-medium tracking-tight text-brand-dark transition-colors duration-300 group-hover:text-brand-pink"><?php echo esc_html( $cat['title'] ); ?></h3>
                    <p class="mt-1 text-xs leading-relaxed text-brand-dark/60 transition-colors duration-300 group-hover:text-brand-dark/80"><?php echo esc_html( $cat['desc'] ); ?></p>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Profile Feature -->
<section id="profile" class="py-16 sm:py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-[1fr_1.2fr] lg:items-center">
            <div class="order-2 lg:order-1">
                <div class="rounded-3xl p-[1px]" style="background:linear-gradient(135deg,rgba(17,35,69,0.1),rgba(251,40,117,0.15),rgba(17,35,69,0.05))">
                    <div class="rounded-[calc(1.5rem-1px)] bg-white p-6 sm:p-8">
                        <div class="grid gap-6 sm:grid-cols-[1fr_1.5fr]">
                            <div class="profile-image overflow-hidden rounded-2xl aspect-[3/4]">
                                <img src="<?php echo esc_url( CREATORFLOW_IMG . '/sarah-jenkins/400/533' ); ?>" alt="<?php esc_attr_e( 'Mentor profile', 'creatorflow' ); ?>" width="400" height="533" class="h-full w-full object-cover grayscale hover:grayscale-0 transition-all duration-500" loading="lazy" />
                            </div>
                            <div class="flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="inline-flex items-center gap-1 rounded-md bg-brand-pink/10 px-2 py-1 text-xs font-medium uppercase tracking-wider text-brand-pink">
                                            <span class="h-1.5 w-1.5 rounded-full bg-brand-pink"></span>
                                            <?php esc_html_e( 'Top Creator', 'creatorflow' ); ?>
                                        </span>
                                        <div class="flex items-center gap-1 text-sm font-medium text-brand-dark">
                                            4.98 <iconify-icon icon="solar:star-bold" width="14" height="14" class="text-yellow-400"></iconify-icon>
                                        </div>
                                    </div>
                                    <h3 class="font-heading text-2xl font-medium tracking-tight text-brand-dark"><?php esc_html_e( 'Sarah Jenkins', 'creatorflow' ); ?></h3>
                                    <p class="mt-1 text-sm text-brand-dark/60"><?php esc_html_e( 'Creative Director & Brand Strategist', 'creatorflow' ); ?></p>
                                    <div class="mt-4 flex flex-wrap gap-2">
                                        <span class="rounded-full border border-brand-dark/10 px-3 py-1 text-xs text-brand-dark/70">YouTube</span>
                                        <span class="rounded-full border border-brand-dark/10 px-3 py-1 text-xs text-brand-dark/70">Storytelling</span>
                                        <span class="rounded-full border border-brand-dark/10 px-3 py-1 text-xs text-brand-dark/70">Sponsorships</span>
                                    </div>
                                    <p class="mt-4 text-sm leading-relaxed text-brand-dark/70"><?php esc_html_e( 'Helps independent creators transition into scalable media companies. Focuses on deep narrative structure and securing premium brand deals.', 'creatorflow' ); ?></p>
                                </div>
                                <div class="mt-6 flex items-center justify-between border-t border-brand-dark/5 pt-4">
                                    <div>
                                        <div class="text-xs text-brand-dark/50"><?php esc_html_e( '45 min session', 'creatorflow' ); ?></div>
                                        <div class="font-medium text-brand-dark">$150</div>
                                    </div>
                                    <button class="inline-flex items-center gap-2 rounded-full bg-brand-dark px-5 py-2.5 text-sm font-medium text-white transition hover:bg-brand-pink"><?php echo creatorflow_solar_icon( 'calendar-linear', 16 ); ?><?php esc_html_e( 'Book Session', 'creatorflow' ); ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="profile-content order-1 lg:order-2 max-w-xl lg:pl-8">
                <h2 class="reveal font-heading text-3xl font-medium tracking-tight text-brand-dark sm:text-4xl">
                    <?php esc_html_e( 'Learn from the practitioners, not the theorists.', 'creatorflow' ); ?>
                </h2>
                <p class="mt-4 text-sm leading-relaxed text-brand-dark/70 sm:text-base">
                    <?php esc_html_e( 'Every mentor on our platform is actively building in the trenches. You get access to real data, unreleased strategies, and honest feedback on your work from people whose full-time job is understanding what works today.', 'creatorflow' ); ?>
                </p>
                <ul class="mt-8 space-y-4">
                    <li class="flex items-start gap-3 text-sm text-brand-dark/80">
                        <iconify-icon icon="solar:check-circle-bold-duotone" width="20" height="20" class="text-brand-pink shrink-0 mt-0.5"></iconify-icon>
                        <span><?php esc_html_e( 'Rigorous vetting process ensuring only active top 1% creators.', 'creatorflow' ); ?></span>
                    </li>
                    <li class="flex items-start gap-3 text-sm text-brand-dark/80">
                        <iconify-icon icon="solar:check-circle-bold-duotone" width="20" height="20" class="text-brand-pink shrink-0 mt-0.5"></iconify-icon>
                        <span><?php esc_html_e( 'Clear session structures and pre-call questionnaires.', 'creatorflow' ); ?></span>
                    </li>
                    <li class="flex items-start gap-3 text-sm text-brand-dark/80">
                        <iconify-icon icon="solar:check-circle-bold-duotone" width="20" height="20" class="text-brand-pink shrink-0 mt-0.5"></iconify-icon>
                        <span><?php esc_html_e( 'Post-session recordings and actionable roadmaps provided.', 'creatorflow' ); ?></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section id="testimonials" class="bg-brand-dark py-16 sm:py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mb-16 text-center">
            <h2 class="reveal font-heading text-3xl font-medium tracking-tight text-white sm:text-4xl">
                <?php esc_html_e( 'Transformations that speak volumes.', 'creatorflow' ); ?>
            </h2>
        </div>

        <div class="grid gap-6 md:grid-cols-3">
            <article class="testimonial-card rounded-2xl border border-white/10 bg-white/5 p-8 backdrop-blur-sm">
                <div class="flex items-center gap-1 mb-6 text-brand-pink">
                    <?php for ( $i = 0; $i < 5; $i++ ) : ?>
                        <iconify-icon icon="solar:star-bold" width="16" height="16"></iconify-icon>
                    <?php endfor; ?>
                </div>
                <p class="text-sm leading-relaxed text-white/80"><?php esc_html_e( '"My retention graph was flatlining. One session breaking down my intro hook structure changed everything. My next video hit 500k views."', 'creatorflow' ); ?></p>
                <div class="mt-8 flex items-center gap-3">
                    <img src="<?php echo esc_url( CREATORFLOW_IMG . '/david-chen/40/40' ); ?>" alt="" width="40" height="40" class="h-10 w-10 rounded-full object-cover" loading="lazy" />
                    <div>
                        <div class="text-sm font-medium text-white"><?php esc_html_e( 'David Chen', 'creatorflow' ); ?></div>
                        <div class="text-xs text-white/50"><?php esc_html_e( 'Tech Reviewer', 'creatorflow' ); ?></div>
                    </div>
                </div>
            </article>

            <article class="testimonial-card rounded-2xl bg-brand-pink p-8 shadow-2xl shadow-brand-pink/20 relative overflow-hidden">
                <div class="absolute -right-4 -top-4 text-white/10" aria-hidden="true">
                    <iconify-icon icon="solar:quote-right-bold" width="100" height="100"></iconify-icon>
                </div>
                <div class="flex items-center gap-1 mb-6 text-white">
                    <?php for ( $i = 0; $i < 5; $i++ ) : ?>
                        <iconify-icon icon="solar:star-bold" width="16" height="16"></iconify-icon>
                    <?php endfor; ?>
                </div>
                <p class="relative z-10 text-sm leading-relaxed text-white"><?php esc_html_e( '"The clarity I got on my pricing model for sponsorships paid for the session 10x over in my very next brand deal negotiation. Essential."', 'creatorflow' ); ?></p>
                <div class="mt-8 flex items-center gap-3 relative z-10">
                    <img src="<?php echo esc_url( CREATORFLOW_IMG . '/amina-yusuf/40/40' ); ?>" alt="" width="40" height="40" class="h-10 w-10 rounded-full object-cover border border-white/20" loading="lazy" />
                    <div>
                        <div class="text-sm font-medium text-white"><?php esc_html_e( 'Amina Yusuf', 'creatorflow' ); ?></div>
                        <div class="text-xs text-white/80"><?php esc_html_e( 'Lifestyle Creator', 'creatorflow' ); ?></div>
                    </div>
                </div>
            </article>

            <article class="testimonial-card rounded-2xl border border-white/10 bg-white/5 p-8 backdrop-blur-sm">
                <div class="flex items-center gap-1 mb-6 text-brand-pink">
                    <?php for ( $i = 0; $i < 5; $i++ ) : ?>
                        <iconify-icon icon="solar:star-bold" width="16" height="16"></iconify-icon>
                    <?php endfor; ?>
                </div>
                <p class="text-sm leading-relaxed text-white/80"><?php esc_html_e( '"I was completely burnt out creating across 4 platforms. My mentor helped me build a repurposing system that cut my editing time in half."', 'creatorflow' ); ?></p>
                <div class="mt-8 flex items-center gap-3">
                    <img src="<?php echo esc_url( CREATORFLOW_IMG . '/marcus-webb/40/40' ); ?>" alt="" width="40" height="40" class="h-10 w-10 rounded-full object-cover" loading="lazy" />
                    <div>
                        <div class="text-sm font-medium text-white"><?php esc_html_e( 'Marcus Webb', 'creatorflow' ); ?></div>
                        <div class="text-xs text-white/50"><?php esc_html_e( 'Content Educator', 'creatorflow' ); ?></div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- Mentor CTA -->
<section id="mentor-cta" class="relative overflow-hidden py-16 sm:py-24 lg:py-32">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-brand-pink/5 rounded-full blur-[120px] pointer-events-none" aria-hidden="true"></div>
    <div class="cta-content mx-auto max-w-5xl px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <span class="inline-flex items-center justify-center w-12 h-12 rounded-xl bg-brand-pink/10 text-brand-pink mb-6"><?php echo creatorflow_solar_icon( 'rocket-linear', 24 ); ?></span>
        <h2 class="reveal font-heading text-3xl font-medium tracking-tight text-brand-dark sm:text-5xl">
            <?php esc_html_e( 'Monetize your expertise. Shape the next generation.', 'creatorflow' ); ?>
        </h2>
        <p class="mx-auto mt-6 max-w-2xl text-base leading-relaxed text-brand-dark/70">
            <?php esc_html_e( 'Join our curated roster of top-tier creators. Set your own rates, manage your availability, and get paid to share the operational secrets you\'ve already figured out.', 'creatorflow' ); ?>
        </p>
        <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
            <a href="<?php echo esc_url( home_url( '/become-a-mentor/' ) ); ?>" class="inline-flex items-center gap-2 rounded-full bg-brand-dark px-8 py-4 text-sm font-medium text-white transition hover:bg-brand-pink"><?php echo creatorflow_solar_icon( 'user-plus-rounded-linear' ); ?><?php esc_html_e( 'Apply as a Mentor', 'creatorflow' ); ?></a>
            <a href="<?php echo esc_url( home_url( '/#faq' ) ); ?>" class="inline-flex items-center gap-2 rounded-full border border-brand-dark/10 px-8 py-4 text-sm font-medium text-brand-dark transition hover:bg-brand-dark/5"><?php echo creatorflow_solar_icon( 'clipboard-list-linear' ); ?><?php esc_html_e( 'Read Mentor FAQs', 'creatorflow' ); ?></a>
        </div>
    </div>
</section>

<!-- FAQ -->
<section id="faq" class="border-t border-brand-dark/5 bg-brand-light/30 py-16 sm:py-24">
    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
        <div class="mb-12 text-center">
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-brand-dark/5 text-brand-dark mb-4"><?php echo creatorflow_solar_icon( 'chat-round-dots-linear', 20 ); ?></span>
            <h2 class="font-heading text-3xl font-medium tracking-tight text-brand-dark"><?php esc_html_e( 'Common questions.', 'creatorflow' ); ?></h2>
            <p class="mt-2 text-sm text-brand-dark/60"><?php esc_html_e( 'Everything you need to know before your first session.', 'creatorflow' ); ?></p>
        </div>

        <div class="space-y-4">
            <?php
            $faqs = [
                [ 'q' => __( 'How are mentors vetted?', 'creatorflow' ), 'a' => __( 'We manually review every application. We look for verifiable audience size, engagement metrics, revenue figures (for business mentors), and a track record of clearly articulating concepts.', 'creatorflow' ) ],
                [ 'q' => __( 'What happens after I book?', 'creatorflow' ), 'a' => __( 'You\'ll fill out a specific questionnaire so the mentor can prepare. You will receive a calendar invite with a video link. After the call, you\'ll get a recording and any notes taken during the session.', 'creatorflow' ) ],
                [ 'q' => __( 'Can I get a refund if the session wasn\'t helpful?', 'creatorflow' ), 'a' => __( 'Yes. If the mentor doesn\'t show up or fails to provide the value promised in their profile, we offer a full guarantee. We hold funds in escrow until the session is successfully completed.', 'creatorflow' ) ],
            ];

            foreach ( $faqs as $faq ) :
            ?>
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
