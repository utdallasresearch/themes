<?php
/**
 *
 * @package WordPress
 * @subpackage Callisto
 * @since 1.0.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			while ( have_posts() )
			{
			    the_post();
			    get_template_part( 'content', get_post_format() );
			    ?></li>
			    <?php
			}
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
