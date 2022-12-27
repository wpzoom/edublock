<?php
/**
 * This file adds functions to the EduBlock WordPress theme.
 *
 * @package EduBlock
 * @author  WPZOOM
 * @license GNU General Public License v2 or later
 * @link    https://www.wpzoom.com/
 */


if ( ! function_exists( 'edublock_setup' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function edublock_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'edublock', get_template_directory() . '/languages' );

		// Enqueue editor styles and fonts.
		add_editor_style(
			array(
				'./style.css',
			)
		);

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

        register_nav_menus( array( 'primary' => esc_html__( 'Primary Menu', 'edublock' ) ) );

	}
}
add_action( 'after_setup_theme', 'edublock_setup' );

// Enqueue style sheet.
add_action( 'wp_enqueue_scripts', 'edublock_enqueue_style_sheet' );
function edublock_enqueue_style_sheet() {

	wp_enqueue_style( 'edublock', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

}

/**
 * Register block styles.
 *
 * @since 1.0.0
 */
function edublock_register_block_styles() {

	$block_styles = array(
		'core/button'          => array(
			'fill-background'    => __( 'Fill Background', 'edublock' ),
			'outline-background' => __( 'Outline Background', 'edublock' ),
		),
		'core/group'           => array(
			'shadow'       => __( 'Shadow', 'edublock' ),
			'border' => __( 'Border', 'edublock' ),
			'full-height'  => __( 'Full-height', 'edublock' ),
            'round-corners'       => __( 'Rounded', 'edublock' ),
            'round-top'       => __( 'Rounded Top', 'edublock' ),
            'round-bottom'       => __( 'Rounded Bottom', 'edublock' ),
		),
        'core/cover'           => array(
            'round-corners'       => __( 'Rounded', 'edublock' ),
            'round-top'       => __( 'Rounded Top', 'edublock' ),
            'round-bottom'       => __( 'Rounded Bottom', 'edublock' ),
        ),
        'core/column'           => array(
            'shadow'       => __( 'Shadow', 'edublock' ),
            'border' => __( 'Border', 'edublock' ),
            'pull-right'  => __( 'Pull right', 'edublock' ),
            'pull-left'  => __( 'Pull left', 'edublock' ),
            'round-corners'       => __( 'Rounded', 'edublock' ),
        ),
		'core/image'           => array(
			'shadow' => __( 'Shadow', 'edublock' ),
		),
		'core/list'            => array(
			'no-disc' => __( 'No Disc', 'edublock' ),
		),
		'core/media-text'      => array(
			'shadow-media' => __( 'Shadow', 'edublock' ),
		),
		'core/navigation-link' => array(
			'fill'         => __( 'Fill', 'edublock' ),
			'fill-background'    => __( 'Fill Background', 'edublock' ),
			'outline'      => __( 'Outline', 'edublock' ),
			'outline-background' => __( 'Outline Background', 'edublock' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}
add_action( 'init', 'edublock_register_block_styles' );

/**
 * Registers block categories, and type.
 *
 * @since 1.0
 */

if ( ! function_exists( 'edublock_register_block_pattern_categories' ) ) {

    function edublock_register_block_pattern_categories() {

    	/* Functionality specific to the Block Pattern Explorer plugin. */
    	if ( function_exists( 'register_block_pattern_category_type' ) ) {
    		register_block_pattern_category_type( 'edublock', array( 'label' => __( 'edublock', 'edublock' ) ) );
    	}

    	$block_pattern_categories = array(
    		'edublock-footer'  => array(
    			'label'         => __( 'Footer', 'edublock' ),
    			'categoryTypes' => array( 'edublock' ),
    		),
    		'edublock-general' => array(
    			'label'         => __( 'Sections', 'edublock' ),
    			'categoryTypes' => array( 'edublock' ),
    		),
    		'edublock-header'  => array(
    			'label'         => __( 'Header', 'edublock' ),
    			'categoryTypes' => array( 'edublock' ),
    		),
    		'edublock-page'    => array(
    			'label'         => __( 'Pages', 'edublock' ),
    			'categoryTypes' => array( 'edublock' ),
    		),
    		'edublock-query'   => array(
    			'label'         => __( 'Blog Posts', 'edublock' ),
    			'categoryTypes' => array( 'edublock' ),
    		),
    	);

    	foreach ( $block_pattern_categories as $name => $properties ) {
    		register_block_pattern_category( $name, $properties );
    	}
    }
    add_action( 'init', 'edublock_register_block_pattern_categories', 9 );

}

// Theme Admin Page
require get_template_directory() . '/inc/admin/theme-admin.php';

/*--------------------------------------------------------------
# Enqueue Admin Scripts and Styles
--------------------------------------------------------------*/
if ( ! function_exists( 'edublock_admin_scripts' ) ) :
    function edublock_admin_scripts() {
        wp_enqueue_style( 'edublock-admin-styles', get_template_directory_uri() . '/assets/admin/css/admin-styles.css' );
    }
    add_action( 'admin_enqueue_scripts', 'edublock_admin_scripts' );
endif;


/**
* Enqueue theme fonts.
*/
function edublock_theme_fonts() {
    $fonts_url = edublock_get_fonts_url();

    // Load Fonts if necessary.
    if ( $fonts_url ) {
        require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );

        wp_enqueue_style( 'edublock-theme-fonts', wptt_get_webfont_url( $fonts_url ), array(), wp_get_theme()->get( 'Version' ) );

        add_editor_style( $fonts_url );

    }

}
add_action( 'admin_init', 'edublock_theme_fonts', 1 );
add_action( 'wp_enqueue_scripts', 'edublock_theme_fonts', 1 );
add_action( 'enqueue_block_editor_assets', 'edublock_theme_fonts', 1 );


/**
 * Retrieve webfont URL to load fonts locally.
 */
function edublock_get_fonts_url() {
    $font_families = array(
        'Alegreya:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
        'Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700',
        'Crimson+Pro:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600',
        'DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700',
        'Epilogue:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'Figtree:wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900',
        'IBM+Plex+Mono:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700',
        'IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700',
        'Inter:wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900',
        'Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700',
        'Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'Lexend:wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900',
        'Libre+Baskerville:ital,wght@0,400;0,700;1,400',
        'Libre+Franklin:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
        'Manrope:wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800',
        'Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900',
        'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000',
        'Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000',
        'Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800',
        'Oswald:wght@0,200;0,300;0,400;0,500;0,600;0,700',
        'Philosopher:ital,wght@0,400;0,700;1,400;1,700',
        'Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
        'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'Quicksand:wght@0,300;0,400;0,500;0,600;0,700',
        'Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900',
        'Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
        'Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900',
        'Source+Serif+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900',
        'Space+Grotesk:wght@0,300;0,400;0,500;0,600;0,700',
        'Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'Yeseva+One'
    );

    $query_args = array(
        'family'  => implode( '|', $font_families ),
        'subset'  => urlencode( 'latin,latin-ext' ),
        'display' => urlencode( 'swap' ),
    );

    return apply_filters( 'edublock_get_fonts_url', add_query_arg( $query_args, 'https://fonts.googleapis.com/css' ) );
}