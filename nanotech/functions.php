<?php
/**
 * nanotech functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nanotech
 */

// Autoload classes
spl_autoload_register(function($class_name) {
    $prefix = 'Nanotech\\';
    $prefix_length = strlen($prefix);

    if (strncmp($prefix, $class_name, $prefix_length) !== 0) { // Only autoload Nanotech classes
        return;
    }

    $relative_class = substr($class_name, $prefix_length);
    $filename = get_template_directory() . '/inc/' . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($filename)) {
        include_once $filename;
    }
});

if ( ! function_exists( 'nanotech_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function nanotech_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on nanotech, use a find and replace
	 * to change 'nanotech' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'nanotech', get_template_directory() . '/languages' );

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
	// 	'menu-1' => esc_html__( 'Primary', 'nanotech' ),
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
	add_theme_support( 'custom-background', apply_filters( 'nanotech_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'nanotech_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nanotech_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nanotech_content_width', 640 );
}
add_action( 'after_setup_theme', 'nanotech_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nanotech_widgets_init() {
	register_sidebar([
		'name'          => esc_html__( 'Sidebar', 'nanotech' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'nanotech' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	]);
	register_sidebar([
		'name' => 'Left Footer Area',
		'id' => 'footer-left',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	]);
	register_sidebar([
		'name' => 'Right Footer Area',
		'id' => 'footer-right',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	]);
}
add_action( 'widgets_init', 'nanotech_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nanotech_scripts() {

	wp_enqueue_style( 'nanotech-style', get_stylesheet_uri(), [], '1.0.5' );

	wp_enqueue_script( 'fontawesome-regular-js', get_template_directory_uri() . '/js/fa-regular.js', [], '20180417', true );
	wp_enqueue_script( 'fontawesome-light-js', get_template_directory_uri() . '/js/fa-light.js', [], '20180417', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

    // JS
    wp_enqueue_script( 'jquery_2', get_template_directory_uri() . '/js/jquery.min.js', [], '2.2.3', true );
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', ['jquery_2'], '3.3.7', true );
    wp_enqueue_script( 'nanotech_js', get_template_directory_uri() . '/js/scripts.js', ['bootstrap_js'], '1.0', true );
	
}
add_action( 'wp_enqueue_scripts', 'nanotech_scripts' );


/* Modify the read more link on the_excerpt() */
function et_excerpt_length($length) {
    return 80;
}
add_filter('excerpt_length', 'et_excerpt_length');
 
/* Add a link  to the end of our excerpt contained in a div for styling purposes and to break to a new line on the page.*/
function excerpt_readmore($more) {
    global $post;
    return '<div class="view-full-post"><a href="'. get_permalink($post->ID) . '" class="view-full-post-btn">read more</a></div>';
}
add_filter('excerpt_more', 'excerpt_readmore');


/* Remove paragraphs that just contain empty spaces */
function remove_empty_tags_recursive ($str, $repto = NULL) {
	$str = force_balance_tags($str);

	//** Return if string not given or empty.
	if (!is_string ($str)|| trim ($str) == '') {
		return $str;
	}
	
	//** Recursive empty HTML tags.
	return preg_replace ('~\s?<p>(\s|&nbsp;)+</p>\s?~', !is_string ($repto) ? '' : $repto, $str);
}
add_filter('the_content', 'remove_empty_tags_recursive', 20, 1);

/* Remove paragraphs that just contain empty spaces from widgets */
remove_filter('widget_text_content', 'wpautop');

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

/**
 * Custom fields for homepage template. Requires ACF plugin.
 */
require get_template_directory() . '/inc/custom-fields.php';
