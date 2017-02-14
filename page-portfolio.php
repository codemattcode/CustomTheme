

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
  <div class="col-12"><h1>'Special Page'</h1></div>
</div>

<div class="row">
  <div class="col-6">
    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p>
  </div>
 
  <div class="col-6 test">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
</div>



<?php   
  endwhile;

  else : 
    echo '<p>Page Not Found</p>';

  endif;


get_footer();

?>


