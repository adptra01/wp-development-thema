<?php
/**
 * Front Page Template
 * @package Jambi_Press
 */

get_header();
?>
<main id="main-content" style="width:100%; max-width:100%;">

<!-- SECTION 1: HERO EDITORIAL -->
<section class="jp-hero" style="position:relative; background: var(--jp-dark); overflow:hidden; min-height: 500px;">
  <div style="position:absolute; inset:0;">
    <img src="https://picsum.photos/seed/jambi-hero/1920/1080" alt=""
         style="width:100%; height:100%; object-fit:cover; opacity:1; filter: contrast(1.05);">
    <div style="position:absolute; inset:0; background: linear-gradient(to right, rgba(0,0,0,.72) 0%, rgba(0,0,0,.35) 35%, rgba(0,0,0,.05) 100%);"></div>
  </div>
  <div class="jp-container" style="position:relative; z-index:2; height:100%; min-height:500px; display:flex; flex-direction:column; justify-content:flex-end; padding-top:80px; padding-bottom:40px;">
    <?php
    $hero_q = new WP_Query( [ 'posts_per_page' => 1, 'post_status' => 'publish', 'no_found_rows' => true ] );
    if ( $hero_q->have_posts() ) : $hero_q->the_post(); $hero_cats = get_the_category();
    ?>
    <div style="margin-bottom:16px;">
      <a href="<?php echo esc_url( get_category_link( $hero_cats[0]->term_id ) ); ?>" class="jp-cat-bg jp-bg-primary"><?php echo esc_html( $hero_cats[0]->name ); ?></a>
    </div>
    <h1 class="jp-display-1" style="color:#FFFFFF; margin:0 0 16px; max-width:650px; text-wrap:balance; text-shadow:0 2px 4px rgba(0,0,0,.25), 0 8px 24px rgba(0,0,0,.35);">
      <a href="<?php the_permalink(); ?>" style="color:inherit;"><?php the_title(); ?></a>
    </h1>
    <p style="color:rgba(255,255,255,.8); font-size: 1.0625rem; max-width: 520px; margin: 0 0 24px; line-height:1.65; text-shadow:0 1px 3px rgba(0,0,0,.2);">
      <?php echo jp_excerpt( 20 ); ?>
    </p>
    <div style="display:flex; flex-wrap:wrap; gap:12px;">
      <a href="<?php the_permalink(); ?>" class="jp-btn jp-btn-primary">Baca Selengkapnya</a>
      <a href="#berita-terbaru" class="jp-btn jp-btn-ghost-dark">Berita Terbaru</a>
    </div>
    <div style="display:flex; align-items:center; gap:16px; margin-top:32px;">
      <span class="jp-meta" style="color:rgba(255,255,255,.6);"><?php echo jp_time_ago(); ?></span>
      <span style="width:4px; height:4px; border-radius:9999px; background:rgba(255,255,255,.3);"></span>
      <span class="jp-meta" style="color:rgba(255,255,255,.6);"><?php echo jp_reading_time(); ?> baca</span>
      <span style="width:4px; height:4px; border-radius:9999px; background:rgba(255,255,255,.3);"></span>
      <span class="jp-meta" style="color:rgba(255,255,255,.6);">Oleh <?php the_author(); ?></span>
    </div>
    <?php wp_reset_postdata(); endif; ?>
  </div>
</section>

