</main>

<footer class="border-t border-emerald-900/60 bg-[#141a17]">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8 flex flex-col md:flex-row gap-8 md:gap-6 items-start md:items-center justify-between">
    <div>
      <div class="flex items-center gap-2">
        <?php if ( has_custom_logo() ) : ?>
          <?php the_custom_logo(); ?>
        <?php else : ?>
          <span class="text-sm font-semibold tracking-tight font-playfair"><?php bloginfo( 'name' ); ?></span>
        <?php endif; ?>
      </div>
      <p class="mt-3 text-xs sm:text-sm text-emerald-200/70 max-w-sm"><?php esc_html_e( 'Gentle, clinically-minded rituals for skin that\'s easily overwhelmed.', 'lumina-skin' ); ?></p>
    </div>
    <div class="flex flex-wrap gap-6 text-xs sm:text-sm text-emerald-200/80">
      <a href="#" class="hover:text-emerald-50 transition-colors"><?php esc_html_e( 'Ingredients', 'lumina-skin' ); ?></a>
      <a href="#" class="hover:text-emerald-50 transition-colors"><?php esc_html_e( 'FAQ', 'lumina-skin' ); ?></a>
      <a href="#" class="hover:text-emerald-50 transition-colors"><?php esc_html_e( 'Contact', 'lumina-skin' ); ?></a>
      <a href="#" class="hover:text-emerald-50 transition-colors"><?php esc_html_e( 'Privacy', 'lumina-skin' ); ?></a>
    </div>
    <p class="text-[0.7rem] text-emerald-500/70">&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php esc_html_e( 'Lumina Skin Rituals. All rights reserved.', 'lumina-skin' ); ?></p>
  </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
