<?php
/**
 * Jambi Press Theme Functions
 *
 * @package Jambi_Press
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'JP_VERSION', '1.0.0' );
define( 'JP_DIR', get_template_directory() );
define( 'JP_URI', get_template_directory_uri() );

/* ============================================================
   THEME SETUP
   ============================================================ */

add_action( 'after_setup_theme', function() {
    load_theme_textdomain( 'jambi-press', JP_DIR . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', [
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'
    ] );
    add_theme_support( 'custom-logo', [
        'height'      => 40,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ] );
    add_theme_support( 'editor-styles' );

    register_nav_menus( [
        'primary'   => __( 'Navigasi Utama', 'jambi-press' ),
        'categories' => __( 'Kategori Berita', 'jambi-press' ),
        'footer'    => __( 'Footer Links', 'jambi-press' ),
    ] );

    add_image_size( 'jp-hero', 1200, 630, true );
    add_image_size( 'jp-card', 600, 400, true );
    add_image_size( 'jp-thumb', 300, 200, true );
    add_image_size( 'jp-square', 200, 200, true );
    add_image_size( 'jp-list', 120, 80, true );
} );

/* ============================================================
   ENQUEUE SCRIPTS & STYLES
   ============================================================ */

add_action( 'wp_enqueue_scripts', function() {
    // Cabinet Grotesk font
    wp_enqueue_style( 'cabinet-grotesk',
        'https://api.fontshare.com/v2/css?f[]=cabinet-grotesk@400,500,700,800,900&display=swap',
        [],
        null
    );

    // Theme base styles (hand-crafted, no CDN dependency)
    wp_enqueue_style( 'jambi-press-style', JP_URI . '/style.css', [ 'cabinet-grotesk' ], JP_VERSION );

    // GSAP + ScrollTrigger (admin bar aware)
    wp_enqueue_script( 'gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', [], '3.12.5', true );
    wp_enqueue_script( 'gsap-scrolltrigger', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js', [ 'gsap' ], '3.12.5', true );

    // Theme JS
    wp_enqueue_script( 'jambi-press-main', JP_URI . '/assets/main.js', [ 'gsap', 'gsap-scrolltrigger' ], JP_VERSION, true );
    wp_localize_script( 'jambi-press-main', 'jpData', [
        'ajaxUrl' => admin_url( 'admin-ajax.php' ),
        'nonce'   => wp_create_nonce( 'jp_nonce' ),
    ] );
} );

/* ============================================================
   WIDGET AREAS
   ============================================================ */

add_action( 'widgets_init', function() {
    register_sidebar( [
        'name'          => __( 'Sidebar Berita', 'jambi-press' ),
        'id'            => 'sidebar-news',
        'before_widget' => '<div style="margin-bottom:24px;">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 style="font-size:1.125rem; font-weight:800; margin:0 0 12px; padding:0 0 8px; border-bottom:3px solid var(--jp-red);">',
        'after_title'   => '</h3>',
    ] );

    register_sidebar( [
        'name'          => __( 'Area Iklan Atas', 'jambi-press' ),
        'id'            => 'ad-top',
        'before_widget' => '<div class="jp-ad" style="width:100%; height:96px; margin-bottom:24px;">',
        'after_widget'  => '</div>',
        'before_title'  => '<span style="position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0;">',
        'after_title'   => '</span>',
    ] );

    register_sidebar( [
        'name'          => __( 'Area Iklan Bawah', 'jambi-press' ),
        'id'            => 'ad-bottom',
        'before_widget' => '<div class="jp-ad" style="width:100%; height:96px; margin-bottom:24px;">',
        'after_widget'  => '</div>',
        'before_title'  => '<span style="position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0;">',
        'after_title'   => '</span>',
    ] );

    register_sidebar( [
        'name'          => __( 'Footer Widget 1', 'jambi-press' ),
        'id'            => 'footer-1',
        'before_widget' => '<div style="margin-bottom:24px;">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 style="font-size:.8125rem; font-weight:800; text-transform:uppercase; letter-spacing:.14em; color:var(--jp-white); margin:0 0 16px;">',
        'after_title'   => '</h4>',
    ] );

    register_sidebar( [
        'name'          => __( 'Footer Widget 2', 'jambi-press' ),
        'id'            => 'footer-2',
        'before_widget' => '<div style="margin-bottom:24px;">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 style="font-size:.8125rem; font-weight:800; text-transform:uppercase; letter-spacing:.14em; color:var(--jp-white); margin:0 0 16px;">',
        'after_title'   => '</h4>',
    ] );
} );

/* ============================================================
   HELPER FUNCTIONS
   ============================================================ */

/**
 * Get latest posts for news sections
 */
function jp_get_posts( $args = [] ) {
    $defaults = [
        'posts_per_page' => 6,
        'post_status'    => 'publish',
        'no_found_rows'  => true,
    ];
    $args = wp_parse_args( $args, $defaults );
    return new WP_Query( $args );
}

/**
 * Get categories for navigation
 */
function jp_get_categories() {
    return get_categories( [
        'hide_empty' => true,
        'number'     => 12,
        'orderby'    => 'count',
        'order'      => 'DESC',
    ] );
}

/**
 * Post meta: reading time estimate
 */
function jp_reading_time( $post_id = null ) {
    $post_id = $post_id ?: get_the_ID();
    $content = get_post_field( 'post_content', $post_id );
    $word_count = str_word_count( strip_tags( $content ) );
    $minutes = max( 1, ceil( $word_count / 200 ) );
    return $minutes . ' menit';
}

/**
 * Post meta: time ago
 */
function jp_time_ago() {
    $time = get_the_time( 'U' );
    $diff = time() - $time;

    if ( $diff < 60 )    return 'Baru saja';
    if ( $diff < 3600 )  return floor( $diff / 60 ) . ' menit lalu';
    if ( $diff < 86400 ) return floor( $diff / 3600 ) . ' jam lalu';
    if ( $diff < 604800 ) return floor( $diff / 86400 ) . ' hari lalu';
    return get_the_date();
}

/**
 * Excerpt with custom length
 */
function jp_excerpt( $length = 20, $post_id = null ) {
    $post_id = $post_id ?: get_the_ID();
    $excerpt = get_the_excerpt( $post_id );
    $words = explode( ' ', $excerpt );
    if ( count( $words ) > $length ) {
        $excerpt = implode( ' ', array_slice( $words, 0, $length ) ) . '...';
    }
    return $excerpt;
}

/**
 * Custom except length
 */
add_filter( 'excerpt_length', function() { return 20; } );
add_filter( 'excerpt_more', function() { return '...'; } );

/**
 * Placeholder image for posts without featured image
 */
function jp_placeholder_img( $width = 600, $height = 400 ) {
    $color = '#E5E5E5';
    $text_color = '#A3A3A3';
    $text = 'Jambi Press';
    return 'data:image/svg+xml,' . rawurlencode( '<svg xmlns="http://www.w3.org/2000/svg" width="' . $width . '" height="' . $height . '" viewBox="0 0 ' . $width . ' ' . $height . '"><rect fill="' . $color . '" width="' . $width . '" height="' . $height . '"/><text fill="' . $text_color . '" font-family="system-ui,sans-serif" font-size="14" font-weight="600" text-anchor="middle" x="' . ($width/2) . '" y="' . ($height/2) . '" dominant-baseline="middle">' . $text . '</text></svg>' );
}

/**
 * Get post thumbnail or placeholder
 */
function jp_post_thumb( $size = 'jp-thumb', $width = 600, $height = 400, $loading = 'lazy' ) {
    if ( has_post_thumbnail() ) {
        the_post_thumbnail( $size, [ 'style' => 'width:100%; height:100%; object-fit:cover;', 'loading' => $loading ] );
    } else {
        echo '<img src="' . jp_placeholder_img( $width, $height ) . '" alt="" style="width:100%; height:100%; object-fit:cover;" loading="' . $loading . '">';
    }
}

/**
 * Check if post is sponsored / advertorial
 */
function jp_is_sponsored( $post_id = null ) {
    $post_id = $post_id ?: get_the_ID();
    return get_post_meta( $post_id, 'jp_sponsored', true ) === '1';
}

function jp_sponsored_badge( $post_id = null ) {
    if ( jp_is_sponsored( $post_id ) ) {
        echo '<span class="jp-sponsor">Sponsored</span>';
    }
}

/**
 * Add custom body classes
 */
add_filter( 'body_class', function( $classes ) {
    $classes[] = 'jambi-press-theme';
    if ( is_front_page() ) $classes[] = 'jp-front-page';
    return $classes;
} );

/**
 * Disable WordPress emoji for performance
 */
add_action( 'init', function() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
} );

