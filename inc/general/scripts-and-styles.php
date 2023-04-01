<?php

function starter_scripts() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', false, NULL, true );
    wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'starter_scripts' );

add_action('wp_enqueue_scripts', 'load_styles_and_scripts');

function load_styles_and_scripts() {
  wp_enqueue_style('style-main', get_template_directory_uri() . '/stylesheets/screen.css', array(), '2.1.5', 'all');
  wp_enqueue_script('main', get_template_directory_uri().'/js/theme.js', false, '1.5.1', true);
}

?>
