<?php
$banner_background = get_field('banner_background');
$banner_heading = get_field('banner_heading');
$offer_page_id = 90;
$lang_code = ICL_LANGUAGE_CODE;
if($lang_code == 'pl') $offer_page_id;
?>

<section class="offer-banner container container--full-hd" style="background-image: url('<?= $banner_background; ?>');">
  <div class="row justify-content-center">
    <div class="col-12 col-sm-10 col-md-9 col-lg-8">
      <div class="offer-banner__heading">
        <?= $banner_heading; ?>
      </div>
      <?php get_template_part('/components/contact-button'); ?>

      <a href="<?= esc_url(get_permalink($offer_page_id)); ?>" class="btn btn--rect"><img src="<?= get_template_directory_uri(); ?>/images/arrow2.svg" alt=""> <?php _e('Return to offer', 'liftizer'); ?></a>
    </div>
  </div>
</section>