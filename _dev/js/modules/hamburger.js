const hamburger = document.querySelector('.hamburger');
const header = document.querySelector('.js-header');
const background = document.querySelector('.header__background');
const navLinks = document.querySelectorAll('.header__nav-link');

const openMenu = () => {
  hamburger.classList.add('active');
  header.classList.add('active');
  background.classList.add('active');
  document.body.style.overflow = 'hidden';
};

const closeMenu = () => {
  hamburger.classList.remove('active');
  header.classList.remove('active');
  background.classList.remove('active');
  document.body.style.overflow = '';
};

if (hamburger && header && background) {
  hamburger.addEventListener('click', () => {
    if (hamburger.classList.contains('active')) {
      closeMenu();
    } else {
      openMenu();
    }
  });

  background.addEventListener('click', closeMenu);

  navLinks.forEach((link) => {
    link.addEventListener('click', closeMenu);
  });
}
