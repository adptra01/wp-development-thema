<?php
/**
 * Single post template — Akar Solution (Swiss-Minimal)
 * Used for blog post detail pages.
 *
 * @package HelloElementor
 */
get_header();
get_template_part( 'template-parts/ak-chrome-head' );

while ( have_posts() ) : the_post();
  $cats = get_the_category();
  $reading_time = max( 1, (int) ceil( str_word_count( strip_tags( get_the_content() ) ) / 200 ) );
?>
<!-- POST HERO -->
<section class="ak-post-hero">
  <div class="ak-post-meta ak-reveal-slide" data-reveal>
    <?php if ( $cats ) { ?>
      <span><?php echo esc_html( $cats[0]->name ); ?></span>
    <?php } ?>
    <span><?php echo esc_html( get_the_date() ); ?></span>
    <span><?php echo esc_html( $reading_time ); ?> menit baca</span>
  </div>
  <h1 class="ak-post-title cd ak-reveal-slide" data-reveal><?php the_title(); ?></h1>
  <?php if ( has_excerpt() ) : ?>
    <p class="ak-post-excerpt ak-reveal-slide" data-reveal><?php echo esc_html( get_the_excerpt() ); ?></p>
  <?php endif; ?>
</section>

<!-- POST BODY -->
<article class="ak-post-body">
  <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="ak-post-back ak-reveal-slide" data-reveal>← Kembali ke Blog</a>

  <?php if ( has_post_thumbnail() ) : ?>
    <div class="ak-reveal" data-reveal style="margin-bottom:48px;border-radius:8px;overflow:hidden;aspect-ratio:16/9;background:linear-gradient(135deg,#e8e8e8,#d4d4d4);">
      <?php the_post_thumbnail( 'large', [ 'style' => 'width:100%;height:100%;object-fit:cover;' ] ); ?>
    </div>
  <?php endif; ?>

  <div class="ak-reveal-slide" data-reveal>
    <?php
    $content = get_the_content();
    $content = apply_filters( 'the_content', $content );
    echo $content;
    ?>
  </div>

  <!-- TAGS -->
  <?php $tags = get_the_tags(); if ( $tags ) : ?>
    <div style="margin-top:60px;padding-top:32px;border-top:1px solid var(--line);display:flex;gap:8px;flex-wrap:wrap;">
      <?php foreach ( $tags as $tag ) : ?>
        <span style="display:inline-block;font-size:0.75rem;text-transform:uppercase;letter-spacing:0.1em;padding:8px 16px;border:1px solid var(--line-strong);border-radius:9999px;font-weight:700;color:var(--text-muted);min-height:44px;display:inline-flex;align-items:center;"><?php echo esc_html( $tag->name ); ?></span>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>

  <!-- AUTHOR -->
  <div style="margin-top:60px;padding:32px;background:rgba(17,17,17,0.04);border-radius:8px;display:flex;gap:20px;align-items:center;">
    <div style="width:60px;height:60px;border-radius:50%;background:linear-gradient(135deg,#d8d8d8,#b8b8b8);display:flex;align-items:center;justify-content:center;font-family:'Clash Display',sans-serif;font-weight:700;font-size:1.4rem;color:var(--text);">
      <?php echo esc_html( strtoupper( substr( get_the_author(), 0, 1 ) ) ); ?>
    </div>
    <div>
      <div class="cd" style="font-weight:700;font-size:1.1rem;letter-spacing:-0.02em;margin-bottom:4px;"><?php the_author(); ?></div>
      <div style="font-size:0.85rem;color:var(--text-muted);font-weight:400;">Founder, Akar Solution</div>
    </div>
  </div>

  <!-- CTA -->
  <div style="margin-top:60px;text-align:center;padding:60px 32px;background:var(--dark);border-radius:8px;color:#f6f6f6;">
    <div class="cd" style="font-weight:700;font-size:clamp(1.5rem,3vw,2.2rem);letter-spacing:-0.02em;line-height:1.1;margin-bottom:14px;word-spacing:0.05em;">Butuh bantuan profesional?</div>
    <p style="color:rgba(246,246,246,0.65);font-weight:400;margin-bottom:28px;line-height:1.7;">Konsultasi gratis 15 menit — kami bantu analisis kebutuhan Anda.</p>
    <a href="https://wa.me/6285951572182?text=Halo%20Akar%20Solution%2C%20saya%20tertarik%20dengan%20layanan%20Anda." class="ak-btn" target="_blank" rel="noopener" style="background:#f6f6f6;color:var(--dark);border-color:#f6f6f6;">💬 Chat via WhatsApp</a>
  </div>
</article>

<?php
// Related posts
$current_id = get_the_ID();
$related_args = [
  'post_type'      => 'post',
  'post_status'    => 'publish',
  'posts_per_page' => 3,
  'post__not_in'   => [ $current_id ],
  'orderby'        => 'date',
  'order'          => 'DESC',
];
if ( $cats ) {
  $related_args['category__in'] = [ $cats[0]->term_id ];
}
$related = new WP_Query( $related_args );
if ( $related->have_posts() ) : ?>
<section class="ak-section-tight">
  <div class="ak-container">
    <div class="ak-section-header">
      <div class="ak-section-eyebrow">Artikel Lainnya</div>
      <h2 class="ak-reveal-slide" data-reveal>Yang <em>sejenis</em>.</h2>
    </div>
    <div class="ak-blog-grid">
      <?php $i = 1; while ( $related->have_posts() ) : $related->the_post();
        $thumb_class = 't' . ( ( $i % 3 ) + 1 );
        $i++;
      ?>
        <a href="<?php the_permalink(); ?>" class="ak-blog-card ak-reveal-slide" data-reveal>
          <div class="ak-blog-thumb <?php echo esc_attr( $thumb_class ); ?>">
            <?php if ( has_post_thumbnail() ) {
              the_post_thumbnail( 'medium_large', [ 'style' => 'width:100%;height:100%;object-fit:cover;' ] );
            } else {
              echo esc_html( get_the_title() );
            } ?>
          </div>
          <div class="ak-blog-meta">
            <span><?php echo esc_html( get_the_date() ); ?></span>
            <?php $post_cats = get_the_category(); if ( $post_cats ) { ?>
              <span>· <?php echo esc_html( $post_cats[0]->name ); ?></span>
            <?php } ?>
          </div>
          <h3 class="ak-blog-title cd"><?php the_title(); ?></h3>
          <p class="ak-blog-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 18, '…' ) ); ?></p>
          <span class="ak-blog-read">Baca</span>
        </a>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php endwhile; ?>

<?php
get_template_part( 'template-parts/ak-chrome-foot' );
get_footer();
