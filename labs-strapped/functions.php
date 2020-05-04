<?php
/**
 * Strapped functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Labs Strapped
 */

if ( ! function_exists( 'labs_strapped_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function labs_strapped_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Strapped, use a find and replace
	 * to change 'strapped' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'labs-strapped', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
  add_theme_support( 'post-thumbnails' );

  // Load default block styles.
  add_theme_support('wp-block-styles');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'main-menu' => esc_html__( 'Main Menu', 'main-menu' ),
    'footer' => esc_html__('Footer', 'footer-menu'),

	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'strapped_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'labs_strapped_setup' );

/**
 * Load the Bootstrap navigation walker
 */
require_once get_template_directory() . '/inc/wp_bootstrap_navwalker.php';

/**
 * Defines the sidebars.
 */
function my_custom_sidebar() {

  register_sidebar(
        array (
            'name' => __( 'Bottom Left Sidebar', 'labs-strapped' ),
            'id' => 'sidebar-left',
            'description' => __( 'Left', 'labs-strapped' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
            'description'   => esc_html__('Add widgets here. Use Image (Jetpack) to add a sidebar image.', 'labs-strapped-theme'),
        )
    ); 

  register_sidebar(
        array (
            'name' => __( 'Top Left Sidebar', 'labs-strapped' ),
            'id' => 'sidebar-topleft',
            'description' => __( 'Left Navigation Sidebar', 'labs-strapped' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
            'description'   => esc_html__('Add widgets here. Use Image (Jetpack) to add a sidebar image.', 'labs-strapped-theme'),
        )
    );
  
}
add_action( 'widgets_init', 'my_custom_sidebar' );

/**
 * ????
 * @param  [type] $instance     [description]
 * @param  [type] $new_instance [description]
 * @return [type]               [description]
 */
function labs_strapped_save_menu_description_option( $instance, $new_instance ) {
 
    // Is the instance a nav menu and are descriptions enabled?
    if ( isset( $new_instance['jetpack-image-contai'] ) && !empty( $new_instance['description'] ) ) {
        $new_instance['description'] = 1;
    }
 
    return $new_instance;
}
add_filter( 'widget_update_callback', 'labs_strapped_save_menu_description_option', 10, 2 );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function strapped_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'labs_strapped_content_width', 640 );
}
add_action( 'after_setup_theme', 'strapped_content_width', 0 );

/**
 * Add a custom menu to no sidebar template.
 */

function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'my-custom-menu' => __( 'My Custom Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );

/**
 * Enqueue scripts and styles.
 */
function labs_strapped_theme_scripts()
{
  /* If using a child theme, auto-load the parent theme style. */
  if (is_child_theme()) {
    wp_enqueue_style('parent-style', trailingslashit(get_template_directory_uri()) . 'style.css');
  }

  wp_enqueue_style('labs-strapped-style', get_stylesheet_uri(), [], '1.0.1');

  wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', ['jquery'], '3.3.7', true);

  wp_enqueue_script('labs-strapped-navigation', get_template_directory_uri() . '/js/navigation.js', [], '2017_06_15', true);

  wp_enqueue_script('labs-strapped-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', [], '20151215', true);

  wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Rubik:300,400,500,700" rel="stylesheet', false );

  wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet', false  );

  if (is_singular() && comments_open() && get_option( 'thread_comments' )) {
    wp_enqueue_script('comment-reply');
  }
}
add_action('wp_enqueue_scripts', 'labs_strapped_theme_scripts');

function my_customize_register() {     
global $wp_customize;
$wp_customize->remove_panel( 'colors' );  //Modify this line as needed  
} 

add_action( 'customize_register', 'my_customize_register', 11 );

/**
 * Widgets
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
