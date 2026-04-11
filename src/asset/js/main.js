(() => {
  // _dev/js/main.js

  // ヘッダースクロール
  var header = document.querySelector(".js-header");
  var mv = document.querySelector(".mv");
  if (header && mv) {
    const updateHeader = () => {
      const mvBottom = mv.getBoundingClientRect().bottom + window.scrollY;
      if (window.scrollY > mvBottom) {
        header.classList.add("scrolled");
      } else {
        header.classList.remove("scrolled");
      }
    };
    window.addEventListener("scroll", updateHeader, { passive: true });
    updateHeader();
  }

  // ハンバーガーメニュー
  const hamburger = document.getElementById("hamburger");
  const headerBg = document.querySelector(".header__background");
  const navLinks = document.querySelectorAll(".header__nav-link, .header__contact");

  const closeMenu = () => {
    hamburger.classList.remove("active");
    header.classList.remove("active");
    if (headerBg) headerBg.classList.remove("active");
    document.body.style.overflow = "";
  };

  if (hamburger && header) {
    hamburger.addEventListener("click", () => {
      const isOpen = hamburger.classList.toggle("active");
      header.classList.toggle("active", isOpen);
      if (headerBg) headerBg.classList.toggle("active", isOpen);
      document.body.style.overflow = isOpen ? "hidden" : "";
    });
  }

  // ナビリンククリックで閉じる
  navLinks.forEach((link) => {
    link.addEventListener("click", closeMenu);
  });

  // オーバーレイクリックで閉じる
  if (headerBg) {
    headerBg.addEventListener("click", closeMenu);
  }
})();
