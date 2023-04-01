<?php
get_header('sub');
?>

<main>
  <?php get_template_part('/template-parts/blog-banner'); ?>
  <?php get_template_part('/template-parts/blog-article'); ?>
  <?php get_template_part('/template-parts/blog-posts', '', ['number' => 3]); ?>
  
</main>

<?php get_footer(); ?>