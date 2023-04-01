<?php 
$current_language_code = apply_filters( 'wpml_current_language', NULL );
$offer_page_id = ($current_language_code == 'pl')? 90 : 630;

?>

<section class="offer-contact container container--full-hd">
  <div class="row no-gutters">

    <?php if(($offer_contact_text = get_field('offer_contact_text', $offer_page_id)) && ($offer_contact_background = get_field('offer_contact_background', $offer_page_id))): ?>

    <div class="col-12 col-sm-10 offset-sm-2 offer-contact__bg" style="background-image: url('<?= esc_url($offer_contact_background); ?>');">
      <div class="offer-contact__content">
      <?= $offer_contact_text; ?>
      <?php get_template_part('/components/contact-button'); ?>
      </div>
    </div>

    <?php endif; ?>
  </div>
</section>

