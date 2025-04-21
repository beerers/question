<?php get_header(); ?>

<main>
  <!-- メイン画像　カルーセル -->
  <section id="carousel-section">
    <div class="slider">
      <div class="slider-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/AdobeStock_315403486.jpeg" width="1280" height="720">
      </div>
      <div class="slider-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/salad.jpg" width="1280" height="720">
      </div>
      <div class="slider-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/AdobeStock_559199909.jpeg" width="1280" height="720">
      </div>
    </div>
    <div class="logo-overlay">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo3.png" alt="NATURAL KITCHEN Logo" class="carousel-logo">
    </div>
  </section>
  <!-- メイン画像ここまで -->

  <!-- カフェ概要 -->
  <section id="concept">
    <div class="concept-container">
      <div class="cafe_logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="カフェ概要img">
      </div>

      <div class="title-wrapper">
        <h2 class="news-title sequential-text-partial concept-info">
          <span>カ</span><span>ラ</span><span>ダ</span><span>に</span><span>や</span><span>さ</span><span>し</span><span>い</span><span>コ</span><span>ー</span><span>ヒ</span><span>ー</span><span>を</span>
        </h2>
        <h2 class="news-title sequential-text-partial concept-info_en">
          <span>E</span><span>n</span><span>j</span><span>o</span><span>y</span><span>　</span><span>o</span><span>r</span><span>g</span><span>a</span><span>n</span><span>i</span><span>c</span>
        </h2>
        <h2 class="news-title sequential-text-partial concept-info_ja">
          <span>オ</span><span>ー</span><span>ガ</span><span>ニ</span><span>ッ</span><span>ク</span><span>を</span><span>お</span><span>楽</span><span>し</span><span>み</span><span>く</span><span>だ</span><span>さ</span><span>い</span><span>。</span>
        </h2>
      </div>
      <div class="fade-in-target">
        <p>こんにちは！</p>
        <p>私たちは創業当初から、<br>カラダにやさしいコーヒーを提供しています。</p>
        <p>当店のコーヒー、フードは、全てオーガニックの物を使用しています。</p>
        <p>カフェインレスのコーヒーもご用意しておりますので、<br>
          お気軽にお立ち寄りください。</p>
      </div>
      <div class="cafe-concept-images">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/29119291_m.jpg" alt="カフェ概要1" class="concept-image image-left fade-in-target">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shop-in.jpg" alt="カフェ概要2" class="concept-image image-right fade-in-target">

        <a href="<?php echo esc_url(home_url('/concept/')); ?>">
          <p class="more-link fade-in-target">More
            <svg class="arrow-svg" viewBox="-10 0 30 15">
              <path d="M -4 10 L 20 10 L 10 0" stroke="black" stroke-width="2.5" fill="none" />
            </svg>
          </p>
        </a>
      </div>
    </div>
  </section>

  <!-- What's New セクション -->
  <section id="news">
    <div class="container fade-in-target">
      <h2 class="coffee-text" data-text="What's New">What's New</h2>
      <p class="news-text" data-text="新着情報">新着情報</p>
      <div class="title-divider"></div>
    </div>

    <ul class="news-list fade-in-target">
      <li class="news-item">
        <a href="link-to-article-1.html" class="news-image-link">
          <div class='news-image-placeholder'>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/AdobeStock_602975973.jpeg" alt="Webサイトリニューアルの記事へ">
          </div>
        </a>
        <div class="news-content">
          <a href="link-to-article-1.html" class="news-description-link">
            <p class="news-description">Web サイトのリニューアル</p>
            <p class="news-date">2025.03.01</p>
          </a>
          <div class="news-word-wrapper">
            <p class="news-word">いつも当社の Web サイトをご利用いただき、誠にありがとうございます。このたび、皆...</p>
            <div class="more-link-wrapper">
              <a href="link-to-article-1.html" class="more-links">
                More
                <svg class="arrow-svg" viewBox="-10 0 30 15">
                  <path d="M -4 10 L 20 10 L 10 0" stroke="black" stroke-width="2.5" fill="none" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </li>
      <li class="news-item">
        <a href="link-to-article-2.html" class="news-image-link">
          <div class='news-image-placeholder'>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/chocolates1.jpg" alt="ホワイトデーチョコレートセット販売のお知らせの記事へ">
          </div>
        </a>
        <div class="news-content">
          <a href="link-to-article-2.html" class="news-description-link">
            <p class="news-description">ホワイトデーチョコレートセット販売のお知らせ</p>
            <p class="news-date">2025.02.17</p>
          </a>
          <div class="news-word-wrapper">
            <p class="news-word">いつも NATURAL KITCHEN をご利用いただき、ありがとうございます。

              もうすぐホワ...</p>
            <div class="more-link-wrapper">
              <a href="link-to-article-2.html" class="more-links">More
                <svg class="arrow-svg" viewBox="-10 0 30 15">
                  <path d="M -4 10 L 20 10 L 10 0" stroke="black" stroke-width="2.5" fill="none" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </li>
      <li class="news-item">
        <a href="link-to-article-3.html" class="news-image-link">
          <div class='news-image-placeholder'>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sakura-drink.jpg" alt="さくらドリンク販売のお知らせの記事へ">
          </div>
        </a>
        <div class="news-content">
          <a href="link-to-article-3.html" class="news-description-link">
            <p class="news-description">さくらドリンク販売のお知らせ</p>
            <p class="news-date">2025.02.10</p>
          </a>
          <div class="news-word-wrapper">
            <p class="news-word">いつも NATURAL KITCHEN をご利用いただき、ありがとうございます。

              春の訪れを感...</p>
            <div class="more-link-wrapper">
              <a href="link-to-article-3.html" class="more-links">More
                <svg class="arrow-svg" viewBox="-10 0 30 15">
                  <path d="M -4 10 L 20 10 L 10 0" stroke="black" stroke-width="2.5" fill="none" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </li>
    </ul>

    <div class="read-more-link-container fade-in-target">
      <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="read-more-link">
        - View All - </a>
    </div>
    </div>
  </section>

  <!-- ヘルシーフードセクション -->
  <section id="about_healthy_food">
    <div class="container fade-in-target">
      <h2 class="coffee-text healthy-food-animate-target" data-text="About Healthy Food">About Healthy Food</h2>
      <p class="news-text" data-text="ヘルシーフードについて">ヘルシーフードについて</p>
      <div class="title-divider"></div>
    </div>

    <div class="healthy-set">
      <div class="healthy-set-image fade-in-target">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lettuce.jpg" alt="ヘルシーフード">
      </div>

      <div class="healthy-set-right-column">
        <div class="healthy-set-top-right-image fade-in-target">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/healthy.jpg" alt="小さな画像">
        </div>
        <div class="healthy-set-text fade-in-target">
          <p>私たちのヘルシーフードは、厳選されたオーガニック食材を使用し、栄養バランスを考慮して調理されています。<br>添加物や保存料を一切使用していません。</p>
          <p class="fade-in-target">旬の野菜や果物を中心に、身体に優しい調理法でその素材本来の味と栄養を最大限に引き出しています。</p>
          <div class="more-link-link fade-in-target">
            <a href="<?php echo esc_url(home_url('/about/')); ?>" class="more-links healthy-more-link">More
              <svg class="arrow-svg" viewBox="-10 0 30 15">
                <path d="M -4 10 L 20 10 L 10 0" stroke="black" stroke-width="2.5" fill="none" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- メニューセクション -->
  <section id="menu">
    <div class="menu-images">
      <img class="menu-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/leaf1.png" alt="リーフ1">
      <img class="menu-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/leaf2.png" alt="リーフ2">
      <img class="menu-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/leaf3.png" alt="リーフ3">
      <img class="menu-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/menu1.png" alt="メニュー1">
      <img class="menu-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/menu2.png" alt="メニュー2">
      <img class="menu-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/menu3.png" alt="メニュー3">
      <img class="menu-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/menu4.png" alt="メニュー4">
      <img class="menu-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/menu5.png" alt="メニュー5">
      <img class="menu-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/menu6.png" alt="メニュー6">
    </div>

    <div class="container fade-in-target">
      <h2 class="coffee-text menu-animate-target" data-text="Menu">Menu</h2>
      <p class="news-text" data-text="メニュー">メニュー</p>
      <div class="title-divider"></div>
    </div>
    <p class="healthy-menu-text fade-in-target">当店のコーヒー、フードは、全てオーガニックの物を使用しています。<br>お子様でも安心してお召し上がりください。</p>

    <div class="menu-more-link fade-in-target">
      <a href="<?php echo esc_url(home_url('/menu/')); ?>" class="menu-more-links">More
        <svg class="arrow-svg" viewBox="-10 0 30 15">
          <path d="M -4 10 L 20 10 L 10 0" stroke="black" stroke-width="2.5" fill="none" />
        </svg>
      </a>
    </div>
  </section>

  <!-- ACCESSセクション -->
  <section id="access">
    <div class="container fade-in-target">
      <h2 class="coffee-text access-animate-target" data-text="Access">Access</h2>
      <p class="news-text" data-text="メニュー">アクセス</p>
      <div class="title-divider"></div>
    </div>

    <!-- 画像＋テキスト -->
    <div class="access-content fade-in-target">
      <div class="access-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shop-out.jpg" alt="ショップ外観">
      </div>
      <div class="access-text">
        <div class="address-container">
          <p>所在地</p>
          <p class="address">〒 150-0021 東京都渋谷区恵比寿西 1-2-3</p>
        </div>
        <div class="train-info-container">
          <p>アクセス</p>
          <p class="train-info">東急東横線「代官山」駅、1 番出口より南へ徒歩 6 分</p>
        </div>
        <hr class="limited-hr">

        <div class="address-text">
          <div class="tel-fax-container">
            <p>TEL/FAX</p>
            <p class="tel-number">03-0000-0000/03-0000-0000</p>
          </div>
          <div class="mail-container">
            <p>MAIL</p>
            <p class="tel-number">info@example.com</p>
          </div>
          <div class="business-hours-container">
            <p>営業時間</p>
            <div class="open-hours">
              <p>[OPEN]</p>
              <p>月～土曜日 10:00～22:00 (ラストオーダー 21:30)</p>
              <p>日曜・祝日 10:00～19:00 (ラストオーダー 18:30)</p>
            </div>
            <div class="closed-hours">
              <p>[CLOSE]</p>
              <p>第4火曜日 (12/31-1/4)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Googleマップ -->
    <div class="google-map-container fade-in-target">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3242.1636722672297!2d139.70618432592698!3d35.648338922597915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b417426f3b1%3A0x5f59b4471831195e!2z44CSMTUwLTAwMjEg5p2x5Lqs6YO95riL6LC35Yy65oG15q-U5a-_6KW_77yR5LiB55uu77yS!5e0!3m2!1sja!2sjp!4v1744492360664!5m2!1sja!2sjp"
        width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>

</main>

<?php get_footer(); ?>