<?php 
  
  function custom_wp_resources() {

    wp_enqueue_style('style-name', get_stylesheet_uri() );
  }


add_action( 'wp_enqueue_scripts', 'custom_wp_resources' );


// Navigation Menus
register_nav_menus(array(
  'header-nav' => __( 'Header Navigation'),
  'footer-nav' => __( 'Footer Navigation'),
));
