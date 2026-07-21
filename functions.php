<?php

function cadington_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'cadington' ),
	) );
}
add_action( 'after_setup_theme', 'cadington_setup' );

function cadington_enqueue_assets() {
	wp_enqueue_style( 'cadington-style', get_stylesheet_uri(), array(), filemtime( get_stylesheet_directory() . '/style.css' ) );
	wp_enqueue_script(
		'cadington-header-scroll',
		get_stylesheet_directory_uri() . '/assets/js/header-scroll.js',
		array(),
		filemtime( get_stylesheet_directory() . '/assets/js/header-scroll.js' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'cadington_enqueue_assets' );
