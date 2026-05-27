<?php
/**
 * Template Name: Produk
 */

get_header();
?>

<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-14 lg:py-20">
	<header class="mb-12 text-center max-w-2xl mx-auto">
		<p class="text-xs sm:text-sm font-medium tracking-[0.18em] uppercase text-[#A78BFA] mb-3"><?php esc_html_e( 'BELANJA SEKARANG', 'lumina-skin' ); ?></p>
		<h1 class="font-playfair text-3xl sm:text-4xl lg:text-[2.6rem] leading-tight tracking-tight text-[#2E1065]">
			<?php esc_html_e( 'Koleksi Glad2Glow', 'lumina-skin' ); ?>
		</h1>
		<p class="mt-4 text-sm sm:text-base text-[#4C1D95]"><?php esc_html_e( 'Dari pemula sampai skincare addict—temukan produk yang pas buat kulit glowing impianmu.', 'lumina-skin' ); ?></p>
	</header>

	<div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
		<?php
		$products = array(
			array(
				'img'     => 'https://i.pinimg.com/1200x/f4/c2/3f/f4c23f221952c3d090c6b53bca9e9c56.jpg',
				'badge'   => '#1 BESTSELLER',
				'name'    => __( 'Blueberry 5% Ceramide Moisturizer', 'lumina-skin' ),
				'desc'    => __( 'Moisturizer viral dengan 5% Ceramide complex yang memperbaiki skin barrier, melembapkan, dan menenangkan kulit.', 'lumina-skin' ),
				'price'   => 'Rp49.000',
				'size'    => '50 ml',
				'skin'    => __( 'Cocok untuk semua kulit', 'lumina-skin' ),
				'btn'     => 'bg-[#8B5CF6] text-white',
			),
			array(
				'img'     => 'https://wordpress.test/wp-content/uploads/2026/05/centella-allantoin.webp',
				'badge'   => 'BEST FOR ACNE',
				'name'    => __( 'Centella Allantoin Soothing Gel', 'lumina-skin' ),
				'desc'    => __( 'Menenangkan jerawat, mengurangi kemerahan, dan melembapkan dengan Centella & Allantoin.', 'lumina-skin' ),
				'price'   => 'Rp45.000',
				'size'    => '50 ml',
				'skin'    => __( 'Kulit berminyak & berjerawat', 'lumina-skin' ),
				'btn'     => 'border border-[#DDD6FE] bg-white text-[#2E1065]',
			),
			array(
				'img'     => 'https://wordpress.test/wp-content/uploads/2026/05/yuja-symwhite.webp',
				'badge'   => 'SPOT CARE',
				'name'    => __( 'Yuja Symwhite 377 Dark Spot', 'lumina-skin' ),
				'desc'    => __( 'Krim dark spot dengan Symwhite 377 & Yuja extract untuk memudarkan bekas jerawat dan noda hitam.', 'lumina-skin' ),
				'price'   => 'Rp55.000',
				'size'    => '30 ml',
				'skin'    => __( 'Cerahkan flek hitam', 'lumina-skin' ),
				'btn'     => 'border border-[#DDD6FE] bg-white text-[#2E1065]',
			),
			array(
				'img'     => 'https://wordpress.test/wp-content/uploads/2026/05/pomegranate-niacinamide.webp',
				'badge'   => 'BESTSELLER',
				'name'    => __( 'Pomegranate 5% Niacinamide', 'lumina-skin' ),
				'desc'    => __( 'Serum brightening dengan 5% Niacinamide + Pomegranate—cerahkan kulit, ratakan tone, kontrol minyak.', 'lumina-skin' ),
				'price'   => 'Rp39.000',
				'size'    => '20 ml',
				'skin'    => __( 'Semua jenis kulit', 'lumina-skin' ),
				'btn'     => 'border border-[#DDD6FE] bg-white text-[#2E1065]',
			),
		);

		foreach ( $products as $p ) :
		?>
		<article class="group rounded-3xl border border-pink-200 bg-white overflow-hidden flex flex-col shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-200">
			<div class="relative">
				<div class="absolute inset-0 bg-gradient-to-t from-[#6D28D9]/20 via-transparent to-transparent pointer-events-none"></div>
				<img src="<?php echo esc_url( $p['img'] ); ?>" alt="<?php echo esc_attr( $p['name'] ); ?>" class="sm:h-56 w-full h-48 object-cover">
				<div class="absolute top-3 left-3">
					<span class="inline-flex items-center px-2.5 py-1 rounded-full text-[0.68rem] font-medium bg-[#8B5CF6] text-white shadow-sm"><?php echo esc_html( $p['badge'] ); ?></span>
				</div>
			</div>
			<div class="flex-1 flex flex-col px-5 py-5 sm:px-6 sm:py-6">
				<div class="flex items-start justify-between gap-3">
					<div>
						<h2 class="font-playfair text-lg font-semibold tracking-tight text-[#2E1065]"><?php echo esc_html( $p['name'] ); ?></h2>
						<p class="mt-1 text-xs sm:text-sm text-[#4C1D95]"><?php echo esc_html( $p['desc'] ); ?></p>
					</div>
					<div class="flex flex-col items-end text-xs text-[#4C1D95]">
						<span class="font-semibold"><?php echo esc_html( $p['price'] ); ?></span>
						<span class="text-[#7C3AED] mt-0.5"><?php echo esc_html( $p['size'] ); ?></span>
					</div>
				</div>
				<div class="mt-4 flex items-center justify-between gap-3 text-[0.72rem] sm:text-xs">
					<div class="flex items-center gap-1.5 text-[#4C1D95]">
						<span class="w-1.5 h-1.5 rounded-full bg-[#8B5CF6]"></span>
						<span><?php echo esc_html( $p['skin'] ); ?></span>
					</div>
					<button class="inline-flex items-center gap-1.5 rounded-full <?php echo esc_attr( $p['btn'] ); ?> px-3 py-1.5 font-medium hover:bg-[#7C3AED] hover:text-white transition-colors">
						<span><?php esc_html_e( 'Tambah', 'lumina-skin' ); ?></span>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-3.5 h-3.5" aria-hidden="true"><path fill="currentColor" d="M12 5a1 1 0 0 1 1 1v5h5a1 1 0 1 1 0 2h-5v5a1 1 0 1 1-2 0v-5H6a1 1 0 1 1 0-2h5V6a1 1 0 0 1 1-1Z"/></svg>
					</button>
				</div>
			</div>
		</article>
		<?php endforeach; ?>
	</div>
</div>

<?php
get_footer();