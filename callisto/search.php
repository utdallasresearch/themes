<?php 
/**
 * Template Name: Search Page
 */

get_header();
?>
<section id="primary" class="container">
		<main id="main" class="site-main">
		<?php
			if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'callisto' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- .page-header -->

			 <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="search-entry"><a href="<?php the_permalink(); ?>"><h3 class="search-post-title"><?php the_title(); ?></h3>
            <span class="search-post-excerpt"><?php the_excerpt(); ?></span></a></div>
 
            <?php endwhile; ?>
 
            <?php the_posts_navigation(); ?>
 
        <?php else : ?>
 
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
 
        <?php endif; ?>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