<!-- SECTION 2: BERITA TERBARU (BENTO GRID) -->
<section class="jp-section" id="berita-terbaru">
  <div class="jp-container">
    <div style="display:flex; align-items:flex-end; justify-content:space-between; margin-bottom:32px;">
      <h2 class="jp-display-3" style="margin:0;">Berita Terbaru</h2>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color:var(--jp-red); font-weight:700; font-size:.875rem;">Lihat Semua &rsaquo;</a>
    </div>
    <div class="jp-grid-bento">
    <?php
    $bento_q = new WP_Query( [ 'posts_per_page' => 6, 'post_status' => 'publish', 'no_found_rows' => true, 'offset' => 1 ] );
    if ( $bento_q->have_posts() ) : $bi = 0;
      while ( $bento_q->have_posts() ) : $bento_q->the_post();
        $cats = get_the_category(); $is_hero = ( $bi === 0 );
    ?>
      <article class="<?php echo $is_hero ? 'item-hero' : 'item-wide'; ?>">
        <a href="<?php the_permalink(); ?>" style="display:block;">
          <div class="jp-media" style="border-radius:8px; <?php echo $is_hero ? 'min-height:360px;' : 'aspect-ratio: 16/10;'; ?>">
            <?php jp_post_thumb( $is_hero ? 'jp-hero' : 'jp-card', $is_hero ? 800 : 600, $is_hero ? 533 : 400, $bi < 2 ? 'eager' : 'lazy' ); ?>
          </div>
          <span class="jp-cat" style="color:var(--jp-red); margin-top:12px; display:inline-block;"><?php echo esc_html( $cats[0]->name ); ?></span>
          <h3 class="jp-post-title <?php echo $is_hero ? 'jp-display-3' : ''; ?>" style="margin:4px 0 0; <?php echo !$is_hero ? 'font-size:1rem;' : ''; ?>"><?php the_title(); ?></h3>
          <?php if ( ! $is_hero ) : ?>
          <p class="jp-line-clamp-2" style="color:var(--jp-grey-500); font-size:.875rem; margin:6px 0 0;"><?php echo jp_excerpt( 12 ); ?></p>
          <?php endif; ?>
          <div style="display:flex; align-items:center; gap:8px; margin-top:8px;">
            <span class="jp-meta"><?php echo jp_time_ago(); ?></span>
            <span style="width:3px; height:3px; border-radius:9999px; background:var(--jp-grey-300);"></span>
            <span class="jp-meta"><?php echo jp_reading_time(); ?> baca</span>
          </div>
        </a>
      </article>
    <?php $bi++; endwhile; wp_reset_postdata(); endif; ?>
    <?php if ( $bento_q->post_count >= 3 ) : ?>
    <div class="item-wide" style="display:flex; align-items:center; justify-content:center; background:var(--jp-grey-50); border:1px solid var(--jp-grey-200); border-radius:8px; padding:8px;">
      <a href="/hubungi-redaksi" rel="nofollow sponsored" target="_blank">
        <img alt="banner" src="https://landings-cdn.adsterratech.com/referralBanners/gif/720x90_adsterra_reff.gif" style="display:block; max-width:100%; height:auto; border-radius:4px;">
      </a>
      <span class="jp-native-ad-badge">Ad</span>
    </div>
    <?php endif; ?>
    </div>
  </div>
</section>

<!-- SECTION 3: BANNER 300x250 -->
<section class="jp-section-tight" style="background:var(--jp-grey-50);">
  <div class="jp-container">
    <div style="width:100%; display:flex; flex-direction:column; align-items:center; gap:4px;">
      <span class="jp-ad-label" style="display:block; text-align:center;">Iklan</span>
      <script>
        atOptions = {
          'key' : '7f612bdca5a16a4c9fe7dc1cca6a77a8',
          'format' : 'iframe',
          'height' : 250,
          'width' : 300,
          'params' : {}
        };
      </script>
      <script src="https://www.highperformanceformat.com/7f612bdca5a16a4c9fe7dc1cca6a77a8/invoke.js"></script>
    </div>
  </div>
</section>

<!-- SECTION 4: KATEGORI POPULER -->
<section class="jp-section-tight" style="background:var(--jp-grey-50);">
  <div class="jp-container">
    <div style="display:flex; gap:8px; overflow-x:auto; scrollbar-width:thin; padding-bottom:4px;">
      <?php
      $pop_cats = get_categories(['hide_empty'=>false,'number'=>12,'orderby'=>'count','order'=>'DESC','exclude'=>get_option('default_category')]);
      $cat_colors = ['jp-bg-primary','jp-bg-secondary','jp-bg-accent','jp-bg-secondary-l','jp-bg-green','jp-bg-violet','jp-bg-cyan','jp-bg-pink','jp-bg-gray'];
      $ci = 0;
      foreach ( $pop_cats as $pc ) :
      ?>
      <a href="<?php echo esc_url( get_category_link( $pc->term_id ) ); ?>"
         class="jp-cat-bg <?php echo $cat_colors[$ci % count($cat_colors)]; ?>"
         style="white-space:nowrap; flex-shrink:0; padding:6px 14px; font-size:.75rem;">
        <?php echo esc_html( $pc->name ); ?>
        <span style="opacity:.6; margin-left:4px;">(<?php echo $pc->count; ?>)</span>
      </a>
      <?php $ci++; endforeach; ?>
    </div>
  </div>
