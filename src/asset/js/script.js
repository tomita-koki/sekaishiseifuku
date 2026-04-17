(() => {
  // _dev/js/modules/hamburger.js
  var hamburger = document.querySelector(".hamburger");
  var header = document.querySelector(".js-header");
  var background = document.querySelector(".header__background");
  var nav = document.querySelector("#header-nav");
  var navLinks = document.querySelectorAll(".header__nav-link");
  var openMenu = () => {
    hamburger.classList.add("active");
    header.classList.add("active");
    background.classList.add("active");
    hamburger.setAttribute("aria-expanded", "true");
    hamburger.setAttribute("aria-label", "\u30E1\u30CB\u30E5\u30FC\u3092\u9589\u3058\u308B");
    document.body.style.overflow = "hidden";
    const firstLink = nav?.querySelector("a, button");
    firstLink?.focus();
  };
  var closeMenu = () => {
    hamburger.classList.remove("active");
    header.classList.remove("active");
    background.classList.remove("active");
    hamburger.setAttribute("aria-expanded", "false");
    hamburger.setAttribute("aria-label", "\u30E1\u30CB\u30E5\u30FC\u3092\u958B\u304F");
    document.body.style.overflow = "";
  };
  if (hamburger && header && background) {
    hamburger.addEventListener("click", () => {
      if (hamburger.classList.contains("active")) {
        closeMenu();
        hamburger.focus();
      } else {
        openMenu();
      }
    });
    background.addEventListener("click", closeMenu);
    navLinks.forEach((link) => {
      link.addEventListener("click", closeMenu);
    });
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape" && hamburger.classList.contains("active")) {
        closeMenu();
        hamburger.focus();
      }
    });
    const mediaQuery = window.matchMedia("(min-width: 768px)");
    mediaQuery.addEventListener("change", (e) => {
      if (e.matches) closeMenu();
    });
  }

  // _dev/js/modules/carousel.js
  var slides = document.querySelectorAll(".mv__slide");
  var indicators = document.querySelectorAll(".mv__indicator");
  if (slides.length > 1) {
    let current = 0;
    const goTo = (index) => {
      slides[current].classList.remove("is-active");
      indicators[current].classList.remove("is-active");
      current = index;
      slides[current].classList.add("is-active");
      indicators[current].classList.add("is-active");
    };
    const next = () => goTo((current + 1) % slides.length);
    let timer = setInterval(next, 5e3);
    indicators.forEach((btn) => {
      btn.addEventListener("click", () => {
        clearInterval(timer);
        goTo(Number(btn.dataset.index));
        timer = setInterval(next, 5e3);
      });
    });
  }

  // _dev/js/script.js
  var header2 = document.querySelector(".js-header");
  var mv = document.querySelector(".mv");
  if (header2 && mv) {
    const updateHeader = () => {
      const mvBottom = mv.getBoundingClientRect().bottom + window.scrollY;
      if (window.scrollY > mvBottom) {
        header2.classList.add("scrolled");
      } else {
        header2.classList.remove("scrolled");
      }
    };
    window.addEventListener("scroll", updateHeader, { passive: true });
    updateHeader();
  }
})();
