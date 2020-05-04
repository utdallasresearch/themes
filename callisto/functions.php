
<?php 

add_action( 'wp_enqueue_scripts', 'callisto_styles' );

function callisto_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'callisto_post_thumbnails' );


function callisto_styles() {
    wp_enqueue_style( 'callisto-style', get_template_directory_uri().'/style.css', ['bootstrap-style'], '1.0.1' );
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/css/bootstrap.min.css', [], '4.0.0' );
    wp_enqueue_style( 'jqueryui-style', get_template_directory_uri().'/css/jquery-ui-1.8.16.custom.css', '1.11.3' );
    wp_enqueue_script( 'bootstrap-script', get_stylesheet_directory_uri().'/js/bootstrap.min.js', ['jquery'], '4.0.0', true );
    wp_enqueue_script( 'jqueryui-script', get_stylesheet_directory_uri().'/js/jquery-ui.min.1.11.3.js', ['jquery'], '1.0.1', true );
    wp_enqueue_script( 'jqueryslides-script', get_stylesheet_directory_uri().'/js/jquery.slides.min.js', '1.0.1', true );
    wp_enqueue_script( 'outline-script', get_stylesheet_directory_uri().'/js/outline.js', '1.2.0', true );
}

function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );


add_action('admin_menu', 'wt_tags');

function wt_tags() {

    //create new top-level menu
    add_menu_page('WT Tags', 'WT Tags', 'administrator', __FILE__, 'wt_tags_settings_page' , plugins_url('/images/icon.png', __FILE__) );

    //call register settings function
    add_action( 'admin_init', 'register_wt_tags_settings' );
}


function register_wt_tags_settings() {
    //register our settings
    register_setting( 'wt-tags-settings-group', 'wt_cg_n' );
    register_setting( 'wt-tags-settings-group', 'wt_cg_s' );
    register_setting( 'wt-tags-settings-group', 'extra_css' );

}

function wt_tags_settings_page() {
?>
<div class="wrap">
<h1>Webtrend Tags</h1>

<form method="post" action="options.php">
    <?php settings_fields( 'wt-tags-settings-group' ); ?>
    <?php do_settings_sections( 'wt-tags-settings-group' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Webtrend Tags</th>
        <tr>
            <td>WT cg_n</td>
        <td><input type="text" name="wt_cg_n" value="<?php echo esc_attr( get_option('wt_cg_n') ); ?>" /></td></tr>
        <tr>
                <td>WT cg_s</td>
         <td><input type="text" name="wt_cg_s" value="<?php echo esc_attr( get_option('wt_cg_s') ); ?>" /></td>
        </tr>
        <tr>
            <td>CSS URL</td>
        <td><input type="text" name="extra_css" value="<?php echo esc_attr( get_option('extra_css') ); ?>" />
            <br />

            <em>Example: /websvcs/templates/is/css/is.css </em></td></tr>
    </table>
    
    <?php submit_button(); ?>

</form>
</div>
<?php } ?>

<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

    register_sidebar(
        array(
            'name'          => __( 'Primary Widget Area', 'twentyten' ),
            'id'            => 'primary-widget-area',
            'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyten' ),
            'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

    function my_theme_add_editor_styles() {
        add_editor_style( 'style.css' );
    }

    add_action('init', 'my_theme_add_editor_styles' );

add_filter('acf/settings/remove_wp_meta_box', '__return_false');
?>

<?php
/**register the Basic Cards custome fields*/

if(function_exists("register_field_group"))
{
register_field_group(array (
		'id' => 'acf_basic-cards',
		'title' => 'Basic Cards',
		'fields' => array (
			array (
				'key' => 'field_5b6dbd6a227df',
				'label' => 'Image',
				'name' => 'image',
				'type' => 'image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5b6dbdee227e0',
				'label' => 'Content',
				'name' => 'content',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_5b6dc2063e0e2',
				'label' => 'Image 2',
				'name' => 'image_2',
				'type' => 'image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5b6dc2173e0e3',
				'label' => 'Content 2',
				'name' => 'content_2',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_5b6dc2333e0e4',
				'label' => 'Image 3',
				'name' => 'image_3',
				'type' => 'image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5b6dc24e3e0e5',
				'label' => 'Content 3',
				'name' => 'content_3',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),

		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'basic-cards.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'permalink',
				1 => 'the_content',
				2 => 'excerpt',
				3 => 'custom_fields',
				4 => 'discussion',
				5 => 'comments',
				6 => 'revisions',
				7 => 'slug',
				8 => 'author',
				9 => 'format',
				10 => 'featured_image',
				11 => 'categories',
				12 => 'tags',
				13 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
}

// function callisto_customizer($wp_customize)
// {
//     $wp_customize->add_section('header_image_section', array(
//         'priority' => 65, // after default header
//         'theme_supports' => '',
//         'capability' => 'edit_theme_options',
//         'title' => __('header Logo'),
//         'description' => __('Change or hide the header image.'),
//     ));

//     $wp_customize->add_setting('header_image_hide', [
//         'capability' => 'edit_theme_options',
//     ]);

//     $wp_customize->add_control('header_image_hide_checkbox', [
//         'type' => 'checkbox',
//         'settings'  => 'header_image_hide',
//         'section'   => 'header_image_section',
//         'label' => __('Hide the header logo image'),
//     ]);

//     $wp_customize->add_setting('header_image', [
//         'capability' => 'edit_theme_options',
//     ]);

//     $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'header_image_control', [
//         'label' => __('Current header Logo Image'),
//         'settings'  => 'header_image',
//         'section'   => 'header_image_section',
//         'height' => 100,
//         'width' => 100,
//         'flex_width' => true,
//         'flex_height' => true,
//     ]));
// }
// add_action('customize_register', 'callisto_customizer');

add_theme_support( 'custom-logo' );

function callisto_custom_logo_setup() {
 $defaults = array(
 'height'      => 100,
 'width'       => 400,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'callisto_custom_logo_setup' );

/**
 * Load the Bootstrap navigation walker
 */
/**
 * Register Custom Navigation Walker
 */
function register_navwalker()
{
	require_once get_template_directory() . '/inc/wp_bootstrap_navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

function wpb_widgets_init() {
 
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'wpb' ),
        'id' => 'sidebar-1',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    register_sidebar( array(
        'name' =>__( 'Left Footer Area', 'wpb'),
        'id' => 'sidebar-2',
        'description' => __( 'Appears on the left footer of each template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

        register_sidebar( array(
        'name' =>__( 'Right Footer Area', 'wpb'),
        'id' => 'sidebar-3',
        'description' => __( 'Appears on the right footer of each template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    }
 
add_action( 'widgets_init', 'wpb_widgets_init' );
