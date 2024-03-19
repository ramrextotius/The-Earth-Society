<?php
/**
 * The Earth Society functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package The_Earth_Society
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function the_earth_society_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on The Earth Society, use a find and replace
		* to change 'the-earth-society' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'the-earth-society', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'the-earth-society' ),
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
			'the_earth_society_custom_background_args',
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
	/*add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);*/
}
add_action( 'after_setup_theme', 'the_earth_society_setup' );


function the_earth_society_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'the-earth-society' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'the-earth-society' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'the_earth_society_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function the_earth_society_scripts() {
	wp_enqueue_style( 'the-earth-society-style', get_template_directory_uri() . '/css/style-desktop.css', array(), _S_VERSION );
<<<<<<< HEAD
	wp_enqueue_style( 'the-earth-society-mobile', get_template_directory_uri() . '/css/style-mobile.css', array(), _S_VERSION );
	wp_enqueue_script( 'the-earth-society-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0', true );
	wp_enqueue_script('jquery');
=======
<<<<<<< HEAD
	wp_enqueue_style( 'the-earth-society-mobile', get_template_directory_uri() . '/css/style-mobile.css', array(), _S_VERSION );
	wp_enqueue_script( 'the-earth-society-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0', true );
	wp_enqueue_script('jquery');
=======
>>>>>>> 3df3d29e915511f433e7c3ad5b47773396224a7d
>>>>>>> 7691b61ff864a57361e9dcad75642642cb8b2d1b
	//wp_style_add_data( 'the-earth-society-style', 'rtl', 'replace' );

	//wp_enqueue_script( 'the-earth-society-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'the_earth_society_scripts' );



function add_custom_fields_to_customize($wp_customize) {
   
    $wp_customize->add_section('custom_fields_section', array(
        'title'    => __('Header section', 'the-earth-society'),
        'priority' => 160,
    ));

  
    $wp_customize->add_setting('cta_button_text', array(
        'default'           => 'Sign Up',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('cta_button_text', array(
        'label'    => __('CTA Button Text', 'the-earth-society'),
        'section'  => 'custom_fields_section',
        'type'     => 'text',
    ));


    $wp_customize->add_setting('cta_link', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('cta_link', array(
        'label'    => __('CTA Link', 'the-earth-society'),
        'section'  => 'custom_fields_section',
        'type'     => 'url',
    ));

	$wp_customize->add_section('footer_section', array(
        'title'    => __('Footer section', 'the-earth-society'),
        'priority' => 159,
    ));

	$wp_customize->add_setting('footer_logo', array(
        'default'           => '',
    ));

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'footer_logo', array(
        'label'    => __('Upload Media', 'the-earth-society'),
        'section'  => 'footer_section',
        'mime_type' => 'image', 
    )));


    $wp_customize->add_setting('footer_description', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_description', array(
        'label'    => __('Footer description', 'the-earth-society'),
        'section'  => 'footer_section',
        'type'     => 'text',
    ));


}
add_action('customize_register', 'add_custom_fields_to_customize');


<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 7691b61ff864a57361e9dcad75642642cb8b2d1b
add_action('acf/init', 'register_blocks');
function register_blocks() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

     
        acf_register_block_type(array(
            'name'              => 'hero-section',
            'title'             => __('Hero Section'),
            'description'       => __('A hero section for WordPress theme'),
            'render_template'   => 'template-parts/blocks/hero-section/hero-section.php',
			'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/hero-section/hero-section.css',
            'category'          => 'formatting',
		
        ));
		acf_register_block_type(array(
            'name'              => 'heading-description',
            'title'             => __('Heading & Description'),
            'description'       => __('Heading and description block'),
            'render_template'   => 'template-parts/blocks/heading-description/heading-description.php',
			'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/heading-description/heading-description.css',
            'category'          => 'formatting',
		
        ));
		acf_register_block_type(array(
            'name'              => 'three-column-block',
            'title'             => __('Three Column Block'),
            'description'       => __('Three Column Block'),
            'render_template'   => 'template-parts/blocks/three-column/three-column.php',
			'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/three-column/three-column.css',
            'category'          => 'formatting',
		
        ));
		acf_register_block_type(array(
            'name'              => 'cta-banner',
            'title'             => __('CTA Banner'),
            'description'       => __('A Banner to render a CTA'),
            'render_template'   => 'template-parts/blocks/cta-banner/cta-banner.php',
			'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/cta-banner/cta-banner.css',
            'category'          => 'formatting',
		
        ));
    }
	/*if( function_exists('acf_register_block_type') ) {

        // Register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'heading-description',
            'title'             => __('Heading & Description'),
            'description'       => __('Heading and description block'),
            'render_template'   => 'template-parts/blocks/testimonial/testimonial.php',
			'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/testimonial/hero-section.css',
            'category'          => 'formatting',
		
        ));
    }*/
}

/*(array(
    'name'              => 'testimonial-two',
    'title'             => __('Testimonial'),
    'description'       => __('A custom testimonial block.'),
    'example'           => array(
        'attributes' => array(
            'mode' => 'preview',
            'data' => array(
                'testimonial'   => "Blocks are...",
                'author'        => "Jane Smith",
                'role'          => "Person",
                'is_preview'    => true
            )
        )
    )
));*/
<<<<<<< HEAD
=======
=======


>>>>>>> 3df3d29e915511f433e7c3ad5b47773396224a7d
>>>>>>> 7691b61ff864a57361e9dcad75642642cb8b2d1b

require get_template_directory() . '/inc/custom-header.php';


require get_template_directory() . '/inc/template-tags.php';


require get_template_directory() . '/inc/template-functions.php';

require get_template_directory() . '/inc/customizer.php';
