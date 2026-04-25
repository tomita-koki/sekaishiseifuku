<?php

add_action('wp_enqueue_scripts', function() {

  // CSS（キャッシュ対策）
  $timestamp = date('YmdHis', filemtime(get_stylesheet_directory() . '/style.css'));
  wp_enqueue_style(
    'child_style',
    get_stylesheet_directory_uri() . '/style.css',
    [],
    $timestamp
  );

  /* =========================
     Google Fonts
  ========================= */
  wp_enqueue_style(
    'google-fonts',
    'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@400;700&display=swap',
    [],
    null
  );

  /* =========================
     Font Awesome
  ========================= */
  wp_enqueue_style(
    'font-awesome',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css',
    [],
    null
  );

  /* =========================
     JS（script.js）
  ========================= */
  wp_enqueue_script(
    'main-script',
    get_stylesheet_directory_uri() . '/script.js',
    [],
    null,
    true
  );

}, 11);


/* =========================
   メディアカスタム投稿
========================= */
add_action('init', function() {
  register_post_type('media', [
    'labels' => [
      'name' => 'メディア出演・掲載',
      'singular_name' => 'メディア出演・掲載',
      'menu_name' => 'メディア出演・掲載',
      'add_new' => '新規追加',
      'add_new_item' => 'メディア掲載を追加',
      'edit_item' => 'メディア掲載を編集',
      'new_item' => '新しいメディア掲載',
      'view_item' => 'メディア掲載を見る',
      'search_items' => 'メディア掲載を検索',
      'not_found' => 'メディア掲載が見つかりません',
    ],
    'public' => true,
    'has_archive' => false,
    'show_in_rest' => true,
    'menu_icon' => 'dashicons-format-aside',
    'supports' => ['title'],
  ]);
});

// 記事本文の下にSNSシェアボタンを追加する関数
add_filter( 'the_content', 'add_custom_sns_share_buttons' );

function add_custom_sns_share_buttons( $content ) {
    if ( ! is_single() ) {
        return $content;
    }
    $post_url   = urlencode( get_permalink() );
    $post_title = urlencode( get_the_title() );
    $twitter_url  = 'https://twitter.com/share?url=' . $post_url . '&text=' . $post_title;
    $facebook_url = 'https://www.facebook.com/share.php?u=' . $post_url;
    $share_html  = '<div class="article-share js-fade" data-delay="300">';
    $share_html .= '<div class="article-share__wrap">';
    $share_html .= '<p class="article-share__text">この記事をシェア</p>';
    $share_html .= '<ul class="article-share__sns-list">';
    
    // X (Twitter)
    $share_html .= '<li><a href="' . esc_url( $twitter_url ) . '" target="_blank" rel="nofollow noopener noreferrer" class="article-share__sns-btn"><i class="fa-brands fa-x-twitter"></i></a></li>';
    
    // Facebook
    $share_html .= '<li><a href="' . esc_url( $facebook_url ) . '" target="_blank" rel="nofollow noopener noreferrer" class="article-share__sns-btn article-share__sns-btn--fb"><i class="fa-brands fa-facebook-f"></i></a></li>';

    $share_html .= '</ul>';
    $share_html .= '</div>';
    $share_html .= '</div>';
    return $content . $share_html;
}