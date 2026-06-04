# Studio — WordPress Theme Concept

## Ringkasan

**Studio** adalah tema WordPress portfolio kreatif modern dengan estetika editorial yang bersih, typography-driven, dan animasi scroll halus. Target audiens adalah desainer, pengembang, fotografer, ilustrator, dan agency kreatif yang ingin menampilkan portofolio dengan kesan profesional dan premium tanpa bloat.

---

## 1. Struktur & Komponen

### Halaman Utama (Front Page)

```
HEADER — sticky, glass blur, logo + nav (primary menu)
├── HERO
│   ├── Label (micro/uppercase)
│   ├── Tech Stack Grid (icon + nama 10 teknologi)
│   ├── Subtitle
│   └── CTA Buttons (View Projects / Get in Touch)
├── PROJECTS
│   ├── Section Title
│   └── 2-column grid project cards (thumbnail, tags, title, excerpt)
├── ABOUT
│   ├── 2-column: image | text + stats (animated counter)
│   └── Client Logos (horizontal scroll/grid, grayscale, hover efek)
├── TESTIMONIALS
│   ├── Section Title
│   └── 3-column grid testimonial cards (quote, author, role)
└── CTA
    ├── Headline + deskripsi
    └── Button ke kontak
FOOTER — copyright, footer menu, social links
```

### Inner Pages

| Template | File | Deskripsi |
|----------|------|-----------|
| Blog Index | `index.php` | 2-column grid post cards, pagination pill-style |
| Single Post | `single.php` | Featured image, content, tags, prev/next |
| Page | `page.php` | Default page dengan narrow content width |
| Portfolio Single | `single-aura_project.php` | Project detail: featured image, meta (year, role, URL), taxonomy tags |
| Portfolio Archive | `archive-aura_project.php` | Archive project, filter by taxonomy |
| 404 | `404.php` | Minimal, centered, back to home button |
| Search | `search.php` | Results dengan post cards, fallback form |

### Custom Post Types

- **Portfolio** (`aura_project`) — title, editor, thumbnail, excerpt, custom-fields
  - Meta: `aura_project_url`, `aura_project_year`, `aura_project_role`

### Taxonomies

- **Project Type** (`aura_project_type`) — hierarchical, untuk filter

### Widget & Dynamic Areas

- Primary Menu (header)
- Footer Menu (footer)

---

## 2. Desain Visual

### Palet Warna

```css
--primary:   #171717      /* near-black, teks utama */
--secondary: #404040      /* charcoal lembut, label */
--tertiary:  #6B7280    /* muted gray, metadata */
--neutral:   #F5F5F5    /* soft fill, button background */
--surface:   #FFFFFF    /* kanvas utama */
--border:    #E5E5E5    /* divider tipis */
--muted:     #FAFAFA    /* hover state */
--accent:    #000000    /* black absolut */
--error:     #DC2626    /* red */
```

### Tipografi

| Style | Font | Size | Weight | Letter-Spacing |
|-------|------|------|--------|----------------|
| Display | Inter | 60px | 500 | -3px |
| H1 | Inter | 44px | 500 | -0.45px |
| H2 | Inter | 33px | 100 | -0.3px |
| H3 | Inter | 24px | 100 | 0 |
| Body Large | Inter | 18px | 100 | -0.16px |
| Body | Inter | 16px | 400 | -0.08px |
| Body Small | Inter | 14px | 400 | -0.04px |
| Label | Inter | 12px | 500 | 0 |
| Micro | Inter | 11px | 500 | 0 |

### Shape & Border Radius

| Token | Value | Usage |
|-------|-------|-------|
| `--radius-sm` | 4px | Dekorasi minor |
| `--radius-md` | 8px | Cards, inputs |
| `--radius-lg` | 12px | Project cards |
| `--radius-xl` | 16px | CTA section |
| `--radius-full` | 9999px | Buttons, chips, badges, pagination |

### Elevation

- Cards: `box-shadow: 0 1px 3px rgba(0,0,0,0.04), 0 1px 2px rgba(0,0,0,0.06)`
- Hover: `box-shadow: 0 4px 24px rgba(0,0,0,0.06)` + translateY(-2px)
- Header: `backdrop-filter: blur(12px)` dengan border-bottom tipis

### Spacing Scale

```css
--space-xs: 6px     /* micro gap */
--space-sm: 16px    /* card padding */
--space-md: 32px    /* section gap */
--space-lg: 48px    /* section padding sm */
--space-xl: 114px   /* major section breathing */
--gutter: 24px      /* container padding */
```

---

## 3. Fungsionalitas

### Customization (WP Customizer)

| Setting | Default | Deskripsi |
|---------|---------|-----------|
| Hero Label | "Tech Stack & Tools" | Label di atas tech stack |
| Hero Subtitle | "Crafting digital experiences..." | Teks di bawah tech stack |
| About Title | "About Me" | Judul about section |
| About Text | "I'm a multidisciplinary..." | Paragraf about |
| About Image | "" | Upload foto about |
| Stat 1 Num/Suffix | "8" / "+" | Angka stat 1 |
| Stat 1 Label | "Years Experience" | Label stat 1 |
| Stat 2 Num/Suffix | "50" / "+" | Angka stat 2 |
| Stat 3 Num/Suffix | "30" / "+" | Angka stat 3 |
| CTA Title | "Let's create something..." | Judul CTA |
| CTA Button Text | "Get in Touch" | Teks tombol CTA |
| CTA Button URL | "mailto:hello@example.com" | Link tombol CTA |

### Plugin Integration

