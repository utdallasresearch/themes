<?php 

/**
 * Set up a WP-Admin page for managing turning on and off theme features.
 */
function ganymede_add_options_page() {
	add_theme_page(
		'Theme Options',
		'Theme Options',
		'manage_options',
		'ganymede-options',
		'ganymede_options_page'
	);

	// Call register settings function
	add_action( 'admin_init', 'ganymede_options' );
}
add_action( 'admin_menu', 'ganymede_add_options_page' );


/**
 * Register settings for the WP-Admin page.
 */
function ganymede_options() {
	register_setting( 'ganymede-options', 'ganymede-align-wide', array( 'default' => 1 ) );
	register_setting( 'ganymede-options', 'ganymede-wp-block-styles', array( 'default' => 1 ) );
	register_setting( 'ganymede-options', 'ganymede-editor-color-palette', array( 'default' => 1 ) );
	register_setting( 'ganymede-options', 'ganymede-dark-mode' );
	register_setting( 'ganymede-options', 'ganymede-responsive-embeds', array( 'default' => 1 ) );
}


/**
 * Build the WP-Admin settings page.
 */
function ganymede_options_page() { ?>
	<div class="wrap">
	<h1><?php _e('Gutenberg Starter Theme Options', 'ganymede'); ?></h1>
	<form method="post" action="options.php">
		<?php settings_fields( 'ganymede-options' ); ?>
		<?php do_settings_sections( 'ganymede-options' ); ?>

			<table class="form-table">
				<tr valign="top">
					<td>
						<label>
							<input name="ganymede-align-wide" type="checkbox" value="1" <?php checked( '1', get_option( 'ganymede-align-wide' ) ); ?> />
							<?php _e( 'Enable wide and full alignments.', 'ganymede' ); ?>
							(<a href="https://developer.wordpress.org/block-editor/developers/themes/theme-support/#wide-alignment"><code>align-wide</code></a>)
						</label>
					</td>
				</tr>
				<tr valign="top">
					<td>
						<label>
							<input name="ganymede-editor-color-palette" type="checkbox" value="1" <?php checked( '1', get_option( 'ganymede-editor-color-palette' ) ); ?> />
							<?php _e( 'Enable a custom theme color palette.', 'ganymede' ); ?>
							(<a href="https://developer.wordpress.org/block-editor/developers/themes/theme-support/#block-color-palettes"><code>editor-color-palette</code></a>)
						</label>
					</td>
				</tr>
				<tr valign="top">
					<td>
						<label>
							<input name="ganymede-dark-mode" type="checkbox" value="1" <?php checked( '1', get_option( 'ganymede-dark-mode' ) ); ?> />
							<?php _e( 'Enable a dark theme style.', 'ganymede' ); ?>
							(<a href="https://developer.wordpress.org/block-editor/developers/themes/theme-support/#dark-backgrounds"><code>dark-editor-style</code></a>)
						</label>
					</td>
				</tr>
				<tr valign="top">
					<td>
						<label>
							<input name="ganymede-wp-block-styles" type="checkbox" value="1" <?php checked( '1', get_option( 'ganymede-wp-block-styles' ) ); ?> />
							<?php _e( 'Enable core block styles on the front end.', 'ganymede' ); ?>
							(<a href="https://developer.wordpress.org/block-editor/developers/themes/theme-support/#default-block-styles"><code>wp-block-styles</code></a>)
						</label>
					</td>
				</tr>
				<tr valign="top">
					<td>
						<label>
							<input name="ganymede-responsive-embeds" type="checkbox" value="1" <?php checked( '1', get_option( 'ganymede-responsive-embeds' ) ); ?> />
							<?php _e( 'Enable responsive embedded content.', 'ganymede' ); ?>
							(<a href="https://developer.wordpress.org/block-editor/developers/themes/theme-support/#responsive-embedded-content"><code>responsive-embeds</code></a>)
						</label>
					</td>
				</tr>
			</table>

		<?php submit_button(); ?>
	</form>
	</div>
<?php }


/**
 * Enable alignwide and alignfull support if the ganymede-align-wide setting is active.
 */
function ganymede_enable_align_wide() {

	if ( get_option( 'ganymede-align-wide', 1 ) == 1 ) {
		
		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );
	}
}
add_action( 'after_setup_theme', 'ganymede_enable_align_wide' );


/**
 * Enable custom theme colors if the ganymede-editor-color-palette setting is active.
 */
function ganymede_enable_editor_color_palette() {
	if ( get_option( 'ganymede-editor-color-palette', 1 ) == 1 ) {
		
		// Add support for a custom color scheme.
		add_theme_support( 'editor-color-palette', array(
			array(
				'name'  => __( 'Strong Blue', 'ganymede' ),
				'slug'  => 'strong-blue',
				'color' => '#0073aa',
			),
			array(
				'name'  => __( 'Lighter Blue', 'ganymede' ),
				'slug'  => 'lighter-blue',
				'color' => '#229fd8',
			),
			array(
				'name'  => __( 'Very Light Gray', 'ganymede' ),
				'slug'  => 'very-light-gray',
				'color' => '#eee',
			),
			array(
				'name'  => __( 'Very Dark Gray', 'ganymede' ),
				'slug'  => 'very-dark-gray',
				'color' => '#444',
			),
		) );
	}
}
add_action( 'after_setup_theme', 'ganymede_enable_editor_color_palette' );


/**
 * Enable dark mode if ganymede-dark-mode setting is active.
 */
function ganymede_enable_dark_mode() {
	if ( get_option( 'ganymede-dark-mode' ) == 1 ) {
		
		// Add support for editor styles.
		add_theme_support( 'editor-styles' );
		add_editor_style( 'style-editor-dark.css' );
		
		// Add support for dark styles.
		add_theme_support( 'dark-editor-style' );
	}
}
add_action( 'after_setup_theme', 'ganymede_enable_dark_mode' );


/**
 * Enable dark mode on the front end if ganymede-dark-mode setting is active.
 */
function ganymede_enable_dark_mode_frontend_styles() {
	if ( get_option( 'ganymede-dark-mode' ) == 1 ) {
		wp_enqueue_style( 'ganymededark-style', get_template_directory_uri() . '/css/dark-mode.css' );
	}
}
add_action( 'wp_enqueue_scripts', 'ganymede_enable_dark_mode_frontend_styles' );

/**
 * Enable core block styles support if the ganymede-wp-block-styles setting is active.
 */
function ganymede_enable_wp_block_styles() {

	if ( get_option( 'ganymede-wp-block-styles', 1 ) == 1 ) {
		
		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );
	}
}
add_action( 'after_setup_theme', 'ganymede_enable_wp_block_styles' );


/**
 * Enable responsive embedded content if the ganymede-responsive-embeds setting is active.
 */
function ganymede_enable_responsive_embeds() {

	if ( get_option( 'ganymede-responsive-embeds', 1 ) == 1 ) {
		
		// Adding support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}
}
add_action( 'after_setup_theme', 'ganymede_enable_responsive_embeds' );