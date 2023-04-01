<?php if (have_rows('text_image_section')) :
  $i = 0;
  (get_field('first_img_right'))? $i=1 : $i=0;
 ?>

  <section class="text-image container container--full-hd">
    <?php while(have_rows('text_image_section')): 
      the_row(); 
      $fit_contain = get_sub_field('fit_contain');
      $fit_class = '';
      ($fit_contain)? $fit_class = 'fit-contain' : $fit_class = '';
      ?>

    <?php if(($text = get_sub_field('text')) && ($image = get_sub_field('image'))): ?>

     <div class="row no-gutters text-image__row <?php if(!$i==0) echo 'text-image__row--reverse'?>">
       <div class="col-12 col-md-6 text-image__left">

        <?php if($i == 0): ?>

          <div class="text-image__content">
            <?= $text; ?>
          </div>

          <?php else: 
            echo wp_get_attachment_image($image, 'full', '', ['class' => $fit_class]);
          endif; ?>

       </div>
       <div class="col-12 col-md-5 offset-md-1 text-image__right">

       <?php if(!$i == 0): ?>

          <div class="text-image__content">
            <?= $text; ?>
          </div>
          
          <?php else: 
            echo wp_get_attachment_image($image, 'full', '', ['class' => $fit_class]);
          endif; ?>

       </div>
     </div>

    <?php endif; ?>

    <?php 
    $i++; 
    if($i > 1) $i=0;
   endwhile; 
   ?>

  </section>

<?php endif; ?>