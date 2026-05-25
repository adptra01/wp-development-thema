<?php
/**
 * Template Name: About
 */

get_header();
?>

<!-- Hero -->
<section class="relative overflow-hidden border-b border-brand-dark/5 bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <span class="inline-block rounded-full bg-brand-pink/10 px-4 py-1.5 text-xs font-medium text-brand-pink tracking-wide mb-6"><?php esc_html_e( 'Our Story', 'creatorflow' ); ?></span>
            <h1 class="reveal font-heading text-4xl font-medium tracking-tight text-brand-dark sm:text-5xl lg:text-6xl">
                <?php esc_html_e( 'We believe every creator deserves a shortcut.', 'creatorflow' ); ?>
            </h1>
            <p class="mt-6 text-base leading-relaxed text-brand-dark/60 sm:text-lg max-w-2xl mx-auto">
                <?php esc_html_e( 'CreatorFlow connects ambitious digital creators with battle-tested mentors who have walked the path — so you can skip the guesswork and build something that actually works.', 'creatorflow' ); ?>
            </p>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="border-b border-brand-dark/5 bg-white py-16">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 gap-8 sm:grid-cols-4">
            <?php
            $stats = [
                [ 'number' => '500+', 'label' => __( 'Creators Mentored', 'creatorflow' ) ],
                [ 'number' => '50+',  'label' => __( 'Expert Mentors', 'creatorflow' ) ],
                [ 'number' => '92%',  'label' => __( 'Satisfaction Rate', 'creatorflow' ) ],
                [ 'number' => '15+',  'label' => __( 'Countries Reached', 'creatorflow' ) ],
            ];
            foreach ( $stats as $s ) :
            ?>
            <div class="stat-item text-center">
                <div class="font-heading text-3xl font-medium text-brand-dark sm:text-4xl"><?php echo esc_html( $s['number'] ); ?></div>
                <div class="mt-2 text-sm text-brand-dark/50"><?php echo esc_html( $s['label'] ); ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid gap-16 md:grid-cols-2">
            <div>
                <span class="inline-block rounded-full bg-brand-dark/5 px-3.5 py-1 text-xs font-medium text-brand-dark tracking-wide mb-4"><?php esc_html_e( 'Our Mission', 'creatorflow' ); ?></span>
                <h2 class="reveal font-heading text-3xl font-medium tracking-tight text-brand-dark sm:text-4xl">
                    <?php esc_html_e( 'Democratize access to proven content expertise.', 'creatorflow' ); ?>
                </h2>
                <p class="mt-6 text-base leading-relaxed text-brand-dark/60">
                    <?php esc_html_e( 'Most creators waste years figuring out what works. We believe that with the right mentor, you can compress that journey into months. Our platform removes the barriers between aspiring creators and the experts who have already built what they want to build.', 'creatorflow' ); ?>
                </p>
            </div>
            <div>
                <span class="inline-block rounded-full bg-brand-dark/5 px-3.5 py-1 text-xs font-medium text-brand-dark tracking-wide mb-4"><?php esc_html_e( 'Our Vision', 'creatorflow' ); ?></span>
                <h2 class="reveal font-heading text-3xl font-medium tracking-tight text-brand-dark sm:text-4xl">
                    <?php esc_html_e( 'A world where every creator has a trusted advisor.', 'creatorflow' ); ?>
                </h2>
                <p class="mt-6 text-base leading-relaxed text-brand-dark/60">
                    <?php esc_html_e( 'We are building the definitive mentorship network for the creator economy — a place where experience meets ambition, and where the next generation of digital leaders can find the guidance they need to turn their passion into a sustainable career.', 'creatorflow' ); ?>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Values -->
