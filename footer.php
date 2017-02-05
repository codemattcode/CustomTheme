<footer class="site-footer">

  <div class="site-nav">
      
      <?php 

          $args = array(
            'theme_location' => 'footer-nav'
          );

        ?>

        <?php wp_nav_menu(  $args  ) ?>
        
    </div>

  <p><?php bloginfo('name'); ?>
    - &copy; <?php echo date('Y') ?>
  </p>

</footer>

</div><!-- /wrapper -->

<?php wp_footer(); ?>
</body>
</html>
