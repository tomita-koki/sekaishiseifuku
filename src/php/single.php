<?php get_header(); ?>
    <!-- ヘッター -->
    <?php get_header('custom'); ?>

    <!-- サイドバー -->
    <?php get_sidebar(); ?>

    <!-- メインエリア -->
    <!-- 見出し -->
    <?php
    get_template_part(
    'template-parts/components/page-heading',
    null,
    [
        'en' => 'NEWS',
        'ja' => 'メディア記事'
    ]
    );
    ?>

	<?php
	set_query_var('breadcrumb_items', [
	  [
		'label' => 'お知らせ',
		'url'   => home_url('/news/'),
	  ],
	  [
		'label' => get_the_title(),
	  ],
	]);

	get_template_part('template-parts/components/breadcrumbs');
	?>

    <section class="article section-bg">
                <div class="article__wrap">
            <ul class="article-heading js-fade" data-delay="0">
                <li class="article-heading__inner">
                    <!-- 日付（article-date）とカテゴリー（article-category・article-category__text）はお知らせの記事一覧と共通 -->
                    <span class="article-date article-heading__date"><?php echo get_the_date('Y.m.d'); ?></span>
                    <div class="article-category article-heading__category"><span
                            class="article-category__text"><?php $tags = get_the_tags(); if ($tags) echo esc_html($tags[0]->name); ?></span></div>
                    <h3 class="article-heading__title"><?php the_title(); ?></h3>
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
                <a href="<?php the_permalink(); ?>" class="article-btn"><span class="article-btn__inner">記事を読む<i
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
                        <?php $prev = get_previous_post(); ?>
                        <?php if ($prev) : ?>
                        <li>
                            <a href="<?php echo get_permalink($prev->ID); ?>" class="article-nav-btn">
                                <div class="article-nav-btn__wrap">
                                    <div class="article-nav-btn__guide"><i
                                            class="fas fa-chevron-left"></i><span>前の記事</span>
                                    </div>
                                    <p class="article-nav-btn__text"><?php echo esc_html($prev->post_title); ?></p>
                                </div>
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php $next = get_next_post(); ?>
                        <?php if ($next) : ?>
                        <li>
                            <a href="<?php echo get_permalink($next->ID); ?>" class="article-nav-btn">
                                <div class="article-nav-btn__wrap article-nav-btn__wrap--next">
                                    <div class="article-nav-btn__guide article-nav-btn__guide--next"><span>次の記事</span><i
                                            class="fas fa-chevron-right"></i></div>
                                    <p class="article-nav-btn__text article-nav-btn__text--next"><?php echo esc_html($next->post_title); ?></p>
                                </div>
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <a href=""<?php echo esc_url(home_url('/news/')); ?>" class="article-btn"><span class="article-btn__inner article-btn__inner--read"><i
                            class="fas fa-chevron-left"></i>お知らせ一覧へ</span></a>
            </div>
        </div>
    </section>

    <!-- フッター -->
    <?php get_footer('custom'); ?>
<?php get_footer(); ?>