<?php
/**
 * Template Name: Kandungan
 */

get_header();
?>

<section class="relative z-10 max-w-7xl sm:px-6 lg:px-8 mr-auto ml-auto pt-8 pr-4 pb-20 pl-4">
  <div class="relative overflow-hidden rounded-3xl bg-white ring-1 ring-[#DDD6FE]/60 sm:p-8 p-6">

    <div class="pointer-events-none absolute -top-24 -right-24 h-48 w-48 rounded-full bg-gradient-to-bl from-[#F472B6]/10 to-transparent blur-3xl" aria-hidden="true"></div>

    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-6 mb-8 relative">
      <div>
        <p class="text-[11px] sm:text-xs uppercase tracking-[0.2em] text-[#A78BFA] font-sans">(01) Bahan Aktif</p>
        <h2 class="sm:text-4xl md:text-5xl text-3xl text-[#2E1065] mt-2 font-playfair font-medium tracking-tight">Kenali <span class="italic text-[#8B5CF6]">Kandungan</span> di Setiap Produk</h2>
      </div>
      <p class="text-sm sm:text-base text-[#4C1D95] max-w-[42ch] font-sans leading-relaxed">Transparan tentang apa yang kamu pakai di wajahmu—karena kamu berhak tahu bahan-bahan terbaik untuk kulitmu.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-5">

      <?php
      $c = array(
        'name'    => 'Ceramide (NP, EOP, AP, AS, NS)',
        'icon'    => '🔬',
        'found'   => __( 'Blueberry 5% Ceramide Moisturizer', 'lumina-skin' ),
        'benefit' => __( 'Memperbaiki skin barrier, melembapkan 24 jam, menenangkan kulit merah & iritasi. 5 jenis Ceramide bekerja sama mengisi celah di lapisan kulit.', 'lumina-skin' ),
      );
      $n = array(
        'name'    => 'Niacinamide 5%',
        'icon'    => '✨',
        'found'   => __( 'Pomegranate 5% Niacinamide', 'lumina-skin' ),
        'benefit' => __( 'Mencerahkan kulit kusam, meratakan warna kulit, mengecilkan pori-pori, mengontrol minyak berlebih. Cocok untuk semua jenis kulit.', 'lumina-skin' ),
      );
      $ce = array(
        'name'    => 'Centella Asiatica',
        'icon'    => '🌿',
        'found'   => __( 'Centella Allantoin Soothing Gel', 'lumina-skin' ),
        'benefit' => __( 'Menenangkan kulit iritasi & berjerawat, mempercepat penyembuhan kulit, anti-inflamasi alami. Dikenal sebagai "herb of longevity."', 'lumina-skin' ),
      );
      $a = array(
        'name'    => 'Allantoin',
        'icon'    => '💧',
        'found'   => __( 'Centella Allantoin Soothing Gel', 'lumina-skin' ),
        'benefit' => __( 'Melembapkan, mengelupas sel kulit mati secara lembut, mempercepat regenerasi kulit. Aman untuk kulit sensitif & berjerawat.', 'lumina-skin' ),
      );
      $s = array(
        'name'    => 'SymWhite 377',
        'icon'    => '☀️',
        'found'   => __( 'Yuja Symwhite 377 Dark Spot', 'lumina-skin' ),
        'benefit' => __( 'Menghambat produksi melanin, memudarkan flek hitam & bekas jerawat, mencerahkan noda hitam. Setara dengan arbutin tapi lebih efektif.', 'lumina-skin' ),
      );
      $p = array(
        'name'    => 'Pomegranate Extract',
        'icon'    => '🍅',
        'found'   => __( 'Pomegranate 5% Niacinamide', 'lumina-skin' ),
        'benefit' => __( 'Kaya antioksidan untuk melindungi kulit dari radikal bebas, membantu mencerahkan kulit, dan menyamarkan noda hitam.', 'lumina-skin' ),
      );
      ?>

      <!-- ROW 1: Ceramide (hero) + Niacinamide (side) -->
      <article class="lg:col-span-2 group relative overflow-hidden bg-white border-[#DDD6FE] border rounded-2xl p-6 sm:p-7 flex flex-col">
        <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-emerald-400 to-emerald-500"></div>
        <div class="flex items-start justify-between mb-3">
          <div class="flex items-center gap-3">
            <span class="text-2xl"><?php echo esc_html( $c['icon'] ); ?></span>
            <h3 class="text-[#2E1065] text-xl sm:text-2xl font-playfair font-medium tracking-tight"><?php echo esc_html( $c['name'] ); ?></h3>
          </div>
          <span class="inline-flex items-center gap-1.5 text-xs font-medium text-emerald-700 bg-emerald-50 rounded-full px-3 py-1 ring-1 ring-emerald-200 font-sans whitespace-nowrap shrink-0">
            <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
            Barrier Repair
          </span>
        </div>
        <p class="text-xs text-[#A78BFA] mb-2 font-sans tracking-wide"><?php echo esc_html( $c['found'] ); ?></p>
        <p class="text-sm text-[#4C1D95] mb-5 font-sans leading-relaxed"><?php echo esc_html( $c['benefit'] ); ?></p>
        <div class="grid grid-cols-2 gap-4 mt-auto">
          <div class="relative h-[140px] rounded-xl bg-gradient-to-br from-emerald-50 to-emerald-100 ring-1 ring-emerald-200 overflow-hidden">
            <div class="absolute inset-0 grid grid-cols-6 opacity-10">
              <?php for ( $i = 0; $i < 5; $i++ ) : ?>
              <div class="border-r border-emerald-300"></div>
              <?php endfor; ?>
            </div>
            <div class="absolute left-4 top-4">
              <span class="text-2xl">🧴</span>
            </div>
            <div class="absolute left-4 bottom-4">
              <span class="inline-flex items-center gap-1.5 text-[11px] text-emerald-800 bg-white/80 rounded-full px-3 py-1.5 ring-1 ring-emerald-200 font-sans">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-3.5 h-3.5"><path d="M12 20v2"/><path d="M12 2v2"/><path d="M17 20v2"/><path d="M17 2v2"/><path d="M2 12h2"/><path d="M2 17h2"/><path d="M2 7h2"/><path d="M20 12h2"/><path d="M20 17h2"/><path d="M20 7h2"/><path d="M7 20v2"/><path d="M7 2v2"/><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="8" y="8" width="8" height="8" rx="1"/></svg>
                5&times; Ceramide Complex
              </span>
            </div>
          </div>
          <div class="space-y-2.5">
            <div class="flex items-center justify-between rounded-xl bg-gradient-to-r from-emerald-50 to-emerald-100 ring-1 ring-emerald-200 px-4 py-2.5">
              <div class="flex items-center gap-2.5">
                <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                <span class="text-sm text-emerald-800 font-medium font-sans">Skin Barrier</span>
              </div>
              <span class="text-[11px] text-emerald-600 font-sans font-medium">Reinforced</span>
            </div>
            <div class="flex items-center justify-between rounded-xl bg-gradient-to-r from-blue-50 to-blue-100 ring-1 ring-blue-200 px-4 py-2.5">
              <div class="flex items-center gap-2.5">
                <span class="h-2 w-2 rounded-full bg-blue-500"></span>
                <span class="text-sm text-blue-800 font-medium font-sans">Hydration</span>
              </div>
              <span class="text-[11px] text-blue-600 font-sans font-medium">24h Lock</span>
            </div>
            <div class="flex items-center justify-between rounded-xl bg-gradient-to-r from-purple-50 to-purple-100 ring-1 ring-purple-200 px-4 py-2.5">
              <div class="flex items-center gap-2.5">
                <span class="h-2 w-2 rounded-full bg-purple-500"></span>
                <span class="text-sm text-purple-800 font-medium font-sans">Soothing</span>
              </div>
              <span class="text-[11px] text-purple-600 font-sans font-medium">Active</span>
            </div>
          </div>
        </div>
        <div class="flex items-center gap-3 mt-5">
          <span class="inline-flex items-center gap-1.5 text-[11px] text-neutral-700 bg-neutral-100 rounded-full px-3 py-1 ring-1 ring-neutral-200 font-sans">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-3.5 h-3.5"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>
            Clinical Grade
          </span>
          <span class="inline-flex items-center gap-1.5 text-[11px] text-neutral-700 bg-neutral-100 rounded-full px-3 py-1 ring-1 ring-neutral-200 font-sans">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-3.5 h-3.5"><path d="M12 20v2"/><path d="M12 2v2"/><path d="M17 20v2"/><path d="M17 2v2"/><path d="M2 12h2"/><path d="M2 17h2"/><path d="M2 7h2"/><path d="M20 12h2"/><path d="M20 17h2"/><path d="M20 7h2"/><path d="M7 20v2"/><path d="M7 2v2"/><rect x="4" y="4" width="16" height="16" rx="2"/></svg>
            Vegan Friendly
          </span>
        </div>
      </article>

      <article class="group relative overflow-hidden bg-white border-[#DDD6FE] border rounded-2xl p-6 sm:p-7 flex flex-col">
        <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-purple-400 to-purple-500"></div>
        <div class="flex items-center gap-2.5 mb-3">
          <span class="text-xl"><?php echo esc_html( $n['icon'] ); ?></span>
          <h3 class="text-[#2E1065] text-lg sm:text-xl font-playfair font-medium tracking-tight"><?php echo esc_html( $n['name'] ); ?></h3>
        </div>
        <p class="text-xs text-[#A78BFA] mb-2 font-sans tracking-wide"><?php echo esc_html( $n['found'] ); ?></p>
        <p class="text-sm text-[#4C1D95] mb-4 font-sans leading-relaxed"><?php echo esc_html( $n['benefit'] ); ?></p>
        <div class="rounded-xl bg-gradient-to-br from-purple-50 to-purple-100 ring-1 ring-purple-200 p-4 mt-auto">
          <div class="flex items-center justify-between mb-3">
            <span class="text-xs font-medium text-purple-800 font-sans">Brightening Score</span>
            <span class="text-lg font-semibold text-purple-700 font-sans">96%</span>
          </div>
          <div class="h-2 rounded-full bg-purple-200/60 overflow-hidden">
            <div class="h-full w-[96%] rounded-full bg-gradient-to-r from-purple-400 to-purple-500"></div>
          </div>
          <div class="mt-3 flex items-center gap-2 text-[11px] text-purple-600 font-sans">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-3.5 h-3.5"><path d="M16 7h6v6"/><path d="m22 7-8.5 8.5-5-5L2 17"/></svg>
            <span>89% user melihat perubahan dalam 2 minggu</span>
          </div>
        </div>
        <div class="mt-4 flex items-center gap-2">
          <span class="inline-flex items-center gap-1.5 text-[11px] text-purple-700 bg-purple-50 rounded-full px-2.5 py-1 ring-1 ring-purple-200 font-sans">
            <span class="h-1.5 w-1.5 rounded-full bg-purple-500"></span>
            Brightening
          </span>
        </div>
      </article>

      <!-- ROW 2: Centella + Allantoin + Pomegranate — three across -->
      <article class="group relative overflow-hidden bg-white border-[#DDD6FE] border rounded-2xl p-6 sm:p-7 flex flex-col">
        <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-400 to-blue-500"></div>
        <div class="flex items-center gap-2.5 mb-3">
          <span class="text-xl"><?php echo esc_html( $ce['icon'] ); ?></span>
          <h3 class="text-[#2E1065] text-lg sm:text-xl font-playfair font-medium tracking-tight"><?php echo esc_html( $ce['name'] ); ?></h3>
        </div>
        <p class="text-xs text-[#A78BFA] mb-2 font-sans tracking-wide"><?php echo esc_html( $ce['found'] ); ?></p>
        <p class="text-sm text-[#4C1D95] mb-4 font-sans leading-relaxed"><?php echo esc_html( $ce['benefit'] ); ?></p>
        <div class="space-y-2.5 mt-auto">
          <div class="flex items-center justify-between rounded-xl bg-gradient-to-r from-blue-50 to-blue-100 ring-1 ring-blue-200 px-4 py-2.5">
            <div class="flex items-center gap-2.5">
              <span class="h-2 w-2 rounded-full bg-blue-500"></span>
              <span class="text-sm text-blue-800 font-medium font-sans">Anti-Inflamasi</span>
            </div>
            <span class="text-[11px] text-blue-600 font-sans font-medium">Active</span>
          </div>
          <div class="flex items-center justify-between rounded-xl bg-gradient-to-r from-emerald-50 to-emerald-100 ring-1 ring-emerald-200 px-4 py-2.5">
            <div class="flex items-center gap-2.5">
              <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
              <span class="text-sm text-emerald-800 font-medium font-sans">Penyembuhan</span>
            </div>
            <span class="text-[11px] text-emerald-600 font-sans font-medium">Fast</span>
          </div>
        </div>
        <div class="mt-4 flex items-center gap-2">
          <span class="inline-flex items-center gap-1.5 text-[11px] text-blue-700 bg-blue-50 rounded-full px-2.5 py-1 ring-1 ring-blue-200 font-sans">
            <span class="h-1.5 w-1.5 rounded-full bg-blue-500"></span>
            Soothing
          </span>
        </div>
      </article>

      <article class="group relative overflow-hidden bg-white border-[#DDD6FE] border rounded-2xl p-6 sm:p-7 flex flex-col">
        <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-sky-400 to-sky-500"></div>
        <div class="flex items-center gap-2.5 mb-3">
          <span class="text-xl"><?php echo esc_html( $a['icon'] ); ?></span>
          <h3 class="text-[#2E1065] text-lg sm:text-xl font-playfair font-medium tracking-tight"><?php echo esc_html( $a['name'] ); ?></h3>
        </div>
        <p class="text-xs text-[#A78BFA] mb-2 font-sans tracking-wide"><?php echo esc_html( $a['found'] ); ?></p>
        <p class="text-sm text-[#4C1D95] mb-4 font-sans leading-relaxed"><?php echo esc_html( $a['benefit'] ); ?></p>
        <div class="rounded-xl bg-gradient-to-br from-sky-50 to-sky-100 ring-1 ring-sky-200 p-4 mt-auto">
          <div class="text-center">
            <span class="text-2xl block mb-1">💧</span>
            <span class="text-xs text-sky-700 font-sans font-medium">Humectant Power</span>
            <div class="mt-2 flex items-center justify-center gap-1">
              <span class="h-2 w-6 rounded-full bg-sky-300"></span>
              <span class="h-2 w-8 rounded-full bg-sky-400"></span>
              <span class="h-2 w-12 rounded-full bg-sky-500"></span>
              <span class="h-2 w-8 rounded-full bg-sky-400"></span>
              <span class="h-2 w-6 rounded-full bg-sky-300"></span>
            </div>
          </div>
        </div>
        <div class="mt-4 flex items-center gap-2">
          <span class="inline-flex items-center gap-1.5 text-[11px] text-sky-700 bg-sky-50 rounded-full px-2.5 py-1 ring-1 ring-sky-200 font-sans">
            <span class="h-1.5 w-1.5 rounded-full bg-sky-500"></span>
            Hydration
          </span>
        </div>
      </article>

      <article class="group relative overflow-hidden bg-white border-[#DDD6FE] border rounded-2xl p-6 sm:p-7 flex flex-col">
        <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-rose-400 to-rose-500"></div>
        <div class="flex items-center gap-2.5 mb-3">
          <span class="text-xl"><?php echo esc_html( $p['icon'] ); ?></span>
          <h3 class="text-[#2E1065] text-lg sm:text-xl font-playfair font-medium tracking-tight"><?php echo esc_html( $p['name'] ); ?></h3>
        </div>
        <p class="text-xs text-[#A78BFA] mb-2 font-sans tracking-wide"><?php echo esc_html( $p['found'] ); ?></p>
        <p class="text-sm text-[#4C1D95] mb-4 font-sans leading-relaxed"><?php echo esc_html( $p['benefit'] ); ?></p>
        <div class="rounded-xl bg-gradient-to-br from-rose-50 to-rose-100 ring-1 ring-rose-200 p-4 mt-auto">
          <div class="flex items-center justify-between mb-2">
            <span class="text-xs font-medium text-rose-800 font-sans">Antioxidant Level</span>
            <span class="flex items-center gap-0.5">
              <span class="h-2 w-4 rounded-full bg-rose-400"></span>
              <span class="h-2 w-4 rounded-full bg-rose-500"></span>
              <span class="h-2 w-4 rounded-full bg-rose-500"></span>
              <span class="h-2 w-4 rounded-full bg-rose-500"></span>
              <span class="h-2 w-4 rounded-full bg-rose-300"></span>
            </span>
          </div>
          <p class="text-[11px] text-rose-600 font-sans">Kaya antioksidan alami untuk perlindungan maksimal</p>
        </div>
        <div class="mt-4 flex items-center gap-2">
          <span class="inline-flex items-center gap-1.5 text-[11px] text-rose-700 bg-rose-50 rounded-full px-2.5 py-1 ring-1 ring-rose-200 font-sans">
            <span class="h-1.5 w-1.5 rounded-full bg-rose-500"></span>
            Antioxidant
          </span>
        </div>
      </article>

      <!-- ROW 3: SymWhite 377 (hero) + Trust badge (side) -->
      <article class="lg:col-span-2 group relative overflow-hidden bg-white border-[#DDD6FE] border rounded-2xl p-6 sm:p-7 flex flex-col">
        <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-orange-400 to-amber-500"></div>
        <div class="flex items-start justify-between mb-3">
          <div class="flex items-center gap-3">
            <span class="text-2xl"><?php echo esc_html( $s['icon'] ); ?></span>
            <h3 class="text-[#2E1065] text-xl sm:text-2xl font-playfair font-medium tracking-tight"><?php echo esc_html( $s['name'] ); ?></h3>
          </div>
          <span class="inline-flex items-center gap-1.5 text-xs font-medium text-orange-700 bg-orange-50 rounded-full px-3 py-1 ring-1 ring-orange-200 font-sans whitespace-nowrap shrink-0">
            <span class="h-1.5 w-1.5 rounded-full bg-orange-500"></span>
            Dark Spot
          </span>
        </div>
        <p class="text-xs text-[#A78BFA] mb-2 font-sans tracking-wide"><?php echo esc_html( $s['found'] ); ?></p>
        <p class="text-sm text-[#4C1D95] mb-5 font-sans leading-relaxed"><?php echo esc_html( $s['benefit'] ); ?></p>
        <div class="grid grid-cols-3 gap-4 mt-auto">
          <div class="text-center p-4 rounded-xl bg-gradient-to-br from-orange-50 to-orange-100 ring-1 ring-orange-200">
            <div class="inline-flex items-center justify-center w-9 h-9 bg-orange-500 text-white rounded-full mb-2 mx-auto">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"/><path d="M12 1v2"/><path d="M12 21v2"/><path d="M4.22 4.22l1.42 1.42"/><path d="M18.36 18.36l1.42 1.42"/><path d="M1 12h2"/><path d="M21 12h2"/><path d="M4.22 19.78l1.42-1.42"/><path d="M18.36 5.64l1.42-1.42"/></svg>
            </div>
            <h4 class="font-medium text-orange-800 text-sm font-sans">Brightening</h4>
            <p class="text-xs text-orange-600 font-sans">Melanin inhibitor</p>
          </div>
          <div class="text-center p-4 rounded-xl bg-gradient-to-br from-amber-50 to-amber-100 ring-1 ring-amber-200">
            <div class="inline-flex items-center justify-center w-9 h-9 bg-amber-500 text-white rounded-full mb-2 mx-auto">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20v2"/><path d="M12 2v2"/><path d="M17 20v2"/><path d="M17 2v2"/><path d="M2 12h2"/><path d="M2 17h2"/><path d="M2 7h2"/><path d="M20 12h2"/><path d="M20 17h2"/><path d="M20 7h2"/><path d="M7 20v2"/><path d="M7 2v2"/><rect x="4" y="4" width="16" height="16" rx="2"/></svg>
            </div>
            <h4 class="font-medium text-amber-800 text-sm font-sans">Dark Spot</h4>
            <p class="text-xs text-amber-600 font-sans">Fade treatment</p>
          </div>
          <div class="text-center p-4 rounded-xl bg-gradient-to-br from-yellow-50 to-yellow-100 ring-1 ring-yellow-200">
            <div class="inline-flex items-center justify-center w-9 h-9 bg-yellow-500 text-white rounded-full mb-2 mx-auto">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/></svg>
            </div>
            <h4 class="font-medium text-yellow-800 text-sm font-sans">Safe</h4>
            <p class="text-xs text-yellow-600 font-sans">BPOM approved</p>
          </div>
        </div>
      </article>

      <!-- Trust summary card -->
      <article class="group relative overflow-hidden bg-gradient-to-br from-[#FDF2F8] to-white border-[#DDD6FE] border rounded-2xl p-6 sm:p-7 flex flex-col items-center justify-center text-center">
        <span class="text-3xl mb-3 block">✅</span>
        <h3 class="text-[#2E1065] text-base font-playfair font-medium">6 Premium Ingredients</h3>
        <p class="text-[11px] text-[#6D28D9] mt-1 font-sans leading-relaxed">All BPOM certified &amp; Halal,<br>safe for teens &amp; sensitive skin</p>
        <div class="mt-4 flex flex-wrap gap-2 justify-center">
          <span class="text-[11px] bg-emerald-50 text-emerald-700 rounded-full px-2.5 py-1 ring-1 ring-emerald-200 font-sans">Safe</span>
          <span class="text-[11px] bg-purple-50 text-purple-700 rounded-full px-2.5 py-1 ring-1 ring-purple-200 font-sans">Vegan</span>
          <span class="text-[11px] bg-blue-50 text-blue-700 rounded-full px-2.5 py-1 ring-1 ring-blue-200 font-sans">Dermatologist Approved</span>
        </div>
        <div class="mt-4 w-full max-w-[160px]">
          <div class="h-px bg-gradient-to-r from-transparent via-[#DDD6FE] to-transparent"></div>
          <div class="mt-3 grid grid-cols-2 gap-2 text-[11px] text-[#4C1D95] font-sans">
            <div class="text-center">
              <span class="block text-lg font-semibold text-[#2E1065] font-playfair">100%</span>
              BPOM
            </div>
            <div class="text-center">
              <span class="block text-lg font-semibold text-[#2E1065] font-playfair">100%</span>
              Halal
            </div>
          </div>
        </div>
      </article>

    </div>

    <!-- Skincare Routine Pipeline -->
    <div class="mt-10">
      <p class="text-[11px] sm:text-xs uppercase tracking-[0.2em] text-[#A78BFA] font-sans mb-4">(02) Skincare Routine</p>
      <div class="relative">
        <div class="h-px w-full bg-gradient-to-r from-transparent via-[#DDD6FE] to-transparent"></div>
        <div class="mt-6 grid grid-cols-4 text-[11px] text-[#6D28D9] font-sans">
          <div class="flex items-center gap-2">
            <span class="h-1.5 w-1.5 rounded-full bg-[#8B5CF6]"></span>
            CLEANSE
          </div>
          <div class="flex items-center gap-2">
            <span class="h-1.5 w-1.5 rounded-full bg-[#F472B6]"></span>
            TREAT
          </div>
          <div class="flex items-center gap-2">
            <span class="h-1.5 w-1.5 rounded-full bg-[#8B5CF6]"></span>
            MOISTURIZE
          </div>
          <div class="flex items-center gap-2">
            <span class="h-1.5 w-1.5 rounded-full bg-[#F472B6]"></span>
            PROTECT
          </div>
        </div>
      </div>
    </div>

    <!-- CTA Section -->
    <div class="mt-10 rounded-2xl bg-gradient-to-br from-[#2E1065] to-[#4C1D95] px-6 py-8 sm:px-8 sm:py-10 text-center relative overflow-hidden">
      <div class="pointer-events-none absolute -top-20 -right-20 h-40 w-40 rounded-full bg-[#F472B6]/10 blur-3xl" aria-hidden="true"></div>
      <div class="pointer-events-none absolute -bottom-20 -left-20 h-40 w-40 rounded-full bg-[#8B5CF6]/10 blur-3xl" aria-hidden="true"></div>
      <div class="relative">
        <span class="inline-flex items-center gap-1.5 text-[11px] text-[#DDD6FE] bg-white/10 rounded-full px-3 py-1 ring-1 ring-white/20 font-sans mb-4">
          <span class="h-1.5 w-1.5 rounded-full bg-emerald-400"></span>
          BPOM Certified &amp; Halal
        </span>
        <h2 class="font-playfair text-2xl sm:text-3xl font-semibold tracking-tight text-white"><?php esc_html_e( '100% Aman & Terpercaya', 'lumina-skin' ); ?></h2>
        <p class="mt-3 text-sm text-[#DDD6FE] max-w-lg mx-auto font-sans leading-relaxed"><?php esc_html_e( 'Semua produk Glad2Glow sudah terdaftar BPOM dan bersertifikat Halal. Aman dipakai untuk remaja dan kulit sensitif.', 'lumina-skin' ); ?></p>
        <a href="<?php echo esc_url( lumina_page_url( 'produk' ) ); ?>" class="mt-6 inline-flex items-center gap-2 rounded-full bg-[#8B5CF6] text-white px-6 py-2.5 text-sm font-medium hover:bg-[#7C3AED] transition-colors no-underline shadow-lg shadow-[#8B5CF6]/25">
          <span><?php esc_html_e( 'Lihat Produk', 'lumina-skin' ); ?></span>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
        </a>
      </div>
    </div>

  </div>
</section>

<?php
get_footer();
