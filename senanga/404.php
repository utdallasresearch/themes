<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package senanga
 */

get_header(); ?>

<div class="container"> 
	<div class="row">
		<div class="col-sm-8">
			<section class="error-404 not-found">
				<header class="page-header">
          <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'senanga' ); ?></h1>
        </header><!-- .page-header -->
        <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'senanga' ); ?></p>
        <?php

            the_widget( 'WP_Widget_Recent_Posts' );

            // Only show the widget if site has multiple categories.
            if ( senanga_categorized_blog() ) :
          ?>

          <div class="widget widget_categories">
            <h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'senanga' ); ?></h2>
            <ul>
            <?php
              wp_list_categories( array(
                'orderby'    => 'count',
                'order'      => 'DESC',
                'show_count' => 1,
                'title_li'   => '',
                'number'     => 10,
              ) );
            ?>
            </ul>
          </div><!-- .widget -->

          <?php
            endif;

            /* translators: %1$s: smiley */
            $archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives.', 'senanga' ), convert_smilies( ':)' ) ) . '</p>';
            the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

            the_widget( 'WP_Widget_Tag_Cloud' );
          ?>

			</section>
			
		</div>
		<div id="sidebar" class="col-sm-4">
			<?php get_sidebar(); ?>
		</div>
		
	</div><!-- .row -->
</div><!-- .container -->
<?php
get_footer();
