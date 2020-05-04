<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Strapped
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
         <?php
            while ( have_posts() ) {
              the_post();
              get_template_part( 'template-parts/content', get_post_format() );
              echo '<hr class="blog-index-separator">';
            }
          ?>
        </div>
      </div><!-- .row .flexy -->
    </main><!-- #main -->

      <?php get_footer(); ?>
