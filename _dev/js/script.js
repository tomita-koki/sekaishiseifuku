// modules
import "./modules/news";
import "./modules/hamburger";

// ヘッダー スクロール制御
const header = document.querySelector('.js-header');
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
