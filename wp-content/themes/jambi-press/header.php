<?php
/**
 * Header Template
 * @package Jambi_Press
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#FF5722">
    <link rel="preconnect" href="https://api.fontshare.com">
    <?php wp_head(); ?>
    <script>
    (function(){
        var theme = localStorage.getItem('jp-theme');
        if (!theme) theme = window.matchMedia('(prefers-color-scheme:dark)').matches ? 'dark' : 'light';
        if (theme === 'dark') document.documentElement.classList.add('jp-dark-mode');
    })();
    </script>
<?php if (function_exists('adinserter')) echo adinserter(1); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a href="#main-content" style="position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0;background:var(--jp-white);color:var(--jp-black);font-size:.875rem;font-weight:600;z-index:999;">
    Langsung ke konten
</a>
<style>
    a[href="#main-content"]:focus { width:auto; height:auto; padding:12px 20px; margin:8px; clip:auto; white-space:normal; border:2px solid var(--jp-red); border-radius:6px; }
</style>

<!-- ============================================================
     TOP UTILITY BAR (date + weather)
     ============================================================ -->
<div style="background: var(--jp-grey-100); color: var(--jp-grey-600); font-size: .75rem;">
    <div class="jp-container" style="display:flex; align-items:center; justify-content:space-between; height: 36px; gap: 16px;">
        <div style="display:flex; align-items:center; gap: 16px; overflow:hidden;">
            <span style="white-space:nowrap;"><?php echo date( 'l, j F Y' ); ?></span>
            <span style="opacity:.5;">|</span>
            <span style="display:inline-flex; align-items:center; gap:.4rem; white-space:nowrap;">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"/></svg>
                Jambi 28&deg;C
            </span>
        </div>
        <div style="display:none; align-items:center; gap: 14px;" class="jp-utility-links">
            <a href="<?php echo esc_url( home_url( '/e-paper' ) ); ?>" style="color:inherit;">E-Paper</a>
            <span style="opacity:.3;">|</span>
            <a href="<?php echo esc_url( home_url( '/hubungi-redaksi' ) ); ?>" style="color:inherit;">Kontak Redaksi</a>
            <span style="opacity:.3;">|</span>
            <a href="<?php echo esc_url( home_url( '/pedoman-media-siber' ) ); ?>" style="color:inherit;">Pedoman Media Siber</a>
        </div>
    </div>
    <style>
        @media (min-width: 768px) { .jp-utility-links { display: flex !important; } }
        .jp-utility-links a:hover { color: var(--jp-red); }
    </style>
</div>

<!-- ============================================================
     BREAKING NEWS TICKER
     ============================================================ -->
<div style="background: var(--jp-red); color: var(--jp-white); overflow:hidden; position:relative; z-index:50;">
    <div class="jp-container" style="display:flex; align-items:center;">
        <div style="background: var(--jp-red-dark); padding: 8px 14px; font-weight: 800; font-size: .6875rem; letter-spacing:.14em; text-transform: uppercase; white-space: nowrap; display:flex; align-items:center; gap:.5rem; flex-shrink:0; position:relative; z-index:2;">
            <span class="jp-live-pulse"></span>
            Breaking
        </div>
        <div style="overflow:hidden; flex:1; padding: 8px 0;">
            <div class="jp-ticker" style="white-space:nowrap;">
                <?php
                $break_q = new WP_Query( [
                    'posts_per_page' => 5, 'post_status' => 'publish',
                    'meta_key' => 'jp_breaking', 'meta_value' => '1',
                    'no_found_rows' => true,
                ] );
                $ticker_str = '';
                if ( $break_q->have_posts() ) :
                    while ( $break_q->have_posts() ) : $break_q->the_post();
                        $ticker_str .= '<a href="' . get_permalink() . '" style="margin-right: 56px;">' . esc_html( get_the_title() ) . '</a>';
                    endwhile;
                    wp_reset_postdata();
                else :
                    $ticker_str .= '<span style="margin-right: 56px;">Berita terkini Jambi tersaji cepat dan terpercaya</span>';
                endif;
                echo $ticker_str . $ticker_str;
                ?>
            </div>
        </div>
    </div>
</div>

<!-- ============================================================
     MAIN HEADER
     ============================================================ -->
<header style="background: var(--jp-white); border-bottom: 1px solid var(--jp-grey-200); position: sticky; top: 0; z-index: 40;">
    <div class="jp-container" style="display:flex; align-items:center; justify-content:space-between; height: 72px; gap: 16px;">

        <?php if ( has_custom_logo() ) : ?>
            <?php the_custom_logo(); ?>
        <?php else : ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="display:flex; align-items:center; flex-shrink:0;" aria-label="Jambi Press">
            <svg width="160" height="36" viewBox="0 0 180 40" fill="none" role="img" aria-label="Jambi Press">
                <text x="0" y="32" font-family="'Cabinet Grotesk','Inter',system-ui,sans-serif" font-weight="900" font-size="32" letter-spacing="-0.02" fill="var(--jp-red)">JAMBI</text>
                <text x="104" y="32" font-family="'Cabinet Grotesk','Inter',system-ui,sans-serif" font-weight="900" font-size="32" letter-spacing="-0.02" fill="var(--jp-black)">PRESS</text>
            </svg>
        </a>
        <?php endif; ?>

        <nav class="jp-cat-nav" aria-label="Navigasi Kategori" style="display:none; align-items:center; gap: 2px; flex:1; justify-content:center;">
            <?php
            $all_cats = get_categories( [ 'hide_empty' => true, 'number' => 30, 'orderby' => 'count', 'order' => 'DESC', 'exclude' => get_option('default_category') ] );
            $primary_cats = array_slice( $all_cats, 0, 7 );
            $more_cats = array_slice( $all_cats, 7 );
            foreach ( $primary_cats as $pc ) :
            ?>
            <a href="<?php echo esc_url( get_category_link( $pc->term_id ) ); ?>" class="jp-cat-nav-item">
                <?php echo esc_html( $pc->name ); ?>
            </a>
            <?php endforeach; ?>
            <?php if ( ! empty( $more_cats ) ) : ?>
            <div class="jp-mega-wrap">
                <a href="#" class="jp-cat-nav-item" style="color: var(--jp-red); font-weight: 700;" onclick="return false;">Lainnya &rsaquo;</a>
                <div class="jp-mega-dropdown">
                    <?php foreach ( $more_cats as $mc ) : ?>
                    <a href="<?php echo esc_url( get_category_link( $mc->term_id ) ); ?>">
                        <?php echo esc_html( $mc->name ); ?>
                        <span style="font-weight:400; color:var(--jp-grey-400); font-size:.6875rem; margin-left:4px;">(<?php echo $mc->count; ?>)</span>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
        </nav>
        <style>
            @media (min-width: 1024px) { .jp-cat-nav { display: flex !important; } }
        </style>

        <div style="display:flex; align-items:center; gap: 8px;">
            <button id="jp-dark-toggle" class="jp-icon-btn" aria-label="Ganti mode gelap/terang" style="position:relative;">
                <svg class="jp-sun-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"/><path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/></svg>
                <svg class="jp-moon-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
            </button>
            <button id="jp-search-toggle" class="jp-icon-btn" aria-label="Cari">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
            </button>

            <a href="<?php echo esc_url( home_url( '/e-paper' ) ); ?>" class="jp-btn jp-btn-outline" style="font-size: .75rem; padding: .5rem .85rem; display:none;">
                E-Paper
            </a>

            <a href="#" class="jp-btn jp-btn-primary jp-btn-live" style="font-size: .75rem; padding: .5rem .85rem; display:none;">
                <span class="jp-live-pulse" style="width:6px; height:6px; background: var(--jp-white);"></span>
                Live Update
            </a>

            <button id="jp-mobile-toggle" class="jp-icon-btn" aria-label="Menu" style="display:block;">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </div>
        <style>
            .jp-icon-btn { padding: .5rem; border-radius: 6px; color: var(--jp-grey-700); transition: all .2s ease; }
            .jp-icon-btn:hover { color: var(--jp-red); background: var(--jp-grey-100); }
            @media (min-width: 1024px) { .jp-btn-outline, .jp-btn-live { display: inline-flex !important; } #jp-mobile-toggle { display: none !important; } }
        </style>
    </div>

    <div id="jp-search-overlay" style="display:none; background: var(--jp-white); border-bottom: 1px solid var(--jp-grey-200); box-shadow: 0 8px 24px rgba(0,0,0,.06);">
        <div class="jp-container" style="padding: 20px 16px;">
            <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" style="display:flex; align-items:center; gap: 12px;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--jp-grey-500)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                <input type="search" name="s" placeholder="Cari berita, topik, atau lokasi..." value="<?php echo get_search_query(); ?>" style="flex:1; font-size: 1.125rem; padding: .5rem 0; border:0; outline:0; background:transparent;" autofocus>
                <button type="submit" style="color: var(--jp-red); font-weight: 700; font-size: .875rem;">Cari</button>
            </form>
        </div>
    </div>

    <div id="jp-mobile-menu" style="display:none; background: var(--jp-white); border-top: 1px solid var(--jp-grey-100);">
        <div class="jp-container" style="padding: 16px 16px;">
            <nav style="display:flex; flex-direction:column; gap: 2px;">
                <?php foreach ( $all_cats as $cat ) : ?>
                <a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>" style="padding: 12px 16px; font-size: .875rem; font-weight: 600; color: var(--jp-grey-700); border-radius: 6px; display:flex; align-items:center; justify-content:space-between;">
                    <?php echo esc_html( $cat->name ); ?>
                    <span style="color: var(--jp-grey-400); font-size: .75rem;">(<?php echo $cat->count; ?>)</span>
                </a>
                <?php endforeach; ?>
            </nav>
            <div style="display:flex; gap: 8px; margin-top: 12px;">
                <a href="<?php echo esc_url( home_url( '/e-paper' ) ); ?>" class="jp-btn jp-btn-outline" style="flex:1; font-size: .75rem;">E-Paper</a>
                <a href="#" class="jp-btn jp-btn-primary" style="flex:1; font-size: .75rem;">Live Update</a>
            </div>
        </div>
    </div>
</header>
