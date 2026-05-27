</main>

<footer class="border-t border-[#6D28D9] bg-[#2E1065]">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8 flex flex-col md:flex-row gap-8 md:gap-6 items-start md:items-center justify-between">
    <div>
      <div class="flex items-center gap-2">
        <?php if ( has_custom_logo() ) : ?>
          <?php the_custom_logo(); ?>
        <?php else : ?>
          <span class="text-sm font-semibold tracking-tight font-playfair text-white"><?php bloginfo( 'name' ); ?></span>
        <?php endif; ?>
      </div>
      <p class="mt-3 text-xs sm:text-sm text-[#C4B5FD] max-w-sm"><?php esc_html_e( 'Skincare pelajar dengan active ingredients berkualitas—karena kulit glowing itu hak semua orang!', 'lumina-skin' ); ?></p>
    </div>
    <div class="flex flex-wrap gap-6 text-xs sm:text-sm text-[#DDD6FE]">
      <a href="#" class="hover:text-white transition-colors"><?php esc_html_e( 'Kandungan', 'lumina-skin' ); ?></a>
      <a href="#" class="hover:text-white transition-colors"><?php esc_html_e( 'FAQ', 'lumina-skin' ); ?></a>
      <a href="#" class="hover:text-white transition-colors"><?php esc_html_e( 'Kontak', 'lumina-skin' ); ?></a>
      <a href="#" class="hover:text-white transition-colors"><?php esc_html_e( 'Kebijakan Privasi', 'lumina-skin' ); ?></a>
    </div>
    <p class="text-[0.7rem] text-[#A78BFA]/70">&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php esc_html_e( 'Glad2Glow. All rights reserved.', 'lumina-skin' ); ?></p>
  </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
