<?php
/**
 * senanga functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package senanga
 */

// Autoload classes
spl_autoload_register(function($class_name) {
    $prefix = 'Senanga\\';
    $prefix_length = strlen($prefix);

    if (strncmp($prefix, $class_name, $prefix_length) !== 0) { // Only autoload Senanga classes
        return;
    }

    $relative_class = substr($class_name, $prefix_length);
    $filename = get_template_directory() . '/inc/' . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($filename)) {
        include_once $filename;
    }
});

if ( ! function_exists( 'senanga_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function senanga_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on senanga, use a find and replace
	 * to change 'senanga' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'senanga', get_template_directory() . '/languages' );

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
	// register_nav_menus( array(
	// 	'menu-1' => esc_html__( 'Primary', 'senanga' ),
	// ) );
	register_nav_menus([
	    'main-menu' => __( 'Main Menu' ),
	    'secondary-menu' =>_('Secondary Menu'),
	    'footer-menu' =>_('Footer Menu')
	]);

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
	add_theme_support( 'custom-background', apply_filters( 'senanga_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'senanga_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function senanga_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'senanga_content_width', 640 );
}
add_action( 'after_setup_theme', 'senanga_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function senanga_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'senanga' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'senanga' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
  register_sidebar( array(
    'name' => 'Left Footer Area',
    'id' => 'footer-left',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );
register_sidebar( array(
    'name' => 'Right Footer Area',
    'id' => 'footer-right',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'senanga_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function senanga_scripts() {

    wp_enqueue_style( 'senanga-style', get_stylesheet_uri(), [], '1.0.4' );

	wp_enqueue_style( 'animate_css', get_template_directory_uri() . '/css/animate.min.css', [], '3.5.2' );

	wp_enqueue_script( 'senanga-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'senanga-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

    // JS
    wp_enqueue_script( 'jquery_2', get_template_directory_uri() . '/js/jquery.min.js', [], '2.2.3', true );
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', ['jquery_2'], '3.3.7', true );
    wp_enqueue_script( 'waypoints_js', get_template_directory_uri() . '/js/jquery.waypoints.min.js', ['jquery_2'], '4.0.1', true );
    wp_enqueue_script( 'txace_js', get_template_directory_uri() . '/js/scripts.js', ['bootstrap_js', 'waypoints_js'], '1.0', true );
	
}
add_action( 'wp_enqueue_scripts', 'senanga_scripts' );

/**
 * Register custom post types
 */
function senanga_custom_posts()
{
    (new Senanga\CustomPosts\Slide())->register();
}
add_action('init', 'senanga_custom_posts');

/**
 * Register custom filters.
 */
function senanga_custom_filters()
{
    (new Senanga\Filters\CustomArchiveTitle())->register();
}
add_action('init', 'senanga_custom_filters');

function cc_mime_types( $mimes ){
$mimes['svg'] = 'image/svg+xml';
return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

/**
 * Load the Bootstrap navigation walker
 */
require_once get_template_directory() . '/inc/wp_bootstrap_navwalker.php';
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
