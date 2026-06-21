<?php
/**
 * Front Page Template
 * @package Jambi_Press
 */

get_header();
?>
<main style="overflow-x:hidden; width:100%; max-width:100%;">

<!-- SECTION 1: HERO EDITORIAL -->
<section style="position:relative; background: var(--jp-black); overflow:hidden; min-height: 75dvh;">
  <div style="position:absolute; inset:0;">
    <img src="https://picsum.photos/seed/jambi-hero/1920/1080" alt=""
         style="width:100%; height:100%; object-fit:cover; opacity:.3; filter: contrast(1.15);">
    <div style="position:absolute; inset:0; background: linear-gradient(to top, var(--jp-black), transparent 60%);"></div>
  </div>
  <div class="jp-container" style="position:relative; z-index:2; height:100%; min-height:75dvh; display:flex; flex-direction:column; justify-content:flex-end; padding-top:80px; padding-bottom:56px;">
    <?php
    $hero_q = new WP_Query( [ 'posts_per_page' => 1, 'post_status' => 'publish', 'no_found_rows' => true ] );
    if ( $hero_q->have_posts() ) : $hero_q->the_post(); $hero_cats = get_the_category();
    ?>
    <div style="margin-bottom:16px;">
      <a href="<?php echo esc_url( get_category_link( $hero_cats[0]->term_id ) ); ?>" class="jp-cat-bg jp-bg-red"><?php echo esc_html( $hero_cats[0]->name ); ?></a>
    </div>
    <h1 class="jp-display-1" style="color: var(--jp-white); margin: 0 0 16px; max-width: 80rem; text-wrap:balance;">
      <a href="<?php the_permalink(); ?>" style="color:inherit;"><?php the_title(); ?></a>
    </h1>
    <p style="color: var(--jp-grey-300); font-size: 1.0625rem; max-width: 48rem; margin: 0 0 24px; line-height:1.65;">
      <?php echo jp_excerpt( 20 ); ?>
    </p>
    <div style="display:flex; flex-wrap:wrap; gap:12px;">
      <a href="<?php the_permalink(); ?>" class="jp-btn jp-btn-primary">Baca Selengkapnya</a>
      <a href="#berita-terbaru" class="jp-btn jp-btn-ghost-dark">Berita Terbaru</a>
    </div>
    <div style="display:flex; align-items:center; gap:16px; margin-top:32px;">
      <span class="jp-meta" style="color:var(--jp-grey-400);"><?php echo jp_time_ago(); ?></span>
      <span style="width:4px; height:4px; border-radius:9999px; background:var(--jp-grey-600);"></span>
      <span class="jp-meta" style="color:var(--jp-grey-400);"><?php echo jp_reading_time(); ?> baca</span>
      <span style="width:4px; height:4px; border-radius:9999px; background:var(--jp-grey-600);"></span>
      <span class="jp-meta" style="color:var(--jp-grey-400);">Oleh <?php the_author(); ?></span>
    </div>
    <?php wp_reset_postdata(); endif; ?>
  </div>
</section>

<!-- SECTION 2: AD LEADERBOARD -->
<section class="jp-section-tight" style="background:var(--jp-grey-50); border-bottom:1px solid var(--jp-grey-200);">
  <div class="jp-container">
    <div class="jp-ad" style="width:100%; height:80px; border-radius:6px;">Leaderboard &middot; 728x90</div>
  </div>
</section>

<!-- SECTION 3: BERITA TERBARU (BENTO GRID) -->
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
        <a href="<?php the_permalink(); ?>" style="display:block; height:100%;">
          <div class="jp-media" style="border-radius:8px; <?php echo $is_hero ? 'height:100%; min-height:360px;' : 'aspect-ratio: 16/10;'; ?>">
            <?php if ( has_post_thumbnail() ) : the_post_thumbnail( $is_hero ? 'jp-hero' : 'jp-card', [ 'style' => 'width:100%; height:100%; object-fit:cover;', 'loading' => $bi < 2 ? 'eager' : 'lazy' ] ); ?>
            <?php else : ?>
            <img src="https://picsum.photos/seed/<?php echo esc_attr( sanitize_title( get_the_title() ) ); ?>/<?php echo $is_hero ? '800/533' : '600/400'; ?>" alt="<?php the_title_attribute(); ?>" class="jp-img-fluid" loading="<?php echo $bi < 2 ? 'eager' : 'lazy'; ?>">
            <?php endif; ?>
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
    </div>
  </div>
</section>

<!-- SECTION 4: KATEGORI POPULER -->
<section class="jp-section-tight" style="background:var(--jp-grey-50);">
  <div class="jp-container">
    <div style="display:flex; gap:8px; overflow-x:auto; scrollbar-width:thin; padding-bottom:4px;">
      <?php
      $pop_cats = get_categories(['hide_empty'=>false,'number'=>12,'orderby'=>'count','order'=>'DESC']);
      $cat_colors = ['jp-bg-red','jp-bg-blue','jp-bg-green','jp-bg-amber','jp-bg-violet','jp-bg-cyan','jp-bg-pink','jp-bg-emerald','jp-bg-gray'];
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
              <img src="https://picsum.photos/seed/<?php echo esc_attr( sanitize_title( get_the_title() ) ); ?>/400/300" alt="<?php the_title_attribute(); ?>" class="jp-img-fluid" loading="lazy">
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

