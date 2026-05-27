<?php
/**
 * Template Name: Kandungan
 */

get_header();
?>

<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-14 lg:py-20">
	<header class="mb-12 text-center max-w-2xl mx-auto">
		<p class="text-xs sm:text-sm font-medium tracking-[0.18em] uppercase text-[#A78BFA] mb-3"><?php esc_html_e( 'Bahan Aktif', 'lumina-skin' ); ?></p>
		<h1 class="font-playfair text-3xl sm:text-4xl lg:text-[2.6rem] leading-tight tracking-tight text-[#2E1065]">
			<?php esc_html_e( 'Kenali Kandungan', 'lumina-skin' ); ?>
			<span class="italic text-[#6D28D9]"><?php esc_html_e( 'di Setiap Produk', 'lumina-skin' ); ?></span>
		</h1>
		<p class="mt-4 text-sm sm:text-base text-[#4C1D95]"><?php esc_html_e( 'Transparan tentang apa yang kamu pakai di wajahmu—karena kamu berhak tahu!', 'lumina-skin' ); ?></p>
	</header>

	<div class="grid gap-6 sm:grid-cols-2">
		<?php
		$ingredients = array(
			array(
				'name'   => 'Ceramide (NP, EOP, AP, AS, NS)',
				'icon'   => '🔬',
				'found'  => __( 'Blueberry 5% Ceramide Moisturizer', 'lumina-skin' ),
				'benefit'=> __( 'Memperbaiki skin barrier, melembapkan 24 jam, menenangkan kulit merah & iritasi. 5 jenis Ceramide bekerja sama mengisi celah di lapisan kulit.', 'lumina-skin' ),
				'color'  => 'bg-white border-pink-200',
			),
			array(
				'name'   => 'Niacinamide 5%',
				'icon'   => '✨',
				'found'  => __( 'Pomegranate 5% Niacinamide', 'lumina-skin' ),
				'benefit'=> __( 'Mencerahkan kulit kusam, meratakan warna kulit, mengecilkan pori-pori, mengontrol minyak berlebih. Cocok untuk semua jenis kulit.', 'lumina-skin' ),
				'color'  => 'bg-[#FDF2F8] border-pink-200',
			),
			array(
				'name'   => 'Centella Asiatica',
				'icon'   => '🌿',
				'found'  => __( 'Centella Allantoin Soothing Gel', 'lumina-skin' ),
				'benefit'=> __( 'Menenangkan kulit iritasi & berjerawat, mempercepat penyembuhan kulit, anti-inflamasi alami. Dikenal sebagai "herb of longevity."', 'lumina-skin' ),
				'color'  => 'bg-white border-pink-200',
			),
			array(
				'name'   => 'Allantoin',
				'icon'   => '💧',
				'found'  => __( 'Centella Allantoin Soothing Gel', 'lumina-skin' ),
				'benefit'=> __( 'Melembapkan, mengelupas sel kulit mati secara lembut, mempercepat regenerasi kulit. Aman untuk kulit sensitif & berjerawat.', 'lumina-skin' ),
				'color'  => 'bg-[#FDF2F8] border-pink-200',
			),
			array(
				'name'   => 'SymWhite 377',
				'icon'   => '☀️',
				'found'  => __( 'Yuja Symwhite 377 Dark Spot', 'lumina-skin' ),
				'benefit'=> __( 'Menghambat produksi melanin, memudarkan flek hitam & bekas jerawat, mencerahkan noda hitam. Setara dengan arbutin tapi lebih efektif.', 'lumina-skin' ),
				'color'  => 'bg-white border-pink-200',
			),
			array(
				'name'   => 'Pomegranate Extract',
				'icon'   => '🍅',
				'found'  => __( 'Pomegranate 5% Niacinamide', 'lumina-skin' ),
				'benefit'=> __( 'Kaya antioksidan untuk melindungi kulit dari radikal bebas, membantu mencerahkan kulit, dan menyamarkan noda hitam.', 'lumina-skin' ),
				'color'  => 'bg-[#FDF2F8] border-pink-200',
			),
		);

		foreach ( $ingredients as $ing ) :
		?>
		<article class="rounded-3xl border px-5 py-6 sm:px-6 sm:py-7 flex flex-col shadow-sm <?php echo esc_attr( $ing['color'] ); ?>">
			<div class="flex items-center gap-3 mb-4">
				<span class="text-2xl"><?php echo esc_html( $ing['icon'] ); ?></span>
				<h2 class="font-playfair text-lg font-semibold tracking-tight text-[#2E1065]"><?php echo esc_html( $ing['name'] ); ?></h2>
			</div>
			<p class="text-xs text-[#A78BFA] mb-2"><?php echo esc_html( $ing['found'] ); ?></p>
			<p class="text-sm text-[#4C1D95] flex-1"><?php echo esc_html( $ing['benefit'] ); ?></p>
		</article>
		<?php endforeach; ?>
	</div>

	<div class="mt-12 rounded-3xl bg-[#2E1065] px-6 py-8 sm:px-8 sm:py-10 text-center">
		<h2 class="font-playfair text-2xl sm:text-3xl font-semibold tracking-tight text-white"><?php esc_html_e( 'BPOM Certified & Halal', 'lumina-skin' ); ?></h2>
		<p class="mt-3 text-sm text-[#DDD6FE] max-w-lg mx-auto"><?php esc_html_e( 'Semua produk Glad2Glow sudah terdaftar BPOM dan bersertifikat Halal. Aman dipakai untuk remaja dan kulit sensitif.', 'lumina-skin' ); ?></p>
		<a href="<?php echo esc_url( lumina_page_url( 'produk' ) ); ?>" class="mt-6 inline-flex items-center gap-2 rounded-full bg-[#8B5CF6] text-white px-5 py-2.5 text-sm font-medium hover:bg-[#7C3AED] transition-colors no-underline">
			<span><?php esc_html_e( 'Lihat Produk', 'lumina-skin' ); ?></span>
		</a>
	</div>
</div>

<?php
get_footer();