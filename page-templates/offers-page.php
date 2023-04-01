<?php
/* Template Name: Oferta */
get_header('sub');
?>

<main>
  <?php get_template_part('/template-parts/offers-banner'); ?>
  <?php get_template_part('/template-parts/section-text-photo'); ?>
  <?php get_template_part('/template-parts/section-offer-contact'); ?>
  <?php get_template_part('/template-parts/section-offer'); ?>
  <?php get_template_part('/template-parts/section-map'); ?>
  <?php get_template_part('/template-parts/section-newsletter'); ?>
  <?php get_template_part('/template-parts/section-contact-info'); ?>
</main>


<?php get_footer(); ?>