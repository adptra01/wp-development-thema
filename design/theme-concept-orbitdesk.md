# OrbitDesk — WordPress Theme Concept

> **Tema:** OrbitDesk  
> **Tipe:** SaaS / Customer Support Landing Page  
> **Target Audiens:** Perusahaan SaaS, startup customer support, helpdesk, dan agency yang ingin menampilkan produk messaging/support platform  
> **Inspirasi Desain:** https://orbitdesk-saas.aura.build/  
> **Gaya Visual:** Warm minimalism — earthy tones, typography-driven, serif headline accent, bento grid layouts, glassmorphism header

---

## 1. Ringkasan & Fitur Utama

OrbitDesk adalah tema WordPress premium untuk perusahaan SaaS customer support. Mengusung estetika editorial yang hangat dengan aksen terracotta, tipografi Instrument Serif + Inter, dan layout bento grid modern.

### Fitur Utama

| # | Fitur | Keterangan |
|---|-------|-----------|
| 1 | **Bento Grid Layout** | Dashboard preview, operations hub, metrics — semua dalam grid asimetris modern |
| 2 | **Marquee Testimonials** | Testimonial cards auto-scroll dengan CSS animation, pause on hover |
| 3 | **Scroll Reveal Animations** | IntersectionObserver-based staggered entrance, 760ms ease-out, blur + translate |
| 4 | **SaaS-specific Sections** | Hero with dashboard mock, social proof bar, workflow steps, feature grid, operations hub, testimonials, CTA |
| 5 | **Customizer-powered** | Semua teks, gambar, dan statistik bisa diubah via Customizer tanpa menyentuh kode |
| 6 | **Gutenberg Compatible** | theme.json v3 dengan custom palette, fluid typography, block styles |
| 7 | **Performance-first** | Zero jQuery dependency, vanilla JS, CSS custom properties, `no_found_rows` queries, deferred JS |
| 8 | **Newsletter Integration** | Footer form siap dihubungkan ke Gravity Forms / WPForms / Mailchimp shortcode |

---

## 2. Struktur Halaman

### 2.1 Halaman Utama (Front Page)

```
HEADER — sticky, backdrop-blur-xl, border-bottom tipis
├── Logo OrbitDesk
├── Primary Nav (Features, Workflow, Reviews)
└── CTA Button "Book intro"

HERO
├── Badge (small pill, bg-terracotta text-white)
├── H1 heading (Instrument Serif, 72px, light 300)
├── Subtitle paragraph
├── Dual CTA (Primary dark / Secondary outline)
└── 3-column grid dashboard preview cards
    ├── Card 1: Chat routing (dark bg, mock chat UI)
    ├── Card 2: Analytics (light bg, chart + stat donut)
    └── Card 3: Customer timeline (dark bg, profile card)

SOCIAL PROOF BAR
└── 5-column brand logo grid (Brightly, Northstar, Everlane Co, Solace, Aster Labs)

WORKFLOW
├── Section badge
├── Label + H2 heading
├── Marquee image track (CSS animation, 34s linear)
└── 3-column steps (Connect inboxes → Prioritize requests → Improve outcomes)

FEATURES
├── Section badge + H2 + subtitle
├── Dual CTA (Start free trial / See product)
└── 4-column feature cards
    ├── Faster Resolution
    ├── Team Alignment
    ├── Unified Threads
    └── Live Insights

OPERATIONS HUB
├── Section badge + H2
└── 2×2 Bento grid
    ├── Performance Dashboard (CSAT 96%, SLA 91%, Replies 18K + SVG chart)
    ├── Content Panel "Shared intelligence" + pill tags
    ├── Content Panel "Plan follow-ups" + pill tags
    └── Channel Overview (mail, chat, social DMs with metrics + trends)

REVIEWS
├── Section badge + H2 + CTA pair
├── Marquee testimonial cards (48s slow scroll)
└── Featured story split layout (image + large quote + avatar + CTA)

CTA
├── Badge "Contact sales"
├── H2 heading + description
└── Dual CTA (Start free trial / Book demo)

FOOTER (dark bg #191b22)
├── 4-column grid
│   ├── Brand column (logo + tagline)
│   ├── Company links
│   ├── Resources links
│   └── Newsletter form
└── Copyright bar (privacy, terms, cookies)
```

