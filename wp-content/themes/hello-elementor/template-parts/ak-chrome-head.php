<?php
/**
 * Akar Solution — Shared design system
 * CSS + Navigation. Include at the top of every page template.
 * Pair with template-parts/ak-chrome-foot.php at the bottom.
 *
 * Design principles:
 *   - Typography: Clash Display (display) + Satoshi (body) — no stretching.
 *   - Contrast: body text uses #404040 (WCAG AA on #f2f2f2), muted uses #6B7280.
 *   - Hierarchy: 3 levels (display, subhead, body) with proper line-height.
 *   - Spacing: consistent section rhythm (140px / 100px / 80px) with clear function.
 *   - CTAs: solid filled primary for maximum contrast, outline for secondary.
 *   - Hit areas: minimum 44×44px on all interactive elements.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) exit;
?>
<link href="https://api.fontshare.com/v2/css?f[]=clash-display@400,500,600,700&f[]=satoshi@400,500,700&display=swap" rel="stylesheet">
<style>
:root {
  --bg: #f2f2f2;
  --bg-2: #ffffff;
  --text: #111111;
  --text-body: #2a2a2a;     /* body copy — high contrast on #f2f2f2 */
  --text-muted: #525252;    /* meta + secondary descriptions */
  --text-soft: #6b7280;     /* captions, helper text */
  --line: rgba(17,17,17,0.08);
  --line-strong: rgba(17,17,17,0.14);
  --dark: #111111;
  --dark-2: #1a1a1a;
  --ease: cubic-bezier(0.77, 0, 0.175, 1);
}
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
html { scroll-behavior: smooth; }
body {
  background: var(--bg);
  color: var(--text-body);
  font-family: 'Satoshi', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
  font-weight: 500;
  font-size: 16px;
  line-height: 1.7;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  overflow-x: hidden;
}
@media (min-width: 768px) { body { font-size: 17px; } }
a { text-decoration: none; color: inherit; }
img { max-width: 100%; display: block; }

/* ── CLASH DISPLAY (display utility, no font stretching) ── */
/* Use at its natural anatomy. Word-spacing ensures titles with
   multi-word phrases like "Akar Solution" read clearly without
   characters touching. Tighter negative letter-spacing keeps the
   editorial feel; positive word-spacing prevents the "AkarSolution"
   mash-up look. */
.cd {
  font-family: 'Clash Display', sans-serif;
  font-weight: 700;
  letter-spacing: -0.03em;
  line-height: 0.95;
  word-spacing: 0.08em;
}
.cd-m {
  font-family: 'Clash Display', sans-serif;
  font-weight: 600;
  letter-spacing: -0.02em;
  line-height: 1.15;
  word-spacing: 0.06em;
}
.cd-i {
  font-family: 'Clash Display', sans-serif;
  font-weight: 700;
  font-style: italic;
  letter-spacing: -0.03em;
}
.muted { color: var(--text-muted); font-weight: 400; }
.muted-soft { color: var(--text-soft); font-weight: 400; }

/* ── NAVIGATION ── */
.ak-nav {
  position: fixed; top: 0; left: 0; right: 0; height: 80px;
  background: rgba(242,242,242,0.92);
  backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px);
  display: flex; align-items: center; justify-content: space-between;
  padding: 0 48px; z-index: 100;
  transition: transform 400ms var(--ease);
  border-bottom: 1px solid var(--line);
}
.ak-nav.hidden { transform: translateY(-100%); }
.ak-nav-logo {
  font-family: 'Clash Display', sans-serif;
  font-weight: 700; font-size: 1.3rem;
  letter-spacing: -0.03em; word-spacing: 0.08em;
}
.ak-nav-logo em { font-style: normal; color: var(--text-soft); font-weight: 600; }
.ak-nav-links { display: flex; align-items: center; gap: 32px; list-style: none; }
.ak-nav-links a {
  font-size: 14px; text-transform: uppercase; letter-spacing: 0.08em;
  transition: color 200ms; padding: 8px 0;
}
.ak-nav-links a:hover { color: var(--text-soft); }
.ak-nav-cta {
  display: inline-flex; align-items: center;
  padding: 12px 24px;
  background: var(--dark); color: #fff;
  border-radius: 9999px;
  font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em;
  transition: background 250ms;
  min-height: 44px;
}
.ak-nav-cta:hover { background: var(--dark-2); }

