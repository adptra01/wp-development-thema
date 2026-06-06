<?php
/**
 * Front page template — Akar Solution
 * Swiss-Minimal Editorial Design System
 * Sections mirror AKAR-SOLUTION-SALES-PLAYBOOK.md:
 *   1. Hero
 *   2. Masalah
 *   3. Kenapa Kami
 *   4. Proses
 *   5. Layanan
 *   6. Portofolio
 *   7. Testimoni
 *   8. Kontak (CTA)
 *
 * @package HelloElementor
 */
get_header();
get_template_part( 'template-parts/ak-chrome-head' );
?>

<!-- 1. HERO — 2-column editorial -->
<section class="ak-hero">
  <div class="ak-hero-grid">
    <div>
      <span class="ak-hero-tag">Akar Solution</span>
      <h1 class="ak-reveal-slide" data-reveal>
        <span class="ak-underline" data-draw>Akar</span> digital untuk <em class="ak-underline" data-draw>bisnis</em> &amp; <em class="ak-underline" data-draw>pendidikan</em> di Jambi.
      </h1>
      <p class="ak-hero-sub ak-reveal-slide" data-reveal>Mitra lokal Jambi yang membantu UMKM punya website profesional, bisnis punya aplikasi custom, dan mahasiswa IT punya pendamping skripsi yang paham. Semua dengan harga transparan.</p>
      <div class="ak-hero-ctas ak-reveal-slide" data-reveal>
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="ak-btn">Konsultasi Gratis</a>
        <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="ak-btn ak-btn-outline">Lihat Layanan</a>
      </div>
    </div>
    <div class="ak-hero-visual ak-reveal" data-reveal>
      <div class="ak-hero-cards">
        <a href="https://akar-solution.page.gd/glad2glow/" target="_blank" rel="noopener" class="ak-hero-card">
          <img src="<?php echo esc_url( content_url( '/uploads/showcase/glad2glow-hero.png' ) ); ?>" alt="Glad2Glow" loading="lazy">
        </a>
        <a href="https://sibanyu.com/news/categories" target="_blank" rel="noopener" class="ak-hero-card">
          <img src="<?php echo esc_url( content_url( '/uploads/showcase/sibanyu-hero.png' ) ); ?>" alt="Sibanyu News" loading="lazy">
        </a>
        <a href="https://akar-solution.page.gd/" target="_blank" rel="noopener" class="ak-hero-card">
          <img src="<?php echo esc_url( content_url( '/uploads/showcase/akar-solution-hero.png' ) ); ?>" alt="Akar Solution" loading="lazy">
        </a>
        <a href="https://adptra01.framer.media/" target="_blank" rel="noopener" class="ak-hero-card">
          <img src="<?php echo esc_url( content_url( '/uploads/showcase/framer-portfolio-hero.png' ) ); ?>" alt="Framer Portfolio" loading="lazy">
        </a>
      </div>
    </div>
  </div>
</section>

<!-- 2. MASALAH — pain points we solve -->
<section class="ak-section">
  <div class="ak-container">
    <div class="ak-section-header">
      <div class="ak-section-eyebrow">Masalah yang Sering Kami Dengar</div>
      <h2 class="ak-reveal-slide" data-reveal>Anda tidak sendiri — ini <em>kenyataan</em> banyak bisnis lokal Jambi.</h2>
    </div>
    <div class="ak-narrative-grid">
      <div class="ak-reveal-slide" data-reveal>
        <h3 class="cd" data-split>"Pelanggan cari di Google, tapi bisnis saya tidak muncul."</h3>
        <p>Tanpa website, bisnis Anda invisible di Google. Pelanggan potensial yang mencari "agen travel Jambi" atau "klinik gigi Jambi" lewat pencarian organik — langsung beralih ke kompetitor yang sudah online.</p>
      </div>
      <div class="ak-reveal-slide" data-reveal>
        <h3 class="cd" data-split>"Vendor IT di Jakarta tidak paham konteks Jambi."</h3>
        <p>Brief harus diulang-ulang, desain terasa generik, support lambat karena beda zona waktu. Setelah deal, mereka sulit dihubungi. Biaya komunikasi ini yang tidak dihitung di awal.</p>
      </div>
      <div class="ak-reveal-slide" data-reveal>
        <h3 class="cd" data-split>"Freelancer di marketplace tidak bisa diandalkan."</h3>
        <p>Hasil asal jadi, tidak ada maintenance, source code tidak diberikan. Saat website error, tidak ada yang bertanggung jawab. Website akhirnya mati dan uang terbuang.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3. KENAPA KAMI — 3 differentiators -->
