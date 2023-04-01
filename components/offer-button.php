<button class="offers__offer-contact-btn" data-btnId="<?= $i ?>">

  <?= wp_get_attachment_image(get_field('offer_contact_btn_icon', 90)); ?>

  <?php
  $offer_contact_btn_text_bold = get_field('offer_contact_btn_text_bold', 90);
  $offer_contact_btn_text = get_field('offer_contact_btn_text', 90); ?>

  <?php if ($offer_contact_btn_text_bold) : ?>
    <strong><?= $offer_contact_btn_text_bold; ?> </strong>
  <?php endif; ?>
  <?php if ($offer_contact_btn_text) : ?>
    <?php echo ' '; ?>
    <?= $offer_contact_btn_text; ?>
  <?php endif; ?>
</button>