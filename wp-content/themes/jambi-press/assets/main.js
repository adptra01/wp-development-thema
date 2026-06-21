(function() {
  "use strict";

  // Dark mode toggle
  var darkToggle = document.getElementById("jp-dark-toggle");
  var htmlEl = document.documentElement;
  if (darkToggle) {
    darkToggle.addEventListener("click", function() {
      var dark = htmlEl.classList.toggle("jp-dark-mode");
      localStorage.setItem("jp-theme", dark ? "dark" : "light");
    });
  }

  // Search toggle
  var toggle = document.getElementById("jp-search-toggle");
  var overlay = document.getElementById("jp-search-overlay");
  if (toggle && overlay) {
    toggle.addEventListener("click", function() {
      var hidden = overlay.style.display === "block";
      overlay.style.display = hidden ? "none" : "block";
      if (!hidden) {
        var inp = overlay.querySelector("input[type='search']");
        if (inp) inp.focus();
      }
    });
    document.addEventListener("keydown", function(e) {
      if (e.key === "Escape" && overlay.style.display === "block") {
        overlay.style.display = "none";
      }
    });
  }

  // Mobile menu toggle
  var mToggle = document.getElementById("jp-mobile-toggle");
  var mMenu   = document.getElementById("jp-mobile-menu");
  if (mToggle && mMenu) {
    mToggle.addEventListener("click", function() {
      var hidden = mMenu.style.display === "block";
      mMenu.style.display = hidden ? "none" : "block";
    });
  }

  // GSAP (progressive enhancement)
  var gsapWin = typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined";
  if (gsapWin) {
    gsap.registerPlugin(ScrollTrigger);
    var reduce = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
    if (!reduce) {
      // Scroll reveal
      gsap.utils.toArray(".jp-media, section").forEach(function(el) {
        gsap.fromTo(el, { opacity: 0, y: 24 }, {
          opacity: 1, y: 0, duration: .7, ease: "power2.out",
          scrollTrigger: { trigger: el, start: "top 88%", once: true }
        });
      });
      // Ticker entrance
      var ticker = document.querySelector(".jp-ticker");
      if (ticker) gsap.fromTo(ticker, { opacity: 0, x: 40 }, { opacity: 1, x: 0, duration: .8, ease: "power2.out", delay: .2 });
      // Bento card stagger
      var articles = document.querySelectorAll(".jp-grid-bento article");
      if (articles.length) gsap.fromTo(articles, { opacity: 0, y: 20 }, {
        opacity: 1, y: 0, duration: .5, stagger: .06, ease: "power2.out",
        scrollTrigger: { trigger: articles[0], start: "top 85%", once: true }
      });
    }
  }
})();
