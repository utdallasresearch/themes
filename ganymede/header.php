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
<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ganymede' ); ?></a>

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
      </div>
    </div>
  </div>
</section>


	<div class="feature-image">
		<div class="overlay">
	<?php
while ( have_posts() ) : the_post();
    if( has_post_thumbnail() ):
        echo get_the_post_thumbnail();
    endif;  

endwhile; 
?>
</div><!-- .overlay -->
	</div><!-- .feature-image -->

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

