<?php
/**
 * Template Name: Detail Layanan
 * Akar Solution — Individual service detail page
 * Maps page slug to service config, renders 8 unique sections.
 *
 * @package HelloElementor
 */
get_header();
get_template_part( 'template-parts/ak-chrome-head' );

global $post;
$slug = $post->post_name;

/* ── SERVICE CONFIGURATIONS ── */
$services = [

  /* ──────────────── 1. WEBSITE UMKM ──────────────── */
  'website-umkm' => [
    'tag'        => 'Website UMKM',
    'icon'       => 'globe',
    'illustration' => get_stylesheet_directory_uri() . '/assets/illustrations/streamline/about-our-team-2.png',
    'h1'         => 'Website profesional untuk UMKM <em class="ak-underline" data-draw>Jambi.</em>',
    'hero_sub'   => 'Company profile 5–10 halaman, mobile responsive, SEO dasar — domain .com + hosting 1 tahun sudah termasuk. Tanpa ribet, tanpa biaya tersembunyi.',
    'price_label'=> 'Mulai dari Rp 1,5 jt',
    'problems'   => [
      ['title' => 'Pelanggan cari di Google, bisnis Anda tidak muncul',    'desc' => 'Tanpa website, bisnis Anda invisible di Google. Pelanggan potensial yang mencari "agen travel Jambi" atau "klinik gigi Jambi" langsung beralih ke kompetitor.'],
      ['title' => 'Sosial media tidak cukup sebagai "rumah" online',       'desc' => 'Instagram dan Facebook bagus untuk visibility, tapi tidak mengontrol brand experience. Algoritma berubah, reach menurun, dan Anda tidak punya data pelanggan.'],
      ['title' => 'Freelancer murah hasilnya tidak profesional',            'desc' => 'Website asal jadi, tidak ada maintenance, source code tidak diberikan. Saat error, tidak ada yang bertanggung jawab.'],
    ],
    'stat'       => ['number' => '73%', 'desc' => 'UMKM Indonesia belum punya website resmi (BPS 2024)'],
    'features'   => [
      ['icon' => 'globe',  'title' => 'Desain Custom',              'desc' => 'Bukan template pasaran. Desain sesuai brand identity bisnis Anda — warna, tipografi, dan layout yang mencerminkan character usaha.'],
      ['icon' => 'search-code', 'title' => 'SEO On-Page',           'desc' => 'Meta title, description, sitemap, robots.txt, dan struktur heading yang benar. Website Anda siap ditemukan di Google sejak hari pertama.'],
      ['icon' => 'code',   'title' => 'Mobile Responsive',          'desc' => 'Tampil sempurna di HP, tablet, dan desktop. Lebih dari 80% pengunjung UMKM datang dari perangkat mobile.'],
      ['icon' => 'message','title' => 'Integrasi WhatsApp',          'desc' => 'Form kontak yang langsung mengarah ke WhatsApp Anda. Pengunjung bisa chat tanpa perlu copy-paste nomor.'],
      ['icon' => 'wrench', 'title' => 'Hosting + Domain 1 Tahun',   'desc' => 'Sudah termasuk domain .com dan hosting cepat. Tidak perlu pusing teknis — kami yang urus.'],
      ['icon' => 'target', 'title' => 'Garansi Revisi 2 Minggu',    'desc' => 'Setelah website live, Anda bisa minta revisi gratis selama 2 minggu. Sampai Anda puas.'],
    ],
    'comparison' => [
      'headers' => ['Fitur', 'Website UMKM Kami', 'Template Marketplace', 'Freelancer Murah'],
      'rows'    => [
        ['Desain',          '✓ Custom',     '✗ Generic',    '✗ Asal jadi'],
        ['SEO Setup',       '✓ Lengkap',    '✗ Manual',     '✗ Tidak ada'],
        ['Mobile Responsive','✓ Ya',        '✓ Biasanya',   '? Tidak konsisten'],
        ['Source Code',     '✓ Milik Anda', '✗ License',    '? Tidak pasti'],
        ['Maintenance',     '✓ Ada',        '✗ Tidak ada',  '✗ Tidak ada'],
        ['Revisi',          '✓ 2 minggu',   '✗ Terbatas',   '✗ Setelah deal'],
        ['Harga',           'Rp 1,5 jt',   'Rp 500K–1jt',  'Rp 300K–800K'],
      ],
    ],
    'process'    => [
      ['step' => '01', 'title' => 'Brief & Diskusi',     'desc' => 'Kita ngobrol 15–30 menit via WhatsApp atau ketemu langsung. Anda ceritakan bisnisnya, target marketnya, dan website seperti apa yang diinginkan.'],
      ['step' => '02', 'title' => 'Mockup & Desain',     'desc' => 'Dalam 3–5 hari kerja, Anda terima draft desain. Review, kasih feedback, dan kami perbaiki sampai cocok.'],
      ['step' => '03', 'title' => 'Development',          'desc' => 'Website dibangun dengan HTML/CSS modern. Anda bisa pantau progress kapan saja.'],
      ['step' => '04', 'title' => 'Launch & Support',     'desc' => 'Website live, training cara edit konten, dan garansi revisi 2 minggu. Kami dampingi sampai Anda nyaman.'],
    ],
    'case_study' => [
      'title'  => 'Travel Agent Jambi — dari Tidak Ada ke Page 1 Google',
      'before' => 'Tidak punya website. Pelanggan hanya datang dari rekomendasi mulut ke mulut. Ketika dicari di Google, yang muncul kompetitor dari Jakarta.',
      'after'  => 'Website 7 halaman dengan landing page SEO-optimized, integrasi WhatsApp, dan Google My Business. Muncul di Google Maps untuk pencarian "agen travel Jambi".',
      'result' => '3× inquiry dalam 2 bulan pertama setelah launch',
    ],
    'testimonial'=> [
      'quote'  => 'Saya tidak paham soal website, tapi tim Akar Solution yang jelasin dari awal. Sekarang pelanggan baru sering bilang "saya lihat di Google" — itu yang paling bikin senang.',
      'name'   => 'Rina Sari',
      'role'   => 'Pemilik',
      'company' => 'Rina Tour & Travel',
    ],
    'faq'        => [
      ['q' => 'Berapa lama website selesai?',                          'a' => 'Untuk paket Website UMKM, biasanya 1–2 minggu kerja dari tanggal deal. Waktu bisa lebih cepat atau lebih lambat tergantung kompleksitas desain dan kesiapan materi dari Anda.'],
      ['q' => 'Apakah saya bisa update konten sendiri?',               'a' => 'Ya. Setelah website selesai, kami akan training singkat cara mengedit teks dan gambar. Jika butuh bantuan, kami siap membantu.'],
      ['q' => 'Apa yang termasuk dalam hosting 1 tahun?',              'a' => 'Domain .com + hosting server Indonesia dengan uptime 99.9%. Setelah 1 tahun, biaya perpanjangan sekitar Rp 300K–500K/tahun (termasuk domain + hosting).'],
      ['q' => 'Bagaimana jika saya butuh website lebih dari 10 halaman?', 'a' => 'Paket Website UMKM bisa di-upgrade ke paket Website Bisnis (Rp 3.5 jt) yang mendukung 10–20 halaman dengan fitur lebih lengkap.'],
      ['q' => 'Apakah bisa bayar bertahap?',                           'a' => 'Bisa. Biasanya 50% di awal dan 50% setelah website live. Negosiasi lebih lanjut bisa via WhatsApp.'],
    ],
    'cta_heading'=> 'Siap punya website profesional?',
    'cta_sub'    => 'Konsultasi gratis 15 menit — kami dengarkan dulu, baru rekomendasikan paket yang cocok.',
  ],

  /* ──────────────── 2. APLIKASI CUSTOM ──────────────── */
  'aplikasi-custom' => [
    'tag'        => 'Aplikasi Custom',
    'icon'       => 'code',
    'illustration' => get_stylesheet_directory_uri() . '/assets/illustrations/streamline/aplikasi-custom.png',
    'h1'         => 'Web app <em class="ak-underline" data-draw>custom</em> sesuai kebutuhan bisnis Anda.',
    'hero_sub'   => 'Sistem inventory, booking, CRM, dashboard admin — dibangun dari nol dengan stack modern yang bisa Anda kembangkan nanti.',
    'price_label'=> 'Mulai dari Rp 2,5 jt',
    'problems'   => [
      ['title' => 'Proses manual memakan waktu dan sering salah',         'desc' => 'Catat di Excel, hitung manual, follow up via chat. Semua proses manual membuat bisnis lambat dan rawan human error.'],
      ['title' => 'Software off-the-shackle tidak cocok dengan workflow', 'desc' => 'Software generic dipaksa masuk ke cara kerja bisnis Anda. Hasilnya: fitur yang tidak dipakai dan fitur yang dibutuhkan tidak ada.'],
      ['title' => 'Data tersebar di banyak platform',                      'desc' => 'Penjualan di Shopee, customer di WhatsApp, invoice di email. Tidak ada satu tempat untuk melihat semuanya.'],
    ],
    'stat'       => ['number' => '40%', 'desc' => 'Peningkatan efisiensi operasional setelah otomasi proses bisnis (McKinsey 2024)'],
    'features'   => [
      ['icon' => 'code',   'title' => 'Stack Modern',              'desc' => 'React/Next.js, Node.js, atau Laravel — pilihan teknologi yang maintainable dan scalable. Bukan teknologi usang yang susah cari developer.'],
      ['icon' => 'target', 'title' => 'Sesuai Workflow Anda',      'desc' => 'Kami pelajari cara kerja bisnis Anda, lalu bangun sistem yang mengikuti workflow — bukan sebaliknya.'],
      ['icon' => 'globe',  'title' => 'Web-Based',                 'desc' => 'Akses dari mana saja via browser. Tidak perlu install aplikasi. Cocok untuk tim yang work from anywhere.'],
      ['icon' => 'wrench', 'title' => 'Dashboard Admin',           'desc' => 'Panel administrasi untuk mengelola data, user, dan laporan. Semua dalam satu tempat.'],
      ['icon' => 'search-code', 'title' => 'API-Ready',            'desc' => 'Dirancang dengan API agar bisa diintegrasikan dengan sistem lain: payment gateway, WhatsApp API, atau tools existings.'],
      ['icon' => 'handshake', 'title' => 'Source Code Milik Anda', 'desc' => 'Kode milik Anda sepenuhnya. Tidak ada lock-in. Jika ingin pindah developer, kode bisa dibawa.'],
    ],
    'comparison' => [
      'headers' => ['Fitur', 'Aplikasi Custom', 'SaaS / Software Bawaan', 'Spreadsheet Manual'],
      'rows'    => [
        ['Sesuai Workflow',   '✓ 100%',       '✗ Terbatas',     '✗ Manual'],
        ['Skalabilitas',      '✓ Tinggi',     '? Tergantung',   '✗ Rendah'],
        ['Integrasi',         '✓ API-based',  '? Terbatas',     '✗ Tidak ada'],
        ['Biaya Jangka Panjang','✓ Tetap',    '✗ Subscription', '✓ Gratis'],
        ['Maintenance',       '✓ Kami bantu', '✓ Vendor',       '✗ Sendiri'],
        ['Data Ownership',    '✓ Milik Anda', '? Cloud vendor', '✓ Local file'],
      ],
    ],
    'process'    => [
      ['step' => '01', 'title' => 'Discovery & Analisis',    'desc' => 'Kami pelajari proses bisnis Anda: input data, alur kerja, siapa yang pakai, dan pain point utama. 1–2 sesi brainstorming.'],
      ['step' => '02', 'title' => 'Proposal & Wireframe',    'desc' => 'Kami kirim proposal teknis + wireframe interaktif. Anda review fitur, estimasi biaya, dan timeline.'],
      ['step' => '03', 'title' => 'Development & Testing',   'desc' => 'Sprint-based development. Setiap 2 minggu Anda dapat demo progress. Feedback langsung diimplementasi.'],
      ['step' => '04', 'title' => 'Deploy & Handover',       'desc' => 'Aplikasi live di server Anda. Training tim, dokumentasi teknis, dan garansi bug fix 1 bulan.'],
    ],
    'case_study' => [
      'title'  => 'Klinik Gigi Jambi — Sistem Antrian Online',
      'before' => 'Antrian manual di tempat. Pasien datang, ambil nomor, tunggu berjam-jam. Tidak ada data antrian, tidak ada prediksi waktu tunggu.',
      'after'  => 'Dashboard admin + web app untuk pasien. Pasien booking via WhatsApp, dapat nomor antrian virtual, dan notifikasi saat giliran mendekat.',
      'result' => 'Waktu tunggu rata-rata turun 60%, pasien puas, data antrian tercatat otomatis',
    ],
    'testimonial'=> [
      'quote'  => 'Dulunya saya catat stok di Excel. Sekarang semua otomatis — saya bisa lihat stok real-time dari HP. Tim juga lebih fokus melayani pelanggan.',
      'name'   => 'Dr. Ahmad Fauzi',
      'role'   => 'Pemilik Klinik',
      'company' => 'Klinik Gigi Sehat Jambi',
    ],
    'faq'        => [
      ['q' => 'Berapa lama pembuatan aplikasi custom?',                     'a' => 'Tergantung kompleksitas. Aplikasi sederhana (CRUD + dashboard) sekitar 1–2 bulan. Aplikasi kompleks (multi-user, integrasi API) bisa 2–4 bulan. Kami berikan estimasi setelah sesi discovery.'],
      ['q' => 'Apakah bisa diintegrasikan dengan sistem yang sudah ada?',    'a' => 'Ya. Kami sering mengintegrasikan dengan payment gateway (Midtrans, Xendit), WhatsApp API, Google Sheets, dan sistem existings lainnya.'],
      ['q' => 'Bagaimana dengan maintenance setelah selesai?',              'a' => 'Kami tawarkan paket maintenance bulanan (Rp 500K–1.5jt/bulan) untuk hosting, update, dan bug fix. Atau Anda bisa maintain sendiri jika punya tim IT.'],
      ['q' => 'Apakah源 code milik saya?',                                  'a' => 'Ya, 100%. Semua source code diserahkan ke Anda setelah project selesai. Tidak ada dependency ke kami.'],
    ],
    'cta_heading'=> 'Punya masalah operasional yang bisa diselesaikan dengan teknologi?',
    'cta_sub'    => 'Ceritakan workflow bisnis Anda — kami bantu analisis apakah aplikasi custom solusi yang tepat.',
  ],

  /* ──────────────── 3. MAINTENANCE ──────────────── */
  'maintenance' => [
    'tag'        => 'Maintenance',
    'icon'       => 'wrench',
    'illustration' => get_stylesheet_directory_uri() . '/assets/illustrations/streamline/maintenance.png',
    'h1'         => 'Website tetap <em class="ak-underline" data-draw>hidup</em> tanpa repot.',
    'hero_sub'   => 'Update konten, backup rutin, monitoring uptime, perbaikan bug — website Anda terawat tanpa Anda harus paham teknis.',
    'price_label'=> 'Mulai dari Rp 150K / bulan',
    'problems'   => [
      ['title' => 'Website tidak pernah diupdate, konten usang',     'desc' => 'Harga, promo, atau info kontak sudah berubah tapi website masih tampil lama. Pelanggan kehilangan kepercayaan.'],
      ['title' => 'Website down dan tidak ada yang tahu',             'desc' => 'Server error, SSL expired, atau domain expired — semuanya bisa membuat website mati. Dan Anda baru tahu setelah pelanggan komplain.'],
      ['title' => 'Tidak ada backup, data hilang saat error',         'desc' => 'Tanpa backup rutin, satu error bisa menghapus semua data. Recovery dari backup manual sangat memakan waktu.'],
    ],
    'stat'       => ['number' => '58%', 'desc' => 'website UMKM mengalami downtime > 1 jam/bulan tanpa sadar (census 2025)'],
    'features'   => [
      ['icon' => 'wrench', 'title' => 'Update Konten Rutin',      'desc' => 'Ganti teks, gambar, harga, atau promo — kirim permintaan via WhatsApp, kami eksekusi. Tidak perlu login ke dashboard.'],
      ['icon' => 'clock',  'title' => 'Monitoring Uptime 24/7',   'desc' => 'Website dipantau terus-menerus. Jika down, kami langsung tahu dan segera fix — bahkan sebelum Anda atau pelanggan menyadari.'],
      ['icon' => 'search-code', 'title' => 'Backup Otomatis',     'desc' => 'Backup harian ke server terpisah. Jika terjadi sesuatu, website bisa dipulihkan dalam hitungan jam, bukan hari.'],
      ['icon' => 'target', 'title' => 'Security Patch',           'desc' => 'Update CMS, plugin, dan server secara berkala untuk mencegah vulnerability. Website tetap aman dari serangan.'],
      ['icon' => 'lightbulb', 'title' => 'Laporan Bulanan',       'desc' => 'Setiap bulan Anda terima laporan: uptime, traffic, update yang dilakukan, dan rekomendasi perbaikan.'],
      ['icon' => 'message','title' => 'Support WhatsApp',         'desc' => 'Butuh perubahan mendadak? Chat langsung via WhatsApp. Response time < 2 jam di jam kerja.'],
    ],
    'comparison' => [
      'headers' => ['Fitur', 'Paket Maintenance', 'Handle Sendiri', 'Hire Freelancer'],
      'rows'    => [
        ['Update Konten',     '✓ Tinggal chat',    '✗ Harus bisa',  '? Terbatas'],
        ['Monitoring',        '✓ 24/7 otomatis',   '✗ Manual',      '✗ Tidak ada'],
        ['Backup',            '✓ Harian',          '✗ Kadang-kadang','✗ Tidak rutin'],
        ['Security Update',   '✓ Otomatis',        '✗ Manual',      '? Tergantung'],
        ['Cost/Bulan',        'Rp 150K',           '✓ Gratis',      'Rp 300K+'],
        ['Waktu Anda',        '✓ 0 menit',         '✗ 2–4 jam/bulan','? Bervariasi'],
      ],
    ],
    'process'    => [
      ['step' => '01', 'title' => 'Audit Website',       'desc' => 'Kami review kondisi website Anda: versi CMS, plugin, SSL, hosting, dan potensi masalah. Gratis.'],
      ['step' => '02', 'title' => 'Setup Monitoring',    'desc' => 'Kami setup monitoring uptime, backup otomatis, dan security patch. Website Anda mulai terpantau.'],
      ['step' => '03', 'title' => 'Update Pertama',      'desc' => 'Update konten pertama: pastikan semua info di website sudah benar dan terkini.'],
      ['step' => '04', 'title' => 'Laporan & Iterasi',   'desc' => 'Setiap bulan, Anda terima laporan. Kami juga kasih rekomendasi perbaikan untuk performa yang lebih baik.'],
    ],
    'case_study' => [
      'title'  => 'Restoran Padang — Dari Website Mati ke Aktif Kembali',
      'before' => 'Website dibuat 2 tahun lalu, tidak pernah diupdate. SSL expired, 2 halaman error, menu prices salah. Pelanggan komplain "websitenya kok error?"',
      'after'  => 'Semua error diperbaiki, SSL renewal, menu diupdate dengan harga terbaru, ditambah integrasi Google Maps dan jam buka. Monitoring uptime aktif.',
      'result' => 'Website kembali 100% fokus, Google Maps review naik 40% dalam 1 bulan',
    ],
    'testimonial'=> [
      'quote'  => 'Saya tidak sempat urus website. Dengan paket ini, saya tinggal chat "update harga bakso dari 25K ke 30K" — langsung selesai. Praktis.',
      'name'   => 'Budi Santoso',
      'role'   => 'Pemilik',
      'company' => 'Warung Bakso Mas Budi',
    ],
    'faq'        => [
      ['q' => 'Maintenance cocok untuk website apa?',                    'a' => 'Untuk website yang sudah live dan ingin tetap terawat. Cocok untuk UMKM yang tidak punya waktu atau skill teknis untuk maintain website sendiri.'],
      ['q' => 'Bagaimana cara request update konten?',                   'a' => 'Chat via WhatsApp. Kirim teks/gambar baru, kami eksekusi. Biasanya selesai dalam 1×24 jam di jam kerja.'],
      ['q' => 'Apakah termasuk redesign?',                               'a' => 'Tidak. Maintenance fokus pada keeping website hidup dan terupdate. Jika butuh redesign, itu project terpisah dengan harga khusus.'],
      ['q' => 'Bagaimana jika website saya dihosting di tempat lain?',   'a' => 'Bisa. Kami bisa manage website di hosting manapun selama ada akses admin.'],
    ],
    'cta_heading'=> 'Website Anda butuh perawatan?',
    'cta_sub'    => 'Audit gratis — kami cek kondisi website Anda dan kasih rekomendasi tanpa komitmen.',
  ],

  /* ──────────────── 4. MENTORING SKRIPSI ──────────────── */
  'mentoring-skripsi' => [
    'tag'        => 'Mentoring Skripsi',
    'icon'       => 'graduation',
    'illustration' => get_stylesheet_directory_uri() . '/assets/illustrations/streamline/mentoring-skripsi.png',
    'h1'         => 'Skripsi informatika? <em class="ak-underline" data-draw>Kami dampingi</em> sampai sidang.',
    'hero_sub'   => 'Pendampingan 1-on-1 untuk mahasiswa informatika: arsitektur sistem, code review, deployment, hingga persiapan sidang. Bukan mengerjakan — tapi memastikan Anda paham.',
    'price_label'=> 'Rp 150K / sesi (60 menit)',
    'problems'   => [
      ['title' => 'Dosen pembimbing minta perbaikan tapi tidak tau caranya',  'desc' => 'Revisi code, ganti database, optimasi query — instruksi dosen jelas tapi eksekusi technical tidak tahu mulai dari mana.'],
      ['title' => 'Deadline sidang sudah dekat, progress masih minim',         'desc' => 'Banyak yang sudah diketahui tapi belum diimplementasikan. Butuh bimbingan teknis yang fokus dan terstruktur.'],
      ['title' => 'Tidak ada yang bisa diajak diskusi soal teknis',            'desc' => 'Teman sekelas juga sibuk skripsi sendiri. Dosen hanya available di jam tertentu. Butuh mentor yang bisa diakses kapan butuh.'],
    ],
    'stat'       => ['number' => '89%', 'desc' => 'mahasiswa informatika kesulitan di tahap implementasi, bukan konsep (survey内部 2025)'],
    'features'   => [
      ['icon' => 'code',     'title' => 'Code Review Mendalam',     'desc' => 'Kami baca kode Anda, kasih feedback spesifik: apa yang bagus, apa yang perlu diperbaiki, dan kenapa. Bukan cuma "ini salah".'],
      ['icon' => 'lightbulb','title' => 'Arsitektur Sistem',        'desc' => 'Bantu rancang struktur database, API design, dan flow aplikasi sebelum coding. Menghemat waktu revisi di kemudian hari.'],
      ['icon' => 'globe',    'title' => 'Deployment & Hosting',     'desc' => 'Bantu deploy ke Vercel, Netlify, atau server. Pastikan website/app bisa diakses dosen dan reviewer.'],
      ['icon' => 'search-code', 'title' => 'Best Practices',       'desc' => 'Clean code, naming convention, documentation — semua yang bikin dosen "wow" saat review kode.'],
      ['icon' => 'target',   'title' => 'Persiapan Sidang',         'desc' => 'Simulasi tanya jawab, persiapan presentasi, dan tips menjawab pertanyaan dosen penguji.'],
      ['icon' => 'message',  'title' => 'Flexible Scheduling',      'desc' => 'Sesuai jadwal Anda. Malam hari, weekend, atau menjelang deadline — kami accommodate.'],
    ],
    'comparison' => [
      'headers' => ['Aspek', 'Mentoring Kami', 'Dosen Pembimbing', 'Teman Sejawat'],
      'rows'    => [
        ['Ketersediaan',    '✓ Fleksibel',     '✗ Jam tertentu',   '? Sibuk sendiri'],
        ['Profesionalisme', '✓ Structured',    '✓ Structured',     '✗ Informal'],
        ['Technical Depth', '✓ Praktisi',      '? Teori-based',    '? Bervariasi'],
        ['Biaya',           'Rp 150K/sesi',    '✓ Gratis',         '✓ Gratis'],
        ['Code Review',     '✓ Detail',        '? Terbatas',       '? Terbatas'],
        ['Simulasi Sidang', '✓ Ya',            '? Kadang',         '✗ Tidak'],
      ],
    ],
    'process'    => [
      ['step' => '01', 'title' => 'Konsultasi Awal',       'desc' => 'Ceritakan topik skripsi, progress saat ini, dan kendala yang dihadapi. Gratis 15 menit via WhatsApp.'],
      ['step' => '02', 'title' => 'Sesi Mentoring',         'desc' => '60 menit via video call. Fokus pada 1–2 topik spesifik. Kami kasih guidance technical yang bisa langsung Anda eksekusi.'],
      ['step' => '03', 'title' => 'Eksekusi & Follow-Up',   'desc' => 'Anda implementasi yang sudah didiskusikan. Jika ada kendala, bisa tanya via chat di antara sesi.'],
      ['step' => '04', 'title' => 'Review & Sidang',        'desc' => 'Sesi terakhir: review final kode, persiapan presentasi, dan simulasi sidang.'],
    ],
    'case_study' => [
      'title'  => 'Skripsi Sistem Booking Futsal — dari Stuck ke Lulus',
      'before' => 'Progress 40% setelah 4 bulan. Database design berantakan, API tidak berfungsi, dosen minta ganti dari PHP ke Laravel. Deadline sidang 3 minggu.',
      'after'  => '3 sesi mentoring: migrasi ke Laravel, redesign database, implementasi API. Kode di-review, documentation dibuat, deploy ke Vercel.',
      'result' => 'Lulus sidang dengan predikat cumlaude, dosen penguji puas dengan kode',
    ],
    'testimonial'=> [
      'quote'  => 'Saya sudah mau menyerah. Tim Akar bantu saya paham kenapa kode saya tidak jalan — bukan cuma fix, tapi menjelaskan kenapa. Sekarang saya lebih confident coding.',
      'name'   => 'Dani Pratama',
      'role'   => 'Mahasiswa Informatika',
      'company' => 'Universitas Swasta',
    ],
    'faq'        => [
      ['q' => 'Apakah mentoring hanya untuk skripsi?',                    'a' => 'Bisa juga untuk proyek akhir, tugas besar, atau belajar teknologi baru. Yang penting ada target yang jelas.'],
      ['q' => 'Bagaimana cara sesi mentoring dilakukan?',                 'a' => 'Via Google Meet atau Zoom. Kami share screen, Anda share screen. Sama seperti ketemu langsung tapi dari mana saja.'],
      ['q' => 'Berapa sesi yang dibutuhkan?',                             'a' => 'Tergantung kendala. Biasanya 2–4 sesi sudah cukup untuk restart progress yang stuck. Konsultasi awal gratis untuk estimasi.'],
      ['q' => 'Apakah kami mengerjakan skripsi untuk mahasiswa?',         'a' => 'Tidak. Kami mentoring — memastikan Anda paham dan bisa mengerjakan sendiri. Ini untuk kebaikan Anda di sidang.'],
    ],
    'cta_heading'=> 'Butuh bimbingan teknis skripsi?',
    'cta_sub'    => 'Konsultasi gratis 15 menit — ceritakan kendala Anda, kami kasih estimasi berapa sesi yang dibutuhkan.',
  ],

  /* ──────────────── 5. KONSULTASI PROYEK ──────────────── */
  'konsultasi-proyek' => [
    'tag'        => 'Konsultasi Proyek',
    'icon'       => 'lightbulb',
    'illustration' => get_stylesheet_directory_uri() . '/assets/illustrations/streamline/konsultasi-proyek.png',
    'h1'         => 'Bingung mulai dari mana? <em class="ak-underline" data-draw>Kami bantu</em> rancang arsitekturnya.',
    'hero_sub'   => 'Bantu pilih stack teknologi, desain database, struktur kode, dan best practices untuk proyek akhir atau tugas besar. 90 menit yang menghemat berminggu-minggu waktu Anda.',
    'price_label'=> 'Mulai dari Rp 200K',
    'problems'   => [
      ['title' => 'Terlalu banyak pilihan teknologi, tidak tahu mana yang cocok', 'desc' => 'React vs Vue vs Angular? SQL vs NoSQL? Laravel vs CodeIgniter? Pilihan teknologi membingungkan dan salah pilih bisa berakibat fatal.'],
      ['title' => 'Database design berantakan di tengah jalan',                    'desc' => 'Mulai tanpa perencanaan, di pertengahan project baru sadar struktur database tidak efisien. Revork = waktu terbuang.'],
      ['title' => 'Tidak ada yang bisa review kode sebelum submit',                 'desc' => 'Sendirian mengerjakan, tidak ada second opinion. Kode bisa jalan tapi belum tentu benar atau efficient.'],
    ],
    'stat'       => ['number' => '3×', 'desc' => 'lebih cepat menyelesaikan proyek dengan arsitektur yang direncanakan sebelum coding'],
    'features'   => [
      ['icon' => 'lightbulb','title' => 'Technology Stack Advisory', 'desc' => 'Kami bantu pilih teknologi yang paling cocok dengan kebutuhan proyek, skill team, dan timeline Anda.'],
      ['icon' => 'code',     'title' => 'Database Design',           'desc' => 'ERD, normalisasi, indexing strategy — kami rancang database yang efisien sebelum Anda mulai coding.'],
      ['icon' => 'search-code', 'title' => 'Architecture Review',   'desc' => 'Review struktur project: folder structure, naming, dependency management, dan deployment strategy.'],
      ['icon' => 'globe',    'title' => 'API Design',                'desc' => 'REST API design yang clean: naming endpoint, response format, authentication, dan error handling.'],
      ['icon' => 'target',   'title' => 'Best Practices Guide',     'desc' => 'Dokumen rekomendasi spesifik untuk proyek Anda: coding standard, testing strategy, dan deployment checklist.'],
      ['icon' => 'wrench',   'title' => 'Tooling Setup',            'desc' => 'Bantu setup development environment: Git workflow, CI/CD, linting, dan dockerization jika diperlukan.'],
    ],
    'comparison' => [
      'headers' => ['Aspek', 'Konsultasi 200K', 'Trial & Error Sendiri', 'Minta Tolong Senior'],
      'rows'    => [
        ['Waktu',              '✓ 90 menit',     '✗ Berhari-hari',    '? Kadang available'],
        ['Kualitas Arsitektur', '✓ Structured',   '✗ Rawan error',    '? Bervariasi'],
        ['Documentation',      '✓ Ya',           '✗ Tidak ada',      '✗ Tidak ada'],
        ['Biaya',              'Rp 200K',        '✓ Gratis (waktu)',  '✓ Gratis'],
        ['Follow-Up',          '✓ Chat support',  '✗ Sendiri',        '? Tergantung'],
      ],
    ],
    'process'    => [
      ['step' => '01', 'title' => 'Ceritakan Proyek Anda',   'desc' => 'Kirim brief singkat: apa yang ingin dibangun, teknologi yang dipakai (jika sudah tahu), dan kendala yang dihadapi.'],
      ['step' => '02', 'title' => 'Sesi Konsultasi 90 Menit','desc' => 'Diskusi mendalam via video call. Kami bantu analisis, kasih rekomendasi, dan jawab pertanyaan teknis.'],
      ['step' => '03', 'title' => 'Dokumen Rekomendasi',      'desc' => 'Anda terima dokumen ringkas: stack recommendation, ERD draft, architecture diagram, dan checklist.'],
      ['step' => '04', 'title' => 'Follow-Up',                'desc' => 'Jika ada pertanyaan setelah sesi, bisa tanya via chat selama 1 minggu.'],
    ],
    'case_study' => [
      'title'  => 'Proyek Akhir Sistem Informasi Perpustakaan',
      'before' => 'Mahasiswa bingung pilih stack. Dosen sarankan "yang penting bisa". Tidak ada perencanaan database, coding langsung. Hasil: 3× rewrite.',
      'after'  => '1 sesi konsultasi: pilih Laravel + MySQL, buat ERD, setup folder structure. Coding pertama langsung on-track.',
      'result' => 'Proyek selesai 2 minggu lebih cepat dari estimasi, nilai A',
    ],
    'testimonial'=> [
      'quote'  => 'Sesi 90 menit menghemat 2 minggu waktu saya. Saya tahu persis apa yang harus dilakukan setelah konsultasi. Worth it banget.',
      'name'   => 'Sarah Putri',
      'role'   => 'Mahasiswa Teknik Informatika',
      'company' => 'STIKOM',
    ],
    'faq'        => [
      ['q' => 'Konsultasi cocok untuk proyek apa?',                       'a' => 'Proyek akhir, tugas besar, side project, atau startup MVP. Yang penting ada ide yang jelas tentang apa yang ingin dibangun.'],
      ['q' => 'Apakah konsultasi bisa dilakukan via WhatsApp chat?',       'a' => 'Untuk pertanyaan singkat ya. Tapi untuk konsultasi mendalam, lebih efektif via video call supaya bisa share screen dan diskusi real-time.'],
      ['q' => 'Bagaimana jika saya belum tahu mau bangun apa?',            'a' => 'Kami bantu brainstorm juga. Ceritakan bidang minat atau masalah yang ingin diselesaikan, kami bantu cari ide proyek yang feasible.'],
      ['q' => 'Apakah ada paket bundling dengan mentoring?',               'a' => 'Ya. Paket bundling konsultasi + mentoring tersedia dengan harga khusus. Tanya via WhatsApp untuk detail.'],
    ],
    'cta_heading'=> 'Siap merancang proyek dengan benar?',
    'cta_sub'    => 'Konsultasi awal gratis — ceritakan proyek Anda, kami kasih gambaran butuh sesi berapa.',
  ],

  /* ──────────────── 6. CODE REVIEW ──────────────── */
  'code-review' => [
    'tag'        => 'Code Review',
    'icon'       => 'search-code',
    'illustration' => get_stylesheet_directory_uri() . '/assets/illustrations/streamline/code-review.png',
    'h1'         => 'Kode Anda kami <em class="ak-underline" data-draw>review</em> — sebelum dosen yang review.',
    'hero_sub'   => 'Review kode skripsi atau proyek: refactoring, performance, security, dan dokumentasi. Agar lebih mudah diuji dosen dan lebih mudah dipelihara.',
    'price_label'=> 'Mulai dari Rp 100K',
    'problems'   => [
      ['title' => 'Kode berjalan tapi tidak yakin benar',                 'desc' => 'Program jalan, output sesuai. Tapi kode berantakan, tidak efficient, dan tidak maintainable. Dosen pasti komplain.'],
      ['title' => 'Performance lambat, tidak tahu kenapa',                 'desc' => 'Query lambat, memory leak, atau algoritma tidak optimal. Tapi tidak tahu harus mulai debug dari mana.'],
      ['title' => 'Tidak ada dokumentasi, susah dijelaskan di sidang',     'desc' => 'Kode tidak ada comment, tidak ada README, tidak ada dokumentasi. Saat sidang, dosen tanya "kenapa pakai cara ini?" tidak bisa jawab.'],
    ],
    'stat'       => ['number' => '3.8', 'desc' => 'rata-rata revisi kode tanpa code review vs 1.2 dengan code review (internal study)'],
    'features'   => [
      ['icon' => 'search-code','title' => 'Code Quality Review',      'desc' => 'Kami baca seluruh kode, identifikasi anti-patterns, code smells, dan bagian yang perlu refactoring.'],
      ['icon' => 'target',     'title' => 'Performance Audit',        'desc' => 'Identifikasi bottleneck: query lambat, N+1 problem, memory usage, dan algoritma yang bisa dioptimasi.'],
      ['icon' => 'wrench',     'title' => 'Security Check',           'desc' => 'Cek vulnerabilities: SQL injection, XSS, CSRF, authentication flaws. Penting untuk project yang handle user data.'],
      ['icon' => 'code',       'title' => 'Refactoring Suggestion',  'desc' => 'Bukan cuma "ini salah" — tapi "ini bisa lebih baik dengan cara X karena Y". Actionable feedback.'],
      ['icon' => 'lightbulb',  'title' => 'Documentation Guide',      'desc' => 'Bantu buat README, code comments, dan API documentation yang memudahkan dosen paham project Anda.'],
      ['icon' => 'message',    'title' => 'Written Report',           'desc' => 'Anda terima laporan tertulis: temuan, rekomendasi prioritas, dan contoh perbaikan untuk setiap issue.'],
    ],
    'comparison' => [
      'headers' => ['Aspek', 'Code Review Kami', 'Self-Review', 'Minta Teman Review'],
      'rows'    => [
        ['Kedalaman',       '✓ Full codebase',  '✗ Blind spot', '? Superficial'],
        ['Written Report',  '✓ Ya',             '✗ Tidak ada',  '✗ Tidak ada'],
        ['Security Check',  '✓ Ya',             '✗ Tidak bisa', '✗ Tidak bisa'],
        ['Actionable',      '✓ Detailed fix',   '? Vague',      '? Vague'],
        ['Biaya',           'Rp 100K/file',     '✓ Gratis',     '✓ Gratis'],
        ['Waktu',           '2–3 hari kerja',   '✗ Unlimited',  '? Kadang lama'],
      ],
    ],
    'process'    => [
      ['step' => '01', 'title' => 'Kirim Source Code',   'desc' => 'Kirim file source code (ZIP atau GitHub link) + penjelasan singkat tentang project dan tech stack yang dipakai.'],
      ['step' => '02', 'title' => 'Review Mendalam',      'desc' => 'Kami baca seluruh kode, test, dan review selama 2–3 hari kerja. Kami cek quality, performance, security, dan documentation.'],
      ['step' => '03', 'title' => 'Laporan Hasil',        'desc' => 'Anda terima laporan tertulis: daftar temuan, prioritas, dan contoh perbaikan untuk issue kritis.'],
      ['step' => '04', 'title' => 'Diskusi Hasil',        'desc' => '30 menit video call untuk menjelaskan hasil review dan menjawab pertanyaan Anda tentang rekomendasi.'],
    ],
    'case_study' => [
      'title'  => 'Aplikasi Booking Dokter — dari 47 Bugs ke 0',
      'before' => 'Aplikasi berjalan tapi penuh warning. N+1 query di 12 tempat, 3 SQL injection vulnerabilities, tidak ada input validation, zero documentation.',
      'after'  => 'Full review: 47 issues identified, 12 critical fixes, query optimization (page load dari 8 detik ke 1.2 detik), security patches, dan documentation lengkap.',
      'result' => 'Lulus sidang tanpa revisi kode, dosen pujian "kode paling bersih di angkatan"',
    ],
    'testimonial'=> [
      'quote'  => 'Saya kira kode saya sudah bagus. Ternyata masih banyak yang bisa diperbaiki. Laporan review-nya detail banget — saya langsung tahu apa yang harus diubah.',
      'name'   => 'Rizky Aditya',
      'role'   => 'Mahasiswa S1 Informatika',
      'company' => 'Universitas Negeri',
    ],
    'faq'        => [
      ['q' => 'File seberapa besar yang bisa di-review?',                  'a' => 'Sampai 5.000 baris kode per sesi. Jika lebih, kami bagi beberapa file dan review bertahap.'],
      ['q' => 'Bahasa pemrograman apa yang di-review?',                    'a' => 'PHP, JavaScript/TypeScript, Python, Java, Go — sebagian besar bahasa populer. Konfirmasi via chat jika bahasa Anda tidak familiar.'],
      ['q' => 'Apakah bisa review setelah sidang?',                        'a' => 'Bisa. Tapi lebih baik review SEBELUM sidang agar ada waktu perbaiki. Review setelah sidang biasanya untuk learning purpose.'],
      ['q' => 'Bagaimana jika saya butuh fix langsung, bukan cuma review?', 'a' => 'Kami bisa bantu fix langsung dengan harga tambahan. Atau Anda bisa fix sendiri berdasarkan laporan review yang kami berikan.'],
    ],
    'cta_heading'=> 'Mau pastikan kode Anda siap di-review dosen?',
    'cta_sub'    => 'Kirim source code Anda — kami kasih gambaran awal gratis sebelum Anda putuskan.',
  ],
];

