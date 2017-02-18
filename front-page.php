<?php  
  
get_header();

  if (have_posts()) :
    while (have_posts()) : the_post(); 

  the_content();
?>

<?php if (is_active_sidebar('myWidget')) : ?>
    <div class="widget">
      <?php dynamic_sidebar('myWidget'); ?>
    </div>
    <?php endif; ?>


    this is some more text hard coded in the php file

<?php   
  endwhile;

  else : 
    echo '<p>Page Not Found. Please try again</p>';

  endif; ?>



<?php 

get_footer();

?>