### 2.2 Inner Pages

| Template | File | Deskripsi |
|----------|------|-----------|
| Blog Index | `index.php` | 2-column grid post cards, pagination |
| Single Post | `single.php` | Narrow content width, featured image, tags, prev/next |
| Default Page | `page.php` | max-w-3xl centered content |
| Pricing | `page-pricing.php` | 3-tier pricing cards with monthly/yearly toggle |
| Features | `page-features.php` | Alternating content rows (image left / text right) |
| Contact | `page-contact.php` | Centered form layout |
| 404 | `404.php` | Minimal centered with back to home |
| Search | `search.php` | Results list, fallback empty state |

### 2.3 Custom Post Types

| CPT | Slug | Fields |
|-----|------|--------|
| Testimonial | `orbit_testimonial` | quote, author name, role, company, photo, bg_color |
| Team Member | `orbit_team` | name, role, photo, bio |
| Case Study | `orbit_case_study` | title, featured_quote, stats repeater, body |

### 2.4 Taxonomies

| Taxonomy | For | Type |
|----------|-----|------|
| Testimonial Category | `orbit_testimonial` | hierarchical |
| Feature Category | `orbit_case_study` | hierarchical |

### 2.5 Widget & Dynamic Areas

- Primary Menu (header nav)
- Footer Menu (footer links)
- Newsletter Widget (footer form area)

---

## 3. Desain Visual

### 3.1 Palet Warna

```css
/* Brand Core */
--color-bg:            #faf8f1;    /* cream — main background */
--color-bg-alt:        #fbfbf8;    /* warmer white — workflow/reviews */
--color-bg-sage:       #e9eadf;    /* sage green — features/CTA */
--color-bg-light:      #f7f7f3;    /* light gray — social proof */
--color-bg-warm:       #fbfaf4;    /* warm white — operations hub */
--color-bg-beige:      #ded8cc;    /* beige — bento inner card */

/* Text */
--color-text:          #17191f;    /* near-black — primary text */
--color-text-muted:    rgba(0,0,0,0.6);  /* secondary text */
--color-text-faint:    rgba(0,0,0,0.45); /* tertiary text */

/* Brand Accent */
--color-accent:        #9f6b4e;    /* terracotta — badges, highlights */
--color-accent-light:  #b98668;    /* light terracotta */

/* Dark Surface (cards, footer) */
--color-dark:          #191b22;    /* dark navy — footer/dark cards */
--color-dark-muted:    rgba(255,255,255,0.6); /* muted on dark */

/* Surface */
--color-surface:       #ffffff;    /* white cards */
--color-surface-muted: rgba(255,255,255,0.8);

/* Interactive */
--color-btn-primary:   #17191f;    /* button bg */
--color-btn-secondary: #ffffff;    /* secondary button */
--color-border:        rgba(0,0,0,0.06); /* subtle borders */
```

### 3.2 Tipografi

| Role | Font | Weight | Desktop Size | Line H | Letter-Spacing |
|------|------|--------|-------------|--------|---------------|
| Hero H1 | Instrument Serif / Newsreader | 300 | clamp(48px, 5vw, 72px) | 1.0 | -0.02em |
| Section H2 | Instrument Serif / Newsreader | 300 | clamp(36px, 4vw, 60px) | 1.0 | -0.02em |
| Card H3 | Instrument Serif / Newsreader | 300 | 20–30px | 1.0 | -0.01em |
| Body | Inter | 400 | 16–18px | 1.5–1.6 | — |
| Small | Inter | 400–500 | 12–14px | 1.4 | — |
| Badge | Inter | 600 | 12px | — | — |
| Nav | Inter | 500 | 14px | — | — |
| Button | Inter | 600 | 14px | — | — |

