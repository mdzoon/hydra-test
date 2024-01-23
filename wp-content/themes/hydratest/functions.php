<?php

/**
 * Hydra Test functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Hydra Test
 * @since Hydra Test 1.0
 */

 if ( ! function_exists( 'hydratest_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Hydratest 1.0
	 *
	 * @return void
	 */
	function hydratest_support() {
		// Make theme available for translation.
		load_theme_textdomain( 'hydratest' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}
endif;
add_action( 'after_setup_theme', 'hydratest_support' );

if ( ! function_exists( 'hydratest_styles' ) ) :
	/**
	 * Enqueue styles.
	 *
	 * @since Hydratest 1.0
	 *
	 * @return void
	 */
	function hydratest_styles() {
		// Register theme stylesheet.
		wp_register_style(
			'hydratest-style',
			get_stylesheet_directory_uri() . '/assets/theme.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);
		// Enqueue theme stylesheet.
		wp_enqueue_style( 'hydratest-style' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'hydratest_styles' );

if ( ! function_exists( 'hydratest_editor_styles' ) ) :
	/**
	 * Enqueue editor styles.
	 *
	 * @since Hydratest 1.0
	 *
	 * @return void
	 */
	function hydratest_editor_styles() {
		add_editor_style(
		    get_stylesheet_directory_uri() . '/assets/theme.css'
		);
	}
endif;
add_action( 'admin_init', 'hydratest_editor_styles' );

/**
 * Render default Site Logo if is empty.
 *
 * @param  string    $block_content HTML markup of the block
 * @param  WP_Block  $block         Block Class instance
 * @return string                   Modified block content
 */
function hydra_default_site_logo( $block_content, $block ) {
    if ( !empty( $block_content ) ) {
        return $block_content;
    }
    $source =  get_stylesheet_directory_uri() . '/assets/icons/hydra-logo.svg';
    $alt = 'Hydra Logo';
    $style = 'width:100%;height:auto;';

    $default_logo =  sprintf(
        '<a href="%1$s"><img src="%2$s" style="%3$s" alt="%4$s"></a>',
        esc_url( home_url() ),
        esc_attr( $source ),
        esc_attr( $style ),
        esc_attr( $alt ),
    );
    return $default_logo;
}
add_filter( 'render_block_core/site-logo', 'hydra_default_site_logo', 10, 2 );

/**
 * Render default Site Title if is empty.
 *
 * @param  string    $block_content HTML markup of the block
 * @param  WP_Block  $block         Block Class instance
 * @return string                   Modified block content
 */
function hydra_default_site_title( $block_content, $block ) {
    if ( !empty( $block_content ) ) {
        return $block_content;
    }

    $source = get_stylesheet_directory_uri() . '/assets/icons/hydra-title.svg';
    $alt = 'Hydra Title';
    
    $default_title =  sprintf(
        '<a href="%1$s"><img src="%2$s" alt="%3$s"></a>',
        esc_url( home_url() ),
        esc_attr( $source ),
        esc_attr( $alt ),
    );
    return $default_title;
}
add_filter( 'render_block_core/site-title', 'hydra_default_site_title', 10, 2 );