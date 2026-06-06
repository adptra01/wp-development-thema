<?php
/**
 * Template Name: Harga
 * Akar Solution — Pricing page (Swiss-Minimal)
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
      <span class="ak-hero-tag">Harga</span>
      <h1 class="ak-reveal-slide" data-reveal>
        Harga <em class="ak-underline" data-draw>transparan</em>, tidak ada hidden cost.
      </h1>
      <p class="ak-hero-sub ak-reveal-slide" data-reveal>Pilih paket yang sesuai dengan kebutuhan Anda — atau hubungi kami untuk penawaran custom. Semua harga sudah final, tidak ada biaya tersembunyi.</p>
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

<!-- BISNIS PRICING -->
<section class="ak-section-tight">
  <div class="ak-container">
    <div class="ak-section-header">
      <div class="ak-section-eyebrow">Divisi Bisnis</div>
      <h2 class="ak-reveal-slide" data-reveal">Paket <em>website</em> &amp; aplikasi.</h2>
      <p>Tiga paket untuk skala bisnis yang berbeda. Upgrade atau downgrade kapan saja.</p>
    </div>
    <div class="ak-pricing-grid ak-parallax-grid" data-parallax="1.2,1.0,1.2">
      <div class="ak-pcard ak-reveal-slide ak-parallax-col" data-reveal>
        <div class="ak-pname cd-m" data-split>Website UMKM</div>
        <div class="ak-pprice cd">Rp 1,5<small>jt</small></div>
        <p class="ak-pdesc">Company profile 5–10 halaman, mobile responsive, SEO dasar. Domain + hosting 1 tahun.</p>
        <ul class="ak-plist">
          <li>5–10 halaman (Home, About, Services, Contact, dst)</li>
          <li>Desain custom sesuai brand</li>
          <li>Mobile responsive</li>
          <li>Form WhatsApp &amp; email</li>
          <li>SEO on-page (meta, sitemap, robots)</li>
          <li>Free domain .com + hosting 1 tahun</li>
          <li>Garansi revisi 2 minggu</li>
        </ul>
        <a href="https://wa.me/6285951572182?text=Halo%20Akar%20Solution%2C%20saya%20tertarik%20paket%20Website%20UMKM." class="ak-btn ak-btn-block" target="_blank" rel="noopener">Pesan Sekarang</a>
      </div>
      <div class="ak-pcard feat ak-reveal-slide ak-parallax-col" data-reveal>
        <span class="ak-pbadge">Paling Populer</span>
        <div class="ak-pname cd-m" data-split>Website Bisnis</div>
        <div class="ak-pprice cd">Rp 3,5<small>jt</small></div>
        <p class="ak-pdesc">Untuk bisnis yang sudah established. Lebih banyak halaman, custom fitur, dan integrasi.</p>
        <ul class="ak-plist">
          <li>10–20 halaman (multi-section)</li>
          <li>Desain premium + animasi</li>
          <li>Blog / news system</li>
          <li>CMS (Anda bisa edit sendiri)</li>
          <li>Integrasi WhatsApp, Google Maps, Analytics</li>
          <li>SEO advanced + performance optimization</li>
          <li>Free domain + hosting 1 tahun</li>
          <li>Garansi revisi 1 bulan</li>
        </ul>
        <a href="https://wa.me/6285951572182?text=Halo%20Akar%20Solution%2C%20saya%20tertarik%20paket%20Website%20Bisnis." class="ak-btn ak-btn-block" target="_blank" rel="noopener">Pesan Sekarang</a>
      </div>
      <div class="ak-pcard ak-reveal-slide ak-parallax-col" data-reveal>
        <div class="ak-pname cd-m" data-split>Aplikasi Custom</div>
        <div class="ak-pprice cd">Rp 8<small>jt+</small></div>
        <p class="ak-pdesc">Sistem sesuai kebutuhan spesifik bisnis Anda. Booking, inventory, CRM, dashboard, dll.</p>
        <ul class="ak-plist">
          <li>Analisis kebutuhan &amp; workflow</li>
          <li>Database design &amp; API</li>
          <li>User authentication &amp; roles</li>
          <li>Dashboard admin</li>
          <li>Responsive (web + mobile friendly)</li>
          <li>Dokumentasi teknis</li>
          <li>Free maintenance 3 bulan</li>
          <li>Training penggunaan</li>
        </ul>
        <a href="https://wa.me/6285951572182?text=Halo%20Akar%20Solution%2C%20saya%20ingin%20konsultasi%20aplikasi%20custom." class="ak-btn ak-btn-block" target="_blank" rel="noopener">Konsultasi Gratis</a>
      </div>
    </div>
  </div>
</section>

<!-- PENDIDIKAN PRICING -->
<section class="ak-section-tight ak-section-light" id="pendidikan">
  <div class="ak-container">
    <div class="ak-section-header">
      <div class="ak-section-eyebrow">Divisi Pendidikan</div>
      <h2 class="ak-reveal-slide" data-reveal">Paket <em>mentoring</em> &amp; konsultasi.</h2>
      <p>Untuk mahasiswa informatika yang butuh bimbingan skripsi, proyek, atau review kode.</p>
    </div>
    <div class="ak-pricing-grid ak-parallax-grid" data-parallax="1.2,1.0,1.2">
      <div class="ak-pcard ak-reveal-slide ak-parallax-col" data-reveal>
        <div class="ak-pname cd-m" data-split>Code Review</div>
        <div class="ak-pprice cd">Rp 100<small>K</small></div>
        <p class="ak-pdesc">Review 1 file/skrip — refactoring, performance, dan best practices.</p>
        <ul class="ak-plist">
          <li>1 file source code</li>
          <li>Feedback tertulis detail</li>
          <li>Saran refactoring</li>
          <li>Best practices check</li>
          <li>Estimasi 2–3 hari kerja</li>
        </ul>
        <a href="https://wa.me/6285951572182?text=Halo%20Akar%20Solution%2C%20saya%20tertarik%20Code%20Review." class="ak-btn ak-btn-block" target="_blank" rel="noopener">Pesan Sekarang</a>
      </div>
      <div class="ak-pcard feat ak-reveal-slide ak-parallax-col" data-reveal>
        <span class="ak-pbadge">Paling Diminati</span>
        <div class="ak-pname cd-m" data-split>Mentoring Skripsi</div>
        <div class="ak-pprice cd">Rp 150<small>K/sesi</small></div>
        <p class="ak-pdesc">Pendampingan 1-on-1 via video call. 1 sesi = 60 menit.</p>
        <ul class="ak-plist">
          <li>1-on-1 via Zoom / Google Meet</li>
          <li>Durasi 60 menit per sesi</li>
          <li>Diskusi arsitektur &amp; alur</li>
          <li>Code review real-time</li>
          <li>Saran teknologi stack</li>
          <li>Catatan &amp; rekaman sesi</li>
          <li>Free follow-up chat 1 minggu</li>
        </ul>
        <a href="https://wa.me/6285951572182?text=Halo%20Akar%20Solution%2C%20saya%20tertarik%20Mentoring%20Skripsi." class="ak-btn ak-btn-block" target="_blank" rel="noopener">Booking Sesi</a>
      </div>
      <div class="ak-pcard ak-reveal-slide ak-parallax-col" data-reveal>
        <div class="ak-pname cd-m" data-split>Konsultasi Proyek</div>
        <div class="ak-pprice cd">Rp 200<small>K+</small></div>
        <p class="ak-pdesc">Untuk proyek akhir / tugas besar yang butuh guidance lebih dalam.</p>
        <ul class="ak-plist">
          <li>Analisis requirement</li>
          <li>Desain database &amp; arsitektur</li>
          <li>Setup development environment</li>
          <li>Code skeleton / starter</li>
          <li>Bimbingan deployment</li>
          <li>Paket 5+ sesi (diskon 20%)</li>
        </ul>
        <a href="https://wa.me/6285951572182?text=Halo%20Akar%20Solution%2C%20saya%20tertarik%20Konsultasi%20Proyek." class="ak-btn ak-btn-block" target="_blank" rel="noopener">Konsultasi Gratis</a>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="ak-section">
  <div class="ak-container ak-container-narrow">
    <div class="ak-section-header">
      <div class="ak-section-eyebrow">FAQ</div>
      <h2 class="ak-reveal-slide" data-reveal">Pertanyaan yang <em>sering</em> ditanyakan.</h2>
    </div>
    <div class="ak-narrative" style="text-align:left;">
      <div class="ak-reveal-slide" data-reveal style="padding:28px 0;border-bottom:1px solid var(--line);">
        <h3 class="cd" style="font-size:1.15rem;margin-bottom:10px;letter-spacing:-0.02em;">Apakah bisa bayar DP dulu?</h3>
        <p class="muted" style="font-size:0.98rem;line-height:1.7;">Bisa. Standar kami 50% DP, 50% pelunasan setelah website live. Untuk paket Aplikasi Custom, termin bisa 3 tahap (30%–40%–30%).</p>
      </div>
      <div class="ak-reveal-slide" data-reveal style="padding:28px 0;border-bottom:1px solid var(--line);">
        <h3 class="cd" style="font-size:1.15rem;margin-bottom:10px;letter-spacing:-0.02em;">Berapa lama pengerjaan?</h3>
        <p class="muted" style="font-size:0.98rem;line-height:1.7;">Website UMKM: 1–2 minggu. Website Bisnis: 2–4 minggu. Aplikasi Custom: 1–3 bulan tergantung kompleksitas.</p>
      </div>
      <div class="ak-reveal-slide" data-reveal style="padding:28px 0;border-bottom:1px solid var(--line);">
        <h3 class="cd" style="font-size:1.15rem;margin-bottom:10px;letter-spacing:-0.02em;">Saya di luar Jambi, bisa order?</h3>
        <p class="muted" style="font-size:0.98rem;line-height:1.7;">Bisa. Komunikasi via WhatsApp, video call, dan shared dokumen. Beberapa klien kami ada di luar Jambi.</p>
      </div>
      <div class="ak-reveal-slide" data-reveal style="padding:28px 0;">
        <h3 class="cd" style="font-size:1.15rem;margin-bottom:10px;letter-spacing:-0.02em;">Apa saya bisa edit website sendiri setelah jadi?</h3>
        <p class="muted" style="font-size:0.98rem;line-height:1.7;">Untuk paket Bisnis ke atas, kami buatkan CMS — Anda bisa edit teks, gambar, dan tambah halaman sendiri tanpa coding.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="ak-cta ak-reveal-slide" data-reveal>
  <h2 class="cd">Masih ragu?</h2>
  <p>Diskusi 15 menit gratis — kami bantu pilih paket yang pas.</p>
  <div class="ak-ctas">
    <a href="https://wa.me/6285951572182?text=Halo%20Akar%20Solution%2C%20saya%20mau%20konsultasi%20paket." class="ak-btn ak-btn-lg" target="_blank" rel="noopener">💬 Chat via WhatsApp</a>
    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="ak-btn ak-btn-outline ak-btn-lg">Form Kontak</a>
  </div>
</section>

<?php
get_template_part( 'template-parts/ak-chrome-foot' );
get_footer();
