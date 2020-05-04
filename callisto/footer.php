<?php
/**
 *
 * @package WordPress
 * @subpackage Callisto
 * @since 1.0.0
 */

?>

<a name='footer'></a>
    <footer>
		<div class="container">
		<?php
		if ( is_active_sidebar( 'sidebar-2' ) ) {
			?>
			<div class="row"><div class="col-6 widget-column footer-widget-1">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div>
			<?php
		}
		if ( is_active_sidebar( 'sidebar-3' ) ) {
			?>
			<div class="col-6 widget-column footer-widget-2">
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
			</div>
		</div>
		<?php } ?>
		<div class="footer-credits">
				<p class="footer-copyright">&copy;
					<a href="https://utdallas.edu/">The University of Texas at Dallas</a> ⟩ <a href="<?php //echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
				</p>
		</div>
		</div><!-- .section-inner -->
	</footer><!-- #site-footer -->

		<?php wp_footer(); ?>
	</body>
</html>

		</div>
  </footer>

<?php wp_footer(); ?>
</body>
</html>