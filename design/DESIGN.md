# OrbitDesk SaaS — Design System & Rebuild Architecture

## 1. Website Overview

| Field | Value |
|---|---|
| **Target URL** | https://orbitdesk-saas.aura.build/ |
| **Creator** | Meng To / Aura Build |
| **Type** | SaaS landing page template |
| **Vertical** | Customer messaging & support platform |
| **Design style** | Warm minimalism — earthy tones, generous whitespace, serif headline accent, subtle glass/backdrop elements |

**Brand positioning feel** — Calm, premium, human. The design avoids loud tech tropes. Warm neutrals (`#faf8f1`, `#e9eadf`, `#fbfbf8`) replace the typical cool grays. A terracotta accent (`#9f6b4e`, `#b98668`) acts as a single brand color. Typography-driven hierarchy with a serif headline voice (Instrument Serif / Newsreader) and clean Inter body text creates a editorial-meets-software feel.

**Page structure** — Classic long-scrolling SaaS landing page with anchor-linked navigation:

1. Sticky header + nav + CTA
2. Hero (badge → heading → subtext → dual CTA → 3-card dashboard preview grid)
3. Social proof bar (brand logos)
4. Workflow section (marquee images + 3-step explainer)
5. Features (4-column feature card grid + dual CTA)
6. Operations hub (2×2 bento grid with metrics, chart, channel overview)
7. Reviews (marquee testimonials + featured story card)
8. CTA (centered closing block)
9. Footer (4-column with brand, links, newsletter form)

---

## 2. Visual Design System

### 2.1 Typography

| Role | Font | Weight | Size (desktop) | Line Height | Tracking |
|---|---|---|---|---|---|
| Hero heading | Instrument Serif / Newsreader | 300 (light) | clamp(3rem, 5vw, 4.5rem) / text-7xl (72px) | none (1.0) | tracking-tight (-0.02em) |
| Section heading | Instrument Serif / Newsreader | 300 (light) | text-5xl→6xl (48→60px) | none (1.0) | tracking-tight |
| Card heading (hero) | Instrument Serif / Newsreader | 300 (light) | text-xl (20px) ×/ text-3xl (30px) | none / none | tracking-tight |
| Body text | Inter / sans-serif | 400 (regular) | text-base (16px) / text-lg (18px) | leading-6 / leading-7 | — |
| Small/caption | Inter / sans-serif | 400–500 | text-xs (12px) / text-sm (14px) | leading-5 / leading-6 | — |
| Badge | Inter / sans-serif | 600 (semibold) | text-xs (12px) | — | — |
| Nav link | Inter / sans-serif | 500 (medium) | text-sm (14px) | — | — |
| Button | Inter / sans-serif | 600 (semibold) | text-sm (14px) | — | — |

**CSS custom font classes inferred:**
- `.font-heading` → `font-family: 'Instrument Serif', 'Newsreader', Georgia, serif; font-weight: 300;`
- `.font-body` → `font-family: 'Inter', ui-sans-serif, system-ui, sans-serif;`

### 2.2 Color Palette

#### Primary palette (inferred from rendered classes)

| Token | Hex | Usage |
|---|---|---|
| `--color-bg` | `#faf8f1` | Main page background |
| `--color-bg-alt` | `#fbfbf8` | Workflow / reviews section |
| `--color-bg-sage` | `#e9eadf` | Features / CTA section |
| `--color-bg-light` | `#f7f7f3` | Social proof bar |
| `--color-bg-warm` | `#fbfaf4` | Operations hub outer |
| `--color-bg-beige` | `#ded8cc` | Operations hub inner card |
| `--color-surface` | `#ffffff` | White card surfaces |
| `--color-surface-muted` | `rgba(255,255,255,0.8)` | Semi-transparent cards |
| `--color-text-primary` | `#17191f` | Primary text (near-black) |
| `--color-text-secondary` | `rgba(0,0,0,0.6)` / `rgba(0,0,0,0.5)` | Muted text |
| `--color-text-tertiary` | `rgba(0,0,0,0.45)` / `rgba(255,255,255,0.55)` | Footer/tertiary |
| `--color-accent` | `#9f6b4e` | Badges, highlights |
| `--color-accent-light` | `#b98668` | Hover/lighter accent |
| `--color-dark-surface` | `#191b22` / `#181b22` | Dark cards |
| `--color-dark-text` | `#ffffff` | Text on dark |
| `--color-dark-muted` | `rgba(255,255,255,0.6)` | Muted on dark |
| `--color-button-primary` | `#17191f` | Primary button bg |
| `--color-button-secondary` | `#ffffff` | Secondary button bg |
| `--color-border` | `rgba(0,0,0,0.05)` / `rgba(0,0,0,0.1)` / `rgba(0,0,0,0.25)` | Subtle borders |