<section class="ak-section-tight ak-section-light">
  <div class="ak-container">
    <div class="ak-section-header">
      <div class="ak-section-eyebrow">Kenapa Akar Solution</div>
      <h2 class="ak-reveal-slide" data-reveal">Tiga hal yang <em>membedakan</em> kami.</h2>
    </div>
    <div class="ak-narrative-grid ak-parallax-grid" data-parallax="1.15,1.0,1.25">
      <div class="ak-reveal-slide ak-parallax-col" data-reveal>
        <h3 class="cd" data-split>Lokal &amp; Personal</h3>
        <p>Kami di Jambi — bukan di Jakarta. Bisa ketemu langsung, konsultasi tatap muka, dan support yang dekat. Tidak ada chatbot, tidak ada call center — manusia sungguhan yang paham konteks lokal.</p>
      </div>
      <div class="ak-reveal-slide ak-parallax-col" data-reveal>
        <h3 class="cd" data-split>Harga Transparan</h3>
        <p>Semua harga dipublikasikan. Tidak ada "hubungi kami untuk penawaran" — Anda tahu persis apa yang Anda bayar sebelum memutuskan. Tidak ada hidden cost, tidak ada upsell memaksa.</p>
      </div>
      <div class="ak-reveal-slide ak-parallax-col" data-reveal>
        <h3 class="cd" data-split>Spesialis Vertikal</h3>
        <p>Kami fokus di industri travel, pelatihan, dan kesehatan — bukan generalis yang mengerjakan semuanya setengah-setengah. Fokus membuat kami lebih cepat, lebih murah, dan lebih paham.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4. PROSES — 4 steps, horizontal -->
<section class="ak-section">
  <div class="ak-container">
    <div class="ak-section-header">
      <div class="ak-section-eyebrow">Cara Kami Kerja</div>
      <h2 class="ak-reveal-slide" data-reveal">Empat langkah <em>simpel</em> dari brief sampai live.</h2>
    </div>
    <div class="ak-process">
      <div class="ak-process-step ak-reveal-slide" data-reveal>
        <h3>Brief &amp; Diskusi</h3>
        <p>Kita ngobrol 15–30 menit soal kebutuhan Anda — bisa via WhatsApp, video call, atau ketemu langsung di Jambi.</p>
      </div>
      <div class="ak-process-step ak-reveal-slide" data-reveal>
        <h3>Mockup &amp; Desain</h3>
        <p>Saya kirim draft desain dalam 3–5 hari kerja. Anda review, kasih feedback, dan kami perbaiki sampai cocok.</p>
      </div>
      <div class="ak-process-step ak-reveal-slide" data-reveal>
        <h3>Development</h3>
        <p>Website atau aplikasi dibangun dengan stack modern. Anda bisa pantau progress kapan saja via shared board.</p>
      </div>
      <div class="ak-process-step ak-reveal-slide" data-reveal>
        <h3>Launch &amp; Support</h3>
        <p>Website live, training penggunaan, dan garansi revisi. Maintenance opsional untuk ketenangan jangka panjang.</p>
      </div>
    </div>
  </div>
</section>

<!-- 5. LAYANAN — 3 service cards with meta -->
<section class="ak-section-tight">
  <div class="ak-container">
    <div class="ak-section-header">
      <div class="ak-section-eyebrow">Layanan</div>
      <h2 class="ak-reveal-slide" data-reveal">Tiga pilar untuk <em>transformasi</em> digital Anda.</h2>
    </div>
    <div class="ak-services-grid" data-stagger>
      <div class="ak-service-card">
        <div class="ak-service-icon"><?php echo ak_icon('globe'); ?></div>
        <h3 class="cd" data-split>Website UMKM</h3>
        <p>Company profile profesional 5–10 halaman, mobile responsive, SEO dasar. Domain .com + hosting 1 tahun sudah termasuk.</p>
        <div class="ak-service-meta">
          <div class="ak-service-meta-row"><span>Mulai dari</span><strong>Rp 1,5 jt</strong></div>
          <div class="ak-service-meta-row"><span>Durasi</span><strong>1–2 minggu</strong></div>
          <div class="ak-service-meta-row"><span>Cocok untuk</span><strong>UMKM, bisnis lokal</strong></div>
        </div>
        <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="ak-service-cta">Selengkapnya</a>
      </div>
      <div class="ak-service-card">
        <div class="ak-service-icon"><?php echo ak_icon('code'); ?></div>
        <h3 class="cd" data-split>Aplikasi Custom</h3>
        <p>Web app sesuai kebutuhan bisnis: sistem inventory, booking, CRM, dashboard admin. Dibangun dengan stack modern.</p>
        <div class="ak-service-meta">
          <div class="ak-service-meta-row"><span>Mulai dari</span><strong>Rp 8 jt</strong></div>
          <div class="ak-service-meta-row"><span>Durasi</span><strong>1–3 bulan</strong></div>
          <div class="ak-service-meta-row"><span>Cocok untuk</span><strong>Bisnis established</strong></div>
        </div>
        <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="ak-service-cta">Selengkapnya</a>
      </div>
      <div class="ak-service-card">
        <div class="ak-service-icon"><?php echo ak_icon('graduation'); ?></div>
        <h3 class="cd" data-split>Mentoring IT</h3>
        <p>Pendampingan 1-on-1 untuk skripsi informatika: arsitektur sistem, code review, deployment, hingga sidang.</p>
        <div class="ak-service-meta">
          <div class="ak-service-meta-row"><span>Mulai dari</span><strong>Rp 150K / sesi</strong></div>
          <div class="ak-service-meta-row"><span>Durasi</span><strong>60 menit / sesi</strong></div>
          <div class="ak-service-meta-row"><span>Cocok untuk</span><strong>Mahasiswa IT</strong></div>
        </div>
        <a href="<?php echo esc_url( home_url( '/services' ) ); ?>#pendidikan" class="ak-service-cta">Selengkapnya</a>
      </div>
    </div>
  </div>
