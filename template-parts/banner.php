<section class="banner-container">
<div class="banner grid-container">
  
    <?php if ($banner_bg = get_field('banner_bg')) : ?>
      <div class="banner__background" style="background-image: url('<?= esc_url($banner_bg); ?>');">
      </div>
    <?php endif; ?>
  
    <?php if ($banner_image = get_field('banner_image')) : ?>
      <div class="banner__image">
        <?= wp_get_attachment_image($banner_image, 'full'); ?>
      </div>
    <?php endif; ?>
  
    <div class="banner__content">
      <?php if ($banner_heading = get_field('banner_heading')) : ?>
        <div class="banner__heading">
          <?= $banner_heading; ?>
        </div>
      <?php endif; ?>
  
      <?php if (($banner_button_text = get_field('banner_button_text')) && $banner_button_link = get_field('banner_button_link')) : ?>
        <a href="<?= $banner_button_link ?>" class="btn btn--primary">
        <?= $banner_button_text; ?>
        <svg id="ŚC__1" class="btn__arrow" data-name="ŚC„[_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 13.67"><defs></defs><polygon class="cls-1" points="12.05 1.11 17.78 6.84 12.05 12.56 13.16 13.67 20 6.84 13.16 0 12.05 1.11"/><rect class="cls-1" y="6.05" width="18.89" height="1.57"/></svg>
      </a>
      <?php endif; ?>
  
      <?php if (($banner_contact_text = get_field('banner_contact_text')) && ($banner_contact_icon = get_field('banner_contact_icon'))) : ?>
        <div class="banner__contact">
          <div class="banner__contact-image">
            <?= wp_get_attachment_image($banner_contact_icon, 'full'); ?>
          </div>
          <div class="banner__contact-text">
            <?= $banner_contact_text; ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
</div>

</section>