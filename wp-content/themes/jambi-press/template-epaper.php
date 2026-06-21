<?php
/**
 * Template Name: E-Paper / Arsip Digital
 * Halaman untuk menampilkan edisi e-paper.
 * @package Jambi_Press
 */
get_header();
while ( have_posts() ) : the_post();
?>
<main style="width:100%; max-width:100%; padding:48px 0 80px;">
  <div class="jp-container" style="max-width:900px;">
    <h1 class="jp-display-2" style="margin:0 0 16px;"><?php the_title(); ?></h1>
    <p style="color:var(--jp-grey-500); font-size:1rem; margin:0 0 40px;">Edisi digital Jambi Press. Baca koran dalam format PDF di perangkat Anda.</p>
    <div style="display:grid; gap:24px; grid-template-columns:1fr;">
      <style>
        @media (min-width: 768px) { .jp-epaper-grid { grid-template-columns: repeat(2, 1fr) !important; } }
        @media (min-width: 1024px) { .jp-epaper-grid { grid-template-columns: repeat(3, 1fr) !important; } }
      </style>
      <div class="jp-epaper-grid" style="display:grid; gap:20px;">
        <?php for ( $i = 1; $i <= 6; $i++ ) : $t = time() - ( $i * 86400 ); ?>
        <a href="#" style="display:block; border:1px solid var(--jp-grey-200); border-radius:10px; overflow:hidden; transition:all .2s ease; background:var(--jp-white);">
          <div style="aspect-ratio:3/4; background:var(--jp-grey-100); display:flex; align-items:center; justify-content:center; padding:20px;">
            <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="var(--jp-grey-300)" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
          </div>
          <div style="padding:16px;">
            <h3 style="font-size:.875rem; font-weight:700; margin:0 0 4px; color:var(--jp-grey-900);">Edisi <?php echo date( 'j F Y', $t ); ?></h3>
            <span style="font-size:.75rem; color:var(--jp-grey-500);"><?php echo date( 'l', $t ); ?></span>
          </div>
        </a>
        <?php endfor; ?>
      </div>
    </div>
    <div class="jp-prose" style="margin-top:48px;"><?php the_content(); ?></div>
  </div>
</main>
<?php endwhile; get_footer();