<?php

   /*
        Template Name: Home
   */

?>
<!-- <?php //get_template_part('header'); ?>

  <div class="main container">
	  <a name='content'></a> 
<?php //get_template_part('loop'); ?>
  </div><!-- main container -->

  <!-- Main Section END ######################################## -->
  
<!--  <?php //get_template_part('footer'); ?>
<script src='/js/jquery-1.11.2.min.js'></script>
			<script src='/js/jquery-ui.min.1.11.3.js'></script>
			<script src='/js/jquery.slides.min.js'></script>
			<script src='/js/bootstrap.min.js'></script>

</body>
</html> -->

<?php
   /*
        Template Name: Sidebar
   */
?>
    <?php get_template_part('header'); ?>
<div class="main container">
  <div class="row">
    <div class="page-header"
    <div class="featured-title featured-image" 
      style="background-image:url(<?= the_post_thumbnail_url('', 'large') ?>)"
    >
    </div>
      <?php get_template_part('loop'); ?>
      <?php
              if(get_post_custom_values('homepage')){
                      $home = get_post_custom_values('homepage');

                      get_template_part($home[0]);
              }
      ?>
  <!--  <?php //get_template_part('sidebar'); ?> -->
   <!--    <div class="sidenav">
        <?php //if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
          <div id="secondary" class="widget-area" role="complementary">
          <?php //dynamic_sidebar( 'sidebar-1' ); ?>
          </div>
      <?php //endif; ?>
      </div> -->
    </div>
  </div>
</div><!-- main container -->

  <!-- Main Section END ######################################## -->
  <!--   #include virtual='/websvcs/shared/sdc.js'--> 

 <?php get_template_part('footer'); ?>