$sv = $services[ $slug ] ?? null;
if ( ! $sv ) {
  echo '<div class="ak-section"><div class="ak-container"><h1>Layanan tidak ditemukan</h1><p><a href="' . esc_url( home_url( '/services' ) ) . '">Kembali ke Layanan</a></p></div></div>';
  get_template_part( 'template-parts/ak-chrome-foot' );
  get_footer();
  return;
}

/* SEO Meta — description + canonical + Schema.org (title handled by theme_support 'title-tag') */
add_action( 'wp_head', function() use ( $sv, $slug ) {
  $desc  = $sv['hero_sub'];
  $url   = home_url( '/services/' . $slug );
  echo '<meta name="description" content="' . esc_attr( $desc ) . '">' . "\n";
  echo '<link rel="canonical" href="' . esc_url( $url ) . '">' . "\n";
  // Schema.org Service markup
  $schema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    'name'        => $sv['tag'] . ' — ' . ( function_exists( 'akar_brand' ) ? akar_brand() : 'Akar Solution' ),
    'description' => $sv['hero_sub'],
    'provider'    => [
      '@type' => 'Organization',
      'name'  => function_exists( 'akar_brand' ) ? akar_brand() : 'Akar Solution',
      'url'   => home_url( '/' ),
    ],
    'areaServed'  => [
      '@type' => 'City',
      'name'  => 'Jambi',
    ],
    'offers'      => [
      '@type'         => 'Offer',
      'price'         => preg_replace( '/[^0-9]/', '', explode( '-', str_replace( [',', ' '], ['', ''], $sv['price_label'] ) )[0] ),
      'priceCurrency' => 'IDR',
      'availability'  => 'https://schema.org/InStock',
    ],
  ];
  echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . '</script>' . "\n";
});
?>

