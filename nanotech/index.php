<?php get_header(); ?>

<!-- Page Content -->
<div <?php post_class('content container'); ?>>

    <div class="row">
        <div class="col-sm-8">
            <!-- Content Row -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="row">
                <article class="col-sm-12 page noPadd">
                    <h1 class="blogTitle"><a href="<?php the_permalink(); ?>" title="view post"><?php the_title(); ?></a></h1>
                    <p class="blogPostDate"><?= get_the_date(); ?></p>
                    <div class="blogFeaturedImage">
                        <?php the_post_thumbnail('medium'); ?>
                    </div>
                    <div class="blogContent">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            </div>
            <?php endwhile; ?>
            <nav class="blogPaginator row" aria-label="Page navigation">
              <ul class="pagination">
                <li>
                  <?php next_posts_link( '<i class="fa fa-chevron-left"></i> Older posts' ); ?>
                </li>
                <li>
                  <?php previous_posts_link( 'Newer posts <i class="fa fa-chevron-right"></i> ' ); ?>
                </li>
              </ul>
            </nav>
            <?php endif;?>
        </div>

        <div class="col-sm-4">
            <?php get_sidebar(); ?>
        </div>
    </div>

</div>
<!-- /.container -->

<?php get_footer(); ?>
