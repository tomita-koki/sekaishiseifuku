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
        'ja' => 'お知らせ'
      ]
    );
    ?>
	<?php
	set_query_var('breadcrumb_items', [
	  [
		'label' => get_the_title(),
	  ],
	]);

	get_template_part('template-parts/components/breadcrumbs');
	?>

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
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
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
    <?php get_footer('custom'); ?>
<?php get_footer(); ?>