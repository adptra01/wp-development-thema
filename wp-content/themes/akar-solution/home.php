<?php
/**
 * Home (blog posts index) — Akar Solution (Swiss-Minimal)
 * Used when Settings > Reading has "Your latest posts" or a static "Posts page".
 * We use the ak-* design system with the post loop.
 *
 * @package HelloElementor
 */
get_header();
get_template_part( 'template-parts/ak-chrome-head' );
?>

<!-- HERO -->
<section class="ak-hero">
  <div class="ak-hero-grid">
    <div>
      <span class="ak-hero-tag">Blog</span>
      <h1 class="ak-reveal-slide" data-reveal>
        Insight &amp; tips untuk <em class="ak-underline" data-draw>UMKM</em> dan <em class="ak-underline" data-draw>mahasiswa</em> Jambi.
      </h1>
      <p class="ak-hero-sub ak-reveal-slide" data-reveal>Ditulis oleh praktisi, bukan copywriter. Konten yang relevan, terapan, dan tanpa jargon.</p>
    </div>
    <div class="ak-hero-visual ak-reveal" data-reveal>
      <div class="ak-hero-cards">
        <a href="https://akar-solution.page.gd/glad2glow/" target="_blank" rel="noopener" class="ak-hero-card">
          <img src="<?php echo esc_url( content_url( '/uploads/showcase/glad2glow-hero.png' ) ); ?>" alt="Glad2Glow" loading="lazy">
        </a>
        <a href="https://sibanyu.com/news/categories" target="_blank" rel="noopener" class="ak-hero-card">
          <img src="<?php echo esc_url( content_url( '/uploads/showcase/sibanyu-hero.png' ) ); ?>" alt="Sibanyu News" loading="lazy">
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
    <?php if ( have_posts() ) : ?>
      <div class="ak-blog-grid ak-parallax-grid" data-parallax="1.3,1.0,1.2">
        <?php $i = 1; while ( have_posts() ) : the_post();
          $thumb_class = 't' . ( ( $i % 3 ) + 1 );
          $i++;
        ?>
          <a href="<?php the_permalink(); ?>" class="ak-blog-card ak-reveal-slide ak-parallax-col" data-reveal>
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
            <h3 class="ak-blog-title cd" data-split><?php the_title(); ?></h3>
            <p class="ak-blog-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 22, '…' ) ); ?></p>
            <span class="ak-blog-read">Baca</span>
          </a>
        <?php endwhile; ?>
      </div>

      <?php
      global $wp_query;
      if ( $wp_query->max_num_pages > 1 ) : ?>
        <div style="text-align:center;margin-top:80px;">
          <?php
          echo paginate_links( [
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
    <a href="<?php echo esc_url( akar_whatsapp_url( 'Halo Akar Solution, saya mau tanya-tanya.' ) ); ?>" class="ak-btn ak-btn-lg" target="_blank" rel="noopener">Chat via WhatsApp</a>
    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="ak-btn ak-btn-outline ak-btn-lg">Form Kontak</a>
  </div>
</section>

<?php
get_template_part( 'template-parts/ak-chrome-foot' );
get_footer();