/* ── HERO ── */
.ak-hero { min-height: 80vh; display: flex; align-items: center; padding: 140px 48px 100px; }
.ak-hero-grid { display: grid; grid-template-columns: 1.2fr 1fr; gap: 80px; align-items: center; width: 100%; max-width: 1400px; margin: 0 auto; }
.ak-hero-tag { display: inline-block; font-size: 0.7rem; text-transform: uppercase; letter-spacing: 0.18em; color: var(--text-soft); margin-bottom: 24px; font-weight: 700; }
.ak-hero-tag::before { content: ''; display: inline-block; width: 24px; height: 1px; background: var(--text-soft); vertical-align: middle; margin-right: 12px; }
.ak-hero h1 {
  font-family: 'Clash Display', sans-serif;
  font-weight: 700; font-size: clamp(2.6rem, 5.5vw, 4.8rem);
  line-height: 1.02; letter-spacing: -0.04em;
  word-spacing: 0.05em;
  color: var(--text);
  margin-bottom: 28px;
}
.ak-hero h1 em { font-style: italic; color: var(--text-soft); font-weight: 600; }
.ak-hero-sub { font-size: 1.1rem; line-height: 1.7; color: var(--text-muted); max-width: 520px; margin-bottom: 40px; font-weight: 400; }
.ak-hero-ctas { display: flex; gap: 14px; flex-wrap: wrap; }
.ak-hero-visual {
  position: relative;
  aspect-ratio: 4 / 5;
  background: linear-gradient(135deg, #e8e8e8 0%, #d4d4d4 100%);
  border-radius: 8px;
  overflow: hidden;
}
.ak-hero-visual::before {
  content: '';
  position: absolute; inset: 0;
  background: radial-gradient(circle at 30% 20%, rgba(255,255,255,0.4), transparent 50%);
}

/* Hero echo-stack (used on inner pages) */
.ak-echo-stack { position: relative; display: inline-block; }
.ak-echo-layer { position: absolute; top: 0; left: 0; pointer-events: none; white-space: nowrap; font-size: clamp(3rem, 8vw, 130px); }
.ak-echo-layer:nth-child(1) { position: relative; color: var(--text); z-index: 5; }
.ak-echo-layer:nth-child(2) { color: #bfbfbf; transform: translate(-0.03em, -0.03em); z-index: 4; }
.ak-echo-layer:nth-child(3) { color: #c9c9c9; transform: translate(-0.06em, -0.06em); z-index: 3; }
.ak-echo-layer:nth-child(4) { color: #d1d1d1; transform: translate(-0.10em, -0.10em); z-index: 2; }
.ak-echo-layer:nth-child(5) { color: #d9d9d9; transform: translate(-0.14em, -0.14em); z-index: 1; }

/* ── SECTION RHYTHM ── */
/* Generous vertical breathing room. Each section has a clear function. */
.ak-section { padding: 140px 48px; }
.ak-section-tight { padding: 100px 48px; }
.ak-section-light { background: var(--bg-2); }
.ak-section-dark { background: var(--dark); color: #f6f6f6; }
.ak-container { max-width: 1400px; margin: 0 auto; }
.ak-container-narrow { max-width: 900px; margin: 0 auto; }

/* ── DIVIDER ── */
.ak-divider { width: 1px; height: 60px; background: rgba(17,17,17,0.1); margin: 0 auto 48px; }

/* ── SECTION HEADER (eyebrow + h2 + sub) ── */
.ak-section-header { text-align: center; max-width: 760px; margin: 0 auto 80px; }
.ak-section-eyebrow { display: inline-block; font-size: 0.72rem; text-transform: uppercase; letter-spacing: 0.18em; color: var(--text-soft); margin-bottom: 18px; font-weight: 700; }
.ak-section-eyebrow::before { content: '— '; }
.ak-section-header h2 {
  font-family: 'Clash Display', sans-serif;
  font-weight: 700;
  font-size: clamp(2rem, 3.5vw, 3rem);
  line-height: 1.1; letter-spacing: -0.03em; word-spacing: 0.06em;
  color: var(--text);
  margin-bottom: 20px;
}
.ak-section-header h2 em { font-style: italic; color: var(--text-soft); font-weight: 600; }
.ak-section-header p { color: var(--text-muted); font-size: 1.05rem; line-height: 1.7; font-weight: 400; max-width: 620px; margin: 0 auto; }

/* ── NARRATIVE (3-col text grid) ── */
.ak-narrative { text-align: center; max-width: 1200px; margin: 0 auto; }
.ak-narrative blockquote {
  font-family: 'Clash Display', sans-serif;
  font-weight: 700;
  font-size: clamp(1.8rem, 3.2vw, 2.8rem);
  line-height: 1.2; letter-spacing: -0.03em; word-spacing: 0.04em;
  max-width: 880px; margin: 0 auto 72px;
  color: var(--text);
}
.ak-narrative blockquote em { color: var(--text-soft); font-style: italic; font-weight: 600; }
.ak-narrative-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 56px; text-align: left; }
.ak-narrative-grid h3 {
  font-family: 'Clash Display', sans-serif;
  font-weight: 700; font-size: 1.2rem; letter-spacing: -0.02em;
  margin-bottom: 12px; color: var(--text);
}
.ak-narrative-grid p { color: var(--text-muted); font-size: 0.98rem; font-weight: 400; line-height: 1.7; }

/* ── SHOWCASE GRID (12-col, large blocks) ── */
.ak-showcase { display: grid; grid-template-columns: repeat(12, 1fr); gap: 24px; }
.ak-showcase-item { overflow: hidden; border-radius: 8px; }
.ak-showcase-item.span-8 { grid-column: span 8; }
.ak-showcase-item.span-7 { grid-column: span 7; }
.ak-showcase-item.span-5 { grid-column: span 5; }
.ak-showcase-item.span-4 { grid-column: span 4; }
.ak-showcase-item.span-6 { grid-column: span 6; }
.ak-showcase-item.pill { border-radius: 9999px; }
.ak-showcase-item.circle { border-radius: 50%; aspect-ratio: 1; }
.ak-showcase-bg {
  width: 100%; height: 100%; min-height: 320px;
  display: flex; align-items: center; justify-content: center;
  font-size: 1.2rem; font-weight: 700;
  color: rgba(17,17,17,0.18);
  transition: filter 700ms var(--ease), transform 700ms var(--ease), color 700ms var(--ease);
}
.ak-showcase-item:hover .ak-showcase-bg { filter: none; transform: scale(1.04); color: rgba(17,17,17,0.28); }
.ak-showcase-item.pill .ak-showcase-bg { min-height: 480px; }

/* ── SERVICE CARDS (3-col, grid lines, premium feel) ── */
.ak-services-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1px;
  background: var(--line);
  border: 1px solid var(--line);
}
.ak-service-card {
  background: var(--bg);
  padding: 56px 40px 48px;
  transition: background 400ms;
  position: relative;
  display: flex; flex-direction: column;
}
.ak-service-card:hover { background: #fff; }
.ak-service-icon {
  width: 80px; height: 80px;
  background: var(--bg-2);
  border: 1px solid var(--line-strong);
  display: flex; align-items: center; justify-content: center;
  font-size: 2rem;
  margin-bottom: 32px;
  border-radius: 8px;
  transition: transform 400ms var(--ease), background 400ms;
}
.ak-service-card:hover .ak-service-icon { transform: rotate(-6deg) scale(1.05); background: var(--bg); }
.ak-service-card h3 {
  font-family: 'Clash Display', sans-serif;
  font-weight: 700; font-size: 1.4rem;
  letter-spacing: -0.02em; line-height: 1.15;
  margin-bottom: 12px; color: var(--text);
}
.ak-service-card p { color: var(--text-muted); font-size: 0.98rem; font-weight: 400; line-height: 1.7; margin-bottom: 24px; }
.ak-service-meta { display: flex; flex-direction: column; gap: 8px; margin-bottom: 24px; padding-top: 20px; border-top: 1px solid var(--line); }
.ak-service-meta-row { display: flex; justify-content: space-between; font-size: 0.82rem; color: var(--text-soft); font-weight: 500; }
.ak-service-meta-row strong { color: var(--text); font-weight: 700; }
.ak-service-price { font-family: 'Clash Display', sans-serif; font-weight: 700; font-size: 1.05rem; color: var(--text); margin-top: 4px; }
.ak-service-cta { display: inline-flex; align-items: center; gap: 8px; font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.08em; color: var(--text); transition: gap 300ms, color 300ms; margin-top: auto; }
.ak-service-cta:hover { gap: 16px; color: var(--dark-2); }
.ak-service-cta::after { content: '→'; font-size: 1.1rem; }

/* ── TRUST SIGNALS (4 quick stats) ── */
.ak-trust { display: grid; grid-template-columns: repeat(4, 1fr); gap: 0; padding: 60px 0; border-top: 1px solid var(--line); border-bottom: 1px solid var(--line); }
.ak-trust-item { padding: 8px 32px; border-right: 1px solid var(--line); }
.ak-trust-item:last-child { border-right: none; }
.ak-trust-item .num { font-family: 'Clash Display', sans-serif; font-weight: 700; font-size: clamp(2rem, 3vw, 2.8rem); letter-spacing: -0.03em; line-height: 1; color: var(--text); margin-bottom: 8px; }
.ak-trust-item .lbl { font-size: 0.85rem; color: var(--text-soft); font-weight: 500; line-height: 1.4; }

/* ── PROCESS (4 steps, horizontal) ── */
.ak-process { display: grid; grid-template-columns: repeat(4, 1fr); gap: 32px; counter-reset: step; }
.ak-process-step { position: relative; padding: 32px 0 0; }
.ak-process-step::before {
  counter-increment: step;
  content: counter(step, decimal-leading-zero);
  font-family: 'Clash Display', sans-serif;
  font-weight: 700;
  font-size: 0.95rem; color: var(--text-soft);
  display: block; margin-bottom: 16px;
  letter-spacing: 0.05em;
}
.ak-process-step::after {
  content: ''; display: block; width: 32px; height: 1px; background: var(--text); margin: 20px 0;
}
.ak-process-step h3 { font-family: 'Clash Display', sans-serif; font-weight: 700; font-size: 1.15rem; letter-spacing: -0.02em; margin-bottom: 10px; color: var(--text); }
.ak-process-step p { color: var(--text-muted); font-size: 0.92rem; line-height: 1.65; font-weight: 400; }

/* ── PRICING CARDS (3-col, with featured) ── */
.ak-pricing-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
.ak-pcard {
  background: var(--bg);
  padding: 48px 36px 40px;
  text-align: left;
  transition: all 400ms var(--ease);
  position: relative;
  border: 1px solid transparent;
  border-radius: 8px;
  display: flex; flex-direction: column;
}
.ak-pcard:hover { background: #fff; transform: translateY(-4px); border-color: var(--line); }
.ak-pcard.feat { background: #fff; border-color: var(--text); box-shadow: 0 12px 40px rgba(0,0,0,0.08); }
.ak-pbadge { display: inline-block; font-size: 0.65rem; text-transform: uppercase; letter-spacing: 0.12em; font-weight: 700; background: var(--dark); color: #fff; padding: 5px 14px; border-radius: 9999px; margin-bottom: 24px; align-self: flex-start; }
.ak-pname { font-family: 'Clash Display', sans-serif; font-weight: 700; font-size: 1.1rem; letter-spacing: -0.02em; margin-bottom: 8px; color: var(--text); }
.ak-pprice {
  font-family: 'Clash Display', sans-serif;
  font-weight: 700;
  font-size: 2.6rem; line-height: 1; letter-spacing: -0.04em;
  color: var(--text); margin-bottom: 8px;
}
.ak-pprice small { font-size: 0.85rem; font-weight: 500; color: var(--text-soft); font-family: 'Satoshi', sans-serif; letter-spacing: 0; }
.ak-pdesc { font-size: 0.9rem; color: var(--text-muted); margin-bottom: 28px; line-height: 1.6; }
.ak-plist { list-style: none; margin-bottom: 32px; flex: 1; }
.ak-plist li { padding: 10px 0; font-size: 0.9rem; color: var(--text-body); border-bottom: 1px solid var(--line); display: flex; gap: 10px; align-items: flex-start; }
.ak-plist li::before { content: '✓'; color: var(--text); font-weight: 700; flex-shrink: 0; }

/* ── BUTTONS ── */
/* Primary = solid filled (high contrast, primary action)
   Outline = border only (secondary action) */
.ak-btn {
  display: inline-flex; align-items: center; justify-content: center; gap: 8px;
  font-family: 'Satoshi', sans-serif;
  font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 0.08em;
  padding: 16px 32px;
  border-radius: 9999px;
  transition: all 250ms;
  cursor: pointer; line-height: 1;
  min-height: 52px; min-width: 44px;
  border: 1.5px solid var(--dark);
  background: var(--dark); color: #fff;
}
.ak-btn:hover { background: var(--dark-2); border-color: var(--dark-2); transform: translateY(-1px); }
.ak-btn-outline {
  background: transparent; color: var(--text);
}
.ak-btn-outline:hover { background: var(--text); color: #fff; }
.ak-btn-ghost {
  background: transparent; color: var(--text-soft);
  border-color: var(--line-strong);
}
.ak-btn-ghost:hover { background: var(--bg-2); color: var(--text); border-color: var(--text); }
.ak-btn-block { display: flex; width: 100%; }
.ak-btn-lg { padding: 18px 40px; font-size: 0.95rem; min-height: 58px; }

/* ── CTA ── */
.ak-cta { text-align: center; padding: 120px 48px; }
.ak-cta h2 {
  font-family: 'Clash Display', sans-serif;
  font-weight: 700; font-size: clamp(2.2rem, 4vw, 3.4rem);
  line-height: 1.1; letter-spacing: -0.03em;
  margin-bottom: 20px; color: var(--text);
}
.ak-cta p { color: var(--text-muted); font-size: 1.1rem; font-weight: 400; line-height: 1.7; margin-bottom: 40px; max-width: 580px; margin-left: auto; margin-right: auto; }
.ak-cta .ak-ctas { display: flex; gap: 14px; justify-content: center; flex-wrap: wrap; }

/* ── FOOTER ── */
.ak-footer { background: var(--dark); color: rgba(246,246,246,0.65); padding: 100px 48px 72px; }
.ak-footer-grid { display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; gap: 64px; max-width: 1400px; margin: 0 auto 80px; }
.ak-footer h4 { color: #f6f6f6; font-size: 0.78rem; text-transform: uppercase; letter-spacing: 0.12em; margin-bottom: 24px; font-family: 'Satoshi', sans-serif; font-weight: 700; }
.ak-footer a {
  color: rgba(246,246,246,0.55);
  font-size: 0.95rem; font-weight: 400;
  display: flex; align-items: center;
  padding: 10px 0;
  min-height: 44px;
  transition: color 200ms;
}
.ak-footer a:hover { color: #f6f6f6; }
.ak-footer-brand { font-family: 'Clash Display', sans-serif; font-weight: 700; font-size: 1.4rem; color: #f6f6f6; margin-bottom: 14px; letter-spacing: -0.03em; word-spacing: 0.08em; }
.ak-footer-brand em { font-style: normal; color: rgba(246,246,246,0.4); font-weight: 600; }
.ak-footer p { font-size: 0.95rem; font-weight: 400; line-height: 1.7; color: rgba(246,246,246,0.55); }
.ak-footer-bottom { border-top: 1px solid rgba(255,255,255,0.06); padding-top: 32px; text-align: center; font-size: 0.82rem; font-weight: 400; max-width: 1400px; margin: 0 auto; color: rgba(246,246,246,0.4); }

/* ── FLOATING CTA ── */
.ak-float { position: fixed; bottom: 32px; right: 32px; z-index: 99; }
.ak-float a {
  display: flex; align-items: center; justify-content: center;
  width: 60px; height: 60px;
  border-radius: 50%;
  background: var(--dark); color: #fff;
  font-size: 1.4rem;
  box-shadow: 0 6px 28px rgba(0,0,0,0.18);
  transition: transform 300ms var(--ease), background 300ms;
}
.ak-float a:hover { transform: scale(1.08); background: var(--dark-2); }

/* ── CONTACT ── */
.ak-contact-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: start; }
.ak-info-row { display: flex; gap: 18px; align-items: flex-start; margin-bottom: 32px; }
.ak-info-ic {
  width: 52px; height: 52px;
  border-radius: 50%;
  background: var(--bg-2);
  border: 1px solid var(--line-strong);
  display: flex; align-items: center; justify-content: center;
  font-size: 1.2rem; flex-shrink: 0;
}
.ak-info-row h4 { font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; margin-bottom: 6px; color: var(--text); }
.ak-info-row p, .ak-info-row a { font-size: 0.98rem; font-weight: 400; color: var(--text-muted); display: block; line-height: 1.6; }
.ak-info-row a:hover { color: var(--text); }
.ak-form-group { margin-bottom: 22px; }
.ak-form-group label { display: block; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 10px; color: var(--text); }
.ak-form-group input, .ak-form-group textarea, .ak-form-group select {
  width: 100%;
  padding: 18px 20px;
  border: 1px solid var(--line-strong);
  background: var(--bg-2);
  font-family: 'Satoshi', sans-serif; font-size: 0.98rem; font-weight: 500;
  transition: all 250ms; border-radius: 6px; color: var(--text);
}
.ak-form-group input:focus, .ak-form-group textarea:focus, .ak-form-group select:focus { outline: none; border-color: var(--text); background: #fff; }
.ak-form-group textarea { min-height: 150px; resize: vertical; }

/* ── BLOG ── */
.ak-blog-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px; }
.ak-blog-card { display: block; transition: transform 400ms var(--ease); }
.ak-blog-card:hover { transform: translateY(-6px); }
.ak-blog-thumb { width: 100%; aspect-ratio: 16 / 10; background: linear-gradient(135deg, #e8e8e8, #d4d4d4); border-radius: 8px; margin-bottom: 28px; display: flex; align-items: center; justify-content: center; color: rgba(17,17,17,0.18); font-weight: 700; font-size: 0.9rem; overflow: hidden; }
.ak-blog-thumb.t1 { background: linear-gradient(135deg, #e0e0e0, #c8c8c8); }
.ak-blog-thumb.t2 { background: linear-gradient(135deg, #d8d8d8, #c0c0c0); }
.ak-blog-thumb.t3 { background: linear-gradient(135deg, #ececec, #d4d4d4); }
.ak-blog-meta { display: flex; gap: 12px; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--text-soft); margin-bottom: 14px; font-weight: 700; }
.ak-blog-title { font-family: 'Clash Display', sans-serif; font-weight: 700; font-size: 1.45rem; letter-spacing: -0.02em; line-height: 1.2; word-spacing: 0.04em; margin-bottom: 14px; color: var(--text); }
.ak-blog-excerpt { color: var(--text-muted); font-size: 0.95rem; font-weight: 400; line-height: 1.7; margin-bottom: 18px; }
.ak-blog-read { display: inline-flex; align-items: center; gap: 8px; font-weight: 700; font-size: 0.82rem; text-transform: uppercase; letter-spacing: 0.08em; color: var(--text); }
.ak-blog-read::after { content: '→'; font-size: 1.1rem; transition: transform 300ms; }
.ak-blog-card:hover .ak-blog-read::after { transform: translateX(4px); }

/* ── BLOG POST DETAIL ── */
.ak-post-hero { padding: 180px 48px 60px; text-align: center; max-width: 920px; margin: 0 auto; }
.ak-post-meta { display: flex; gap: 16px; justify-content: center; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.12em; color: var(--text-soft); margin-bottom: 24px; font-weight: 700; }
.ak-post-meta span:not(:last-child)::after { content: '·'; margin-left: 16px; }
.ak-post-title { font-family: 'Clash Display', sans-serif; font-weight: 700; font-size: clamp(2.4rem, 5vw, 4rem); line-height: 1.05; letter-spacing: -0.03em; word-spacing: 0.05em; margin-bottom: 28px; color: var(--text); }
.ak-post-excerpt { font-size: 1.2rem; color: var(--text-muted); max-width: 720px; margin: 0 auto; font-weight: 400; line-height: 1.7; }
.ak-post-body { max-width: 760px; margin: 0 auto; padding: 80px 48px 100px; font-size: 1.1rem; line-height: 1.85; color: var(--text-body); }
.ak-post-body h2 { font-family: 'Clash Display', sans-serif; font-weight: 700; font-size: 2rem; letter-spacing: -0.02em; margin: 56px 0 24px; color: var(--text); }
.ak-post-body h3 { font-family: 'Clash Display', sans-serif; font-weight: 700; font-size: 1.5rem; letter-spacing: -0.02em; margin: 40px 0 18px; color: var(--text); }
.ak-post-body p { margin-bottom: 24px; }
.ak-post-body ul, .ak-post-body ol { margin: 0 0 24px 28px; }
.ak-post-body li { margin-bottom: 10px; }
.ak-post-body blockquote { border-left: 3px solid var(--text); padding: 12px 28px; margin: 36px 0; font-size: 1.3rem; font-style: italic; color: var(--text-muted); line-height: 1.6; }
.ak-post-body a { color: var(--text); border-bottom: 1px solid var(--text-soft); transition: border-color 200ms; }
.ak-post-body a:hover { border-color: var(--text); }
.ak-post-body code { background: var(--bg-2); padding: 2px 8px; border-radius: 3px; font-size: 0.9em; }
.ak-post-back { display: inline-flex; align-items: center; gap: 8px; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.08em; font-weight: 700; margin-bottom: 40px; min-height: 44px; }
.ak-post-back:hover { color: var(--text-soft); }

/* ── REVEAL ANIMATION ── */
.ak-reveal { clip-path: inset(0 0 100% 0); opacity: 0; transition: clip-path 900ms var(--ease), opacity 900ms var(--ease); }
.ak-reveal.visible { clip-path: inset(0 0 0 0); opacity: 1; }
.ak-reveal-slide { opacity: 0; transform: translateY(40px); transition: opacity 800ms var(--ease), transform 800ms var(--ease); }
.ak-reveal-slide.visible { opacity: 1; transform: translateY(0); }

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .ak-nav-links { gap: 20px; }
  .ak-nav-links a { font-size: 13px; }
  .ak-hero-grid { grid-template-columns: 1fr; gap: 48px; }
  .ak-hero-visual { max-width: 480px; margin: 0 auto; }
  .ak-showcase { grid-template-columns: repeat(6, 1fr); }
  .ak-showcase-item.span-8, .ak-showcase-item.span-7 { grid-column: span 6; }
  .ak-showcase-item.span-5, .ak-showcase-item.span-4, .ak-showcase-item.span-6 { grid-column: span 3; }
  .ak-services-grid, .ak-pricing-grid, .ak-blog-grid { grid-template-columns: 1fr; }
  .ak-narrative-grid, .ak-process { grid-template-columns: 1fr 1fr; gap: 40px; }
  .ak-trust { grid-template-columns: 1fr 1fr; }
  .ak-trust-item { border-right: none; border-bottom: 1px solid var(--line); padding: 24px; }
  .ak-footer-grid { grid-template-columns: 1fr 1fr; gap: 48px; }
  .ak-contact-grid { grid-template-columns: 1fr; gap: 60px; }
}
@media (max-width: 768px) {
  .ak-nav { padding: 0 20px; }
  .ak-nav-links { display: none; }
  .ak-nav-cta { padding: 10px 18px; font-size: 12px; }
  .ak-section, .ak-section-tight { padding: 80px 24px; }
  .ak-cta { padding: 80px 24px; }
  .ak-hero { padding: 120px 24px 80px; min-height: auto; }
  .ak-hero h1 { font-size: clamp(2.2rem, 8vw, 3rem); }
  .ak-echo-layer { font-size: clamp(2rem, 11vw, 50px) !important; }
  .ak-showcase { grid-template-columns: 1fr; }
  .ak-showcase-item.span-8, .ak-showcase-item.span-7, .ak-showcase-item.span-5, .ak-showcase-item.span-4, .ak-showcase-item.span-6 { grid-column: span 1; }
  .ak-showcase-item.pill { border-radius: 16px; }
  .ak-showcase-item.pill .ak-showcase-bg { min-height: 280px; }
  .ak-services-grid { grid-template-columns: 1fr; }
  .ak-pricing-grid { grid-template-columns: 1fr; }
  .ak-narrative-grid, .ak-process { grid-template-columns: 1fr; gap: 32px; }
  .ak-trust { grid-template-columns: 1fr; }
  .ak-footer-grid { grid-template-columns: 1fr; gap: 40px; }
  .ak-footer { padding: 72px 24px 56px; }
  .ak-blog-grid { grid-template-columns: 1fr; gap: 32px; }
  .ak-post-hero { padding: 120px 24px 40px; }
  .ak-post-body { padding: 48px 24px 80px; }
  .ak-btn-lg { padding: 16px 28px; font-size: 0.88rem; }
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
    <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="ak-nav-cta">Konsultasi</a></li>
  </ul>
</nav>
