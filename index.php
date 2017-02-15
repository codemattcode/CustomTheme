

<?php  
  
get_header();

  if (have_posts()) :
    while (have_posts()) : the_post(); 
?>


<article class="post">
<div class="row">
    <div class="col-6">
<!-- add post title link / title -->
    <h2><a class="post-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<!-- add feature image thumbnail -->
    
    <div class="f-image"><?php the_post_thumbnail('small-thumbnail'); ?></div>
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