/**
 * Enable Yoast breadcrumb support
 */
add_theme_support( 'yoast-seo-breadcrumbs' );

/**
 * Remove unnecessary head items
 */
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );

/**
 * Auto-create required pages on theme activation
 */
add_action( 'after_switch_theme', function() {
    $pages = [
        'e-paper' => [
            'title'   => 'E-Paper',
            'content' => 'Edisi digital Jambi Press dapat diakses di sini. Pilih edisi terbaru atau cari arsip berdasarkan tanggal.',
            'template'=> 'template-epaper.php',
        ],
        'hubungi-redaksi' => [
            'title'   => 'Kontak Redaksi',
            'content' => 'Hubungi redaksi Jambi Press untuk informasi, pengaduan, atau kerja sama.',
            'template'=> 'template-contact.php',
        ],
        'pedoman-media-siber' => [
            'title'   => 'Pedoman Media Siber',
            'content' => 'Jambi Press berkomitmen mengikuti Pedoman Media Siber Indonesia dalam setiap aspek pemberitaan dan pengelolaan media.',
            'template'=> 'template-pedoman.php',
        ],
        'kebijakan-privasi' => [
            'title'   => 'Kebijakan Privasi',
            'content' => 'Kebijakan privasi Jambi Press mengatur pengumpulan, penggunaan, dan perlindungan data pribadi pengguna.',
            'template'=> 'template-footer-page.php',
        ],
        'tentang-kami' => [
            'title'   => 'Tentang Kami',
            'content' => 'Jambi Press adalah portal media digital resmi untuk Provinsi Jambi. Berita kredibel, cepat, dan independen.',
            'template'=> 'template-footer-page.php',
        ],
        'profil-redaksi' => [
            'title'   => 'Profil Redaksi',
            'content' => 'Redaksi Jambi Press terdiri dari wartawan dan editor profesional yang berkomitmen menyajikan berita akurat, berimbang, dan terpercaya. Dipimpin oleh pemimpin redaksi dengan pengalaman lebih dari 10 tahun di industri media. Seluruh konten diproduksi sesuai standar jurnalistik dan Pedoman Media Siber Indonesia.',
            'template'=> 'template-footer-page.php',
        ],
        'kebijakan-editorial' => [
            'title'   => 'Kebijakan Editorial',
            'content' => 'Jambi Press berpegang pada prinsip independensi, akurasi, dan keberimbangan dalam setiap pemberitaan. Keputusan redaksi bersifat independen dan tidak dipengaruhi oleh kepentingan politik, ekonomi, atau golongan tertentu. Setiap berita diverifikasi minimal dua sumber independen sebelum dipublikasikan. Hak jawab dan hak koreksi diberikan secara proporsional kepada pihak yang merasa dirugikan oleh pemberitaan.',
            'template'=> 'template-footer-page.php',
        ],
        'kode-etik' => [
            'title'   => 'Kode Etik',
            'content' => 'Seluruh wartawan Jambi Press terikat pada Kode Etik Jurnalistik dan Pedoman Perilaku Penyiaran. Menjaga independensi, tidak menerima suap, melindungi identitas korban kejahatan susila, dan tidak menyiarkan berita bohong atau fitnah. Pelanggaran kode etik akan ditindak tegas sesuai sanksi yang berlaku.',
            'template'=> 'template-footer-page.php',
        ],
        'iklan' => [
            'title'   => 'Iklan & Kerja Sama',
            'content' => 'Jangkau ribuan pembaca setiap hari melalui platform Jambi Press. Tersedia berbagai paket iklan: banner display 728x90, 300x250, native advertorial, dan sponsored post. Hubungi tim kami untuk diskusi lebih lanjut mengenai kerja sama media dan promosi.',
            'template'=> 'template-footer-page.php',
        ],
        'press-release' => [
            'title'   => 'Press Release',
            'content' => 'Kirimkan siaran pers Anda ke redaksi Jambi Press. Siaran pers akan ditinjau oleh tim redaksi dan diterbitkan jika sesuai dengan kriteria dan kebijakan editorial. Lampirkan materi pendukung seperti foto atau video jika tersedia.',
            'template'=> 'template-footer-page.php',
        ],
        'disclaimer' => [
            'title'   => 'Disclaimer',
            'content' => 'Seluruh konten di Jambi Press disajikan untuk tujuan informasi. Jambi Press tidak bertanggung jawab atas kerugian yang timbul akibat penggunaan informasi dari situs ini. Konten dari sumber eksternal adalah tanggung jawab masing-masing pemilik. Jambi Press berhak mengubah, menghapus, atau menonaktifkan konten tanpa pemberitahuan sebelumnya.',
            'template'=> 'template-footer-page.php',
        ],
        'syarat-ketentuan' => [
            'title'   => 'Syarat & Ketentuan',
            'content' => 'Dengan mengakses dan menggunakan situs Jambi Press, Anda menyetujui syarat dan ketentuan berikut. Seluruh konten dilindungi hak cipta. Dilarang mereproduksi, mendistribusikan, atau memanfaatkan konten tanpa izin tertulis. Komentar dan konten pengguna adalah tanggung jawab pengguna masing-masing.',
            'template'=> 'template-footer-page.php',
        ],
        'hak-cipta' => [
            'title'   => 'Hak Cipta',
            'content' => 'Seluruh konten yang dipublikasikan di Jambi Press dilindungi oleh Undang-Undang Hak Cipta Indonesia. Setiap reproduksi, distribusi, atau penggunaan komersial tanpa izin tertulis dari Jambi Press dilarang keras. Pengutipan untuk tujuan non-komersial diperbolehkan dengan menyertakan sumber yang jelas.',
            'template'=> 'template-footer-page.php',
        ],
    ];

    foreach ( $pages as $slug => $page ) {
        $existing = get_posts( [ 'name' => $slug, 'post_type' => 'page', 'post_status' => 'any', 'posts_per_page' => 1 ] );
        if ( ! $existing ) {
            $id = wp_insert_post( [
                'post_title'   => $page['title'],
                'post_content' => $page['content'],
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_name'    => $slug,
            ] );
            if ( $id && $page['template'] ) {
                update_post_meta( $id, '_wp_page_template', $page['template'] );
            }
        }
    }
} );

