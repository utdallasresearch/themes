<?php
/**
 *
 * @package WordPress
 * @subpackage Callisto
 * @since 1.0.0
 */

?>
    <?php get_template_part('header');?>

<div class="main container">

<div role='main'>
	<div class='row'>
		<div class='col-sm-8'>

<?php
   while (have_posts()) : the_post();
   		print '<h2>' . get_the_title() . '</h2>';
         the_content();
   endwhile;
?>
	</div>
	<div class='col-sm-4'>
			
				<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
					<ul id="sidebar" style='margin-top: 45px;'>
						<?php dynamic_sidebar( 'primary-widget-area' ); ?>
					</ul>
				<?php endif; ?>
	</div>
</div>
</div>


  </div><!-- main container -->

 <?php get_template_part('footer');?>
		