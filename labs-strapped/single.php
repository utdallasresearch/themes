<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Strapped
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row midsection-flexbox">
			  <div class="col-md-2 left-nav">
          <div class="lh-side-nav">
            <?php get_sidebar('topleft') ?>
            <?php get_sidebar('left') ?>
          </div>
        </div>
			  <div class="col-md-10 midsection">
<?php

    while ( have_posts() ) : the_post();

      get_template_part( 'template-parts/content', get_post_format() );

      the_post_navigation();

      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;

    endwhile; // End of the loop.
    ?>
				</div>
			</div><!-- .row flexy -->
		</main><!-- #main -->

 
        <?php get_footer();?>

