<?php
function register_offer_post_type(){

  $labels = array(
    'name'                  => _x( 'Oferty', 'Post type general name', 'textdomain' ),
    'singular_name'         => _x( 'Oferta', 'Post type singular name', 'textdomain' ),
    'menu_name'             => _x( 'Oferta', 'Admin Menu text', 'textdomain' ),
    'name_admin_bar'        => _x( 'Ofertę', 'Add New on Toolbar', 'textdomain' ),
    'add_new_item'          => __( 'Dodaj nową ofertę', 'textdomain' ),
    'new_item'              => __( 'Nowa Oferta', 'textdomain' ),
    'edit_item'             => __( 'Edytuj ofertę', 'textdomain' ),
    'view_item'             => __( 'Zobacz ofertę', 'textdomain' ),
    'all_items'             => __( 'Wszystkie Oferty', 'textdomain' ),
    'search_items'          => __( 'Szukaj Oferty', 'textdomain' ),
    'parent_item_colon'     => __( 'Rodzic Oferty:', 'textdomain' ),
    'not_found'             => __( 'Oferty nie znalezione.', 'textdomain' ),
    'not_found_in_trash'    => __( 'Nie ma żadnych Ofert w koszu.', 'textdomain' ),
    'featured_image'        => _x( 'Okładka Ofert', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
    'set_featured_image'    => _x( 'Ustaw okładkę Ofert', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
    'remove_featured_image' => _x( 'Usuń okładkę Ofert', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
    'archives'              => _x( 'Archiwum Ofert', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
    'insert_into_item'      => _x( 'Wprowadź do Ofert', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
    'uploaded_to_this_item' => _x( 'Uaktualnij ofertę', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
    'filter_items_list'     => _x( 'Filtruj listę Ofert', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
    'items_list_navigation' => _x( 'Menu Listy Ofert', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
    'items_list'            => _x( 'Lista Ofert', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'offer' ),
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => null,
    'show_in_menu'        => TRUE,
    'show_in_nav_menus'   => TRUE,
    'show_in_rest' => true,
    'supports'           => array( 'title', 'editor', 'author', 'thumbnail','excerpt'),
    'menu_icon'          => 'dashicons-car',
  );

  register_post_type( 'offer', $args );
}

add_action('init', 'register_offer_post_type');

?>