<?php

// wp_enqueue_scripts アクションフックに使う関数を定義
function my_theme_scripts()
{
  // 現在のテーマのバージョンを取得し、キャッシュ防止のためにCSS/JSのバージョン指定に使う
  $theme_version = wp_get_theme()->get('Version');

  // テーマの共通 CSS
  wp_enqueue_style('my-theme-style', get_template_directory_uri() . '/assets/css/style.css', array(), $theme_version);
  wp_enqueue_script('my-theme-cmn-script', get_template_directory_uri() . '/assets/js/cmn.js', array('jquery'), $theme_version, true);

  // 投稿ページ（single.php）のみCSS/JSを読み込む
  if (is_single()) {
    wp_enqueue_style('my-theme-single-style', get_template_directory_uri() . '/assets/css/single.css', array(), $theme_version);
  }

  // ブログ一覧ページ（page-blog.php）のみCSS/JSを読み込む
  if (is_page('blog')) {
    wp_enqueue_style('my-theme-single-style', get_template_directory_uri() . '/assets/css/page-blog.css', array(), $theme_version);
  }

  // コンセプトページ（page-concept.php）のみCSS/JSを読み込む
  if (is_page('concept')) {
    wp_enqueue_style('my-theme-single-style', get_template_directory_uri() . '/assets/css/page-concept.css', array(), $theme_version);
  }

  // スタッフ採用ページ（page-recruit.php）のみCSS/JSを読み込む
  if (is_page('recruit')) {
    wp_enqueue_style('my-theme-single-style', get_template_directory_uri() . '/assets/css/page-recruit.css', array(), $theme_version);
    wp_enqueue_script('my-theme-page-script', get_template_directory_uri() . '/assets/js/recruit.js', array('jquery', 'my-theme-cmn-script'), $theme_version, true);
  }

  //お問い合わせフォーム（page-contact.php）のみCSS/JSを読み込む
  if (is_page('contact')) {
    wp_enqueue_style('my-theme-single-style', get_template_directory_uri() . '/assets/css/page-contact.css', array(), $theme_version);
    wp_enqueue_script('my-theme-page-script', get_template_directory_uri() . '/assets/js/contact.js', array('jquery', 'my-theme-cmn-script'), $theme_version, true);
  }

  // トップページのみSlick関連を読み込む場合
  // Slick CSS (CDN)　headに記載している2つ
  if (is_front_page()) {
    wp_enqueue_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('slick-theme', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css');
    // Slick JS (CDN)　/bodyの直前に記載しているやつ
    wp_enqueue_script('slick-script', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('my-theme-top-script', get_template_directory_uri() . '/assets/js/top.js', array('jquery', 'slick-script', 'my-theme-cmn-script'), $theme_version, true);
  }
}

// 上で定義した my_theme_scripts() を WordPress に登録し、適切なタイミングで呼び出させる
add_action('wp_enqueue_scripts', 'my_theme_scripts');

// テーマのセットアップ (タイトルタグのサポートなど)　テーマ初期設定用の関数
function my_theme_setup()
{
  // WordPress に HTML <title> タグを自動で挿入させる機能を有効にする
  add_theme_support('title-tag');
  // アイキャッチ画像のサポートを有効にする。
  add_theme_support('post-thumbnails');
  // 他機能はここに追加していく。
}
// テーマのセットアップ関数を WordPress に登録
add_action('after_setup_theme', 'my_theme_setup');
