<?php
/**
 * Template Name: Microsite / Liputan Khusus
 * For special coverage, campaign, or sponsored microsite pages.
 * @package Jambi_Press
 */

get_header();
while ( have_posts() ) : the_post();
$hero_bg = get_post_meta( get_the_ID(), 'jp_microsite_bg', true ) ?: 'var(--jp-secondary)';
$hero_accent = get_post_meta( get_the_ID(), 'jp_microsite_accent', true ) ?: 'var(--jp-accent)';
?>
<main id="main-content" style="width:100%; max-width:100%;">

<section style="background:<?php echo esc_attr( $hero_bg ); ?>; color:var(--jp-white); padding:80px 0 60px; position:relative;">
  <div style="position:absolute; inset:0; opacity:.08; background-image: radial-gradient(circle at 25% 50%, rgba(255,255,255,.3) 0%, transparent 50%), radial-gradient(circle at 75% 50%, rgba(255,255,255,.15) 0%, transparent 50%);"></div>
  <div class="jp-container" style="position:relative; z-index:2; text-align:center; max-width:800px;">
    <span style="font-size:.6875rem; font-weight:800; letter-spacing:.14em; text-transform:uppercase; color:<?php echo esc_attr( $hero_accent ); ?>;">Liputan Khusus</span>
    <h1 class="jp-display-1" style="margin:16px 0 20px;"><?php the_title(); ?></h1>
    <p style="font-size:1.0625rem; line-height:1.65; opacity:.8; margin:0;"><?php echo esc_html( get_the_excerpt() ?: 'Liputan mendalam dari Jambi Press.' ); ?></p>
  </div>
</section>

<section style="padding:64px 0;">
  <div class="jp-container" style="max-width:800px;">
    <div class="jp-prose"><?php the_content(); ?></div>
  </div>
</section>

</main>
<?php endwhile;
get_footer();