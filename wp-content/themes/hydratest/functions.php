<?php

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