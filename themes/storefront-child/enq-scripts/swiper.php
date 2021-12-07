<?php
wp_enqueue_style('swiper-css', get_stylesheet_directory_uri() . '/assets/swiper/swiper-bundle.min.css', array(), null);
wp_enqueue_script('swiper-bundle-js', get_stylesheet_directory_uri() . '/assets/swiper/swiper-bundle.min.js', array('jquery'), '1.0.0', true);