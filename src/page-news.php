<?php get_header(); ?>
    <!-- ヘッダー -->
    <header class="header header-type2 js-header">
      <div class="header__inner">
        <div class="header__logo">
          <a href="/" class="header__logo-link">
            <p class="header__logo-text">世界史解体新書</p>
            <p class="header__logo-subtext">SEKAISHI KAITAI SHINSHO</p>
          </a>
        </div>
        <nav class="header__nav" id="header-nav" aria-label="メインナビゲーション">
          <ul class="header__nav-list">
            <li><a href="/#anc01" class="header__nav-link header__text">NEWS</a></li>
            <li><a href="/#anc02" class="header__nav-link header__text">著書</a></li>
            <li><a href="/#anc03" class="header__nav-link header__text">メディア</a></li>
            <li><a href="/#anc04" class="header__nav-link header__text">YouTube</a></li>
            <li><a href="/#anc05" class="header__nav-link header__text">プロフィール</a></li>
          </ul>
          <a href="/contact" class="header__contact header__text">お問い合わせ</a>
          <div class="header__social">
            <a href="#" class="header__social-link">
              <span class="x-icon x-icon--type2">
                <i class="fa-brands fa-instagram"></i>
              </span>
            </a>
            <a href="#" class="header__social-link">
              <span class="x-icon x-icon--type2">
                <i class="fa-brands fa-youtube"></i>
              </span>
            </a>
          </div>
        </nav>
        <button class="hamburger" id="hamburger" type="button" aria-expanded="false" aria-controls="header-nav" aria-label="メニューを開く">
          <span id="hamburger__btn" aria-hidden="true"></span>
        </button>
      </div>
    </header>

    <!-- サイドバー -->
    <aside class="sidebar">
      <a href="#" class="sidebar__item sidebar__item--contact">
        <i class="far fa-envelope"></i>
        <span>お問い合わせ</span>
      </a>
      <a href="#" class="sidebar__item sidebar__item--youtube">
        <i class="fab fa-youtube"></i>
        <span>オンライン授業</span>
      </a>
    </aside>

    <!-- メインエリア -->
    <div class="header__heading">
    <p class="header__heading-en">CONTACT</p>
    <h1 class="header__heading-ja">お問い合わせ</h1>
    </div>
    <div class="breadcrumbs">
      <a href="/" class="breadcrumbs__text">TOP</a>
      <a href="/contact/" class="breadcrumbs__text">お問い合わせ</a>
    </div>

    <section class="news section-bg">
        <div class="news-container">
            <ul class="news-category js-fade" data-delay="0" aria-label="カテゴリー">
                <li><a href="#" class="news-category__btn news-category__btn--ls">すべて</a></li>
                <li><a href="#" class="news-category__btn">出版情報</a></li>
                <li><a href="#" class="news-category__btn">YouTube</a></li>
                <li><a href="#" class="news-category__btn">講義情報</a></li>
                <li><a href="#" class="news-category__btn news-category__btn--ls2">メディア</a></li>
            </ul>

            <ol class="article-list js-fade" data-delay="150">
                <div class="article-list__wrap">
                    <li class="article-list__border">
                        <a href="#" class="article-list__box">
                            <span class="article-date">2026.03.19</span>
                            <div class="article-category"><span class="article-category__text">メディア</span>
                            </div>
                            <p class="article-list__title">集英社オンラインに掲載されました</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="article-list__box">
                            <span class="article-date">2026.03.10</span>
                            <div class="article-category article-list__category--print"><span
                                    class="article-category__text article-category__text--print">出版情報</span>
                            </div>
                            <p class="article-list__title">最新刊『（書籍タイトル）』発売記念 特典のお知らせ【ダミー】</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="article-list__box">
                            <span class="article-date">2026.02.20</span>
                            <div class="article-category article-category--print"><span
                                    class="article-category__text article-category__text--print">出版情報</span>
                            </div>
                            <p class="article-list__title">第1作『（書籍タイトル）』重版決定のご報告【ダミー】</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="article-list__box">
                            <span class="article-date">2026.01.15</span>
                            <div class="article-category article-category--youtube"><span
                                    class="article-category__text article-category__text--youtube">YouTube</span>
                            </div>
                            <p class="article-list__title">チャンネル登録者数〇〇万人を突破いたしました！【ダミー】</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="article-list__box">
                            <span class="article-date">2025.12.10</span>
                            <div class="article-category"><span
                                    class="article-category__text article-category__text--lecture">講義情報</span>
                            </div>
                            <p class="article-list__title">2026年度 春期オンデマンド講義のご案内【ダミー】</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="article-list__box">
                            <span class="article-date">2025.11.20</span>
                            <div class="article-category"><span class="article-category__text">メディア</span>
                            </div>
                            <p class="article-list__title">雑誌『WiLL』に掲載されました【ダミー】</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="article-list__box">
                            <span class="article-date">2025.10.05</span>
                            <div class="article-category article-category--youtube"><span
                                    class="article-category__text article-category__text--youtube">YouTube</span>
                            </div>
                            <p class="article-list__title">新シリーズ「近現代史を因果で読む」配信開始のお知らせ【ダミー】</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="article-list__box">
                            <span class="article-date">2025.09.01</span>
                            <div class="article-category"><span
                                    class="article-category__text article-category__text--lecture">講義情報</span>
                            </div>
                            <p class="article-list__title">秋期オンデマンド講義 受付開始のお知らせ【ダミー】</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="article-list__box">
                            <span class="article-date">2025.08.15</span>
                            <div class="article-category article-category--print"><span
                                    class="article-category__text article-category__text--print">出版情報</span>
                            </div>
                            <p class="article-list__title">第1作 増刷（○刷）のご報告【ダミー】</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="article-list__box">
                            <span class="article-date">2025.07.10</span>
                            <div class="article-category"><span class="article-category__text">メディア</span>
                            </div>
                            <p class="article-list__title">扶桑社プレスリリースに掲載されました【ダミー】</p>
                        </a>
                    </li>
                </div>
            </ol>

            <nav class="js-fade" data-delay="300" aria-label="ページネーション">
                <ol class="news-pagination">
                    <div class="news-pagination__wrap">
                        <li><a href="#" class="news-pagination__box" aria-label="前のページ"><i
                                    class="fas fa-chevron-left"></i></a></li>
                        <li><a href="#" class="news-pagination__box news-pagination__box--num" aria-current="page">1</a>
                        </li>
                        <li><a href="#" class="news-pagination__box news-pagination__box--num" aria-current="page">2</a>
                        </li>
                        <li><a href="#" class="news-pagination__box news-pagination__box--num" aria-current="page">3</a>
                        </li>
                        <li><a href="#" class="news-pagination__box" aria-label="次のページ"><i
                                    class="fas fa-chevron-right"></i></a></li>
                    </div>
                </ol>
            </nav>
        </div>
    </section>

    <!-- フッター -->
    <footer class="footer">
      <div class="footer__inner">
        <div class="footer__logo">
          <a href="/" class="footer__logo-link">
            <p class="footer__logo-text">世界史解体新書</p>
            <p class="footer__logo-subtext">AKIRA DOI OFFICIAL</p>
          </a>
        </div>
        <nav class="footer__nav">
          <ul class="footer__nav-list">
            <li><a href="#anc01" class="footer__nav-link">NEWS</a></li>
            <li><a href="#anc02" class="footer__nav-link">著書</a></li>
            <li><a href="#anc03" class="footer__nav-link">メディア</a></li>
            <li><a href="#anc04" class="footer__nav-link">YouTube</a></li>
            <li><a href="#anc05" class="footer__nav-link">プロフィール</a></li>
          </ul>
        </nav>
        <div class="footer__social">
            <a href="#">
              <span class="x-icon">
                <i class="fa-brands fa-instagram"></i>
              </span>
            </a>
            <a href="#">
              <span class="x-icon">
                <i class="fa-brands fa-youtube"></i>
              </span>
            </a>
        </div>
        <ul class="footer__links">
          <li><a href="/contact" class="footer__link">お問い合わせ</a></li>
          <li><a href="/" class="footer__link footer__link--underline">オンライン授業はこちら</a></li>
        </ul>
        <ul class="footer__privacy">
          <li><a href="/privacy-policy" class="footer__link footer__link--underline">プライバシーポリシー</a></li>
        </ul>
        <p class="footer__copy">© 2026 Akira Doi. All Rights Reserved.</p>
      </div>
    </footer>
<?php get_footer(); ?>
