<?php
/**
 * Template Name: Kontak Redaksi
 * Halaman informasi kontak redaksi Jambi Press.
 * @package Jambi_Press
 */
get_header();
while ( have_posts() ) : the_post();
?>
<main style="width:100%; max-width:100%; padding:48px 0 80px;">
  <div class="jp-container" style="max-width:900px;">
    <div style="display:grid; gap:48px;">
      <style>
        @media (min-width: 768px) { .jp-kontak-grid { grid-template-columns: 1fr 1fr !important; } }
      </style>
      <div class="jp-kontak-grid" style="display:grid; gap:40px;">
        <div>
          <h1 class="jp-display-2" style="margin:0 0 24px;"><?php the_title(); ?></h1>
          <p style="color:var(--jp-grey-600); font-size:1rem; line-height:1.7; margin:0 0 32px;">Kami senang mendengar dari Anda. Silakan hubungi redaksi Jambi Press melalui informasi di samping atau isi form kontak.</p>
          <div style="display:flex; flex-direction:column; gap:20px;">
            <div style="display:flex; align-items:flex-start; gap:14px;">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--jp-red)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0; margin-top:2px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              <div><strong style="font-size:.875rem; color:var(--jp-grey-900);">Alamat Redaksi</strong><p style="font-size:.875rem; color:var(--jp-grey-600); margin:4px 0 0;">Jl. Jambi No. 123, Kota Jambi 36122</p></div>
            </div>
            <div style="display:flex; align-items:flex-start; gap:14px;">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--jp-red)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0; margin-top:2px;"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              <div><strong style="font-size:.875rem; color:var(--jp-grey-900);">Telepon</strong><p style="font-size:.875rem; color:var(--jp-grey-600); margin:4px 0 0;">(0741) 123-4567</p></div>
            </div>
            <div style="display:flex; align-items:flex-start; gap:14px;">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--jp-red)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0; margin-top:2px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
              <div><strong style="font-size:.875rem; color:var(--jp-grey-900);">Email</strong><p style="font-size:.875rem; color:var(--jp-grey-600); margin:4px 0 0;">redaksi@jambipress.id</p></div>
            </div>
          </div>
        </div>
        <form method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" style="background:var(--jp-grey-50); padding:32px; border-radius:12px; border:1px solid var(--jp-grey-200);">
          <h3 style="font-size:1.125rem; font-weight:800; margin:0 0 20px; color:var(--jp-grey-900);">Kirim Pesan</h3>
          <div style="display:flex; flex-direction:column; gap:16px;">
            <input type="text" name="nama" required placeholder="Nama Anda" style="width:100%; padding:12px 16px; border:1px solid var(--jp-grey-200); border-radius:6px; font-size:.875rem; outline:0; background:var(--jp-white);">
            <input type="email" name="email" required placeholder="Email Anda" style="width:100%; padding:12px 16px; border:1px solid var(--jp-grey-200); border-radius:6px; font-size:.875rem; outline:0; background:var(--jp-white);">
            <select name="topik" style="width:100%; padding:12px 16px; border:1px solid var(--jp-grey-200); border-radius:6px; font-size:.875rem; outline:0; background:var(--jp-white);">
              <option value="">Pilih Topik</option>
              <option>Info Iklan</option>
              <option>Pengaduan</option>
              <option>Kirim Berita</option>
              <option>Kerja Sama</option>
              <option>Lainnya</option>
            </select>
            <textarea name="pesan" required rows="5" placeholder="Pesan Anda..." style="width:100%; padding:12px 16px; border:1px solid var(--jp-grey-200); border-radius:6px; font-size:.875rem; outline:0; resize:vertical; background:var(--jp-white);"></textarea>
            <button type="submit" class="jp-btn jp-btn-primary" style="width:100%;">Kirim Pesan</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Ad Leaderboard -->
  <div class="jp-container" style="max-width:900px; padding-top:48px;">
    <div class="jp-ad-container" style="width:100%; min-height:90px;">
      <span class="jp-ad-label">Iklan</span>
      <script>
        atOptions = {
          'key' : 'a38fb2cdad5a14e10708902b31e90271',
          'format' : 'iframe',
          'height' : 90,
          'width' : 728,
          'params' : {}
        };
      </script>
      <script src="https://www.highperformanceformat.com/a38fb2cdad5a14e10708902b31e90271/invoke.js"></script>
    </div>
  </div>

  <!-- CTA Iklan -->
  <div class="jp-container" style="max-width:900px; padding-top:24px;">
    <a href="/hubungi-redaksi" style="display:flex; align-items:center; gap:16px; padding:20px 24px; background:var(--jp-white); border:2px dashed var(--jp-grey-300); border-radius:12px; text-decoration:none;">
      <div style="flex-shrink:0; width:48px; height:48px; border-radius:9999px; background:var(--jp-red); display:flex; align-items:center; justify-content:center;">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
      </div>
      <div style="flex:1;">
        <p style="font-size:.9375rem; font-weight:700; color:var(--jp-grey-900); margin:0 0 2px;">Pasang Iklan di Jambi Press</p>
        <span style="font-size:.75rem; color:var(--jp-grey-500);">Jangkau ribuan pembaca setiap hari &rsaquo;</span>
      </div>
      <span style="font-size:.75rem; font-weight:700; color:var(--jp-red); white-space:nowrap;">Hubungi</span>
    </a>
  </div>
</main>
<?php endwhile; get_footer();