<section class="contact container">
  <div class="row justify-content-center">

    <?php if ($contact_form_heading = get_field('contact_form_heading')) : ?>

      <div class="contact__heading col-12 col md-11 col-lg-10 col-xl-8">
        <?= $contact_form_heading; ?>
      </div>

    <?php endif; ?>

    <div class="col-12 col md-11 col-lg-10 col-xl-8  contact__form">

      <?= do_shortcode('[contact-form-7 id="192" title="Formularz"]'); ?>

    </div>
  </div>
</section>