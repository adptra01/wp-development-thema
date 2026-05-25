<?php
get_header();
?>

<section class="py-24 sm:py-32">
    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="mb-12">
                    <h1 class="reveal font-heading text-4xl font-medium tracking-tight text-brand-dark sm:text-5xl">
                        <?php the_title(); ?>
                    </h1>
                </header>
                <div class="prose prose-sm prose-brand-dark max-w-none">
                    <?php the_content(); ?>
                </div>
                <?php
                wp_link_pages( [
                    'before' => '<div class="mt-8 flex gap-2">',
                    'after'  => '</div>',
                ] );

                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
                ?>
            </article>
        <?php endwhile; ?>
    </div>
</section>

<?php
get_footer();
