<?php
/**
 * Jambi Press - Seed Phase 2: Video, Wisata, UMKM more posts + Breaking marker
 * Run after seed.php and theme activation.
 */
if ( ! defined( 'ABSPATH' ) ) {
    $_SERVER['SERVER_PROTOCOL']='HTTP/1.1';
    $_SERVER['HTTP_HOST']='localhost';
    $_SERVER['SERVER_NAME']='localhost';
    $_SERVER['REQUEST_URI']='/';
    $_SERVER['HTTPS']='off';
    $_SERVER['REQUEST_SCHEME']='http';
    require_once dirname( dirname( dirname( dirname( __FILE__ ) ) ) ) . '/wp-load.php';
}
require_once ABSPATH . 'wp-admin/includes/taxonomy.php';
require_once ABSPATH . 'wp-admin/includes/post.php';

echo "Seed Phase 2: Video + More posts + Breaking markers\n";

// Get user
$user_id = get_users( [ 'role' => 'administrator', 'number' => 1, 'fields' => 'ID' ] );
$user_id = $user_id ? $user_id[0] : 1;

// ======== Add Video category if not exists ========
$video_cat_id = category_exists( 'Video' );
if ( ! $video_cat_id ) {
    $video_cat_id = wp_insert_category( [
        'cat_name'          => 'Video',
        'category_description' => 'Video berita dan liputan Jambi',
        'category_nicename' => 'video',
    ] );
    echo "  + Category: Video (ID $video_cat_id)\n";
} else {
    echo "  o Category Video already exists (ID $video_cat_id)\n";
}

// Get existing category IDs
$cat_map = [];
$all_cats = get_categories( [ 'hide_empty' => false ] );
foreach ( $all_cats as $cat ) {
    $cat_map[ sanitize_title( $cat->name ) ] = $cat->term_id;
}

// ======== Video Posts ========
$video_posts = [
    [
        'title' => 'Wawancara Eksklusif: Program 100 Hari Gubernur Jambi',
        'cat'   => 'Video',
        'seed'  => 'video-wawancara-gubernur',
        'content' => 'Wawancara eksklusif tim redaksi Jambi Press dengan Gubernur Jambi mengenai program 100 hari pertama kepemimpinannya, termasuk prioritas pembangunan infrastruktur dan peningkatan layanan publik.',
        'time'  => '-1 hours',
    ],
    [
        'title' => 'Pesona Danau Gunung Tujuh Kerinci dari Ketinggian',
        'cat'   => 'Video',
        'seed'  => 'video-danau-kerinci',
        'content' => 'Jelajahi keindahan Danau Gunung Tujuh, danau vulkanik tertinggi di Asia Tenggara, melalui rekaman udara yang memukau. Destinasi wisata unggulan Provinsi Jambi.',
        'time'  => '-3 hours',
    ],
    [
        'title' => 'Jalan Sehat HUT Kota Jambi Diikuti Puluhan Ribu Warga',
        'cat'   => 'Video',
        'seed'  => 'video-hut-jambi',
        'content' => 'Momen kemeriahan jalan sehat dalam rangka Hari Ulang Tahun Kota Jambi yang diikuti puluhan ribu warga dari berbagai kecamatan se-Kota Jambi.',
        'time'  => '-5 hours',
    ],
    [
        'title' => 'Inovasi UMKM Batik Jambi Tembus Pasar Internasional',
        'cat'   => 'Video',
        'seed'  => 'video-batik-jambi',
        'content' => 'Liputan proses produksi batik khas Jambi yang kini berhasil menembus pasar ekspor ke Singapura, Malaysia, dan negara Eropa.',
        'time'  => '-7 hours',
    ],
    [
        'title' => 'Atlet Jambi Berlatih Keras Menuju Porwil Sumatera',
        'cat'   => 'Video',
        'seed'  => 'video-atlet-jambi',
        'content' => 'Suasana latihan atlet-atlet Jambi dalam persiapan menghadapi Pekan Olahraga Wilayah Sumatera. Target raihan medali emas di berbagai cabang olahraga.',
        'time'  => '-9 hours',
    ],
];
echo "Creating Video posts...\n";
foreach ( $video_posts as $p ) {
    $existing = get_posts( [ 'title' => $p['title'], 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 1, 'fields' => 'ids' ] );
    if ( ! $existing ) {
        $pid = wp_insert_post( [
            'post_title'    => $p['title'],
            'post_content'  => $p['content'],
            'post_status'   => 'publish',
            'post_author'   => $user_id,
            'post_category' => [ $cat_map[ sanitize_title( $p['cat'] ) ] ],
            'post_date'     => date( 'Y-m-d H:i:s', strtotime( $p['time'] ) ),
        ] );
        echo "  + Video Post: " . mb_substr( $p['title'], 0, 50 ) . "... ($pid)\n";
    } else {
        echo "  o Exists: " . mb_substr( $p['title'], 0, 50 ) . "...\n";
    }
}

