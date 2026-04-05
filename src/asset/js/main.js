(() => {
  // _dev/js/modules/news.js
  console.log("ooo");
  var categoryBtns = document.querySelectorAll(".news-category__btn");
  var articleItems = document.querySelectorAll(".article-list li");
  if (categoryBtns.length && articleItems.length) {
    categoryBtns.forEach((btn) => {
      btn.addEventListener("click", (e) => {
        e.preventDefault();
        categoryBtns.forEach((b) => b.classList.remove("is-active"));
        btn.classList.add("is-active");
        const selected = btn.textContent.trim();
        articleItems.forEach((item) => {
          if (selected === "\u3059\u3079\u3066") {
            item.style.display = "";
          } else {
            const categoryEl = item.querySelector(".article-list__category-text");
            const category = categoryEl ? categoryEl.textContent.trim() : "";
            item.style.display = category === selected ? "" : "none";
          }
        });
      });
    });
  }
  console.log("News module initialized.");
})();
