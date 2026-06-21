<?php
/**
 * 404 Template
 * @package Jambi_Press
 */
get_header();
?>
<main style="overflow-x:hidden; width:100%; max-width:100%; padding:80px 0 120px;">
  <div class="jp-container" style="max-width:600px; text-align:center;">
    <p style="font-size: clamp(5rem, 12vw, 9rem); font-weight: 900; color: var(--jp-grey-100); margin: 0; line-height: .9; font-feature-settings: 'tnum';">404</p>
    <h1 class="jp-display-3" style="margin: 8px 0 16px;">Halaman Tidak Ditemukan</h1>
    <p style="color: var(--jp-grey-500); margin: 0 0 32px;">Artikel atau halaman yang Anda cari mungkin sudah dipindahkan atau tidak tersedia.</p>
    <div style="display:flex; flex-wrap:wrap; gap:12px; justify-content:center;">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="jp-btn jp-btn-primary">Kembali ke Beranda</a>
      <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" style="display:flex; gap:8px;">
        <input type="search" name="s" placeholder="Cari..." style="padding:12px 16px; border:1px solid var(--jp-grey-300); border-radius:6px; font-size:.875rem; width:180px; outline:0;">
        <button type="submit" style="color:var(--jp-red); font-weight:700; font-size:.875rem;">Cari</button>
      </form>
    </div>
  </div>
</main>
<?php get_footer(); ?>
