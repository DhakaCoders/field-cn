<?php
/**
Theme specific styles and scripts
	wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
	wp_enqueue_style( $handle, $src, $deps, $ver );
*/ 
wp_enqueue_script('masonry-js', get_stylesheet_directory_uri() . '/assets/js/masonry.pkgd.min.js', array('jquery'), '1.0.0', true);
?>