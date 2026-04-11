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
