<?php
/**
Theme specific styles and scripts
	wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
	wp_enqueue_style( $handle, $src, $deps, $ver );
*/ 
//wp_enqueue_style('cbv-style', get_stylesheet_uri(), array(), rand(0, 999));
wp_enqueue_style( 'storefront-child-theme-css', get_stylesheet_uri() . '/style.css', array('storefront-theme-css'), null );
wp_enqueue_style('cbv-devices-style', get_stylesheet_directory_uri() . '/assets/css/responsive.css', array(), rand(0, 999));
wp_enqueue_script('cbv-custom', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), '1.1.0', true);

?>