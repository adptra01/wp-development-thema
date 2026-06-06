<?php
/**
 * Template Name: Layanan
 * Akar Solution — Services page (Swiss-Minimal)
 * Two divisions: Bisnis (Website, Aplikasi, Maintenance) + Pendidikan (Mentoring, Konsultasi, Code Review)
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
      <span class="ak-hero-tag">Layanan</span>
      <h1 class="ak-reveal-slide" data-reveal>
        Tiga pilar untuk <em class="ak-underline" data-draw>transformasi</em> digital Anda.
      </h1>
      <p class="ak-hero-sub ak-reveal-slide" data-reveal>Dari UMKM Jambi hingga mahasiswa informatika — kami menyediakan layanan yang relevan, transparan, dan dampingi sampai selesai.</p>
    </div>
    <div class="ak-hero-visual ak-reveal" data-reveal>
      <div class="ak-hero-cards">
        <a href="https://adptra01.framer.media/" target="_blank" rel="noopener" class="ak-hero-card">
          <img src="<?php echo esc_url( content_url( '/uploads/showcase/framer-portfolio-hero.png' ) ); ?>" alt="Framer Portfolio" loading="lazy">
        </a>
        <a href="https://akar-solution.page.gd/" target="_blank" rel="noopener" class="ak-hero-card">
          <img src="<?php echo esc_url( content_url( '/uploads/showcase/akar-solution-hero.png' ) ); ?>" alt="Akar Solution" loading="lazy">
        </a>
        <a href="https://akar-solution.page.gd/glad2glow/" target="_blank" rel="noopener" class="ak-hero-card">
          <img src="<?php echo esc_url( content_url( '/uploads/showcase/glad2glow-hero.png' ) ); ?>" alt="Glad2Glow" loading="lazy">
        </a>
      </div>
    </div>
  </div>
</section>

<!-- DIVISI BISNIS -->
<section class="ak-section-tight">
  <div class="ak-container">
    <div class="ak-section-header">
      <div class="ak-section-eyebrow">Divisi Bisnis</div>
      <h2 class="ak-reveal-slide" data-reveal>Website, aplikasi, &amp; <em>maintenance</em>.</h2>
      <p>Untuk UMKM, bisnis established, dan korporasi yang ingin tampil profesional di dunia digital.</p>
    </div>
    <div class="ak-services-grid" data-stagger>
      <div class="ak-service-card">
        <div class="ak-service-icon"><?php echo ak_icon('globe'); ?></div>
        <h3 class="cd" data-split>Website UMKM</h3>
        <p>Company profile profesional 5–10 halaman, mobile responsive, SEO dasar. Domain .com + hosting 1 tahun sudah termasuk.</p>
        <div class="ak-service-meta">
          <div class="ak-service-meta-row"><span>Mulai dari</span><strong>Rp 1,5 jt</strong></div>
          <div class="ak-service-meta-row"><span>Durasi</span><strong>1–2 minggu</strong></div>
          <div class="ak-service-meta-row"><span>Cocok untuk</span><strong>UMKM baru mulai</strong></div>
        </div>
        <a href="<?php echo esc_url( home_url( '/pricing' ) ); ?>" class="ak-service-cta">Lihat Paket</a>
      </div>
      <div class="ak-service-card">
        <div class="ak-service-icon"><?php echo ak_icon('code'); ?></div>
        <h3 class="cd" data-split>Aplikasi Custom</h3>
        <p>Web app sesuai kebutuhan spesifik: sistem inventory, booking, CRM, dashboard admin. Stack modern &amp; maintainable.</p>
        <div class="ak-service-meta">
          <div class="ak-service-meta-row"><span>Mulai dari</span><strong>Rp 8 jt</strong></div>
          <div class="ak-service-meta-row"><span>Durasi</span><strong>1–3 bulan</strong></div>
          <div class="ak-service-meta-row"><span>Cocok untuk</span><strong>Bisnis established</strong></div>
        </div>
        <a href="<?php echo esc_url( home_url( '/pricing' ) ); ?>" class="ak-service-cta">Lihat Paket</a>
      </div>
      <div class="ak-service-card">
        <div class="ak-service-icon"><?php echo ak_icon('wrench'); ?></div>
        <h3 class="cd" data-split>Maintenance</h3>
        <p>Update konten, backup rutin, monitoring uptime, perbaikan bug. Cocok untuk yang ingin website tetap fresh tanpa repot.</p>
        <div class="ak-service-meta">
          <div class="ak-service-meta-row"><span>Mulai dari</span><strong>Rp 150K / bulan</strong></div>
          <div class="ak-service-meta-row"><span>Durasi</span><strong>Kontrak bulanan</strong></div>
          <div class="ak-service-meta-row"><span>Cocok untuk</span><strong>Website existing</strong></div>
        </div>
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="ak-service-cta">Konsultasi</a>
      </div>
    </div>
  </div>
</section>

<!-- DIVISI PENDIDIKAN -->
<section class="ak-section-tight ak-section-light" id="pendidikan">
  <div class="ak-container">
    <div class="ak-section-header">
      <div class="ak-section-eyebrow">Divisi Pendidikan</div>
      <h2 class="ak-reveal-slide" data-reveal">Pendampingan <em>IT</em> untuk mahasiswa.</h2>
      <p>Khusus mahasiswa informatika &amp; IT yang butuh bimbingan skripsi, proyek akhir, atau konsultasi teknis.</p>
    </div>
    <div class="ak-services-grid" data-stagger>
      <div class="ak-service-card">
        <div class="ak-service-icon"><?php echo ak_icon('graduation'); ?></div>
        <h3 class="cd" data-split>Mentoring Skripsi</h3>
        <p>Pendampingan 1-on-1 untuk skripsi informatika: arsitektur sistem, code review, deployment, hingga sidang.</p>
        <div class="ak-service-meta">
          <div class="ak-service-meta-row"><span>Harga</span><strong>Rp 150K / sesi</strong></div>
          <div class="ak-service-meta-row"><span>Durasi</span><strong>60 menit / sesi</strong></div>
          <div class="ak-service-meta-row"><span>Cocok untuk</span><strong>Skripsi TI</strong></div>
        </div>
        <a href="<?php echo esc_url( home_url( '/pricing' ) ); ?>#pendidikan" class="ak-service-cta">Lihat Paket</a>
      </div>
      <div class="ak-service-card">
        <div class="ak-service-icon"><?php echo ak_icon('lightbulb'); ?></div>
        <h3 class="cd" data-split>Konsultasi Proyek</h3>
        <p>Bantu pilih stack teknologi, desain database, struktur kode, dan best practices untuk proyek akhir atau tugas besar.</p>
        <div class="ak-service-meta">
          <div class="ak-service-meta-row"><span>Mulai dari</span><strong>Rp 200K</strong></div>
          <div class="ak-service-meta-row"><span>Durasi</span><strong>90 menit</strong></div>
          <div class="ak-service-meta-row"><span>Cocok untuk</span><strong>Proyek akhir</strong></div>
        </div>
        <a href="<?php echo esc_url( home_url( '/pricing' ) ); ?>#pendidikan" class="ak-service-cta">Lihat Paket</a>
      </div>
      <div class="ak-service-card">
        <div class="ak-service-icon"><?php echo ak_icon('search-code'); ?></div>
        <h3 class="cd" data-split>Code Review</h3>
        <p>Review kode skripsi/proyek: refactoring, performance, security, dan dokumentasi agar lebih mudah diuji dosen.</p>
        <div class="ak-service-meta">
          <div class="ak-service-meta-row"><span>Mulai dari</span><strong>Rp 100K</strong></div>
          <div class="ak-service-meta-row"><span>Durasi</span><strong>2–3 hari kerja</strong></div>
          <div class="ak-service-meta-row"><span>Cocok untuk</span><strong>1 file source</strong></div>
        </div>
        <a href="<?php echo esc_url( home_url( '/pricing' ) ); ?>#pendidikan" class="ak-service-cta">Lihat Paket</a>
      </div>
    </div>
  </div>
</section>

<!-- PROSES KERJA -->
<section class="ak-section">
  <div class="ak-container">
    <div class="ak-section-header">
      <div class="ak-section-eyebrow">Cara Kerja</div>
      <h2 class="ak-reveal-slide" data-reveal">Empat langkah <em>simpel</em> sampai jadi.</h2>
      <p>Proses yang jelas dan terstruktur — tidak ada yang disembunyikan di belakang "hubungi kami".</p>
    </div>
    <div class="ak-process">
      <div class="ak-process-step ak-reveal-slide" data-reveal>
        <h3>01 — Brief</h3>
        <p>Diskusi kebutuhan via WhatsApp, video call, atau ketemu langsung. 15–30 menit.</p>
      </div>
      <div class="ak-process-step ak-reveal-slide" data-reveal>
        <h3>02 — Mockup</h3>
        <p>Draft desain dalam 3–5 hari kerja. Anda review dan kasih feedback.</p>
      </div>
      <div class="ak-process-step ak-reveal-slide" data-reveal>
        <h3>03 — Development</h3>
        <p>Website atau aplikasi dibangun. Anda bisa pantau progress via shared board.</p>
      </div>
      <div class="ak-process-step ak-reveal-slide" data-reveal>
        <h3>04 — Launch</h3>
        <p>Website live, training penggunaan, dan garansi revisi sesuai paket.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="ak-cta ak-reveal-slide" data-reveal>
  <h2 class="cd">Mulai proyek Anda?</h2>
  <p>Konsultasi gratis 15 menit — tanpa komitmen.</p>
  <div class="ak-ctas">
    <a href="https://wa.me/6285951572182?text=Halo%20Akar%20Solution%2C%20saya%20tertarik%20dengan%20layanan%20Anda." class="ak-btn ak-btn-lg" target="_blank" rel="noopener">💬 Chat via WhatsApp</a>
    <a href="<?php echo esc_url( home_url( '/pricing' ) ); ?>" class="ak-btn ak-btn-outline ak-btn-lg">Lihat Harga</a>
  </div>
</section>

<?php
get_template_part( 'template-parts/ak-chrome-foot' );
get_footer();
