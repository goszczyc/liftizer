<?php
if( function_exists('acf_add_options_page') ) {
  $parent = acf_add_options_page(array(
    'page_title'  => 'Pola powtarzalne',
    'menu_title'  => 'Pola powtarzalne',
    'menu_slug'   => 'repeat',
    'capability'  => 'edit_posts',
    'redirect'    => true
  ));

  acf_add_options_sub_page(array(
    'page_title'  => 'Header',
    'menu_title'  => 'Header',
    'parent_slug'   => $parent['menu_slug'],
  ));

  acf_add_options_sub_page(array(
    'page_title'  => 'Stopka',
    'menu_title'  => 'Stopka',
    'parent_slug'   => $parent['menu_slug'],
  ));

  acf_add_options_sub_page(array(
    'page_title'  => 'Cechy',
    'menu_title'  => 'Cechy',
    'parent_slug'   => $parent['menu_slug'],
  ));

  acf_add_options_sub_page(array(
    'page_title'  => 'Mapa',
    'menu_title'  => 'Mapa',
    'parent_slug'   => $parent['menu_slug'],
  ));

  acf_add_options_sub_page(array(
    'page_title'  => 'Dane kontaktowe',
    'menu_title'  => 'Dane kontaktowe',
    'parent_slug'   => $parent['menu_slug'],
  ));

  acf_add_options_sub_page(array(
    'page_title'  => 'Przycisk Kontakt',
    'menu_title'  => 'Przycisk Kontakt',
    'parent_slug'   => $parent['menu_slug'],
  ));

  acf_add_options_sub_page(array(
    'page_title'  => 'Newsletter',
    'menu_title'  => 'Newsletter',
    'parent_slug'   => $parent['menu_slug'],
  ));

}
?>
