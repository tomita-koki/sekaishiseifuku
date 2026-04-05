/* カテゴリー・記事一覧　フェードイン */
const loadCards = document.querySelectorAll('.news-category, .article-list');
loadCards.forEach((el, i) => {
    setTimeout(() => el.classList.add('visible'), i * 150);
});

/* ページネーション　フェードイン */
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, { threshold: 0.2 });

observer.observe(document.querySelector('.news-pagination'));