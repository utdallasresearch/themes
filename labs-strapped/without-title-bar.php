<?php

/*
Template Name: Without Title Bar
*/

get_header(); ?>
<!-- <?php echo basename( __FILE__ ); ?> -->
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <div class="row midsection-flexbox">
        <div class="col-md-2 left-nav">
            <div class="lh-side-nav">
              <?php get_sidebar('topleft') ?>
              <?php get_sidebar('left') ?>
            </div>
        </div>
        <div class="col-md-10 midsection index">

        <div class="page-story">
           <?php   while ( have_posts() ) : the_post(); if ( has_post_thumbnail()) {
                  the_post_thumbnail('large');
               }?> <!--Because the_content() works only inside a WP Loop -->

        <div class="entry-content-page">
        <div class="title-bar"><h2><?php the_title(); ?></h2></div>

            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->

    <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>

    <?php ?> 
        </div>
        </div>
      </div><!-- .row .flexy -->
    </main><!-- #main -->
      <?php get_footer();?>
 

 
