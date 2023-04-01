<?php 

/* Template Name: Blog */

get_header('sub');
?>

<main>
  <?php get_template_part('/template-parts/blog-banner'); ?>
  <?php get_template_part('/template-parts/blog-posts'); ?>
  <?php get_template_part('/template-parts/section-newsletter'); ?>
  <?php get_template_part('/template-parts/section-contact-info'); ?>
</main>

<?php get_footer(); ?>