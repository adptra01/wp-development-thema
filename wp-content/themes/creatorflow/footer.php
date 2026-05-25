</main>

<footer class="border-t border-brand-dark/10 bg-white py-12">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col gap-10 md:flex-row md:justify-between">
            <div class="max-w-xs">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-2 mb-4 group">
                    <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-brand-dark text-white">
                        <?php echo creatorflow_solar_icon( 'pen-new-round-linear', 16 ); ?>
                    </span>
                    <span class="font-heading font-medium tracking-tight text-brand-dark text-lg">CreatorFlow</span>
                </a>
                <p class="text-sm text-brand-dark/60 leading-relaxed"><?php esc_html_e( 'The private mentorship network for ambitious digital creators and brand builders.', 'creatorflow' ); ?></p>
            </div>

            <div class="grid grid-cols-2 gap-8 sm:grid-cols-3">
                <div>
                    <div class="text-xs font-medium uppercase tracking-[0.15em] text-brand-dark/40 mb-4"><?php esc_html_e( 'Platform', 'creatorflow' ); ?></div>
                    <ul class="space-y-3 text-sm text-brand-dark/70">
                        <li><a href="<?php echo esc_url( home_url( '/mentors/' ) ); ?>" class="hover:text-brand-pink transition-colors"><?php esc_html_e( 'Browse Mentors', 'creatorflow' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/#how' ) ); ?>" class="hover:text-brand-pink transition-colors"><?php esc_html_e( 'How it works', 'creatorflow' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/pricing/' ) ); ?>" class="hover:text-brand-pink transition-colors"><?php esc_html_e( 'Pricing', 'creatorflow' ); ?></a></li>
                    </ul>
                </div>
                <div>
                    <div class="text-xs font-medium uppercase tracking-[0.15em] text-brand-dark/40 mb-4"><?php esc_html_e( 'Company', 'creatorflow' ); ?></div>
                    <ul class="space-y-3 text-sm text-brand-dark/70">
                        <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="hover:text-brand-pink transition-colors"><?php esc_html_e( 'About Us', 'creatorflow' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/become-a-mentor/' ) ); ?>" class="hover:text-brand-pink transition-colors"><?php esc_html_e( 'Become a Mentor', 'creatorflow' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="hover:text-brand-pink transition-colors"><?php esc_html_e( 'Contact Support', 'creatorflow' ); ?></a></li>
                    </ul>
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <div class="text-xs font-medium uppercase tracking-[0.15em] text-brand-dark/40 mb-4"><?php esc_html_e( 'Connect', 'creatorflow' ); ?></div>
                    <div class="flex items-center gap-2">
                        <a href="#" class="flex h-11 w-11 items-center justify-center rounded-full border border-brand-dark/10 text-brand-dark hover:bg-brand-dark hover:text-white transition-colors" aria-label="Email">
                            <?php echo creatorflow_solar_icon( 'letter-linear', 18 ); ?>
                        </a>
                        <a href="#" class="flex h-11 w-11 items-center justify-center rounded-full border border-brand-dark/10 text-brand-dark hover:bg-brand-dark hover:text-white transition-colors" aria-label="X / Twitter">
                            <iconify-icon icon="solar:hashtag-linear" width="18" height="18"></iconify-icon>
                        </a>
                        <a href="#" class="flex h-11 w-11 items-center justify-center rounded-full border border-brand-dark/10 text-brand-dark hover:bg-[#0A66C2] hover:text-white transition-colors" aria-label="LinkedIn">
                            <iconify-icon icon="solar:users-group-rounded-linear" width="18" height="18"></iconify-icon>
                        </a>
                        <a href="#" class="flex h-11 w-11 items-center justify-center rounded-full border border-brand-dark/10 text-brand-dark hover:bg-[#E4405F] hover:text-white transition-colors" aria-label="Instagram">
                            <iconify-icon icon="solar:gallery-linear" width="18" height="18"></iconify-icon>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-12 flex flex-col items-center justify-between border-t border-brand-dark/5 pt-8 sm:flex-row text-xs text-brand-dark/50">
            <p>&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> CreatorFlow. <?php esc_html_e( 'All rights reserved.', 'creatorflow' ); ?></p>
            <div class="mt-4 flex gap-4 sm:mt-0">
                <a href="#" class="hover:text-brand-dark"><?php esc_html_e( 'Privacy Policy', 'creatorflow' ); ?></a>
                <a href="#" class="hover:text-brand-dark"><?php esc_html_e( 'Terms of Service', 'creatorflow' ); ?></a>
            </div>
        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>
</body>
</html>
