<section class="attributes-container">
<div class="attributes grid-container">
  
    <?php if ($attributes_background = get_field('attributes_background', 'options')) : ?>
  
      <div class="attributes__background" style="background-image: url(<?= esc_url($attributes_background); ?>);"></div>
  
    <?php endif; ?>
  
    <?php if ($attributes_text_left = get_field('attributes_text_left', 'options')) : ?>
  
      <div class="attributes__left">
        <?= $attributes_text_left; ?>
      </div>
  
    <?php endif; ?>
  
    <?php if (($attributes_right_heading = get_field('attributes_right_heading', 'options')) && (have_rows('attributes', 'options'))) : ?>
  
      <div class="attributes__right">
  
        <?= $attributes_right_heading; ?>
        
        <?php while (have_rows('attributes', 'options')) : the_row(); ?>
  
          <div class="attributes__attribute">
  
            <?php if ($attribute_icon = get_sub_field('attribute_icon')) : ?>
              <?= wp_get_attachment_image($attribute_icon); ?>
            <?php endif; ?>
  
            <?php if ($attribute_description = get_sub_field('attribute_description')) : ?>
              <?= $attribute_description; ?>
            <?php endif; ?>
  
          </div>
  
        <?php endwhile; ?>
  
      </div>
  
    <?php endif; ?>
</div>

</section>