<?php
   /*
        Template Name: Sidebar
   */
?>
    <?php get_template_part('header'); ?>
    <div class="page-title"><h1 class="container"><?php the_title(); ?></h1></div>
	<div class="main container">
	<div class="row">
	  	<div class="col-8">
		<?php get_template_part('loop'); ?>

		<?php
		        if(get_post_custom_values('homepage')){
		                $home = get_post_custom_values('homepage');

		                get_template_part($home[0]);
		        }
		?>
		</div>
	<div class="col-4">
<!--  <?php //get_template_part('sidebar'); ?> -->
		<div class="sidenav">
				<?php
				// Must be inside a loop. 
				if ( has_post_thumbnail() ) {
				    the_post_thumbnail();
				}
			?>

			<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		    <div id="secondary" class="widget-area" role="complementary">
		    <?php dynamic_sidebar( 'sidebar-1' ); ?>
		    </div>
		<?php endif; ?>
		</div>
	</div>
</div>
</div><!-- main container -->

  <!-- Main Section END ######################################## -->
  <!--   #include virtual='/websvcs/shared/sdc.js'-->	

 <?php get_template_part('footer'); ?>
		