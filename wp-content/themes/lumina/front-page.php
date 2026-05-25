<?php
/**
 * Front Page — Lumina SaaS
 *
 * @package Lumina
 */

get_header();

get_template_part( 'template-parts/hero' );
?>

<section id="features">
    <?php get_template_part( 'template-parts/features' ); ?>
</section>

<section>
    <?php get_template_part( 'template-parts/dashboard-preview' ); ?>
</section>

<section id="pricing">
    <?php get_template_part( 'template-parts/pricing' ); ?>
</section>

<section>
    <?php get_template_part( 'template-parts/integrations' ); ?>
</section>

<section id="testimonials">
    <?php get_template_part( 'template-parts/testimonials' ); ?>
</section>

<section>
    <?php get_template_part( 'template-parts/cta' ); ?>
</section>

<?php
get_footer();
