<?php

get_header();

?>

<main role="main">
  <?php get_template_part('/template-parts/blog-banner'); ?>
  <section class="cookies container">
    <div class="row">
      <div class="col-12 col-md-10 col-lg-8">
      <?= get_the_content(); ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
