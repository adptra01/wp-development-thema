#!/usr/bin/env php
<?php
/**
 * Jambi Press - Seed Categories & Posts
 * Usage: wp eval-file seed.php
 *
 * Creates categories and sample posts with picsum images.
 * Run AFTER theme is activated.
 */

if ( ! defined( 'ABSPATH' ) ) {
    require_once dirname( dirname( dirname( dirname( __FILE__ ) ) ) ) . '/wp-load.php';
}
require_once ABSPATH . 'wp-admin/includes/taxonomy.php';
require_once ABSPATH . 'wp-admin/includes/post.php';

echo "Seeding Jambi Press...\n";

// ============================================================
// CATEGORIES
// ============================================================
$categories = [
    'Politik'        => 'Berita politik terkini Provinsi Jambi',
    'Pemerintahan'   => 'Kebijakan dan program pemerintah daerah Jambi',
    'Ekonomi'        => 'Ekonomi lokal, bisnis, dan keuangan Jambi',
    'Kriminal'       => 'Peristiwa kriminal dan hukum di Jambi',
    'Pendidikan'     => 'Dunia pendidikan Jambi dan sekitarnya',
    'Olahraga'       => 'Prestasi olahraga Jambi di tingkat regional dan nasional',
    'Budaya'         => 'Budaya, adat istiadat, dan kesenian Jambi',
    'Wisata'         => 'Destinasi wisata unggulan Provinsi Jambi',
    'UMKM'           => 'Usaha mikro, kecil, dan menengah masyarakat Jambi',
    'Infrastruktur'  => 'Pembangunan infrastruktur dan proyek publik Jambi',
    'Lingkungan'     => 'Isu lingkungan dan kebencanaan di Jambi',
];

$cat_ids = [];
foreach ( $categories as $name => $desc ) {
    $existing = category_exists( $name );
    if ( ! $existing ) {
        $id = wp_insert_category( [
            'cat_name'          => $name,
            'category_description' => $desc,
            'category_nicename' => sanitize_title( $name ),
        ] );
        $cat_ids[ sanitize_title( $name ) ] = $id;
        echo "  + Category: $name (ID $id)\n";
    } else {
        $cat_ids[ sanitize_title( $name ) ] = $existing;
        echo "  o Category exists: $name (ID $existing)\n";
    }
}

