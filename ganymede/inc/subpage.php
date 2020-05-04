<?php

/* Template Name: Subpage */

get_header('home'); ?>
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

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
</div>
	</div>

	</main><!-- #primary -->
<?php
get_footer();
