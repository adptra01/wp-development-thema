<?php
get_header();
?>

<section class="py-24 sm:py-32">
    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="mb-12">
                    <div class="mb-4 flex items-center gap-3 text-xs text-brand-dark/50">
                        <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
                            <?php echo esc_html( get_the_date() ); ?>
                        </time>
                        <?php if ( has_category() ) : ?>
                            <span class="text-brand-dark/20">|</span>
                            <span><?php the_category( ', ' ); ?></span>
                        <?php endif; ?>
                    </div>
                    <h1 class="reveal font-heading text-4xl font-medium tracking-tight text-brand-dark sm:text-5xl">
                        <?php the_title(); ?>
                    </h1>
                    <?php if ( has_excerpt() ) : ?>
                        <p class="mt-4 text-base leading-relaxed text-brand-dark/70"><?php echo esc_html( get_the_excerpt() ); ?></p>
                    <?php endif; ?>
                </header>

                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="mb-10 overflow-hidden rounded-2xl">
                        <?php the_post_thumbnail( 'full', [ 'class' => 'h-full w-full object-cover' ] ); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content text-sm leading-relaxed text-brand-dark/80 sm:text-base [&_p]:mb-5 [&_h2]:mt-10 [&_h2]:mb-4 [&_h2]:font-heading [&_h2]:text-2xl [&_h2]:font-medium [&_h2]:tracking-tight [&_h2]:text-brand-dark [&_h3]:mt-8 [&_h3]:mb-3 [&_h3]:font-heading [&_h3]:text-xl [&_h3]:font-medium [&_h3]:text-brand-dark [&_ul]:mb-5 [&_ul]:list-disc [&_ul]:pl-6 [&_ol]:mb-5 [&_ol]:list-decimal [&_ol]:pl-6 [&_li]:mb-1 [&_a]:text-brand-pink [&_a]:underline [&_blockquote]:border-l-4 [&_blockquote]:border-brand-pink/30 [&_blockquote]:pl-4 [&_blockquote]:italic [&_blockquote]:text-brand-dark/60 [&_figcaption]:mt-2 [&_figcaption]:text-xs [&_figcaption]:text-brand-dark/40 [&_img]:rounded-xl [&_img]:my-6 [&_img.wp-block-cover__image-background]:my-0 [&_pre]:rounded-xl [&_pre]:bg-brand-dark [&_pre]:p-4 [&_pre]:text-sm [&_pre]:text-white/90 [&_pre]:overflow-x-auto [&_code]:text-sm [&_code]:text-brand-pink [&_wp-block-code]:mb-5">
                    <?php the_content(); ?>
                </div>

                <?php
                wp_link_pages( [
                    'before' => '<div class="mt-10 flex gap-2">',
                    'after'  => '</div>',
                ] );

                $tags_list = get_the_tag_list( '', ' ' );
                if ( $tags_list ) :
                    ?>
                    <div class="mt-10 flex flex-wrap gap-2 border-t border-brand-dark/5 pt-8">
                        <?php echo wp_kses_post( $tags_list ); ?>
                    </div>
                <?php endif; ?>

                <nav class="mt-12 flex flex-col gap-4 sm:flex-row sm:justify-between border-t border-brand-dark/5 pt-8">
                    <div class="text-sm">
                        <?php previous_post_link( '&larr; %link', __( 'Previous Post', 'creatorflow' ) ); ?>
                    </div>
                    <div class="text-sm">
                        <?php next_post_link( '%link &rarr;', __( 'Next Post', 'creatorflow' ) ); ?>
                    </div>
                </nav>

                <?php
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
