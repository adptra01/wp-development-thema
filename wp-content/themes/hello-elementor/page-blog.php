<?php
/**
 * Template Name: Blog
 * Akar Solution — Blog index (Swiss-Minimal)
 * NOTE: This template is a fallback. The actual blog index is rendered by home.php
 * because Settings > Reading uses the Blog page (ID 34) as page_for_posts.
 *
 * @package HelloElementor
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
  <div class="ak-hero-grid">
    <div>
      <span class="ak-hero-tag">Blog</span>
      <h1 class="ak-reveal-slide" data-reveal>
        Insight &amp; tips untuk <em>UMKM</em> dan <em>mahasiswa</em> Jambi.
      </h1>
      <p class="ak-hero-sub ak-reveal-slide" data-reveal>Ditulis oleh praktisi, bukan copywriter. Konten yang relevan, terapan, dan tanpa jargon.</p>
    </div>
    <div class="ak-hero-visual ak-reveal" data-reveal>
      <div class="ak-hero-cards">
        <a href="https://akar-solution.page.gd/glad2glow/" target="_blank" rel="noopener" class="ak-hero-card">
          <img src="<?php echo esc_url( content_url( '/uploads/showcase/glad2glow-hero.png' ) ); ?>" alt="Glad2Glow" loading="lazy">
        </a>
        <a href="https://adptra01.framer.media/" target="_blank" rel="noopener" class="ak-hero-card">
          <img src="<?php echo esc_url( content_url( '/uploads/showcase/framer-portfolio-hero.png' ) ); ?>" alt="Framer Portfolio" loading="lazy">
        </a>
        <a href="https://akar-solution.page.gd/" target="_blank" rel="noopener" class="ak-hero-card">
          <img src="<?php echo esc_url( content_url( '/uploads/showcase/akar-solution-hero.png' ) ); ?>" alt="Akar Solution" loading="lazy">
        </a>
      </div>
    </div>
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
        <p class="muted">Kami sedang menyiapkan konten pertama. Sementara itu, silakan hubungi kami untuk konsultasi gratis.</p>
      </div>
    <?php endif; ?>
  </div>
</section>

<!-- CTA -->
<section class="ak-cta ak-reveal-slide" data-reveal>
  <h2 class="cd">Punya pertanyaan?</h2>
  <p>Konsultasi gratis — kami balas dalam 1–2 jam.</p>
  <div class="ak-ctas">
    <a href="https://wa.me/6285951572182?text=Halo%20Akar%20Solution%2C%20saya%20mau%20tanya-tanya." class="ak-btn ak-btn-lg" target="_blank" rel="noopener">💬 Chat via WhatsApp</a>
    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="ak-btn ak-btn-outline ak-btn-lg">Form Kontak</a>
  </div>
</section>

<?php
get_template_part( 'template-parts/ak-chrome-foot' );
get_footer();
