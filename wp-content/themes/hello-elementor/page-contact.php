<?php
/**
 * Template Name: Kontak
 * Akar Solution — Contact page (Swiss-Minimal)
 */
get_header();
get_template_part( 'template-parts/ak-chrome-head' );
?>

<!-- HERO -->
<section class="ak-hero">
  <div>
    <span class="ak-hero-tag">Kontak</span>
    <div class="ak-echo-stack ak-reveal-slide" data-reveal>
      <span class="ak-echo-layer cd">Kontak</span>
      <span class="ak-echo-layer cd">Kontak</span>
      <span class="ak-echo-layer cd">Kontak</span>
      <span class="ak-echo-layer cd">Kontak</span>
      <span class="ak-echo-layer cd">Kontak</span>
    </div>
    <p class="ak-hero-sub ak-reveal-slide" data-reveal>Kami fast response — biasanya dalam 1–2 jam di jam kerja. Pilih cara favorit Anda.</p>
  </div>
</section>

<!-- CONTACT GRID -->
<section class="ak-section-tight">
  <div class="ak-container">
    <div class="ak-divider"></div>
    <div class="ak-contact-grid">
      <!-- LEFT: info -->
      <div class="ak-reveal-slide" data-reveal>
        <h2 class="cd" style="font-size:clamp(1.8rem,3vw,2.4rem);margin-bottom:32px;">Hubungi <em style="color:var(--muted);">kami</em></h2>

        <div class="ak-info-row">
          <div class="ak-info-ic">💬</div>
          <div>
            <h4>WhatsApp</h4>
            <a href="https://wa.me/6285951572182" target="_blank" rel="noopener">0859-5157-2182</a>
            <p style="font-size:0.85rem;margin-top:4px;color:var(--muted);">Respons tercepat — klik untuk chat langsung</p>
          </div>
        </div>

        <div class="ak-info-row">
          <div class="ak-info-ic">📧</div>
          <div>
            <h4>Email</h4>
            <a href="mailto:halo@akarsolution.id">halo@akarsolution.id</a>
            <p style="font-size:0.85rem;margin-top:4px;color:var(--muted);">Untuk inquiry detail atau proposal</p>
          </div>
        </div>

        <div class="ak-info-row">
          <div class="ak-info-ic">📍</div>
          <div>
            <h4>Lokasi</h4>
            <p>Jambi, Indonesia</p>
            <p style="font-size:0.85rem;margin-top:4px;color:var(--muted);">Bisa ketemu langsung by appointment</p>
          </div>
        </div>

        <div class="ak-info-row">
          <div class="ak-info-ic">🕐</div>
          <div>
            <h4>Jam Kerja</h4>
            <p>Senin – Jumat, 09:00 – 17:00 WIB</p>
            <p style="font-size:0.85rem;margin-top:4px;color:var(--muted);">Sabtu by appointment</p>
          </div>
        </div>

        <div class="ak-info-row">
          <div class="ak-info-ic">📷</div>
          <div>
            <h4>Instagram</h4>
            <a href="https://instagram.com/akarsolution" target="_blank" rel="noopener">@akarsolution</a>
            <p style="font-size:0.85rem;margin-top:4px;color:var(--muted);">Untuk update &amp; portfolio</p>
          </div>
        </div>
      </div>

      <!-- RIGHT: form -->
      <div class="ak-reveal-slide" data-reveal>
        <h2 class="cd" style="font-size:clamp(1.8rem,3vw,2.4rem);margin-bottom:32px;">Kirim <em style="color:var(--muted);">pesan</em></h2>
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
        <p style="font-size:0.8rem;color:var(--muted-dark);margin-top:16px;text-align:center;font-weight:400;">Form ini akan mengarahkan Anda ke WhatsApp dengan pesan yang sudah terisi otomatis.</p>
      </div>
    </div>
  </div>
</section>

<!-- BIG CTA -->
<section class="ak-cta ak-reveal-slide" data-reveal style="padding:80px 48px 120px;">
  <h2 class="cd" style="margin-bottom:16px;">Atau langsung chat sekarang.</h2>
  <p style="margin-bottom:32px;color:var(--muted-dark);">Tidak perlu formal — sapa saja, kami balas sopan.</p>
  <a href="https://wa.me/6285951572182?text=Halo%20Akar%20Solution%2C%20saya%20tertarik%20dengan%20layanan%20Anda." class="ak-btn" target="_blank" rel="noopener" style="font-size:1rem;padding:18px 56px;">💬 Chat via WhatsApp</a>
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
