<?php
/**
 * Template Name: Blog
 * Akar Solution — Blog index (Swiss-Minimal)
 */
get_header();
get_template_part( 'template-parts/ak-chrome-head' );

$paged = max( 1, get_query_var( 'paged' ) );
$blog_query = new WP_Query( [
  'post_type'      => 'post',
  'post_status'    => 'publish',
  'posts_per_page' => 12,
  'paged'          => $paged,
  'orderby'        => 'date',
  'order'          => 'DESC',
] );
?>

<!-- HERO -->
<section class="ak-hero">
  <div>
    <span class="ak-hero-tag">Blog</span>
    <div class="ak-echo-stack ak-reveal-slide" data-reveal>
      <span class="ak-echo-layer cd">Blog</span>
      <span class="ak-echo-layer cd">Blog</span>
      <span class="ak-echo-layer cd">Blog</span>
      <span class="ak-echo-layer cd">Blog</span>
      <span class="ak-echo-layer cd">Blog</span>
    </div>
    <p class="ak-hero-sub ak-reveal-slide" data-reveal>Insight &amp; tips untuk UMKM dan mahasiswa Jambi — ditulis oleh praktisi, bukan copywriter.</p>
  </div>
</section>

<!-- BLOG GRID -->
<section class="ak-section-tight">
  <div class="ak-container">
    <div class="ak-divider"></div>
    <?php if ( $blog_query->have_posts() ) : ?>
      <div class="ak-blog-grid">
        <?php $i = 1; while ( $blog_query->have_posts() ) : $blog_query->the_post();
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
              <?php $cats = get_the_category(); if ( $cats ) { ?>
                <span>· <?php echo esc_html( $cats[0]->name ); ?></span>
              <?php } ?>
            </div>
            <h3 class="ak-blog-title cd"><?php the_title(); ?></h3>
            <p class="ak-blog-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 22, '…' ) ); ?></p>
            <span class="ak-blog-read">Baca</span>
          </a>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>

      <?php
      $total_pages = $blog_query->max_num_pages;
      if ( $total_pages > 1 ) : ?>
        <div style="text-align:center;margin-top:80px;">
          <?php
          $current = max( 1, get_query_var( 'paged' ) );
          echo paginate_links( [
            'base'      => get_pagenum_link( 1 ) . '%_%',
            'format'    => 'page/%#%/',
            'current'   => $current,
            'total'     => $total_pages,
            'prev_text' => '← Sebelumnya',
            'next_text' => 'Selanjutnya →',
            'type'      => 'list',
            'mid_size'  => 1,
          ] );
          ?>
        </div>
      <?php endif; ?>

    <?php else : ?>
      <div style="text-align:center;padding:80px 0;">
        <p class="cd" style="font-size:1.5rem;margin-bottom:16px;">Belum ada artikel.</p>
        <p class="muted">Kami sedang menyiapkan konten pertama. Sementara itu, silakanhubungi kami untuk konsultasi gratis.</p>
      </div>
    <?php endif; ?>
  </div>
</section>

<!-- CTA -->
<section class="ak-cta ak-reveal-slide" data-reveal>
  <h2 class="cd">Punya pertanyaan?</h2>
  <p>Konsultasi gratis — kami balas dalam 1–2 jam.</p>
  <a href="https://wa.me/6285951572182?text=Halo%20Akar%20Solution%2C%20saya%20mau%20tanya-tanya." class="ak-btn" target="_blank" rel="noopener">Chat via WhatsApp</a>
</section>

<?php
get_template_part( 'template-parts/ak-chrome-foot' );
get_footer();