</section>

<!-- SECTION 5: BERITA DAERAH (dynamic WP_Query from latest posts) -->
<section class="jp-section">
  <div class="jp-container" style="display:grid; gap:40px;">
    <style>
      @media (min-width: 1024px) { .jp-daerah-grid { grid-template-columns: 5fr 7fr !important; } }
    </style>
    <div class="jp-daerah-grid" style="display:grid; gap:40px;">
      <div>
        <span class="jp-eyebrow">Seputar Daerah</span>
        <h2 class="jp-display-3" style="margin:8px 0 16px;">Berita Kabupaten & Kota</h2>
        <p style="color:var(--jp-grey-500); font-size:.875rem; line-height:1.6; margin:0 0 24px;">
          Liputan dari 11 kabupaten/kota se-Provinsi Jambi. Dari Kota Jambi hingga Kerinci, Sungai Penuh hingga Tanjung Jabung.
        </p>
        <div style="display:flex; flex-wrap:wrap; gap:6px;">
          <?php
          $daerah_list = ['Kota Jambi','Muaro Jambi','Batanghari','Tebo','Bungo','Merangin','Sarolangun','Kerinci','Sungai Penuh','Tanjung Jabung Barat','Tanjung Jabung Timur'];
          foreach ( $daerah_list as $d ) :
          ?>
          <span style="font-size:.75rem; font-weight:600; color:var(--jp-grey-600); background:var(--jp-white); border:1px solid var(--jp-grey-200); padding:4px 12px; border-radius:9999px;"><?php echo $d; ?></span>
          <?php endforeach; ?>
        </div>
      </div>
      <div>
        <div class="jp-divide-y">
        <?php
        $daerah_q = new WP_Query( [
          'posts_per_page' => 5, 'post_status' => 'publish',
          'category_name'  => 'pemerintahan,ekonomi,budaya',
          'no_found_rows'  => true,
        ] );
        if ( $daerah_q->have_posts() ) : $di = 0;
          while ( $daerah_q->have_posts() ) : $daerah_q->the_post(); $dc = get_the_category();
        ?>
          <article style="padding: 20px 0; display:flex; gap:16px; <?php echo $di===0 ? 'padding-top:0;' : ''; ?>">
            <a href="<?php the_permalink(); ?>" class="jp-media" style="flex-shrink:0; width:120px; height:80px; border-radius:6px;">
              <?php jp_post_thumb( 'jp-thumb', 400, 300 ); ?>
            </a>
            <div style="flex:1; min-width:0;">
              <span class="jp-cat" style="color:var(--jp-red); font-size:.6875rem;"><?php echo esc_html( $dc[0]->name ); ?></span>
              <h3 class="jp-post-title" style="font-size:.9375rem; margin:4px 0 0;">
                <a href="<?php the_permalink(); ?>" style="color:inherit;"><?php the_title(); ?></a>
              </h3>
              <span class="jp-meta" style="margin-top:6px; display:inline-block;"><?php echo jp_time_ago(); ?></span>
            </div>
          </article>
        <?php $di++; endwhile; wp_reset_postdata();
        else :
          // Fallback only if no posts at all
          echo '<p style="color:var(--jp-grey-400);">Belum ada berita daerah.</p>';
        endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 6: AD LEADERBOARD -->
