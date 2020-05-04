<?php
/**
 *
 * @package WordPress
 * @subpackage Callisto
 * @since 1.0.0
 */

?>
    <?php get_template_part('header'); ?>
  <div class="main container">
    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<?php get_template_part('loop'); ?>
<?php
        if(get_post_custom_values('homepage')){
                $home = get_post_custom_values('homepage');

                get_template_part($home[0]);
        }
?>
 <?php get_template_part('sidebar'); ?>
  </div><!-- main container -->

  <!-- Main Section END ######################################## -->
  <!--   #include virtual='/websvcs/shared/sdc.js'-->	

 <?php get_template_part('footer'); ?>
		