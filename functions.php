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

function cadington_handle_contact_form() {
	$redirect_base = home_url( '/#contact' );

	if ( ! isset( $_POST['cadington_contact_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['cadington_contact_nonce'] ) ), 'cadington_contact' ) ) {
		wp_safe_redirect( add_query_arg( 'contact', 'error', $redirect_base ) );
		exit;
	}

	// Honeypot - real visitors never fill this in (hidden via CSS).
	if ( ! empty( $_POST['cadington_website'] ) ) {
		wp_safe_redirect( add_query_arg( 'contact', 'success', $redirect_base ) );
		exit;
	}

	$name     = isset( $_POST['cadington_name'] ) ? sanitize_text_field( wp_unslash( $_POST['cadington_name'] ) ) : '';
	$email    = isset( $_POST['cadington_email'] ) ? sanitize_email( wp_unslash( $_POST['cadington_email'] ) ) : '';
	$message  = isset( $_POST['cadington_message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['cadington_message'] ) ) : '';
	$services = isset( $_POST['cadington_services'] ) && is_array( $_POST['cadington_services'] )
		? array_map( 'sanitize_text_field', wp_unslash( $_POST['cadington_services'] ) )
		: array();

	if ( empty( $name ) || empty( $message ) || ! is_email( $email ) ) {
		wp_safe_redirect( add_query_arg( 'contact', 'error', $redirect_base ) );
		exit;
	}

	$services_line = $services ? implode( ', ', $services ) : 'None selected';

	$sent = wp_mail(
		'admin@cadington.com',
		sprintf( 'New contact form submission from %s', $name ),
		"Name: {$name}\nEmail: {$email}\nInterested in: {$services_line}\n\nMessage:\n{$message}",
		array( "Reply-To: {$name} <{$email}>" )
	);

	wp_safe_redirect( add_query_arg( 'contact', $sent ? 'success' : 'error', $redirect_base ) );
	exit;
}
add_action( 'admin_post_nopriv_cadington_contact', 'cadington_handle_contact_form' );
add_action( 'admin_post_cadington_contact', 'cadington_handle_contact_form' );
