---
version: alpha
name: lumina-skin
description: A premium skincare landing page with a dark editorial mood, luminous mint accents, warm skin-toned imagery, and soft luxury contrast.
colors:
  primary: "#F3EFE6"
  secondary: "#C7D0C7"
  tertiary: "#8A958E"
  neutral: "#151C18"
  surface: "#101613"
  on-surface: "#F7F3EC"
  border: "#26312B"
  border-strong: "#34423B"
  accent: "#4ED1A1"
  muted: "#18211C"
  shadow: "#00000066"
  error: "#E86B6B"
typography:
  headline-display:
    fontFamily: Cormorant Garamond
    fontSize: 64px
    fontWeight: 600
    lineHeight: 62px
    letterSpacing: -2.5px
  headline-lg:
    fontFamily: Cormorant Garamond
    fontSize: 46px
    fontWeight: 600
    lineHeight: 48px
    letterSpacing: -1.2px
  headline-md:
    fontFamily: Cormorant Garamond
    fontSize: 34px
    fontWeight: 500
    lineHeight: 38px
    letterSpacing: -0.8px
  headline-sm:
    fontFamily: Cormorant Garamond
    fontSize: 26px
    fontWeight: 500
    lineHeight: 30px
    letterSpacing: -0.3px
  body-lg:
    fontFamily: Inter
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
    letterSpacing: -0.15px
  body-md:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: -0.08px
  body-sm:
    fontFamily: Inter
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: -0.04px
  label-lg:
    fontFamily: Inter
    fontSize: 13px
    fontWeight: 600
    lineHeight: 16px
    letterSpacing: 0.2px
  label-md:
    fontFamily: Inter
    fontSize: 12px
    fontWeight: 600
    lineHeight: 16px
    letterSpacing: 0.4px
  label-sm:
    fontFamily: Inter
    fontSize: 11px
    fontWeight: 500
    lineHeight: 14px
    letterSpacing: 0.4px
  micro:
    fontFamily: Inter
    fontSize: 10px
    fontWeight: 600
    lineHeight: 12px
    letterSpacing: 0.6px
rounded:
  none: 0px
  sm: 8px
  md: 14px
  lg: 20px
  xl: 28px
  full: 9999px
spacing:
  xs: 6px
  sm: 16px
  md: 32px
  lg: 56px
  xl: 120px
  gutter: 24px
  margin: 24px
components:
  button-primary:
    backgroundColor: "{colors.accent}"
    textColor: "{colors.surface}"
    typography: "{typography.label-md}"
    rounded: "{rounded.full}"
    padding: "10px 18px"
    height: "44px"
  button-primary-hover:
    backgroundColor: "#39C891"
    textColor: "{colors.surface}"
    typography: "{typography.label-md}"
    rounded: "{rounded.full}"
    padding: "10px 18px"
    height: "44px"
  button-secondary:
    backgroundColor: "transparent"
    textColor: "{colors.on-surface}"
    typography: "{typography.label-md}"
    rounded: "{rounded.full}"
    padding: "10px 18px"
    height: "44px"
    border: "1px solid {colors.border}"
  button-tertiary:
    backgroundColor: "transparent"
    textColor: "{colors.secondary}"
    typography: "{typography.label-sm}"
    rounded: "{rounded.none}"
    padding: "0px"
    height: "auto"
  card:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.on-surface}"
    rounded: "{rounded.lg}"
    padding: "20px"
    border: "1px solid {colors.border}"
    shadow: "0 18px 40px {colors.shadow}"
  input:
    backgroundColor: "{colors.muted}"
    textColor: "{colors.on-surface}"
    rounded: "{rounded.md}"
    padding: "14px 16px"
    border: "1px solid {colors.border}"
  chip:
    backgroundColor: "{colors.muted}"
    textColor: "{colors.secondary}"
    typography: "{typography.label-sm}"
    rounded: "{rounded.full}"
    padding: "6px 12px"
  badge:
    backgroundColor: "{colors.accent}"
    textColor: "{colors.surface}"
    typography: "{typography.micro}"
    rounded: "{rounded.full}"
    padding: "4px 8px"
---

# lumina-skin

## Overview
Lumina-skin terasa seperti landing page skincare premium yang sengaja dibuat tenang, intim, dan sedikit editorial. Nuansanya lebih mendekati luxury wellness daripada e-commerce biasa: latar gelap, tipografi serif yang tegas, aksen mint yang menyala halus, dan fotografi kulit bernuansa hangat membuat sistem ini terasa meyakinkan sekaligus sensorial. Elemen CTA dan kartu konten tetap modern, tetapi tidak agresif. :contentReference[oaicite:1]{index=1}