<section class="jp-section-tight jp-ad-section" style="background:var(--jp-grey-50);">
  <div class="jp-container">
    <div class="jp-ad-container" style="width:100%; display:flex; flex-direction:column; align-items:center; gap:4px; min-height:90px;">
      <span class="jp-ad-label" style="display:block; text-align:center;">Iklan</span>
      <script>
        atOptions = {
          'key' : 'a38fb2cdad5a14e10708902b31e90271',
          'format' : 'iframe',
          'height' : 90,
          'width' : 728,
          'params' : {}
        };
      </script>
      <script src="https://www.highperformanceformat.com/a38fb2cdad5a14e10708902b31e90271/invoke.js"></script>
    </div>
  </div>
</section>

<!-- SECTION 7: AD SPACER -->
<section class="jp-section-tight" style="background:var(--jp-grey-50); border-top:1px solid var(--jp-grey-200); border-bottom:1px solid var(--jp-grey-200);">
  <div class="jp-container">
    <div style="width:100%; display:flex; flex-direction:column; align-items:center;">
      <span class="jp-ad-label" style="display:block; text-align:center; margin-bottom:4px;">Iklan</span>
      <script async="async" data-cfasync="false" src="https://pl29830690.effectivecpmnetwork.com/cee6f0597c021563225baffc54e104f8/invoke.js"></script>
      <div id="container-cee6f0597c021563225baffc54e104f8"></div>
    </div>
  </div>
</section>

<!-- SECTION 8: TRENDING (order by comment count / date) -->
<section class="jp-section">
  <div class="jp-container">
    <h2 class="jp-display-3" style="margin:0 0 32px;">Paling Banyak Dibaca</h2>
    <div style="display:grid; gap:0;">
      <style>
        @media (min-width: 768px) { .jp-trend-grid { grid-template-columns: repeat(2, 1fr) !important; } }
      </style>
      <div class="jp-trend-grid" style="display:grid;">
      <?php
      $trend_q = new WP_Query( [
        'posts_per_page' => 5, 'post_status' => 'publish',
        'orderby' => 'comment_count', 'order' => 'DESC',
        'no_found_rows' => true,
      ] );
      if ( $trend_q->have_posts() ) : $ti = 0;
        while ( $trend_q->have_posts() ) : $trend_q->the_post(); $tc = get_the_category();
      ?>
        <article style="display:flex; align-items:flex-start; gap:16px; padding: 16px 0; border-bottom: 1px solid var(--jp-grey-100); <?php echo $ti>3 ? 'border-bottom:0;' : ''; ?> <?php echo $ti<2 ? 'padding-top:0;' : ''; ?>">
          <span class="jp-rank" style="color: var(--jp-red);flex-shrink:0; width:36px; text-align:right; z-index:10;"><?php echo str_pad($ti+1,2,'0',STR_PAD_LEFT); ?></span>
          <a href="<?php the_permalink(); ?>" class="jp-media" style="flex-shrink:0; width:80px; height:60px; border-radius:4px;">
            <?php jp_post_thumb( 'jp-list', 160, 120 ); ?>
          </a>
          <div style="flex:1; min-width:0;">
            <span class="jp-cat" style="color:var(--jp-red); font-size:.6875rem;"><?php echo esc_html( $tc[0]->name ); ?></span>
            <h3 class="jp-post-title" style="font-size:.875rem; margin:4px 0 0;">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
            <span class="jp-meta" style="margin-top:4px; display:inline-block;"><?php echo jp_time_ago(); ?></span>
          </div>
        </article>
      <?php $ti++; endwhile; wp_reset_postdata(); endif; ?>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 9: HEADLINE DAERAH (11 kabupaten/kota Jambi) -->
