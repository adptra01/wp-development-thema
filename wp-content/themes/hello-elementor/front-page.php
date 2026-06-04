<?php
/**
 * Front page template for Akar Solution.
 */

get_header();

$wa_number = '6285951572182';
$wa_text   = urlencode( 'Halo Akar Solution, saya tertarik dengan layanan Anda.' );
?>

<style>
:root {
  --ak-hijau: #0F3D2E;
  --ak-emas: #C8963E;
  --ak-emas-light: #E8C97A;
  --ak-putih: #FFFFFF;
  --ak-abu: #333333;
  --ak-abu-muda: #666666;
  --ak-hijau-muda: #E8F5E9;
  --ak-cream: #F9F6F0;
  --ak-radius-sm: 6px;
  --ak-radius-md: 12px;
  --ak-radius-lg: 20px;
  --ak-shadow: 0 2px 16px rgba(0,0,0,0.06);
  --ak-shadow-lg: 0 8px 32px rgba(0,0,0,0.10);
}

/* Reset Hello Elementor defaults */
.ak-page { font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif; color: var(--ak-abu); line-height: 1.7; }
.ak-page * { box-sizing: border-box; margin: 0; padding: 0; }
.ak-page a { text-decoration: none; color: inherit; }
.ak-page img { max-width: 100%; height: auto; }

/* Container */
.ak-container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }

/* Section */
.ak-section { padding: 80px 0; }
.ak-section-tight { padding: 50px 0; }
.ak-section-green { background: var(--ak-hijau); color: var(--ak-putih); }
.ak-section-cream { background: var(--ak-cream); }
.ak-section-white { background: var(--ak-putih); }

/* Typography */
.ak-heading { font-family: 'Playfair Display', Georgia, serif; font-weight: 700; line-height: 1.2; }
.ak-heading-lg { font-size: clamp(2rem, 5vw, 3.5rem); }
.ak-heading-md { font-size: clamp(1.5rem, 3vw, 2.2rem); }
.ak-heading-sm { font-size: clamp(1.1rem, 2vw, 1.5rem); }
.ak-subtitle { font-size: 1.1rem; color: var(--ak-abu-muda); max-width: 600px; }
.ak-text-center { text-align: center; }
.ak-mb-sm { margin-bottom: 12px; }
.ak-mb-md { margin-bottom: 24px; }
.ak-mb-lg { margin-bottom: 40px; }

/* Section header */
.ak-section-header { text-align: center; margin-bottom: 50px; }
.ak-section-header .ak-heading { margin-bottom: 12px; }
.ak-section-header p { color: var(--ak-abu-muda); font-size: 1.1rem; max-width: 650px; margin: 0 auto; }

