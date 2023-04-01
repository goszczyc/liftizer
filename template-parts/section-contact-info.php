<section class="contact-info container container--full-hd" style="background-image: url('<?= esc_url(get_field('contact_info_bg', 'options')); ?>');">
  <?php if (have_rows('contact_social', 'options')) : ?>
    <div class="contact-info__social">
      <?php while (have_rows('contact_social', 'options')) : the_row(); ?>
        <?php
        $link = get_sub_field('contact_social_link');
        $icon = get_sub_field('contact_social_icon'); 
        $url = $link['url'];
        ?>
        <a href="<?= esc_url($url); ?>" class="contact-info__social-link"><?= wp_get_attachment_image($icon, 'full'); ?></a>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>
  <div class="container">
    <div class="row">
      <div class="col-12 col-xs-6 col-md-4">
        <?php
        wp_nav_menu($args = array(
          'menu' => 10,
          'menu_class' => 'contact-info__menu',
          'container' => false
        ));
        ?>
      </div>
      <div class="col-12 col-xs-6 col-md-4">
        <?php
        wp_nav_menu($args = array(
          'menu' => 11,
          'menu_class' => 'contact-info__menu',
          'container' => false
        ));
        ?>
      </div>
      <div class="col-12 col-xs-6 col-md-4">
        <div class="contact-info__address">
          <?php if ($footer_address = get_field('contact_info_address', 'options')) : ?>
            <?= $footer_address; ?>
          <?php endif; ?>
          <?php if ($footer_email = get_field('contact_info_email', 'options')) : ?>
            <?= $footer_email; ?>
          <?php endif; ?>
          <?php if ($footer_phone = get_field('contact_info_phone', 'options')) : ?>
            <?= $footer_phone; ?>
          <?php endif; ?>
          <?php if ($contact_social_heading = get_field('contact_social_heading', 'options')) : ?>
            <h4><?= $contact_social_heading; ?></h4>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>