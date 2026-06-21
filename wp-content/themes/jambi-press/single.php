<?php
/**
 * Single Post Template
 * @package Jambi_Press
 */
get_header();
?>
<main id="main-content" style="width:100%; max-width:100%;">
  <?php while ( have_posts() ) : the_post(); $cats = get_the_category(); ?>

  <div style="background:var(--jp-grey-100); color:var(--jp-grey-900); padding:48px 0;">
    <div class="jp-container" style="max-width:900px;">
      <?php if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb( '<p style="font-size:.75rem;color:var(--jp-grey-500);margin:0 0 16px;">', '</p>' );
      } ?>
      <div style="margin-bottom:16px;">
        <a href="<?php echo esc_url( get_category_link( $cats[0]->term_id ) ); ?>" class="jp-cat-bg jp-bg-primary"><?php echo esc_html( $cats[0]->name ); ?></a>
      </div>
      <h1 class="jp-display-1" style="margin:0 0 20px;"><?php the_title(); ?></h1>
      <div style="display:flex; flex-wrap:wrap; align-items:center; gap:12px; color:var(--jp-grey-500); font-size:.8125rem;">
        <span style="font-weight:600; color:var(--jp-grey-700);"><?php the_author(); ?></span>
        <span style="width:4px; height:4px; border-radius:9999px; background:var(--jp-grey-300);"></span>
        <span><?php echo get_the_date(); ?></span>
        <span style="width:4px; height:4px; border-radius:9999px; background:var(--jp-grey-300);"></span>
        <span><?php echo jp_reading_time(); ?> baca</span>
      </div>
    </div>
  </div>

  <?php if ( has_post_thumbnail() ) : ?>
  <div class="jp-container" style="max-width:1200px; margin-top:-40px; position:relative; z-index:2;">
    <div style="border-radius:12px; overflow:hidden; box-shadow:0 12px 40px rgba(0,0,0,.2);">
      <?php the_post_thumbnail( 'full', [ 'style' => 'width:100%; height:auto; display:block;' ] ); ?>
    </div>
  </div>
  <?php endif; ?>

  <div class="jp-ad-container jp-ad-leaderboard jp-ad-desktop" style="width:100%; min-height:90px; margin-bottom:32px;">
    <span class="jp-ad-label">Iklan</span>
    <?php if (function_exists('adinserter')) echo adinserter(2); ?>
  </div>
  <div class="jp-ad-container jp-ad-mobile" style="width:100%; min-height:50px; margin-bottom:32px;">
    <span class="jp-ad-label">Iklan</span>
    <?php if (function_exists('adinserter')) echo adinserter(6); ?>
  </div>

  <div class="jp-container" style="max-width:800px; padding:48px 16px 80px;">
    <div class="jp-prose"><?php the_content(); ?></div>

    <div class="jp-ad-container" style="width:100%; min-height:50px; margin:32px 0;">
      <span class="jp-ad-label">Iklan</span>
      <?php if (function_exists('adinserter')) echo adinserter(5); ?>
    </div>

    <?php $tags = get_the_tags(); if ( $tags ) : ?>
    <div style="margin-top:40px; padding-top:32px; border-top:1px solid var(--jp-grey-200); display:flex; flex-wrap:wrap; gap:8px;">
      <?php foreach ( $tags as $tag ) : ?>
      <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" style="font-size:.75rem; font-weight:600; color:var(--jp-grey-600); background:var(--jp-grey-100); padding:4px 12px; border-radius:9999px;">#<?php echo esc_html( $tag->name ); ?></a>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>

  <!-- CTA Iklan -->
  <div class="jp-container" style="max-width:800px; padding:0 16px;">
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

  <!-- Related Posts -->
  <section style="background:var(--jp-grey-50); padding:48px 0;">
    <div class="jp-container">
      <h2 class="jp-display-3" style="margin:0 0 24px;">Berita Terkait</h2>
      <div class="jp-grid-3">
        <?php
        $related = new WP_Query( [
          'posts_per_page' => 3, 'post__not_in' => [ get_the_ID() ],
          'category__in' => wp_get_post_categories( get_the_ID() ),
          'no_found_rows' => true,
        ] );
        if ( $related->have_posts() ) :
          while ( $related->have_posts() ) : $related->the_post();
        ?>
        <article>
          <a href="<?php the_permalink(); ?>">
            <div class="jp-media" style="border-radius:8px; aspect-ratio:16/10; margin-bottom:12px;">
              <?php jp_post_thumb( 'jp-card', 600, 375 ); ?>
            </div>
            <span class="jp-cat" style="color:var(--jp-red);"><?php echo esc_html( get_the_category()[0]->name ); ?></span>
            <h3 class="jp-post-title" style="font-size:1rem; margin:4px 0 0;"><?php the_title(); ?></h3>
            <span class="jp-meta" style="margin-top:6px; display:inline-block;"><?php echo jp_time_ago(); ?></span>
          </a>
        </article>
        <?php endwhile; wp_reset_postdata(); endif; ?>
      </div>
    </div>
  </section>

  <div class="jp-ad-container" style="width:100%; min-height:90px; margin:32px 0;">
    <span class="jp-ad-label">Iklan</span>
    <?php if (function_exists('adinserter')) echo adinserter(4); ?>
  </div>

  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
