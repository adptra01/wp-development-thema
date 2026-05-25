<?php
/**
 * Template Name: Contact
 */

get_header();
?>

<!-- Hero -->
<section class="border-b border-brand-dark/5 bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <span class="inline-block rounded-full bg-brand-pink/10 px-4 py-1.5 text-xs font-medium text-brand-pink tracking-wide mb-6"><?php esc_html_e( 'Get in Touch', 'creatorflow' ); ?></span>
            <h1 class="reveal font-heading text-4xl font-medium tracking-tight text-brand-dark sm:text-5xl lg:text-6xl">
                <?php esc_html_e( "We'd love to hear from you.", 'creatorflow' ); ?>
            </h1>
            <p class="mt-6 text-base leading-relaxed text-brand-dark/60 sm:text-lg max-w-2xl mx-auto">
                <?php esc_html_e( 'Have a question, a suggestion, or want to join as a mentor? Reach out — we reply within 24 hours.', 'creatorflow' ); ?>
            </p>
        </div>
    </div>
</section>

<!-- Contact Info -->
<section class="bg-white py-16 sm:py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <?php
            $admin_email = get_option( 'admin_email' );
            $contacts = [
                [
                    'icon'  => 'letter-linear',
                    'title' => __( 'Email Us', 'creatorflow' ),
                    'desc'  => __( 'For general inquiries and support.', 'creatorflow' ),
                    'link'  => 'mailto:' . $admin_email,
                    'label' => $admin_email,
                ],
                [
                    'icon'  => 'chat-round-dots-linear',
                    'title' => __( 'Live Chat', 'creatorflow' ),
                    'desc'  => __( 'Chat with our team in real time.', 'creatorflow' ),
                    'link'  => '#',
                    'label' => __( 'Start a Conversation', 'creatorflow' ),
                ],
                [
                    'icon'  => 'users-group-rounded-linear',
                    'title' => __( 'Mentor Applications', 'creatorflow' ),
                    'desc'  => __( 'Interested in becoming a mentor?', 'creatorflow' ),
                    'link'  => home_url( '/become-a-mentor/' ),
                    'label' => __( 'Apply Here', 'creatorflow' ),
                ],
            ];
            foreach ( $contacts as $c ) :
            ?>
            <div class="category-card rounded-3xl border border-brand-dark/10 bg-white p-8 transition-all duration-300 hover:-translate-y-1 hover:border-brand-pink/20 hover:shadow-xl hover:shadow-brand-pink/5">
                <div class="mb-5 flex h-11 w-11 items-center justify-center rounded-full bg-brand-dark/5 text-brand-dark">
                    <?php echo creatorflow_solar_icon( $c['icon'], 22 ); ?>
                </div>
                <h3 class="font-heading text-lg font-medium tracking-tight text-brand-dark"><?php echo esc_html( $c['title'] ); ?></h3>
                <p class="mt-2 text-sm leading-relaxed text-brand-dark/60"><?php echo esc_html( $c['desc'] ); ?></p>
                <a href="<?php echo esc_url( $c['link'] ); ?>" class="mt-4 inline-flex items-center gap-1.5 text-sm font-medium text-brand-pink transition hover:text-[#e01e65]">
                    <?php echo esc_html( $c['label'] ); ?>
                    <?php echo creatorflow_solar_icon( 'arrow-right-linear', 14 ); ?>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Contact Form -->
