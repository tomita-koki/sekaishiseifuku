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
            <?php
            $selected_tag = isset($_GET['filter_tag']) ? intval($_GET['filter_tag']) : 0;
            $page_url = get_permalink();
            $all_tags = get_tags(array('hide_empty' => false));
            ?>
            <ul class="news-category js-fade" data-delay="0" aria-label="カテゴリー">
                <li><a href="<?php echo esc_url($page_url); ?>" class="news-category__btn news-category__btn--ls<?php echo $selected_tag === 0 ? ' news-category__active' : ''; ?>">すべて</a></li>
                <?php foreach ($all_tags as $tag) : ?>
                <li><a href="<?php echo esc_url(add_query_arg('filter_tag', $tag->term_id, $page_url)); ?>" class="news-category__btn<?php echo $selected_tag === $tag->term_id ? ' news-category__active' : ''; ?>"><?php echo esc_html($tag->name); ?></a></li>
                <?php endforeach; ?>
            </ul>

            <ol class="article-list js-fade" data-delay="150">
                <div class="article-list__wrap">
                    <?php
                    $paged = get_query_var('paged') ?: get_query_var('page') ?: 1;
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 10,
                        'paged'          => $paged,
                    );
                    if ($selected_tag > 0) {
                        $args['tag__in'] = array($selected_tag);
                    }
                    $query = new WP_Query($args);
                    if ($query->have_posts()) :
                        $first = true;
                        while ($query->have_posts()) : $query->the_post();
                            $tags = get_the_tags();
                            $tag_name = $tags ? esc_html($tags[0]->name) : '';
                            $li_class = $first ? ' class="article-list__border"' : '';
                            $first = false;
                    ?>
                    <li<?php echo $li_class; ?>>
                        <a href="<?php the_permalink(); ?>" class="article-list__box">
                            <span class="article-date"><?php echo get_the_date('Y.m.d'); ?></span>
                            <?php if ($tag_name) : ?><div class="article-category"><span class="article-category__text"><?php echo $tag_name; ?></span></div><?php endif; ?>
                            <p class="article-list__title"><?php the_title(); ?></p>
                        </a>
                    </li>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                    ?>
                    <li><p>記事がありません。</p></li>
                    <?php endif; ?>
                </div>
            </ol>

            <nav class="js-fade" data-delay="300" aria-label="ページネーション">
                <ol class="news-pagination">
                    <div class="news-pagination__wrap">
                        <?php
                        $total_pages = $query->max_num_pages;
                        if ($total_pages > 1) :
                            $prev_url = get_pagenum_link($paged - 1);
                            $next_url = get_pagenum_link($paged + 1);
                            if ($selected_tag > 0) {
                                $prev_url = add_query_arg('filter_tag', $selected_tag, $prev_url);
                                $next_url = add_query_arg('filter_tag', $selected_tag, $next_url);
                            }
                        ?>
                        <?php if ($paged > 1) : ?>
                        <li><a href="<?php echo esc_url($prev_url); ?>" class="news-pagination__box" aria-label="前のページ"><i class="fas fa-chevron-left"></i></a></li>
                        <?php endif; ?>
                        <?php for ($i = 1; $i <= $total_pages; $i++) :
                            $num_url = get_pagenum_link($i);
                            if ($selected_tag > 0) {
                                $num_url = add_query_arg('filter_tag', $selected_tag, $num_url);
                            }
                        ?>
                        <li><a href="<?php echo esc_url($num_url); ?>" class="news-pagination__box news-pagination__box--num<?php echo $i === $paged ? ' news-pagination__active' : ''; ?>"<?php echo $i === $paged ? ' aria-current="page"' : ''; ?>><?php echo $i; ?></a></li>
                        <?php endfor; ?>
                        <?php if ($paged < $total_pages) : ?>
                        <li><a href="<?php echo esc_url($next_url); ?>" class="news-pagination__box" aria-label="次のページ"><i class="fas fa-chevron-right"></i></a></li>
                        <?php endif; ?>
                        <?php endif; ?>
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
