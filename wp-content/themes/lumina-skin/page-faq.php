<?php
/**
 * Template Name: FAQ
 */

get_header();
?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14 lg:py-20">
	<div class="max-w-3xl mx-auto">
	<header class="mb-12 text-center">
		<p class="text-xs sm:text-sm font-medium tracking-[0.18em] uppercase text-[#A78BFA] mb-3"><?php esc_html_e( 'FAQ', 'lumina-skin' ); ?></p>
		<h1 class="font-playfair text-3xl sm:text-4xl lg:text-[2.6rem] leading-tight tracking-tight text-[#2E1065] font-semibold">
			<?php esc_html_e( 'Pertanyaan Umum', 'lumina-skin' ); ?>
		</h1>
		<p class="mt-4 text-sm sm:text-base text-[#4C1D95]"><?php esc_html_e( 'Punya pertanyaan? Mungkin udah dijawab di sini!', 'lumina-skin' ); ?></p>
	</header>

	<div class="space-y-4">
		<?php
		$faqs = array(
			array(
				'q' => __( 'Apakah produk Glad2Glow aman untuk remaja?', 'lumina-skin' ),
				'a' => __( 'Tentu! Glad2Glow diformulasikan khusus untuk remaja dan kulit muda. Semua produk sudah BPOM certified & Halal, menggunakan active ingredients yang aman untuk kulit remaja.', 'lumina-skin' ),
			),
			array(
				'q' => __( 'Berapa lama hasilnya terlihat?', 'lumina-skin' ),
				'a' => __( 'Hasil setiap orang berbeda, tapi rata-rata customer mulai melihat perubahan dalam 2-4 minggu pemakaian rutin. Kuncinya adalah konsistensi—pagi dan malam setiap hari!', 'lumina-skin' ),
			),
			array(
				'q' => __( 'Bisa dipakai untuk kulit sensitif?', 'lumina-skin' ),
				'a' => __( 'Bisa! Terutama produk Centella Allantoin Soothing Gel dan Blueberry 5% Ceramide Moisturizer yang diformulasikan untuk menenangkan kulit sensitif. Tapi kami tetap sarankan patch test dulu sebelum pemakaian pertama.', 'lumina-skin' ),
			),
			array(
				'q' => __( 'Apakah produk ini vegan & cruelty-free?', 'lumina-skin' ),
				'a' => __( 'Ya! Glad2Glow berkomitmen untuk vegan & cruelty-free. Kami tidak menggunakan bahan-bahan dari hewan dan tidak melakukan pengujian pada hewan.', 'lumina-skin' ),
			),
			array(
				'q' => __( 'Bagaimana cara order?', 'lumina-skin' ),
				'a' => __( 'Kamu bisa order langsung dari website ini dengan klik tombol "Belanja". Pilih produk yang kamu mau, tambahkan ke keranjang, dan checkout. Pembayaran bisa melalui transfer bank, e-wallet, atau COD.', 'lumina-skin' ),
			),
			array(
				'q' => __( 'Apakah ada bundle hemat?', 'lumina-skin' ),
				'a' => __( 'Ada! Kami punya bundle routine pemula yang lebih hemat. Cek halaman Produk untuk lihat semua pilihan bundle yang tersedia.', 'lumina-skin' ),
			),
			array(
				'q' => __( 'Berapa lama pengiriman?', 'lumina-skin' ),
				'a' => __( 'Pengiriman biasanya 2-5 hari kerja tergantung lokasi kamu. Kami menggunakan jasa ekspedisi terpercaya seperti JNE, SiCepat, dan J&T.', 'lumina-skin' ),
			),
		);

		foreach ( $faqs as $i => $faq ) :
			$id = 'faq-' . $i;
		?>
		<details class="group rounded-3xl border border-pink-200 bg-white overflow-hidden shadow-sm">
			<summary class="flex items-center justify-between px-5 py-4 sm:px-6 sm:py-5 text-sm sm:text-base font-medium text-[#2E1065] cursor-pointer list-none hover:bg-[#FDF2F8] transition-colors">
				<span><?php echo esc_html( $faq['q'] ); ?></span>
				<svg class="w-4 h-4 text-[#8B5CF6] flex-shrink-0 group-open:rotate-45 transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M12 5a1 1 0 0 1 1 1v5h5a1 1 0 1 1 0 2h-5v5a1 1 0 1 1-2 0v-5H6a1 1 0 1 1 0-2h5V6a1 1 0 0 1 1-1Z"/></svg>
			</summary>
			<div class="px-5 pb-5 sm:px-6 sm:pb-6 text-sm text-[#4C1D95] border-t border-[#DDD6FE] pt-4">
				<?php echo esc_html( $faq['a'] ); ?>
			</div>
		</details>
		<?php endforeach; ?>
	</div>

	<div class="mt-10 text-center">
		<p class="text-sm text-[#4C1D95]"><?php esc_html_e( 'Masih ada pertanyaan? Yuk hubungi kami!', 'lumina-skin' ); ?></p>
		<a href="<?php echo esc_url( lumina_page_url( 'kontak' ) ); ?>" class="mt-3 inline-flex items-center gap-2 rounded-full bg-[#8B5CF6] text-white px-5 py-2.5 text-sm font-medium hover:bg-[#7C3AED] transition-colors no-underline">
			<span><?php esc_html_e( 'Hubungi Kami', 'lumina-skin' ); ?></span>
		</a>
	</div>
	</div>
</div>

<?php
get_footer();