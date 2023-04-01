<section class="map container container--full-hd cta__item">
  <div class="map__content">

    <?php if ($map_heading_left = get_field('map_heading_left', 'options')) : ?>
      <div class="map__content-left">
        <?= $map_heading_left; ?>
      </div>
    <?php endif; ?>


    <?php if ($map_haeding_right = get_field('map_heading_right', 'options')) : ?>
      <div class="map__content-right">

        <?= $map_haeding_right; ?>

        <?php if (have_rows('map_info', 'options')) : ?>
          <div class="map__content-info">

            <?php while (have_rows('map_info', 'options')) : the_row(); ?>

              <div class="map__content-info-group">
                <p class="map__content-numbers">
                  <span class="map__content-number" data-end="<?= get_sub_field('map_info_number'); ?>"></span>
                  <?php if ($map_info_number_after = get_sub_field('map_info_number_after')) : ?>
                    <?= $map_info_number_after; ?>
                  <?php endif; ?>
                </p>
                <p class="map__content-title">
                  <?= get_sub_field('map_info_title'); ?>
                </p>
              </div>

            <?php endwhile; ?>

          </div>
        <?php endif; ?>

      </div>
    <?php endif; ?>


  </div>
</section>