/* ============================================================
   SEED DATA ENDPOINT (InfinityFree - no WP-CLI)
   ============================================================ */
add_action( 'rest_api_init', function () {
    register_rest_route( 'jpseed/v1', '/run', [
        'methods'             => 'GET',
        'callback'            => 'jp_seed_data',
        'permission_callback' => function () { return current_user_can( 'manage_options' ); },
    ] );
} );

function jp_seed_data() {
    require_once ABSPATH . 'wp-admin/includes/taxonomy.php';
    require_once ABSPATH . 'wp-admin/includes/post.php';
    require_once ABSPATH . 'wp-admin/includes/file.php';
    require_once ABSPATH . 'wp-admin/includes/media.php';
    require_once ABSPATH . 'wp-admin/includes/image.php';

    $log = [];

    $categories = [
        'Politik'       => 'Berita politik terkini Provinsi Jambi',
        'Pemerintahan'  => 'Kebijakan dan program pemerintah daerah Jambi',
        'Ekonomi'       => 'Ekonomi lokal, bisnis, dan keuangan Jambi',
        'Kriminal'      => 'Peristiwa kriminal dan hukum di Jambi',
        'Pendidikan'    => 'Dunia pendidikan Jambi dan sekitarnya',
        'Olahraga'      => 'Prestasi olahraga Jambi di tingkat regional dan nasional',
        'Budaya'        => 'Budaya, adat istiadat, dan kesenian Jambi',
        'Wisata'        => 'Destinasi wisata unggulan Provinsi Jambi',
        'UMKM'          => 'Usaha mikro, kecil, dan menengah masyarakat Jambi',
        'Infrastruktur' => 'Pembangunan infrastruktur dan proyek publik Jambi',
        'Lingkungan'    => 'Isu lingkungan dan kebencanaan di Jambi',
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
            $log[] = "Category created: $name";
        } else {
            $cat_ids[ sanitize_title( $name ) ] = $existing;
            $log[] = "Category exists: $name";
        }
    }

    $posts_data = [
        [ 'title' => 'DPRD Jambi Sahkan APBD 2025 sebesar Rp 4,8 Triliun Fokus pada Infrastruktur dan Pendidikan', 'cat' => 'Politik', 'time' => '-2 hours',
          'content' => "DPRD Provinsi Jambi mengesahkan Anggaran Pendapatan dan Belanja Daerah (APBD) tahun anggaran 2025 sebesar Rp 4,8 triliun dalam rapat paripurna yang digelar di gedung DPRD Jambi pada Senin. Ketua DPRD Jambi mengatakan bahwa anggaran tersebut difokuskan pada pembangunan infrastruktur, sektor pendidikan, dan layanan kesehatan bagi masyarakat.\n\nAnggaran tersebut mengalami kenaikan sebesar 8% dibandingkan APBD 2024. Beberapa program prioritas yang mendapat alokasi dana besar antara lain pembangunan jalan provinsi, peningkatan kualitas sekolah, dan program beasiswa bagi mahasiswa Jambi berprestasi. Gubernur Jambi menyampaikan apresiasi kepada DPRD atas pengesahan tepat waktu dan berharap anggaran ini dapat dimaksimalkan untuk kesejahteraan rakyat." ],
        [ 'title' => 'Gubernur Jambi Resmikan Jembatan Batanghari Tahap II Senilai Rp 120 Miliar', 'cat' => 'Infrastruktur', 'time' => '-4 hours',
          'content' => "Gubernur Jambi meresmikan jembatan Batanghari tahap II yang menghubungkan Kota Jambi dengan Kabupaten Muaro Jambi. Jembatan sepanjang 1,2 kilometer ini dibangun dengan anggaran Rp 120 miliar dari APBN dan APBD Provinsi Jambi. Pembangunan jembatan ini bertujuan untuk memperlancar akses transportasi dan distribusi barang antardaerah.\n\nDalam sambutannya, Gubernur menekankan pentingnya infrastruktur konektivitas untuk mendorong pertumbuhan ekonomi daerah. \"Dengan selesainya jembatan ini, mobilitas masyarakat dan distribusi hasil bumi dari Muaro Jambi ke pusat kota akan semakin efisien,\" ujarnya. Proyek ini dikerjakan selama dua tahun oleh kontraktor lokal dan nasional." ],
        [ 'title' => 'Harga Tandan Buah Segar Sawit di Batanghari Capai Rp 3.000 per Kilogram', 'cat' => 'Ekonomi', 'time' => '-6 hours',
          'content' => "Harga tandan buah segar (TBS) kelapa sawit di Kabupaten Batanghari, Jambi, mencapai Rp 3.000 per kilogram pada pekan ini. Kenaikan ini terjadi seiring dengan meningkatnya permintaan pasar minyak sawit mentah (CPO) global. Kepala Dinas Perkebunan Provinsi Jambi mengatakan bahwa saat ini harga tersebut merupakan level tertinggi dalam enam bulan terakhir.\n\nPetani sawit di Batanghari menyambut baik kenaikan harga ini karena berdampak langsung pada kesejahteraan mereka. Jambi merupakan salah satu provinsi penghasil sawit terbesar di Sumatera dengan luas perkebunan mencapai 450.000 hektar. Produksi sawit Jambi diperkirakan mencapai 1,2 juta ton per tahun." ],
        [ 'title' => 'Polisi Bekuk Dua Pelaku Pencurian Sepeda Motor di Kota Jambi', 'cat' => 'Kriminal', 'time' => '-8 hours',
          'content' => "Tim Resmob Polresta Jambi berhasil membekuk dua pelaku pencurian kendaraan bermotor yang selama tiga bulan terakhir beraksi di wilayah Kota Jambi. Kedua pelaku yang merupakan warga Kecamatan Jambi Selatan ini ditangkap di tempat persembunyiannya tanpa perlawanan. Dari tangan pelaku, polisi mengamankan 12 unit sepeda motor hasil curian.\n\nKapolresta Jambi mengatakan bahwa para pelaku sudah beraksi di 10 lokasi berbeda sejak awal tahun. \"Mereka menjalankan aksinya pada malam hari dengan sasaran kendaraan yang diparkir di halaman rumah korban,\" ujarnya. Saat ini kedua tersangka dijerat dengan Pasal 363 KUHP tentang pencurian dengan pemberatan dengan ancaman hukuman maksimal 7 tahun penjara." ],
        [ 'title' => 'Festival Danau Gunung Tujuh Kerinci 2024 Targetkan 50 Ribu Wisatawan', 'cat' => 'Wisata', 'time' => '-10 hours',
          'content' => "Festival Danau Gunung Tujuh yang digelar di Kabupaten Kerinci, Jambi, secara resmi dibuka oleh Menteri Pariwisata dan Ekonomi Kreatif secara virtual. Festival tahunan yang berlangsung selama 10 hari ini menargetkan 50.000 wisatawan nusantara dan mancanegara. Berbagai atraksi disiapkan mulai dari lari lintas alam, paralayang, hingga pameran UMKM lokal.\n\nDanau Gunung Tujuh yang merupakan danau vulkanik tertinggi di Asia Tenggara (1.996 mdpl) menjadi daya tarik utama wisata Jambi. Suhu udara di kawasan ini berkisar antara 15-20 derajat Celcius. Pemerintah daerah telah membangun infrastruktur penunjang seperti akses jalan, area parkir, dan penginapan untuk mendukung sektor pariwisata Kerinci." ],
        [ 'title' => 'Batik Jambi Tembus Pasar Ekspor ke Singapura dan Malaysia', 'cat' => 'UMKM', 'time' => '-12 hours',
          'content' => "Produk batik khas Jambi kini berhasil menembus pasar ekspor ke Singapura dan Malaysia. Hal ini diungkapkan oleh Kepala Dinas Koperasi dan UKM Provinsi Jambi dalam acara pameran UMKM di Kantor Gubernur Jambi. Sebanyak 25 pengrajin batik dari Kota Jambi dan Muaro Jambi telah mengirimkan produk mereka ke luar negeri.\n\nBatik Jambi memiliki ciri khas motif yang terinspirasi dari budaya Melayu dan alam Jambi seperti pucuk rebung, kapal sanggat, dan durian pecah. Dukungan pemerintah melalui program pelatihan dan bantuan peralatan produksi menjadi kunci keberhasilan UMKM batik Jambi. Pemerintah juga membantu pengurusan hak paten motif batik khas daerah." ],
        [ 'title' => 'Tim Basket Putra Jambi Raih Medali Emas Porwil Sumatera 2024', 'cat' => 'Olahraga', 'time' => '-14 hours',
          'content' => "Tim bola basket putra Jambi berhasil meraih medali emas dalam ajang Pekan Olahraga Wilayah (Porwil) Sumatera 2024 yang digelar di Palembang. Dalam pertandingan final yang berlangsung sengit, Jambi mengalahkan tim tuan rumah Sumatera Selatan dengan skor 78-72. Kemenangan ini menjadi sejarah baru bagi cabang olahraga basket Jambi di kancah regional.\n\nPelatih tim basket Jambi mengatakan bahwa kemenangan ini adalah hasil dari latihan keras selama enam bulan terakhir. \"Kami mempersiapkan tim sejak awal tahun dengan program latihan intensif. Pemain kami tampil disiplin dan mampu mengontrol emosi di lapangan,\" ujarnya. Pemerintah Provinsi Jambi berjanji akan memberikan bonus bagi atlet berprestasi." ],
        [ 'title' => 'Program Sekolah Gratis 12 Tahun di Jambi Mulai Diterapkan 2025', 'cat' => 'Pendidikan', 'time' => '-16 hours',
          'content' => "Pemerintah Provinsi Jambi resmi menerapkan program sekolah gratis 12 tahun mulai tahun ajaran 2025. Program ini mencakup jenjang SD hingga SMA sederajat di seluruh kabupaten dan kota se-Provinsi Jambi. Kepala Dinas Pendidikan Provinsi Jambi menyebutkan bahwa program ini merupakan implementasi dari Peraturan Daerah tentang Penyelenggaraan Pendidikan.\n\nAnggaran yang disiapkan untuk program ini mencapai Rp 350 miliar per tahun yang bersumber dari APBD Provinsi Jambi. Pemerintah juga menyediakan bantuan seragam dan alat sekolah bagi siswa dari keluarga tidak mampu. Program ini diharapkan dapat meningkatkan angka partisipasi sekolah dan menekan angka putus sekolah di Jambi." ],
        [ 'title' => 'Mahasiswa KKN Universitas Jambi Ciptakan Inovasi Pengolahan Limbah Sawit', 'cat' => 'Pendidikan', 'time' => '-18 hours',
          'content' => "Mahasiswa Kuliah Kerja Nyata (KKN) Universitas Jambi berhasil menciptakan inovasi pengolahan limbah cair kelapa sawit menjadi energi biogas. Program yang dilaksanakan di Desa Rantau Karya, Kecamatan Muara Sabak, Tanjung Jabung Timur ini mendapat apresiasi dari pemerintah daerah. Inovasi ini diharapkan dapat menjadi solusi atas permasalahan limbah sawit yang selama ini mencemari lingkungan.\n\nTim mahasiswa yang beranggotakan delapan orang dari Fakultas Teknik dan Pertanian ini memanfaatkan reaktor anaerobik sederhana untuk mengolah limbah cair sawit. \"Kami ingin memberikan solusi yang ramah lingkungan dan bernilai ekonomis bagi masyarakat desa,\" ujar ketua tim KKN. Produk sampingan dari proses ini juga dapat dimanfaatkan sebagai pupuk organik cair." ],
        [ 'title' => 'Geopark Merangin: Situs Warisan Bumi UNESCO yang Wajib Dikunjungi', 'cat' => 'Wisata', 'time' => '-20 hours',
          'content' => "Geopark Merangin yang terletak di Kabupaten Merangin, Jambi, merupakan salah satu situs geowisata paling unik di Indonesia. Kawasan ini menyimpan fosil flora dan fauna purba yang diperkirakan berusia lebih dari 300 juta tahun. UNESCO telah mengakui Geopark Merangin sebagai bagian dari Global Geoparks Network sejak tahun 2022.\n\nWisatawan yang berkunjung ke Geopark Merangin dapat menikmati pemandangan batuan purba yang tersingkap di sepanjang aliran Sungai Batang Merangin. Selain geowisata, kawasan ini juga menawarkan wisata petualangan seperti arung jeram, trekking, dan pengamatan satwa. Pemerintah daerah terus mengembangkan fasilitas wisata di sekitar geopark untuk menarik lebih banyak wisatawan." ],
    ];

    $user_id = get_users( [ 'role' => 'administrator', 'number' => 1, 'fields' => 'ID' ] );
    $user_id = $user_id ? $user_id[0] : 1;

    foreach ( $posts_data as $p ) {
        $cat_slug = sanitize_title( $p['cat'] );
        $cat_id   = $cat_ids[ $cat_slug ] ?? 1;

        $existing = get_posts( [ 'title' => $p['title'], 'post_type' => 'post', 'post_status' => 'any', 'posts_per_page' => 1, 'fields' => 'ids' ] );
        if ( $existing ) {
            $log[] = "Post exists: {$p['title']}";
            continue;
        }

        $post_id = wp_insert_post( [
            'post_title'   => $p['title'],
            'post_content' => $p['content'],
            'post_status'  => 'publish',
            'post_author'  => $user_id,
            'post_category' => [ $cat_id ],
            'post_date'    => date( 'Y-m-d H:i:s', strtotime( $p['time'] ) ),
        ] );

        if ( $post_id && ! is_wp_error( $post_id ) ) {
            $log[] = "Post created: {$p['title']} (ID $post_id)";
        }
    }

    return new WP_REST_Response( [ 'success' => true, 'log' => $log ], 200 );
}
