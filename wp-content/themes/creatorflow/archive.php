<?php
get_header();
?>

<section class="py-24 sm:py-32">
    <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
        <header class="mb-16 max-w-2xl">
            <h1 class="reveal font-heading text-4xl font-medium tracking-tight text-brand-dark sm:text-5xl">
                <?php
                if ( is_category() ) :
                    single_cat_title();
                elseif ( is_tag() ) :
                    printf( esc_html__( 'Tag: %s', 'creatorflow' ), single_tag_title( '', false ) );
                elseif ( is_author() ) :
                    printf( esc_html__( 'Author: %s', 'creatorflow' ), '<span>' . get_the_author() . '</span>' );
                elseif ( is_day() ) :
                    printf( esc_html__( 'Day: %s', 'creatorflow' ), '<span>' . get_the_date() . '</span>' );
                elseif ( is_month() ) :
                    printf( esc_html__( 'Month: %s', 'creatorflow' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'creatorflow' ) ) . '</span>' );
                elseif ( is_year() ) :
                    printf( esc_html__( 'Year: %s', 'creatorflow' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'creatorflow' ) ) . '</span>' );
                elseif ( is_search() ) :
                    printf( esc_html__( 'Search: %s', 'creatorflow' ), '<span>' . get_search_query() . '</span>' );
                else :
                    esc_html_e( 'Blog', 'creatorflow' );
                endif;
                ?>
            </h1>
            <?php
            the_archive_description( '<p class="mt-4 text-sm leading-relaxed text-brand-dark/70">', '</p>' );
            ?>
        </header>

        <?php if ( have_posts() ) : ?>
            <div class="grid gap-8 md:grid-cols-2">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'group rounded-2xl border border-brand-dark/10 bg-white p-6 transition-all hover:shadow-md' ); ?>>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>" class="mb-4 block overflow-hidden rounded-xl">
                                <?php the_post_thumbnail( 'large', [ 'class' => 'h-48 w-full object-cover transition duration-300 group-hover:scale-[1.02]' ] ); ?>
                            </a>
                        <?php endif; ?>
                        <div class="mb-2 text-xs text-brand-dark/50">
                            <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
                        </div>
                        <h2 class="font-heading text-lg font-medium tracking-tight text-brand-dark">
                            <a href="<?php the_permalink(); ?>" class="transition-colors hover:text-brand-pink"><?php the_title(); ?></a>
                        </h2>
                        <p class="mt-2 text-sm leading-relaxed text-brand-dark/60"><?php echo esc_html( get_the_excerpt() ); ?></p>
                        <a href="<?php the_permalink(); ?>" class="mt-4 inline-flex items-center gap-1 text-sm font-medium text-brand-pink transition hover:gap-2">
                            <?php esc_html_e( 'Read More', 'creatorflow' ); ?>
                            &rarr;
                        </a>
                    </article>
                <?php endwhile; ?>
            </div>

            <div class="pagination">
                <?php
                echo wp_kses_post(
                    paginate_links( [
                        'prev_text' => '&larr; ' . esc_html__( 'Previous', 'creatorflow' ),
                        'next_text' => esc_html__( 'Next', 'creatorflow' ) . ' &rarr;',
                    ] )
                );
                ?>
            </div>
        <?php else : ?>
            <p class="text-brand-dark/60"><?php esc_html_e( 'No posts found.', 'creatorflow' ); ?></p>
        <?php endif; ?>
    </div>
</section>

<?php
get_footer();
