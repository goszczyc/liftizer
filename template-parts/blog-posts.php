<?php
$number_of_posts = isset($args['number']) ? $args['number'] : 6;
$current_id = get_the_ID();
$args = array(
  'post_type' => 'post',
  'posts_per_page' => 6,
  'paged' => $paged,
);

$blog = new WP_Query($args);

?>



<section class="blog container">


  <?php if ($blog_heading = get_field('blog_heading')) : ?>

    <div class="row justify-content-center">
      <div class="blog__heading col-12 col-xs-11 col-sm-10 col-md-8 col-lg-6">

        <?= $blog_heading; ?>

      </div>
    </div>

  <?php endif; ?>
  <?php if ($blog->have_posts()) : ?>

    <div class="row justify-content-center">

      <div class="col-12 col-md-10 col-lg-9">
        <div class="container">
          <div class="row">

            <?php while ($blog->have_posts()) : $blog->the_post(); ?>

              <?php if ($current_id != get_the_ID()) : ?>
                <div class="blog__card col-12 col-xs-10 offset-xs-1 offset-sm-0 col-sm-6 col-lg-4">

                  <a href="<?= esc_url(get_permalink()); ?>" class="blog__card-image">
                    <?= get_the_post_thumbnail('', 'blog_card'); ?>
                  </a>

                  <p class="blog__card-info">
                    <?= get_the_date('d.m.y'); ?>
                    &nbsp;|&nbsp;
                    <?= translate('author: ', 'liftizer'); ?>
                    <?= get_the_author(); ?>
                  </p>

                  <h3 class="blog__card-title">
                    <?= get_the_title(); ?>
                  </h3>

                  <p class="blog__card-excerpt">
                    <?= get_the_excerpt(); ?>
                  </p>

                  <a href="<?= esc_url(get_permalink()); ?>" class="blog__card-read-more">
                    <?php _e('Read more', 'liftizer'); ?>
                  </a>

                </div>
              <?php endif; ?>

            <?php endwhile; ?>


          </div>
          <div class="blog__navigation"><?= pagination_bar($blog, 'blog__navigation-numbers'); ?></div>
        </div>
      </div>
    </div>

  <?php endif; ?>

</section>