<?php
/*
Template Name: Blog一覧
*/
get_header();
?>
<main id="blog-list-page">
  <!-- パンくずリスト -->
  <div class="breadcrumb-single">
    <div class="breadcrumb-inner">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="breadcrumb-home">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_home.png" alt="Top">
        <span>Home</span>
      </a>
      <span class="breadcrumb-separator">&gt;</span>
      <span class="breadcrumb-current">Blog</span>
    </div>
  </div>
  <!-- パンくずリストここまで -->

  <div class="blog-list-container">
    <div class="page-title">
      <h1>Blog</h1>
      <p>ブログ</p>
    </div>

    <ul class="news-list">
      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array(
        'post_type'      => 'post',
        'category_name' => 'blog-list', // front-page.php と同じカテゴリを指定
        'posts_per_page' => 5, // 表示件数は必要に応じて調整
        'paged'          => $paged,
      );
      $the_query = new WP_Query($args);

      if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
      ?>
          <li class="news-item">
            <a href="<?php the_permalink(); ?>" class="news-image-link">
              <div class='news-image-placeholder'>
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog.jpg" alt="デフォルト画像">
                <?php endif; ?>
              </div>
            </a>
            <div class="news-content">
              <a href="<?php the_permalink(); ?>" class="news-description-link">
                <div class="news-bottom">
                  <p class="news-description"><?php the_title(); ?></p>
                  <p class="news-date"><?php echo get_the_date('Y.m.d'); ?></p>
              </a>
              <div class="news-word-wrapper">
                <div class="more-link-wrapper">
                  <a href="<?php the_permalink(); ?>" class="more-links">
                    More
                    <svg class="arrow-svg" viewBox="-10 0 30 15">
                      <path d="M -4 10 L 20 10 L 10 0" stroke="black" stroke-width="2.5" fill="none" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </li>
        <?php
        endwhile;

        wp_reset_postdata();
      else :
        ?>
        <p><?php _e('No posts found.', 'your-theme'); ?></p>
      <?php
      endif;
      ?>
    </ul>

    <div class="pagination">
      <?php
      echo paginate_links(array(
        'mid_size' => 2,
        'prev_text' => '<',
        'next_text' => '>',
        'current' => max(1, get_query_var('paged')),
        'total' => $the_query->max_num_pages,
      ));
      ?>
    </div>

  </div>
</main>

<?php get_footer(); ?>