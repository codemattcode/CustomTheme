

<?php  
  
get_header();

  if (have_posts()) :
    while (have_posts()) : the_post(); 
?>


  <article class="post">
    <h2 class="page-title"><?php the_title(); ?></h2>
    <p class="page-copy"><?php the_content(); ?></p>
  </article>

<?php   
  endwhile;

  else : 
    echo '<p>Page Not Found</p>';

  endif;


get_footer();

?>


