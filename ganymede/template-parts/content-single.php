
    <?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ganymede
 */

?>
<div class="container">
	<div class="row flex-center">
		<div class="col-sm-8">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<div class='single-featured' <?php if (has_post_thumbnail()) : ?> style="background-image:url(<?= get_the_post_thumbnail_url('', 'medium') ?>)" <?php endif; ?>>
					</div><!-- .single-featured -->
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php
						the_content( sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ganymede' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							get_the_title()
						) );

						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ganymede' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->
		</div>
	</div>
</div>


	<footer class="entry-footer">
		<?php ganymede_entry_footer(); ?>
	</footer><!-- .entry-footer -->