// ======== More Wisata Posts ========
$wisata_extra = [
    [
        'title' => 'Menikmati Sunrise di Puncak Gunung Kerinci, Atap Sumatera',
        'cat'   => 'Wisata',
        'seed'  => 'wisata-gunung-kerinci',
        'content' => 'Gunung Kerinci dengan ketinggian 3.805 mdpl merupakan gunung api tertinggi di Sumatera. Pendakian menuju puncak menawarkan panorama matahari terbit yang spektakuler dari atas awan.',
        'time'  => '-2 hours',
    ],
    [
        'title' => 'Candi Muaro Jambi: Kompleks Candi Buddha Terluas di Asia Tenggara',
        'cat'   => 'Wisata',
        'seed'  => 'wisata-candi-muaro',
        'content' => 'Kompleks percandian Muaro Jambi merupakan situs sejarah peninggalan Kerajaan Sriwijaya yang terletak di tepi Sungai Batanghari. Luasnya mencapai 3.981 hektar dengan puluhan candi yang tersebar.',
        'time'  => '-4 hours',
    ],
    [
        'title' => 'Geopark Merangin UNESCO: Menelusuri Fosil Berusia 300 Juta Tahun',
        'cat'   => 'Wisata',
        'seed'  => 'wisata-geopark',
        'content' => 'Geopark Merangin yang telah diakui UNESCO menyimpan fosil flora dan fauna purba. Wisatawan dapat melihat jejak kehidupan prasejarah di sepanjang aliran Sungai Batang Merangin.',
        'time'  => '-6 hours',
    ],
];
echo "Creating extra Wisata posts...\n";
foreach ( $wisata_extra as $p ) {
    $existing = get_posts( [ 'title' => $p['title'], 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 1, 'fields' => 'ids' ] );
    if ( ! $existing ) {
        $pid = wp_insert_post( [
            'post_title'    => $p['title'],
            'post_content'  => $p['content'],
            'post_status'   => 'publish',
            'post_author'   => $user_id,
            'post_category' => [ $cat_map[ sanitize_title( $p['cat'] ) ] ],
            'post_date'     => date( 'Y-m-d H:i:s', strtotime( $p['time'] ) ),
        ] );
        echo "  + Wisata Post: " . mb_substr( $p['title'], 0, 50 ) . "... ($pid)\n";
    } else {
        echo "  o Exists: " . mb_substr( $p['title'], 0, 50 ) . "...\n";
    }
}

// ======== More UMKM Posts ========
$umkm_extra = [
    [
        'title' => 'Kopi Arabika Kerinci Dapat Sertifikasi Indikasi Geografis dari Pemerintah',
        'cat'   => 'UMKM',
        'seed'  => 'umkm-kopi-arabika',
        'content' => 'Kopi Arabika hasil perkebunan petani di dataran tinggi Kerinci resmi mendapatkan sertifikasi Indikasi Geografis (IG). Pengakuan ini membuka peluang pasar yang lebih luas baik nasional maupun internasional.',
        'time'  => '-3 hours',
    ],
    [
        'title' => 'Sentra Industri Tahu dan Tempe di Kota Jambi: Omzet Puluhan Juta per Hari',
        'cat'   => 'UMKM',
        'seed'  => 'umkm-tahu-tempe',
        'content' => 'Sentra industri tahu dan tempe di Kecamatan Kota Baru, Kota Jambi, mampu memproduksi puluhan kilogram kedelai setiap hari dan dipasok ke berbagai pasar tradisional di wilayah Jambi.',
        'time'  => '-6 hours',
    ],
    [
        'title' => 'Produk Kerajinan Tangan Anyaman Pandan asal Tanjung Jabung Tembus Pasar Jepang',
        'cat'   => 'UMKM',
        'seed'  => 'umkm-anyaman',
        'content' => 'Kerajinan tangan anyaman pandan asal Kabupaten Tanjung Jabung Barat berhasil menembus pasar Jepang. Produk seperti tas, tikar, dan hiasan dinding diminati masyarakat luar negeri.',
        'time'  => '-9 hours',
    ],
];
echo "Creating extra UMKM posts...\n";
foreach ( $umkm_extra as $p ) {
    $existing = get_posts( [ 'title' => $p['title'], 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 1, 'fields' => 'ids' ] );
    if ( ! $existing ) {
        $pid = wp_insert_post( [
            'post_title'    => $p['title'],
            'post_content'  => $p['content'],
            'post_status'   => 'publish',
            'post_author'   => $user_id,
            'post_category' => [ $cat_map[ sanitize_title( $p['cat'] ) ] ],
            'post_date'     => date( 'Y-m-d H:i:s', strtotime( $p['time'] ) ),
        ] );
        echo "  + UMKM Post: " . mb_substr( $p['title'], 0, 50 ) . "... ($pid)\n";
    } else {
        echo "  o Exists: " . mb_substr( $p['title'], 0, 50 ) . "...\n";
    }
}

// ======== Mark breaking posts ========
echo "\nMarking breaking news posts...\n";
$breaking_id = get_posts( [
    'title' => 'DPRD Jambi Sahkan APBD 2025',
    'post_type' => 'post', 'post_status' => 'publish',
    'posts_per_page' => 1, 'fields' => 'ids',
] );
if ( ! empty( $breaking_id ) ) {
    update_post_meta( $breaking_id[0], 'jp_breaking', '1' );
    echo "  + Marked post ID $breaking_id[0] as breaking\n";
}
$breaking2 = get_posts( [
    'title' => 'Gubernur Jambi Resmikan Jembatan Batanghari',
    'post_type' => 'post', 'post_status' => 'publish',
    'posts_per_page' => 1, 'fields' => 'ids',
] );
if ( ! empty( $breaking2 ) ) {
    update_post_meta( $breaking2[0], 'jp_breaking', '1' );
    echo "  + Marked post ID $breaking2[0] as breaking\n";
}
// Mark 3 most recent posts as breaking too
$recent = get_posts( [ 'posts_per_page' => 3, 'post_status' => 'publish', 'fields' => 'ids' ] );
foreach ( $recent as $rid ) {
    update_post_meta( $rid, 'jp_breaking', '1' );
    echo "  + Marked post ID $rid as breaking (latest)\n";
}

echo "\nSeed Phase 2 complete!\n";
