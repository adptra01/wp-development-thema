<?php
/**
 * Akar Solution — Footer + Floating CTA + Reveal script
 * Include at the bottom of every page template, after content.
 */
if ( ! defined( 'ABSPATH' ) ) exit;
?>

<footer class="ak-footer">
  <div class="ak-footer-grid">
    <div>
      <div class="ak-footer-brand">Akar<em>Solution</em></div>
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
      <a>🕐 Sen—Jum, 09:00–17:00</a>
    </div>
  </div>
  <div class="ak-footer-bottom">
    &copy; <?php echo esc_html( date('Y') ); ?> Akar Solution. All rights reserved.
  </div>
</footer>

<div class="ak-float">
  <a href="https://wa.me/6285951572182?text=Halo%20Akar%20Solution%2C%20saya%20tertarik%20dengan%20layanan%20Anda." target="_blank" rel="noopener" title="Chat via WhatsApp">💬</a>
</div>

<script>
(function(){
  // Sticky nav: hide on scroll down, show on scroll up
  const nav = document.getElementById('akNav');
  if (nav) {
    let lastY = 0;
    window.addEventListener('scroll', () => {
      const y = window.scrollY;
      if (y > lastY && y > 120) nav.classList.add('hidden');
      else nav.classList.remove('hidden');
      lastY = y;
    }, { passive: true });
  }
  // Scroll reveal
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); observer.unobserve(e.target); } });
  }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
  document.querySelectorAll('[data-reveal]').forEach(el => observer.observe(el));
})();
</script>
