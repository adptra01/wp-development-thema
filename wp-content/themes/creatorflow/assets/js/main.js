(function () {
  'use strict';

  var isReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  if (isReduced || typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
    document.body.classList.add('motion-reduce');
    return;
  }

  gsap.registerPlugin(ScrollTrigger);

  /* ─── Helper ────────────────────────────────────── */

  function revealOnScroll(selector, triggerEl, fromVars, extra) {
    extra = extra || {};
    ScrollTrigger.create({
      trigger: triggerEl,
      start: extra.start || 'top 80%',
      once: true,
      onEnter: function () {
        gsap.fromTo(selector, fromVars, {
          autoAlpha: 1,
          y: 0,
          x: 0,
          duration: extra.duration || 0.7,
          ease: extra.ease || 'power2.out',
          stagger: extra.stagger || 0,
          clearProps: 'transform',
        });
      },
    });
  }

  /* ─── Word-Split Reveal ─────────────────────────── */

  function initWordReveal() {
    document.querySelectorAll('.reveal').forEach(function (el) {
      var words = el.textContent.trim().split(/\s+/);
      if (words.length < 1) return;
      el.innerHTML = words.map(function (w) {
        return '<span class="reveal-word"><span style="display:inline-block;transform:translateY(110%)">' + w + '</span></span>';
      }).join(' ');
      var spans = el.querySelectorAll('.reveal-word > span');
      ScrollTrigger.create({
        trigger: el,
        start: 'top 85%',
        once: true,
        onEnter: function () {
          gsap.to(spans, { y: 0, duration: 1.2, stagger: 0.04, ease: 'power4.out' });
        },
      });
    });
  }

  /* ─── Hero Entrance ────────────────────────────── */

  function initHeroEntrance() {
    var tl = gsap.timeline({ defaults: { autoAlpha: 0, y: 24, duration: 0.8, ease: 'power2.out' } });
    tl.from('.hero-subtitle', {})
      .from('#hero-cta a', { stagger: 0.1 }, '-=0.3')
      .from('.stat-item', { y: 20, stagger: 0.08 }, '-=0.2');
  }

  /* ─── Section Scroll Reveals ───────────────────── */

  function initScrollReveals() {
    revealOnScroll('.logo-item', '#logos', { autoAlpha: 0, y: 16 }, { stagger: 0.1, duration: 0.5 });

    revealOnScroll('.step-card', '#how', { autoAlpha: 0, y: 40 }, { stagger: 0.15 });

    revealOnScroll('.category-card', '#categories', { autoAlpha: 0, y: 40 }, { stagger: 0.08 });

    revealOnScroll('.profile-image', '#profile', { autoAlpha: 0, x: -60 }, { duration: 0.8 });
    revealOnScroll('.profile-content', '#profile', { autoAlpha: 0, x: 60 }, { duration: 0.8 });

    revealOnScroll('.testimonial-card', '#testimonials', { autoAlpha: 0, y: 40 }, { stagger: 0.12 });

    revealOnScroll('.cta-content > *', '#mentor-cta', { autoAlpha: 0, y: 30 }, { stagger: 0.1, start: 'top 85%' });

    revealOnScroll('.faq-item', '#faq', { autoAlpha: 0, y: 20 }, { stagger: 0.08, duration: 0.5, start: 'top 85%' });
  }

  /* ─── Mobile Menu ──────────────────────────────── */

  function initMobileMenu() {
    var toggle = document.getElementById('menu-toggle');
    var menu = document.getElementById('mobile-menu');
    var icon = toggle && toggle.querySelector('iconify-icon');
    if (!toggle || !menu) return;

    function closeMenu() {
      if (menu.classList.contains('hidden')) return;
      toggle.setAttribute('aria-expanded', 'false');
      gsap.to(menu, {
        autoAlpha: 0, y: -8, duration: 0.2, ease: 'power2.in',
        onComplete: function () { menu.classList.add('hidden'); },
      });
      if (icon) gsap.to(icon, { rotate: 0, duration: 0.25, ease: 'power2.inOut' });
    }

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') closeMenu();
    });

    document.addEventListener('click', function (e) {
      if (!menu.classList.contains('hidden') && !toggle.contains(e.target) && !menu.contains(e.target)) {
        closeMenu();
      }
    });

    toggle.addEventListener('click', function () {
      var isOpen = !menu.classList.contains('hidden');

      if (isOpen) {
        closeMenu();
      } else {
        toggle.setAttribute('aria-expanded', 'true');
        gsap.set(menu, { autoAlpha: 0, y: -8 });
        menu.classList.remove('hidden');
        gsap.to(menu, { autoAlpha: 1, y: 0, duration: 0.25, ease: 'power2.out' });
        if (icon) gsap.to(icon, { rotate: 90, duration: 0.25, ease: 'power2.inOut' });
      }
    });
  }

  /* ─── Smooth Anchor Scroll ─────────────────────── */

  function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
      anchor.addEventListener('click', function (e) {
        var href = anchor.getAttribute('href');
        if (!href || href === '#') return;
        var target = document.querySelector(href);
        if (!target) return;
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      });
    });
  }

  /* ─── FAQ Smooth Toggle ────────────────────────── */

  function initFaqToggle() {
    document.querySelectorAll('.faq-item').forEach(function (detail) {
      detail.addEventListener('toggle', function () {
        var content = detail.querySelector('p');
        if (!content) return;
        if (detail.open) {
          gsap.fromTo(content, { autoAlpha: 0, y: -8 }, { autoAlpha: 1, y: 0, duration: 0.3, ease: 'power2.out' });
        }
      });
    });
  }

  /* ─── Mentor Filter ────────────────────────────── */

  function initMentorFilter() {
    var grid = document.getElementById('mentor-grid');
    var filters = document.getElementById('mentor-filters');
    if (!grid || !filters) return;

    var cards = grid.querySelectorAll('.mentor-card');

    filters.addEventListener('click', function (e) {
      var btn = e.target.closest('.mentor-filter');
      if (!btn) return;

      filters.querySelectorAll('.mentor-filter').forEach(function (b) {
        b.className = b.className.replace(/bg-brand-dark text-white border-brand-dark hover:text-white/g, 'bg-white text-brand-dark/70 border-brand-dark/10 hover:text-brand-pink');
      });
      btn.className = btn.className.replace(/bg-white text-brand-dark\/70 border-brand-dark\/10 hover:text-brand-pink/g, 'bg-brand-dark text-white border-brand-dark hover:text-white');

      var filter = btn.getAttribute('data-filter');

      cards.forEach(function (card) {
        var cat = card.getAttribute('data-category');
        if (filter === 'all' || cat === filter) {
          card.classList.remove('hidden');
          gsap.fromTo(card, { autoAlpha: 0, y: 16 }, { autoAlpha: 1, y: 0, duration: 0.4, ease: 'power2.out' });
        } else {
          card.classList.add('hidden');
        }
      });
    });
  }

  /* ─── Init ─────────────────────────────────────── */

  document.addEventListener('DOMContentLoaded', function () {
    initHeroEntrance();
    initWordReveal();
    initScrollReveals();
    initMobileMenu();
    initSmoothScroll();
    initFaqToggle();
    initMentorFilter();
  });

})();
