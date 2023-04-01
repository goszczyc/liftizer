<section class="about-us-banner grid-container">

  <?php if ($main_heading = get_field('main_heading')) : ?>
    <div class="about-us-banner__main">
      <div class="about-us-banner__main-heading">
        <?= $main_heading; ?>
      </div>
      <?php get_template_part('/components/contact-button'); ?>
    </div>
  <?php endif; ?>

  <?php if ($banner_background_photo = get_field('banner_background_photo')) : ?>
    <div class="about-us-banner__image" style="background-image: url('<?= esc_url($banner_background_photo); ?>');"></div>
  <?php endif; ?>
</section>