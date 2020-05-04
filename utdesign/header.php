<!doctype html>
<html>
<head>

<!--------------------------------------------------
	META
--------------------------------------------------->
<title><?php echo get_bloginfo('title').' | '.get_title_trail();?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

<?php wp_head();?>

</head>
<body <?php body_class() ?>>
<div class="superwrapper">

	<div id="header">
		<div id="mobile-menu">
			<?php
				wp_nav_menu([
					'theme_location'  => 'sitenav',
					'container'       => '',
					'sub-menu'     => 'sub-menu',
				]);
			?>
			<div style="clear:both;"></div>
		</div>
		<div id="top-bar">
			<div class="wrapper-table">
				<div class="row">
					<div class="header-left">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>"></a>
					</div>
					<div class="header-right">
						<?php if (!get_theme_mod('header_image_right_1_hide')): ?>
							<img src="<?= wp_get_attachment_url(get_theme_mod('header_image_right_1')) ?: (get_template_directory_uri() . '/images/jonsson.svg'); ?>">
						<?php endif; ?>
						<?php if (!get_theme_mod('header_image_right_2_hide')): ?>
							<img src="<?= wp_get_attachment_url(get_theme_mod('header_image_right_2')) ?: (get_template_directory_uri() . '/images/utdallas.svg'); ?>" width="150">
						<?php endif; ?>
						<a id="trigger"><i class="fa fa-bars"></i></a>
					</div>
				</div>
			</div>			
		</div>
		<div id="nav">
			<?php
				wp_nav_menu([
					'theme_location'  => 'sitenav',
					'container'       => '',
					'sub-menu'     => 'sub-menu',
				]);
			?>
			<?php if (!get_theme_mod('header_image_right_1_hide')): ?>
				<img src="<?= wp_get_attachment_url(get_theme_mod('header_image_right_1')) ?: (get_template_directory_uri() . '/images/jonsson.svg'); ?>">
			<?php endif; ?>
			<?php if (!get_theme_mod('header_image_right_2_hide')): ?>
				<img src="<?= wp_get_attachment_url(get_theme_mod('header_image_right_2')) ?: (get_template_directory_uri() . '/images/utdallas.svg'); ?>" width="150">
			<?php endif; ?>
		</div>
	</div>