</section>

<!-- 6. PORTOFOLIO — quick showcase + industries -->
<section class="ak-section-tight ak-section-light">
  <div class="ak-container">
    <div class="ak-section-header">
      <div class="ak-section-eyebrow">Portofolio</div>
      <h2 class="ak-reveal-slide" data-reveal">Fokus <em>industri</em> yang kami pahami dalam.</h2>
    </div>
    <div class="ak-services-grid" data-stagger>
      <div class="ak-service-card">
        <div class="ak-service-icon"><?php echo ak_icon('plane'); ?></div>
        <h3 class="cd" data-split>Travel & Tour</h3>
        <p>Travel agent Jambi: company profile, sistem booking sederhana, dan integrasi WhatsApp untuk inquiry.</p>
      </div>
      <div class="ak-service-card">
        <div class="ak-service-icon"><?php echo ak_icon('book'); ?></div>
        <h3 class="cd" data-split>Pelatihan & Kursus</h3>
        <p>LPK, bimbel, atau kursus online: landing page, formulir pendaftaran, dan integrasi payment gateway.</p>
      </div>
      <div class="ak-service-card">
        <div class="ak-service-icon"><?php echo ak_icon('hospital'); ?></div>
        <h3 class="cd" data-split>Kesehatan</h3>
        <p>Klinik, praktek dokter, atau apotek: company profile + sistem antrian online sederhana via WhatsApp.</p>
      </div>
    </div>
    <div style="text-align:center;margin-top:60px;">
      <a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>" class="ak-btn ak-btn-outline">Lihat Portofolio Lengkap</a>
    </div>
  </div>
</section>

<!-- 7. TESTIMONI — single quote + client promise -->
<section class="ak-section">
  <div class="ak-container ak-container-narrow">
    <div class="ak-section-header">
      <div class="ak-section-eyebrow">Testimoni</div>
      <h2 class="ak-reveal-slide" data-reveal">Apa kata mereka.</h2>
    </div>
    <div class="ak-narrative">
      <blockquote class="ak-reveal-slide" data-reveal>
        Kami baru memulai, jadi testimoni nyata sedang <em>terus bertumbuh</em>. Yang bisa kami janjikan: setiap klien yang deal dengan kami, kami dampingi sampai puas.
      </blockquote>
      <p class="ak-reveal-slide" data-reveal style="margin-top:32px;color:var(--text-soft);font-size:0.95rem;font-weight:500;">— Tim Akar Solution</p>
    </div>
  </div>
</section>

<!-- 8. CTA — kontak akhir -->
<section class="ak-cta ak-reveal-slide" data-reveal>
  <h2 class="cd">Siap tumbuh bareng kami?</h2>
  <p>Konsultasi gratis 15 menit — tanpa komitmen. Kami dengarkan dulu, baru rekomendasikan.</p>
  <div class="ak-ctas">
    <a href="https://wa.me/6285951572182?text=Halo%20Akar%20Solution%2C%20saya%20tertarik%20dengan%20layanan%20Anda." class="ak-btn ak-btn-lg" target="_blank" rel="noopener">💬 Chat via WhatsApp</a>
    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="ak-btn ak-btn-outline ak-btn-lg">Form Kontak</a>
  </div>
</section>

<?php
get_template_part( 'template-parts/ak-chrome-foot' );
get_footer();
