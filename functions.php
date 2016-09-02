<?php
/**
 * upward functions and definitions
 *
 * @package upward
 */

if ( ! function_exists( 'upward_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function upward_setup() {

	/**
	* Set the content width based on the theme's design and stylesheet.
	*/
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 640; /* pixels */
	}
  


  // Enable shortcodes in text widgets
add_filter('widget_text','do_shortcode');
  
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on upward, use a find and replace
	 * to change 'upward' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'upward', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

// Enable shortcodes in text widgets
add_filter('widget_text','do_shortcode');
  
 // Register menus 
	register_nav_menus( array(
		'primary' => __( 'Main Menu', 'upward' ),
		'app-primary' => __( 'App Menu', 'upward' ),
		'footer-1' => __( 'Footer 1', 'upward' ),
		'footer-2' => __( 'Footer 2', 'upward' ),
		'footer-3' => __( 'Footer 3', 'upward' ),
		'copyright-links' => __( 'Above Copyright', 'upward' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	 add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	 ) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'upward_custom_background_args', array(
		'default-color' => 'efefef',
		'default-image' => '',
	) ) );
}
endif; // upward_setup
add_action( 'after_setup_theme', 'upward_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function upward_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'upward' ),
		'id'            => 'sidebar-1',
		'description'   => 'This is displayed on page styles with a sidebar on the left or right side.',
		'before_widget' => '<aside id="%1$s" class="widget %2$s"><div class="panel panel-default">',
		'after_widget'  => '</div></aside>',
		'before_title'  => ' <div class="panel-heading"><h3 class="panel-title">',
		'after_title'   => '</h3></div>',
	) );
	register_sidebar( array(
		'name'          => __( 'Below Content', 'upward' ),
		'id'            => 'sidebar-2',
		'description'   => 'This widget area is below the content on all page types but before the footer.',
		'before_widget' => '<section id="%1$s" class="section %2$s"><div class="below-content-widget">',
		'after_widget'  => '</div></section>',
		'before_title'  => ' <div class="section-heading"><h2 class="section-title">',
		'after_title'   => '</h2></div>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 1', 'upward' ),
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s"><div class="footer-widget">',
		'after_widget'  => '</div></aside>',
		'before_title'  => ' <div class="footer-heading"><h3 class="footer-title">',
		'after_title'   => '</h3></div>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 2', 'upward' ),
		'id'            => 'footer-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s"><div class="footer-widget">',
		'after_widget'  => '</div></aside>',
		'before_title'  => ' <div class="footer-heading"><h3 class="footer-title">',
		'after_title'   => '</h3></div>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 3', 'upward' ),
		'id'            => 'footer-3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s"><div class="footer-widget">',
		'after_widget'  => '</div></aside>',
		'before_title'  => ' <div class="footer-heading"><h3 class="footer-title">',
		'after_title'   => '</h3></div>',
	) );
	
}
add_action( 'widgets_init', 'upward_widgets_init' );

/**
  Custom Stylesheet via ACF Fields
**/

function generate_options_css() {
    $upward_dir = get_stylesheet_directory();
    ob_start();  
    require($upward_dir . '/assets/css/custom-style.php'); 
    $css = ob_get_clean(); 
    file_put_contents($upward_dir . '/assets/css/custom-style.css', $css, LOCK_EX); 
}
add_action( 'acf/save_post', 'generate_options_css' ); 

/**
 * Enqueue scripts and styles.
 */
 
 
function upward_scripts() {
	//wp_enqueue_style( 'Material-Icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '', 'all' );

	//wp_enqueue_style( 'roboto-styles', get_template_directory_uri() . '/assets/css/roboto.min.css', array(), '', 'all' );
		
	//wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '', 'all' );

	//wp_enqueue_style( 'material-styles', get_template_directory_uri() . '/assets/css/mdb.min.css', array(), '', 'all' );

	//wp_enqueue_style( 'mwp-ripples-styles', get_template_directory_uri() . '/assets/css/ripples.min.css', array(), '', 'all' );
	
	//wp_enqueue_style( 'default-styles', get_template_directory_uri() . '/assets/css/defaults.css', array(), '', 'all' );

	//wp_enqueue_style( 'upward-style', get_stylesheet_uri() );
	
	//wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array(), '', 'all' );	
	
	//wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), '', 'all' );
	
	//wp_enqueue_script( 'mwp-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '3.3.6', true );

	//wp_enqueue_script( 'mwp-ripples-js', get_template_directory_uri() . '/assets/js/ripples.min.js', array('jquery'), '', true );

	//wp_enqueue_script( 'mwp-material-js', get_template_directory_uri() . '/assets/js/material.min.js', array('jquery'), '', true );

	//wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'upward_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Remove junk in header
 */
//remove_action('wp_head', 'rsd_link'); // Removes the Really Simple Discovery link
remove_action('wp_head', 'wlwmanifest_link'); // Removes the Windows Live Writer link
remove_action('wp_head', 'wp_generator'); // Removes the WordPress version
remove_action('wp_head', 'start_post_rel_link'); // Removes the random post link
//remove_action('wp_head', 'index_rel_link'); // Removes the index page link
remove_action('wp_head', 'adjacent_posts_rel_link'); // Removes the next and previous post links

/**
 * Required plugins
 */

require_once get_template_directory() . '/assets/tgm/upward_plugins.php';


/**
 * Change admin footer message.
 */
function upward_footer_admin () {

echo 'Fueled by the Upward Theme. Designed by <a href="http://upwardinternetmarketing.com/" target="new">Upward Internet Marketing</a>.';

}
add_filter('admin_footer_text', 'upward_footer_admin');

/**
 * Remove footer version in admin.
 */

function upward_footer_version_shh() {
    remove_filter( 'update_footer', 'core_update_footer' ); 
}

add_action( 'admin_menu', 'upward_footer_version_shh' );

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
 * Adds a Walker class for the Bootstrap Navbar.
 */
require get_template_directory() . '/inc/bootstrap-walker.php';

/**
 * Comments Callback.
 */
require get_template_directory() . '/inc/comments-callback.php';