<?php
/**
 * Template Name: Kontak
 * Akar Solution — Contact page (Swiss-Minimal)
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
      <span class="ak-hero-tag">Kontak</span>
      <h1 class="ak-reveal-slide" data-reveal>
        Kami <em class="ak-underline" data-draw>fast response</em> — biasanya dalam 1–2 jam.
      </h1>
      <p class="ak-hero-sub ak-reveal-slide" data-reveal>Pilih cara favorit Anda — WhatsApp, email, atau ketemu langsung di Jambi. Kami dengarkan dulu, baru rekomendasikan.</p>
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

<!-- CONTACT GRID -->
<section class="ak-section-tight">
  <div class="ak-container">
    <div class="ak-contact-grid">
      <!-- LEFT: info -->
      <div class="ak-reveal-slide" data-reveal>
        <h2 class="cd" style="font-size:clamp(1.8rem,3vw,2.4rem);margin-bottom:32px;letter-spacing:-0.02em;">Hubungi <em style="color:var(--text-soft);">kami</em></h2>

        <div class="ak-info-row">
          <div class="ak-info-ic"><?php echo ak_icon('message'); ?></div>
          <div>
            <h4>WhatsApp</h4>
            <a href="https://wa.me/6285951572182" target="_blank" rel="noopener">0859-5157-2182</a>
            <p style="font-size:0.85rem;margin-top:4px;color:var(--text-muted);">Respons tercepat — klik untuk chat langsung</p>
          </div>
        </div>

        <div class="ak-info-row">
          <div class="ak-info-ic"><?php echo ak_icon('mail'); ?></div>
          <div>
            <h4>Email</h4>
            <a href="mailto:halo@akarsolution.id">halo@akarsolution.id</a>
            <p style="font-size:0.85rem;margin-top:4px;color:var(--text-muted);">Untuk inquiry detail atau proposal</p>
          </div>
        </div>

        <div class="ak-info-row">
          <div class="ak-info-ic"><?php echo ak_icon('pin'); ?></div>
          <div>
            <h4>Lokasi</h4>
            <p>Jambi, Indonesia</p>
            <p style="font-size:0.85rem;margin-top:4px;color:var(--text-muted);">Bisa ketemu langsung by appointment</p>
          </div>
        </div>

        <div class="ak-info-row">
          <div class="ak-info-ic"><?php echo ak_icon('clock'); ?></div>
          <div>
            <h4>Jam Kerja</h4>
            <p>Senin – Jumat, 09:00 – 17:00 WIB</p>
            <p style="font-size:0.85rem;margin-top:4px;color:var(--text-muted);">Sabtu by appointment</p>
          </div>
        </div>

        <div class="ak-info-row">
          <div class="ak-info-ic"><?php echo ak_icon('instagram'); ?></div>
          <div>
            <h4>Instagram</h4>
            <a href="https://instagram.com/akarsolution" target="_blank" rel="noopener">@akarsolution</a>
            <p style="font-size:0.85rem;margin-top:4px;color:var(--text-muted);">Untuk update &amp; portfolio</p>
          </div>
        </div>
      </div>

      <!-- RIGHT: form -->
      <div class="ak-reveal-slide" data-reveal>
        <h2 class="cd" style="font-size:clamp(1.8rem,3vw,2.4rem);margin-bottom:32px;letter-spacing:-0.02em;">Kirim <em style="color:var(--text-soft);">pesan</em></h2>
        <form id="akContactForm" onsubmit="return akSubmitForm(event)">
          <div class="ak-form-group">
            <label>Nama</label>
            <input type="text" name="name" required placeholder="Nama lengkap Anda">
          </div>
          <div class="ak-form-group">
            <label>Email / WhatsApp</label>
            <input type="text" name="contact" required placeholder="email@domain.com atau 08xxx">
          </div>
          <div class="ak-form-group">
            <label>Layanan yang Diminati</label>
            <select name="service">
              <option>Website UMKM</option>
              <option>Website Bisnis</option>
              <option>Aplikasi Custom</option>
              <option>Maintenance</option>
              <option>Mentoring Skripsi</option>
              <option>Konsultasi Proyek</option>
              <option>Code Review</option>
              <option>Lainnya</option>
            </select>
          </div>
          <div class="ak-form-group">
            <label>Pesan</label>
            <textarea name="message" required placeholder="Ceritakan kebutuhan Anda…"></textarea>
          </div>
          <button type="submit" class="ak-btn ak-btn-block">Kirim via WhatsApp</button>
        </form>
        <p style="font-size:0.8rem;color:var(--text-muted);margin-top:16px;text-align:center;font-weight:400;">Form ini akan mengarahkan Anda ke WhatsApp dengan pesan yang sudah terisi otomatis.</p>
      </div>
    </div>
  </div>
</section>

<!-- BIG CTA -->
<section class="ak-cta ak-reveal-slide" data-reveal>
  <h2 class="cd">Atau langsung chat sekarang.</h2>
  <p>Tidak perlu formal — sapa saja, kami balas sopan.</p>
  <div class="ak-ctas">
    <a href="https://wa.me/6285951572182?text=Halo%20Akar%20Solution%2C%20saya%20tertarik%20dengan%20layanan%20Anda." class="ak-btn ak-btn-lg" target="_blank" rel="noopener">💬 Chat via WhatsApp</a>
    <a href="tel:+6285951572182" class="ak-btn ak-btn-outline ak-btn-lg">📞 0859-5157-2182</a>
  </div>
</section>

<script>
function akSubmitForm(e) {
  e.preventDefault();
  var f = document.getElementById('akContactForm');
  var name = f.name.value.trim();
  var contact = f.contact.value.trim();
  var service = f.service.value;
  var message = f.message.value.trim();
  var text = 'Halo Akar Solution,%0A%0ANama: ' + encodeURIComponent(name) + '%0AKontak: ' + encodeURIComponent(contact) + '%0ALayanan: ' + encodeURIComponent(service) + '%0A%0APesan:%0A' + encodeURIComponent(message);
  window.open('https://wa.me/6285951572182?text=' + text, '_blank');
  return false;
}
</script>

<?php
get_template_part( 'template-parts/ak-chrome-foot' );
get_footer();
