<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package senanga
 */

get_header(); ?>

<div class="container archive-container">
	<div id="primary" class="row content-area">
		<div id="main" class="col-sm-8 archive">

		<?php if ( have_posts() ) : ?>

			<header class="archive-page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php while ( have_posts() ) : the_post(); ?>

			<div class="row">
				<div class="col-sm-12">
					<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
				</div>
			</div>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</div><!-- #main -->

		<div id="sidebar" class="col-sm-4">
			<?php get_sidebar(); ?>
		</div><!-- #sidebar -->

	</div><!-- #primary -->
</div>
<?php
get_footer();
