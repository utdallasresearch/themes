<?php

/*======================================================================
	Autoload theme classes
----------------------------------------------------------------------*/
spl_autoload_register(function ($class_name) {
	$namespace = 'UTDesignTheme\\';
	$namespace_length = strlen($namespace);

	// Only load UTDesignTheme classes
	if (strncmp($namespace, $class_name, $namespace_length) !== 0) {
		return;
	}

	$relative_class = substr($class_name, $namespace_length);
	$filename = get_template_directory() . '/includes' . '/' . str_replace('\\', '/', $relative_class) . '.php';

	if (file_exists($filename)) {
		include_once $filename;
	}
});

/*======================================================================
	Wordpress wp_head Cleaner
----------------------------------------------------------------------*/
remove_action('wp_head', 'wp_generator'); 						/* WordPress generator meta tag */
remove_action('wp_head', 'rsd_link');							/* Really Simple Discovery */
remove_action('wp_head', 'wlwmanifest_link');					/* Windows Live Writer */
remove_action('wp_head', 'start_post_rel_link');				/* Post Relational Links - Start */
remove_action('wp_head', 'index_rel_link');						/* Post Relational Links - Index */
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');	/* Post Relational Links - Previous and Next */
remove_action('wp_head', 'wp_shortlink_wp_head');				/* Post shortlinks */
remove_action('wp_head', 'rel_canonical');						/* Canonical links */
remove_action('wp_head', 'feed_links');							/* Post and Comment Feed */
remove_action('wp_head', 'feed_links_extra');					/* Other feeds, for example category feeds */
remove_action('wp_head', 'print_emoji_detection_script');		/* Emoji scripts */
remove_action('wp_head', 'rest_output_link_wp_head');			/* REST API */
remove_action('wp_head', 'wp_oembed_add_discovery_links');		/* oEmbed tags */
remove_action('wp_head', 'wp_oembed_add_host_js');				/* oEmbed scripts */
remove_action('wp_head', 'wp_resource_hints');					/* Resource hints */


/*======================================================================
	Remove Wordpress Emoji Support (Front-End)
----------------------------------------------------------------------*/
function myg_remove_emoji(){
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('admin_print_styles', 'print_emoji_styles');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_filter('the_content_feed', 'wp_staticize_emoji');
	remove_filter('comment_text_rss', 'wp_staticize_emoji');
	remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
	add_filter('tiny_mce_plugins', 'myg_remove_tinymce_emoji');
}
add_action('init', 'myg_remove_emoji');


/*======================================================================
	Remove Wordpress Emoji Support (Back-End)
----------------------------------------------------------------------*/
function myg_remove_tinymce_emoji($plugins){
	if(!is_array($plugins)){
		return array();
	}
	return array_diff($plugins, array('wpemoji'));
}


/*======================================================================
	Wordpress Title
----------------------------------------------------------------------*/
function get_title_trail(){
	if(is_front_page()){
		return get_bloginfo('description');
	}
	elseif(is_home()){
		$blog = get_post(get_option('page_for_posts'));
		return apply_filters('the_title', $blog->post_title);
	}
	elseif(is_page() || is_single()){
		return get_the_title();
	}
	elseif(is_404()){
		return 'Page not found';
	}
	else{
		return get_bloginfo('description');
	}
}

/**
 * Registers CSS/JS scripts for the theme.
 *
 * @return void
 */
function utdesign_register_scripts()
{
	$version = wp_get_theme()->version;

	wp_enqueue_style('utdesign-base-style', get_stylesheet_uri(), [], $version);
	wp_enqueue_style('utdesign-carousel-style', get_template_directory_uri() . "/css/owl.carousel.css", [], $version);
	wp_enqueue_style('utdesign-fontawesome-style', get_template_directory_uri() . "/css/style-fontawesome.css", [], $version);
	wp_enqueue_style('utdesign-ionicons-style', get_template_directory_uri() . "/css/style-ionicons.css", [], $version);
	wp_enqueue_style('utdesign-responsive-style', get_template_directory_uri() . "/style-responsive.css", [], $version);
	wp_enqueue_script('adobe-fonts', 'https://use.typekit.net/wah8fvr.js');
	wp_add_inline_script('adobe-fonts', "try{Typekit.load({async: true});}catch(e){}");

	wp_enqueue_script("utdesign-carousel", get_template_directory_uri() . "/script/owl.carousel.js", ["jquery"], '2.2.1', true);
	wp_enqueue_script("utdesign-waypoints", get_template_directory_uri() . "/script/jquery.waypoints.js", ["jquery"], '2.0.3', true);
	wp_enqueue_script("utdesign-counterup", get_template_directory_uri() . "/script/jquery.counterup.js", ["jquery"], '1.0', true);
	wp_enqueue_script("utdesign-functions", get_template_directory_uri() . "/script/jquery.functions.js", ["jquery", "utdesign-waypoints", "utdesign-counterup"], '1.0.0', true);

	if (is_page_template('templates/projects_filter.php')) {
		wp_enqueue_style('utdesign-projects-style', get_template_directory_uri() . "/css/style-projects.css", [], '1.0.0');
		wp_enqueue_script('utdesign-projects-filter', get_template_directory_uri() . "/script/projects.js", ["jquery"], '1.0.0', true);
	}
}
add_action('wp_enqueue_scripts', 'utdesign_register_scripts');

