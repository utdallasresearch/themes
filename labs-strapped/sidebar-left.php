<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Strapped
 */

// if ( ! is_active_sidebar( 'sidebar-left' ) ) {
// 	return;
// }
?>

<aside id="secondary" class="widget-area" role="complementary">
  <?php get_template_part('template-parts/menu','left'); ?>
	<?php dynamic_sidebar( 'sidebar-left' ); ?>
</aside><!-- #secondary -->
