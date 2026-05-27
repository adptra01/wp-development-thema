<?php
/**
 * Template Name: Kontak
 */

get_header();
?>

<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-14 lg:py-20">
	<header class="mb-12 text-center max-w-2xl mx-auto">
		<p class="text-xs sm:text-sm font-medium tracking-[0.18em] uppercase text-[#A78BFA] mb-3"><?php esc_html_e( 'HUBUNGI KAMI', 'lumina-skin' ); ?></p>
		<h1 class="font-playfair text-3xl sm:text-4xl lg:text-[2.6rem] leading-tight tracking-tight text-[#2E1065]">
			<?php esc_html_e( 'Ada Pertanyaan?', 'lumina-skin' ); ?>
			<span class="italic text-[#6D28D9]"><?php esc_html_e( 'Chat Aja!', 'lumina-skin' ); ?></span>
		</h1>
		<p class="mt-4 text-sm sm:text-base text-[#4C1D95]"><?php esc_html_e( 'Tim Glad2Glow siap bantu kamu 24/7—dari rekomendasi produk sampai masalah pengiriman.', 'lumina-skin' ); ?></p>
	</header>

	<div class="grid gap-6 sm:grid-cols-2 mb-10">
		<article class="rounded-3xl border border-pink-200 bg-white px-6 py-7 sm:px-7 sm:py-8 flex flex-col items-center text-center shadow-sm">
			<div class="w-12 h-12 rounded-full bg-[#EDE9FE] flex items-center justify-center text-[#8B5CF6] mb-4">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M22 12c0 5.523-4.477 10-10 10S2 17.523 2 12S6.477 2 12 2s10 4.477 10 10m-2 0a8 8 0 1 0-16 0a8 8 0 0 0 16 0m-5.5 4.5a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-1.5h-1a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h1V9.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v1.5h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1zm-2.5-5h-2v3h2z"/></svg>
			</div>
			<h2 class="font-playfair text-lg font-semibold tracking-tight text-[#2E1065]"><?php esc_html_e( 'Instagram', 'lumina-skin' ); ?></h2>
			<p class="mt-2 text-sm text-[#4C1D95]">@glad2glow</p>
		</article>

		<article class="rounded-3xl border border-pink-200 bg-white px-6 py-7 sm:px-7 sm:py-8 flex flex-col items-center text-center shadow-sm">
			<div class="w-12 h-12 rounded-full bg-[#EDE9FE] flex items-center justify-center text-[#8B5CF6] mb-4">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M3 8.5a1 1 0 0 1 .515-.874l8-4.5a1 1 0 0 1 .97 0l8 4.5A1 1 0 0 1 21 8.5v9A2.5 2.5 0 0 1 18.5 20h-13A2.5 2.5 0 0 1 3 17.5zM5 9.74v7.76c0 .276.224.5.5.5h13c.276 0 .5-.224.5-.5V9.74l-7-3.937z"/><path fill="currentColor" d="M7 11.5a1 1 0 0 1 1.447-.894l3.553 1.776l3.553-1.776a1 1 0 0 1 .894 1.788l-4 2a1 1 0 0 1-.894 0l-4-2A1 1 0 0 1 7 11.5"/></svg>
			</div>
			<h2 class="font-playfair text-lg font-semibold tracking-tight text-[#2E1065]"><?php esc_html_e( 'Email', 'lumina-skin' ); ?></h2>
			<p class="mt-2 text-sm text-[#4C1D95]">hello@glad2glow.com</p>
		</article>
	</div>

	<div class="rounded-3xl border border-pink-200 bg-white px-6 py-8 sm:px-8 sm:py-10 shadow-sm">
		<h2 class="font-playfair text-xl sm:text-2xl font-semibold tracking-tight text-[#2E1065] text-center mb-8"><?php esc_html_e( 'Atau Isi Form di Bawah', 'lumina-skin' ); ?></h2>
		<form class="space-y-5 max-w-lg mx-auto" action="#" method="POST">
			<div>
				<label for="kontak-nama" class="block text-sm font-medium text-[#2E1065] mb-1.5"><?php esc_html_e( 'Nama', 'lumina-skin' ); ?></label>
				<input type="text" id="kontak-nama" name="nama" class="w-full rounded-xl border border-[#DDD6FE] bg-white px-4 py-2.5 text-sm text-[#2E1065] placeholder-[#A78BFA] focus:outline-none focus:ring-2 focus:ring-[#8B5CF6] focus:border-transparent" placeholder="<?php esc_attr_e( 'Nama kamu', 'lumina-skin' ); ?>">
			</div>
			<div>
				<label for="kontak-email" class="block text-sm font-medium text-[#2E1065] mb-1.5"><?php esc_html_e( 'Email', 'lumina-skin' ); ?></label>
				<input type="email" id="kontak-email" name="email" class="w-full rounded-xl border border-[#DDD6FE] bg-white px-4 py-2.5 text-sm text-[#2E1065] placeholder-[#A78BFA] focus:outline-none focus:ring-2 focus:ring-[#8B5CF6] focus:border-transparent" placeholder="<?php esc_attr_e( 'email@contoh.com', 'lumina-skin' ); ?>">
			</div>
			<div>
				<label for="kontak-pesan" class="block text-sm font-medium text-[#2E1065] mb-1.5"><?php esc_html_e( 'Pesan', 'lumina-skin' ); ?></label>
				<textarea id="kontak-pesan" name="pesan" rows="4" class="w-full rounded-xl border border-[#DDD6FE] bg-white px-4 py-2.5 text-sm text-[#2E1065] placeholder-[#A78BFA] focus:outline-none focus:ring-2 focus:ring-[#8B5CF6] focus:border-transparent resize-y" placeholder="<?php esc_attr_e( 'Tulis pesan kamu di sini...', 'lumina-skin' ); ?>"></textarea>
			</div>
			<button type="submit" class="w-full inline-flex items-center justify-center gap-2 rounded-full bg-[#8B5CF6] text-white px-5 py-3 text-sm font-medium hover:bg-[#7C3AED] transition-colors">
				<span><?php esc_html_e( 'Kirim Pesan', 'lumina-skin' ); ?></span>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4" aria-hidden="true"><path fill="currentColor" d="M13.293 5.293a1 1 0 0 1 1.414 0l4 4a.997.997 0 0 1 .083.094l.007.01l.007.01a.997.997 0 0 1 .083.148l.003.01l.005.01A1 1 0 0 1 19.999 11v.003a1 1 0 0 1-.293.704l-4 4a1 1 0 0 1-1.414-1.414L16.586 12H6a1 1 0 1 1 0-2h10.586l-3.293-3.293a1 1 0 0 1 0-1.414Z"/></svg>
			</button>
		</form>
	</div>
</div>

<?php
get_footer();