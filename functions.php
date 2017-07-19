<?php
/**
 * SpriteKit v3 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SpriteKit_v3
 */

if ( ! function_exists( 'spritekit_v3_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function spritekit_v3_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on SpriteKit v3, use a find and replace
	 * to change 'spritekit-v3' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'spritekit-v3', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'spritekit-v3' ),
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
	add_theme_support( 'custom-background', apply_filters( 'spritekit_v3_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );
}
endif;
add_action( 'after_setup_theme', 'spritekit_v3_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function spritekit_v3_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'spritekit_v3_content_width', 640 );
}
add_action( 'after_setup_theme', 'spritekit_v3_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function spritekit_v3_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'spritekit-v3' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'spritekit-v3' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'spritekit_v3_widgets_init' );


// hook into the init action and call custom_post_formats_taxonomies when it fires
add_action( 'init', 'custom_post_formats_taxonomies', 0 );


// create a new taxonomy we're calling 'format'
function custom_post_formats_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Formats', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Format', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Formats', 'textdomain' ),
		'all_items'         => __( 'All Formats', 'textdomain' ),
		'parent_item'       => __( 'Parent Format', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Format:', 'textdomain' ),
		'edit_item'         => __( 'Edit Format', 'textdomain' ),
		'update_item'       => __( 'Update Format', 'textdomain' ),
		'add_new_item'      => __( 'Add New Format', 'textdomain' ),
		'new_item_name'     => __( 'New Format Name', 'textdomain' ),
		'menu_name'         => __( 'Format', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'format' ),
		'capabilities' => array(
			'manage_terms' => '',
			'edit_terms' => '',
			'delete_terms' => '',
			'assign_terms' => 'edit_posts'
		),
		'public' => true,
		'show_in_nav_menus' => false,
		'show_tagcloud' => false,
	);
	register_taxonomy( 'format', array( 'post' ), $args ); // our new 'format' taxonomy
}

// programmatically create a few format terms
function example_insert_default_format() { // later we'll define this as our default, so all posts have to have at least one format
	wp_insert_term(
		'Default',
		'format',
		array(
		  'description'	=> '',
		  'slug' 		=> 'default'
		)
	);
}
add_action( 'init', 'example_insert_default_format' );

// repeat the following 11 lines for each format you want
function example_insert_map_format() {
	wp_insert_term(
		'Map', // change this to
		'format',
		array(
		  'description'	=> 'Adds a large map to the top of your post.',
		  'slug' 		=> 'map'
		)
	);
}
add_action( 'init', 'example_insert_map_format' );

// make sure there's a default Format type and that it's chosen if they didn't choose one
function moseyhome_default_format_term( $post_id, $post ) {
    if ( 'publish' === $post->post_status ) {
        $defaults = array(
            'format' => 'default' // change 'default' to whatever term slug you created above that you want to be the default
            );
        $taxonomies = get_object_taxonomies( $post->post_type );
        foreach ( (array) $taxonomies as $taxonomy ) {
            $terms = wp_get_post_terms( $post_id, $taxonomy );
            if ( empty( $terms ) && array_key_exists( $taxonomy, $defaults ) ) {
                wp_set_object_terms( $post_id, $defaults[$taxonomy], $taxonomy );
            }
        }
    }
}
add_action( 'save_post', 'moseyhome_default_format_term', 100, 2 );

// replace checkboxes for the format taxonomy with radio buttons and a custom meta box
function wpse_139269_term_radio_checklist( $args ) {
    if ( ! empty( $args['taxonomy'] ) && $args['taxonomy'] === 'format' ) {
        if ( empty( $args['walker'] ) || is_a( $args['walker'], 'Walker' ) ) { // Don't override 3rd party walkers.
            if ( ! class_exists( 'WPSE_139269_Walker_Category_Radio_Checklist' ) ) {
                class WPSE_139269_Walker_Category_Radio_Checklist extends Walker_Category_Checklist {
                    function walk( $elements, $max_depth, $args = array() ) {
                        $output = parent::walk( $elements, $max_depth, $args );
                        $output = str_replace(
                            array( 'type="checkbox"', "type='checkbox'" ),
                            array( 'type="radio"', "type='radio'" ),
                            $output
                        );
                        return $output;
                    }
                }
            }
            $args['walker'] = new WPSE_139269_Walker_Category_Radio_Checklist;
        }
    }
    return $args;
}

add_filter( 'wp_terms_checklist_args', 'wpse_139269_term_radio_checklist' );
/**
 * Enqueue scripts and styles.
 */


function spritekit_v3_scripts() {
	wp_enqueue_style( 'spritekit-v3-style', get_stylesheet_uri() );

	wp_enqueue_script( 'spritekit-v3-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'spritekit-v3-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'spritekit_v3_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