/* Buttons */
.ak-btn { display: inline-flex; align-items: center; gap: 8px; padding: 14px 32px; border-radius: var(--ak-radius-sm); font-weight: 600; font-size: 0.95rem; cursor: pointer; transition: all 0.3s; border: none; }
.ak-btn-primary { background: var(--ak-emas); color: var(--ak-putih); }
.ak-btn-primary:hover { background: #b88735; transform: translateY(-2px); box-shadow: 0 4px 16px rgba(200,150,62,0.3); }
.ak-btn-outline { background: transparent; border: 2px solid var(--ak-emas); color: var(--ak-emas); }
.ak-btn-outline:hover { background: var(--ak-emas); color: var(--ak-putih); }
.ak-btn-white { background: var(--ak-putih); color: var(--ak-hijau); }
.ak-btn-white:hover { background: #f0f0f0; }
.ak-btn-wa { background: #25D366; color: #fff; }
.ak-btn-wa:hover { background: #1fb855; transform: translateY(-2px); }

/* Cards */
.ak-card { background: var(--ak-putih); border-radius: var(--ak-radius-md); padding: 30px; box-shadow: var(--ak-shadow); transition: transform 0.3s, box-shadow 0.3s; }
.ak-card:hover { transform: translateY(-4px); box-shadow: var(--ak-shadow-lg); }
.ak-card-icon { width: 56px; height: 56px; border-radius: var(--ak-radius-sm); display: flex; align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 16px; }
.ak-card-icon-green { background: var(--ak-hijau-muda); color: var(--ak-hijau); }
.ak-card-icon-gold { background: #FFF8E1; color: var(--ak-emas); }

/* Grid */
.ak-grid-2 { display: grid; grid-template-columns: repeat(2, 1fr); gap: 30px; }
.ak-grid-3 { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
.ak-grid-4 { display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; }

/* Hero */
.ak-hero { padding: 100px 0 80px; }
.ak-hero .ak-container { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
.ak-hero-content h1 { font-size: clamp(2.2rem, 5vw, 3.8rem); margin-bottom: 16px; }
.ak-hero-content h1 span { color: var(--ak-emas); }
.ak-hero-content p { font-size: 1.15rem; color: rgba(255,255,255,0.85); margin-bottom: 30px; max-width: 520px; line-height: 1.8; }
.ak-hero-buttons { display: flex; gap: 14px; flex-wrap: wrap; }
.ak-hero-visual { text-align: center; }
.ak-hero-visual .ak-logo-box { background: rgba(255,255,255,0.1); border-radius: var(--ak-radius-lg); padding: 40px; display: inline-block; }
.ak-hero-visual .ak-logo-text { font-family: 'Playfair Display', Georgia, serif; font-size: 3rem; font-weight: 700; color: var(--ak-putih); }
.ak-hero-visual .ak-logo-text span { color: var(--ak-emas); }
.ak-hero-visual .ak-logo-sub { font-size: 0.85rem; letter-spacing: 3px; text-transform: uppercase; color: rgba(255,255,255,0.6); margin-top: 8px; }

/* Divisi cards */
.ak-division-card { background: var(--ak-putih); border-radius: var(--ak-radius-md); padding: 36px; box-shadow: var(--ak-shadow); border-top: 4px solid var(--ak-hijau); text-align: left; }
.ak-division-card.gold-border { border-top-color: var(--ak-emas); }
.ak-division-card .ak-card-icon { margin-bottom: 16px; }
.ak-division-card h3 { font-size: 1.3rem; margin-bottom: 8px; color: var(--ak-hijau); }
.ak-division-card p { color: var(--ak-abu-muda); margin-bottom: 16px; font-size: 0.95rem; }
.ak-division-card ul { list-style: none; margin-bottom: 20px; }
.ak-division-card ul li { padding: 3px 0; font-size: 0.9rem; color: var(--ak-abu-muda); }
.ak-division-card ul li::before { content: '✓ '; color: var(--ak-emas); font-weight: bold; }

/* Why Us */
.ak-why-card { text-align: center; padding: 30px 20px; }
.ak-why-card .ak-card-icon { margin: 0 auto 16px; }

/* Pricing */
.ak-pricing-card { text-align: center; padding: 36px 24px; border: 2px solid #eee; position: relative; }
.ak-pricing-card.featured { border-color: var(--ak-emas); box-shadow: var(--ak-shadow-lg); transform: scale(1.03); }
.ak-pricing-card.featured:hover { transform: scale(1.03) translateY(-4px); }
.ak-pricing-badge { position: absolute; top: -14px; left: 50%; transform: translateX(-50%); background: var(--ak-emas); color: var(--ak-putih); padding: 4px 20px; border-radius: 20px; font-size: 0.8rem; font-weight: 700; }
.ak-pricing-name { font-size: 1.2rem; font-weight: 700; color: var(--ak-hijau); margin-bottom: 8px; }
.ak-pricing-price { font-size: 2.5rem; font-weight: 700; color: var(--ak-abu); margin-bottom: 4px; font-family: 'Playfair Display', Georgia, serif; }
.ak-pricing-price small { font-size: 0.9rem; color: var(--ak-abu-muda); font-weight: 400; }
.ak-pricing-desc { font-size: 0.85rem; color: var(--ak-abu-muda); margin-bottom: 20px; }
.ak-pricing-features { list-style: none; text-align: left; margin-bottom: 24px; }
.ak-pricing-features li { padding: 6px 0; font-size: 0.9rem; border-bottom: 1px solid #f0f0f0; }
.ak-pricing-features li.check::before { content: '✓ '; color: #4CAF50; font-weight: bold; }
.ak-pricing-features li.cross::before { content: '✗ '; color: #ccc; font-weight: bold; }

/* Portfolio */
.ak-portfolio-card { border-radius: var(--ak-radius-md); overflow: hidden; box-shadow: var(--ak-shadow); transition: transform 0.3s; background: var(--ak-putih); }
.ak-portfolio-card:hover { transform: translateY(-4px); }
.ak-portfolio-img { height: 200px; background: var(--ak-hijau-muda); display: flex; align-items: center; justify-content: center; color: var(--ak-hijau); font-size: 0.9rem; font-weight: 600; }
.ak-portfolio-body { padding: 20px; }
.ak-portfolio-body h4 { font-size: 1.1rem; margin-bottom: 4px; }
.ak-portfolio-body p { font-size: 0.85rem; color: var(--ak-abu-muda); }
.ak-portfolio-tag { display: inline-block; background: var(--ak-hijau-muda); color: var(--ak-hijau); padding: 2px 10px; border-radius: 12px; font-size: 0.75rem; font-weight: 600; margin-bottom: 8px; }

/* CTA Section */
.ak-cta { text-align: center; }
.ak-cta h2 { margin-bottom: 12px; }
.ak-cta p { color: rgba(255,255,255,0.8); font-size: 1.05rem; margin-bottom: 30px; }

/* Contact */
.ak-contact-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: start; }
.ak-contact-info { }
.ak-contact-info h3 { font-size: 1.3rem; margin-bottom: 16px; color: var(--ak-hijau); }
.ak-contact-item { display: flex; gap: 12px; align-items: flex-start; margin-bottom: 20px; }
.ak-contact-item .ak-icon { width: 40px; height: 40px; border-radius: 50%; background: var(--ak-hijau-muda); color: var(--ak-hijau); display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-size: 1.1rem; }
.ak-contact-item div strong { display: block; font-size: 0.9rem; margin-bottom: 2px; }
.ak-contact-item div span { font-size: 0.9rem; color: var(--ak-abu-muda); }

.ak-form { }
.ak-form-group { margin-bottom: 16px; }
.ak-form-group label { display: block; font-size: 0.85rem; font-weight: 600; margin-bottom: 6px; color: var(--ak-abu); }
.ak-form-group input, .ak-form-group textarea, .ak-form-group select { width: 100%; padding: 12px 16px; border: 1.5px solid #ddd; border-radius: var(--ak-radius-sm); font-family: inherit; font-size: 0.95rem; transition: border-color 0.3s; }
.ak-form-group input:focus, .ak-form-group textarea:focus { outline: none; border-color: var(--ak-emas); }
.ak-form-group textarea { min-height: 120px; resize: vertical; }

/* About */
.ak-about-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; }
.ak-about-visual { text-align: center; }
.ak-about-visual .ak-logo-display { display: inline-block; padding: 50px; background: var(--ak-cream); border-radius: var(--ak-radius-lg); }
.ak-about-visual .ak-logo-display .ak-logo-text { font-family: 'Playfair Display', Georgia, serif; font-size: 2.5rem; font-weight: 700; color: var(--ak-hijau); }
.ak-about-visual .ak-logo-display .ak-logo-text span { color: var(--ak-emas); }
.ak-about-content h2 { margin-bottom: 16px; }
.ak-about-content p { margin-bottom: 16px; color: var(--ak-abu-muda); line-height: 1.8; }
.ak-mission-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 30px; }
.ak-mission-card { background: var(--ak-hijau-muda); padding: 24px; border-radius: var(--ak-radius-sm); }
.ak-mission-card h4 { color: var(--ak-hijau); margin-bottom: 8px; font-size: 1rem; }

/* Footer */
.ak-footer { background: var(--ak-hijau); color: rgba(255,255,255,0.8); padding: 50px 0 30px; font-size: 0.9rem; }
.ak-footer-grid { display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; gap: 40px; margin-bottom: 30px; }
.ak-footer h4 { color: var(--ak-putih); margin-bottom: 16px; font-size: 1rem; }
.ak-footer a { color: rgba(255,255,255,0.7); display: block; padding: 3px 0; transition: color 0.3s; }
.ak-footer a:hover { color: var(--ak-emas); }
.ak-footer-brand { font-family: 'Playfair Display', Georgia, serif; font-size: 1.4rem; color: var(--ak-putih); margin-bottom: 8px; }
.ak-footer-brand span { color: var(--ak-emas); }
.ak-footer-bottom { border-top: 1px solid rgba(255,255,255,0.1); padding-top: 20px; text-align: center; font-size: 0.8rem; }

/* Floating WA */
.ak-wa-float { position: fixed; bottom: 24px; right: 24px; z-index: 999; }
.ak-wa-float a { display: flex; align-items: center; justify-content: center; width: 60px; height: 60px; border-radius: 50%; background: #25D366; color: #fff; font-size: 1.6rem; box-shadow: 0 4px 20px rgba(37,211,102,0.4); transition: transform 0.3s; }
.ak-wa-float a:hover { transform: scale(1.1); }

/* Responsive */
@media (max-width: 768px) {
  .ak-hero .ak-container { grid-template-columns: 1fr; text-align: center; gap: 40px; }
  .ak-hero-content p { margin: 0 auto 30px; }
  .ak-hero-buttons { justify-content: center; }
  .ak-grid-2, .ak-grid-3, .ak-grid-4 { grid-template-columns: 1fr; }
  .ak-contact-grid { grid-template-columns: 1fr; }
  .ak-about-grid { grid-template-columns: 1fr; }
  .ak-footer-grid { grid-template-columns: 1fr 1fr; }
  .ak-pricing-card.featured { transform: none; }
  .ak-pricing-card.featured:hover { transform: translateY(-4px); }
  .ak-mission-grid { grid-template-columns: 1fr; }
}

@media (max-width: 480px) {
  .ak-footer-grid { grid-template-columns: 1fr; }
  .ak-hero { padding: 60px 0 40px; }
  .ak-section { padding: 50px 0; }
}
</style>

<div class="ak-page">

<!-- HERO -->
<section class="ak-section-green ak-hero">
  <div class="ak-container">
    <div class="ak-hero-content">
      <h1 class="ak-heading ak-heading-lg">Akar <span>Digital</span> untuk Bisnis &amp; Pendidikan di Jambi</h1>
      <p>Website profesional, aplikasi custom, dan pendampingan skripsi IT — oleh mitra lokal yang mengerti kebutuhan Anda.</p>
      <div class="ak-hero-buttons">
        <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="ak-btn ak-btn-primary">Lihat Layanan</a>
        <a href="https://wa.me/<?php echo esc_attr( $wa_number ); ?>?text=<?php echo esc_attr( $wa_text ); ?>" class="ak-btn ak-btn-outline" target="_blank" rel="noopener">💬 Konsultasi Gratis</a>
      </div>
    </div>
    <div class="ak-hero-visual">
      <div class="ak-logo-box">
        <div class="ak-logo-text">Akar<span>Solution</span></div>
        <div class="ak-logo-sub">Akar Digital untuk Bisnis &amp; Pendidikan</div>
      </div>
    </div>
  </div>
</section>

<!-- 2 DIVISI -->
<section class="ak-section ak-section-white">
  <div class="ak-container">
    <div class="ak-section-header">
      <h2 class="ak-heading ak-heading-md">Layanan Kami</h2>
      <p>Dua divisi yang saling melengkapi untuk kebutuhan digital dan akademik Anda di Jambi.</p>
    </div>
    <div class="ak-grid-2">
      <div class="ak-division-card">
        <div class="ak-card-icon ak-card-icon-green">🏢</div>
        <h3>Divisi Bisnis</h3>
        <p>Solusi digital untuk UMKM dan bisnis di Jambi — dari website company profile hingga aplikasi custom.</p>
        <ul>
          <li>Website UMKM — mulai Rp 1.500.000</li>
          <li>Website Bisnis — mulai Rp 3.500.000</li>
          <li>Aplikasi Custom — mulai Rp 8.000.000</li>
          <li>Maintenance Bulanan — mulai Rp 150.000/bln</li>
        </ul>
        <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="ak-btn ak-btn-primary" style="font-size:0.85rem;padding:10px 24px;">Selengkapnya →</a>
      </div>
      <div class="ak-division-card gold-border">
        <div class="ak-card-icon ak-card-icon-gold">🎓</div>
        <h3>Divisi Pendidikan</h3>
        <p>Pendampingan akademik untuk mahasiswa informatika — dari arsitektur sistem hingga deployment.</p>
        <ul>
          <li>Mentoring Skripsi IT — Rp 200.000/sesi</li>
          <li>Code Review — Rp 150.000/sesi</li>
          <li>Bantuan Deployment — Rp 350.000</li>
          <li>Full Pendampingan — Rp 750.000 (4 sesi)</li>
        </ul>
        <a href="<?php echo esc_url( home_url( '/services' ) ); ?>#pendidikan" class="ak-btn ak-btn-outline" style="font-size:0.85rem;padding:10px 24px;">Selengkapnya →</a>
      </div>
    </div>
  </div>
</section>

<!-- WHY US -->
<section class="ak-section ak-section-cream">
  <div class="ak-container">
    <div class="ak-section-header">
      <h2 class="ak-heading ak-heading-md">Mengapa Akar Solution?</h2>
      <p>Tiga alasan yang membuat kami berbeda dari yang lain.</p>
    </div>
    <div class="ak-grid-3">
      <div class="ak-card ak-why-card">
        <div class="ak-card-icon ak-card-icon-green">📍</div>
        <h3 class="ak-heading-sm ak-mb-sm">Mitra Lokal Jambi</h3>
        <p style="color:var(--ak-abu-muda);font-size:0.9rem;">Kami di Jambi — bukan di Jakarta. Bisa ketemu langsung, konsultasi tatap muka, dan support yang dekat.</p>
      </div>
      <div class="ak-card ak-why-card">
        <div class="ak-card-icon ak-card-icon-gold">💰</div>
        <h3 class="ak-heading-sm ak-mb-sm">Harga Transparan</h3>
        <p style="color:var(--ak-abu-muda);font-size:0.9rem;">Semua harga dipublikasikan. Tidak ada "hubungi kami untuk penawaran" — Anda tahu persis apa yang Anda bayar.</p>
      </div>
      <div class="ak-card ak-why-card">
        <div class="ak-card-icon ak-card-icon-green">🎯</div>
        <h3 class="ak-heading-sm ak-mb-sm">Spesialis Vertikal</h3>
        <p style="color:var(--ak-abu-muda);font-size:0.9rem;">Kami fokus di industri travel, pelatihan, dan kesehatan — bukan generalis yang mengerjakan semuanya setengah-setengah.</p>
      </div>
    </div>
  </div>
</section>

<!-- PORTFOLIO HIGHLIGHT -->
<section class="ak-section ak-section-white">
  <div class="ak-container">
    <div class="ak-section-header">
      <h2 class="ak-heading ak-heading-md">Portfolio</h2>
      <p>Beberapa hasil karya kami untuk klien di Jambi dan sekitarnya.</p>
    </div>
    <div class="ak-grid-3">
      <a href="https://adptra01.framer.media/works" target="_blank" rel="noopener" class="ak-portfolio-card">
        <div class="ak-portfolio-img" style="background: linear-gradient(135deg, #E8F5E9, #C8E6C9);">🌴 Travel Agent Website</div>
        <div class="ak-portfolio-body">
          <span class="ak-portfolio-tag">Travel</span>
          <h4>Website Agen Travel</h4>
          <p>Website company profile dengan galeri destinasi, form booking, dan integrasi WhatsApp.</p>
        </div>
      </a>
      <a href="https://adptra01.framer.media/works" target="_blank" rel="noopener" class="ak-portfolio-card">
        <div class="ak-portfolio-img" style="background: linear-gradient(135deg, #FFF8E1, #FFECB3);">🛡️ Training Center Portal</div>
        <div class="ak-portfolio-body">
          <span class="ak-portfolio-tag">Pelatihan</span>
          <h4>Website Lembaga Pelatihan</h4>
          <p>Sistem informasi pelatihan dengan jadwal, pendaftaran online, dan manajemen peserta.</p>
        </div>
      </a>
      <a href="https://adptra01.framer.media/works" target="_blank" rel="noopener" class="ak-portfolio-card">
        <div class="ak-portfolio-img" style="background: linear-gradient(135deg, #E8EAF6, #C5CAE9);">🏥 Klinik Website</div>
        <div class="ak-portfolio-body">
          <span class="ak-portfolio-tag">Kesehatan</span>
          <h4>Website Klinik & Apotek</h4>
          <p>Website informasi layanan kesehatan dengan jadwal dokter, artikel kesehatan, dan lokasi.</p>
        </div>
      </a>
    </div>
    <div style="text-align:center;margin-top:36px;">
      <a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>" class="ak-btn ak-btn-primary">Lihat Semua Portfolio →</a>
    </div>
  </div>
</section>

<!-- QUICK SERVICES SUMMARY -->
<section class="ak-section ak-section-cream" id="services-summary">
  <div class="ak-container">
    <div class="ak-section-header">
      <h2 class="ak-heading ak-heading-md">Layanan Unggulan</h2>
    </div>
    <div class="ak-grid-4">
      <div class="ak-card" style="text-align:center;">
        <div class="ak-card-icon ak-card-icon-green" style="margin:0 auto 12px;">🌐</div>
        <h4 style="font-size:1rem;margin-bottom:4px;">Website UMKM</h4>
        <p style="font-size:0.85rem;color:var(--ak-abu-muda);">Mulai <strong>Rp 1.500.000</strong></p>
      </div>
      <div class="ak-card" style="text-align:center;">
        <div class="ak-card-icon ak-card-icon-green" style="margin:0 auto 12px;">⚙️</div>
        <h4 style="font-size:1rem;margin-bottom:4px;">Aplikasi Custom</h4>
        <p style="font-size:0.85rem;color:var(--ak-abu-muda);">Mulai <strong>Rp 8.000.000</strong></p>
      </div>
      <div class="ak-card" style="text-align:center;">
        <div class="ak-card-icon ak-card-icon-gold" style="margin:0 auto 12px;">💻</div>
        <h4 style="font-size:1rem;margin-bottom:4px;">Mentoring IT</h4>
        <p style="font-size:0.85rem;color:var(--ak-abu-muda);">Mulai <strong>Rp 150.000/sesi</strong></p>
      </div>
      <div class="ak-card" style="text-align:center;">
        <div class="ak-card-icon ak-card-icon-gold" style="margin:0 auto 12px;">🔧</div>
        <h4 style="font-size:1rem;margin-bottom:4px;">Maintenance</h4>
        <p style="font-size:0.85rem;color:var(--ak-abu-muda);">Mulai <strong>Rp 150.000/bln</strong></p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="ak-section ak-section-green">
  <div class="ak-container ak-cta">
    <h2 class="ak-heading ak-heading-md">Siap Punya Website Profesional?</h2>
    <p>Konsultasi gratis 15 menit — tanpa komitmen. Ceritakan kebutuhan Anda, kami berikan solusinya.</p>
    <a href="https://wa.me/<?php echo esc_attr( $wa_number ); ?>?text=<?php echo esc_attr( $wa_text ); ?>" class="ak-btn ak-btn-wa" target="_blank" rel="noopener" style="font-size:1.1rem;padding:16px 40px;">💬 Chat via WhatsApp Sekarang</a>
  </div>
</section>

<!-- FOOTER -->
<footer class="ak-footer">
  <div class="ak-container">
    <div class="ak-footer-grid">
      <div>
        <div class="ak-footer-brand">Akar<span>Solution</span></div>
        <p style="margin-top:8px;line-height:1.6;">Akar Digital untuk Bisnis &amp; Pendidikan di Jambi. Mitra terpercaya untuk website, aplikasi, dan pendampingan IT.</p>
      </div>
      <div>
        <h4>Layanan</h4>
        <a href="<?php echo esc_url( home_url( '/services' ) ); ?>">Website UMKM</a>
        <a href="<?php echo esc_url( home_url( '/services' ) ); ?>">Aplikasi Custom</a>
        <a href="<?php echo esc_url( home_url( '/services' ) ); ?>#pendidikan">Mentoring IT</a>
        <a href="<?php echo esc_url( home_url( '/pricing' ) ); ?>">Harga</a>
      </div>
      <div>
        <h4>Perusahaan</h4>
        <a href="<?php echo esc_url( home_url( '/about' ) ); ?>">Tentang</a>
        <a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>">Portfolio</a>
        <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Blog</a>
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Kontak</a>
      </div>
      <div>
        <h4>Kontak</h4>
        <p style="margin-bottom:6px;">📞 <a href="https://wa.me/<?php echo esc_attr( $wa_number ); ?>" target="_blank" rel="noopener">0859-5157-2182</a></p>
        <p style="margin-bottom:6px;">📍 Jambi, Indonesia</p>
        <p>🕐 Senin-Jumat, 09:00-17:00 WIB</p>
      </div>
    </div>
    <div class="ak-footer-bottom">
      &copy; <?php echo esc_html( date( 'Y' ) ); ?> Akar Solution. All rights reserved. &nbsp;|&nbsp; <a href="<?php echo esc_url( home_url( '/privacy-policy-2' ) ); ?>">Privacy Policy</a>
    </div>
  </div>
</footer>

<!-- Floating WhatsApp -->
<div class="ak-wa-float">
  <a href="https://wa.me/<?php echo esc_attr( $wa_number ); ?>?text=<?php echo esc_attr( $wa_text ); ?>" target="_blank" rel="noopener" title="Chat via WhatsApp">💬</a>
</div>

</div>

<?php
get_footer();
