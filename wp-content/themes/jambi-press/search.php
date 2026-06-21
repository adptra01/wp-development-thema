<?php
/**
 * Search Results Template
 * @package Jambi_Press
 */
get_header();
?>
<main style="width:100%; max-width:100%; padding:48px 0 80px;">
  <div class="jp-container">
    <header style="margin-bottom:32px;">
      <h1 class="jp-display-3" style="margin:0;">Hasil Pencarian: "<?php echo esc_html( get_search_query() ); ?>"</h1>
      <?php if ( $wp_query->found_posts > 0 ) : ?>
      <p style="color:var(--jp-grey-500); font-size:.875rem; margin:8px 0 0;"><?php echo $wp_query->found_posts; ?> artikel ditemukan.</p>
      <?php endif; ?>
    </header>
    <!-- Ad Leaderboard -->
    <div class="jp-ad-container" style="width:100%; min-height:90px; margin-bottom:32px;">
      <span class="jp-ad-label">Iklan</span>
      <script>
        atOptions = {
          'key' : 'a38fb2cdad5a14e10708902b31e90271',
          'format' : 'iframe',
          'height' : 90,
          'width' : 728,
          'params' : {}
        };
      </script>
      <script src="https://www.highperformanceformat.com/a38fb2cdad5a14e10708902b31e90271/invoke.js"></script>
    </div>
    <?php if ( have_posts() ) : ?>
    <div style="display:flex; flex-direction:column; gap:0;">
      <?php while ( have_posts() ) : the_post(); $cats = get_the_category(); ?>
      <article style="display:flex; gap:20px; padding:20px 0; border-bottom:1px solid var(--jp-grey-100);">
        <a href="<?php the_permalink(); ?>" class="jp-media" style="flex-shrink:0; width:160px; height:100px; border-radius:6px;">
          <?php jp_post_thumb( 'jp-thumb', 400, 300 ); ?>
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

    <!-- CTA Iklan -->
    <div style="margin:40px 0;">
      <a href="/hubungi-redaksi" style="display:flex; align-items:center; gap:16px; padding:20px 24px; background:var(--jp-white); border:2px dashed var(--jp-grey-300); border-radius:12px; text-decoration:none; transition:all .2s ease;">
        <div style="flex-shrink:0; width:48px; height:48px; border-radius:9999px; background:var(--jp-red); display:flex; align-items:center; justify-content:center;">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
        </div>
        <div style="flex:1;">
          <p style="font-size:.9375rem; font-weight:700; color:var(--jp-grey-900); margin:0 0 2px;">Pasang Iklan di Jambi Press</p>
          <span style="font-size:.75rem; color:var(--jp-grey-500);">Jangkau ribuan pembaca setiap hari &rsaquo;</span>
        </div>
        <span style="font-size:.75rem; font-weight:700; color:var(--jp-red); white-space:nowrap;">Hubungi</span>
      </a>
    </div>

    <div style="margin-top:48px; display:flex; justify-content:center; gap:6px;">
      <style>
        .jp-pagination .page-numbers { display:inline-flex; align-items:center; justify-content:center; min-width:40px; height:40px; font-size:.875rem; font-weight:600; color:var(--jp-grey-700); background:var(--jp-white); border:1px solid var(--jp-grey-200); border-radius:6px; transition:all .2s ease; }
        .jp-pagination .page-numbers:hover { color:var(--jp-red); border-color:var(--jp-red); background:var(--jp-grey-100); }
        .jp-pagination .page-numbers.current { color:var(--jp-white); background:var(--jp-red); border-color:var(--jp-red); }
      </style>
      <div class="jp-pagination">
        <?php the_posts_pagination( [
          'mid_size' => 2, 'prev_text' => '‹', 'next_text' => '›',
        ] ); ?>
      </div>
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
