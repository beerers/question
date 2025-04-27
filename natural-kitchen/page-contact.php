<?php
/*
Template Name: concept お問い合わせフォーム
*/
get_header();
?>
<main id="contact-page">
  <!-- パンくずリスト -->
  <div class="breadcrumb-single">
    <div class="breadcrumb-inner">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="breadcrumb-home">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_home.png" alt="Top">
        <span>Home</span>
      </a>
      <span class="breadcrumb-separator">&gt;</span>
      <span class="breadcrumb-current">Contact</span>
    </div>
  </div>
  <!-- パンくずリストここまで -->

  <section class="contact-container">
    <div class="page-title">
      <h1>Contact</h1>
      <p>お問い合わせ</p>
    </div>

    <div class="contact-content">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact.jpg" alt="コンタクト画像">
      <div class="contact-text">
        <p>当店へのご質問やご相談がございましたら、お気軽にお問い合わせください。<br>メニューやサービスに関するご不明点、イベントのご予約、採用情報など、さまざまなご相談を承っております。</p>
        <p>お問い合わせは、専用のフォームより受け付けております。必要事項をご入力のうえ、送信ボタンを押してください。内容を確認し、担当者より折り返しご連絡いたします。</p>
        <p>なお、お問い合わせの内容によっては、ご返信にお時間をいただく場合がございますので、あらかじめご了承ください。<br>皆さまからのご連絡をお待ちしております。</p>
      </div>
    </div>
    </div>
    <!-- 問い合わせフォーム -->
    <div class="contact-form-wrapper">
      <form action="#" method="post" id="contactForm" novalidate>
        <div class="form-item">
          <label for="name">氏名<span>*</span></label>
          <input type="text" id="name" name="name" placeholder=" 例）田中太郎" required>
          <span class="error-message" id="nameError"><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16.0264 12.3086L9.46387 0.90625C8.97168 0.0585938 7.68652 0.03125 7.19434 0.90625L0.631836 12.3086C0.139648 13.1562 0.768555 14.25 1.78027 14.25H14.8779C15.8896 14.25 16.5186 13.1836 16.0264 12.3086ZM8.34277 9.92969C9.02637 9.92969 9.60059 10.5039 9.60059 11.1875C9.60059 11.8984 9.02637 12.4453 8.34277 12.4453C7.63184 12.4453 7.08496 11.8984 7.08496 11.1875C7.08496 10.5039 7.63184 9.92969 8.34277 9.92969ZM7.13965 5.41797C7.1123 5.22656 7.27637 5.0625 7.46777 5.0625H9.19043C9.38184 5.0625 9.5459 5.22656 9.51855 5.41797L9.32715 9.13672C9.2998 9.32812 9.16309 9.4375 8.99902 9.4375H7.65918C7.49512 9.4375 7.3584 9.32812 7.33105 9.13672L7.13965 5.41797Z" fill="currentColor" />
            </svg>この欄の入力は必須です。</span>
        </div>
        <div class="form-item">
          <label for="email">メールアドレス<span>*</span></label>
          <input type="email" id="email" name="email" placeholder=" 例）example@gmail.com" required>
          <span class="error-message" id="emailError"><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16.0264 12.3086L9.46387 0.90625C8.97168 0.0585938 7.68652 0.03125 7.19434 0.90625L0.631836 12.3086C0.139648 13.1562 0.768555 14.25 1.78027 14.25H14.8779C15.8896 14.25 16.5186 13.1836 16.0264 12.3086ZM8.34277 9.92969C9.02637 9.92969 9.60059 10.5039 9.60059 11.1875C9.60059 11.8984 9.02637 12.4453 8.34277 12.4453C7.63184 12.4453 7.08496 11.8984 7.08496 11.1875C7.08496 10.5039 7.63184 9.92969 8.34277 9.92969ZM7.13965 5.41797C7.1123 5.22656 7.27637 5.0625 7.46777 5.0625H9.19043C9.38184 5.0625 9.5459 5.22656 9.51855 5.41797L9.32715 9.13672C9.2998 9.32812 9.16309 9.4375 8.99902 9.4375H7.65918C7.49512 9.4375 7.3584 9.32812 7.33105 9.13672L7.13965 5.41797Z" fill="currentColor" />
            </svg> この欄の入力は必須です。</span>
        </div>
        <div class="form-item">
          <label for="tel">電話番号</label>
          <input type="tel" id="tel" name="tel" placeholder=" 例）000-0000-0000">
          <span class="error-message" id="telError"><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16.0264 12.3086L9.46387 0.90625C8.97168 0.0585938 7.68652 0.03125 7.19434 0.90625L0.631836 12.3086C0.139648 13.1562 0.768555 14.25 1.78027 14.25H14.8779C15.8896 14.25 16.5186 13.1836 16.0264 12.3086ZM8.34277 9.92969C9.02637 9.92969 9.60059 10.5039 9.60059 11.1875C9.60059 11.8984 9.02637 12.4453 8.34277 12.4453C7.63184 12.4453 7.08496 11.8984 7.08496 11.1875C7.08496 10.5039 7.63184 9.92969 8.34277 9.92969ZM7.13965 5.41797C7.1123 5.22656 7.27637 5.0625 7.46777 5.0625H9.19043C9.38184 5.0625 9.5459 5.22656 9.51855 5.41797L9.32715 9.13672C9.2998 9.32812 9.16309 9.4375 8.99902 9.4375H7.65918C7.49512 9.4375 7.3584 9.32812 7.33105 9.13672L7.13965 5.41797Z" fill="currentColor" />
            </svg> この欄の入力は必須です。</span>
        </div>
        <div class="form-item">
          <label for="message">お問い合わせ内容<span>*</span></label>
          <textarea id="message" name="message" rows="5" required></textarea>
          <span class="error-message" id="messageError"><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16.0264 12.3086L9.46387 0.90625C8.97168 0.0585938 7.68652 0.03125 7.19434 0.90625L0.631836 12.3086C0.139648 13.1562 0.768555 14.25 1.78027 14.25H14.8779C15.8896 14.25 16.5186 13.1836 16.0264 12.3086ZM8.34277 9.92969C9.02637 9.92969 9.60059 10.5039 9.60059 11.1875C9.60059 11.8984 9.02637 12.4453 8.34277 12.4453C7.63184 12.4453 7.08496 11.8984 7.08496 11.1875C7.08496 10.5039 7.63184 9.92969 8.34277 9.92969ZM7.13965 5.41797C7.1123 5.22656 7.27637 5.0625 7.46777 5.0625H9.19043C9.38184 5.0625 9.5459 5.22656 9.51855 5.41797L9.32715 9.13672C9.2998 9.32812 9.16309 9.4375 8.99902 9.4375H7.65918C7.49512 9.4375 7.3584 9.32812 7.33105 9.13672L7.13965 5.41797Z" fill="currentColor" />
            </svg> この欄の入力は必須です。</span>
        </div>
        <button type="submit" class="contact-submit-button">送信</button>
      </form>
    </div>
  </section>



</main>

<?php get_footer(); ?>