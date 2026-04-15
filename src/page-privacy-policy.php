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

    <section class="privacy-policy section-bg">
        <ul class="privacy-policy__wrap">
            <li class="privacy-policy-container">
                <div class="privacy-policy-container__wrap">
                    <h3 class="privacy-policy-container__title">個人情報の取り扱いについて</h3>
                    <p class="privacy-policy-container__text">
                        世界史解体新書（以下「当サイト」）は、お問い合わせフォームを通じてご提供いただいた個人情報（氏名・メールアドレス等）を、以下の目的にのみ使用します。</p>
                    <ul class="privacy-policy-container__list">
                        <li>
                            <span class="privacy-policy-container__text">お問い合わせへの返信</span>
                        </li>
                        <li>
                            <span class="privacy-policy-container__text">ご依頼・ご相談への対応</span>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="privacy-policy-container">
                <div class="privacy-policy-container__wrap">
                    <h3 class="privacy-policy-container__title">個人情報の第三者提供</h3>
                    <p class="privacy-policy-container__text">当サイトは、法令に基づく場合を除き、ご提供いただいた個人情報を第三者に提供・開示することはありません。</p>
                </div>
            </li>
            <li class="privacy-policy-container">
                <div class="privacy-policy-container__wrap">
                    <h3 class="privacy-policy-container__title">Cookie（クッキー）について</h3>
                    <p class="privacy-policy-container__text">当サイトでは、アクセス解析のためにGoogleAnalyticsを使用しています。Google
                        Analyticsはデータの収集のためにCookieを使用しています。このデータは匿名で収集されており、個人を特定するものではありません。</p>
                    <p class="privacy-policy-container__text privacy-policy-container__text--mt">Google Analyticsのデータ収集を拒否する場合は、ブラウザの設定でCookieを無効にしてください。
                    </p>
                </div>
            </li>
            <li class="privacy-policy-container">
                <div class="privacy-policy-container__wrap">
                    <h3 class="privacy-policy-container__title">免責事項</h3>
                    <p class="privacy-policy-container__text">
                        当サイトのコンテンツ・情報につきまして、可能な限り正確な情報を掲載するよう努めておりますが、誤情報が入り込んだり、情報が古くなったりすることもございます。当サイトに掲載された内容によって生じた損害等の一切の責任を負いかねますのでご了承ください。
                    </p>
                </div>
            </li>
            <li class="privacy-policy-container">
                <div class="privacy-policy-container__wrap">
                    <h3 class="privacy-policy-container__title">著作権について</h3>
                    <p class="privacy-policy-container__text">
                        当サイトに掲載されているコンテンツ（テキスト・画像・動画等）の著作権は、土井昭または正当な権利者に帰属します。無断転載・複製を禁じます。</p>
                </div>
            </li>
            <li class="privacy-policy-container">
                <div class="privacy-policy-container__wrap">
                    <h3 class="privacy-policy-container__title">プライバシーポリシーの変更</h3>
                    <p class="privacy-policy-container__text">
                        当サイトは、必要に応じてプライバシーポリシーを変更することがあります。変更後のプライバシーポリシーは、本ページに掲載した時点で効力を生じるものとします。</p>
                </div>
            </li>
            <li class="privacy-policy-container">
                <div class="privacy-policy-container__wrap">
                    <h3 class="privacy-policy-container__title">お問い合わせ</h3>
                    <p class="privacy-policy-container__text">プライバシーポリシーに関するお問い合わせは、<a href="#" class="privacy-policy-container__text-link">お問い合わせフォーム</a>よりご連絡ください。</p>
                </div>
            </li>
        </ul>
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
