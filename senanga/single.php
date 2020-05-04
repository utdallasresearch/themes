<?php get_header(); ?>

<!-- Page Content -->
<div <?php post_class('content container'); ?>>
    <!-- Content Row -->
    <div class="row postHeader">
        <div class="col-sm-6 noPadd">
                <section class="postFeaturedImage">
                    <?php the_post_thumbnail('large'); ?>
                </section>
        </div>
        <div class="col-sm-6 postTitle noPadd">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php $my_date = the_date('', '<h2>', '</h2>', FALSE); echo $my_date; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="postContent">
                <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>

</div>
<!-- /.container -->

<?php get_footer(); ?>