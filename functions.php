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


// Custom Excerpt wordcount length

function custom_excerpt_wordcount() {
  return 25;
}
add_filter('excerpt_length', 'custom_excerpt_wordcount');
