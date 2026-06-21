<?php
/**
 * Index / Fallback Template
 * @package Jambi_Press
 */
get_header();
?>
<main style="width:100%; max-width:100%; padding: 48px 0 80px;">
  <div class="jp-container">
    <?php if ( is_home() && ! is_front_page() ) : ?>
    <h1 class="jp-display-3" style="margin:0 0 32px;"><?php single_post_title(); ?></h1>
    <?php endif; ?>
    <!-- Ad Leaderboard -->
    <div class="jp-ad-container jp-ad-leaderboard" style="width:100%; min-height:90px; margin-bottom:32px;">
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
      <h2 class="jp-display-3" style="color:var(--jp-grey-300); margin:0 0 8px;">Belum ada berita</h2>
      <p style="color:var(--jp-grey-500);">Berita terbaru akan muncul di sini.</p>
    </div>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>