<section class="jp-section" style="background:var(--jp-grey-50);">
  <div class="jp-container">
    <div style="display:flex; align-items:flex-end; justify-content:space-between; margin-bottom:24px;">
      <div>
        <span class="jp-eyebrow">Seputar Daerah</span>
        <h2 class="jp-display-3" style="margin:8px 0 0;">Headline Daerah</h2>
      </div>
      <a href="<?php echo esc_url( home_url( '/category/daerah' ) ); ?>" style="color:var(--jp-red); font-weight:700; font-size:.875rem;">Lihat Semua &rsaquo;</a>
    </div>
    <?php
    $daerah_nama = ['Kota Jambi','Muaro Jambi','Batanghari','Tebo','Bungo','Merangin','Sarolangun','Kerinci','Sungai Penuh','Tanjung Jabung Barat','Tanjung Jabung Timur'];
    $daerah_q = new WP_Query( [ 'posts_per_page' => 6, 'post_status' => 'publish', 'no_found_rows' => true ] );
    if ( $daerah_q->have_posts() ) : $di = 0;
    ?>
    <style>
      @media (min-width: 768px) { .jp-daerah-headline { grid-template-columns: repeat(2, 1fr) !important; } }
      @media (min-width: 1024px) { .jp-daerah-headline { grid-template-columns: repeat(3, 1fr) !important; } }
    </style>
    <div class="jp-daerah-headline" style="display:grid; gap:20px;">
      <?php while ( $daerah_q->have_posts() ) : $daerah_q->the_post(); ?>
      <article>
        <a href="<?php the_permalink(); ?>">
          <div class="jp-media" style="border-radius:10px; aspect-ratio:16/10; position:relative;">
            <?php jp_post_thumb( 'jp-card', 600, 375 ); ?>
            <span style="position:absolute; top:12px; left:12px; font-size:.625rem; font-weight:800; color:#fff; background:var(--jp-secondary); padding:3px 10px; border-radius:4px; letter-spacing:.04em; text-transform:uppercase;"><?php echo $daerah_nama[$di % count($daerah_nama)]; ?></span>
          </div>
          <h3 class="jp-post-title" style="font-size:.9375rem; margin:10px 0 0;"><?php the_title(); ?></h3>
          <span class="jp-meta" style="margin-top:6px; display:inline-block;"><?php echo jp_time_ago(); ?></span>
        </a>
      </article>
      <?php $di++; endwhile; wp_reset_postdata(); endif; ?>
    </div>
  </div>
</section>

<!-- SECTION 10: PILIHAN REDAKSI (featured hero + list) -->
<section class="jp-section">
  <div class="jp-container">
    <div style="display:flex; align-items:flex-end; justify-content:space-between; margin-bottom:32px;">
      <h2 class="jp-display-3" style="margin:0;">Pilihan Redaksi</h2>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color:var(--jp-red); font-weight:700; font-size:.875rem;">Lihat Semua &rsaquo;</a>
    </div>
    <?php
    $redaksi_q = new WP_Query( [
      'posts_per_page' => 4, 'post_status' => 'publish',
      'orderby' => 'date', 'order' => 'DESC',
      'no_found_rows' => true, 'offset' => 0,
    ] );
    if ( $redaksi_q->have_posts() ) : $ri = 0;
    ?>
    <style>
      @media (min-width: 1024px) { .jp-redaksi-grid { grid-template-columns: 1fr 1fr !important; } }
    </style>
    <div class="jp-redaksi-grid" style="display:grid; gap:32px;">
      <?php while ( $redaksi_q->have_posts() ) : $redaksi_q->the_post(); $rc = get_the_category(); ?>
        <?php if ( $ri === 0 ) : ?>
        <article>
          <a href="<?php the_permalink(); ?>">
            <div class="jp-media" style="border-radius:10px; aspect-ratio:16/10; margin-bottom:16px;">
              <?php jp_post_thumb( 'jp-hero', 800, 500, 'eager' ); ?>
            </div>
            <span class="jp-cat" style="color:var(--jp-red); font-size:.6875rem;"><?php echo esc_html( $rc[0]->name ); ?></span>
            <h3 class="jp-display-3" style="margin:6px 0 8px;"><?php the_title(); ?></h3>
            <p style="color:var(--jp-grey-500); font-size:.875rem; line-height:1.6; margin:0;"><?php echo jp_excerpt( 18 ); ?></p>
            <div style="display:flex; align-items:center; gap:8px; margin-top:10px;">
              <span class="jp-meta"><?php echo jp_time_ago(); ?></span>
              <span style="width:3px; height:3px; border-radius:9999px; background:var(--jp-grey-300);"></span>
              <span class="jp-meta"><?php echo jp_reading_time(); ?> baca</span>
            </div>
          </a>
        </article>
        <div style="display:flex; flex-direction:column; gap:0;">
        <?php else : ?>
          <article style="display:flex; gap:16px; padding:16px 0; border-bottom:1px solid var(--jp-grey-100); <?php echo $ri === 1 ? 'padding-top:0;' : ''; ?> <?php echo $ri >= 3 ? 'border-bottom:0;' : ''; ?>">
            <a href="<?php the_permalink(); ?>" class="jp-media" style="flex-shrink:0; width:100px; height:70px; border-radius:6px;">
              <?php jp_post_thumb( 'jp-list', 200, 140 ); ?>
            </a>
            <div style="flex:1; min-width:0;">
              <span class="jp-cat" style="color:var(--jp-red); font-size:.6875rem;"><?php echo esc_html( $rc[0]->name ); ?></span>
              <h3 class="jp-post-title" style="font-size:.875rem; margin:4px 0 0;">
                <a href="<?php the_permalink(); ?>" style="color:inherit;"><?php the_title(); ?></a>
              </h3>
              <span class="jp-meta" style="margin-top:4px; display:inline-block;"><?php echo jp_time_ago(); ?></span>
            </div>
          </article>
        <?php endif; ?>
      <?php $ri++; endwhile; wp_reset_postdata(); ?>
      </div>
    </div>
    <?php endif; ?>
  </div>
