<?php
/**
 * Akar Solution — Shared design system
 * CSS + Navigation. Include at the top of every page template.
 * Pair with template-parts/ak-chrome-foot.php at the bottom.
 */
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<link href="https://api.fontshare.com/v2/css?f[]=clash-display@400,500,600,700&f[]=satoshi@400,500,700&display=swap" rel="stylesheet">
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
body { background: var(--bg); color: var(--text); font-family: 'Satoshi', -apple-system, sans-serif; font-weight: 500; line-height: 1.6; -webkit-font-smoothing: antialiased; overflow-x: hidden; }
a { text-decoration: none; color: inherit; }
img { max-width: 100%; display: block; }

/* ── CLASH DISPLAY UTILITY ── */
/* Clash Display is a variable font with a width axis (75–125).
   'wdth' 105 widens characters slightly for editorial presence — no distortion.
   For the hero echo-stack we additionally apply transform: scaleY(1.05) to lift
   the cap-height/ascender without touching horizontal width. */
.cd { font-family: 'Clash Display', sans-serif; font-weight: 700; font-variation-settings: 'wdth' 105; letter-spacing: -0.05em; line-height: 0.9; }
.cd-m { font-family: 'Clash Display', sans-serif; font-weight: 600; font-variation-settings: 'wdth' 105; letter-spacing: -0.04em; line-height: 1.1; }
.cd-i { font-family: 'Clash Display', sans-serif; font-weight: 700; font-style: italic; font-variation-settings: 'wdth' 105; letter-spacing: -0.05em; }
.muted { color: var(--muted-dark); font-weight: 400; }

/* ── NAVIGATION ── */
.ak-nav { position: fixed; top: 0; left: 0; right: 0; height: 80px; background: rgba(242,242,242,0.9); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); display: flex; align-items: center; justify-content: space-between; padding: 0 48px; z-index: 100; transition: transform 400ms var(--ease); }
.ak-nav.hidden { transform: translateY(-100%); }
.ak-nav-logo { font-family: 'Clash Display', sans-serif; font-weight: 700; font-size: 1.3rem; letter-spacing: -0.03em; }
.ak-nav-logo em { font-style: normal; color: var(--muted); }
.ak-nav-links { display: flex; align-items: center; gap: 40px; list-style: none; }
.ak-nav-links a { font-size: 14px; text-transform: uppercase; letter-spacing: 0.08em; transition: color 200ms; }
.ak-nav-links a:hover { color: var(--muted); }
.ak-nav-cta { padding: 10px 28px; border: 1px solid var(--dark); border-radius: 9999px; font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; transition: all 300ms; }
.ak-nav-cta:hover { background: var(--dark); color: var(--bg); }

