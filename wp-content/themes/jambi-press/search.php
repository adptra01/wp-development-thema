<?php
/**
 * Search Results Template
 * @package Jambi_Press
 */
get_header();
?>
<main style="overflow-x:hidden; width:100%; max-width:100%; padding:48px 0 80px;">
  <div class="jp-container">
    <header style="margin-bottom:32px;">
      <h1 class="jp-display-3" style="margin:0;">Hasil Pencarian: "<?php echo esc_html( get_search_query() ); ?>"</h1>
      <?php if ( $wp_query->found_posts > 0 ) : ?>
      <p style="color:var(--jp-grey-500); font-size:.875rem; margin:8px 0 0;"><?php echo $wp_query->found_posts; ?> artikel ditemukan.</p>
      <?php endif; ?>
    </header>
    <?php if ( have_posts() ) : ?>
    <div style="display:flex; flex-direction:column; gap:0;">
      <?php while ( have_posts() ) : the_post(); $cats = get_the_category(); ?>
      <article style="display:flex; gap:20px; padding:20px 0; border-bottom:1px solid var(--jp-grey-100);">
        <a href="<?php the_permalink(); ?>" class="jp-media" style="flex-shrink:0; width:160px; height:100px; border-radius:6px;">
          <img src="https://picsum.photos/seed/<?php echo esc_attr( sanitize_title( get_the_title() ) ); ?>/400/300" alt="<?php the_title_attribute(); ?>" class="jp-img-fluid" loading="lazy">
        </a>
        <div style="flex:1; min-width:0;">
          <span class="jp-cat" style="color:var(--jp-red);"><?php echo esc_html( $cats[0]->name ); ?></span>
          <h2 class="jp-post-title" style="font-size:1.125rem; margin:4px 0 0;">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h2>
          <p class="jp-line-clamp-2" style="color:var(--jp-grey-500); font-size:.875rem; margin:6px 0 0;"><?php echo jp_excerpt( 20 ); ?></p>
          <span class="jp-meta" style="margin-top:6px; display:inline-block;"><?php echo jp_time_ago(); ?></span>
        </div>
      </article>
      <?php endwhile; ?>
    </div>
    <div style="margin-top:48px; display:flex; justify-content:center; gap:4px;">
      <?php the_posts_pagination( [
        'mid_size' => 2, 'prev_text' => '&laquo;', 'next_text' => '&raquo;',
        'before_page_number' => '<span style="padding:6px 12px; border:1px solid var(--jp-grey-200); border-radius:4px; font-size:.875rem; font-weight:600;">',
        'after_page_number' => '</span>',
      ] ); ?>
    </div>
    <?php else : ?>
    <div style="text-align:center; padding:80px 0;">
      <h2 class="jp-display-3" style="color:var(--jp-grey-300); margin:0 0 8px;">Tidak ada hasil</h2>
      <p style="color:var(--jp-grey-500); margin:0 0 24px;">Coba kata kunci lain atau jelajahi kategori berita kami.</p>
      <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" style="display:flex; gap:12px; max-width:400px; margin:0 auto;">
        <input type="search" name="s" placeholder="Cari berita..." value="<?php echo get_search_query(); ?>" style="flex:1; padding:12px 16px; border:1px solid var(--jp-grey-300); border-radius:6px; font-size:.875rem; outline:0;">
        <button type="submit" class="jp-btn jp-btn-primary" style="padding:12px 20px;">Cari</button>
      </form>
    </div>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>
