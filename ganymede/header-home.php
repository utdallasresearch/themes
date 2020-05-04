<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <header> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ganymede
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<link rel="stylesheet" href="https://use.typekit.net/kfo0bhc.css">
<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<header id="masthead" class="site-header">
	<section id="UTD-NAV" class="primary-links white-back">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav id="site-navigation" class="main-navigation">
						<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ganymede' ); ?></button> -->
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
							) );
						?>
					</nav><!-- #site-navigation -->
				</div><!-- .col-md-12 -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- #UTD-NAV -->
	
	<div class="hero-intro-image short microsite">
		<div class="fullscreen-bg">
			<img alt="" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>">
		</div><!-- .fullscreen-bg -->
	</div><!-- .hero-intro-image short -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="page-title">
							<?php the_title( '<h1 class="microsite">', '</h1>' ); ?>
						</div><!-- .page-title -->
					</div><!-- .col-md-12 -->
				</div><!-- .row -->
			</div><!-- .container -->
	<section class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="#">UT Dallas</a>  »<a href="#">Ganymede Microsite »</a>
				</div><!-- .col-md-12 -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- .breadcrumbs -->
</header><!-- #masthead -->

	<div id="content" class="site-content">

