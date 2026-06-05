<?php
/**
 * Front page template — Akar Solution
 * Swiss-Minimal Editorial Design System
 */
get_header();
?>
<link href="https://api.fontshare.com/v2/css?f[]=clash-display@700&f[]=satoshi@400,500,700&display=swap" rel="stylesheet">
<style>
:root {
  --bg: #f2f2f2;
  --text: #111111;
  --muted: #b6b5b5;
  --muted-dark: #838282;
  --dark: #1e1e1e;
  --ease: cubic-bezier(0.77, 0, 0.175, 1);
}
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
html { scroll-behavior: smooth; }
body { background: var(--bg); color: var(--text); font-family: 'Satoshi', -apple-system, sans-serif; font-weight: 500; line-height: 1.6; -webkit-font-smoothing: antialiased; }
a { text-decoration: none; color: inherit; }
img { max-width: 100%; display: block; }

/* ── CLASH DISPLAY UTILITY ── */
.cd { font-family: 'Clash Display', sans-serif; font-weight: 700; font-variation-settings: 'wdth' 105; letter-spacing: -0.05em; line-height: 0.9; }
.cd-italic { font-family: 'Clash Display', sans-serif; font-weight: 700; font-style: italic; letter-spacing: -0.05em; }

/* ── NAVIGATION ── */
.ak-nav { position: fixed; top: 0; left: 0; right: 0; height: 80px; background: rgba(242,242,242,0.9); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); display: flex; align-items: center; justify-content: space-between; padding: 0 48px; z-index: 100; transition: transform 400ms var(--ease); }
.ak-nav.hidden { transform: translateY(-100%); }
.ak-nav-logo { font-family: 'Clash Display', sans-serif; font-weight: 700; font-size: 1.3rem; letter-spacing: -0.03em; color: var(--text); }
.ak-nav-links { display: flex; align-items: center; gap: 40px; list-style: none; }
.ak-nav-links a { font-size: 14px; text-transform: uppercase; letter-spacing: 0.08em; color: var(--text); transition: color 120ms; }
.ak-nav-links a:hover { color: var(--muted); }
.ak-nav-cta { padding: 10px 28px; border: 1px solid var(--dark); border-radius: 9999px; font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; transition: all 300ms; }
.ak-nav-cta:hover { background: var(--dark); color: var(--bg); }

