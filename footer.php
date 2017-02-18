<footer class="site-footer">

<!-- conditional logic whether to display this custom content -->

    <?php if (get_theme_mod('ct-footer-callout-display') == "Yes") { ?>
    
        <div class="footer-callout clearfix">
          <div class="footer-callout-image">
            <img src="<?php echo wp_get_attachment_url(get_theme_mod('ct-footer-callout-image')) ?>">
          </div>
        
        <div class="footer-callout-text">
          <h2><a href="<?php echo get_permalink(get_theme_mod('ct-footer-callout-link')) ?>">
          <?php echo get_theme_mod('ct-footer-callout-headline') ?>
          </a></h2>
          <?php echo wpautop(get_theme_mod('ct-footer-callout-text')) ?>
        </div>
        </div></?php>

    <?php } ?>

<!-- /custom content -->

    <nav class="site-nav nav-footer">
      
      <?php 

          $args = array(
            'theme_location' => 'footer-nav'
          );

        ?>

      <?php wp_nav_menu(  $args  ) ?>
        
    </nav>
    
    <div class="copyright">

      <p>
        <?php bloginfo('name'); ?>
      
      - &copy; <?php echo date('Y') ?>
      </p>

    </div>

</footer>

</div><!-- /wrapper -->

<?php wp_footer(); ?>
</body>
</html>
