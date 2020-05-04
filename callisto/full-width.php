<?php
   /*
        Template Name: Full Width Page
   */
?>
<?php get_template_part('header'); ?>
<div class="page-title"><h1 class="container"><?php the_title(); ?></h1></div>
	<div class="main container">

		<?php get_template_part('loop'); ?>

		<?php
		        if(get_post_custom_values('homepage')){
		                $home = get_post_custom_values('homepage');

		                get_template_part($home[0]);
		        }
		?>
	</div>
</div>

  <!-- Main Section END ######################################## -->
  <!--   #include virtual='/websvcs/shared/sdc.js'-->	

 <?php get_template_part('footer'); ?>
		