/* ── HERO ── */
.ak-hero { min-height: 70vh; display: flex; align-items: center; justify-content: center; padding: 140px 40px 80px; text-align: center; }
.ak-echo-stack { position: relative; display: inline-block; transform: scaleY(1.05); transform-origin: center; }
.ak-echo-layer { position: absolute; top: 0; left: 0; pointer-events: none; white-space: nowrap; font-size: clamp(3.5rem, 9vw, 150px); }
.ak-echo-layer:nth-child(1) { position: relative; color: var(--text); z-index: 5; }
.ak-echo-layer:nth-child(2) { color: #bfbfbf; transform: translate(-0.03em, -0.03em); z-index: 4; }
.ak-echo-layer:nth-child(3) { color: #c9c9c9; transform: translate(-0.06em, -0.06em); z-index: 3; }
.ak-echo-layer:nth-child(4) { color: #d1d1d1; transform: translate(-0.10em, -0.10em); z-index: 2; }
.ak-echo-layer:nth-child(5) { color: #d9d9d9; transform: translate(-0.14em, -0.14em); z-index: 1; }
.ak-hero-tag { display: inline-block; font-size: 0.7rem; text-transform: uppercase; letter-spacing: 0.15em; color: var(--muted); margin-bottom: 24px; font-weight: 700; }
.ak-hero-sub { margin-top: 32px; font-size: 1.1rem; color: var(--muted-dark); max-width: 560px; margin-left: auto; margin-right: auto; line-height: 1.7; font-weight: 400; }

/* ── SECTION COMMON ── */
.ak-section { padding: 120px 48px; }
.ak-section-tight { padding: 80px 48px; }
.ak-section-light { background: #fff; }
.ak-container { max-width: 1400px; margin: 0 auto; }

/* ── DIVIDER ── */
.ak-divider { width: 1px; height: 60px; background: rgba(30,30,30,0.1); margin: 0 auto 40px; }

/* ── NARRATIVE (3-col text grid) ── */
.ak-narrative { text-align: center; max-width: 1100px; margin: 0 auto; }
.ak-narrative blockquote { font-size: clamp(2rem, 4vw, 3.5rem); max-width: 800px; margin: 0 auto 60px; }
.ak-narrative blockquote i { color: var(--muted); }
.ak-narrative-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 48px; text-align: left; }
.ak-narrative-grid h3 { font-size: 1.3rem; margin-bottom: 12px; }
.ak-narrative-grid p { color: var(--muted-dark); font-size: 0.95rem; font-weight: 400; line-height: 1.7; }

/* ── SHOWCASE GRID (12-col) ── */
.ak-showcase { display: grid; grid-template-columns: repeat(12, 1fr); gap: 24px; }
.ak-showcase-item { overflow: hidden; border-radius: 6px; }
.ak-showcase-item.span-8 { grid-column: span 8; }
.ak-showcase-item.span-7 { grid-column: span 7; }
.ak-showcase-item.span-5 { grid-column: span 5; }
.ak-showcase-item.span-4 { grid-column: span 4; }
.ak-showcase-item.pill { border-radius: 9999px; }
.ak-showcase-item.circle { border-radius: 50%; aspect-ratio: 1; }
.ak-showcase-bg { width: 100%; height: 100%; min-height: 320px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; font-weight: 700; color: rgba(17,17,17,0.18); transition: filter 700ms var(--ease), transform 700ms var(--ease); }
.ak-showcase-item:hover .ak-showcase-bg { filter: none; transform: scale(1.05); color: rgba(17,17,17,0.28); }
.ak-showcase-item.pill .ak-showcase-bg { min-height: 480px; }

/* ── SERVICE CARDS (3-col with grid lines) ── */
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

/* ── PRICING CARDS (centered, with feature) ── */
.ak-pricing-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
.ak-pcard { background: var(--bg); padding: 44px 32px; text-align: center; transition: all 400ms var(--ease); position: relative; border: 1px solid transparent; }
.ak-pcard:hover { background: #fff; transform: translateY(-4px); }
.ak-pcard.feat { background: #fff; box-shadow: 0 4px 32px rgba(0,0,0,0.06); border-color: rgba(30,30,30,0.08); z-index: 1; }
.ak-pbadge { display: inline-block; font-size: 0.65rem; text-transform: uppercase; letter-spacing: 0.1em; font-weight: 700; background: var(--dark); color: var(--bg); padding: 4px 16px; border-radius: 20px; margin-bottom: 16px; }
.ak-pname { font-size: 1.1rem; margin-bottom: 6px; }
.ak-pprice { font-size: 2.8rem; font-weight: 700; font-family: 'Clash Display', sans-serif; letter-spacing: -0.03em; margin-bottom: 6px; line-height: 1; }
.ak-pprice small { font-size: 0.85rem; font-weight: 500; color: var(--muted-dark); font-family: 'Satoshi', sans-serif; }
.ak-pdesc { font-size: 0.85rem; font-weight: 400; color: var(--muted-dark); margin-bottom: 28px; line-height: 1.5; }
.ak-plist { list-style: none; text-align: left; margin-bottom: 28px; }
.ak-plist li { padding: 10px 0; font-size: 0.88rem; font-weight: 400; border-bottom: 1px solid rgba(30,30,30,0.06); }
.ak-plist li::before { content: '+ '; color: var(--text); font-weight: 700; }

/* ── BUTTONS ── */
.ak-btn { display: inline-flex; align-items: center; justify-content: center; gap: 8px; font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.08em; padding: 14px 32px; border: 1px solid var(--dark); border-radius: 9999px; transition: all 300ms; cursor: pointer; font-family: inherit; line-height: 1; }
.ak-btn:hover { background: var(--dark); color: var(--bg); }
.ak-btn-ghost { border-color: rgba(30,30,30,0.15); color: var(--muted-dark); }
.ak-btn-ghost:hover { background: var(--bg); color: var(--text); border-color: var(--dark); }
.ak-btn-block { display: flex; width: 100%; }

/* ── CTA ── */
.ak-cta { text-align: center; padding: 100px 48px; }
.ak-cta h2 { font-size: clamp(2.5rem, 5vw, 4rem); margin-bottom: 16px; }
.ak-cta p { color: var(--muted-dark); font-size: 1.05rem; font-weight: 400; margin-bottom: 36px; }

/* ── FOOTER ── */
.ak-footer { background: var(--dark); color: rgba(246,246,246,0.6); padding: 80px 48px 40px; }
.ak-footer-grid { display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; gap: 48px; max-width: 1400px; margin: 0 auto 60px; }
.ak-footer h4 { color: #f6f6f6; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 20px; font-family: 'Satoshi', sans-serif; font-weight: 700; }
.ak-footer a { color: rgba(246,246,246,0.5); font-size: 0.9rem; font-weight: 400; display: block; padding: 3px 0; transition: color 200ms; }
.ak-footer a:hover { color: #f6f6f6; }
.ak-footer-brand { font-family: 'Clash Display', sans-serif; font-weight: 700; font-size: 1.3rem; color: #f6f6f6; margin-bottom: 10px; letter-spacing: -0.03em; }
.ak-footer-brand em { font-style: normal; color: rgba(246,246,246,0.4); }
.ak-footer-bottom { border-top: 1px solid rgba(255,255,255,0.05); padding-top: 24px; text-align: center; font-size: 0.8rem; font-weight: 400; max-width: 1400px; margin: 0 auto; }

/* ── FLOATING CTA ── */
.ak-float { position: fixed; bottom: 28px; right: 28px; z-index: 99; }
.ak-float a { display: flex; align-items: center; justify-content: center; width: 56px; height: 56px; border-radius: 50%; background: var(--dark); color: var(--bg); font-size: 1.3rem; box-shadow: 0 4px 24px rgba(0,0,0,0.12); transition: transform 300ms var(--ease); }
.ak-float a:hover { transform: scale(1.1); }

/* ── CONTACT ── */
.ak-contact-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: start; }
.ak-info-row { display: flex; gap: 16px; align-items: flex-start; margin-bottom: 28px; }
.ak-info-ic { width: 48px; height: 48px; border-radius: 50%; border: 1px solid rgba(30,30,30,0.12); display: flex; align-items: center; justify-content: center; font-size: 1.1rem; flex-shrink: 0; }
.ak-info-row h4 { font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 4px; }
.ak-info-row p, .ak-info-row a { font-size: 0.95rem; font-weight: 400; color: var(--muted-dark); display: block; }
.ak-info-row a:hover { color: var(--text); }
.ak-form-group { margin-bottom: 20px; }
.ak-form-group label { display: block; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 8px; color: var(--muted-dark); }
.ak-form-group input, .ak-form-group textarea, .ak-form-group select { width: 100%; padding: 16px 20px; border: 1px solid rgba(30,30,30,0.12); background: var(--bg); font-family: 'Satoshi', sans-serif; font-size: 0.95rem; font-weight: 500; transition: all 300ms; border-radius: 4px; color: var(--text); }
.ak-form-group input:focus, .ak-form-group textarea:focus, .ak-form-group select:focus { outline: none; border-color: var(--text); background: #fff; }
.ak-form-group textarea { min-height: 140px; resize: vertical; }

/* ── BLOG ── */
.ak-blog-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 32px; }
.ak-blog-card { display: block; transition: transform 400ms var(--ease); }
.ak-blog-card:hover { transform: translateY(-6px); }
.ak-blog-thumb { width: 100%; aspect-ratio: 16 / 10; background: linear-gradient(135deg, #e8e8e8, #d4d4d4); border-radius: 6px; margin-bottom: 24px; display: flex; align-items: center; justify-content: center; color: rgba(17,17,17,0.18); font-weight: 700; font-size: 0.9rem; overflow: hidden; }
.ak-blog-thumb.t1 { background: linear-gradient(135deg, #e0e0e0, #c8c8c8); }
.ak-blog-thumb.t2 { background: linear-gradient(135deg, #d8d8d8, #c0c0c0); }
.ak-blog-thumb.t3 { background: linear-gradient(135deg, #ececec, #d4d4d4); }
.ak-blog-meta { display: flex; gap: 12px; font-size: 0.7rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--muted-dark); margin-bottom: 12px; font-weight: 700; }
.ak-blog-title { font-size: 1.4rem; margin-bottom: 12px; line-height: 1.2; }
.ak-blog-excerpt { color: var(--muted-dark); font-size: 0.92rem; font-weight: 400; line-height: 1.7; margin-bottom: 16px; }
.ak-blog-read { display: inline-flex; align-items: center; gap: 8px; font-weight: 700; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.08em; }
.ak-blog-read::after { content: '→'; font-size: 1.05rem; transition: transform 300ms; }
.ak-blog-card:hover .ak-blog-read::after { transform: translateX(4px); }

/* ── BLOG POST DETAIL ── */
.ak-post-hero { padding: 160px 48px 60px; text-align: center; max-width: 900px; margin: 0 auto; }
.ak-post-meta { display: flex; gap: 16px; justify-content: center; font-size: 0.7rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--muted-dark); margin-bottom: 20px; font-weight: 700; }
.ak-post-title { font-size: clamp(2.5rem, 5vw, 4rem); margin-bottom: 24px; line-height: 1.05; }
.ak-post-excerpt { font-size: 1.15rem; color: var(--muted-dark); max-width: 680px; margin: 0 auto; font-weight: 400; line-height: 1.7; }
.ak-post-body { max-width: 720px; margin: 0 auto; padding: 60px 48px 100px; font-size: 1.05rem; line-height: 1.85; }
.ak-post-body h2 { font-size: 2rem; margin: 48px 0 20px; }
.ak-post-body h3 { font-size: 1.5rem; margin: 36px 0 16px; }
.ak-post-body p { margin-bottom: 20px; }
.ak-post-body ul, .ak-post-body ol { margin: 0 0 20px 24px; }
.ak-post-body li { margin-bottom: 8px; }
.ak-post-body blockquote { border-left: 3px solid var(--text); padding: 12px 24px; margin: 32px 0; font-size: 1.3rem; font-style: italic; color: var(--muted-dark); }
.ak-post-body a { color: var(--text); border-bottom: 1px solid var(--muted); transition: border-color 200ms; }
.ak-post-body a:hover { border-color: var(--text); }
.ak-post-body code { background: rgba(30,30,30,0.06); padding: 2px 8px; border-radius: 3px; font-size: 0.9em; }
.ak-post-back { display: inline-flex; align-items: center; gap: 8px; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.08em; font-weight: 700; margin-bottom: 40px; }
.ak-post-back:hover { color: var(--muted); }

/* ── REVEAL ANIMATION ── */
.ak-reveal { clip-path: inset(0 0 100% 0); opacity: 0; transition: clip-path 900ms var(--ease), opacity 900ms var(--ease); }
.ak-reveal.visible { clip-path: inset(0 0 0 0); opacity: 1; }
.ak-reveal-slide { opacity: 0; transform: translateY(40px); transition: opacity 800ms var(--ease), transform 800ms var(--ease); }
.ak-reveal-slide.visible { opacity: 1; transform: translateY(0); }

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .ak-nav-links { gap: 24px; }
  .ak-showcase { grid-template-columns: repeat(6, 1fr); }
  .ak-showcase-item.span-8, .ak-showcase-item.span-7 { grid-column: span 6; }
  .ak-showcase-item.span-5, .ak-showcase-item.span-4 { grid-column: span 3; }
  .ak-services-grid, .ak-pricing-grid, .ak-blog-grid { grid-template-columns: 1fr; }
  .ak-footer-grid { grid-template-columns: 1fr 1fr; }
  .ak-narrative-grid { grid-template-columns: 1fr; gap: 32px; }
  .ak-contact-grid { grid-template-columns: 1fr; gap: 60px; }
}
@media (max-width: 768px) {
  .ak-nav { padding: 0 24px; }
  .ak-nav-links { display: none; }
  .ak-section, .ak-section-tight { padding: 80px 24px; }
  .ak-hero { padding: 120px 24px 60px; min-height: 50vh; }
  .ak-echo-layer { font-size: clamp(2.5rem, 11vw, 60px) !important; }
  .ak-showcase { grid-template-columns: 1fr; }
  .ak-showcase-item.span-8, .ak-showcase-item.span-7, .ak-showcase-item.span-5, .ak-showcase-item.span-4 { grid-column: span 1; }
  .ak-showcase-item.pill { border-radius: 16px; }
  .ak-showcase-item.pill .ak-showcase-bg { min-height: 280px; }
  .ak-footer-grid { grid-template-columns: 1fr; }
  .ak-cta { padding: 60px 24px; }
  .ak-post-hero { padding: 120px 24px 40px; }
  .ak-post-body { padding: 40px 24px 80px; }
}
</style>

<nav class="ak-nav" id="akNav">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ak-nav-logo">Akar<em>Solution</em></a>
  <ul class="ak-nav-links">
    <li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>">Layanan</a></li>
    <li><a href="<?php echo esc_url( home_url( '/pricing' ) ); ?>">Harga</a></li>
    <li><a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>">Portfolio</a></li>
    <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>">Tentang</a></li>
    <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Blog</a></li>
    <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="ak-nav-cta">Kontak</a></li>
  </ul>
</nav>
