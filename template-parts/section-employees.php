<section class="contact-employees container">
  <div class="row justify-content-center">
    <div class="col-12 col-md-11 col-lg-10 col-xl-8">

      <?php if ($employees_heading = get_field('employees_heading')) : ?>

        <div class="contact-employees__heading">
          <?= $employees_heading; ?>
        </div>

      <?php endif; ?>

      <?php if (have_rows('employees')) : ?>
        <div class="contact-employees__cards">

          <?php
          while (have_rows('employees')) : the_row();
            $employee_photo = get_sub_field('employee_photo');
            $employee_name = get_sub_field('employee_name');
            $employee_position = get_sub_field('employee_position');
            $employee_email = get_sub_field('employee_email');
            $employee_phone = get_sub_field('employee_phone');
          ?>

            <div>
              <div class="contact-employees__employee">
                <div class="contact-employees__employee-photo">
                  <?= wp_get_attachment_image($employee_photo, 'full'); ?>
                </div>
                <h3 class="contact-employees__employee-name"><?= $employee_name; ?></h3>
                <p class="contact-employees__employee-position"><?= $employee_position; ?></p>
                <a href="mailto: <?= $employee_email; ?>" class="contact-employees__employee-email"><?= $employee_email; ?></a>
                <a href="tel: <?= $string = str_replace(' ', '', $employee_phone); ?>" class="contact-employees__employee-phone"><?= $employee_phone; ?></a>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>

</section>