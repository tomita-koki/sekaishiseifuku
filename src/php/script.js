const hamburger = document.querySelector('.hamburger');
const header = document.querySelector('.js-header');
const background = document.querySelector('.header__background');
const nav = document.querySelector('#header-nav');
const navLinks = document.querySelectorAll('.header__nav-link');

const openMenu = () => {
  hamburger.classList.add('active');
  header.classList.add('active');
  background.classList.add('active');
  hamburger.setAttribute('aria-expanded', 'true');
  hamburger.setAttribute('aria-label', 'メニューを閉じる');
  document.body.style.overflow = 'hidden';

  // フォーカスをナビ内の最初のリンクへ移動
  const firstLink = nav?.querySelector('a, button');
  firstLink?.focus();
};

const closeMenu = () => {
  hamburger.classList.remove('active');
  header.classList.remove('active');
  background.classList.remove('active');
  hamburger.setAttribute('aria-expanded', 'false');
  hamburger.setAttribute('aria-label', 'メニューを開く');
  document.body.style.overflow = '';
};

if (hamburger && header && background) {
  hamburger.addEventListener('click', () => {
    if (hamburger.classList.contains('active')) {
      closeMenu();
      hamburger.focus();
    } else {
      openMenu();
    }
  });

  background.addEventListener('click', closeMenu);

  navLinks.forEach((link) => {
    link.addEventListener('click', closeMenu);
  });

  // Escキーで閉じる
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && hamburger.classList.contains('active')) {
      closeMenu();
      hamburger.focus();
    }
  });

  // 768px以上になったら閉じる
  const mediaQuery = window.matchMedia('(min-width: 768px)');
  mediaQuery.addEventListener('change', (e) => {
    if (e.matches) closeMenu();
  });
}

// ヘッダー スクロール制御
const mv = document.querySelector('.mv');
if (header && mv) {
  const updateHeader = () => {
    const mvBottom = mv.getBoundingClientRect().bottom + window.scrollY;
    if (window.scrollY > mvBottom) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  };
  window.addEventListener('scroll', updateHeader, { passive: true });
  updateHeader();
}

// カルーセル
const slides = document.querySelectorAll(".mv__slide");
const indicators = document.querySelectorAll(".mv__indicator");
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

// フェードイン
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const delay = entry.target.dataset.delay || 0;
            setTimeout(() => {
                entry.target.classList.add('visible');
            }, delay);
        }
    });
}, { threshold: 0.2 });

document.querySelectorAll('.js-fade')
    .forEach(el => observer.observe(el));