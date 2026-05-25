<?php
/**
 * Main template file
 *
 * @package CreatorFlow
 * @since 1.0.0
 */

get_header();

if ( is_home() && ! is_front_page() ) :
    get_template_part( 'template-parts/hero', 'archive' );
    ?>

    <div class="container">
        <div class="content-grid">
            <div class="content-primary">
                <?php if ( have_posts() ) : ?>
                    <div class="post-grid">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <div class="post-card__thumbnail">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail( 'large' ); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <div class="post-card__content">
                                    <span class="post-card__meta label-md">
                                        <?php echo esc_html( get_the_date() ); ?>
                                    </span>
                                    <h2 class="post-card__title h4">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <p class="post-card__excerpt"><?php echo esc_html( get_the_excerpt() ); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="post-card__link">
                                        <?php esc_html_e( 'Read More', 'creatorflow' ); ?>
                                        <span aria-hidden="true">&rarr;</span>
                                    </a>
                                </div>
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
                    <p><?php esc_html_e( 'No posts found.', 'creatorflow' ); ?></p>
                <?php endif; ?>
            </div>

            <?php get_sidebar(); ?>
        </div>
    </div>

    <?php
elseif ( is_search() ) :
    get_template_part( 'template-parts/hero', 'archive' );
    ?>

    <div class="container">
        <div class="content-grid">
            <div class="content-primary">
                <?php if ( have_posts() ) : ?>
                    <div class="search-results-count">
                        <?php
                        printf(
                            esc_html__( 'Found %d results for "%s"', 'creatorflow' ),
                            absint( $wp_query->found_posts ),
                            esc_html( get_search_query() )
                        );
                        ?>
                    </div>
                    <div class="post-grid">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
                                <div class="post-card__content">
                                    <h2 class="post-card__title h4">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <p class="post-card__excerpt"><?php echo esc_html( get_the_excerpt() ); ?></p>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>
                    <?php the_posts_navigation(); ?>
                <?php else : ?>
                    <p><?php esc_html_e( 'No results found. Try a different search term.', 'creatorflow' ); ?></p>
                    <?php get_search_form(); ?>
                <?php endif; ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>

    <?php
elseif ( is_404() ) :
    get_template_part( 'template-parts/hero', '404' );
    ?>

    <div class="container">
        <div class="error-404-content">
            <h2 class="h1"><?php esc_html_e( 'Page Not Found', 'creatorflow' ); ?></h2>
            <p><?php esc_html_e( 'The page you are looking for does not exist or has been moved.', 'creatorflow' ); ?></p>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn--primary">
                <?php esc_html_e( 'Back to Home', 'creatorflow' ); ?>
            </a>
        </div>
    </div>

    <?php
endif;

get_footer();