#### shadcn/ui HSL variables (from CSS bundle)

```
--background: 0 0% 100%        --foreground: 0 0% 9%
--card: 0 0% 98%               --card-foreground: 0 0% 9%
--muted: 0 0% 96%              --muted-foreground: 0 0% 45%
--accent: 0 0% 96%             --accent-foreground: 0 0% 9%
--primary: 0 0% 9%             --primary-foreground: 0 0% 98%
--border: 0 0% 90%             --ring: 0 0% 20%
--radius: 0.5rem
```

### 2.3 Spacing Scale

| Token | px (approx) | Usage |
|---|---|---|
| gap-2 | 8px | Icon-text spacing, tight clusters |
| gap-3 | 12px | Button groups, inline elements |
| gap-4 | 16px | Card content, nav items |
| gap-5 | 20px | Grid gutters, card spacing |
| gap-6 | 24px | Section content gaps |
| gap-8 | 32px | Major content groupings |
| gap-10 | 40px | Footer columns |
| p-4 / p-5 / p-6 / p-8 | 16/20/24/32px | Card padding |
| px-5 (section) | 20px | Mobile section padding |
| sm:px-8 | 32px | Tablet section padding |
| lg:px-10 | 40px | Desktop section padding |
| py-20 | 80px | Section vertical padding |
| sm:py-24 | 96px | Larger section vertical |
| py-4 (nav) | 16px | Header padding |
| mt-4 / mt-5 / mt-8 / mt-10 / mt-12 / mt-14 / mt-16 | 16→64px | Vertical rhythm ladder |

### 2.4 Border Radius

| Class | Value | Where |
|---|---|---|
| `rounded-sm` | 4px | Tab triggers |
| `rounded-lg` | 8px | Smaller buttons, icons |
| `rounded-xl` | 12px | Primary radius — buttons, cards, inputs |
| `rounded-2xl` | 16px | Large cards, dashboard previews, testimonials |
| `rounded-3xl` | 24px | Bento container, outer wraps |
| `rounded-full` | 9999px | Badges, pills, avatar, stat circle |

### 2.5 Shadows

| Class | Definition |
|---|---|
| `shadow-sm` | `0 1px 2px 0 rgb(0 0 0 / 0.05)` — default card surface |
| `shadow-xl` | `0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1)` — primary CTAs |
| `shadow-2xl` | Large decorative shadows (rotated cards) |
| `shadow-strong` (custom) | Multi-layer: `0 1px #0000000d, 0 4px 4px #0000001a, 0 10px 10px #00000026, inset 0 -1px #0000001a` |
| `shadow-subtle` (custom) | `0 1px 1px #00000008, 0 0 2px #0000001a, 0 5px 5px #00000008` |
| `shadow-large` (custom) | `0 5px 10px #0000000d, 0 15px 30px #00000026, 0 20px 40px #00000040, inset 0 -1px #0000001a` |
| `ring-1 ring-black/5` | Subtle card border alternative |

### 2.6 Containers

| Element | Max Width | Padding |
|---|---|---|
| Page wrapper | `max-w-[112rem]` (1792px) | — |
| Section content | `max-w-7xl` (1280px) | px-5→sm:px-8→lg:px-10 |
| Hero heading | `max-w-4xl` (896px) | auto x-axis |
| Hero paragraph | `max-w-2xl` (672px) | auto x-axis |
| CTA section | `max-w-3xl` (768px) | auto x-axis |
| Footer inner | `max-w-7xl` (1280px) | px-5→sm:px-8→lg:px-10 |

### 2.7 Light/Dark Mode

The CSS bundle includes a full `.dark` class variant for shadcn/ui HSL variables. However the current page implementation is **light mode only** using hardcoded color hex values (not HSL variables). Dark mode would require consuming the CSS variables instead of hardcoded colors.

---

## 3. Page Structure Breakdown

### 3.1 Homepage (single scroll)