<!-- SECTION 6: AD SPACER -->
<section class="jp-section-tight" style="background:var(--jp-grey-50); border-top:1px solid var(--jp-grey-200); border-bottom:1px solid var(--jp-grey-200);">
  <div class="jp-container">
    <div class="jp-ad" style="width:100%; height:90px; border-radius:6px;">Iklan &middot; Leaderboard 728x90</div>
  </div>
</section>

<!-- SECTION 7: TRENDING (order by comment count / date) -->
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
          <span class="jp-rank" style="font-size:clamp(2.5rem,5vw,3.75rem); font-weight:900; line-height:.9; color:var(--jp-grey-200); flex-shrink:0; width:48px; text-align:right;"><?php echo str_pad($ti+1,2,'0',STR_PAD_LEFT); ?></span>
          <div style="flex:1; min-width:0;">
            <span class="jp-cat" style="color:var(--jp-red); font-size:.6875rem;"><?php echo esc_html( $tc[0]->name ); ?></span>
            <h3 class="jp-post-title" style="font-size:.9375rem; margin:4px 0 0;">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
            <div style="display:flex; align-items:center; gap:8px; margin-top:6px;">
              <span class="jp-meta"><?php echo jp_time_ago(); ?></span>
              <span style="width:3px; height:3px; border-radius:9999px; background:var(--jp-grey-300);"></span>
              <span class="jp-meta"><?php echo get_comments_number(); ?> komentar</span>
            </div>
          </div>
        </article>
      <?php $ti++; endwhile; wp_reset_postdata(); endif; ?>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 8: WISATA JAMBI (dynamic from category 'wisata') -->
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
            <img src="https://picsum.photos/seed/<?php echo esc_attr( sanitize_title( get_the_title() ) ); ?>/800/600" alt="<?php the_title_attribute(); ?>" class="jp-img-fluid" loading="lazy">
            <div style="position:absolute; inset:0; background: linear-gradient(to top, rgba(0,0,0,.7) 0%, transparent 50%);"></div>
            <div style="position:absolute; bottom:0; left:0; right:0; padding:24px;">
              <span class="jp-cat-bg jp-bg-emerald" style="font-size:.6875rem; margin-bottom:8px;">Wisata</span>
              <h3 class="jp-post-title" style="color:var(--jp-white); font-size:1.5rem; margin:8px 0 0;"><?php the_title(); ?></h3>
              <p class="jp-line-clamp-2" style="color:var(--jp-grey-300); font-size:.875rem; margin:8px 0 0;"><?php echo jp_excerpt( 15 ); ?></p>
            </div>
          </a>
        </article>
        <?php else : ?>
        <?php if ( $wi === 1 ) echo '<div style="display:grid; gap:20px;" class="jp-wisata-vert">'; ?>
        <!-- Stacked card -->
        <article class="jp-media" style="border-radius:10px; position:relative; aspect-ratio:16/9;">
          <a href="<?php the_permalink(); ?>" style="display:block; width:100%; height:100%;">
            <img src="https://picsum.photos/seed/<?php echo esc_attr( sanitize_title( get_the_title() ) ); ?>/800/450" alt="<?php the_title_attribute(); ?>" class="jp-img-fluid" loading="lazy">
            <div style="position:absolute; inset:0; background: linear-gradient(to top, rgba(0,0,0,.65) 0%, transparent 50%);"></div>
            <div style="position:absolute; bottom:0; left:0; right:0; padding:20px;">
              <span class="jp-cat-bg jp-bg-emerald" style="font-size:.6875rem; margin-bottom:6px;">Wisata</span>
              <h3 class="jp-post-title" style="color:var(--jp-white); font-size:1.125rem; margin:6px 0 0;"><?php the_title(); ?></h3>
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

<!-- SECTION 10: UMKM & BISNIS LOKAL (dynamic from category 'umkm') -->
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
          <img src="https://picsum.photos/seed/<?php echo esc_attr( sanitize_title( get_the_title() ) ); ?>/600/450" alt="<?php the_title_attribute(); ?>" class="jp-img-fluid" loading="lazy">
          <div style="position:absolute; inset:0; background:linear-gradient(to top, rgba(0,0,0,.7) 0%, transparent 50%);"></div>
          <div style="position:absolute; bottom:0; left:0; right:0; padding:20px;">
            <span class="jp-cat-bg jp-bg-pink" style="font-size:.6875rem;">UMKM</span>
            <h3 class="jp-post-title" style="color:var(--jp-white); font-size:1.0625rem; margin:8px 0 0;"><?php the_title(); ?></h3>
          </div>
        </a>
      </article>
    <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
  </div>
</section>

<!-- SECTION 11: AD BOTTOM -->
<section class="jp-section-tight" style="border-bottom:1px solid var(--jp-grey-200);">
  <div class="jp-container">
    <div class="jp-ad" style="width:100%; height:100px; border-radius:6px;">Iklan &middot; 970x90</div>
  </div>
</section>

</main>
<?php get_footer(); ?>
