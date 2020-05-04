<!doctype html>
<html>
<head>

<!--------------------------------------------------
	META
--------------------------------------------------->
<title><?php echo get_bloginfo('title').' | '.get_title_trail();?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

<!--------------------------------------------------
	CSS
--------------------------------------------------->

<!-- Added by 2019 Spring Senior Design Team  --- START --- -->
<link rel="stylesheet" media="all" href="<?php bloginfo('template_url');?>/css/style-projects.css">
<!-- Added by 2019 Spring Senior Design Team  --- END --- -->

<?php wp_head();?>

</head>
<body>
<div class="superwrapper">
	
	<div id="header">
		<div id="mobile-menu">
			<?php
				$defaults = array(
				 'theme_location'  => 'sitenav',
				 'container'       => '',
            	 'sub-menu'     => 'sub-menu',
				 );
				wp_nav_menu( $defaults ); ?>
				<div style="clear:both;"></div>
		</div>
		<div id="top-bar">
			<div class="wrapper-table">
				<div class="row">
					<div class="cell utdesign"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" width="200"></a></div>
					<div class="cell jonsson"><img src="<?php bloginfo('template_url'); ?>/images/jonsson.svg" width="200"></div>
					<div class="cell utd"><img src="<?php bloginfo('template_url'); ?>/images/utdallas.svg" width="150"><a id="trigger"><i class="fa fa-bars"></i></a></div>
				</div>
			</div>			
		</div>
		<div id="nav">
			<?php
				$defaults = array(
				 'theme_location'  => 'sitenav',
				 'container'       => '',
				 'sub-menu'     => 'sub-menu',				
				 );
				wp_nav_menu( $defaults ); ?>
			<img class="show800 utd" src="<?php bloginfo('template_url'); ?>/images/utdallas-white.svg" width="125">
			<img class="show800 jonsson" src="<?php bloginfo('template_url'); ?>/images/jonsson-white.svg" width="160">
		</div>
	</div>
