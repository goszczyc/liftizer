<!DOCTYPE html>
<?php $language_code = apply_filters('wpml_current_language', null); ?>
<html lang="<?= $language_code; ?>">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Meta Pixel Code -->
  <script>
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '<?= FB_PIXEL_ID; ?>');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?= FB_PIXEL_ID; ?>&ev=PageView&noscript=1" /></noscript>
  <!-- End Meta Pixel Code -->
  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <header class="header">
    <div class="header__content container">

      <?php if ($header_logo = get_field('header_logo', 'options')) : ?>
        <a href="<?= home_url(); ?>" class="header__logo"><?= wp_get_attachment_image($header_logo, 'full'); ?></a>
      <?php endif; ?>

      <button class="header__burger">
        <div class="header__burger-bar"></div>
      </button>

      <nav class="header__menus">

        <?php
        wp_nav_menu($args = array(
          'menu' => 2,
          'menu_class' => 'header__main-menu'
        ));
        ?>
        <button class="language-selector">
          <?php language_current(); ?>
          <ul class="language-selector__list">
            <?php language_selector(); ?>
          </ul>
        </button>
      </nav>
    </div>
  </header>