<?php
/**
 * Escaleno functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Escaleno
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function escaleno_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Portafolio NP, use a find and replace
		* to change 'escaleno' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'escaleno', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'escaleno' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'escaleno_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'escaleno_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function escaleno_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'escaleno_content_width', 640 );
}
add_action( 'after_setup_theme', 'escaleno_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function escaleno_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Barra lateral', 'escaleno' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'escaleno' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Columna 1 footer', 'escaleno' ),
			'id'            => 'columna_uno_footer',
			'description'   => esc_html__( 'Columna 1 del footer', 'escaleno' ),
			'before_widget' => '<section id="%1$s" class="widget col-12 para %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Columna 2 footer', 'escaleno' ),
			'id'            => 'columna_dos_footer',
			'description'   => esc_html__( 'Columna 2 del footer', 'escaleno' ),
			'before_widget' => '<section id="%1$s" class="widget col-12 para %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Columna 3 footer', 'escaleno' ),
			'id'            => 'columna_tres_footer',
			'description'   => esc_html__( 'Columna 3 del footer', 'escaleno' ),
			'before_widget' => '<section id="%1$s" class="widget col-12 para %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Formulario footer', 'escaleno' ),
			'id'            => 'formulario_footer',
			'description'   => esc_html__( 'Formulario del footer', 'escaleno' ),
			'before_widget' => '<section id="%1$s" class="widget col-12 para %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'escaleno_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function escaleno_scripts() {
	wp_enqueue_style( 'escaleno-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'escaleno-style', 'rtl', 'replace' );

	wp_enqueue_script( 'escaleno-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'escaleno_scripts' );

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

/*Incluir directorio de módulo portafolio*/
include get_template_directory() . '/modulos/modulo-portafolio/core-portafolio.php';
include get_template_directory() . '/modulos/modulo-portafolio/portafolio.php';
/*Incluir directorio de assets*/
include get_template_directory() . '/assets/assets.php';


add_post_type_support( 'page', 'excerpt' );



/*funciones para li y etiqueta a del NAVBAR*/

add_filter ( 'nav_menu_css_class', 'agregar_clase_li', 10, 4 );

function agregar_clase_li ( $classes, $item, $args, $depth ){
  $classes[] = 'nav-item ';
  return $classes;
}

/*agregar clases de bootstrap al elemento A del NAVBAR */

add_filter('wp_nav_menu','agregar_clase_aitem');

function agregar_clase_aitem($ulclass) {
   return preg_replace('/<a /', '<a class="nav-link logo-menu"', $ulclass);
}

function add_class_next_post_link($html){

    $html = str_replace('<a','<a class="next"',$html);

    return $html;

}

add_filter('next_post_link','add_class_next_post_link',10,1);

 

function add_class_previous_post_link($html){

    $html = str_replace('<a','<a class="prev"',$html);

    return $html;

}

add_filter('previous_post_link','add_class_previous_post_link',10,1);



/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/assets/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


if ( ! file_exists( get_template_directory() . '/assets/class-wp-bootstrap-navwalker.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_template_directory() . '/assets/class-wp-bootstrap-navwalker.php';
}

function prefix_modify_nav_menu_args( $args ) {
    return array_merge( $args, array(
        'walker' => new WP_Bootstrap_Navwalker(),
    ) );
}
add_filter( 'wp_nav_menu_args', 'prefix_modify_nav_menu_args' );


/*clase al custom logo*/
add_filter( 'wp_get_attachment_image_attributes', function( $attr )
{
    if( isset( $attr['class'] )  && 'custom-logo' === $attr['class'] )
        $attr['class'] = 'navbar-brand';

    return $attr;
} );

/**
 * Changes the class on the custom logo in the header.php
 */
function helpwp_custom_logo_output( $html ) {
	$html = str_replace('custom-logo-link', 'navbar-brand', $html );
	return $html;
}
add_filter('get_custom_logo', 'helpwp_custom_logo_output', 10);

/*Cambiar librería de jQuery de WP por la de Google*/
function wpb_modify_jquery() {
	//check if front-end is being viewed
	if (!is_admin()) {
		// Remove default WordPress jQuery
        wp_deregister_script('jquery');
		// Register new jQuery script via Google Library	
        wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', false, '3.6.0');
		// Enqueue the script 	
        wp_enqueue_script('jquery');
    }
}
// Execute the action when WordPress is initialized
add_action('init', 'wpb_modify_jquery');

function tipo_proyecto() {
    register_taxonomy(
    'tipo_proyecto',
    'proyecto',
    array(
    'labels' => array(
        'name' => 'Tipo de proyecto',
        'singular_name' => 'Proyecto',
        'search_items' => 'Buscar año',
        'popular_items' => 'Populares',
        'all_items' => 'Todos',
        'parent_item' => 'Padre',
        'parent_item_colon' => 'Año padre',
        'edit_item' => 'Editar año',
        'update_item' => 'Actualizar año',
        'add_new_item' => 'Agregar año',
        'new_item_name' => 'Nombre del año'
        ),
        'hierarchical' => true, 
        'public' => true,
        'show_ui' => true,
        'sort' => true,
        'query_var' => true,  
        'args' => array('orderby' => 'term_order'),
        'rewrite' => array('slug' => 'tipo_proyecto', 'with_front' => true)
    )
);
}
add_action( 'init', 'tipo_proyecto' );