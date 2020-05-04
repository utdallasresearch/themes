<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Strapped
 */


get_header();
?>
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
        <div class="col-md-10 midsection index<?= has_post_thumbnail() ? '' : ' no-featured-image' ?>">
          <?php while ( have_posts() ) : the_post(); ?>

           <!-- <div class="no-featured-image"> -->

            <div class="title-bar"><h2><?php the_title(); ?></h2></div>

            <div class="page-story<?= has_post_thumbnail() ? ' entry-featured-image' : '' ?>" >

              <?php if ( has_post_thumbnail()) : ?>
                <?php  the_post_thumbnail(); ?>
              <?php endif; ?>

              <div class="entry-content-page">

                <div class="default-title"><h2><?php the_title(); ?></h2></div>
                <?php the_content(); ?> <!-- Page Content -->

              </div><!-- .entry-content-page -->

            </div>
          <?php endwhile; ?>
        </div><!-- .midsection -->
      </div><!-- .row.midsection-flexbox -->
    </main><!-- #main -->

<?php wp_reset_query(); ?>

<?php get_footer();?>

