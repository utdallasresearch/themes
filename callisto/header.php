<?php
/**
 *
 * @package WordPress
 * @subpackage Callisto
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
	
	<script src="https://use.typekit.net/kho0qou.js"></script>
	<script>try {Typekit.load( { async: true } );} catch ( e ) {}
	</script>

	<?php 
      $homepage = 'text';
      if(is_front_page()){
        $homepage = 'homepage';
    ?>
	<title>
		<?php bloginfo('name'); ?></title>
	<?php }else{ ?>
	<title>
		<?php the_title();?>-
		<?php bloginfo('name'); ?></title>
	<?php } ?>

	<?php if(get_option( 'extra_css' )){ ?>
	<link rel='stylesheet' type='text/css' href="<?php print get_option('extra_css'); ?>"/>
	<?php } ?>
</head>

<body class='<?php print $homepage; ?>'>
	<header class="branding container">
<div class="branding">
	<?php if ( function_exists( 'the_custom_logo' ) ) { 
		the_custom_logo();
		}
	?> 

	<?php $blog_info = get_bloginfo( 'name' ); ?>
	<?php if ( ! empty( $blog_info ) ) : ?>
		<?php if ( is_front_page() && is_home() ) : ?>
			<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
		<?php else : ?>
			<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
		<?php endif; ?>
	<?php endif; ?>
</div>

	<div class="search">
<!-- 	<?php get_search_form(); ?> -->
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ) ?>">
	<label class="search-field-container">
		<span class="screen-reader-text"><?php _x( 'Search for:', 'label' )?></span>
		<input type="text" class="search-field" placeholder="<?php echo esc_attr_x( 'search for &hellip;', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" />
	</label><button class="search-show" aria-expanded="false"><i class="fa fa-search"></i></button>
</form>
</div>
	</header>
	<div class="container">
		<nav class="navbar navbar-expand-lg">
			<div class="wrapper">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon">Menu</span>
  </button>
			
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<div class="wrapper">
					<?php
						wp_nav_menu([
						    'theme_location' => 'my-custom-menu', 
							'container_class' => 'custom-menu-class',
							'depth' => 2,
							'container' => '',
							'menu_class' => 'nav navbar-nav',
							'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
							'walker' => new WP_Bootstrap_Navwalker(),
						]); 
					?>
				</div>
				</div>


				<!-- 	<div class="searchbox" role="search">
					<form action="/search/" _lpchecked="1">
					<label class="sr-only" id="sitesearch">Search...</label>
					<input value="main" name="s" type="hidden" aria-labelledby="sitesearch">
					<input value="Search UTD" name="q" onclick="this.value=''" type="text" aria-labelledby="sitesearch">
					<button type="submit" aria-label="Submit search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
					</form>
					</div> -->

				</div>
			</div>
		</nav>
	</div>