</section>

<!-- SECTION 11: WISATA JAMBI (dynamic from category 'wisata') -->
<section class="jp-section">
  <div class="jp-container">
    <div style="display:flex; align-items:flex-end; justify-content:space-between; margin-bottom:32px;">
      <div>
        <span class="jp-eyebrow">Jelajahi Jambi</span>
        <h2 class="jp-display-3" style="margin:8px 0 0;">Destinasi Wisata</h2>
      </div>
      <?php $wis_cat = get_category_by_slug( 'wisata' ); if ( $wis_cat ) : ?>
      <a href="<?php echo esc_url( get_category_link( $wis_cat->term_id ) ); ?>" style="color:var(--jp-red); font-weight:700; font-size:.875rem;">Lihat Semua &rsaquo;</a>
      <?php endif; ?>
    </div>
    <?php
    $wisata_q = new WP_Query( [
      'posts_per_page' => 3, 'post_status' => 'publish',
      'category_name' => 'wisata', 'no_found_rows' => true,
    ] );
    if ( $wisata_q->have_posts() ) : $wi = 0;
    ?>
    <style>
      @media (min-width: 768px) { .jp-wisata-grid { grid-template-columns: 1fr 1fr !important; } .jp-wisata-vert { grid-template-rows: 1fr 1fr !important; } }
    </style>
    <div class="jp-wisata-grid" style="display:grid; gap:20px;">
      <?php while ( $wisata_q->have_posts() ) : $wisata_q->the_post(); $is_first = ( $wi === 0 ); ?>
        <?php if ( $is_first ) : ?>
        <!-- Feature card -->
        <article class="jp-media" style="border-radius:10px; position:relative; aspect-ratio:4/3; min-height:360px;">
          <a href="<?php the_permalink(); ?>" style="display:block; width:100%; height:100%;">
            <?php jp_post_thumb( 'jp-card', 800, 600 ); ?>
            <div style="position:absolute; inset:0; background: linear-gradient(to top, rgba(0,0,0,.7) 0%, transparent 50%);"></div>
            <div style="position:absolute; bottom:0; left:0; right:0; padding:24px;">
              <h3 class="jp-post-title" style="color:#FFFFFF; font-size:1.5rem; margin:0 0 6px;"><?php the_title(); ?></h3>
              <p class="jp-line-clamp-2" style="color:rgba(255,255,255,.8); font-size:.875rem; margin:0;"><?php echo jp_excerpt( 15 ); ?></p>
            </div>
          </a>
        </article>
        <?php else : ?>
        <?php if ( $wi === 1 ) echo '<div style="display:grid; gap:20px;" class="jp-wisata-vert">'; ?>
        <!-- Stacked card -->
        <article class="jp-media" style="border-radius:10px; position:relative; aspect-ratio:16/9;">
          <a href="<?php the_permalink(); ?>" style="display:block; width:100%; height:100%;">
            <?php jp_post_thumb( 'jp-card', 800, 450 ); ?>
            <div style="position:absolute; inset:0; background: linear-gradient(to top, rgba(0,0,0,.65) 0%, transparent 50%);"></div>
            <div style="position:absolute; bottom:0; left:0; right:0; padding:20px;">
              <h3 class="jp-post-title" style="color:#FFFFFF; font-size:1.125rem; margin:0;"><?php the_title(); ?></h3>
            </div>
          </a>
        </article>
        <?php if ( $wi === 2 ) echo '</div>'; endif; ?>
      <?php $wi++; endwhile; wp_reset_postdata(); ?>
      <?php if ( $wi === 2 ) echo '</div>'; ?>
    </div>
    <?php endif; ?>
  </div>
