<?php
/**
 * Template Name: Produk
 */

get_header();
?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14 lg:py-20">
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
				'size'    => '50 ml',
				'skin'    => __( 'Cocok untuk semua kulit', 'lumina-skin' ),
				'btn'     => 'bg-[#8B5CF6] text-white',
			),
			array(
				'img'     => 'https://wordpress.test/wp-content/uploads/2026/05/centella-allantoin.webp',
				'badge'   => 'BEST FOR ACNE',
				'name'    => __( 'Centella Allantoin Soothing Gel', 'lumina-skin' ),
				'desc'    => __( 'Menenangkan jerawat, mengurangi kemerahan, dan melembapkan dengan Centella & Allantoin.', 'lumina-skin' ),
				'size'    => '50 ml',
				'skin'    => __( 'Kulit berminyak & berjerawat', 'lumina-skin' ),
				'btn'     => 'border border-[#DDD6FE] bg-white text-[#2E1065]',
			),
			array(
				'img'     => 'https://wordpress.test/wp-content/uploads/2026/05/yuja-symwhite.webp',
				'badge'   => 'SPOT CARE',
				'name'    => __( 'Yuja Symwhite 377 Dark Spot', 'lumina-skin' ),
				'desc'    => __( 'Krim dark spot dengan Symwhite 377 & Yuja extract untuk memudarkan bekas jerawat dan noda hitam.', 'lumina-skin' ),
				'size'    => '30 ml',
				'skin'    => __( 'Cerahkan flek hitam', 'lumina-skin' ),
				'btn'     => 'border border-[#DDD6FE] bg-white text-[#2E1065]',
			),
			array(
				'img'     => 'https://wordpress.test/wp-content/uploads/2026/05/pomegranate-niacinamide.webp',
				'badge'   => 'BESTSELLER',
				'name'    => __( 'Pomegranate 5% Niacinamide', 'lumina-skin' ),
				'desc'    => __( 'Serum brightening dengan 5% Niacinamide + Pomegranate—cerahkan kulit, ratakan tone, kontrol minyak.', 'lumina-skin' ),
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
						<span class="text-[#7C3AED] mt-0.5"><?php echo esc_html( $p['size'] ); ?></span>
					</div>
				</div>
				<div class="mt-4 flex items-center justify-between gap-3 text-[0.72rem] sm:text-xs">
					<div class="flex items-center gap-1.5 text-[#4C1D95]">
						<span class="w-1.5 h-1.5 rounded-full bg-[#8B5CF6]"></span>
						<span><?php echo esc_html( $p['skin'] ); ?></span>
					</div>
					<a href="https://www.tokopedia.com/glad2glow" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 rounded-full <?php echo esc_attr( $p['btn'] ); ?> px-3 py-1.5 font-medium hover:bg-[#7C3AED] hover:text-white transition-colors no-underline">
						<span><?php esc_html_e( 'Beli', 'lumina-skin' ); ?></span>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-3.5 h-3.5" aria-hidden="true"><path fill="currentColor" d="M13.293 5.293a1 1 0 0 1 1.414 0l4 4a.997.997 0 0 1 .083.094l.007.01l.007.01a.997.997 0 0 1 .083.148l.003.01l.005.01A1 1 0 0 1 19.999 11v.003a1 1 0 0 1-.293.704l-4 4a1 1 0 0 1-1.414-1.414L16.586 12H6a1 1 0 1 1 0-2h10.586l-3.293-3.293a1 1 0 0 1 0-1.414Z"/></svg>
					</a>
				</div>
			</div>
		</article>
		<?php endforeach; ?>
	</div>
</div>

<section class="relative z-10 max-w-4xl sm:pt-20 md:pt-28 text-center mr-auto ml-auto pt-14 pb-20">
  <div class="mb-6 flex items-center justify-center gap-4">
    <div class="flex -space-x-3">
      <img src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?q=80&w=256&auto=format&fit=crop" alt="Customer" class="h-9 w-9 rounded-full ring-2 ring-[#DDD6FE] object-cover">
      <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=256&auto=format&fit=crop" alt="Customer" class="h-9 w-9 rounded-full ring-2 ring-[#DDD6FE] object-cover">
      <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?q=80&w=256&auto=format&fit=crop" alt="Customer" class="h-9 w-9 rounded-full ring-2 ring-[#DDD6FE] object-cover">
      <img src="https://images.unsplash.com/photo-1464863979621-258859e62245?q=80&w=256&auto=format&fit=crop" alt="Customer" class="h-9 w-9 rounded-full ring-2 ring-[#DDD6FE] object-cover">
      <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=256&auto=format&fit=crop" alt="Customer" class="h-9 w-9 rounded-full ring-2 ring-[#DDD6FE] object-cover">
    </div>
    <div class="flex flex-col items-start">
      <div class="flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 fill-[#F472B6] text-[#F472B6]"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 fill-[#F472B6] text-[#F472B6]"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 fill-[#F472B6] text-[#F472B6]"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 fill-[#F472B6] text-[#F472B6]"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 fill-[#F472B6]/50 text-[#F472B6]"><path d="M12 17.8 5.8 21 7 14.1 2 9.3l7-1L12 2"/></svg>
      </div>
      <p class="mt-1 text-xs font-medium text-[#A78BFA]">10.000+ Happy Customers</p>
    </div>
  </div>

  <h1 class="max-w-4xl sm:text-5xl md:text-6xl text-4xl tracking-tighter mr-auto ml-auto text-[#2E1065]">
    Ready to
    <span class="italic text-[#8B5CF6] font-playfair">glow</span>
    with Glad2Glow?
  </h1>

  <p class="max-w-2xl sm:text-lg text-base font-normal text-[#4C1D95] mt-6 mr-auto ml-auto">
    Mulai perjalanan skincare-mu sekarang. Dari pemula sampai skincare addict—temukan produk yang bikin kulitmu glowing alami.
  </p>

  <div class="flex flex-col gap-3 sm:flex-row mt-8 items-center justify-center">
    <a href="https://www.tokopedia.com/glad2glow" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 shadow-[0_0_0_1px_rgba(139,92,246,0.2)_inset] text-base font-medium text-white bg-[#8B5CF6] rounded-xl pt-3 pr-6 pb-3 pl-6 hover:bg-[#7C3AED] transition-colors no-underline">
      Belanja Sekarang
    </a>
    <a href="<?php echo esc_url( lumina_page_url( 'review' ) ); ?>" class="inline-flex items-center gap-2 rounded-xl border border-[#DDD6FE] bg-white px-6 py-3 text-base font-medium text-[#2E1065] hover:bg-[#FDF2F8] transition-colors no-underline">
      Lihat Review
    </a>
  </div>
</section>

<?php
get_footer();