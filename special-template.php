<?php  

/*
Template Name: Special Layout
*/ 

  
get_header();

  if (have_posts()) :
    while (have_posts()) : the_post(); 
?>


  <!-- <article class="post page">
       </article> -->

<h2><?php the_title(); ?></h2>

<h5>Template page = 'special-template'</h5>

<p><?php the_content(); ?></p>


<?php   
  endwhile;

  else : 
    echo '<p>Page Not Found</p>';

  endif;


get_footer();

?>


