<?php
/**
 * Template Name: Review
 */

get_header();
?>

<div class="min-h-screen bg-[#0A0A0A] text-white" style="font-family:Inter,ui-sans-serif,system-ui,sans-serif">
  <div class="sm:px-6 lg:px-8 max-w-7xl mx-auto px-4 py-14 lg:py-20">
    <div class="mb-12">
      <span class="text-sm font-medium tracking-[0.18em] uppercase text-rose-400">Testimonials</span>
      <h1 class="mt-3 text-3xl sm:text-4xl md:text-5xl font-semibold tracking-tight font-playfair text-white">
        Kata Mereka Yang Udah <span class="text-[#A78BFA]">Glowing</span>
      </h1>
      <div class="mt-5 inline-flex items-center gap-2 rounded-full border px-4 py-2 border-white/10 bg-white/5">
        <span class="inline-flex items-center -space-x-2">
          <img class="h-6 w-6 rounded-full ring-2 object-cover ring-[#0A0A0A]" src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?q=80&w=256&auto=format&fit=crop" alt="Reviewer">
          <img class="h-6 w-6 rounded-full ring-2 object-cover ring-[#0A0A0A]" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=256&auto=format&fit=crop" alt="Reviewer">
          <img class="h-6 w-6 rounded-full ring-2 object-cover ring-[#0A0A0A]" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?q=80&w=256&auto=format&fit=crop" alt="Reviewer">
          <img class="h-6 w-6 rounded-full ring-2 object-cover ring-[#0A0A0A]" src="https://images.unsplash.com/photo-1464863979621-258859e62245?q=80&w=256&auto=format&fit=crop" alt="Reviewer">
        </span>
        <span class="ml-2 inline-flex items-center gap-1 text-sm text-neutral-300">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-[#F472B6]" style="fill:#F472B6"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-[#F472B6]" style="fill:#F472B6"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-[#F472B6]" style="fill:#F472B6"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-[#F472B6]" style="fill:#F472B6"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-[#F472B6]" style="fill:#F472B6"><path d="M12 17.8 5.8 21 7 14.1 2 9.3l7-1L12 2"></path></svg>
          <span class="ml-1">4.9/5 &bull; 2,431+ review</span>
        </span>
      </div>
    </div>

    <style>
      @keyframes scrollUp {
        0% { transform: translateY(0); }
        100% { transform: translateY(-33.33%); }
      }
      @keyframes scrollDown {
        0% { transform: translateY(-33.33%); }
        100% { transform: translateY(0); }
      }
      [data-scroll-column="1"] { animation: scrollUp 20s linear infinite; }
      [data-scroll-column="2"] { animation: scrollDown 20s linear infinite; }
      [data-scroll-column="3"] { animation: scrollUp 20s linear infinite; }
      [data-scroll-column]:hover { animation-play-state: paused; }
    </style>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 py-12"
      style="mask-image:linear-gradient(180deg,transparent,#000 20%,#000 80%,transparent);-webkit-mask-image:linear-gradient(180deg,transparent,#000 20%,#000 80%,transparent)">
  
      <!-- Column 1 — Scroll Up -->
      <div class="overflow-hidden">
        <div data-scroll-column="1" class="space-y-6">
          <article class="rounded-2xl border p-6 border-white/10 bg-white/[0.04] backdrop-blur-sm">
            <blockquote class="text-[15px] sm:text-[16px] leading-relaxed text-neutral-100">
              <span class="inline-flex items-start gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-rose-400 mt-1 shrink-0"><path d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path><path d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path></svg>
                <span>"Baru 2 minggu pake <strong class="text-[#A78BFA]">Blueberry Ceramide</strong>, kulit aku jadi lebih kenyal dan lembap. Jerawat mulai berkurang, gak perih lagi pas pake skincare lain. Recommended banget buat kulit sensitif!"</span>
              </span>
            </blockquote>
            <div class="mt-5 flex items-center gap-3">
              <img class="h-10 w-10 rounded-full object-cover ring-2 ring-white/10" src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?q=80&w=256&auto=format&fit=crop" alt="Sari">
              <div>
                <div class="text-sm font-medium text-white">Sari</div>
                <div class="text-xs text-neutral-400">Mahasiswi, 19</div>
              </div>
            </div>
          </article>

          <article class="rounded-2xl border p-6 border-white/10 bg-white/[0.04] backdrop-blur-sm">
            <blockquote class="text-[15px] sm:text-[16px] leading-relaxed text-neutral-100">
              <span class="inline-flex items-start gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-rose-400 mt-1 shrink-0"><path d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path><path d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path></svg>
                <span>"Aku pake <strong class="text-[#A78BFA]">Centella Allantoin Soothing Gel</strong> tiap malem, jerawat meradang langsung adem! Teksturnya ringan, gak lengket, wanginya fresh. Cocok buat kulit berminyak yang suka breakout."</span>
              </span>
            </blockquote>
            <div class="mt-5 flex items-center gap-3">
              <img class="h-10 w-10 rounded-full object-cover ring-2 ring-white/10" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=256&auto=format&fit=crop" alt="Dinda">
              <div>
                <div class="text-sm font-medium text-white">Dinda</div>
                <div class="text-xs text-neutral-400">Content Creator, 21</div>
              </div>
            </div>
          </article>

          <article class="rounded-2xl border p-6 border-white/10 bg-white/[0.04] backdrop-blur-sm">
            <blockquote class="text-[15px] sm:text-[16px] leading-relaxed text-neutral-100">
              <span class="inline-flex items-start gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-rose-400 mt-1 shrink-0"><path d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path><path d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path></svg>
                <span>"Dari pemakaian pertama udah kerasa bedanya. <strong class="text-[#A78BFA]">Pomegranate Niacinamide</strong> bikin wajah aku lebih cerah dan bekas jerawat mulai pudar. Harganya worth banget buat pelajar kayak aku!"</span>
              </span>
            </blockquote>
            <div class="mt-5 flex items-center gap-3">
              <img class="h-10 w-10 rounded-full object-cover ring-2 ring-white/10" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=256&auto=format&fit=crop" alt="Alya">
              <div>
                <div class="text-sm font-medium text-white">Alya</div>
                <div class="text-xs text-neutral-400">SMA, 17</div>
              </div>
            </div>
          </article>

          <article class="rounded-2xl border p-6 border-white/10 bg-white/[0.04] backdrop-blur-sm">
            <blockquote class="text-[15px] sm:text-[16px] leading-relaxed text-neutral-100">
              <span class="inline-flex items-start gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-rose-400 mt-1 shrink-0"><path d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path><path d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path></svg>
                <span>"Baru 2 minggu pake <strong class="text-[#A78BFA]">Blueberry Ceramide</strong>, kulit aku jadi lebih kenyal dan lembap. Jerawat mulai berkurang, gak perih lagi pas pake skincare lain. Recommended banget buat kulit sensitif!"</span>
              </span>
            </blockquote>
            <div class="mt-5 flex items-center gap-3">
              <img class="h-10 w-10 rounded-full object-cover ring-2 ring-white/10" src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?q=80&w=256&auto=format&fit=crop" alt="Sari">
              <div>
                <div class="text-sm font-medium text-white">Sari</div>
                <div class="text-xs text-neutral-400">Mahasiswi, 19</div>
              </div>
            </div>
          </article>
        </div>
      </div>

      <!-- Column 2 — Scroll Down -->
      <div class="overflow-hidden">
        <div data-scroll-column="2" class="space-y-6">
          <article class="rounded-2xl border p-6 border-white/10 bg-white/[0.04] backdrop-blur-sm">
            <blockquote class="text-[15px] sm:text-[16px] leading-relaxed text-neutral-100">
              <span class="inline-flex items-start gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-rose-400 mt-1 shrink-0"><path d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path><path d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path></svg>
                <span>"Wajahku termasuk kombinasi berminyak, susah banget cari moisturizer yang cocok. Tapi <strong class="text-[#A78BFA]">Centella Allantoin</strong> ini ringan banget, gak bikin muka tambah kilap. Udah repurchase 3 kali!"</span>
              </span>
            </blockquote>
            <div class="mt-5 flex items-center gap-3">
              <img class="h-10 w-10 rounded-full object-cover ring-2 ring-white/10" src="https://images.unsplash.com/photo-1489424731084-a5d8b219a5bb?q=80&w=256&auto=format&fit=crop" alt="Rara">
              <div>
                <div class="text-sm font-medium text-white">Rara</div>
                <div class="text-xs text-neutral-400">Karyawan, 23</div>
              </div>
            </div>
          </article>

          <article class="rounded-2xl border p-6 border-white/10 bg-white/[0.04] backdrop-blur-sm">
            <blockquote class="text-[15px] sm:text-[16px] leading-relaxed text-neutral-100">
              <span class="inline-flex items-start gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-rose-400 mt-1 shrink-0"><path d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path><path d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path></svg>
                <span>"Aku punya flek hitam bekas jerawat yang susah banget ilang. Setelah 1 bulan rutin pake <strong class="text-[#A78BFA]">Yuja Symwhite 377</strong>, fleknya mulai memudar! Kulit jadi lebih rata dan cerah."</span>
              </span>
            </blockquote>
            <div class="mt-5 flex items-center gap-3">
              <img class="h-10 w-10 rounded-full object-cover ring-2 ring-white/10" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?q=80&w=256&auto=format&fit=crop" alt="Mega">
              <div>
                <div class="text-sm font-medium text-white">Mega</div>
                <div class="text-xs text-neutral-400">Mahasiswi, 20</div>
              </div>
            </div>
          </article>

          <article class="rounded-2xl border p-6 border-white/10 bg-white/[0.04] backdrop-blur-sm">
            <blockquote class="text-[15px] sm:text-[16px] leading-relaxed text-neutral-100">
              <span class="inline-flex items-start gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-rose-400 mt-1 shrink-0"><path d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path><path d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path></svg>
                <span>"Udah nyobain banyak serum brightening, tapi <strong class="text-[#A78BFA]">Pomegranate Niacinamide</strong> ini yang bener-bener keliatan hasilnya. Kulitku jadi glowing alami, gak kusam lagi. Harga terjangkau banget!"</span>
              </span>
            </blockquote>
            <div class="mt-5 flex items-center gap-3">
              <img class="h-10 w-10 rounded-full object-cover ring-2 ring-white/10" src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=256&auto=format&fit=crop" alt="Fika">
              <div>
                <div class="text-sm font-medium text-white">Fika</div>
                <div class="text-xs text-neutral-400">Freelancer, 24</div>
              </div>
            </div>
          </article>

          <article class="rounded-2xl border p-6 border-white/10 bg-white/[0.04] backdrop-blur-sm">
            <blockquote class="text-[15px] sm:text-[16px] leading-relaxed text-neutral-100">
              <span class="inline-flex items-start gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-rose-400 mt-1 shrink-0"><path d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path><path d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path></svg>
                <span>"Wajahku termasuk kombinasi berminyak, susah banget cari moisturizer yang cocok. Tapi <strong class="text-[#A78BFA]">Centella Allantoin</strong> ini ringan banget, gak bikin muka tambah kilap. Udah repurchase 3 kali!"</span>
              </span>
            </blockquote>
            <div class="mt-5 flex items-center gap-3">
              <img class="h-10 w-10 rounded-full object-cover ring-2 ring-white/10" src="https://images.unsplash.com/photo-1489424731084-a5d8b219a5bb?q=80&w=256&auto=format&fit=crop" alt="Rara">
              <div>
                <div class="text-sm font-medium text-white">Rara</div>
                <div class="text-xs text-neutral-400">Karyawan, 23</div>
              </div>
            </div>
          </article>
        </div>
      </div>

      <!-- Column 3 — Scroll Up -->
      <div class="overflow-hidden">
        <div data-scroll-column="3" class="space-y-6">
          <article class="rounded-2xl border p-6 border-white/10 bg-white/[0.04] backdrop-blur-sm">
            <blockquote class="text-[15px] sm:text-[16px] leading-relaxed text-neutral-100">
              <span class="inline-flex items-start gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-rose-400 mt-1 shrink-0"><path d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path><path d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path></svg>
                <span>"Aku baru pertama kali pake skincare dan milih <strong class="text-[#A78BFA]">Glad2Glow</strong> karena reviewnya bagus. Gak nyesel! Kulit wajah yang tadinya kusam jadi lebih cerah dan lembap. Produk pertama yang bikin aku konsisten skincarean."</span>
              </span>
            </blockquote>
            <div class="mt-5 flex items-center gap-3">
              <img class="h-10 w-10 rounded-full object-cover ring-2 ring-white/10" src="https://images.unsplash.com/photo-1464863979621-258859e62245?q=80&w=256&auto=format&fit=crop" alt="Nadia">
              <div>
                <div class="text-sm font-medium text-white">Nadia</div>
                <div class="text-xs text-neutral-400">Pelajar, 16</div>
              </div>
            </div>
          </article>

          <article class="rounded-2xl border p-6 border-white/10 bg-white/[0.04] backdrop-blur-sm">
            <blockquote class="text-[15px] sm:text-[16px] leading-relaxed text-neutral-100">
              <span class="inline-flex items-start gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-rose-400 mt-1 shrink-0"><path d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path><path d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path></svg>
                <span>"Aku pake <strong class="text-[#A78BFA]">Blueberry Ceramide</strong> buat night routine, paginya pake Pomegranate Niacinamide. Kombinasi ini beneran bikin kulit glowing merata! Temen-temen pada nanyo pake skincare apa."</span>
              </span>
            </blockquote>
            <div class="mt-5 flex items-center gap-3">
              <img class="h-10 w-10 rounded-full object-cover ring-2 ring-white/10" src="https://images.unsplash.com/photo-1554151228-14d9def656e4?q=80&w=256&auto=format&fit=crop" alt="Cindy">
              <div>
                <div class="text-sm font-medium text-white">Cindy</div>
                <div class="text-xs text-neutral-400">Mahasiswi, 20</div>
              </div>
            </div>
          </article>

          <article class="rounded-2xl border p-6 border-white/10 bg-white/[0.04] backdrop-blur-sm">
            <blockquote class="text-[15px] sm:text-[16px] leading-relaxed text-neutral-100">
              <span class="inline-flex items-start gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-rose-400 mt-1 shrink-0"><path d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path><path d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path></svg>
                <span>"Pengiriman cepat, packaging lucu, dan produknya original. Udah jadi langganan tetap <strong class="text-[#A78BFA]">Glad2Glow</strong> sejak 3 bulan lalu. Gak ada niat ganti ke brand lain! Pokoknya Glad2Glow bestie skincare para remaja."</span>
              </span>
            </blockquote>
            <div class="mt-5 flex items-center gap-3">
              <img class="h-10 w-10 rounded-full object-cover ring-2 ring-white/10" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=256&auto=format&fit=crop" alt="Tasya">
              <div>
                <div class="text-sm font-medium text-white">Tasya</div>
                <div class="text-xs text-neutral-400">SMA, 18</div>
              </div>
            </div>
          </article>

          <article class="rounded-2xl border p-6 border-white/10 bg-white/[0.04] backdrop-blur-sm">
            <blockquote class="text-[15px] sm:text-[16px] leading-relaxed text-neutral-100">
              <span class="inline-flex items-start gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-rose-400 mt-1 shrink-0"><path d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path><path d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path></svg>
                <span>"Aku baru pertama kali pake skincare dan milih <strong class="text-[#A78BFA]">Glad2Glow</strong> karena reviewnya bagus. Gak nyesel! Kulit wajah yang tadinya kusam jadi lebih cerah dan lembap. Produk pertama yang bikin aku konsisten skincarean."</span>
              </span>
            </blockquote>
            <div class="mt-5 flex items-center gap-3">
              <img class="h-10 w-10 rounded-full object-cover ring-2 ring-white/10" src="https://images.unsplash.com/photo-1464863979621-258859e62245?q=80&w=256&auto=format&fit=crop" alt="Nadia">
              <div>
                <div class="text-sm font-medium text-white">Nadia</div>
                <div class="text-xs text-neutral-400">Pelajar, 16</div>
              </div>
            </div>
          </article>
        </div>
      </div>

    </div>
  </div>
</div>

<?php
get_footer();
