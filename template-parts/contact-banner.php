<section class="contact-banner container container--full-hd">
  <div class="row">
    <?php if ($contact_banner_heading = get_field('contact_banner_heading')) : ?>
    <div class="contact-banner__heading col-12 col-sm-10 offset sm-1 col-md-8 offset-md-2">
      <?= $contact_banner_heading; ?>
    </div>
  <?php endif; ?>
  </div>
</section>