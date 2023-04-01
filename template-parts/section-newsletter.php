<div class="newsletter container">
  <div class="row justify-content-center">
    <div class="col-12 col-md-8 col-lg-6">

      <?php if ($newsletter_heading = get_field('newsletter_heading', 'options')) : ?>
        <div class="newsletter__heading">
          <?= $newsletter_heading; ?>
        </div>
      <?php endif; ?>

      <div class="newsletter__form container">
          <?= do_shortcode('[contact-form-7 id="271" title="Newsletter - formularz"]'); ?>
      </div>
    </div>
  </div>
</div>