**CSS Classes:**
```css
--font-heading: 'Instrument Serif', 'Newsreader', Georgia, serif;
--font-body: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
```

### 3.3 Border Radius

| Token | Value | Usage |
|-------|-------|-------|
| `--radius-sm` | 6px | Small elements |
| `--radius-lg` | 8px | Buttons, inputs |
| `--radius-xl` | 12px | Cards, badges |
| `--radius-2xl` | 16px | Large cards, testimonials |
| `--radius-3xl` | 24px | Bento containers |
| `--radius-full` | 9999px | Pills, badges, avatars |

### 3.4 Elevation / Shadows

| Token | Value |
|-------|-------|
| `--shadow-sm` | `0 1px 2px 0 rgb(0 0 0 / 0.05)` |
| `--shadow-card` | `0 1px 3px rgba(0,0,0,0.04), 0 1px 2px rgba(0,0,0,0.06)` |
| `--shadow-xl` | `0 20px 25px -5px rgb(0 0 0 / 0.1)` |
| `--shadow-strong` | Multi-layer custom shadow |
| `--ring-subtle` | `0 0 0 1px rgba(0,0,0,0.05)` |

### 3.5 Spacing Scale

| Token | Value | Usage |
|-------|-------|-------|
| `--space-2` | 8px | Micro gaps |
| `--space-3` | 12px | Tight clusters |
| `--space-4` | 16px | Card padding, nav items |
| `--space-5` | 20px | Grid gutters |
| `--space-6` | 24px | Content groupings |
| `--space-8` | 32px | Major gaps |
| `--space-10` | 40px | Section breathing |
| `--space-20` | 80px | Section padding |
| `--gutter` | 20→40px | Responsive container padding |

### 3.6 Responsive Breakpoints

| Breakpoint | Min Width | Target |
|------------|-----------|--------|
| `sm` | 640px | Large phone / tablet portrait |
| `md` | 768px | Tablet landscape |
| `lg` | 1024px | Desktop grid reflow |
| `xl` | 1280px | Wide desktop |

---

## 4. Komponen UI

### 4.1 Badge (Section Label)

Pill badge terracotta di atas setiap section heading.

```html
<span class="badge">Support teams without the tab chaos</span>
```

**Variants:** 1 (solid terracotta)
**WP:** ACF text field, reusable template part

### 4.2 Button

| Variant | Classes | Usage |
|---------|---------|-------|
| Primary | `btn btn--primary` | Dark bg, white text, shadow-xl |
| Secondary | `btn btn--secondary` | White bg, border, dark text |
| Dark CTA | `btn btn--dark-cta` | White bg, dark text (for footer) |

```html
<a href="#" class="btn btn--primary">Start free trial</a>
```

**WP:** ACF `link` field group, rendered with class map

### 4.3 Feature Card

```html
<article class="feature-card">
  <div class="feature-card__icon">...</div>
  <h3 class="feature-card__title">Faster Resolution</h3>
  <p class="feature-card__text">Reduce repetitive work...</p>
</article>
```

**Variants:** Light (white/80 bg, features section), Dark (hero dashboard cards)
**WP:** ACF repeater — icon, title, description

### 4.4 Dashboard Card (Hero)

Complex mock cards with internal structure:
- Chat message preview (avatar + text + timestamp)
- Analytics stat (donut chart + metric)
- Customer profile (cover image + avatar + name + buttons)

**WP:** Static template part — too complex for dynamic fields

### 4.5 Social Proof Bar

```html
<section class="social-proof">
  <div class="social-proof__item">
    <span class="social-proof__dot" style="background:#3b82f6"></span>
    <span class="social-proof__name">Brightly</span>
  </div>
</section>
```

**WP:** ACF repeater — name, icon/color

### 4.6 Marquee Track

CSS-powered auto-scroll horizontal track.