/**
 * Registers theme features.
 * 
 * @return void
 */
function utdesign_register_theme_support()
{
	add_theme_support( 'post-thumbnails' ); 
	add_image_size( 'custom-size', 220, 180, true );

	// Header image
	add_theme_support('custom-header', [
		'default-image'          => get_template_directory_uri() . '/images/utdesign.svg',
		'width'                  => 200,
		'flex-height'            => true,
		'flex-width'             => true,
	]);

	add_theme_support('wp-block-styles');

	add_theme_support('align-wide');

	// Add support for responsive embeds.
	add_theme_support('responsive-embeds');

	// Jetpack plugin features
	if (defined('JETPACK__VERSION')) {
		// Add theme support for Responsive Videos.
		add_theme_support('jetpack-responsive-videos');
	}
}
add_action('after_setup_theme', 'utdesign_register_theme_support');


/**
 * Registers navigation menus.
 *
 * @return void
 */
function utdesign_register_nav_menus()
{
	register_nav_menus([
		'sitenav' => __('Site Navigation'),
	]);
}
add_action('after_setup_theme', 'utdesign_register_nav_menus');

/**
 * Registers widget areas.
 *
 * @return void
 */
function utdesign_register_widget_areas()
{
	register_sidebar([
		'name'          => 'Sidebar',
		'id'            => 'page_sidebar',
		'before_widget' => '<div class="sidebar-section" id="sidebar">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="sidebar-title">',
		'after_title'   => '</h2>',
	]);
	register_sidebar([
		'name'          => 'Footer 1',
		'id'            => 'footer_1',
		'before_widget' => '<div class="footer-section">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="footer-title">',
		'after_title'   => '</h2>',
	]);
	register_sidebar([
		'name'          => 'Footer 2',
		'id'            => 'footer_2',
		'before_widget' => '<div class="footer-section">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="footer-title">',
		'after_title'   => '</h2>',
	]);
	register_sidebar([
		'name'          => 'Footer 3',
		'id'            => 'footer_3',
		'before_widget' => '<div class="footer-section">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="footer-title">',
		'after_title'   => '</h2>',
	]);
	register_sidebar([
		'name'          => 'Footer 4',
		'id'            => 'footer_4',
		'before_widget' => '<div class="footer-section">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="footer-title">',
		'after_title'   => '</h2>',
	]);
}
add_action('widgets_init', 'utdesign_register_widget_areas');

/**
 * Register theme customizations.
 */
(new UTDesignTheme\Customizer())->register();

/**
 * Registers custom post types.
 *
 * @return void
 */
function utdesign_register_my_cpts()
{
	/**
	 * Post Type: Statistics.
	 */
	register_post_type("stats", [
		"label" => __("Statistics", "custom-post-type-ui"),
		"labels" => [
			"name" => __("Statistics", "custom-post-type-ui"),
			"singular_name" => __("Statistic", "custom-post-type-ui"),
		],
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => ["slug" => "stats", "with_front" => true],
		"query_var" => true,
		"supports" => ["title", "editor", "thumbnail"],
	]);

	/**
	 * Post Type: FAQs.
	 */
	register_post_type("faqpost", [
		"label" => __("FAQs", "custom-post-type-ui"),
		"labels" => [
			"name" => __("FAQs", "custom-post-type-ui"),
			"singular_name" => __("FAQ", "custom-post-type-ui"),
		],
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => ["slug" => "faqpost", "with_front" => true],
		"query_var" => true,
		"supports" => ["title", "editor", "thumbnail"],
	]);

	/**
	 * Post Type: Projects.
	 */
	register_post_type("project", [
		"label" => __("Projects", "custom-post-type-ui"),
		"labels" => [
			"name" => __("Projects", "custom-post-type-ui"),
			"singular_name" => __("Project", "custom-post-type-ui"),
		],
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => ["slug" => "project", "with_front" => true],
		"query_var" => true,
		"supports" => ["title", "editor", "thumbnail"],
	]);
}
add_action('init', 'utdesign_register_my_cpts');
