<?php
get_header();
?>

<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-14 lg:py-20">
	<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="mb-10">
				<h1 class="font-playfair text-3xl sm:text-4xl lg:text-[2.6rem] leading-tight tracking-tight text-[#2E1065]">
					<?php the_title(); ?>
				</h1>
				<?php if ( has_excerpt() ) : ?>
					<p class="mt-3 text-sm sm:text-base text-[#6D28D9]/80 max-w-xl"><?php echo esc_html( get_the_excerpt() ); ?></p>
				<?php endif; ?>
			</header>
			<div class="prose prose-sm sm:prose-base max-w-none text-[#4C1D95]">
				<?php the_content(); ?>
			</div>
		</article>
	<?php endwhile; ?>
</div>

<?php
get_footer();
