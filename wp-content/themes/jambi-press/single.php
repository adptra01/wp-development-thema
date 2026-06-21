<?php
/**
 * Single Post Template
 * @package Jambi_Press
 */
get_header();
?>
<main style="overflow-x:hidden; width:100%; max-width:100%;">
  <?php while ( have_posts() ) : the_post(); $cats = get_the_category(); ?>

  <div style="background:var(--jp-black); color:var(--jp-white); padding:48px 0;">
    <div class="jp-container" style="max-width:900px;">
      <div style="margin-bottom:16px;">
        <a href="<?php echo esc_url( get_category_link( $cats[0]->term_id ) ); ?>" class="jp-cat-bg jp-bg-red"><?php echo esc_html( $cats[0]->name ); ?></a>
      </div>
      <h1 class="jp-display-1" style="margin:0 0 20px;"><?php the_title(); ?></h1>
      <div style="display:flex; flex-wrap:wrap; align-items:center; gap:12px; color:var(--jp-grey-400); font-size:.8125rem;">
        <span style="font-weight:600; color:var(--jp-white);"><?php the_author(); ?></span>
        <span style="width:4px; height:4px; border-radius:9999px; background:var(--jp-grey-600);"></span>
        <span><?php echo get_the_date(); ?></span>
        <span style="width:4px; height:4px; border-radius:9999px; background:var(--jp-grey-600);"></span>
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

  <div class="jp-container" style="max-width:800px; padding:48px 16px 80px;">
    <div class="jp-prose"><?php the_content(); ?></div>

    <?php $tags = get_the_tags(); if ( $tags ) : ?>
    <div style="margin-top:40px; padding-top:32px; border-top:1px solid var(--jp-grey-200); display:flex; flex-wrap:wrap; gap:8px;">
      <?php foreach ( $tags as $tag ) : ?>
      <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" style="font-size:.75rem; font-weight:600; color:var(--jp-grey-600); background:var(--jp-grey-100); padding:4px 12px; border-radius:9999px;">#<?php echo esc_html( $tag->name ); ?></a>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
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
              <img src="https://picsum.photos/seed/<?php echo esc_attr( sanitize_title( get_the_title() ) ); ?>/600/375" alt="<?php the_title_attribute(); ?>" class="jp-img-fluid" loading="lazy">
            </div>
            <span class="jp-cat" style="color:var(--jp-red);"><?php echo esc_html( get_the_category()[0]->name ); ?></span>
            <h3 class="jp-post-title" style="font-size:1rem; margin:4px 0 0;"><?php the_title(); ?></h3>
          </a>
        </article>
        <?php endwhile; wp_reset_postdata(); endif; ?>
      </div>
    </div>
  </section>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