<!-- HERO -->
<section class="ak-hero">
  <div class="ak-hero-grid">
    <div>
      <span class="ak-hero-tag"><?php echo esc_html( $sv['tag'] ); ?></span>
      <h1 class="ak-reveal-slide" data-reveal><?php echo wp_kses_post( $sv['h1'] ); ?></h1>
      <p class="ak-hero-sub ak-reveal-slide" data-reveal><?php echo esc_html( $sv['hero_sub'] ); ?></p>
      <div class="ak-hero-ctas ak-reveal-slide" data-reveal>
        <span class="ak-btn" style="pointer-events:none;opacity:0.7;"><?php echo esc_html( $sv['price_label'] ); ?></span>
        <a href="https://wa.me/6285951572182?text=Halo%20Akar%20Solution%2C%20saya%20tertarik%20dengan%20layanan%20<?php echo urlencode( $sv['tag'] ); ?>." class="ak-btn" target="_blank" rel="noopener">Konsultasi Gratis</a>
      </div>
    </div>
    <div class="ak-sv-hero-visual ak-reveal" data-reveal>
      <?php if ( ! empty( $sv['illustration'] ) ) : ?>
        <div class="ak-sv-illustration"
             role="img" aria-label="<?php echo esc_attr( $sv['tag'] ); ?>">
          <img src="<?php echo esc_url( $sv['illustration'] ); ?>"
               alt="<?php echo esc_attr( $sv['tag'] ); ?>"
               width="280" height="280" loading="eager">
        </div>
      <?php else : ?>
        <div class="ak-sv-hero-icon">
          <?php echo ak_icon( $sv['icon'] ); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- MASALAH -->
