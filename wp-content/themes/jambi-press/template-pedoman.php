<?php
/**
 * Template Name: Pedoman Media Siber
 * Halaman pedoman dan kebijakan media siber.
 * @package Jambi_Press
 */
get_header();
while ( have_posts() ) : the_post();
?>
<main style="width:100%; max-width:100%; padding:48px 0 80px;">
  <div class="jp-container" style="max-width:800px;">
    <div style="background:var(--jp-grey-50); border:1px solid var(--jp-grey-200); border-radius:12px; padding:40px; margin-bottom:40px;">
      <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--jp-red)" stroke-width="1.5" style="margin-bottom:16px;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
      <h1 class="jp-display-2" style="margin:0 0 8px;"><?php the_title(); ?></h1>
      <p style="color:var(--jp-grey-500); font-size:.875rem; margin:0;">Jambi Press berkomitmen mengikuti Pedoman Media Siber Indonesia.</p>
    </div>
    <div class="jp-prose"><?php the_content(); ?></div>
  </div>
</main>
<?php endwhile; get_footer();