<?php
/**
 * Archive Template
 * @package Jambi_Press
 */
get_header();
?>
<main style="width:100%; max-width:100%; padding:48px 0 80px;">
  <div class="jp-container">
    <header style="margin-bottom:32px;">
      <?php if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb( '<p style="font-size:.75rem;color:var(--jp-grey-500);margin:0 0 12px;">', '</p>' );
      } ?>
      <?php if ( is_category() ) : ?>
        <h1 class="jp-display-3" style="margin:0;"><?php single_cat_title(); ?></h1>
        <?php if ( category_description() ) : ?>
          <p style="color:var(--jp-grey-500); font-size:.875rem; margin:8px 0 0;"><?php echo wp_kses_post( category_description() ); ?></p>
        <?php endif; ?>
      <?php elseif ( is_tag() ) : ?>
        <h1 class="jp-display-3" style="margin:0;">#<?php single_tag_title(); ?></h1>
      <?php elseif ( is_date() ) : ?>
        <h1 class="jp-display-3" style="margin:0;">Arsip: <?php the_archive_title(); ?></h1>
      <?php else : ?>
        <h1 class="jp-display-3" style="margin:0;"><?php the_archive_title(); ?></h1>
      <?php endif; ?>
    </header>
    <?php if ( have_posts() ) : ?>
    <div class="jp-grid-3">
      <?php while ( have_posts() ) : the_post(); $cats = get_the_category(); ?>
      <article>
        <a href="<?php the_permalink(); ?>">
          <div class="jp-media" style="border-radius:8px; aspect-ratio:16/10; margin-bottom:12px;">
            <?php jp_post_thumb( 'jp-card', 600, 375 ); ?>
          </div>
          <span class="jp-cat" style="color:var(--jp-red);"><?php echo esc_html( $cats[0]->name ); ?></span>
          <h2 class="jp-post-title" style="font-size:1.125rem; margin:4px 0 0;"><?php the_title(); ?></h2>
          <p class="jp-line-clamp-2" style="color:var(--jp-grey-500); font-size:.875rem; margin:6px 0 0;"><?php echo jp_excerpt( 15 ); ?></p>
          <span class="jp-meta" style="margin-top:6px; display:inline-block;"><?php echo jp_time_ago(); ?></span>
        </a>
      </article>
      <?php endwhile; ?>
    </div>
    <div style="margin-top:48px; display:flex; justify-content:center; gap:6px;">
      <style>
        .jp-pagination .page-numbers { display:inline-flex; align-items:center; justify-content:center; min-width:40px; height:40px; font-size:.875rem; font-weight:600; color:var(--jp-grey-700); background:var(--jp-white); border:1px solid var(--jp-grey-200); border-radius:6px; transition:all .2s ease; }
        .jp-pagination .page-numbers:hover { color:var(--jp-red); border-color:var(--jp-red); background:var(--jp-grey-100); }
        .jp-pagination .page-numbers.current { color:var(--jp-white); background:var(--jp-red); border-color:var(--jp-red); }
        .jp-pagination .page-numbers.prev,
        .jp-pagination .page-numbers.next { font-size:1rem; }
      </style>
      <div class="jp-pagination">
        <?php the_posts_pagination( [
          'mid_size' => 2, 'prev_text' => '‹', 'next_text' => '›',
        ] ); ?>
      </div>
    </div>
    <?php else : ?>
    <div style="text-align:center; padding:80px 0;">
      <h2 class="jp-display-3" style="color:var(--jp-grey-300); margin:0 0 8px;">Tidak ada artikel</h2>
      <p style="color:var(--jp-grey-500);">Belum ada berita di kategori ini.</p>
    </div>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>
