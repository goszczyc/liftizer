<section class="offers-banner grid-container">

  <?php if ($main_heading = get_field('main_heading')) : ?>
    <div class="offers-banner__main">
      <div class="offers-banner__main-heading">
        <?= $main_heading; ?>
      </div>
      <?php get_template_part('/components/contact-button'); ?>
    </div>
  <?php endif; ?>

  <?php if ($banner_background_photo = get_field('banner_background_photo')) : ?>
    <div class="offers-banner__image" style="background-image: url('<?= esc_url($banner_background_photo); ?>');"></div>
  <?php endif; ?>

  <?php if ($subheading = get_field('subheading')) : ?>
    <div class="offers-banner__subheading">
      <?= $subheading; ?>
    </div>
  <?php endif; ?>

</section>