<?php
/**
 * Template Name: Portfolio
 * Akar Solution — Portfolio page (Swiss-Minimal)
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
      <span class="ak-hero-tag">Portfolio</span>
      <h1 class="ak-reveal-slide" data-reveal>
        Karya kami — <em class="ak-underline" data-draw>riset</em> di setiap proyek, <em class="ak-underline" data-draw>hasil</em> yang terukur.
      </h1>
      <p class="ak-hero-sub ak-reveal-slide" data-reveal>Kami baru memulai — tapi standar yang kami pegang sudah tinggi. Setiap proyek dimulai dengan riset, ditutup dengan hasil yang terukur.</p>
    </div>
    <div class="ak-hero-visual ak-reveal" data-reveal></div>
  </div>
</section>

<!-- SHOWCASE — captured projects -->
<section class="ak-section-tight">
  <div class="ak-container">
    <div class="ak-section-header">
      <div class="ak-section-eyebrow">Showcase</div>
      <h2 class="ak-reveal-slide" data-reveal>Situs <em>live</em> yang sudah kami bangun.</h2>
      <p>Tiga website nyata — dari personal portfolio hingga company profile yang sudah online dan dapat diakses publik.</p>
    </div>
    <div class="ak-showcase">
      <a href="https://adptra01.framer.media/" target="_blank" rel="noopener" class="ak-showcase-item span-7 ak-reveal" data-reveal>
        <div class="ak-showcase-bg has-image" style="background-image:url('<?php echo esc_url( content_url( '/uploads/showcase/framer-portfolio-hero.png' ) ); ?>');min-height:420px;"></div>
        <span class="ak-showcase-watermark">Live</span>
        <div class="ak-showcase-caption">
          <span class="ak-cap-tag">Personal Portfolio</span>
          <span class="ak-cap-title">adptra01.framer.media</span>
          <span class="ak-cap-meta">Single-page portfolio — Framer · 2026</span>
        </div>
      </a>
      <a href="https://akar-solution.page.gd/glad2glow/" target="_blank" rel="noopener" class="ak-showcase-item span-5 ak-reveal" data-reveal>
        <div class="ak-showcase-bg has-image" style="background-image:url('<?php echo esc_url( content_url( '/uploads/showcase/glad2glow-hero.png' ) ); ?>');min-height:420px;"></div>
        <span class="ak-showcase-watermark">Live</span>
        <div class="ak-showcase-caption">
          <span class="ak-cap-tag">Project Subpage</span>
          <span class="ak-cap-title">Glad2Glow</span>
          <span class="ak-cap-meta">Project showcase — Akar Solution · 2026</span>
        </div>
      </a>
      <a href="https://akar-solution.page.gd/" target="_blank" rel="noopener" class="ak-showcase-item span-12 ak-reveal" data-reveal>
        <div class="ak-showcase-bg has-image" style="background-image:url('<?php echo esc_url( content_url( '/uploads/showcase/akar-solution-hero.png' ) ); ?>');min-height:340px;"></div>
        <span class="ak-showcase-watermark">Live</span>
        <div class="ak-showcase-caption">
          <span class="ak-cap-tag">Company Profile</span>
          <span class="ak-cap-title">akar-solution.page.gd</span>
          <span class="ak-cap-meta">Situs yang sedang Anda lihat — WordPress · 2026</span>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- GALERI SHOWCASE — multiple views per project -->
<section class="ak-section-tight">
  <div class="ak-container">
    <div class="ak-section-header">
      <div class="ak-section-eyebrow">Galeri</div>
      <h2 class="ak-reveal-slide" data-reveal>Tiap proyek, dari berbagai <em>bagian</em>.</h2>
      <p>Kami capture beberapa section dari setiap situs live — hero, tengah, dan footer — untuk memperlihatkan konsistensi desain di seluruh halaman.</p>
    </div>
    <div class="ak-gallery" data-stagger>
      <?php
      $gallery_items = [
        [ 'site' => 'framer-portfolio',  'section' => '1', 'title' => 'Framer · Works',    'tag' => 'Personal Portfolio',  'url' => 'https://adptra01.framer.media/' ],
        [ 'site' => 'framer-portfolio',  'section' => '2', 'title' => 'Framer · Detail',   'tag' => 'Personal Portfolio',  'url' => 'https://adptra01.framer.media/' ],
        [ 'site' => 'framer-portfolio',  'section' => '3', 'title' => 'Framer · Footer',   'tag' => 'Personal Portfolio',  'url' => 'https://adptra01.framer.media/' ],
        [ 'site' => 'akar-solution',     'section' => '1', 'title' => 'Akar · Expertise',  'tag' => 'Mentor Marketplace',  'url' => 'https://akar-solution.page.gd/' ],
        [ 'site' => 'akar-solution',     'section' => '2', 'title' => 'Akar · Mentors',    'tag' => 'Mentor Marketplace',  'url' => 'https://akar-solution.page.gd/' ],
        [ 'site' => 'akar-solution',     'section' => '3', 'title' => 'Akar · CTA',        'tag' => 'Mentor Marketplace',  'url' => 'https://akar-solution.page.gd/' ],
        [ 'site' => 'glad2glow',         'section' => '1', 'title' => 'Glad2Glow · Hero',  'tag' => 'Beauty Brand',        'url' => 'https://akar-solution.page.gd/glad2glow/' ],
        [ 'site' => 'glad2glow',         'section' => '2', 'title' => 'Glad2Glow · Stats', 'tag' => 'Beauty Brand',        'url' => 'https://akar-solution.page.gd/glad2glow/' ],
        [ 'site' => 'glad2glow',         'section' => '3', 'title' => 'Glad2Glow · CTA',   'tag' => 'Beauty Brand',        'url' => 'https://akar-solution.page.gd/glad2glow/' ],
      ];
      foreach ( $gallery_items as $item ) :
        $img_url = content_url( '/uploads/showcase/' . $item['site'] . '-section-' . $item['section'] . '.png' );
      ?>
        <a href="<?php echo esc_url( $item['url'] ); ?>" target="_blank" rel="noopener" class="ak-gallery-item">
          <div class="ak-gallery-img" style="background-image:url('<?php echo esc_url( $img_url ); ?>');"></div>
          <div class="ak-gallery-meta">
            <span class="ak-gallery-tag"><?php echo esc_html( $item['tag'] ); ?></span>
            <span class="ak-gallery-title"><?php echo esc_html( $item['title'] ); ?></span>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- PENDEKATAN KAMI -->
<section class="ak-section">
  <div class="ak-container">
    <div class="ak-section-header">
      <div class="ak-section-eyebrow">Pendekatan</div>
      <h2 class="ak-reveal-slide" data-reveal">Cara kami <em>bekerja</em> di setiap proyek.</h2>
    </div>
    <div class="ak-narrative-grid ak-parallax-grid" data-parallax="1.15,1.0,1.25">
      <div class="ak-reveal-slide ak-parallax-col" data-reveal>
        <h3 class="cd" data-split>Pendekatan Riset</h3>
        <p>Setiap proyek dimulai dengan memahami bisnis Anda — target market, kompetitor, dan goal yang ingin dicapai. Bukan cuma "bikin website".</p>
      </div>
      <div class="ak-reveal-slide ak-parallax-col" data-reveal>
        <h3 class="cd" data-split>Desain Berorientasi Hasil</h3>
        <p>Visual yang menarik saja tidak cukup. Kami desain untuk konversi — apakah itu lead masuk, transaksi, atau sign-up.</p>
      </div>
      <div class="ak-reveal-slide ak-parallax-col" data-reveal>
        <h3 class="cd" data-split>Kode yang Bersih</h3>
        <p>Di balik layar, kami tulis kode yang mudah dipelihara. Bukan "asal jadi" — sehingga website Anda bisa berkembang seiring bisnis.</p>
      </div>
    </div>
  </div>
</section>

<!-- SPECIALISASI INDUSTRI -->
<section class="ak-section-tight ak-section-light">
  <div class="ak-container">
    <div class="ak-section-header">
      <div class="ak-section-eyebrow">Fokus Industri</div>
      <h2 class="ak-reveal-slide" data-reveal">Tiga <em>vertikal</em> yang kami dalami.</h2>
      <p>Fokus membuat kami lebih cepat, lebih murah, dan lebih paham dibanding generalis.</p>
    </div>
    <div class="ak-services-grid" data-stagger>
      <div class="ak-service-card">
        <div class="ak-service-icon"><?php echo ak_icon('plane'); ?></div>
        <h3 class="cd" data-split>Travel &amp; Tour</h3>
        <p>Travel agent Jambi: company profile, sistem booking sederhana, dan integrasi WhatsApp untuk inquiry. Sudah paham karakter industri ini.</p>
      </div>
      <div class="ak-service-card">
        <div class="ak-service-icon"><?php echo ak_icon('book'); ?></div>
        <h3 class="cd" data-split>Pelatihan &amp; Kursus</h3>
        <p>LPK, bimbel, atau kursus online: landing page, formulir pendaftaran, dan integrasi payment gateway.</p>
      </div>
      <div class="ak-service-card">
        <div class="ak-service-icon"><?php echo ak_icon('hospital'); ?></div>
        <h3 class="cd" data-split>Kesehatan</h3>
        <p>Klinik, praktek dokter, atau apotek: company profile + sistem antrian online sederhana via WhatsApp.</p>
      </div>
    </div>
  </div>
</section>

<!-- NILAI TAMBAHAN -->
<section class="ak-section-tight">
  <div class="ak-container">
    <div class="ak-showcase">
      <div class="ak-showcase-item span-7 ak-reveal" data-reveal>
        <div class="ak-showcase-bg" style="background:linear-gradient(135deg,#e8e8e8,#dcdcdc);min-height:340px;flex-direction:column;gap:12px;">
          <div class="cd" style="font-size:1.8rem;color:var(--text);">Fast Response</div>
          <div style="font-size:0.85rem;color:var(--text-muted);font-weight:400;">Balasan dalam 1–2 jam di jam kerja</div>
        </div>
      </div>
      <div class="ak-showcase-item span-5 ak-reveal" data-reveal>
        <div class="ak-showcase-bg" style="background:linear-gradient(135deg,#e0e0e0,#d0d0d0);min-height:340px;flex-direction:column;gap:12px;">
          <div class="cd" style="font-size:1.8rem;color:var(--text);">100% Custom</div>
          <div style="font-size:0.85rem;color:var(--text-muted);font-weight:400;">Tidak pakai template pasaran</div>
        </div>
      </div>
      <div class="ak-showcase-item span-4 circle ak-reveal" data-reveal>
        <div class="ak-showcase-bg" style="background:linear-gradient(135deg,#d8d8d8,#c8c8c8);">
          <div class="cd" style="font-size:1.2rem;color:var(--text);">Garansi Revisi</div>
        </div>
      </div>
      <div class="ak-showcase-item span-4 ak-reveal" data-reveal>
        <div class="ak-showcase-bg" style="background:linear-gradient(135deg,#ececec,#d4d4d4);min-height:240px;flex-direction:column;gap:12px;">
          <div class="cd" style="font-size:1.5rem;color:var(--text);">SEO Dasar</div>
          <div style="font-size:0.8rem;color:var(--text-muted);font-weight:400;">Termasuk di setiap paket</div>
        </div>
      </div>
      <div class="ak-showcase-item span-4 ak-reveal" data-reveal>
        <div class="ak-showcase-bg" style="background:linear-gradient(135deg,#e4e4e4,#cccccc);min-height:240px;flex-direction:column;gap:12px;">
          <div class="cd" style="font-size:1.5rem;color:var(--text);">Source Code</div>
          <div style="font-size:0.8rem;color:var(--text-muted);font-weight:400;">Milik Anda sepenuhnya</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="ak-cta ak-reveal-slide" data-reveal>
  <h2 class="cd">Jadilah proyek pertama kami.</h2>
  <p>Atau proyek ke-2, ke-3 — yang penting Anda puas.</p>
  <div class="ak-ctas">
    <a href="https://wa.me/6285951572182?text=Halo%20Akar%20Solution%2C%20saya%20tertarik%20bekerja%20sama." class="ak-btn ak-btn-lg" target="_blank" rel="noopener">Mulai Proyek</a>
    <a href="<?php echo esc_url( home_url( '/pricing' ) ); ?>" class="ak-btn ak-btn-outline ak-btn-lg">Lihat Harga</a>
  </div>
</section>

<?php
get_template_part( 'template-parts/ak-chrome-foot' );
get_footer();
