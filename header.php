<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php  bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>



<!-- site header -->
  <header class="site-header">
    
      <div class="wrapper">

        <nav class="site-nav">
      
        <?php 

          $args = array(
            'theme_location' => 'header-nav'
          );

        ?>

        <?php wp_nav_menu(  $args  ) ?>
      
        </nav>


    <div class="masthead"><h2><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h2>
        <h3><?php bloginfo('description') ?></h3></div>


    <h3>
    <?php if (is_page(about)) { ?>
    
      This is a great big test of this function!!
    
    <?php } ?>
    </h3>


      </div><!-- /wrapper -->
  </header>
<div class="wrapper">
