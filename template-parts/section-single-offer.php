<section class="offer container container--full-hd">
  <div class="row justify-content-center">
    <div class="col-12 col-sm-10 col-md-9 col-lg-8">
      <h1 class="offer__title">
        <?= get_the_title(); ?>
      </h1>
      <div class="offer__description">
        <?= get_the_content(); ?>
      </div>
    </div>
  </div>
  <?php if (have_rows('offer_images')) : ?>
    <div class="row offer__images">
      <div class="col-12 col-md-1 col-lg-3 offer__images-nav"></div>

      <div class="col-12 col-md-11 col-lg-9 offer__slider">
        <?php while (have_rows('offer_images')) :
          the_row();
          $fit_full = get_sub_field('fit_contain');
          ($fit_full) ? $fit_class = ' fit-contain' : $fit_class = '';
        ?>
          <div class="offer__slider-image-container">
            <?php if ($image = get_sub_field('image')) : ?>
              <?= wp_get_attachment_image($image, 'full', '', ['class' => 'offer__slider-image' . $fit_class]); ?>
            <?php endif; ?>
          </div>
        <?php endwhile; ?>
      </div>

    </div>
  <?php endif; ?>
</section>

<?php get_template_part('/template-parts/section-text-photo'); ?>

<div class="offer padding-reset contaier cotnainer--full-hd">
  <div class="offer__form">
    <?= do_shortcode('[contact-form-7 id="80" title="Formularz oferty"]'); ?>
  </div>
</div>