// ============================================================
// SAMPLE POSTS
// ============================================================
$posts_data = [
    [
        'title'   => 'DPRD Jambi Sahkan APBD 2025 sebesar Rp 4,8 Triliun Fokus pada Infrastruktur dan Pendidikan',
        'cat'     => 'Politik',
        'seed'    => 'jambi-apbd-2025',
        'content' => "DPRD Provinsi Jambi mengesahkan Anggaran Pendapatan dan Belanja Daerah (APBD) tahun anggaran 2025 sebesar Rp 4,8 triliun dalam rapat paripurna yang digelar di gedung DPRD Jambi pada Senin. Ketua DPRD Jambi mengatakan bahwa anggaran tersebut difokuskan pada pembangunan infrastruktur, sektor pendidikan, dan layanan kesehatan bagi masyarakat.\n\nAnggaran tersebut mengalami kenaikan sebesar 8% dibandingkan APBD 2024. Beberapa program prioritas yang mendapat alokasi dana besar antara lain pembangunan jalan provinsi, peningkatan kualitas sekolah, dan program beasiswa bagi mahasiswa Jambi berprestasi. Gubernur Jambi menyampaikan apresiasi kepada DPRD atas pengesahan tepat waktu dan berharap anggaran ini dapat dimaksimalkan untuk kesejahteraan rakyat.",
        'time'    => '-2 hours',
    ],
    [
        'title'   => 'Gubernur Jambi Resmikan Jembatan Batanghari Tahap II Senilai Rp 120 Miliar',
        'cat'     => 'Infrastruktur',
        'seed'    => 'jambi-bridge-inaug',
        'content' => "Gubernur Jambi meresmikan jembatan Batanghari tahap II yang menghubungkan Kota Jambi dengan Kabupaten Muaro Jambi. Jembatan sepanjang 1,2 kilometer ini dibangun dengan anggaran Rp 120 miliar dari APBN dan APBD Provinsi Jambi. Pembangunan jembatan ini bertujuan untuk memperlancar akses transportasi dan distribusi barang antardaerah.\n\nDalam sambutannya, Gubernur menekankan pentingnya infrastruktur konektivitas untuk mendorong pertumbuhan ekonomi daerah. \"Dengan selesainya jembatan ini, mobilitas masyarakat dan distribusi hasil bumi dari Muaro Jambi ke pusat kota akan semakin efisien,\" ujarnya. Proyek ini dikerjakan selama dua tahun oleh kontraktor lokal dan nasional.",
        'time'    => '-4 hours',
    ],
    [
        'title'   => 'Harga Tandan Buah Segar Sawit di Batanghari Capai Rp 3.000 per Kilogram',
        'cat'     => 'Ekonomi',
        'seed'    => 'jambi-sawit',
        'content' => "Harga tandan buah segar (TBS) kelapa sawit di Kabupaten Batanghari, Jambi, mencapai Rp 3.000 per kilogram pada pekan ini. Kenaikan ini terjadi seiring dengan meningkatnya permintaan pasar minyak sawit mentah (CPO) global. Kepala Dinas Perkebunan Provinsi Jambi mengatakan bahwa saat ini harga tersebut merupakan level tertinggi dalam enam bulan terakhir.\n\nPetani sawit di Batanghari menyambut baik kenaikan harga ini karena berdampak langsung pada kesejahteraan mereka. Jambi merupakan salah satu provinsi penghasil sawit terbesar di Sumatera dengan luas perkebunan mencapai 450.000 hektar. Produksi sawit Jambi diperkirakan mencapai 1,2 juta ton per tahun.",
        'time'    => '-6 hours',
    ],
    [
        'title'   => 'Polisi Bekuk Dua Pelaku Pencurian Sepeda Motor di Kota Jambi',
        'cat'     => 'Kriminal',
        'seed'    => 'jambi-kriminal-1',
        'content' => "Tim Resmob Polresta Jambi berhasil membekuk dua pelaku pencurian kendaraan bermotor yang selama tiga bulan terakhir beraksi di wilayah Kota Jambi. Kedua pelaku yang merupakan warga Kecamatan Jambi Selatan ini ditangkap di tempat persembunyiannya tanpa perlawanan. Dari tangan pelaku, polisi mengamankan 12 unit sepeda motor hasil curian.\n\nKapolresta Jambi mengatakan bahwa para pelaku sudah beraksi di 10 lokasi berbeda sejak awal tahun. \"Mereka menjalankan aksinya pada malam hari dengan sasaran kendaraan yang diparkir di halaman rumah korban,\" ujarnya. Saat ini kedua tersangka dijerat dengan Pasal 363 KUHP tentang pencurian dengan pemberatan dengan ancaman hukuman maksimal 7 tahun penjara.",
        'time'    => '-8 hours',
    ],
    [
        'title'   => 'Festival Danau Gunung Tujuh Kerinci 2024 Targetkan 50 Ribu Wisatawan',
        'cat'     => 'Wisata',
        'seed'    => 'kerinci-festival',
        'content' => "Festival Danau Gunung Tujuh yang digelar di Kabupaten Kerinci, Jambi, secara resmi dibuka oleh Menteri Pariwisata dan Ekonomi Kreatif secara virtual. Festival tahunan yang berlangsung selama 10 hari ini menargetkan 50.000 wisatawan nusantara dan mancanegara. Berbagai atraksi disiapkan mulai dari lari lintas alam, paralayang, hingga pameran UMKM lokal.\n\nDanau Gunung Tujuh yang merupakan danau vulkanik tertinggi di Asia Tenggara (1.996 mdpl) menjadi daya tarik utama wisata Jambi. Suhu udara di kawasan ini berkisar antara 15-20 derajat Celcius. Pemerintah daerah telah membangun infrastruktur penunjang seperti akses jalan, area parkir, dan penginapan untuk mendukung sektor pariwisata Kerinci.",
        'time'    => '-10 hours',
    ],
    [
        'title'   => 'Batik Jambi Tembus Pasar Ekspor ke Singapura dan Malaysia',
        'cat'     => 'UMKM',
        'seed'    => 'jambi-batik-export',
        'content' => "Produk batik khas Jambi kini berhasil menembus pasar ekspor ke Singapura dan Malaysia. Hal ini diungkapkan oleh Kepala Dinas Koperasi dan UKM Provinsi Jambi dalam acara pameran UMKM di Kantor Gubernur Jambi. Sebanyak 25 pengrajin batik dari Kota Jambi dan Muaro Jambi telah mengirimkan produk mereka ke luar negeri.\n\nBatik Jambi memiliki ciri khas motif yang terinspirasi dari budaya Melayu dan alam Jambi seperti pucuk rebung, kapal sanggat, dan durian pecah. Dukungan pemerintah melalui program pelatihan dan bantuan peralatan produksi menjadi kunci keberhasilan UMKM batik Jambi. Pemerintah juga membantu pengurusan hak paten motif batik khas daerah.",
        'time'    => '-12 hours',
    ],
    [
        'title'   => 'Tim Basket Putra Jambi Raih Medali Emas Porwil Sumatera 2024',
        'cat'     => 'Olahraga',
        'seed'    => 'jambi-basket',
        'content' => "Tim bola basket putra Jambi berhasil meraih medali emas dalam ajang Pekan Olahraga Wilayah (Porwil) Sumatera 2024 yang digelar di Palembang. Dalam pertandingan final yang berlangsung sengit, Jambi mengalahkan tim tuan rumah Sumatera Selatan dengan skor 78-72. Kemenangan ini menjadi sejarah baru bagi cabang olahraga basket Jambi di kancah regional.\n\nPelatih tim basket Jambi mengatakan bahwa kemenangan ini adalah hasil dari latihan keras selama enam bulan terakhir. \"Kami mempersiapkan tim sejak awal tahun dengan program latihan intensif. Pemain kami tampil disiplin dan mampu mengontrol emosi di lapangan,\" ujarnya. Pemerintah Provinsi Jambi berjanji akan memberikan bonus bagi atlet berprestasi.",
        'time'    => '-14 hours',
    ],
    [
        'title'   => 'Program Sekolah Gratis 12 Tahun di Jambi Mulai Diterapkan 2025',
        'cat'     => 'Pendidikan',
        'seed'    => 'jambi-free-school',
        'content' => "Pemerintah Provinsi Jambi resmi menerapkan program sekolah gratis 12 tahun mulai tahun ajaran 2025. Program ini mencakup jenjang SD hingga SMA sederajat di seluruh kabupaten dan kota se-Provinsi Jambi. Kepala Dinas Pendidikan Provinsi Jambi menyebutkan bahwa program ini merupakan implementasi dari Peraturan Daerah tentang Penyelenggaraan Pendidikan.\n\nAnggaran yang disiapkan untuk program ini mencapai Rp 350 miliar per tahun yang bersumber dari APBD Provinsi Jambi. Pemerintah juga menyediakan bantuan seragam dan alat sekolah bagi siswa dari keluarga tidak mampu. Program ini diharapkan dapat meningkatkan angka partisipasi sekolah dan menekan angka putus sekolah di Jambi.",
        'time'    => '-16 hours',
    ],
    [
        'title'   => 'Mahasiswa KKN Universitas Jambi Ciptakan Inovasi Pengolahan Limbah Sawit',
        'cat'     => 'Pendidikan',
        'seed'    => 'jambi-innovation',
        'content' => "Mahasiswa Kuliah Kerja Nyata (KKN) Universitas Jambi berhasil menciptakan inovasi pengolahan limbah cair kelapa sawit menjadi energi biogas. Program yang dilaksanakan di Desa Rantau Karya, Kecamatan Muara Sabak, Tanjung Jabung Timur ini mendapat apresiasi dari pemerintah daerah. Inovasi ini diharapkan dapat menjadi solusi atas permasalahan limbah sawit yang selama ini mencemari lingkungan.\n\nTim mahasiswa yang beranggotakan delapan orang dari Fakultas Teknik dan Pertanian ini memanfaatkan reaktor anaerobik sederhana untuk mengolah limbah cair sawit. \"Kami ingin memberikan solusi yang ramah lingkungan dan bernilai ekonomis bagi masyarakat desa,\" ujar ketua tim KKN. Produk sampingan dari proses ini juga dapat dimanfaatkan sebagai pupuk organik cair.",
        'time'    => '-18 hours',
    ],
    [
        'title'   => 'Geopark Merangin: Situs Warisan Bumi UNESCO yang Wajib Dikunjungi',
        'cat'     => 'Wisata',
        'seed'    => 'geopark-merangin',
        'content' => "Geopark Merangin yang terletak di Kabupaten Merangin, Jambi, merupakan salah satu situs geowisata paling unik di Indonesia. Kawasan ini menyimpan fosil flora dan fauna purba yang diperkirakan berusia lebih dari 300 juta tahun. UNESCO telah mengakui Geopark Merangin sebagai bagian dari Global Geoparks Network sejak tahun 2022.\n\nWisatawan yang berkunjung ke Geopark Merangin dapat menikmati pemandangan batuan purba yang tersingkap di sepanjang aliran Sungai Batang Merangin. Selain geowisata, kawasan ini juga menawarkan wisata petualangan seperti arung jeram, trekking, dan pengamatan satwa. Pemerintah daerah terus mengembangkan fasilitas wisata di sekitar geopark untuk menarik lebih banyak wisatawan.",
        'time'    => '-20 hours',
    ],
];

