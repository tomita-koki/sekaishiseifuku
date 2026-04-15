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

    <section class="article section-bg">
        <div class="article__wrap">
            <ul class="article-heading js-fade" data-delay="0">
                <li class="article-heading__inner">
                    <!-- 日付（article-date）とカテゴリー（article-category・article-category__text）はお知らせの記事一覧と共通 -->
                    <span class="article-date article-heading__date">2026.03.19</span>
                    <div class="article-category article-heading__category"><span
                            class="article-category__text">メディア</span></div>
                    <h3 class="article-heading__title">集英社オンラインに掲載されました【ダミー記事】</h3>
                </li>
            </ul>
            <div class="js-fade" data-delay="150">
                <!-- WordPressとの連携が分からなかったので、念のためpタグをdivで囲っています -->
                <div class="article__content">
                    <p>このたび、集英社オンラインにて土井昭の取材記 事が掲載されました。<br>「歴史の因果関係」を分かりやすく伝えるアプロ ーチについて、詳しくお話しています。</p>
                </div>
                <div class="article__main-text">
                    <p>【ダミー本文 — WP: the_content() に差し替え】<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                        do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud
                        exercitation ullamco laboris.</p>
                </div>
                <p class="article__show">ぜひ記事をご覧ください。</p>
                <a href="#" class="article-btn"><span class="article-btn__inner">記事を読む<i
                            class="fa-solid fa-arrow-up-right-from-square"></i></span></a>
            </div>
            <div class="article-share js-fade" data-delay="300">
                <div class="article-share__wrap">
                    <p class="article-share__text">この記事をシェア</p>
                    <ul class="article-share__sns-list">
                        <li><a href="#" class="article-share__sns-btn"><i class="fa-brands fa-x-twitter"></i></a></li>
                        <li><a href="#" class="article-share__sns-btn article-share__sns-btn--fb"><i
                                    class="fa-brands fa-facebook-f"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="js-fade" data-delay="450">
                <div class="article-nav">
                    <ul class="article-nav__wrap">
                        <li>
                            <a href="#" class="article-nav-btn">
                                <div class="article-nav-btn__wrap">
                                    <div class="article-nav-btn__guide"><i
                                            class="fas fa-chevron-left"></i><span>前の記事</span>
                                    </div>
                                    <!--ダミーテキストなのでパーフェクトピクセルにしていません-->
                                    <p class="article-nav-btn__text">第1作『（書籍タイトル）』重版決定のご報告【ダ<br>ミ<br>ー】</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="article-nav-btn">
                                <div class="article-nav-btn__wrap article-nav-btn__wrap--next">
                                    <div class="article-nav-btn__guide article-nav-btn__guide--next"><span>次の記事</span><i
                                            class="fas fa-chevron-right"></i></div>
                                    <!--ダミーテキストなのでパーフェクトピクセルにしていません-->
                                    <p class="article-nav-btn__text article-nav-btn__text--next">
                                        最新刊『（書籍タイトル）』発売記念特典のお知<br>ら<br>せ【ダミー】</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <a href="#" class="article-btn"><span class="article-btn__inner article-btn__inner--read"><i
                            class="fas fa-chevron-left"></i>お知らせ一覧へ</span></a>
            </div>
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
