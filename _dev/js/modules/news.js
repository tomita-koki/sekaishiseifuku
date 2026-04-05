console.log("ooo");


const categoryBtns = document.querySelectorAll(".news-category__btn");
const articleItems = document.querySelectorAll(".article-list li");

if (categoryBtns.length && articleItems.length) {
  categoryBtns.forEach((btn) => {
    btn.addEventListener("click", (e) => {
      e.preventDefault();

      // アクティブ切り替え
      categoryBtns.forEach((b) => b.classList.remove("is-active"));
      btn.classList.add("is-active");

      const selected = btn.textContent.trim();

      articleItems.forEach((item) => {
        if (selected === "すべて") {
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
