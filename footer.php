<footer class="footer container">

  <div class="footer-top">
    <?php if ($footer_logo = get_field('footer_logo', 'options')) : ?>
      <a href="" class="footer__logo"><?= wp_get_attachment_image($footer_logo, 'full'); ?></a>
    <?php endif; ?>
    <?php if (($footer_contact_text = get_field('footer_contact_text', 'options')) && ($footer_contact_icon = get_field('footer_contact_icon', 'options'))) : ?>
      <div class="footer__contact">
        <div class="footer__contact-image">
          <?= wp_get_attachment_image($footer_contact_icon, 'full'); ?>
        </div>
        <div class="footer__contact-text">
          <?= $footer_contact_text; ?>
        </div>
      </div>
    <?php endif; ?>
    <?php if ((have_rows('footer_social', 'options')) && ($footer_social_heading = get_field('footer_social_heading', 'options'))) : ?>
    <?php endif; ?>
  </div>
  <div class="footer__copyrights">
    <?= date('Y'); ?> &copy; Liftizer
  </div>
</footer>

<?php wp_footer(); ?>

<!-- Cookies -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/cookies/divante.cookies.min.js">
</script>
<script>
  window.jQuery.cookie || document.write(
    '<script src="<?php echo get_template_directory_uri(); ?>/cookies/jquery.cookie.min.js"><\/script>')
</script>
<script>
  jQuery(function($) {
    $.divanteCookies.render({
      privacyPolicy: true,
    });
  });
</script>

</body>

</html>