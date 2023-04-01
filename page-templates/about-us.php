<?php
/* Template Name: O nas */
get_header('sub');
?>

<main>
  <?php get_template_part('/template-parts/about-us-banner'); ?>
  <?php get_template_part('/template-parts/section-about-us-content'); ?>
  <?php get_template_part('/template-parts/section-offer'); ?>
  <?php get_template_part('/template-parts/section-map'); ?>
  <?php get_template_part('/template-parts/section-newsletter'); ?>
  <?php get_template_part('/template-parts/section-contact-info'); ?>
</main>


<?php get_footer(); ?>