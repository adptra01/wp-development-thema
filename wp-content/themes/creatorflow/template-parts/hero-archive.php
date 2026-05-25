<?php
/**
 * Archive hero template part
 *
 * @package CreatorFlow
 * @since 1.0.0
 */
?>

<section class="archive-hero section--sm">
    <div class="container">
        <div class="archive-hero__content">
            <span class="section__label label-md">
                <?php
                if ( is_category() ) {
                    esc_html_e( 'Category', 'creatorflow' );
                } elseif ( is_tag() ) {
                    esc_html_e( 'Tag', 'creatorflow' );
                } elseif ( is_author() ) {
                    esc_html_e( 'Author', 'creatorflow' );
                } elseif ( is_search() ) {
                    esc_html_e( 'Search Results', 'creatorflow' );
                } else {
                    esc_html_e( 'Archive', 'creatorflow' );
                }
                ?>
            </span>
            <h1 class="archive-hero__title h2">
                <?php
                if ( is_category() ) {
                    single_cat_title();
                } elseif ( is_tag() ) {
                    single_tag_title();
                } elseif ( is_author() ) {
                    the_author();
                } elseif ( is_search() ) {
                    printf( esc_html__( '"%s"', 'creatorflow' ), esc_html( get_search_query() ) );
                } elseif ( is_post_type_archive() ) {
                    post_type_archive_title();
                } else {
                    the_archive_title();
                }
                ?>
            </h1>
            <?php
            $archive_description = get_the_archive_description();
            if ( $archive_description ) :
                ?>
                <p class="archive-hero__description body-md"><?php echo wp_kses_post( $archive_description ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>