<section class="border-t border-brand-dark/5 bg-brand-dark/5 py-24 sm:py-32">
    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="reveal font-heading text-3xl font-medium tracking-tight text-brand-dark sm:text-4xl">
                <?php esc_html_e( 'Send us a message', 'creatorflow' ); ?>
            </h2>
            <p class="mt-4 text-base leading-relaxed text-brand-dark/60">
                <?php esc_html_e( 'Fill out the form below and we will get back to you as soon as possible.', 'creatorflow' ); ?>
            </p>
        </div>

        <?php
        $cf_status = sanitize_text_field( wp_unslash( $_GET['cf_status'] ?? '' ) );
        $cf_messages = [
            'sent'  => __( 'Your message has been sent! We will get back to you within 24 hours.', 'creatorflow' ),
            'error' => __( 'Something went wrong. Please try again or email us directly.', 'creatorflow' ),
            'empty' => __( 'Please fill in all fields before submitting.', 'creatorflow' ),
        ];
        if ( $cf_status && isset( $cf_messages[ $cf_status ] ) ) :
        ?>
        <div class="cf-status cf-status--<?php echo esc_attr( $cf_status ); ?>">
            <?php echo esc_html( $cf_messages[ $cf_status ] ); ?>
        </div>
        <?php endif; ?>

        <form class="mt-12 space-y-6" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
            <?php wp_nonce_field( 'creatorflow_contact', 'cf_contact_nonce' ); ?>
            <input type="hidden" name="action" value="creatorflow_contact_submit">

            <div class="grid gap-6 sm:grid-cols-2">
                <div>
                    <label for="cf-name" class="block mb-2 text-sm font-medium text-brand-dark"><?php esc_html_e( 'Full Name', 'creatorflow' ); ?></label>
                    <input type="text" id="cf-name" name="cf_name" required
                        class="w-full rounded-xl border border-brand-dark/10 bg-white px-4 py-3 text-sm text-brand-dark placeholder-brand-dark/30 transition focus:border-brand-pink/40 focus:outline-none focus:ring-2 focus:ring-brand-pink/10">
                </div>
                <div>
                    <label for="cf-email" class="block mb-2 text-sm font-medium text-brand-dark"><?php esc_html_e( 'Email Address', 'creatorflow' ); ?></label>
                    <input type="email" id="cf-email" name="cf_email" required
                        class="w-full rounded-xl border border-brand-dark/10 bg-white px-4 py-3 text-sm text-brand-dark placeholder-brand-dark/30 transition focus:border-brand-pink/40 focus:outline-none focus:ring-2 focus:ring-brand-pink/10">
                </div>
            </div>

            <div>
                <label for="cf-subject" class="block mb-2 text-sm font-medium text-brand-dark"><?php esc_html_e( 'Subject', 'creatorflow' ); ?></label>
                <select id="cf-subject" name="cf_subject" required
                    class="w-full rounded-xl border border-brand-dark/10 bg-white px-4 py-3 text-sm text-brand-dark transition focus:border-brand-pink/40 focus:outline-none focus:ring-2 focus:ring-brand-pink/10">
                    <option value=""><?php esc_html_e( 'Select a topic...', 'creatorflow' ); ?></option>
                    <option value="general"><?php esc_html_e( 'General Inquiry', 'creatorflow' ); ?></option>
                    <option value="support"><?php esc_html_e( 'Support', 'creatorflow' ); ?></option>
                    <option value="mentor"><?php esc_html_e( 'Mentor Application', 'creatorflow' ); ?></option>
                    <option value="partnership"><?php esc_html_e( 'Partnership', 'creatorflow' ); ?></option>
                    <option value="other"><?php esc_html_e( 'Other', 'creatorflow' ); ?></option>
                </select>
            </div>

            <div>
                <label for="cf-message" class="block mb-2 text-sm font-medium text-brand-dark"><?php esc_html_e( 'Message', 'creatorflow' ); ?></label>
                <textarea id="cf-message" name="cf_message" rows="5" required
                    class="w-full rounded-xl border border-brand-dark/10 bg-white px-4 py-3 text-sm text-brand-dark placeholder-brand-dark/30 transition focus:border-brand-pink/40 focus:outline-none focus:ring-2 focus:ring-brand-pink/10"></textarea>
            </div>

            <button type="submit"
                class="inline-flex items-center justify-center gap-2 rounded-full bg-brand-pink px-8 py-3.5 text-sm font-medium text-white transition hover:bg-[#e01e65] shadow-sm shadow-brand-pink/20">
                <?php echo creatorflow_solar_icon( 'sent-letter-linear', 16 ); ?>
                <?php esc_html_e( 'Send Message', 'creatorflow' ); ?>
            </button>
        </form>
    </div>
</section>

<!-- FAQ -->
<section class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <span class="inline-block rounded-full bg-brand-dark/5 px-4 py-1.5 text-xs font-medium text-brand-dark tracking-wide mb-6"><?php esc_html_e( 'FAQ', 'creatorflow' ); ?></span>
            <h2 class="reveal font-heading text-3xl font-medium tracking-tight text-brand-dark sm:text-4xl">
                <?php esc_html_e( 'Quick answers', 'creatorflow' ); ?>
            </h2>
        </div>
        <div class="mt-12 space-y-3">
            <?php
            $faqs = [
                [
                    'q' => __( 'How quickly do you respond?', 'creatorflow' ),
                    'a' => __( 'We aim to respond to all inquiries within 24 hours during business days. Most messages get a reply within a few hours.', 'creatorflow' ),
                ],
                [
                    'q' => __( 'Can I apply to be a mentor?', 'creatorflow' ),
                    'a' => __( 'Absolutely! Head over to our Become a Mentor page and fill out the application. Our team reviews every submission personally.', 'creatorflow' ),
                ],
                [
                    'q' => __( 'Do you offer refunds?', 'creatorflow' ),
                    'a' => __( 'Yes. If you are not satisfied with your first mentorship session, we offer a full refund within 14 days of purchase.', 'creatorflow' ),
                ],
                [
                    'q' => __( 'Can I suggest a mentor?', 'creatorflow' ),
                    'a' => __( 'We love hearing recommendations. Drop us a message with the name and we will reach out to them on your behalf.', 'creatorflow' ),
                ],
            ];
            foreach ( $faqs as $faq ) :
            ?>
            <details class="faq-item group rounded-2xl border border-brand-dark/10 transition hover:border-brand-dark/20 open:border-brand-pink/20">
                <summary class="flex cursor-pointer items-center justify-between px-6 py-5 text-sm font-medium text-brand-dark transition [&::-webkit-details-marker]:hidden">
                    <span><?php echo esc_html( $faq['q'] ); ?></span>
                    <span class="ml-4 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-brand-dark/5 text-brand-dark/50 transition group-open:bg-brand-pink/10 group-open:text-brand-pink">
                        <iconify-icon icon="solar:alt-arrow-down-linear" width="14" height="14" class="transition-transform group-open:rotate-180"></iconify-icon>
                    </span>
                </summary>
                <div class="px-6 pb-5 text-sm leading-relaxed text-brand-dark/60 border-t border-brand-dark/5 pt-4">
                    <?php echo esc_html( $faq['a'] ); ?>
                </div>
            </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
get_footer();
