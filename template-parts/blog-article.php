<section class="blog-post container">
  <div class="row justify-content-center">
    <article class="blog-post__article col-12 col-sm-10 col-lg-8">
      <div id="breadcrumbs" class="blog-post__breadcrumbs">
        <a href="<?= esc_url(get_permalink()) ?>">blog / </a>
        <?= get_the_title(); ?>
      </div>
      <h2 class="blog-post__title">
        <?= get_the_title(); ?>
      </h2>
      <?= get_the_content(); ?>
    </article>
  </div>
</section>