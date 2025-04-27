<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="NATURAL KITCHENの公式ホームページ。カラダにやさしいコーヒーを提供しています。
  当店のコーヒー、フードは、全てオーガニックの物を使用しています。カフェインレスのコーヒーもご用意しておりますので、お気軽にお立ち寄りください。">
  <?php wp_head(); ?>
</head>

<body>
  <!--マウスカーソル-->
  <div id="cursor" class="cursor"></div>

  <!-- ヘッダー -->
  <header>
    <div class="btn-trigger" id="btn07">
      <span></span>
      <span></span>
    </div>
    <p class="menu-text">MENU</p>
    <div class="header">
      <h1>NATURAL KITCHEN</h1>
      <div class="scroll_down" id="type06">
        <a href="#"><span></span>Scroll</a>
      </div>
    </div>

    <!-- ハンバーガーメニュー内 -->
    <div class="header__side__menu">
      <div class="header__side__menu__block">
        <div class="header__side__menu__box01">
          <ul>
            <li><a href="<?php echo esc_url(home_url('/')); ?>">HOME<span>トップページ</span></a></li>
            <li><a href="<?php echo esc_url(home_url('/about/')); ?>">ABOUT HEALTHY FOOD<span>ヘルシーフードについて</span></a></li>
            <li><a href="<?php echo esc_url(home_url('/menu/')); ?>">MENU<span>メニュー</span></a></li>
            <li><a href="<?php echo esc_url(home_url('/concept/')); ?>">CONCEPT<span>カフェ概要</span></a></li>
          </ul>
        </div>
        <div class="header__side__menu__box02">
          <ul>
            <li><a href="<?php echo esc_url(home_url('/blog/')); ?>">BLOG<span>ブログ</span></a></li>
            <li><a href="<?php echo esc_url(home_url('/recruit/')); ?>">RECRUITMENT<span>スタッフ採用</span></a></li>
            <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">CONTACT FORM<span>お問い合わせ</span></a></li>
          </ul>
        </div>
        <div class="header__side__menu__box03">
          <ul>
            <li>
              <a href="#" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-facebook.svg" alt="facebook">
              </a>
            </li>
            <li>
              <a href="#" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-instagram.svg" alt="instagram">
              </a>
            </li>
            <li>
              <a href="#" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-twitter.svg" alt="Twitter">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>