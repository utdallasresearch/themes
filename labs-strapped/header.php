<?php
/**
 * The header for the full width template.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Strapped
 */

$utd_logo_choice = get_theme_mod('header_logo_color', 'orange_on_white');
$utd_logo_file = get_template_directory_uri() . '/media/UTDmono_rev.svg';
if (strpos($utd_logo_choice, 'white_on') !== false) {
    $utd_logo_file = get_template_directory_uri() . '/media/UTDmono_flame.svg';
} elseif (strpos($utd_logo_choice, 'black_on') !== false) {
    $utd_logo_file = get_template_directory_uri() . '/media/UTDmono_black.svg';
}



?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page" class="site">
    <a class="skip-link sr-only screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'labs-strapped' ); ?></a>
    <div class="container flex-box full-width">
      <div class="blog-header">
        <div class="banner-constrain">
            <div class="logo"><a href="http://www.utdallas.edu" title="University of Texas at Dallas" class="brandmark"><img src="<?php echo $utd_logo_file; ?>" class="utd_logo with_header" width="100px" height="auto" alt="UT Dallas Logo"></a></div>
            <div class="lead blog-description"><a href="<?php echo get_bloginfo('url') ?>"><?php echo get_bloginfo( 'name' ) ?></a></div>
        </div><!-- .banner-constrain -->
      </div><!-- .blog-header -->

 

    <div id="content" class="site-content">
