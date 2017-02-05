<footer class="site-footer">

  <div class="site-nav">
      <ul>
        <?php wp_nav_menu() ?>
      </ul>  
    </div>

  <p><?php bloginfo('name'); ?>
    - &copy; <?php echo date('Y') ?>
  </p>

</footer>

</div><!-- /wrapper -->

<?php wp_footer(); ?>
</body>
</html>
