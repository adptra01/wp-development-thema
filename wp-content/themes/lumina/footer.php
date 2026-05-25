<?php
defined( 'ABSPATH' ) || exit;
$year = date( 'Y' );
?>

<div class="pointer-events-auto container px-6 md:px-12 mx-auto border-t border-zinc-800/50">
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 py-12 lg:py-16">
        <!-- Brand -->
        <div class="col-span-2 md:col-span-1">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-white font-geist text-lg font-medium no-underline flex items-center gap-2">
                <span class="text-emerald-400 font-bold">✦</span>
                <?php esc_html_e( 'Lumina', 'lumina' ); ?>
            </a>
            <p class="text-zinc-500 text-sm mt-2"><?php esc_html_e( 'Modern SaaS monitoring for Laravel applications.', 'lumina' ); ?></p>
        </div>

        <!-- Product -->
        <div>
            <h4 class="text-zinc-200 text-sm font-medium mb-3 font-geist"><?php esc_html_e( 'Product', 'lumina' ); ?></h4>
            <ul class="flex flex-col gap-2 text-sm text-zinc-500">
                <li><a href="#features" class="hover:text-zinc-300 transition-colors no-underline"><?php esc_html_e( 'Features', 'lumina' ); ?></a></li>
                <li><a href="#pricing" class="hover:text-zinc-300 transition-colors no-underline"><?php esc_html_e( 'Pricing', 'lumina' ); ?></a></li>
                <li><a href="#testimonials" class="hover:text-zinc-300 transition-colors no-underline"><?php esc_html_e( 'Testimonials', 'lumina' ); ?></a></li>
                <li><a href="#" class="hover:text-zinc-300 transition-colors no-underline"><?php esc_html_e( 'Documentation', 'lumina' ); ?></a></li>
            </ul>
        </div>

        <!-- Company -->
        <div>
            <h4 class="text-zinc-200 text-sm font-medium mb-3 font-geist"><?php esc_html_e( 'Company', 'lumina' ); ?></h4>
            <ul class="flex flex-col gap-2 text-sm text-zinc-500">
                <li><a href="#" class="hover:text-zinc-300 transition-colors no-underline"><?php esc_html_e( 'About', 'lumina' ); ?></a></li>
                <li><a href="#" class="hover:text-zinc-300 transition-colors no-underline"><?php esc_html_e( 'Blog', 'lumina' ); ?></a></li>
                <li><a href="#" class="hover:text-zinc-300 transition-colors no-underline"><?php esc_html_e( 'Careers', 'lumina' ); ?></a></li>
                <li><a href="#" class="hover:text-zinc-300 transition-colors no-underline"><?php esc_html_e( 'Contact', 'lumina' ); ?></a></li>
            </ul>
        </div>

        <!-- Technology -->
        <div>
            <h4 class="text-zinc-200 text-sm font-medium mb-3 font-geist"><?php esc_html_e( 'Technology', 'lumina' ); ?></h4>
            <ul class="flex flex-col gap-2 text-sm text-zinc-500">
                <li>Laravel</li>
                <li>PHP 8.x</li>
                <li>MySQL</li>
                <li>Redis</li>
            </ul>
        </div>

        <!-- Legal -->
        <div>
            <h4 class="text-zinc-200 text-sm font-medium mb-3 font-geist"><?php esc_html_e( 'Legal', 'lumina' ); ?></h4>
            <ul class="flex flex-col gap-2 text-sm text-zinc-500">
                <li><a href="#" class="hover:text-zinc-300 transition-colors no-underline"><?php esc_html_e( 'Privacy', 'lumina' ); ?></a></li>
                <li><a href="#" class="hover:text-zinc-300 transition-colors no-underline"><?php esc_html_e( 'Terms', 'lumina' ); ?></a></li>
                <li><a href="#" class="hover:text-zinc-300 transition-colors no-underline"><?php esc_html_e( 'Security', 'lumina' ); ?></a></li>
            </ul>
        </div>
    </div>

    <div class="border-t border-zinc-800/30 py-6 flex flex-col md:flex-row items-center justify-between gap-4 text-sm text-zinc-600">
        <span>&copy; <?php echo esc_html( $year ); ?> <?php esc_html_e( 'Lumina. All rights reserved.', 'lumina' ); ?></span>
        <span><?php esc_html_e( 'Built with Laravel, PHP & Modern Stack', 'lumina' ); ?></span>
    </div>
</div>
</main>

<?php wp_footer(); ?>
</body>
</html>
