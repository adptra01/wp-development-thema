# Blueprint Akar Solution

**Platform Jasa Digital Berbasis WordPress — Jambi, Indonesia**

| | |
|---|---|
| **Versi Dokumen** | 1.0 |
| **Tanggal** | Juni 2026 |
| **Status** | In Progress — Phase 1 |
| **Domain** | akar-solution.page.gd |
| **Brand** | "Akar Digital untuk Bisnis & Pendidikan di Jambi" |
| **Kontak** | WA: 0859-5157-2182 |

---

## Daftar Isi

1. [Visi & Misi](#1-visi--misi)
2. [Arsitektur Platform](#2-arsitektur-platform)
3. [Segmentasi & Target Pasar](#3-segmentasi--target-pasar)
4. [Layanan & Pricing](#4-layanan--pricing)
5. [Kompetitor & Positioning](#5-kompetitor--positioning)
6. [Roadmap Fase](#6-roadmap-fase)
7. [Website — Spesifikasi Teknis](#7-website--spesifikasi-teknis)
8. [Strategi Go-to-Market](#8-strategi-go-to-market)
9. [KPI & Metrik Keberhasilan](#9-kpi--metrik-keberhasilan)
10. [Keamanan & Risiko](#10-keamanan--risiko)
11. [Lampiran](#11-lampiran)

---

## 1. Visi & Misi

### Visi

> Menjadi mitra digital utama untuk UMKM dan mahasiswa di Jambi dan Sumatera melalui solusi teknologi yang terjangkau, profesional, dan berkelanjutan.

### Misi

1. Menyediakan website dan aplikasi custom dengan standar profesional untuk bisnis lokal Jambi
2. Memberikan pendampingan akademik berkualitas untuk mahasiswa informatika
3. Membangun ekosistem digital yang mendukung pertumbuhan ekonomi lokal
4. Menjaga transparansi harga dan kualitas sebagai fondasi kepercayaan

### Nilai Inti

- **Lokal:** Berpijak di Jambi, mengerti kebutuhan lokal
- **Transparan:** Harga jelas, proses terbuka, tidak ada biaya tersembunyi
- **Pendampingan:** Tidak hanya deliver produk — kami mendampingi setelahnya
- **Kualitas:** Standar profesional tanpa harga selangit

---

## 2. Arsitektur Platform

```
┌─────────────────────────────────────────────────────────┐
│              AKAR SOLUTION (WordPress)                    │
│              Marketing, Blog, Konten, SEO                │
│              Domain: akar-solution.page.gd               │
├─────────────────────────────────────────────────────────┤
│                                                          │
│  DIVISI BISNIS                   DIVISI PENDIDIKAN       │
│  ├ Website UMKM                  ├ Mentoring Skripsi IT  │
│  ├ Website Bisnis                ├ Code Review           │
│  ├ Aplikasi Custom               ├ Bantuan Deployment    │
│  └ Maintenance                   └ Full Pendampingan     │
│                                                          │
└─────────────────────────────────────────────────────────┘
         │                              │
         ▼                              ▼
┌──────────────────┐    ┌────────────────────────────┐
│ Proyek Client    │    │ Konsultasi Tatap Muka /      │
│ (Server client,  │    │ Online (Google Meet/WA/Zoom) │
│  custom domain)  │    │                              │
└──────────────────┘    └────────────────────────────┘
```

### Tech Stack

| Komponen | Teknologi | Status |
|----------|----------|--------|
| CMS | WordPress 7.0 | ✅ Aktif |
| Tema | Hello Elementor | 🔲 Install |
| Page Builder | Elementor Free | 🔲 Install |
| SEO | Yoast SEO | ✅ Aktif |
| Cache | Redis Object Cache | ✅ Aktif |
| Security | Wordfence Free | 🔲 Install |
| Backup | UpdraftPlus | 🔲 Install |
| Analytics | Google Site Kit | 🔲 Install |
| Custom API | Custom API Endpoint v1.0 | ✅ Aktif (headless-ready) |
| Hosting | InfinityFree | ✅ Aktif |

---

## 3. Segmentasi & Target Pasar

### Segmen Primer: UMKM Jambi

| Profil | Detail |
|--------|--------|
| **Demografi** | Pemilik bisnis kecil-menengah di Jambi dan sekitarnya |
| **Industri Fokus** | Travel, Pelatihan/Kursus, Kesehatan (Klinik/Apotek) |
| **Budget** | Rp 1.500.000 — Rp 7.500.000 |
| **Pain Point** | Belum punya website / website jelek / hanya pakai Instagram |
| **Channel Jangkauan** | Instagram, Google Search, Referral, Kunjungan Langsung |
| **Messaging** | "Website profesional, urusan langsung di Jambi — tidak perlu ke Jakarta." |

### Segmen Sekunder: Mahasiswa Informatika Jambi

| Profil | Detail |
|--------|--------|
| **Demografi** | Mahasiswa IT Universitas Jambi, UIN STS, STIKOM, dll. |
| **Kebutuhan** | Bantuan teknis skripsi: arsitektur, coding, debugging, deployment |
| **Budget** | Rp 150.000 — Rp 750.000 |
| **Pain Point** | Dosen pembimbing sulit ditemui, kurang pengalaman teknis, deadline |
| **Channel Jangkauan** | Instagram, Grup WhatsApp Kampus, Referral |
| **Messaging** | "Pendampingan skripsi IT yang terpercaya — bukan joki, bukan janji kosong." |

### Segmen Tersier: Bisnis Mid-Market Sumatera

| Profil | Detail |
|--------|--------|
| **Demografi** | Perusahaan kecil-menengah di Sumatera |
| **Kebutuhan** | Aplikasi custom, sistem informasi, web app |
| **Budget** | Rp 8.000.000 — Rp 50.000.000 |
| **Channel** | LinkedIn, Referral, Content Marketing |
| **Target Fase** | Phase 3 (setelah portfolio UMKM kuat) |

---

## 4. Layanan & Pricing

### 4.1 Divisi Bisnis

| Paket | Harga | Isi | Target |
|-------|-------|-----|--------|
| **Starter** | Rp 1.500.000 | 5 halaman, mobile responsive, form kontak, 2x revisi | UMKM mikro |
| **Bisnis** | Rp 3.500.000 | 10 halaman, blog + SEO dasar, Google Maps, WA button, 4x revisi | UMKM menengah |
| **Pro** | Rp 7.500.000 | Unlimited halaman, desain custom, SEO advanced, speed optimization, training 1 jam, maintenance 1 bulan gratis | Bisnis established |
| **Aplikasi Custom** | Mulai Rp 8.000.000 | Web app sesuai kebutuhan bisnis, custom development | Bisnis mid-market |
| **Maintenance** | Rp 150.000/bln | Update konten minor, backup, uptime monitoring | Semua klien existing |
| **Maintenance Pro** | Rp 350.000/bln | Basic + update plugin/theme, security scan, laporan bulanan | Bisnis yang butuh aktif maintenance |
| **Maintenance Full** | Rp 750.000/bln | Standard + revisi desain minor, SEO monitoring, support prioritas | Bisnis established |

### 4.2 Divisi Pendidikan

| Layanan | Harga | Durasi | Isi |
|---------|-------|--------|-----|
| **Mentoring Skripsi IT** | Rp 200.000/sesi | 60-90 menit | Arsitektur sistem, database schema, system design, best practices |
| **Code Review** | Rp 150.000/sesi | 45-60 menit | Review kode, feedback, rekomendasi perbaikan, best practices |
| **Bantuan Deployment** | Rp 350.000 | One-time | Setup hosting/VPS, domain, SSL, CI/CD dasar |
| **Full Pendampingan** | Rp 750.000 | 4 sesi | Semua di atas — mentoring lengkap dari arsitektur sampai deployment |

---

## 5. Kompetitor & Positioning

### Kompetitor di Jambi

| Kompetitor | Segmen | Kelemahan |
|-----------|--------|-----------|
| Swarnatech | Pemerintah, Korporat | Hanya enterprise, tidak UMKM |
| Newus Technology | Enterprise, Nasional | Tidak fokus Jambi |
| WebNesia | UMKM | Kompetitor langsung — kita lawan dengan transparansi + spesialisasi |
| Codeinspira | UX/UI Focus | Kita bisa tawarkan desain bagus + maintenance |
| Hanadesain | 8+ tahun, Marketing | Kita lawan dengan spesialisasi vertikal + generasi baru |
| Freelancer/Word-of-mouth | Semua segmen | Kita lawan dengan brand + profesionalitas + garansi |

### Positioning Statement

> **Untuk UMKM dan bisnis di Jambi yang ingin go digital, Akar Solution adalah mitra digital lokal yang menawarkan website dan aplikasi custom dengan harga transparan, spesialisasi industri, dan pendampingan berkelanjutan — berbeda dari builder template yang generik, freelancer yang tidak konsisten, dan agency yang tidak terjangkau.**

### Diferensiator Utama

| Diferensiator | Kenapa Powerful |
|---------------|----------------|
| **Lokal Jambi** | Bisa ketemu langsung, paham konteks lokal, support dekat |
| **Harga Transparan** | Semua harga dipublikasikan — tidak ada "hubungi kami untuk penawaran" |
| **Spesialis Vertikal** | Fokus Travel, Pelatihan, Kesehatan — bukan generalis |
| **Dual Division** | Bisnis + Pendidikan — saling menguatkan secara kredibilitas |
| **Pendampingan** | Tidak hilang setelah proyek selesai — maintenance + support |
| **Content Marketing** | Blog edukasi — satu-satunya yang mengisi konten lokal Jambi |

---

## 6. Roadmap Fase

### Phase 1: Fondasi & Klien Pertama

**Target:** 3 klien UMKM, 1 klien mahasiswa, brand dikenal di Jambi

**Timeline:** Bulan 1-2

| ID | Task | Status | Target Tanggal |
|----|------|--------|----------------|
| P1.01 | Install & konfigurasi WordPress (tema, plugin, settings) | 🔲 | Minggu 1 |
| P1.02 | Build 6 halaman website Akar Solution | 🔲 | Minggu 1-2 |
| P1.03 | SEO setup: meta, keyword, Google Business, Search Console | 🔲 | Minggu 2 |
| P1.04 | Tulis 3 artikel blog (SEO Jambi) | 🔲 | Minggu 2 |
| P1.05 | Portfolio showcase — 3 project dipajang | 🔲 | Minggu 2 |
| P1.06 | Instagram Akar Solution aktif — 3 post/minggu | 🔲 | Minggu 2+ |
| P1.07 | Jemput bola: kontak 15 travel agent Jambi via WA | 🔲 | Minggu 3 |
| P1.08 | Dapatkan klien website pertama | 🔲 | Minggu 3-4 |
| P1.09 | Dapatkan klien website kedua | 🔲 | Minggu 4-6 |
| P1.10 | Dapatkan klien website ketiga | 🔲 | Minggu 6-8 |
| P1.11 | Dapatkan 1 klien mentoring skripsi IT | 🔲 | Minggu 4-8 |
| P1.12 | Kumpulkan 3 testimoni klien | 🔲 | Minggu 8 |
| P1.13 | Hadiri 1 event bisnis Jambi | 🔲 | Bulan 2 |
| P1.14 | Google Maps review: 3+ | 🔲 | Bulan 2 |

**KPI Phase 1:**
- [ ] 3 klien UMKM didapat
- [ ] 1 klien mahasiswa didapat
- [ ] Website Akar Solution ranking untuk "jasa website Jambi"
- [ ] 3 artikel blog terbit
- [ ] Revenue: Rp 4.5jt — 15jt

---

### Phase 2: Skala Lokal & Recurring Revenue

**Target:** 10-15 klien UMKM, 3-5 klien mahasiswa, recurring revenue stabil

**Timeline:** Bulan 3-6

| ID | Task | Status | Target Tanggal |
|----|------|--------|----------------|
| P2.01 | 5 klien maintenance aktif (recurring revenue) | 🔲 | Bulan 3-4 |
| P2.02 | 10 klien website total | 🔲 | Bulan 4-5 |
| P2.03 | Ekspansi ke industri kedua: Pelatihan/Kursus | 🔲 | Bulan 4 |
| P2.04 | Ekspansi ke industri ketiga: Kesehatan | 🔲 | Bulan 5 |
| P2.05 | 5 artikel blog total — SEO mulai menghasilkan leads organik | 🔲 | Bulan 4 |
| P2.06 | Instagram: 500+ followers, engagement aktif | 🔲 | Bulan 5 |
| P2.07 | Domain upgrade ke .id atau .com | 🔲 | Bulan 5 |
| P2.08 | Setup WooCommerce untuk jual template website | 🔲 | Bulan 5-6 |
| P2.09 | 3 template website siap dijual (self-service) | 🔲 | Bulan 6 |
| P2.10 | Hadiri 3 event bisnis Jambi | 🔲 | Bulan 6 |

**KPI Phase 2:**
- [ ] 10-15 klien UMKM total
- [ ] 5 klien maintenance aktif → Rp 750rb-3.5jt/bln recurring
- [ ] 3 template website siap jual
- [ ] Leads organik dari Google/SEO
- [ ] Revenue: Rp 15jt — 50jt (akumulasi)

---

### Phase 3: Ekspansi Regional & SaaS Sewa Aplikasi

**Target:** Dominasi Jambi + ekspansi Sumatera, 2-3 aplikasi sewaan

**Timeline:** Bulan 7-12

| ID | Task | Status | Target Tanggal |
|----|------|--------|----------------|
| P3.01 | Ekspansi SEO: target keyword Palembang, Lampung, Padang | 🔲 | Bulan 7 |
| P3.02 | 2-3 proyek aplikasi custom untuk bisnis mid-market | 🔲 | Bulan 7-9 |
| P3.03 | Bangun aplikasi sewaan #1 (contoh: travel booking system) | 🔲 | Bulan 8-10 |
| P3.04 | Launch aplikasi sewaan #1 — recurring SaaS revenue | 🔲 | Bulan 10 |
| P3.05 | 20+ klien UMKM total | 🔲 | Bulan 9 |
| P3.06 | 10+ klien maintenance aktif | 🔲 | Bulan 10 |
| P3.07 | Evaluasi: segmen mahasiswa — diteruskan atau ditutup? | 🔲 | Bulan 10 |
| P3.08 | Hire freelancer pertama (jika workload sudah tinggi) | 🔲 | Bulan 10-12 |

**KPI Phase 3:**
- [ ] 20+ klien total
- [ ] 1 aplikasi sewaan live → recurring SaaS revenue
- [ ] 10+ klien maintenance
- [ ] Ekspansi ke 2 kota Sumatera
- [ ] Revenue: Rp 50jt — 150jt (akumulasi)

---

## 7. Website — Spesifikasi Teknis

### Halaman

| Halaman | Slug | Editor | Konten Kunci |
|---------|------|--------|-------------|
| Home | `/` | Elementor | Hero, 2 Divisi, Why Us, Portfolio Highlight, CTA |
| Layanan | `/services` | Elementor | 8 kartu layanan (4 Bisnis + 4 Pendidikan) |
| Harga | `/pricing` | Elementor | 3 tier pricing + tabel pendidikan |
| Portfolio | `/portfolio` | Elementor | Grid project dari framer.media |
| Tentang | `/about` | Elementor | Cerita, visi-misi, kenapa Jambi |
| Kontak | `/contact` | Elementor | Form + info kontak + WA |
| Blog | `/blog` | WordPress | Standar blog — konten SEO |

### Design System

**Warna:**
| Nama | Hex | Penggunaan |
|------|-----|-----------|
| Hijau Tua | `#0F3D2E` | Header, footer, CTA, section bg gelap |
| Emas | `#C8963E` | Aksen, button, border, icon highlight |
| Putih | `#FFFFFF` | Background utama, card |
| Abu Tua | `#333333` | Text body |
| Hijau Muda | `#E8F5E9` | Card background alternatif |

**Tipografi:**
- Headings: Playfair Display (Google Fonts)
- Body: Inter (Google Fonts)

### Navigation

```
[Logo Akar Solution]    Layanan ▾ | Harga | Portfolio | Tentang | [💬 Kontak]
                         ├ Bisnis
                         └ Pendidikan
```

### Global Elements

- **Floating WhatsApp:** Pojok kanan bawah, hijau dengan ikon WA
- **Header:** Sticky, putih dengan shadow, logo + nav
- **Footer:** Hijau tua, logo + tagline + link + copyright
- **Form Kontak:** Nama + Email + Subjek + Pesan → kirim via WP mail

---

## 8. Strategi Go-to-Market

### Channel Prioritas (Jambi-First)

| Rank | Channel | Fokus | Fase |
|------|---------|-------|------|
| 1 | **Google SEO Lokal** | "jasa website Jambi", "pembuatan website Jambi" | Phase 1 |
| 2 | **Google Business Profile** | Maps listing, review, foto | Phase 1 |
| 3 | **Jemput Bola (WA + Kunjungan)** | Kontak 15-20 bisnis/bulan via WA personal | Phase 1-2 |
| 4 | **Instagram** | Posting portfolio, tips, behind-the-scene | Phase 1-2 |
| 5 | **Blog / Content Marketing** | Artikel edukasi SEO-focused | Phase 1+ |
| 6 | **Event & Komunitas Bisnis** | Kadin Jambi, HIPMI, IWAPI | Phase 2 |
| 7 | **Referral** | Insentif: diskon maintenance untuk referral | Phase 2+ |
| 8 | **LinkedIn** | Untuk segmen bisnis mid-market | Phase 3 |

### Sales Funnel — UMKM

```
AWARENESS:  Google/Instagram/WA        1.000 viewers/bulan
    ↓ 5%
INTEREST:   Kunjungi website           50 pengunjung
    ↓ 10%
INQUIRY:    WA / form kontak           5 inquiry
    ↓ 40%
CLIENT:     Deal + project start       2 clients/bulan
```

**Proyeksi:** 2 klien/bulan × rata-rata Rp 3.5jt = **Rp 7jt/bulan** di akhir Phase 1.

---

## 9. KPI & Metrik Keberhasilan

### Metrik Utama (Dilacak Bulanan)

| Metrik | Target Phase 1 | Target Phase 2 | Target Phase 3 |
|--------|---------------|---------------|---------------|
| Klien UMKM baru/bulan | 2 | 3-4 | 5 |
| Revenue/bulan | Rp 5-7jt | Rp 10-15jt | Rp 20-30jt |
| Klien maintenance | 0-2 | 5-8 | 10+ |
| MRR (Monthly Recurring Revenue) | Rp 0-300rb | Rp 750rb-2.8jt | Rp 1.5-7.5jt |
| Leads dari Google/bulan | 0-2 | 5-10 | 15+ |
| Website visitors/bulan | 50-100 | 300-500 | 1.000+ |
| Konversi inquiry → klien | 30-40% | 40%+ | 40%+ |
| Customer satisfaction | 4.5/5 | 4.5/5 | 4.5/5 |

### Metrik SEO

| Keyword Target | Target Ranking | Fase |
|---------------|---------------|------|
| "jasa website Jambi" | #1-3 | Phase 1 |
| "pembuatan website Jambi" | #1-3 | Phase 1 |
| "harga website UMKM Jambi" | #1-3 | Phase 2 |
| "jasa website Palembang" | #1-3 | Phase 3 |
| "aplikasi custom Indonesia" | Top 10 | Phase 3 |

### Tools Tracking

| Tool | Fungsi | Biaya |
|------|--------|-------|
| Google Analytics (via Site Kit) | Traffic, user behavior | Gratis |
| Google Search Console | Keyword ranking, CTR | Gratis |
| Google Business Profile Insights | Maps views, clicks, calls | Gratis |
| Yoast SEO | On-page SEO scoring | Gratis (sudah terpasang) |

---

## 10. Keamanan & Risiko

### Keamanan

| Aspek | Implementasi | Status |
|-------|-------------|--------|
| SSL | InfinityFree free SSL | ✅ |
| Backup otomatis | UpdraftPlus → Google Drive | 🔲 |
| Brute force protection | Wordfence Free — login limit | 🔲 |
| Plugin/theme update | Cek & update setiap 2 minggu | 🔲 |
| Privacy policy | Halaman /privacy | 🔲 |
| Data client | Form data disimpan aman, tidak dibagikan | Kebijakan internal |

### Risiko & Mitigasi

| Risiko | Probability | Impact | Mitigasi |
|--------|-----------|--------|---------|
| Tidak dapat klien di bulan 1 | Sedang | Tinggi | Jemput bola lebih agresif, tawarkan harga spesial klien pertama |
| Website klien tidak sesuai ekspektasi | Rendah | Tinggi | Brief detail di awal, 2-4x revisi included, komunikasi rutin |
| Kompetitor tiru model transparansi | Sedang | Rendah | First-mover advantage, bangun trust lebih dulu |
| Domain .page.gd kurang profesional | Tinggi | Sedang | Upgrade ke .id/.com di Phase 2 |
| Burnout — semua dikerjakan sendiri | Sedang | Tinggi | Batasi 3-4 klien/bulan, jangan overpromise |
| Segmen mahasiswa rusak reputasi | Rendah | Sedang | Branding jelas "mentoring" bukan "joki", proses transparan |

---

## 11. Lampiran

### A. Postman API Collection

File: `Custom-API-Endpoint.postman_collection.json`

Digunakan untuk testing dan integrasi eksternal via Custom API Endpoint plugin.

### B. API Documentation

File: `wp-content/plugins/custom-api-endpoint/API-DOCUMENTATION.md`

Dokumentasi lengkap 7 endpoint, autentikasi, error codes, rate limiting.

### C. Competitive Analysis

Terdokumentasi di diskusi strategic planning (session Juni 2026). Ringkasan di Section 5 dokumen ini.

### D. Design Tokens

```
Warna:
  --ak-hijau-tua: #0F3D2E
  --ak-emas: #C8963E
  --ak-putih: #FFFFFF
  --ak-abu-tua: #333333
  --ak-hijau-muda: #E8F5E9

Tipografi:
  --ak-font-heading: 'Playfair Display', serif
  --ak-font-body: 'Inter', sans-serif

Spacing:
  --ak-section-padding: 80px 0
  --ak-card-padding: 30px
  --ak-container-max: 1200px

Border Radius:
  --ak-radius-sm: 6px
  --ak-radius-md: 12px
  --ak-radius-lg: 20px
```

### E. Checklist Master — Semua Fase

#### Phase 1 Checklist

- [ ] Install & konfigurasi WordPress (tema, plugin, settings)
- [ ] Build 6 halaman website Akar Solution
- [ ] SEO setup: meta, keyword, Google Business, Search Console
- [ ] Tulis 3 artikel blog (SEO Jambi)
- [ ] Portfolio showcase — 3 project dipajang
- [ ] Instagram Akar Solution aktif — 3 post/minggu
- [ ] Jemput bola: kontak 15 travel agent Jambi via WA
- [ ] Dapatkan klien website pertama
- [ ] Dapatkan klien website kedua
- [ ] Dapatkan klien website ketiga
- [ ] Dapatkan 1 klien mentoring skripsi IT
- [ ] Kumpulkan 3 testimoni klien
- [ ] Hadiri 1 event bisnis Jambi
- [ ] Google Maps review: 3+

#### Phase 2 Checklist

- [ ] 5 klien maintenance aktif
- [ ] 10 klien website total
- [ ] Ekspansi ke industri Pelatihan/Kursus
- [ ] Ekspansi ke industri Kesehatan
- [ ] 5 artikel blog total
- [ ] Instagram: 500+ followers
- [ ] Domain upgrade ke .id atau .com
- [ ] Setup WooCommerce untuk jual template website
- [ ] 3 template website siap dijual
- [ ] Hadiri 3 event bisnis Jambi

#### Phase 3 Checklist

- [ ] Ekspansi SEO: target keyword Palembang, Lampung, Padang
- [ ] 2-3 proyek aplikasi custom untuk bisnis mid-market
- [ ] Bangun aplikasi sewaan #1
- [ ] Launch aplikasi sewaan #1
- [ ] 20+ klien UMKM total
- [ ] 10+ klien maintenance aktif
- [ ] Evaluasi segmen mahasiswa
- [ ] Hire freelancer pertama

---

*Dokumen ini adalah living document — diperbarui setiap akhir fase dengan actual progress, lessons learned, dan penyesuaian strategi.*
