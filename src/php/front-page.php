<?php get_header(); ?>
    <!-- ヘッダー -->
    <header class="header js-header">
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
          <a href="/contact/" class="header__contact header__text">お問い合わせ</a>
          <div class="header__social">
            <a href="https://x.com/dooooooui" class="header__social-link" target="_blank">
              <span class="x-icon">
                <i class="fa-brands fa-x-twitter"></i>
              </span>
            </a>
            <a href="" class="header__social-link" target="_blank">
              <span class="x-icon">
                <i class="fa-brands fa-instagram"></i>
              </span>
            </a>
            <a href="https://www.youtube.com/channel/UC3PqI0Ed5kvqReIJIYRYu-Q" class="header__social-link" target="_blank">
              <span class="x-icon">
                <i class="fa-brands fa-youtube"></i>
              </span>
            </a>
          </div>
        </nav>
        <button class="hamburger" id="hamburger" type="button" aria-expanded="false" aria-controls="header-nav" aria-label="メニューを開く">
          <span id="hamburger__btn" aria-hidden="true"></span>
        </button>
      </div>
      <div class="header__background"></div>
    </header>

    <?php get_sidebar(); ?>

    <!-- メインビジュアル -->
    <section class="mv">
      <div class="mv__carousel">
        <div class="mv__slide is-active">
          <img src="/wp-content/uploads/2026/04/index-img-01.png" alt="">
        </div>
        <div class="mv__slide">
          <img src="/wp-content/uploads/2026/04/index-img-02.png" alt="">
        </div>
        <div class="mv__slide">
          <picture>
            <source srcset="/wp-content/uploads/2026/04/index-img-03-sp-scaled.jpg" media="(max-width: 768px)">
            <img src="/wp-content/uploads/2026/04/index-img-03.png" alt="">
          </picture>
        </div>
        <div class="mv__slide">
          <img src="/wp-content/uploads/2026/04/index-img-04.png" alt="">
        </div>
        <div class="mv__slide">
          <img src="/wp-content/uploads/2026/04/index-img-05.png" alt="">
        </div>
        <div class="mv__slide">
          <img src="/wp-content/uploads/2026/04/index-img-06.png" alt="">
        </div>
        <div class="mv__slide">
          <img src="/wp-content/uploads/2026/04/index-img-07.png" alt="">
        </div>
      </div>
      <div class="mv__background"></div>
      <div class="mv__indicators">
        <button class="mv__indicator is-active" data-index="0" aria-label="スライド1"></button>
        <button class="mv__indicator" data-index="1" aria-label="スライド2"></button>
        <button class="mv__indicator" data-index="2" aria-label="スライド3"></button>
        <button class="mv__indicator" data-index="3" aria-label="スライド4"></button>
        <button class="mv__indicator" data-index="4" aria-label="スライド5"></button>
        <button class="mv__indicator" data-index="5" aria-label="スライド6"></button>
        <button class="mv__indicator" data-index="6" aria-label="スライド7"></button>
      </div>
      <div class="mv__content">
        <p class="mv__role">予備校講師 / 著者 / YouTuber</p>
        <h1 class="mv__name">土井 昭</h1>
        <p class="mv__name-en">AKIRA DOI</p>
        <p class="mv__lead">
          歴史は暗記ではない。<br />
          点と点の繋がりを知れば、世界はもっと面白くなる。
        </p>
        <div class="mv__buttons">
          <a href="/contact/" class="mv__btn mv__btn--contact">お問い合わせ</a>
          <a href="https://www.youtube.com/channel/UC3PqI0Ed5kvqReIJIYRYu-Q" target="_blank" class="mv__btn mv__btn--youtube">
            YouTube を見る<i class="fab fa-youtube"></i>
          </a>
        </div>
      </div>
    </section>

    <!-- 新着情報 -->
    <section class="top-news" id="anc01">
      <div class="top-news__inner">
        <div class="top-news__heading">
          <p class="top-news__heading-en">NEWS</p>
          <h2 class="top-news__heading-ja">新着情報</h2>
          <span class="top-news__heading-bar"></span>
        </div>
        <?php
        $news_query = new WP_Query([
          'post_type'      => 'post',
          'posts_per_page' => 4,
          'category_name'  => 'news',
          'post_status'    => 'publish',
        ]);
        ?>

        <?php if ($news_query->have_posts()) : ?>
          <ul class="top-news__list">
            <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
              <?php $tags = get_the_tags(); ?>

              <li>
                <a href="<?php the_permalink(); ?>" class="top-news__item">
                  <time class="top-news__date" datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>">
                    <?php echo esc_html(get_the_date('Y.m.d')); ?>
                  </time>

                  <?php if ($tags) : ?>
                    <div class="top-news__tags">
                      <?php foreach ($tags as $tag) : ?>
                        <span class="top-news__tag">
                          <?php echo esc_html($tag->name); ?>
                        </span>
                      <?php endforeach; ?>
                    </div>
                  <?php endif; ?>

                  <p class="top-news__text"><?php the_title(); ?></p>
                </a>
              </li>

            <?php endwhile; ?>
          </ul>

          <?php wp_reset_postdata(); ?>
        <?php else : ?>
          <p>お知らせはまだありません。</p>
        <?php endif; ?>
        <div class="top-news__btn-wrap">
          <a href="/news/" class="top-news__btn">すべてのNEWSを見る</a>
        </div>
      </div>
    </section>

    <!-- 著書 -->
    <section class="books" id="anc02">
      <div class="books__inner">
        <div class="books__heading">
          <p class="books__heading-en">BOOKS</p>
          <h2 class="books__heading-ja">著書</h2>
          <span class="books__heading-bar"></span>
        </div>
        <div class="books__list">
          <article class="books__item">
            <div class="books__item-img">
              <div class="books__label">最新刊</div>
              <img src="/wp-content/uploads/2026/04/books-01.png" alt="書籍タイトル最新刊">
            </div>
            <div class="books__item-body">
              <p class="books__item-date">202X年XX月発売【ダミー】</p>
              <h3 class="books__item-title">（書籍タイトル 最新刊）【ダミー】</h3>
              <p class="books__item-text">単なる暗記にとどまらない「歴史の因果関係」を丁寧に紐解いた一冊。幅広い世代から支持を集め、発売即重版を達成。【ダミー文 ー 実データに差し替え】</p>
              <a href="https://www.amazon.co.jp/%E6%96%B0%E8%A3%85%E7%89%88-%E6%95%99%E7%A7%91%E6%9B%B8%E3%81%8B%E3%82%89%E6%B6%88%E3%81%88%E3%81%9F%E4%B8%96%E7%95%8C%E5%8F%B2-%E6%89%B6%E6%A1%91%E7%A4%BE%EF%BC%A2%EF%BC%AF%EF%BC%AF%EF%BC%AB%EF%BC%B3%E6%96%B0%E6%9B%B8-%E5%9C%9F%E4%BA%95-%E6%98%AD-ebook/dp/B0GMPS762M?ref_=ast_author_dp" target="_blank" class="books__item-btn">
                <i class="fab fa-amazon"></i>Amazonで購入
              </a>
            </div>
          </article>
          <article class="books__item">
            <div class="books__item-img">
              <img src="/wp-content/uploads/2026/04/books-02.png" alt="書籍タイトル第1作">
            </div>
            <div class="books__item-body">
              <p class="books__item-date">202X年XX月発売【ダミー】</p>
              <h3 class="books__item-title">（書籍タイトル 第1作）【ダミー】</h3>
              <p class="books__item-text">歴史の流れを「点と点の繋がり」で捉える新しいアプローチ。受験生から社会人まで幅広く読まれるベストセラー。【ダミー文 ー 実データに差し替え】</p>
              <a href="https://www.amazon.co.jp/9%E5%89%B2%E3%81%AE%E6%97%A5%E6%9C%AC%E4%BA%BA%E3%81%8C%E7%9F%A5%E3%82%89%E3%81%AA%E3%81%84-%E6%95%99%E7%A7%91%E6%9B%B8%E3%81%8B%E3%82%89%E6%B6%88%E3%81%88%E3%81%9F%E4%B8%96%E7%95%8C%E5%8F%B2-%E5%9C%9F%E4%BA%95-%E6%98%AD/dp/4046072180?ref_=ast_author_dp&th=1&psc=1" target="_blank" class="books__item-btn">
                <i class="fab fa-amazon"></i>Amazonで購入
              </a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- メディア出演・掲載 -->
    <section class="media" id="anc03">
      <div class="media__inner">
        <div class="media__heading">
          <p class="media__heading-en">MEDIA</p>
          <h2 class="media__heading-ja">メディア出演・掲載</h2>
          <span class="media__heading-bar"></span>
        </div>
        <div class="media__intro">
          <p class="media__lead">各種メディアへの掲載・出演実績です。</p>
        </div>
        <?php
        $media_query = new WP_Query([
          'post_type'      => 'media',
          'posts_per_page' => 6,
          'post_status'    => 'publish',
        ]);
        ?>

        <?php if ($media_query->have_posts()) : ?>
          <div class="media__grid">

            <?php while ($media_query->have_posts()) : $media_query->the_post(); ?>

              <?php
              $source = get_field('media_source');
              $url    = get_field('media_url');
              $date   = get_field('media_date');
              $icon   = get_field('media_icon_type');

              $icon_class = 'media__item-icon';
              if ($icon) {
                $icon_class .= ' media__item-icon--' . $icon;
              }

              $link = $url ? $url : '#';
              ?>

              <a href="<?php echo esc_url($link); ?>" class="media__item" target="_blank">

                <div class="media__item-body">

                  <div class="<?php echo esc_attr($icon_class); ?>"></div>

                  <div class="media__item-content">

                    <?php if ($source) : ?>
                      <p class="media__item-source"><?php echo esc_html($source); ?></p>
                    <?php endif; ?>

                    <h3 class="media__item-title"><?php the_title(); ?></h3>

                    <?php if ($date) : ?>
                      <p class="media__item-date"><?php echo esc_html($date); ?></p>
                    <?php endif; ?>

                  </div>

                </div>

              </a>

            <?php endwhile; ?>

          </div>

          <?php wp_reset_postdata(); ?>

        <?php else : ?>
          <p>掲載情報はまだありません。</p>
        <?php endif; ?>
      </div>
    </section>
    
    <!-- YouTube -->
    <section class="youtube" id="anc04">
	  <div class="youtube__background"></div>
      <div class="youtube__inner">
        <div class="youtube__heading">
          <p class="youtube__heading-en">YOUTUBE</p>
          <h2 class="youtube__heading-ja">YouTube チャンネル</h2>
          <span class="youtube__heading-bar"></span>
        </div>
        <p class="youtube__text">単なる暗記にとどまらない「歴史の因果関係」を紐解く、<br>
          分かりやすく熱意ある解説を配信中。</p>
      </div>
      <div class="youtube__grid">
        <div class="youtube__item">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/rGh5jHQg37w?si=y46kDpUCUSFMddYG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="youtube__item">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/rGh5jHQg37w?si=y46kDpUCUSFMddYG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="youtube__item">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/rGh5jHQg37w?si=y46kDpUCUSFMddYG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
      </div>
      <div class="youtube__inner">
        <div class="youtube__btn-wrap">
          <a href="https://www.youtube.com/channel/UC3PqI0Ed5kvqReIJIYRYu-Q" target="_blank" class="youtube__btn">
            <span class="x-icon">
              <i class="fa-brands fa-youtube"></i>
            </span>
            チャンネルを見る</a>
        </div>
      </div>
    </section>

    <!-- プロフィール -->
    <section class="profile" id="anc05">
      <div class="profile__inner">
        <div class="profile__heading">
          <p class="profile__heading-en">PROFILE</p>
          <h2 class="profile__heading-ja">プロフィール</h2>
          <span class="profile__heading-bar"></span>
        </div>
        <div class="profile__content">
          <div class="profile__img">
            <img src="/wp-content/uploads/2026/04/profile.png" alt="土井昭のプロフィール写真">
            <div class="profile__social">
            <a href="https://x.com/dooooooui" target="_blank" class="profile__social-link">
              <span class="x-icon">
                <i class="fa-brands fa-x-twitter"></i>
              </span>
            </a>
            <a href="" target="_blank" class="profile__social-link">
              <span class="x-icon">
                <i class="fa-brands fa-instagram"></i>
              </span>
            </a>
            <a href="https://www.youtube.com/channel/UC3PqI0Ed5kvqReIJIYRYu-Q" target="_blank" class="profile__social-link">
              <span class="x-icon">
                <i class="fa-brands fa-youtube"></i>
              </span>
            </a>
            </div>
          </div>
          <div class="profile__body">
            <p class="profile__name">土井 昭<span>Akira Doi</span></p>
            <p class="profile__name-en">予備校講師 / 著者 / YouTuber</p>
            <p class="profile__text">予備校にてオンデマンド授業を担当する傍ら、YouTubeチャンネル「世界史解体新書」を運営。</p>
            <p class="profile__text">単なる暗記にとどまらない「歴史の因果関係」を紐解く、分かりやすく熱意ある解説が幅広い世代から支持を集めている。</p>
            <div class="profile__label">
              <span class="profile__label-text">#世界史</span>
              <span class="profile__label-text">#予備校講師</span>
              <span class="profile__label-text">#YouTuber</span>
              <span class="profile__label-text">#著者</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 略歴 -->
    <section class="career">
      <div class="career__inner">
        <div class="career__heading">
          <h2 class="career__heading-ja">略歴</h2>
          <span class="career__heading-bar"></span>
        </div>
        <div class="career__timeline">
          <div class="career__item">
            <div class="career__dot"></div>
            <p class="career__year">2026年2月28日</p>
            <div class="career__content">
              <p class="career__title">扶桑社『新装版　教科書から消えた世界史』発売</p>
            </div>
          </div>
          <div class="career__item">
            <div class="career__dot"></div>
            <p class="career__year">2025年4月16日</p>
            <div class="career__content">
              <p class="career__title">KADOKAWA『9割の日本人が知らない 教科書から消えた世界史』発売</p>
            </div>
          </div>
          <div class="career__item">
            <div class="career__dot"></div>
            <p class="career__year">2024年11月25日</p>
            <div class="career__content">
              <p class="career__title">チャンネル登録者10万人達成</p>
            </div>
          </div>
          <div class="career__item">
            <div class="career__dot"></div>
            <p class="career__year">2023年10月30日</p>
            <div class="career__content">
              <p class="career__title">YouTubeチャンネル「世界史解体新書」開始</p>
            </div>
          </div>
          <div class="career__item">
            <div class="career__dot"></div>
            <p class="career__year">2023年9月16日</p>
            <div class="career__content">
              <p class="career__title">講師15周年記念パーティー開催</p>
            </div>
          </div>
          <div class="career__item">
            <div class="career__dot"></div>
            <p class="career__year">2010年4月</p>
            <div class="career__content">
              <p class="career__title">予備校講師に転身</p>
            </div>
          </div>
          <div class="career__item">
            <div class="career__dot"></div>
            <p class="career__year">2008年4月</p>
            <div class="career__content">
              <p class="career__title">埼玉県私立高校にて教員になる</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- お問い合わせ -->
    <section class="contact">
      <div class="contact__inner">
        <div class="contact__heading">
          <p class="contact__heading-en">CONTACT</p>
          <h2 class="contact__heading-ja">お問い合わせ</h2>
          <span class="contact__heading-bar"></span>
        </div>
        <p class="contact__text">お仕事のご依頼・YouTube・書籍に関するお問い合わせなど、お気軽にご連絡ください。<br>通常3営業日以内にご返信いたします。</p>
        <div class="contact__btn-wrap">
          <a href="/contact/" class="contact__btn">お問い合わせはこちら</a>
        </div>
      </div>
    </section>

    <?php get_footer('custom'); ?>
<?php get_footer(); ?>