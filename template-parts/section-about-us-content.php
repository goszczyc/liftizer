<section class="about-us">
  <div class="about-us__headings container">
    <div class="row">

      <?php if ($about_us_heading = get_field('about_us_heading')) : ?>

        <div class="col-12 col-sm-10 col-md-6 col lg-4">
          <?= $about_us_heading; ?>
        </div>

      <?php endif; ?>

    </div>

    <div class="row">

      <?php if (($about_us_subheading_1 = get_field('about_us_subheading_1')) && ($about_us_subheading_2 = get_field('about_us_subheading_2'))) : ?>

        <div class="col-12 col-md-6 col-lg-4"><?= $about_us_subheading_1; ?></div>
        <div class="col-12 col-md-6 col-lg-4"><?= $about_us_subheading_2; ?></div>

      <?php endif; ?>

    </div>



  </div>

  <div class="about-us__content container container--full-hd">
    <div class="row">

      <?php if ($about_us_image_bar = get_field('about_us_image_bar')) : ?>
        <div class="about-us__image-bar col-11 col-md-10" style="background-image: url('<?= $about_us_image_bar; ?>')">
        </div>
      <?php endif; ?>

      <?php if ($about_us_text = get_field('about_us_text')) : ?>
        <div class="about-us__text col-10 offset-1 col-md-5 col-lg-4 offset-lg-2">
          <?= $about_us_text; ?>
        </div>
      <?php endif; ?>

      <?php if ($about_us_image = get_field('about_us_image')) : ?>
        <div class="about-us__image col-12 col-md-5 offset-md-1 col-lg-5" style="background-image: url('<?= $about_us_image; ?>');">

          <?php if ($about_us_image_description = get_field('about_us_image_description')) : ?>
            <div class="about-us__image-description">
              <?= $about_us_image_description; ?>
            </div>
          <?php endif; ?>

        </div>
      <?php endif; ?>

    </div>
  </div>
  <div class="about-us__info grid-container">

    <?php if (($about_us_contact_text = get_field('about_us_contact_text')) && ($about_us_contact_background = get_field('about_us_contact_background'))) : ?>

      <div class="about-us__info-contact-bg" style="background-image: url('<?= esc_url($about_us_contact_background); ?>');">
        <div class="about-us__info-contact-content">
          <?= $about_us_contact_text; ?>
          <?php get_template_part('/components/contact-button'); ?>
        </div>
      </div>

    <?php endif; ?>

    <div class="about-us__info-bg"></div>

    <?php if ($about_us_info_heading = get_field('about_us_info_heading')) : ?>
      <div class="about-us__info-heading">
        <?= $about_us_info_heading; ?>
      </div>
    <?php endif; ?>

    <?php if ($about_us_info_text = get_field('about_us_info_text')) : ?>
      <div class="about-us__info-text">
        <?= $about_us_info_text; ?>
      </div>
    <?php endif; ?>


  </div>



</section>