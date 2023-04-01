<?php

/* Template Name: Strona główna */

get_header();
?>

<main>
  <?php get_template_part('/template-parts/banner'); ?>
  <?php get_template_part('/template-parts/section-attributes'); ?>
  <?php get_template_part('/template-parts/section-offer'); ?>
  <?php get_template_part('/template-parts/section-text-photo'); ?>
  <?php get_template_part('/template-parts/section-map'); ?>
  <?php get_template_part('/template-parts/section-newsletter'); ?>
  <?php get_template_part('/template-parts/section-contact-info'); ?>
</main>

<?php
get_footer();
?>