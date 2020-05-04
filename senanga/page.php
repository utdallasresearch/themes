<?php get_header(); ?>

<!-- Page Content -->
<div <?php post_class('content container'); ?>>

    <!-- Content Row -->
    <div class="row">
        <div class="col-sm-8">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1 class="pageTitle"><?php the_title(); ?></h1>
            <section class="pageFeaturedImage">
                <?php the_post_thumbnail('large'); ?>
            </section>
            <section class="pageContent">
                <?php the_content(); ?>
            </section>
        <?php endwhile; endif; ?>
        </div>
        <div class="col-sm-4">
        	<?php get_sidebar(); ?>
        </div>
    </div>

</div>
<!-- /.container -->

<?php get_footer(); ?>
