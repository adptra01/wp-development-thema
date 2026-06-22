<?php
/**
 * Template Name: Halaman Footer
 * Template seragam untuk halaman statis footer.
 * @package Jambi_Press
 */
get_header();
while ( have_posts() ) : the_post();
?>
<main style="width:100%; max-width:100%; padding:48px 0 80px;">
  <div class="jp-container" style="max-width:800px;">
    <?php if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<p style="font-size:.75rem;color:var(--jp-grey-500);margin:0 0 24px;">', '</p>' );
    } ?>
    <h1 class="jp-display-2" style="margin:0 0 32px;"><?php the_title(); ?></h1>
    <div class="jp-prose"><?php the_content(); ?></div>
    <div style="margin-top:48px; padding-top:32px; border-top:1px solid var(--jp-grey-200);">
      <a href="<?php echo esc_url( home_url( '/hubungi-redaksi' ) ); ?>" style="font-size:.875rem; font-weight:600; color:var(--jp-red);">
        Hubungi Redaksi &rsaquo;
      </a>
    </div>
  </div>
</main>
<?php endwhile; get_footer(); ?>
