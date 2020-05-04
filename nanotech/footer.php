<?php 

/**
 * The template for displaying the footer
 */

?>

</div><!-- .main page container-fluid -->
    
  <footer class="footer">
    <div class="container-fluid">
      <div class="row footer-sidebar">
        <div class="container"><div class="col-md-12">
                  <div id="footer-left">
                  <?php
                  if(is_active_sidebar('footer-left')){
                  dynamic_sidebar('footer-left');
                  }
                  ?>
                  </div>
                </div></div>
      </div>
    </div><!-- container-fluid -->
  </footer>


<?php  wp_footer(); ?>

</body>
</html>