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