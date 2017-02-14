<?php  

/*
Template Name: Special Template
*/ 

  
get_header();

  if (have_posts()) :
    while (have_posts()) : the_post(); 
?>


  <!-- <article class="post page">
       </article> -->
<h1>Template page = 'special-template'</h1>

<h2><?php the_title(); ?></h2>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat.</p>

<p><?php the_content(); ?></p>


<?php   
  endwhile;

  else : 
    echo '<p>Page Not Found</p>';

  endif;


get_footer();

?>