## Colors
- **Primary (#F3EFE6):** Warna teks utama yang lembut dan hangat, cocok di atas latar gelap.
- **Secondary (#C7D0C7):** Untuk teks pendukung, metadata, dan navigasi sekunder.
- **Tertiary (#8A958E):** Dipakai untuk label halus dan copy yang tidak perlu dominan.
- **Neutral (#151C18):** Fill gelap untuk chip, panel kecil, dan komponen low-emphasis.
- **Surface (#101613):** Warna permukaan utama; memberi kesan deep forest/charcoal yang premium.
- **On-surface (#F7F3EC):** Kontras utama untuk headline dan body text.
- **Border / Border-Strong:** Garis pemisah yang tipis dan rendah kontras agar UI tetap elegan.
- **Accent (#4ED1A1):** Hijau mint/seafoam yang menjadi identitas visual paling menonjol, dipakai untuk CTA dan highlight.
- **Muted (#18211C):** Background tonal untuk hover state dan panel ringan.
- **Error (#E86B6B):** Merah yang cukup jelas tapi tidak merusak mood tenang sistem.

## Typography
Tipografinya terasa editorial dengan serif berkontras tinggi untuk headline dan sans-serif bersih untuk isi. Kombinasi ini memberi rasa mewah, terkurasi, dan sangat cocok untuk brand skincare yang ingin terdengar lembut namun kredibel.

`headline-display` dan `headline-lg` dipakai untuk hero copy dan statement utama. Bentuk hurufnya tegas, rapat, dan dramatis.

`headline-md` dan `headline-sm` cocok untuk subjudul section, kartu fitur, dan heading pendukung. Tetap elegan, tetapi lebih ringkas.

`body-lg`, `body-md`, dan `body-sm` menjaga keterbacaan pada deskripsi produk, benefit, dan microcopy. Inter membuat sisi fungsionalnya modern dan bersih.

`label-lg`, `label-md`, `label-sm`, dan `micro` ideal untuk CTA, pill navigation, status badge, dan metadata. Label terasa refined, bukan teknis.

## Layout
Layout-nya cenderung landing-page driven dengan hero besar di atas, diikuti blok konten yang dipisah oleh ruang napas yang cukup longgar. Struktur visual mengandalkan kontras antara area gelap, kartu produk, dan fotografi kulit yang warm untuk mempertahankan ritme visual.

Grid terasa rapi dan modular. Outer padding harus lega, section spacing besar, dan konten utama tetap center-biased agar narasi brand terasa fokus.

## Elevation & Depth
Depth dibangun lewat permukaan gelap yang layered, border tipis, dan shadow lembut. Tidak ada efek yang terlalu berat atau glossy berlebihan. Kesan yang muncul lebih dekat ke “soft premium” daripada “techy glossy”.

Card dan panel harus terlihat sedikit terangkat, tetapi tetap kalem. Shadows sebaiknya pendek, diffuse, dan low-opacity.

## Shapes
Bahasa bentuknya lembut dan modern. Tombol dan chip memakai radius penuh supaya terasa ramah dan high-end, sedangkan kartu memakai radius medium-large agar konten tetap rapi tanpa terasa kaku.

Secara keseluruhan, bentuk-bentuknya mendukung impresi calm luxury: rounded enough to be approachable, but not playful.

## Components
`button-primary` adalah CTA utama dan harus memakai accent mint dengan teks terang. Gunakan untuk aksi utama seperti shop, explore, atau claim.

`button-secondary` cocok untuk aksi pendamping. Bentuknya transparan dengan border halus agar tidak menyaingi CTA utama.

`button-tertiary` dipakai untuk link ringan, navigation micro-action, atau aksi sekunder yang tidak perlu menonjol.

`card` sebaiknya memakai surface gelap, border tipis, radius besar, dan shadow sangat halus. Konten kartu bisa berupa ingredients, feature, testimonial, atau product story.

`input` harus tampil seperti field yang tertanam di permukaan gelap, bukan seperti form enterprise. Fokusnya pada cleanliness dan low-friction interaction.

`chip` dipakai untuk tag, filter, atau category pills. `badge` dipakai untuk highlight kecil seperti best seller, new, atau sensitive-skin cue.

## Do's and Don'ts
- Do pertahankan mood gelap, tenang, dan editorial.
- Do gunakan aksen mint secara hemat agar terasa premium.
- Do pakai serif besar untuk headline utama.
- Do jaga foto produk dan kulit tetap warm dan natural.
- Don’t memakai warna cerah yang terlalu ramai.
- Don’t membuat tombol terlalu berat atau terlalu besar.
- Don’t mengisi layout dengan banyak border keras atau elemen teknis yang dingin.
- Don’t merusak keseimbangan luxury dengan komponen yang terlalu playful.