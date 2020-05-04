<?php 

 /*
 Template Name: Full Width
 */

 get_header(); ?>

<!-- Page Content -->
<div <?php post_class('content container'); ?>>

    <!-- Content Row -->
    <div class="row">
        <div class="col-sm-12">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
        </div>
    </div>

</div>
<!-- /.container -->

<?php get_footer(); ?>
