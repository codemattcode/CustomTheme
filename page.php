

<?php  
  
get_header();

  if (have_posts()) :
    while (have_posts()) : the_post(); 
?>

  <div class="row">
    <div class="col-12">
    <article class="page">

    <!-- add sub nav elements -->

    <div class="page-sub_menu">
        <?php 
        
          $args = array(
              'child_of' => get_top_ancestor_id(),
              'title_li' => ''
            );
        ?>
        
        <?php wp_list_pages($args); ?>      
    </div>

    </div><!-- /col-12 -->
    </div><!-- /row -->
    

    <div>
      <h2 class="page-title"><?php the_title(); ?></h2>
    </div>
    
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