</section>

<!-- SECTION 12: UMKM & BISNIS LOKAL (dynamic from category 'umkm') -->
<section class="jp-section" style="background:var(--jp-grey-50);">
  <div class="jp-container">
    <div style="display:flex; align-items:flex-end; justify-content:space-between; margin-bottom:32px;">
      <div>
        <span class="jp-eyebrow">Potensi Daerah</span>
        <h2 class="jp-display-3" style="margin:8px 0 0;">UMKM & Bisnis Lokal</h2>
      </div>
      <?php $umkm_cat = get_category_by_slug( 'umkm' ); if ( $umkm_cat ) : ?>
      <a href="<?php echo esc_url( get_category_link( $umkm_cat->term_id ) ); ?>" style="color:var(--jp-red); font-weight:700; font-size:.875rem;">Lihat Semua &rsaquo;</a>
      <?php endif; ?>
    </div>
    <div class="jp-grid-3">
    <?php
    $umkm_q = new WP_Query( [
      'posts_per_page' => 3, 'post_status' => 'publish',
      'category_name' => 'umkm', 'no_found_rows' => true,
    ] );
    if ( $umkm_q->have_posts() ) :
      while ( $umkm_q->have_posts() ) : $umkm_q->the_post();
    ?>
      <article class="jp-media" style="border-radius:10px; position:relative; aspect-ratio:4/3;">
        <a href="<?php the_permalink(); ?>" style="display:block; width:100%; height:100%;">
          <?php jp_post_thumb( 'jp-card', 600, 450 ); ?>
          <div style="position:absolute; inset:0; background:linear-gradient(to top, rgba(0,0,0,.7) 0%, transparent 50%);"></div>
          <div style="position:absolute; bottom:0; left:0; right:0; padding:20px;">
            <h3 class="jp-post-title" style="color:#FFFFFF; font-size:1.0625rem; margin:0;"><?php the_title(); ?></h3>
          </div>
        </a>
      </article>
    <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
  </div>
</section>

<!-- SECTION 13: AD BOTTOM -->
<section class="jp-section-tight" style="border-bottom:1px solid var(--jp-grey-200);">
  <div class="jp-container">
    <div style="width:100%; display:flex; flex-direction:column; align-items:center; gap:4px;">
      <span class="jp-ad-label" style="display:block; text-align:center;">Iklan</span>
      <a href="/hubungi-redaksi" rel="nofollow sponsored" target="_blank" style="display:flex; width:100%; max-width:728px; height:90px; background:var(--jp-grey-100); border:1px dashed var(--jp-grey-300); border-radius:6px; align-items:center; justify-content:center; color:var(--jp-grey-400); font-size:.75rem; font-weight:600; text-transform:uppercase; letter-spacing:.12em; transition:all .2s ease; text-decoration:none;">
        Iklan &middot; 728&times;90
      </a>
    </div>
  </div>
</section>

</main>
<?php get_footer(); ?>