<section class="border-t border-brand-dark/5 bg-brand-dark/5 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <span class="inline-block rounded-full bg-brand-pink/10 px-4 py-1.5 text-xs font-medium text-brand-pink tracking-wide mb-6"><?php esc_html_e( 'Our Values', 'creatorflow' ); ?></span>
            <h2 class="reveal font-heading text-3xl font-medium tracking-tight text-brand-dark sm:text-4xl">
                <?php esc_html_e( 'What we stand for', 'creatorflow' ); ?>
            </h2>
            <p class="mt-4 text-base leading-relaxed text-brand-dark/60">
                <?php esc_html_e( 'These principles guide every decision we make.', 'creatorflow' ); ?>
            </p>
        </div>
        <div class="mt-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <?php
            $values = [
                [
                    'icon'  => 'star-angle-linear',
                    'title' => __( 'Quality Over Quantity', 'creatorflow' ),
                    'desc'  => __( 'We vet every mentor personally. No auto-approve, no filler — just real expertise from people who have built something remarkable.', 'creatorflow' ),
                ],
                [
                    'icon'  => 'hand-heart-linear',
                    'title' => __( 'Generosity First', 'creatorflow' ),
                    'desc'  => __( 'The best mentors give freely without keeping score. We foster a culture where sharing knowledge is the default, not the exception.', 'creatorflow' ),
                ],
                [
                    'icon'  => 'compass-linear',
                    'title' => __( 'Clarity Over Complexity', 'creatorflow' ),
                    'desc'  => __( 'Content strategy is full of jargon and noise. We cut through it with honest, practical advice that actually moves the needle.', 'creatorflow' ),
                ],
                [
                    'icon'  => 'users-group-rounded-linear',
                    'title' => __( 'Community-Driven', 'creatorflow' ),
                    'desc'  => __( 'We are not a marketplace — we are a network. Relationships come before transactions, and every connection strengthens the whole.', 'creatorflow' ),
                ],
                [
                    'icon'  => 'graph-up-linear',
                    'title' => __( 'Results-Oriented', 'creatorflow' ),
                    'desc'  => __( 'Mentorship is not about feeling good — it is about getting better. We measure success by the real outcomes our members achieve.', 'creatorflow' ),
                ],
                [
                    'icon'  => 'shield-check-linear',
                    'title' => __( 'Trust & Safety', 'creatorflow' ),
                    'desc'  => __( 'Every mentor is verified, every session is respectful, and every voice is heard. We maintain a zero-tolerance policy for anything less.', 'creatorflow' ),
                ],
            ];
            foreach ( $values as $v ) :
            ?>
            <div class="category-card rounded-3xl border border-brand-dark/10 bg-white p-8 transition-all duration-300 hover:-translate-y-1 hover:border-brand-pink/20 hover:shadow-xl hover:shadow-brand-pink/5">
                <div class="mb-5 flex h-11 w-11 items-center justify-center rounded-full bg-brand-dark/5 text-brand-dark transition-all duration-300 group-hover:bg-brand-pink/10 group-hover:text-brand-pink">
                    <?php echo creatorflow_solar_icon( $v['icon'], 22 ); ?>
                </div>
                <h3 class="font-heading text-lg font-medium tracking-tight text-brand-dark"><?php echo esc_html( $v['title'] ); ?></h3>
                <p class="mt-3 text-sm leading-relaxed text-brand-dark/60"><?php echo esc_html( $v['desc'] ); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Team CTA -->
<section class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="reveal font-heading text-3xl font-medium tracking-tight text-brand-dark sm:text-4xl">
                <?php esc_html_e( 'Ready to grow with us?', 'creatorflow' ); ?>
            </h2>
            <p class="mt-4 text-base leading-relaxed text-brand-dark/60">
                <?php esc_html_e( 'Whether you are looking for a mentor or ready to become one, there is a place for you in the CreatorFlow network.', 'creatorflow' ); ?>
            </p>
            <div class="mt-8 flex flex-col items-center justify-center gap-4 sm:flex-row">
                <a href="<?php echo esc_url( home_url( '/mentors/' ) ); ?>" class="inline-flex items-center gap-2 rounded-full bg-brand-pink px-6 py-3 text-sm font-medium text-white transition hover:bg-[#e01e65] shadow-sm shadow-brand-pink/20">
                    <?php echo creatorflow_solar_icon( 'magnifer-linear', 16 ); ?>
                    <?php esc_html_e( 'Find a Mentor', 'creatorflow' ); ?>
                </a>
                <a href="<?php echo esc_url( home_url( '/become-a-mentor/' ) ); ?>" class="inline-flex items-center gap-2 rounded-full border border-brand-dark/10 px-6 py-3 text-sm font-medium text-brand-dark transition hover:bg-brand-dark/5">
                    <?php echo creatorflow_solar_icon( 'user-plus-linear', 16 ); ?>
                    <?php esc_html_e( 'Become a Mentor', 'creatorflow' ); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