- **ACF** — fallback untuk custom fields jika user ingin field tambahan
- **Contact Form 7 / WPForms** — form kontak via shortcode di page
- **Yoast / Rank Math** — kompatibel via `post_types` support + `the_excerpt`
- **WooCommerce** — tidak di-bundle; theme tetap clean tanpa Woo styling override

### Navigation

- Primary: flat menu di header (max depth 1)
- Footer: flat menu di footer
- Smooth scroll untuk hash link (#section)

### Gutenberg Compatibility

- `theme.json` v3 dengan:
  - Custom color palette (10 warna)
  - Font families: Inter + JetBrains Mono
  - Fluid font sizes (micro → 4x-large)
  - Block styles untuk button (radius full), heading (font-weight 500), separator (border color)

---

## 4. Spesifikasi Teknis

### Requirements

| Requirement | Minimum |
|-------------|---------|
| WordPress | 6.4+ |
| PHP | 8.1+ |
| Database | MySQL 5.7+ / MariaDB 10.3+ |

### File Structure

```
studio/
├── style.css                    # Theme header + CSS custom properties
├── theme.json                   # FSE block editor settings
├── functions.php                # Bootstrap inc/
├── screenshot.png               # 1200x900
├── index.php                    # Blog / search / fallback
├── front-page.php               # Landing page (assembles template-parts)
├── page.php                     # Default page
├── single.php                   # Single post
├── single-aura_project.php      # Single portfolio project
├── archive.php                  # Archive (posts + portfolio)
├── 404.php                      # Not found
├── header.php                   # Site header
├── footer.php                   # Site footer
├── inc/
│   ├── setup.php                # Theme support, menus, body classes
│   ├── enqueue.php              # Assets (fonts, CSS, JS)
│   └── post-types.php           # CPT + taxonomy + meta
├── assets/
│   ├── css/
│   │   ├── aura.css             # Full component styles (~1000 lines)
│   │   └── editor.css           # Block editor styles
│   └── js/
│       └── main.js              # Mobile menu, scroll reveal, stat counter
└── template-parts/
    ├── hero.php                 # Tech stack showcase
    ├── projects.php             # Project grid (WP_Query)
    ├── about.php                # About + animated stats + client logos
    ├── testimonials.php         # Testimonial cards
    └── cta.php                  # Call to action
```

### Dependencies (External)

- Google Fonts: Inter (100, 400, 500, 600)
- Tidak ada dependency JS/library eksternal — vanilla JS cukup

### Build Process

- Zero build step — muat langsung dari file
- CSS via `wp_enqueue_style` dengan version cache-busting (`filemtime` optional)
- JS via `wp_enqueue_script` di footer

---

## 5. Animasi & Interaksi

### Scroll Reveal
- Class `.au-reveal` + data attribute `data-delay="0.1"` untuk staggered entrance
- CSS: `opacity: 0` → `opacity: 1`, `translateY(24px)` → `translateY(0)`
- Durasi: 0.6s, ease-out
- Trigger: IntersectionObserver (threshold 0.15)
- Fallback: semua konten tetap visible jika JS gagal atau `prefers-reduced-motion: reduce`

### Stat Counter
- Count-up animation dari 0 ke angka target
- Easing: cubic ease-out (1.5 detik)
- Trigger: IntersectionObserver (threshold 0.5)
- Data attributes: `data-target`, `data-suffix`
- Fallback: langsung tampilkan angka target + suffix

### Mobile Menu
- Toggle hamburger → dropdown menu
- Click outside atau Escape untuk tutup
- Animasi via CSS (bukan JS)

### Smooth Scroll
- Hash link `href="#section"` → scrollIntoView smooth

---

## 6. Performance Checklist

- [x] CSS custom properties — minimal repeated values
- [x] No external icon library — inline SVGs cukup
- [x] No jQuery dependency
- [x] Vanilla JS, no framework
- [x] Font display swap
- [x] No unused CSS framework (Tailwind, Bootstrap tidak dipakai)
- [x] Lazy load images via WordPress `loading="lazy"` default
- [x] WP_Query dengan `no_found_rows=true` untuk front-end queries

---

## 7. Security Checklist

- [x] Nonce pada AJAX/forms
- [x] `esc_html()` / `esc_url()` / `wp_kses_post()` pada semua output
- [x] `sanitize_text_field()` / `esc_url_raw()` pada input
- [x] Capability checks (`current_user_can`) pada admin operations
- [x] Prepared queries via `WP_Query` (built-in prepared statements)
- [x] No `$_REQUEST` / `$_SERVER` tanpa sanitasi
- [x] i18n + text domain `studio`

---

## 8. Instalasi

1. Upload folder `studio/` ke `/wp-content/themes/`
2. Aktifkan dari **Appearance > Themes**
3. Buat halaman "Home" → set sebagai **Front page** di Settings > Reading
4. Buat menu di **Appearance > Menus** (Primary + Footer)
5. Tambah project via **Portfolio > Add New**
6. Customize teks & statistik via **Appearance > Customize**

---

## 9. Kustomisasi Lanjutan

### Menambah Tech Stack Icons
Edit `template-parts/hero.php`, tambah entry ke array `$tech_stack`:
```php
[
    'name' => 'Next.js',
    'icon' => '<svg>...</svg>',
]
```

### Menambah Client Logos
Via Customizer atau langsung di `template-parts/about.php` array `$logos`.

### Filter Query Projek
Gunakan hook `pre_get_posts`:
```php
add_action( 'pre_get_posts', function ( $query ) {
    if ( $query->is_post_type_archive( 'aura_project' ) && $query->is_main_query() ) {
        $query->set( 'posts_per_page', 12 );
    }
} );
```
