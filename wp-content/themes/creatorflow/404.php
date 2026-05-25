<?php
/**
 * 404 template
 *
 * @package CreatorFlow
 * @since 1.0.0
 */

get_header(); ?>

<div class="error-section section">
    <div class="container">
        <div class="error-404-content">
            <span class="error-404__code h1">404</span>
            <h2 class="error-404__title h2"><?php esc_html_e( 'Page Not Found', 'creatorflow' ); ?></h2>
            <p class="error-404__text body-md">
                <?php esc_html_e( 'The page you are looking for does not exist or has been moved. Let us help you find your way back.', 'creatorflow' ); ?>
            </p>
            <div class="error-404__actions">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn--primary"><?php esc_html_e( 'Back to Home', 'creatorflow' ); ?></a>
                <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="btn btn--ghost"><?php esc_html_e( 'Visit Blog', 'creatorflow' ); ?></a>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