```
┌───────────────────────────────────────────────────────────────┐
│ HEADER (sticky, backdrop-blur)                                │
│ [Logo] OrbitDesk        [Features] [Workflow] [Reviews]  [CTA]│
├───────────────────────────────────────────────────────────────┤
│ HERO                                                          │
│  ┌─ Badge: "Support teams without the tab chaos" ──────────┐  │
│  │ H1: "Customer conversations unified across every inbox"  │  │
│  │ P: "Bring email, live chat, social DMs..."               │  │
│  │ [Start free trial]  [Watch demo]                         │  │
│  │ ┌──────────┐ ┌──────────┐ ┌──────────┐                  │  │
│  │ │Chat      │ │Analytics │ │Customer  │                  │  │
│  │ │Routing   │ │Dashboard │ │Timelines │                  │  │
│  │ └──────────┘ └──────────┘ └──────────┘                  │  │
├───────────────────────────────────────────────────────────────┤
│ SOCIAL PROOF                                                  │
│  Brightly  |  Northstar  |  Everlane Co  |  Solace  | Aster  │
├───────────────────────────────────────────────────────────────┤
│ WORKFLOW                                                      │
│  Badge → Label → H2 heading                                   │
│  ┌────────────── Marquee image track ──────────────┐         │
│  [Connect inboxes] [Prioritize requests] [Improve outcomes]   │
├───────────────────────────────────────────────────────────────┤
│ FEATURES                                                      │
│  Badge → H2 → P → [CTA pair]                                  │
│  ┌──────────┐ ┌──────────┐ ┌──────────┐ ┌──────────┐        │
│  │Faster    │ │Team      │ │Unified   │ │Live      │         │
│  │Resolution│ │Alignment │ │Threads   │ │Insights  │         │
│  └──────────┘ └──────────┘ └──────────┘ └──────────┘        │
├───────────────────────────────────────────────────────────────┤
│ OPERATIONS HUB                                                │
│  Badge → H2                                                   │
│  ┌──────────────────────┐ ┌──────────────────────┐           │
│  │ Performance Dashboard│ │ Shared intelligence  │           │
│  │ (CSAT, SLA, Replies) │ │ heading + tags        │           │
│  ├──────────────────────┤ ├──────────────────────┤           │
│  │ Plan follow-ups      │ │ Channel Overview     │           │
│  │ heading + tags       │ │ (inbox, chat, social) │           │
│  └──────────────────────┘ └──────────────────────┘           │
├───────────────────────────────────────────────────────────────┤
│ REVIEWS                                                       │
│  Badge → H2 + [CTA pair]                                      │
│  ┌── Marquee testimonials ─────────────────────┐             │
│  ┌─────────────────┐ ┌─────────────────────────┐│             │
│  │ Photo card      │ │ Featured story quote    ││             │
│  └─────────────────┘ └─────────────────────────┘│             │
├───────────────────────────────────────────────────────────────┤
│ CTA                                                            │
│  Badge → H2 → P → [Start free trial] [Book demo]             │
├───────────────────────────────────────────────────────────────┤
│ FOOTER                                                        │
│  [Logo+desc]    [Company]    [Resources]    [Newsletter form] │
│  ───────────────────────────────────────────────────────      │
│  © 2028 OrbitDesk        Privacy  Terms  Cookies              │
└───────────────────────────────────────────────────────────────┘
```

### 3.2 Pricing / Features / Contact

The template does **not** include separate Pricing, Features, or Contact pages. It is a single-page landing template. Rebuild should add:

- **Pricing** — 3-tier card layout (`max-w-7xl` grid with monthly/yearly toggle)
- **Features (extended)** — Deep-dive section rows (image left/text right alternation pattern)
- **Contact** — Centered form with name, email, message, submit — or reuse the CTA block

---

## 4. Component Inventory

### 4.1 Badge

**Purpose** — Section intro label

```html
<span class="inline-flex rounded-full bg-[#9f6b4e] px-3 py-1 text-xs font-semibold text-white">
  Label text
</span>
```

**Variants** — Single variant (terracotta bg, white text)
**WP implementation** — ACF `text` field within a reusable template part, rendered via `get_template_part()`

### 4.2 Primary CTA Button

**Purpose** — High-emphasis action (Start free trial, Book intro)

```html
<a href="#" class="inline-flex w-full sm:w-auto items-center justify-center rounded-xl bg-[#17191f] px-7 py-4 text-sm font-semibold text-white shadow-xl shadow-black/15 hover:bg-black font-sans">
  Label
</a>
```

