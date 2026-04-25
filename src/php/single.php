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
                    <?php $tags = get_the_tags(); if ($tags) : ?><div class="article-category article-heading__category"><span class="article-category__text"><?php echo esc_html($tags[0]->name); ?></span></div><?php endif; ?>
                    <h3 class="article-heading__title"><?php the_title(); ?></h3>
                </li>
            </ul>
            <div class="js-fade" data-delay="150">
              <div class="article__content">
                <?php the_content(); ?>
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
                <a href="<?php echo esc_url(home_url('/')); ?>news/" class="article-btn"><span class="article-btn__inner article-btn__inner--read"><i
                            class="fas fa-chevron-left"></i>お知らせ一覧へ</span></a>
            </div>
        </div>
    </section>

    <!-- フッター -->
    <?php get_footer('custom'); ?>
<?php get_footer(); ?>