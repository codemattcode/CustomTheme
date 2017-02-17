

<?php  
  
get_header();

  if (have_posts()) :
    while (have_posts()) : the_post(); 
?>


  <article class="page">

    <!-- add sub nav elements -->

    <div class="about-sub_menu"><?php 
          $args = array(
              'child of' => $post->ID
            );
        ?>
          
    </div>

    <?php wp_list_pages($args); ?>

    <h2 class="page-title"><?php the_title(); ?></h2>
    <div class="page-copy">
    <p><?php the_content(); ?></p>
    </div>
  </article>

<?php   
  endwhile;

  else : 
    echo '<p>Page Not Found</p>';

  endif;


get_footer();

?>


