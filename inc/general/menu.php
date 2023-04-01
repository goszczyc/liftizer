<?php
/*************** MENU ***************/
add_action( 'init', 'register_menu' );
function register_menu() {
  register_nav_menus(array(
    'nav-top' => 'Menu Główne',
    'footer-map' => 'Stopka',
    'offer-menu' => 'Oferta',
    'burger-menu' => 'Burger Menu',
  ));
}
?>
