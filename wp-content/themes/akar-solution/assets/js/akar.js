(function(){
  // Sticky nav: hide on scroll down, show on scroll up
  var nav = document.getElementById('akNav');
  if (nav) {
    var lastY = 0;
    window.addEventListener('scroll', function() {
      var y = window.scrollY;
      if (y > lastY && y > 120) nav.classList.add('hidden');
      else nav.classList.remove('hidden');
      lastY = y;
    }, { passive: true });
  }
  // Scroll reveal with safety fallback
  // (Cards at the bottom of long pages were never entering the viewport in
  //  automated screenshots and were stuck at opacity:0. The 2.5s fallback
  //  guarantees everything is eventually revealed even if the observer misses.)
  var revealEls = document.querySelectorAll('[data-reveal]');
  if (revealEls.length) {
    var safetyTimer = setTimeout(function() {
      revealEls.forEach(function(el) { el.classList.add('visible'); });
    }, 2500);
    if ('IntersectionObserver' in window) {
      var observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(e) {
          if (e.isIntersecting) {
            e.target.classList.add('visible');
            observer.unobserve(e.target);
          }
        });
      }, { threshold: 0.08, rootMargin: '0px 0px -8% 0px' });
      revealEls.forEach(function(el) { observer.observe(el); });
    } else {
      revealEls.forEach(function(el) { el.classList.add('visible'); });
    }
  }

  // Hand-drawn underline — draws when the keyword scrolls into view
  var drawEls = document.querySelectorAll('[data-draw]');
  if (drawEls.length) {
    setTimeout(function() {
      drawEls.forEach(function(el) { el.classList.add('drawn'); });
    }, 2500);
    if ('IntersectionObserver' in window) {
      var drawObserver = new IntersectionObserver(function(entries) {
        entries.forEach(function(e) {
          if (e.isIntersecting) {
            e.target.classList.add('drawn');
            drawObserver.unobserve(e.target);
          }
        });
      }, { threshold: 0.5, rootMargin: '0px 0px -10% 0px' });
      drawEls.forEach(function(el) { drawObserver.observe(el); });
    } else {
      drawEls.forEach(function(el) { el.classList.add('drawn'); });
    }
  }
  // Staggered card reveal — children of [data-stagger] fade-in left→right
  // with 120ms per-child delay. Replaces parallax tilt on dense service-card
  // grids where 3D rotateX fought the 1px-gap structure.
  var staggerEls = document.querySelectorAll('[data-stagger]');
  if (staggerEls.length) {
    setTimeout(function() {
      staggerEls.forEach(function(el) { el.classList.add('visible'); });
    }, 2500);
    if ('IntersectionObserver' in window) {
      var staggerObserver = new IntersectionObserver(function(entries) {
        entries.forEach(function(e) {
          if (e.isIntersecting) {
            e.target.classList.add('visible');
            staggerObserver.unobserve(e.target);
          }
        });
      }, { threshold: 0.08, rootMargin: '0px 0px -8% 0px' });
      staggerEls.forEach(function(el) { staggerObserver.observe(el); });
    } else {
      staggerEls.forEach(function(el) { el.classList.add('visible'); });
    }
  }

  // Per-letter H3 animation — wraps each char in <span class="ak-letter">
  // with --i custom property for staggered fade+slide+blur.
  var splitEls = document.querySelectorAll('[data-split]');
  if (splitEls.length) {
    function splitText(el) {
      if (el.dataset.splitDone === '1') return;
      var html = el.innerHTML;
      var out = '';
      var i = 0;
      // Walk text nodes only — preserve child tags (e.g. <em>) by skipping
      // innerHTML regex re-render. Simpler: replace each text chunk char-by-char
      // and leave HTML tags intact.
      var parts = html.split(/(<[^>]+>)/g);
      for (var p = 0; p < parts.length; p++) {
        var part = parts[p];
        if (!part) continue;
        if (part.charAt(0) === '<') {
          out += part; // HTML tag — keep as-is
        } else {
          for (var c = 0; c < part.length; c++) {
            var ch = part.charAt(c);
            if (ch === ' ') {
              out += ' '; // preserve space
            } else {
              out += '<span class="ak-letter" style="--i:' + i + '">' + ch + '</span>';
              i++;
            }
          }
        }
      }
      el.innerHTML = out;
      el.dataset.splitDone = '1';
    }
    // Split text on all eligible elements up-front
    splitEls.forEach(splitText);
    // Safety fallback — if observer never fires, mark done after 2.5s
    setTimeout(function() {
      splitEls.forEach(function(el) { el.classList.add('split-done'); });
    }, 2500);
    if ('IntersectionObserver' in window) {
      var splitObserver = new IntersectionObserver(function(entries) {
        entries.forEach(function(e) {
          if (e.isIntersecting) {
            e.target.classList.add('split-done');
            splitObserver.unobserve(e.target);
          }
        });
      }, { threshold: 0.15, rootMargin: '0px 0px -8% 0px' });
      splitEls.forEach(function(el) { splitObserver.observe(el); });
    } else {
      splitEls.forEach(function(el) { el.classList.add('split-done'); });
    }
  }

  // Parallax Tilt Grid — independent scroll speeds per column + 3D rotateX
  // Disabled on mobile (CSS) and prefers-reduced-motion.
  var motionOk = !window.matchMedia || !window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var isMobile = window.matchMedia && window.matchMedia('(max-width: 768px)').matches;
  if (motionOk && !isMobile) {
    var parallaxGrids = document.querySelectorAll('[data-parallax]');
    if (parallaxGrids.length) {
      var ticking = false;
      function updateParallax() {
        parallaxGrids.forEach(function(grid) {
          var speeds = (grid.dataset.parallax || '1.2,1.0,1.4').split(',').map(parseFloat);
          var cols = grid.children;
          var rect = grid.getBoundingClientRect();
          var vh = window.innerHeight;
          // Progress: -1 (above viewport) → 0 (centered) → +1 (below)
          var center = rect.top + rect.height / 2;
          var progress = (center - vh / 2) / vh;
          // Subtle rotateX: tilt back at top, tilt forward at bottom
          var rotX = progress * 4; // -4deg to +4deg
          for (var i = 0; i < cols.length && i < speeds.length; i++) {
            var speed = speeds[i];
            var col = cols[i];
            // Speed 1.0 = no extra translate; >1 = more; <1 = less
            var offset = (1 - speed) * rect.height * progress;
            col.style.transform = 'translateY(' + offset.toFixed(2) + 'px) rotateX(' + rotX.toFixed(2) + 'deg)';
          }
        });
        ticking = false;
      }
      function onScroll() {
        if (!ticking) {
          window.requestAnimationFrame(updateParallax);
          ticking = true;
        }
      }
      window.addEventListener('scroll', onScroll, { passive: true });
      window.addEventListener('resize', onScroll, { passive: true });
      updateParallax(); // initial position
    }
  }
})();
