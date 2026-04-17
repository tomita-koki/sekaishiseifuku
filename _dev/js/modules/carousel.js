const slides = document.querySelectorAll('.mv__slide');
const indicators = document.querySelectorAll('.mv__indicator');

if (slides.length > 1) {
  let current = 0;

  const goTo = (index) => {
    slides[current].classList.remove('is-active');
    indicators[current].classList.remove('is-active');
    current = index;
    slides[current].classList.add('is-active');
    indicators[current].classList.add('is-active');
  };

  const next = () => goTo((current + 1) % slides.length);

  let timer = setInterval(next, 5000);

  indicators.forEach((btn) => {
    btn.addEventListener('click', () => {
      clearInterval(timer);
      goTo(Number(btn.dataset.index));
      timer = setInterval(next, 5000);
    });
  });
}