```css
@keyframes marquee {
  from { transform: translateX(0); }
  to { transform: translateX(-50%); }
}
.marquee-track {
  animation: marquee 34s linear infinite;
}
.marquee-track:hover { animation-play-state: paused; }
```

**Mask:** `linear-gradient(90deg, transparent, #000 10%, #000 90%, transparent)`

**Variants:** Image marquee (34s), Testimonial marquee (48s)
**WP:** ACF gallery / post loop, duplicate content via template

### 4.7 Testimonial Card

```html
<article class="testimonial-card">
  <p class="testimonial-card__quote">“Quote text...”</p>
  <div class="testimonial-card__author">
    <p class="testimonial-card__name">Avery Stone</p>
    <p class="testimonial-card__role">CX Director, Brightly</p>
  </div>
</article>
```

**Variants:** White bg, `#e8ebe3` green tint, `#f7f7f3` gray
**WP:** Custom post type `orbit_testimonial` + ACF fields

### 4.8 Operations Bento Card

2×2 grid with:
1. Performance metrics (CSAT, SLA, Replies + SVG line chart)
2. Content panel (heading + description + pill tags)
3. Content panel (heading + description + pill tags)
4. Channel overview (rows with icon + label + metric + trend badge)

**WP:** ACF flexible content — layout types: `stats`, `content-panel`, `channel-overview`

### 4.9 Stat Metric

```html
<div class="stat">
  <p class="stat__label">CSAT</p>
  <p class="stat__number">96%</p>
</div>
```

**Donut variant:** Circular progress with border-color trick
**WP:** ACF group with number + label

### 4.10 Pill / Tag

```html
<span class="pill">Smart assignment</span>
<span class="pill pill--green">+18%</span>
<span class="pill pill--red">-6%</span>
```

**WP:** ACF text, rendered with conditional color classes

### 4.11 Newsletter Form

```html
<form class="newsletter-form">
  <input type="email" placeholder="Work email" class="newsletter-form__input">
  <button class="newsletter-form__submit">Subscribe</button>
</form>
```

**WP:** Gravity Forms / WPForms shortcode

---

## 5. Animasi & Interaksi

### 5.1 Scroll Reveal

| Properti | Nilai |
|----------|-------|
| Initial | `opacity: 0; transform: translateY(24px); filter: blur(12px)` |
| Final | `opacity: 1; transform: none; filter: blur(0)` |
| Durasi | 760ms |
| Easing | `cubic-bezier(0.22, 1, 0.36, 1)` |
| Stagger | 85ms per item, max 595ms |
| Threshold | 0.14 |
| Root Margin | `0px 0px -8% 0px` |
| JS | IntersectionObserver |
| Reduced Motion | `prefers-reduced-motion: reduce` → no animation |

### 5.2 Marquee / Continuous Scroll

| Properti | Nilai |
|----------|-------|
| Keyframes | `translateX(0) → translateX(-50%)` |
| Speed | 34s (images), 48s (testimonials) |
| Hover | `animation-play-state: paused` |
| Edge fade | CSS mask linear-gradient |
| Teknik | Duplicate content inline, `width: max-content` |

### 5.3 Hover Micro-interactions

| Element | Efek |
|---------|------|
| Primary button | `background: #17191f → #000000` |
| Secondary button | `background: #ffffff → #f2f2ef` |
| Nav link | `color: rgba(0,0,0,0.6) → rgba(0,0,0,1)` |
| Footer link | `color: rgba(255,255,255,0.55) → rgba(255,255,255,1)` |
| Marquee | Pause on hover |
| All links | `transition: opacity 0.2s ease` |

---

## 6. Spesifikasi Teknis

### 6.1 Requirements

| Requirement | Minimum |
|-------------|---------|
| WordPress | 6.4+ |
| PHP | 8.1+ |
| MySQL | 5.7+ / MariaDB 10.3+ |

### 6.2 File Structure

