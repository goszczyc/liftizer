<?php if (($contact_button_text = get_field('contact_button_text', 'options')) && ($contact_button_icon = get_field('contact_button_icon', 'options'))) : ?>
  <div class="contact-button">
    <div class="contact-button__image">
      <?= wp_get_attachment_image($contact_button_icon, 'full'); ?>
    </div>
    <div class="contact-button__text">
      <?= $contact_button_text; ?>
    </div>
  </div>
<?php endif; ?>