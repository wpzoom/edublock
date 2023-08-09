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

function edublock_theme_get_custom_typography() {

	$font_families = array();

	$args = array(
		'post_type'      => 'wp_global_styles',
		'posts_per_page' => 1,
	);
	
	$get_custom_styles = get_posts( $args );
	
	if( !empty( $get_custom_styles ) ) {
		
		$styles = $get_custom_styles[0]->post_content;
		$styles = json_decode( $styles, true );
		$font_families = edublock_theme_extract_font_families( $styles );
	}

	return $font_families;

}

function edublock_theme_extract_font_families( $data = array() ) {

	if( empty( $data ) ) {
		return array();
	}

	$pattern  = '/var:preset\|font-family\|([^|]+)/';
	$pattern2 = '/var\(--wp--preset--font-family--(\w+)\)/';
	$preset_patern = 'var(--wp--preset--font-family--';

	$font_families = $matches = $matches2 = array();

	foreach ( $data as $key => $value ) {
        
		if( $key === 'fontFamily') {

			if ( strpos( $value, $preset_patern ) !== false ) {
				if ( preg_match( $pattern2, $value, $matches2 ) ) {
					$value = $matches2[1];
					$font_families[] = $value;	
				}
			} else {
				if( preg_match_all( $pattern, $value, $matches ) ) {
					$value = end( $matches[1] );
				}
				$font_families[] = $value;
			}
		} elseif ( is_array( $value ) ) {
			$font_families = array_merge( $font_families, edublock_theme_extract_font_families( $value ) );
        }
    }

	$font_families = array_unique( $font_families );	

	return $font_families;
}


/**
* Enqueue theme fonts.
*/
function edublock_theme_fonts() {

	$fonts_url = edublock_get_fonts_url();

    // Load Fonts if necessary.
    if ( $fonts_url ) {

		require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );
        wp_enqueue_style( 'edublock-theme-fonts', wptt_get_webfont_url( $fonts_url ), array(), wp_get_theme()->get( 'Version' ) );

    }

}
add_action( 'wp_enqueue_scripts', 'edublock_theme_fonts', 1 );

/*
 * Gutenberg Editor CSS
 *
 * Load a stylesheet for customizing the Gutenberg editor
 * including support for Google Fonts and @import rules.
 */
function edublock_theme_gutenberg_editor_css() {
  
	wp_enqueue_style( 
		'uniblock-theme-editor-css', 
		get_stylesheet_directory_uri() . '/assets/admin/css/editor-google-fonts.css', 
		array(), 
		wp_get_theme()->get( 'Version' ) 
	);
  
}
add_action( 'enqueue_block_editor_assets', 'edublock_theme_gutenberg_editor_css' );

/**
 * Retrieve webfont URL to load fonts locally.
 */
function edublock_get_fonts_url() {

	$fonts_to_download = array();
    
	$font_families = array(
        'alegreya'           => 'Alegreya:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
        'archivo'            => 'Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'bitter'             => 'Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'cormorant-garamond' => 'Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700',
        'crimson-pro'        => 'Crimson+Pro:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600',
        'dm-sans'            => 'DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700',
        'epilogue'           => 'Epilogue:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'figtree'            => 'Figtree:wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900',
        'ibm-plex-mono'      => 'IBM+Plex+Mono:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700',
        'ibm-plex-sans'      => 'IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700',
        'inter'              => 'Inter:wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900',
        'josefin-sans'       => 'Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700',
        'jost'               => 'Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'lexend'             => 'Lexend:wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900',
        'libre-baskerville'  => 'Libre+Baskerville:ital,wght@0,400;0,700;1,400',
        'libre-franklin'     => 'Libre+Franklin:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'lora'               => 'Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
        'manrope'            => 'Manrope:wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800',
        'merriweather'       => 'Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900',
        'montserrat'         => 'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'mulish'             => 'Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000',
        'nunito'             => 'Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000',
        'open-sans'          => 'Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800',
        'oswald'             => 'Oswald:wght@0,200;0,300;0,400;0,500;0,600;0,700',
        'philosopher'        => 'Philosopher:ital,wght@0,400;0,700;1,400;1,700',
        'playfair-display'   => 'Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
        'poppins'            => 'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'quicksand'          => 'Quicksand:wght@0,300;0,400;0,500;0,600;0,700',
        'raleway'            => 'Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'roboto'             => 'Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900',
        'roboto-condensed'   => 'Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
        'rubik'              => 'Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'source-sans-pro'    => 'Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900',
        'source-serif-pro'   => 'Source+Serif+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900',
        'space-grotesk'      => 'Space+Grotesk:wght@0,300;0,400;0,500;0,600;0,700',
        'urbanist'           => 'Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'work-sans'          => 'Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'yeseva-one'         => 'Yeseva+One'
    );
	
	$user_custom_typos = edublock_theme_get_custom_typography();

	if( !empty( $user_custom_typos ) ) {
		foreach( $user_custom_typos as $user_custom_typo ) {
			$fonts_to_download[] = isset( $font_families[ $user_custom_typo ] ) ? $font_families[ $user_custom_typo ] : '';
		}

		$query_args = array(
			'family'  => implode( '|', $fonts_to_download ),
			'subset'  => urlencode( 'latin,latin-ext' ),
			'display' => urlencode( 'swap' ),
		);
	
		return apply_filters( 'edublock_get_fonts_url', add_query_arg( $query_args, 'https://fonts.googleapis.com/css' ) );
	
	}

	return $fonts_to_download;
}