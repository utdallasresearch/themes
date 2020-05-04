<?php
	/*
		Template Name: Category Page 
	*/

get_template_part('header'); 
$cat = get_post_custom_values('category');
$past_title = get_post_custom_values('past');
?>


 <div class="main container">

<div role='main'>
<?php

   		print '<h2>' . get_the_title() . '</h2>';
        while (have_posts()) : the_post();

        	the_content();
   		endwhile;
								$query = query_posts('cat='.$cat[0].'&orderby=title&order=ASC&posts_per_page=5');
								

								//$query = WP_Query('cat='.$cat[0].'&orderby=title&order=ASC&posts_per_page=-1');
								print "<h3>".$past_title[0]."</h3>";
								while (have_posts()) : the_post();
									$break = $query->current_post;
									print "<div class='col3' style='".count($query)."'><h4>";
										print "<a href=".get_permalink().">";
											the_title();
										print "</a>";
									print "</h4>";
									
									print "</div>";
								endwhile;
							

?>
</div>


  </div><!-- main container -->

  <!-- Main Section END ######################################## -->
  <!--   #include virtual='/websvcs/shared/sdc.js'-->	

 <?php get_template_part('footer'); ?>
		