**Variants** — 
- Primary: dark bg, white text, shadow-xl
- Secondary: white bg, border, dark text, hover:bg-[#f2f2ef]/[#f4f4ef]
- Outline hero: `border border-black/15 bg-white`
- Dark variant: `bg-white text-[#191b22]` (for footer)

**WP implementation** — ACF `link` field group, rendered with component classes

### 4.3 Feature Card

**Purpose** — Highlight product capabilities (used in hero grid and features section)

```html
<article class="rounded-2xl bg-white/80 p-6 text-left shadow-sm ring-1 ring-black/5">
  <span class="flex h-12 w-12 items-center justify-center rounded-xl border border-[#e4cbb9] bg-[#fbf0e6] shadow-sm">
    <i data-lucide="send" class="h-5 w-5"></i>
  </span>
  <h3 class="mt-24 text-3xl leading-none tracking-tight font-heading">Title</h3>
  <p class="mt-4 text-base leading-6 text-black/60 font-body">Description</p>
</article>
```

**Variants** —
- Light (white/80 bg): features section
- Dark (`#181b22` / `#191b22`): hero dashboard cards
- Mixed (`#dce2e2`): hero analytics card
- Features hero card: `mt-24` for heading position, icon at top
- Dashboard hero card: full layout with mock content, profile cards, chat bubbles

**WP implementation** — ACF repeater or flexible content field, `article` wrap, icon library selection

### 4.4 Marquee Track

**Purpose** — Continuous auto-scrolling card/image row

```html
<div class="overflow-hidden alpha-marquee-mask">
  <div class="marquee-track gap-5">
    <!-- items with aria-hidden duplicates -->
  </div>
</div>
```

**CSS**: `@keyframes aura-marquee { from { transform: translateX(0) } to { transform: translateX(-50%) } }`
**Duration**: 34s (default), 48s (slow variant for testimonials)
**Hover**: `animation-play-state: paused`
**Mask**: `linear-gradient(90deg, transparent, #000 10%, #000 90%, transparent)`

**Variants** — Image marquee (workflow photos), Testimonial marquee (text cards)
**WP implementation** — ACF gallery or post loop, rendered in a `div.marquee-track` with duplicate items via JS or Twig

### 4.5 Testimonial Card

**Purpose** — Customer quote display

```html
<article class="w-[20rem] sm:w-[24rem] shrink-0 rounded-2xl bg-white p-6 text-left shadow-sm ring-1 ring-black/5">
  <p class="text-lg leading-7 text-black/75">“Quote”</p>
  <div class="mt-5 border-t border-black/10 pt-4">
    <p class="text-sm font-semibold">Name</p>
    <p class="text-xs text-black/50">Role, Company</p>
  </div>
</article>
```

**Variants** — White card, `#e8ebe3` green tint card, `#f7f7f3` gray card
**Featured variant** — Split layout with image + large quote + avatar + CTA button

**WP implementation** — Custom post type `testimonial` with ACF fields (quote, name, role, company, photo)

### 4.6 Operations Bento Card

**Purpose** — Analytics/metrics display within the operations section

**Structure** — 2×2 grid with:
- Performance widget (CSAT/SLA/reply stats + SVG chart line graph)
- Content panel (heading + description + pill tags)
- Content panel (heading + description + pill tags)
- Channel overview (mail/chat/social rows with metrics and trend badges)

**WP implementation** — ACF flexible content with layout types: `stats`, `content-panel`, `channel-overview`

### 4.7 Stat / Metric Display

**Purpose** — Highlight key numbers

```html
<div class="rounded-xl bg-[#f7f7f3] p-4">
  <p class="text-xs text-black/50">Label</p>
  <p class="mt-1 text-xl tracking-tight font-heading">96%</p>
</div>
```

**Donut variant** — Circular progress indicator:
```html
<div class="flex h-20 w-20 items-center justify-center rounded-full border-8 border-[#b98668] border-r-[#eadfd4]">
  <span class="text-xl tracking-tight font-heading">34.6K</span>
</div>
```

**WP implementation** — ACF group field with number + label, rendered with appropriate chart or number style

### 4.8 Accordion (FAQ)

**Not present on current site** — inferred from CSS bundle (`@keyframes accordion-up/down` using Radix UI)

**Structure** — Radix-based collapsible with trigger + content animation. Height transition from `0` to `var(--radix-accordion-content-height)`.

**WP implementation** — ACF repeater (question + answer), Alpine.js or vanilla JS toggle

### 4.9 Newsletter Form

**Purpose** — Email capture in footer

```html
<form class="flex gap-2">
  <input type="email" placeholder="Work email"
    class="min-w-0 flex-1 rounded-xl border border-white/10 bg-white/10 px-4 py-3 text-sm text-white placeholder:text-white/40 outline-none focus:border-white/30">
  <button class="rounded-xl bg-white px-4 py-3 text-sm font-semibold text-[#191b22]">
    Subscribe
  </button>
</form>
```

**WP implementation** — Gravity Forms / WPForms shortcode, styled to match

### 4.10 Nav Link

```html
<a href="#features" class="text-sm font-medium text-black/60 hover:text-black font-sans">
  Features
</a>
```

**WP implementation** — `wp_nav_menu()` with custom `walker` that applies Tailwind classes

### 4.11 Pill / Tag

**Purpose** — Feature badges, category labels, trend indicators

```html
<span class="rounded-full bg-white px-4 py-2 text-sm font-medium text-black/70">Smart assignment</span>
<span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-700">+18%</span>
```

**WP implementation** — ACF text/taxonomy, rendered with conditional color classes

---

## 5. Animation System

### 5.1 Scroll-Triggered Reveal

The page uses a custom IntersectionObserver-based scroll reveal (no external library).

| Property | Value |
|---|---|
| Initial opacity | `0` |
| Initial transform (default) | `translate3d(0, 24px, 0)` |
| Initial transform (from-left) | `translate3d(-28px, 18px, 0)` |
| Initial transform (from-right) | `translate3d(28px, 18px, 0)` |
| Initial filter | `blur(12px)` |
| Final state | `opacity: 1; transform: translate3d(0,0,0); filter: blur(0)` |
| Duration | `760ms` |
| Easing | `cubic-bezier(0.22, 1, 0.36, 1)` — ease-out quint style |
| Stagger delay | `85ms` per child, capped at `595ms` (7 items) |
| Threshold | `0.14` |
| Root margin | `0px 0px -8% 0px` |
| Reduced motion | Respects `prefers-reduced-motion: reduce` — removes all transforms/filters |

**Stagger logic** — Items within each section receive ascending `--reveal-delay` values. Every 3rd item gets a lateral direction class (`reveal-from-left` or `reveal-from-right`) for a staggered entrance effect.

### 5.2 Marquee / Continuous Scroll

| Property | Value |
|---|---|
| Keyframes | `aura-marquee` — `translateX(0)` → `translateX(-50%)` |
| Default speed | `34s` linear infinite |
| Slow variant | `48s` (testimonial cards) |
| Hover pause | `animation-play-state: paused` |
| Edge fade | `-webkit-mask-image: linear-gradient(90deg, transparent, #000 10%, #000 90%, transparent)` |
| Technique | Duplicate content inline, flex `width: max-content`, track spans 2× content width |

### 5.3 Transition Defaults

| Property | Value |
|---|---|
| Default timing | `cubic-bezier(0.22, 1, 0.36, 1)` |
| Duration | `500ms` (hover), `760ms` (scroll reveal) |
| Hover effects | `opacity` transitions, `color` transitions (black/60 → black), `background-color` |

### 5.4 Micro-interactions

- **CTA hover**: `hover:bg-black` — darkens from `#17191f` to pure black
- **Secondary hover**: `hover:bg-[#f2f2ef]` / `hover:bg-[#f1f1ee]` — light shade
- **Nav hover**: `text-black/60` → `text-black` — opacity increase
- **Marquee pause**: Hovering pauses animation
- **Footer link hover**: `text-white/55` → `text-white`

### 5.5 CSS Bundle Keyframes (available for reuse)

Refer to the CSS analysis output for 20+ `@keyframes` definitions including `fadeSlideIn`, `columnReveal`, `border-spin`, `shimmer`, `breathe`, `float`, `blur-up`, `gradient`, `marquee-scroll`, `border-beam`, and 4 Aura modal animation keyframes.

---

## 6. Responsive Rules

### 6.1 Breakpoints

| Tailwind Class | Min Width | Target |
|---|---|---|
| `sm:` | 640px | Tablet portrait / large phone |
| `md:` | 768px | Tablet landscape, nav breakpoint |
| `lg:` | 1024px | Desktop, grid reflow breakpoint |
| `xl:` | 1280px | Wide desktop |

### 6.2 Responsive Behavior Map

| Element | Mobile (< 640px) | Tablet (640–1023px) | Desktop (1024px+) |
|---|---|---|---|
| Nav links | Hidden (not rendered) | Hidden | Flex row |
| Header CTA | Visible | Visible | Visible |
| Hero layout | Stack | Stack | Full width |
| Hero cards | 1 column | 1 column | `lg:grid-cols-3` |
| Social proof | 2 columns | 3 columns | `lg:grid-cols-5` |
| Workflow steps | 1 column | 1 column | `md:grid-cols-3` |
| Feature cards | 1 column | 2 columns | `lg:grid-cols-4` |
| Operations hub | 1 column | 1 column | `lg:grid-cols-2` |
| Reviews layout | Stack | Stack | `lg:grid-cols-[1fr_1.2fr]` |
| CTA buttons | Stack (flex-col) | Flex row | Flex row |
| Footer columns | 1 column | 2 columns | `lg:grid-cols-[1.4fr_0.7fr_0.7fr_1fr]` |
| Footer bottom | Stack | Flex row | Flex row |
| Section padding | px-5 (20px) | sm:px-8 (32px) | lg:px-10 (40px) |

### 6.3 Responsive Typography

| Element | Mobile | Tablet | Desktop |
|---|---|---|---|
| Hero H1 | `text-5xl` (48px) | `sm:text-6xl` (60px) | `lg:text-7xl` (72px) |
| Section H2 | `text-4xl` (36px) | `sm:text-5xl` (48px) | `lg:text-6xl` (60px) |
| Features H3 | `text-3xl` (30px) | `text-3xl` | `text-3xl` |
| Body | `text-base` (16px) | `sm:text-lg` (18px) | `text-lg` |
| Hero paragraph | `text-base` (16px) | `sm:text-lg` (18px) | `sm:text-lg` |

### 6.4 Mobile Navigation

The current template hides nav links on `<md:` breakpoint. No mobile hamburger menu is implemented. Rebuild should add a slide-out or dropdown mobile nav.

---

## 7. WordPress Architecture

### 7.1 Template Structure

```
wp-content/themes/orbitdesk/
├── style.css
├── index.php
├── functions.php
├── header.php
├── footer.php
├── single.php
├── page.php
├── 404.php
├── theme.json                     # Block theme settings
├── tailwind.config.js
├── package.json
├── postcss.config.js
├── assets/
│   ├── css/
│   │   ├── tailwind.css           # Tailwind entry
│   │   └── app.css                # Compiled output
│   ├── js/
│   │   ├── app.js                 # Theme JS (nav, scroll reveal, marquee)
│   │   └── animations.js          # IntersectionObserver + marquee
│   └── images/                    # Local fallback images
├── inc/
│   ├── setup.php                  # Theme setup, supports, menus
│   ├── enqueue.php                # Assets
│   ├── acf.php                    # ACF field registration / option pages
│   ├── customizer.php             # Theme customizer options
│   └── helpers.php                # Utility functions
├── template-parts/
│   ├── header/
│   │   ├── nav.php
│   │   └── logo.php
│   ├── sections/
│   │   ├── hero.php
│   │   ├── social-proof.php
│   │   ├── workflow.php
│   │   ├── features.php
│   │   ├── operations-hub.php
│   │   ├── reviews.php
│   │   └── cta.php
│   ├── components/
│   │   ├── badge.php
│   │   ├── button.php
│   │   ├── feature-card.php
│   │   ├── testimonial-card.php
│   │   ├── stat-card.php
│   │   ├── pill-tag.php
│   │   ├── marquee-track.php
│   │   └── newsletter-form.php
│   └── footer/
│       ├── footer-widgets.php
│       └── copyright.php
└── page-templates/
    ├── front-page.php             # Landing page (home)
    ├── page-pricing.php
    ├── page-features.php
    └── page-contact.php
```

### 7.2 Block Theme Compatibility

For full-site editing (FSE), register the theme as a block theme via `theme.json`. Alternatively, use a hybrid approach:

- **`theme.json`** — Define color palette, typography (font sizes, font families), spacing scale, and gradients from the design tokens above
- **Block patterns** — Register each section as a reusable block pattern
- **`template-parts/`** — Use as a fallback for classic theme rendering

### 7.3 ACF Field Structure

#### Option Pages

| Page | Fields |
|---|---|
| Theme Options | Brand color overrides, logo upload, favicon |
| Header Options | CTA link/text, nav menu selection |
| Footer Options | Newsletter form shortcode, footer links repeater, copyright text |

#### Flexible Content — Homepage Sections

| Layout Name | Fields |
|---|---|
| `hero` | badge text, heading, subtext, primary_cta (link), secondary_cta (link), dashboard_cards (repeater) |
| `social_proof` | brands (repeater: name, icon/color) |
| `workflow` | badge, label, heading, images (gallery), steps (repeater: icon, title, description) |
| `features` | badge, heading, subtext, primary_cta, secondary_cta, cards (repeater: icon, title, description) |
| `operations_hub` | badge, heading, left_panel (flexible: stats/chart/channel), right_panel (flexible: content/tags) |
| `reviews` | badge, heading, testimonials (repeater: quote, name, role, company, photo, bg_color), featured_story (group) |
| `cta` | badge, heading, subtext, primary_cta, secondary_cta |

#### Custom Post Types

| CPT | Fields |
|---|---|
| `testimonial` | quote (textarea), name (text), role (text), company (text), photo (image), bg_color (color picker) |
| `team_member` | name, role, photo, bio |
| `case_study` | title, featured_quote, stats (repeater), body content |

### 7.4 Dynamic Sections

Each homepage section should be registered as a **reusable template part** in the block editor. For the classic approach, each section is a `get_template_part()` call with ACF data:

```php
// front-page.php
get_header();
while (have_rows('sections')) : the_row();
  $layout = get_row_layout();
  get_template_part("template-parts/sections/{$layout}");
endwhile;
get_footer();
```

### 7.5 Theme Organization Principles

- Single responsibility template parts — each section lives in its own file
- Component → Section → Page hierarchy
- All text content via ACF (not hardcoded)
- Tailwind utility classes for styling (no custom CSS bloat)
- Animation JS as a single self-contained script
- No jQuery dependency — vanilla JS only

---

## 8. Recommended Tech Stack

### 8.1 WordPress Plugins

| Plugin | Purpose |
|---|---|
| **Advanced Custom Fields (ACF) Pro** | Flexible content sections, repeater fields, option pages |
| **Gravity Forms** or **WPForms** | Newsletter subscription, contact form |
| **Yoast SEO** or **Rank Math** | SEO metadata, XML sitemaps, Open Graph |
| **WP Rocket** or **Flying Press** | Caching, minification, critical CSS |
| **Safe SVG** | SVG upload support for icons |
| **WebP Express** | Automatic image conversion |
| **LiteSpeed Cache** (if on LS server) | Full-page caching, CSS/JS optimization |

### 8.2 Tailwind CSS Setup

```
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init
```

**`tailwind.config.js`** — extend with custom tokens:

```js
module.exports = {
  content: ['./**/*.php'],
  theme: {
    extend: {
      fontFamily: {
        heading: ["'Instrument Serif'", 'Newsreader', 'Georgia', 'serif'],
        body: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
      },
      colors: {
        brand: {
          bg: '#faf8f1',
          'bg-alt': '#fbfbf8',
          sage: '#e9eadf',
          accent: '#9f6b4e',
          'accent-light': '#b98668',
          dark: '#191b22',
          text: '#17191f',
        }
      },
      borderRadius: {
        xl: '0.75rem',
        '2xl': '1rem',
        '3xl': '1.5rem',
      },
      boxShadow: {
        'strong': '0 1px #0000000d, 0 4px 4px #0000001a, 0 10px 10px #00000026, inset 0 -1px #0000001a',
        'subtle': '0 1px 1px #00000008, 0 0 2px #0000001a, 0 5px 5px #00000008',
      },
      keyframes: {
        'marquee': {
          'from': { transform: 'translateX(0)' },
          'to': { transform: 'translateX(-50%)' },
        },
        'reveal': {
          '0%': { opacity: '0', transform: 'translateY(24px)', filter: 'blur(12px)' },
          '100%': { opacity: '1', transform: 'translateY(0)', filter: 'blur(0)' },
        },
      },
      animation: {
        'marquee': 'marquee 34s linear infinite',
        'marquee-slow': 'marquee 48s linear infinite',
      },
    },
  },
  plugins: [],
};
```

### 8.3 Performance Recommendations

| Strategy | Implementation |
|---|---|
| Font loading | Preconnect to Google Fonts, `display=swap`, subset `latin` |
| Image optimization | WebP + responsive srcset via `wp_get_attachment_image()` |
| Lazy loading | Native `loading="lazy"` on all below-fold images |
| CSS delivery | Extract critical CSS, defer non-critical |
| JS delivery | Defer all non-critical JS, inline animation init |
| Icon strategy | SVG sprite or Lucide icons via CDN (as original uses) |
| Caching | Server-level + page cache plugin |

### 8.4 SEO Optimization

| Area | Approach |
|---|---|
| Semantic HTML | `<header>`, `<main>`, `<section>`, `<article>`, `<footer>` landmarks |
| Heading hierarchy | H1 → H2 → H3 per section, single H1 per page |
| Schema markup | `SoftwareApplication`, `Organization`, `WebSite` structured data (mirror the original) |
| Meta | Unique `title` + `description` per page via Yoast/Rank Math |
| Open Graph | Auto-generated from SEO plugin |
| Sitemap | XML sitemap via SEO plugin |
| Performance | Core Web Vitals: LCP < 2.5s, CLS < 0.1, INP < 200ms |
| Accessibility | `aria-label` on nav, focus-visible styles, alt text on all images, color contrast AA |

### 8.5 Recommended Build Tooling

```
# Build pipeline
npm install -D tailwindcss postcss autoprefixer
npm run build   # Compile Tailwind
npm run watch   # Watch for changes

# Animation — no build step needed
# Alpine.js for interactivity (optional):
#   <script src="//unpkg.com/alpinejs" defer></script>

# Icon library (mirror original):
#   Lucide: https://lucide.dev/
```

---

## 9. Rebuild Recommendations

### 9.1 Static vs Dynamic

| Component | Approach | Rationale |
|---|---|---|
| Header logo + nav | Dynamic | `wp_nav_menu()`, custom logo via Customizer |
| Hero content | Dynamic | ACF flexible content — client edits text |
| Hero dashboard cards | **Static** | Complex mock layout — manage as HTML template part with inline images |
| Social proof bar | Dynamic | ACF repeater — add/remove/reorder brand logos |
| Workflow section | Dynamic | ACF fields + gallery for marquee images |
| Feature cards | Dynamic | ACF repeater — icon picker, title, description |
| Operations hub bento | **Static** | Complex grid mock — keep as template with ACF text fields for labels/numbers |
| Testimonials | Dynamic | Custom post type + ACF — each testimonial is a publishable entry |
| Featured story | Dynamic | ACF group — select specific testimonial post |
| CTA block | Dynamic | ACF fields (headline, text, buttons) |
| Footer links | Dynamic | `wp_nav_menu()` for Company + Resources columns |
| Newsletter form | Dynamic | Plugin shortcode (Gravity Forms / WPForms) |

### 9.2 Reusable Sections

These section templates can be reused across different pages with different content:

- **`hero.php`** — Configurable per page (different heading, CTA)
- **`features-grid.php`** — Repeater-based, usable on landing + features page
- **`cta.php`** — Drop-in CTA block, reusable site-wide
- **`testimonials-marquee.php`** — Reusable testimonial display anywhere
- **`social-proof.php`** — Brand trust bar, reusable between sections

### 9.3 Extending for Additional Pages

Beyond the single-page template, add these page templates:

- **Pricing page** (`page-pricing.php`) — 3-tier card grid with monthly/yearly toggle. Use ACF repeater for plan tiers. Include FAQ accordion below.
- **Features page** (`page-features.php`) — Alternating content rows (image left / text right) using ACF flexible content. Each row has icon, heading, description, optional CTA, and image or dashboard mock.
- **Contact page** (`page-contact.php`) — Gravity Forms shortcode embedded in centered `max-w-3xl` container. Optional sidebar with office hours / email.
- **Blog archive** — Standard WordPress loop with card grid styling consistent with feature cards.
- **Single post** — Content area with `max-w-3xl` centered typography, serif headings, sans-serif body.

### 9.4 Color Theme Extensibility

The hardcoded hex values should be replaced with CSS custom properties so color changes propagate globally:

```css
:root {
  --color-bg: #faf8f1;
  --color-brand: #9f6b4e;
  --color-text: #17191f;
  --color-dark: #191b22;
}
```

Register these in `theme.json` for block editor compatibility and expose them via Theme Customizer or ACF Options page so non-developers can adjust.

### 9.5 Development Checklist

- [ ] Set up WordPress locally + Tailwind build pipeline
- [ ] Register theme supports, menus, and scripts in `functions.php`
- [ ] Create `theme.json` with design tokens
- [ ] Build reusable component template parts (badge, button, card, marquee)
- [ ] Build section template parts with ACF flexible content
- [ ] Register ACF fields — option pages, flexible content layouts, repeater fields
- [ ] Implement scroll-reveal animations (vanilla JS — no library needed)
- [ ] Implement marquee animations (CSS only — no JS needed)
- [ ] Implement mobile nav (slide-out drawer with Alpine.js or vanilla JS)
- [ ] Test responsive — mobile, tablet, desktop breakpoints
- [ ] Test performance — Lighthouse, GTmetrix, Web Vitals
- [ ] Test accessibility — keyboard nav, screen reader, contrast
- [ ] SEO setup — Yoast/Rank Math, XML sitemap, Open Graph, schema

---

*Generated from analysis of https://orbitdesk-saas.aura.build/ on 2026-05-27. Design tokens extracted from rendered HTML, CSS bundle, and inline styles. Intended as blueprint for a custom WordPress theme rebuild.*
