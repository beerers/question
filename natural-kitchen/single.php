<?php get_header(); ?>

<main id="single-post-page">
  <div class="breadcrumb-single">
    <div class="breadcrumb-inner">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="breadcrumb-home">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_home.png" alt="Top">
        <span>Home</span>
      </a>
      <span class="breadcrumb-separator">&gt;</span>
      <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="breadcrumb-blog">
        Blog
      </a>
      <span class="breadcrumb-separator">&gt;</span>
      <span class="breadcrumb-current">Post</span>
    </div>
  </div>
  <section class="single-container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="single-article">
          <p class="single-date"><?php echo get_the_date('Y.m.d'); ?></p>
          <h1 class="single-title"><?php the_title(); ?></h1>

          <div class="single-content">
            <?php the_content(); ?>
          </div>
        </article>
    <?php endwhile;
    endif; ?>
  </section>
</main>

<?php get_footer(); ?>