<?php
/**
 * Template Name: Review
 */

get_header();
?>

<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-14 lg:py-20">
	<header class="mb-12 text-center max-w-2xl mx-auto">
		<p class="text-xs sm:text-sm font-medium tracking-[0.18em] uppercase text-[#A78BFA] mb-3"><?php esc_html_e( 'TESTIMONIALS', 'lumina-skin' ); ?></p>
		<h1 class="font-playfair text-3xl sm:text-4xl lg:text-[2.6rem] leading-tight tracking-tight text-[#2E1065]">
			<?php esc_html_e( 'Apa Kata Mereka?', 'lumina-skin' ); ?>
		</h1>
		<p class="mt-4 text-sm sm:text-base text-[#4C1D95]"><?php esc_html_e( 'Lebih dari 500rb+ produk terjual—ini cerita dari Glow Lovers se-Indonesia!', 'lumina-skin' ); ?></p>
	</header>

	<div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
		<?php
		$reviews = array(
			array(
				'name'    => 'Sari A.',
				'product' => __( 'Blueberry 5% Ceramide', 'lumina-skin' ),
				'rating'  => 5,
				'text'    => __( '"Baru 3 hari pake kulit udah kerasa lebih lembap dan kenyal! Cocok banget buat kulit sensitif. Recommended banget!"', 'lumina-skin' ),
				'color'   => 'bg-white border-pink-200',
			),
			array(
				'name'    => 'Dewi P.',
				'product' => __( 'Centella Allantoin Gel', 'lumina-skin' ),
				'rating'  => 5,
				'text'    => __( '"Jerawat mulai kering setelah 3 hari pemakaian! Teksturnya ringan, gak bikin muka tambah berminyak. Love it!"', 'lumina-skin' ),
				'color'   => 'bg-[#FDF2F8] border-pink-200',
			),
			array(
				'name'    => 'Rina M.',
				'product' => __( 'Pomegranate 5% Niacinamide', 'lumina-skin' ),
				'rating'  => 5,
				'text'    => __( '"Wajah jadi lebih cerah dalam 2 minggu! Bekas jerawat mulai pudar. Harga pelajar banget!"', 'lumina-skin' ),
				'color'   => 'bg-white border-pink-200',
			),
			array(
				'name'    => 'Ayu K.',
				'product' => __( 'Blueberry 5% Ceramide', 'lumina-skin' ),
				'rating'  => 5,
				'text'    => __( '"Udah repeat order 3 kali! Gak bisa lepas dari moisturizer ini. Skin barrier aku jadi stronger!"', 'lumina-skin' ),
				'color'   => 'bg-[#FDF2F8] border-pink-200',
			),
			array(
				'name'    => 'Mega S.',
				'product' => __( 'Yuja Symwhite 377', 'lumina-skin' ),
				'rating'  => 4,
				'text'    => __( '"Bekas jerawat di pipi mulai pudar setelah 1 bulan. Teksturnya ringan dan gak lengket."', 'lumina-skin' ),
				'color'   => 'bg-white border-pink-200',
			),
			array(
				'name'    => 'Putri W.',
				'product' => __( 'Centella Allantoin Gel', 'lumina-skin' ),
				'rating'  => 5,
				'text'    => __( '"Kulit aku yang acne-prone jadi lebih tenang. Redness mulai berkurang drastis! Wajib punya!"', 'lumina-skin' ),
				'color'   => 'bg-[#FDF2F8] border-pink-200',
			),
		);

		foreach ( $reviews as $r ) :
		?>
		<article class="rounded-3xl border px-5 py-6 sm:px-6 sm:py-7 flex flex-col shadow-sm <?php echo esc_attr( $r['color'] ); ?>">
			<div class="flex items-center gap-1 text-[#F472B6] text-sm mb-3">
				<?php for ( $i = 0; $i < 5; $i++ ) : ?>
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 <?php echo $i < $r['rating'] ? 'text-[#F472B6]' : 'text-[#DDD6FE]'; ?>" aria-hidden="true"><path fill="currentColor" d="M10.92 2.868a1.25 1.25 0 0 1 2.16 0l2.795 4.798l5.428 1.176a1.25 1.25 0 0 1 .667 2.054l-3.7 4.141l.56 5.525a1.25 1.25 0 0 1-1.748 1.27L12 19.592l-5.082 2.24a1.25 1.25 0 0 1-1.748-1.27l.56-5.525l-3.7-4.14a1.25 1.25 0 0 1 .667-2.055l5.428-1.176z"/></svg>
				<?php endfor; ?>
			</div>
			<p class="text-sm text-[#4C1D95] leading-relaxed flex-1"><?php echo esc_html( $r['text'] ); ?></p>
			<div class="mt-4 pt-4 border-t border-[#DDD6FE] flex items-center justify-between">
				<p class="text-xs font-medium text-[#2E1065]">— <?php echo esc_html( $r['name'] ); ?></p>
				<span class="text-[0.65rem] text-[#A78BFA]"><?php echo esc_html( $r['product'] ); ?></span>
			</div>
		</article>
		<?php endforeach; ?>
	</div>

	<div class="mt-12 text-center">
		<div class="inline-flex items-center gap-2 rounded-full bg-[#8B5CF6] text-white px-6 py-3 text-sm font-medium hover:bg-[#7C3AED] transition-colors cursor-pointer">
			<span><?php esc_html_e( 'Lihat Semua Review', 'lumina-skin' ); ?></span>
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4" aria-hidden="true"><path fill="currentColor" d="M13.293 5.293a1 1 0 0 1 1.414 0l4 4a.997.997 0 0 1 .083.094l.007.01l.007.01a.997.997 0 0 1 .083.148l.003.01l.005.01A1 1 0 0 1 19.999 11v.003a1 1 0 0 1-.293.704l-4 4a1 1 0 0 1-1.414-1.414L16.586 12H6a1 1 0 1 1 0-2h10.586l-3.293-3.293a1 1 0 0 1 0-1.414Z"/></svg>
		</div>
	</div>
</div>

<?php
get_footer();