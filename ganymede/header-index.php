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
<body <?php body_class(); ?>>
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
		</section><!-- .primary-links -->

		<section id="UTD-NAV" class="audience-links">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul>
							<li><a href="/current/">Students</a></li>
							<li><a href="/faculty/">Faculty &amp; Staff</a></li>
							<li><a href="/alumni/">Alumni &amp; Friends</a></li>
							<li><a href="/visitors/">Visitors &amp; Family</a></li>
						</ul>
					</div><!-- .col-md-12 -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .audience-links -->
		
	
		
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