<section class="ak-section">
  <div class="ak-container">
    <div class="ak-section-header">
      <div class="ak-section-eyebrow">Masalah yang Sering Terjadi</div>
      <h2 class="ak-reveal-slide" data-reveal>Anda tidak sendirian — ini <em>kenyataan</em> di lapangan.</h2>
    </div>
    <div class="ak-sv-problems">
      <div>
        <?php foreach ( $sv['problems'] as $i => $p ) : ?>
          <div class="ak-sv-problem-item ak-reveal-slide" data-reveal>
            <div class="ak-sv-problem-num"><?php echo esc_html( str_pad( $i + 1, 2, '0', STR_PAD_LEFT ) ); ?></div>
            <h3><?php echo esc_html( $p['title'] ); ?></h3>
            <p><?php echo esc_html( $p['desc'] ); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="ak-sv-stat ak-reveal" data-reveal>
        <div class="ak-sv-stat-number cd"><?php echo esc_html( $sv['stat']['number'] ); ?></div>
        <div class="ak-sv-stat-desc"><?php echo esc_html( $sv['stat']['desc'] ); ?></div>
      </div>
    </div>
  </div>
</section>

<!-- YANG ANDA DAPATKAN -->
<section class="ak-section-tight ak-section-light">
  <div class="ak-container">
    <div class="ak-section-header">
      <div class="ak-section-eyebrow">Yang Anda Dapatkan</div>
      <h2 class="ak-reveal-slide" data-reveal>Semua yang dibutuhkan, <em>sudah termasuk.</em></h2>
    </div>
    <div class="ak-sv-features" data-stagger>
      <?php foreach ( $sv['features'] as $f ) : ?>
        <div class="ak-sv-feature">
          <div class="ak-sv-feature-icon"><?php echo ak_icon( $f['icon'] ); ?></div>
          <h3><?php echo esc_html( $f['title'] ); ?></h3>
          <p><?php echo esc_html( $f['desc'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- PERBANDINGAN -->
<section class="ak-section">
  <div class="ak-container">
    <div class="ak-section-header">
      <div class="ak-section-eyebrow">Perbandingan</div>
      <h2 class="ak-reveal-slide" data-reveal>Mengapa <em>pilihan kami</em> berbeda.</h2>
    </div>
    <div class="ak-sv-table-wrap ak-reveal" data-reveal>
      <table class="ak-sv-table">
        <thead>
          <tr>
            <?php foreach ( $sv['comparison']['headers'] as $h ) : ?>
              <th><?php echo esc_html( $h ); ?></th>
            <?php endforeach; ?>
          </tr>
        </thead>
        <tbody>
          <?php foreach ( $sv['comparison']['rows'] as $row ) : ?>
            <tr>
              <?php foreach ( $row as $i => $cell ) : ?>
                <td<?php echo $i === 1 ? ' class="hl"' : ''; ?>>
                  <?php
                    if ( $cell === '✓' || str_starts_with( $cell, '✓' ) ) {
                      echo '<span class="check">' . esc_html( $cell ) . '</span>';
                    } elseif ( $cell === '✗' || str_starts_with( $cell, '✗' ) ) {
                      echo '<span class="cross">' . esc_html( $cell ) . '</span>';
                    } else {
                      echo esc_html( $cell );
                    }
                  ?>
                </td>
              <?php endforeach; ?>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- PROSES KERJA -->
<section class="ak-section-tight ak-section-light">
  <div class="ak-container">
    <div class="ak-section-header">
      <div class="ak-section-eyebrow">Proses Kerja</div>
      <h2 class="ak-reveal-slide" data-reveal>Langkah <em>simpel</em> dari awal sampai selesai.</h2>
    </div>
    <div class="ak-sv-timeline">
      <?php foreach ( $sv['process'] as $step ) : ?>
        <div class="ak-sv-tl-step ak-reveal-slide" data-reveal>
          <div class="ak-sv-tl-num"><?php echo esc_html( $step['step'] ); ?></div>
          <h3><?php echo esc_html( $step['title'] ); ?></h3>
          <p><?php echo esc_html( $step['desc'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- STUDI KASUS -->
<section class="ak-section">
  <div class="ak-container">
    <div class="ak-section-header">
      <div class="ak-section-eyebrow">Studi Kasus</div>
      <h2 class="ak-reveal-slide" data-reveal><?php echo esc_html( $sv['case_study']['title'] ); ?></h2>
    </div>
    <div class="ak-sv-case ak-reveal" data-reveal>
      <div>
        <div class="ak-sv-case-label">Sebelum</div>
        <div class="ak-sv-case-before"><?php echo esc_html( $sv['case_study']['before'] ); ?></div>
      </div>
      <div>
        <div class="ak-sv-case-label">Sesudah</div>
        <div class="ak-sv-case-after"><?php echo esc_html( $sv['case_study']['after'] ); ?></div>
      </div>
      <div class="ak-sv-case-result">
        <strong><?php echo esc_html( $sv['case_study']['result'] ); ?></strong>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONI -->
<section class="ak-section-tight ak-section-light">
  <div class="ak-container ak-container-narrow">
    <div class="ak-sv-testimonial ak-reveal-slide" data-reveal>
      <blockquote>"<?php echo esc_html( $sv['testimonial']['quote'] ); ?>"</blockquote>
      <cite>
        <strong><?php echo esc_html( $sv['testimonial']['name'] ); ?></strong><br>
        <?php echo esc_html( $sv['testimonial']['role'] ); ?>, <?php echo esc_html( $sv['testimonial']['company'] ); ?>
      </cite>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="ak-section">
  <div class="ak-container">
    <div class="ak-section-header">
      <div class="ak-section-eyebrow">Pertanyaan Umum</div>
      <h2 class="ak-reveal-slide" data-reveal>Yang sering ditanya.</h2>
    </div>
    <div class="ak-sv-faq">
      <?php foreach ( $sv['faq'] as $item ) : ?>
        <details class="ak-reveal-slide" data-reveal>
          <summary><?php echo esc_html( $item['q'] ); ?></summary>
          <p><?php echo esc_html( $item['a'] ); ?></p>
        </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="ak-cta ak-reveal-slide" data-reveal>
  <h2 class="cd"><?php echo esc_html( $sv['cta_heading'] ); ?></h2>
  <p><?php echo esc_html( $sv['cta_sub'] ); ?></p>
  <div class="ak-ctas">
    <a href="https://wa.me/6285951572182?text=Halo%20Akar%20Solution%2C%20saya%20tertarik%20dengan%20layanan%20<?php echo urlencode( $sv['tag'] ); ?>." class="ak-btn ak-btn-lg" target="_blank" rel="noopener">💬 Chat via WhatsApp</a>
    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="ak-btn ak-btn-outline ak-btn-lg">Form Kontak</a>
  </div>
</section>

<?php
get_template_part( 'template-parts/ak-chrome-foot' );
get_footer();
