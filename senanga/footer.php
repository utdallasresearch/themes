<?php 

/**
 * The template for displaying the footer
 */

?>
    
  <footer class="footer">
    <div class="container">
      <div class="row footer-sidebar">
        <div class="col-md-4">  
          <div id="footer-left">
          <?php
          if(is_active_sidebar('footer-left')){
          dynamic_sidebar('footer-left');
          }
          ?>
          </div>
        </div><!-- col-md-4 --> 
        <div class="col-md-8">
          <div id="footer-right" >
          <?php
          if(is_active_sidebar('footer-right')){
          dynamic_sidebar('footer-right');
          }
          ?>
          </div>
        </div><!-- col-md-8 -->
      </div><!-- row footer-sidebar -->
    </div><!-- container -->
  </footer>

<?php  wp_footer(); ?>

</body>
</html>