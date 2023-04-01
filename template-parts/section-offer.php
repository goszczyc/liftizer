<?php
$args = [
  'post_type' => 'offer',
  'order_by' => 'ID',
  'order' => 'ASC'
];
$query = new WP_Query($args);
if ($query->have_posts()) :
  $i = 01;
?>

  <section class="offers-container container container--full-hd">

    <?php if (!is_page(90)) : ?>

      <div class="offers-nav">
        <button class="offers-nav__button offers-nav__button--prev">
          <div class="offers-nav__button-arrow offers-nav__button-arrow--prev"></div>
        </button>
        <p class="offers-nav__number">
          0<?= $i; ?>
        </p>
        <button class="offers-nav__button offers-nav__button--next">
          <div class="offers-nav__button-arrow offers-nav__button-arrow--next"></div>
        </button>
      </div>

    <?php endif; ?>

    <div class="offers <?php if (!is_page(90)) echo 'offers--slider'; ?>">

      <?php while ($query->have_posts()) : $query->the_post(); ?>

        <div class="offers__offer-container <?php if (is_page(90)) echo 'offers__offer-container--border'; ?>">

          <?php if (is_page(90)) : ?>
            <div class="offers-nav">
              <p class="offers-nav__number">
                0<?= $i; ?>
              </p>
            </div>
          <?php endif; ?>


          <div class="offers__offer" data-index="<?= $i; ?>">

            <h3 class="offers__offer-title">
              <?php the_title(); ?>
            </h3>

            <?php if (get_the_content()) : ?>
              <div class="offers__offer-description">
                <?php the_content(); ?>
              </div>
            <?php endif; ?>

            <?php if (($offer_photo = get_field('offer_photo')) && ($offer_photo_mobile = get_field('offer_photo_mobile'))) : ?>
              <?= wp_get_attachment_image($offer_photo, 'full', '', ['class' => 'offers__offer-img']); ?>
              <?= wp_get_attachment_image($offer_photo_mobile, 'full', '', ['class' => 'offers__offer-img offers__offer-img--mobile']); ?>
            <?php endif; ?>

            <?php if (have_rows('offer_multiple')) : ?>
              <div class="offers__offer-multi-container row">

                <?php while (have_rows('offer_multiple')) : the_row(); ?>
                  <div class="offers__offer-multi col-12 <?php if (get_sub_field('wide_photo')) : echo 'col-sm-6';
                                                          else : echo 'col-xs-6 col-md 3';
                                                          endif; ?>">

                    <?php if ($offer_multi_photo = get_sub_field('offer_multi_photo')) : ?>
                      <?= wp_get_attachment_image($offer_multi_photo, 'full'); ?>
                    <?php endif; ?>

                    <?php if ($offer_multi_text = get_sub_field('offer_multi_text')) : ?>
                      <p><?= $offer_multi_text; ?></p>
                    <?php endif; ?>

                  </div>
                <?php endwhile; ?>

              </div>
            <?php endif; ?>

            <?php if (have_rows('offer_info')) : ?>

              <table class="offers__offer-info">

                <?php while (have_rows('offer_info')) : the_row(); ?>

                  <tr>
                    <td class="offers__offer-info-icon">
                      <?= wp_get_attachment_image(get_sub_field('icon'), 'full'); ?>
                    </td>
                    <td class="offers__offer-info-text">
                      <?= get_sub_field('text'); ?>
                    </td>
                  </tr>
                <?php endwhile; ?>

              </table>

            <?php endif; ?>

            <?php
            // get_template_part('/components/offer-button');
            ?>
            <a href="<?= get_permalink();?>" class="offers__offer-contact-btn"><?php _e('Check offer', 'liftizer') ?></a>
          </div>
        </div>

      <?php $i++;
      endwhile; ?>

    </div>
  </section>
<?php reset_query(); endif; ?>