```
orbitdesk/
├── style.css                    # Theme header + CSS custom properties + all styles
├── theme.json                   # FSE block editor settings v3
├── functions.php                # Bootstrap loader
├── screenshot.png               # 1200×900
├── index.php                    # Blog archive / fallback
├── front-page.php               # Landing page (assembles template-parts)
├── page.php                     # Default page
├── single.php                   # Single post
├── archive.php                  # Archive
├── 404.php                      # Not found
├── search.php                   # Search results
├── header.php                   # Site header
├── footer.php                   # Site footer
├── inc/
│   ├── setup.php                # Theme support, menus, body classes
│   ├── enqueue.php              # Assets loading
│   ├── customizer.php           # Customizer settings
│   ├── post-types.php           # CPTs + taxonomies + meta
│   └── helpers.php              # Utility functions
├── assets/
│   ├── css/
│   │   └── editor.css           # Block editor styles
│   ├── js/
│   │   ├── main.js              # Scroll reveal, marquee, mobile nav
│   │   └── customizer.js        # Live preview
│   └── images/
│       └── placeholder.svg
└── template-parts/
    ├── hero.php
    ├── social-proof.php
    ├── workflow.php
    ├── features.php
    ├── operations-hub.php
    ├── testimonials.php
    ├── cta.php
    └── newsletter-form.php
```

### 6.3 Dependencies

- Google Fonts: Instrument Serif (300, 400) + Inter (400, 500, 600, 700)
- No external JS libraries — vanilla JS only
- No CSS frameworks — handcrafted CSS with custom properties
- Icons: Inline SVGs (optional: Lucide CDN)

### 6.4 Build Process

- Zero build step — load directly from files
- CSS via `wp_enqueue_style` with version cache-busting
- JS via `wp_enqueue_script` in footer, deferred

---

## 7. Integrasi Plugin

| Plugin | Fungsi | Level |
|--------|--------|-------|
| **Advanced Custom Fields (ACF)** | Flexible content sections, repeater fields | Recommended |
| **Gravity Forms / WPForms** | Newsletter signup, contact form | Optional |
| **Yoast SEO / Rank Math** | SEO metadata, sitemap, Open Graph | Recommended |
| **WP Rocket / Flying Press** | Caching, minification | Optional |

---

## 8. Kustomisasi (WP Customizer)

| Section | Setting | Default | Type |
|---------|---------|---------|------|
| Hero | Badge Text | "Support teams without the tab chaos" | text |
| Hero | Heading | "Customer conversations unified across every inbox" | text |
| Hero | Subtitle | "Bring email, live chat..." | textarea |
| Hero | Primary CTA Text | "Start free trial" | text |
| Hero | Primary CTA URL | "#" | url |
| Hero | Secondary CTA Text | "Watch demo" | text |
| Features | Badge Text | "Core capabilities" | text |
| Features | Heading | "Powerful tools without the noise" | text |
| CTA | Heading | "Deliver calmer customer support..." | text |
| CTA | Button 1 Text | "Start free trial" | text |
| CTA | Button 2 Text | "Book demo" | text |
| Footer | Copyright Text | "Copyright © 2028 OrbitDesk" | text |
| Social | GitHub/Twitter/LinkedIn URL | "" | url |

---

## 9. Performance Checklist

- [x] CSS custom properties — minimal repetition
- [x] Zero jQuery dependency — vanilla JS
- [x] No external icon library
- [x] Font display swap
- [x] Lazy load images via `loading="lazy"`
- [x] `no_found_rows=true` on front-end WP_Query
- [x] Deferred JavaScript
- [x] No unused CSS framework
- [x] Minimal DOM reflows

---

## 10. Instalasi

1. Upload folder `orbitdesk/` ke `/wp-content/themes/`
2. Aktifkan dari **Appearance > Themes**
3. Buat page "Home" → set sebagai **Front page** di Settings > Reading
4. Buat menu di **Appearance > Menus** (Primary)
5. Kustomisasi teks via **Appearance > Customize**
6. (Opsional) Install ACF untuk flexible content sections

---

*Dibuat dari analisis https://orbitdesk-saas.aura.build/ — 2026-05-27*
