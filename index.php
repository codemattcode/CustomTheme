

<?php  
  
get_header();

  if (have_posts()) :
    while (have_posts()) : the_post(); 
?>


<article class="post">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

  <div class="row">
    <div class="col-6">
<!-- add feature image thumbnail -->
    <?php the_post_thumbnail('small-thumbnail'); ?>
</div> 
    <div class="col-6">
    <p><?php echo get_the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>">Read More &raquo;</a>
    </p>
    </div>     
  </div><!-- /row  -->
</article>

<?php   
  endwhile;

  else : 
    echo '<p>Page Not Found</p>';

  endif;


get_footer();

?>


