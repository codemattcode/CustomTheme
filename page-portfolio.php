

<?php  
  
get_header();

  if (have_posts()) :
    while (have_posts()) : the_post(); 
?>

<!-- 
  <article class="post page">
    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p>
  </article>
 -->

<div class="row">
  <div class="col-6">
    <h2><?php the_title(); ?></h2>
  </div>
 
  <div class="col-6 test">
    <p><?php the_content(); ?></p>
  </div>
</div>



<?php   
  endwhile;

  else : 
    echo '<p>Page Not Found</p>';

  endif;


get_footer();

?>


