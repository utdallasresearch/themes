<?php

/* Template Name: Subpage */

get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<!-- contents of loop -->
			</article>
	<?php 
	endwhile;
	endif; ?>

	<main id="primary" class="site-main">
		<div class="container">
			<div class="row">
			
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

				endwhile; // End of the loop.
				?>

			</div><!-- .row -->
		</div><!-- .container -->
	</main><!-- main -->

<?php get_footer();