// Get user ID
$user_id = get_users( [ 'role' => 'administrator', 'number' => 1, 'fields' => 'ID' ] );
$user_id = $user_id ? $user_id[0] : 1;

echo "\nCreating posts...\n";
foreach ( $posts_data as $p ) {
    $cat_slug = sanitize_title( $p['cat'] );
    $cat_id   = isset( $cat_ids[ $cat_slug ] ) ? $cat_ids[ $cat_slug ] : 1;

    $post_data = [
        'post_title'    => $p['title'],
        'post_content'  => $p['content'],
        'post_status'   => 'publish',
        'post_author'   => $user_id,
        'post_category' => [ $cat_id ],
        'post_date'     => date( 'Y-m-d H:i:s', strtotime( $p['time'] ) ),
        'meta_input'    => [
            'jp_thumbnail' => "https://picsum.photos/seed/{$p['seed']}/1200/630",
        ],
    ];

    $existing = get_posts( [
        'title'          => $p['title'],
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'posts_per_page' => 1,
        'fields'         => 'ids',
    ] );

    if ( ! $existing ) {
        $post_id = wp_insert_post( $post_data );
        if ( function_exists( 'generate_post_thumbnail' ) || is_wp_error( $post_id ) ) {
            // No-op
        }
        echo "  + Post: " . mb_substr( $p['title'], 0, 50 ) . "... ($post_id)\n";
    } else {
        echo "  o Post exists: " . mb_substr( $p['title'], 0, 50 ) . "...\n";
    }
}

echo "\nDone! Theme seeded with " . count( $categories ) . " categories and " . count( $posts_data ) . " posts.\n";
