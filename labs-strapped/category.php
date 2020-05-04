
<?php
/**
 * The category template file
 *
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
                <h2 class="category-header"><?php single_cat_title(); ?></h2>

         <?php
            while ( have_posts() ) {
              the_post();
              get_template_part( 'template-parts/content', get_post_format() );
            }
          ?>
        </div>
      </div><!-- .row .flexy -->
    </main><!-- #main -->

      <?php get_footer(); ?>

