<section class="blog-banner container container--full-hd">
  <div class="row">

    <?php if ($main_heading = get_field('main_heading')) : ?>

      <div class="blog-banner__heading-container col-12 col-sm-10 offset-sm-2 col-lg-8 offset-lg-4" <?php if ($banner_background = get_field('banner_background')) : ?> style="background-image: url('<?= esc_url($banner_background) ?>');" <?php endif; ?>>
        <div class="blog-banner__heading">
          <?= $main_heading; ?>
          <?php get_template_part('/components/contact-button'); ?>
        </div>
      </div>

    <?php endif; ?>

  </div>
</section>