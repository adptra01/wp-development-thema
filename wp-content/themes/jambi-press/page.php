<?php
/**
 * Page Template
 * @package Jambi_Press
 */
get_header();
?>
<main style="width:100%; max-width:100%; padding:48px 0 80px;">
  <div class="jp-container" style="max-width:900px;">
    <?php while ( have_posts() ) : the_post(); ?>
    <h1 class="jp-display-2" style="margin:0 0 32px;"><?php the_title(); ?></h1>
    <div class="jp-prose"><?php the_content(); ?></div>
    <?php endwhile; ?>
  </div>
</main>
<?php get_footer(); ?>
