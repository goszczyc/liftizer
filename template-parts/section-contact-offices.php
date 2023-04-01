<?php if (have_rows('contact_offices')) : ?>

  <section class="offices container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-11 col-lg-10 col-xl-8">

        <?php if ($offices_heading = get_field('offices_heading')) : ?>
          <h2 class="offices__heading"><?= $offices_heading; ?></h2>
        <?php endif; ?>

        <div class="offices__container">

          <?php while (have_rows('contact_offices')) : the_row(); ?>

            <div class="offices__office">
              <?php if ($office = get_sub_field('office')) : ?>
                <?= $office; ?>
              <?php endif; ?>
            </div>

          <?php endwhile; ?>

        </div>

      </div>
    </div>
  </section>

<?php endif; ?>