/* ── HERO ── */
.ak-hero { min-height: 85vh; display: flex; align-items: center; justify-content: center; padding: 120px 40px 80px; }
.ak-hero-inner { text-align: center; }
.ak-echo-stack { position: relative; display: inline-block; transform: scaleY(1.05); transform-origin: center; }
.ak-echo-layer { position: absolute; top: 0; left: 0; pointer-events: none; white-space: nowrap; font-size: clamp(4rem, 11vw, 180px); }
.ak-echo-layer:nth-child(1) { position: relative; color: var(--text); z-index: 5; }
.ak-echo-layer:nth-child(2) { color: #bfbfbf; transform: translate(-0.03em, -0.03em); z-index: 4; }
.ak-echo-layer:nth-child(3) { color: #c9c9c9; transform: translate(-0.06em, -0.06em); z-index: 3; }
.ak-echo-layer:nth-child(4) { color: #d1d1d1; transform: translate(-0.10em, -0.10em); z-index: 2; }
.ak-echo-layer:nth-child(5) { color: #d9d9d9; transform: translate(-0.14em, -0.14em); z-index: 1; }
.ak-hero-sub { margin-top: 32px; font-size: 1.1rem; color: var(--muted-dark); max-width: 520px; margin-left: auto; margin-right: auto; line-height: 1.7; }

/* ── SECTION COMMON ── */
.ak-section { padding: 120px 48px; }
.ak-section-tight { padding: 80px 48px; }
.ak-container { max-width: 1400px; margin: 0 auto; }

/* ── DIVIDER ── */
.ak-divider { width: 1px; height: 60px; background: rgba(30,30,30,0.1); margin: 0 auto 40px; }

/* ── NARRATIVE ── */
.ak-narrative { text-align: center; }
.ak-narrative blockquote { font-size: clamp(2rem, 4vw, 3.5rem); max-width: 800px; margin: 0 auto 60px; }
.ak-narrative blockquote i { color: var(--muted); }
.ak-narrative-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 32px; text-align: left; }
.ak-narrative-grid h3 { font-size: 1.3rem; margin-bottom: 12px; }
.ak-narrative-grid p { color: var(--muted-dark); font-size: 0.95rem; font-weight: 400; line-height: 1.7; }

/* ── SHOWCASE GRID ── */
.ak-showcase { display: grid; grid-template-columns: repeat(12, 1fr); gap: 24px; }
.ak-showcase-item { overflow: hidden; border-radius: 6px; }
.ak-showcase-item.span-8 { grid-column: span 8; }
.ak-showcase-item.span-7 { grid-column: span 7; }
.ak-showcase-item.span-5 { grid-column: span 5; }
.ak-showcase-item.span-4 { grid-column: span 4; }
.ak-showcase-item.pill { border-radius: 9999px; }
.ak-showcase-item.circle { border-radius: 50%; aspect-ratio: 1; }
.ak-showcase-item .ak-showcase-bg { width: 100%; height: 100%; min-height: 320px; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; font-weight: 700; color: rgba(17,17,17,0.15); transition: filter 700ms var(--ease), transform 700ms var(--ease); }
.ak-showcase-item:hover .ak-showcase-bg { filter: none; transform: scale(1.05); }
.ak-showcase-item.pill .ak-showcase-bg { min-height: 500px; }

/* ── SERVICE CARDS ── */
.ak-services-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1px; background: rgba(30,30,30,0.08); border: 1px solid rgba(30,30,30,0.08); }
.ak-service-card { background: var(--bg); padding: 48px 36px; transition: background 400ms; position: relative; }
.ak-service-card:hover { background: #fff; }
.ak-service-icon { width: 64px; height: 64px; border: 1px solid rgba(30,30,30,0.12); display: flex; align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 28px; transition: transform 400ms var(--ease); }
.ak-service-card:hover .ak-service-icon { transform: rotate(12deg); }
.ak-service-card h3 { font-size: 1.3rem; margin-bottom: 10px; }
.ak-service-card p { color: var(--muted-dark); font-size: 0.93rem; font-weight: 400; line-height: 1.7; margin-bottom: 24px; }
.ak-service-cta { display: inline-flex; align-items: center; gap: 8px; font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.08em; transition: gap 300ms; }
.ak-service-cta:hover { gap: 16px; }
.ak-service-cta::after { content: '→'; font-size: 1.1rem; }

/* ── CTA ── */
.ak-cta { text-align: center; padding: 100px 48px; }
.ak-cta h2 { font-size: clamp(2.5rem, 5vw, 4rem); margin-bottom: 16px; }
.ak-cta p { color: var(--muted-dark); font-size: 1.05rem; margin-bottom: 36px; }
.ak-cta .ak-btn { display: inline-block; padding: 16px 44px; border: 1px solid var(--dark); border-radius: 9999px; font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 0.08em; transition: all 300ms; }
.ak-cta .ak-btn:hover { background: var(--dark); color: var(--bg); }

/* ── FOOTER ── */
.ak-footer { background: var(--dark); color: rgba(246,246,246,0.6); padding: 80px 48px 40px; border-top: 1px solid rgba(255,255,255,0.05); }
.ak-footer-grid { display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; gap: 48px; max-width: 1400px; margin: 0 auto 60px; }
.ak-footer h4 { color: #f6f6f6; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 20px; }
.ak-footer a { color: rgba(246,246,246,0.5); font-size: 0.9rem; font-weight: 400; display: block; padding: 3px 0; transition: color 200ms; }
.ak-footer a:hover { color: #f6f6f6; }
.ak-footer-brand { font-family: 'Clash Display', sans-serif; font-weight: 700; font-size: 1.3rem; color: #f6f6f6; margin-bottom: 10px; letter-spacing: -0.03em; }
.ak-footer-bottom { border-top: 1px solid rgba(255,255,255,0.05); padding-top: 24px; text-align: center; font-size: 0.8rem; font-weight: 400; max-width: 1400px; margin: 0 auto; }

/* ── FLOATING CTA ── */
.ak-float { position: fixed; bottom: 28px; right: 28px; z-index: 99; }
.ak-float a { display: flex; align-items: center; justify-content: center; width: 56px; height: 56px; border-radius: 50%; background: var(--dark); color: var(--bg); font-size: 1.3rem; box-shadow: 0 4px 24px rgba(0,0,0,0.12); transition: transform 300ms var(--ease); }
.ak-float a:hover { transform: scale(1.1); }

/* ── REVEAL ANIMATION ── */
.reveal { clip-path: inset(0 0 100% 0); opacity: 0; }
.reveal.visible { clip-path: inset(0 0 0 0); opacity: 1; }
.reveal-slide { opacity: 0; transform: translateY(40px); }
.reveal-slide.visible { opacity: 1; transform: translateY(0); }

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .ak-nav-links { gap: 24px; }
  .ak-showcase { grid-template-columns: repeat(6, 1fr); }
  .ak-showcase-item.span-8, .ak-showcase-item.span-7 { grid-column: span 6; }
  .ak-showcase-item.span-5, .ak-showcase-item.span-4 { grid-column: span 3; }
  .ak-services-grid { grid-template-columns: 1fr; }
  .ak-footer-grid { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 768px) {
  .ak-nav { padding: 0 24px; }
  .ak-nav-links { display: none; }
  .ak-section { padding: 80px 24px; }
  .ak-section-tight { padding: 60px 24px; }
  .ak-hero { padding: 100px 24px 60px; min-height: 60vh; }
  .ak-echo-layer { font-size: clamp(2.5rem, 11vw, 60px) !important; }
  .ak-narrative-grid { grid-template-columns: 1fr; }
  .ak-showcase { grid-template-columns: 1fr; }
  .ak-showcase-item.span-8, .ak-showcase-item.span-7, .ak-showcase-item.span-5, .ak-showcase-item.span-4 { grid-column: span 1; }
  .ak-showcase-item.pill { border-radius: 16px; }
  .ak-showcase-item.pill .ak-showcase-bg { min-height: 300px; }
  .ak-services-grid { grid-template-columns: 1fr; }
  .ak-footer-grid { grid-template-columns: 1fr; }
  .ak-cta { padding: 60px 24px; }
}
</style>

<div class="ak-nav" id="akNav">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ak-nav-logo">Akar<em style="font-style:normal;color:var(--muted);">Solution</em></a>
  <ul class="ak-nav-links">
    <li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>">Layanan</a></li>
    <li><a href="<?php echo esc_url( home_url( '/pricing' ) ); ?>">Harga</a></li>
    <li><a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>">Portfolio</a></li>
    <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>">Tentang</a></li>
    <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="ak-nav-cta">Kontak</a></li>
  </ul>
</div>

<!-- HERO -->
<section class="ak-hero">
  <div class="ak-hero-inner">
    <div class="ak-echo-stack reveal-slide" data-reveal>
      <span class="ak-echo-layer cd" aria-hidden="true">Akar Solution</span>
      <span class="ak-echo-layer cd" aria-hidden="true">Akar Solution</span>
      <span class="ak-echo-layer cd" aria-hidden="true">Akar Solution</span>
      <span class="ak-echo-layer cd" aria-hidden="true">Akar Solution</span>
      <span class="ak-echo-layer cd">Akar Solution</span>
    </div>
    <p class="ak-hero-sub reveal-slide" data-reveal>Akar digital untuk bisnis &amp; pendidikan di Jambi. Website profesional, aplikasi custom, dan pendampingan IT — oleh mitra lokal yang mengerti kebutuhan Anda.</p>
  </div>
</section>

<!-- NARRATIVE -->
<section class="ak-section">
  <div class="ak-container">
    <div class="ak-divider"></div>
    <div class="ak-narrative">
      <blockquote class="cd reveal-slide" data-reveal>
        Kami percaya transformasi <i>digital</i> tidak hanya untuk kota besar — UMKM dan mahasiswa di Jambi punya hak yang <i>sama</i> untuk solusi teknologi berkualitas.
      </blockquote>
      <div class="ak-narrative-grid">
        <div class="reveal-slide" data-reveal>
          <h3 class="cd">Lokal, Personal</h3>
          <p>Kami di Jambi — bukan di Jakarta. Bisa ketemu langsung, konsultasi tatap muka, dan support yang dekat. Tidak ada chatbot, tidak ada call center — manusia sungguhan.</p>
        </div>
        <div class="reveal-slide" data-reveal>
          <h3 class="cd">Harga Transparan</h3>
          <p>Semua harga dipublikasikan. Tidak ada "hubungi kami untuk penawaran" — Anda tahu persis apa yang Anda bayar sebelum memutuskan.</p>
        </div>
        <div class="reveal-slide" data-reveal>
          <h3 class="cd">Spesialis Vertikal</h3>
          <p>Kami fokus di industri travel, pelatihan, dan kesehatan — bukan generalis yang mengerjakan semuanya setengah-setengah.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SHOWCASE GRID -->
<section class="ak-section-tight">
  <div class="ak-container">
    <div class="ak-showcase">
      <div class="ak-showcase-item span-8 reveal" data-reveal>
        <div class="ak-showcase-bg" style="background:linear-gradient(135deg,#e8e8e8,#dcdcdc);min-height:380px;">WEBSITE UMKM &mdash; Travel · Klinik · Training</div>
      </div>
      <div class="ak-showcase-item span-4 pill reveal" data-reveal>
        <div class="ak-showcase-bg" style="background:linear-gradient(180deg,#e0e0e0,#d0d0d0);">APLIKASI CUSTOM</div>
      </div>
      <div class="ak-showcase-item span-5 circle reveal" data-reveal>
        <div class="ak-showcase-bg" style="background:linear-gradient(135deg,#d8d8d8,#c8c8c8);">PORTFOLIO</div>
      </div>
      <div class="ak-showcase-item span-7 reveal" data-reveal>
        <div class="ak-showcase-bg" style="background:linear-gradient(135deg,#e4e4e4,#d4d4d4);min-height:320px;">MENTORING SKRIPSI IT &mdash; Arsitektur · Code Review · Deployment</div>
      </div>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section class="ak-section-tight">
  <div class="ak-container">
    <div class="ak-services-grid">
      <div class="ak-service-card reveal-slide" data-reveal>
        <div class="ak-service-icon">🌐</div>
        <h3 class="cd">Website UMKM</h3>
        <p>Company profile profesional 5-10 halaman, mobile responsive, SEO dasar. Mulai dari Rp 1.500.000.</p>
        <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="ak-service-cta">Selengkapnya</a>
      </div>
      <div class="ak-service-card reveal-slide" data-reveal>
        <div class="ak-service-icon">⚙️</div>
        <h3 class="cd">Aplikasi Custom</h3>
        <p>Web app sesuai kebutuhan bisnis: inventory, booking, CRM. Mulai dari Rp 8.000.000.</p>
        <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="ak-service-cta">Selengkapnya</a>
      </div>
      <div class="ak-service-card reveal-slide" data-reveal>
        <div class="ak-service-icon">💻</div>
        <h3 class="cd">Mentoring IT</h3>
        <p>Pendampingan skripsi: arsitektur sistem, code review, deployment. Mulai Rp 150.000/sesi.</p>
        <a href="<?php echo esc_url( home_url( '/services' ) ); ?>#pendidikan" class="ak-service-cta">Selengkapnya</a>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="ak-cta reveal-slide" data-reveal>
  <h2 class="cd">Siap memulai?</h2>
  <p>Konsultasi gratis 15 menit — tanpa komitmen.</p>
  <a href="https://wa.me/6285951572182?text=Halo%20Akar%20Solution%2C%20saya%20tertarik%20dengan%20layanan%20Anda." class="ak-btn" target="_blank" rel="noopener">Chat via WhatsApp</a>
</section>

<!-- FOOTER -->
<footer class="ak-footer">
  <div class="ak-footer-grid">
    <div>
      <div class="ak-footer-brand">Akar<em style="font-style:normal;color:rgba(246,246,246,0.4);">Solution</em></div>
      <p style="font-size:0.9rem;font-weight:400;line-height:1.7;">Mitra digital terpercaya di Jambi — website profesional, aplikasi custom, dan pendampingan IT untuk bisnis lokal dan mahasiswa.</p>
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
      <h4>Hubungi</h4>
      <a href="https://wa.me/6285951572182" target="_blank" rel="noopener">0859-5157-2182</a>
      <a>📍 Jambi, Indonesia</a>
      <a>🕐 Sen—Jum, 09:00-17:00</a>
    </div>
  </div>
  <div class="ak-footer-bottom">
    &copy; <?php echo esc_html( date('Y') ); ?> Akar Solution. All rights reserved.
  </div>
</footer>

<!-- FLOATING CTA -->
<div class="ak-float">
  <a href="https://wa.me/6285951572182?text=Halo%20Akar%20Solution%2C%20saya%20tertarik%20dengan%20layanan%20Anda." target="_blank" rel="noopener" title="Chat via WhatsApp">💬</a>
</div>

<script>
// Sticky nav
const nav = document.getElementById('akNav');
let lastY = 0;
window.addEventListener('scroll', () => {
  const y = window.scrollY;
  if (y > lastY && y > 120) nav.classList.add('hidden');
  else nav.classList.remove('hidden');
  lastY = y;
}, { passive: true });

// Scroll reveal
const observer = new IntersectionObserver((entries) => {
  entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); observer.unobserve(e.target); } });
}, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
document.querySelectorAll('[data-reveal]').forEach(el => observer.observe(el));
</script>

<?php get_footer(); ?>
