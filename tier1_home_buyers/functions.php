<?php

	add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 15 );
	function theme_enqueue_styles() {
	    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	    wp_enqueue_style( 'child-style',
	        get_stylesheet_directory_uri() . '/style.css',
	        array('parent-style')
	    );
	}

	//Shortcode functions
	add_shortcode('CurrentYear', 'shortcode_current_year');
	function shortcode_current_year()
	{
		$currentYear = date('Y');
		return $currentYear;
	}//end function shortcode_current_year()


	//CSS
	function enqueue_customcss() {
		wp_enqueue_style( 'infieldLabel', get_stylesheet_directory_uri() . '/css/jquery.infieldLabel.css' );
		wp_enqueue_style( 'fjalla-one-font', 'https://fonts.googleapis.com/css?family=Fjalla+One' );
		wp_enqueue_style( 'kreon-font', 'https://fonts.googleapis.com/css?family=Kreon:400,700' );
		// wp_enqueue_style( 'roboto-mono-font','https://fonts.googleapis.com/css?family=Roboto+Mono:400');
		wp_enqueue_style( 'oswald-font','https://fonts.googleapis.com/css?family=Oswald:400,700,300');
		wp_enqueue_style( 'lato-font', 'https://fonts.googleapis.com/css?family=Lato:400,300');
	} //end function enqueue_customcss()

	add_action( 'wp_enqueue_scripts', 'enqueue_customcss');

	//JS
	function enqueue_javascripts() {
		wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/js/main.js' );
		wp_enqueue_script( 'infieldlabel', get_stylesheet_directory_uri() . '/js/jquery.infieldLabel.js' );
	} //end function enqueue_javascripts()

	add_action( 'wp_enqueue_scripts', 'enqueue_javascripts' );

	//Add sidebars
	if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name'=> 'Listings Header',
		'id' => 'listings_header_widget',
		'before_widget' => '<div class="listings-search-wrap">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	} //end if (function_exists('register_sidebar'))

	//Fix for wpmem_2 shortcode showing up when called in template
	// http://rocketgeek.com/filter-hooks/remove-an-unparsed-wpmem_txt-shortcode/
	add_filter( 'wpmem_login_form_args',    'remove_wpmem_txt_code' );
	add_filter( 'wpmem_register_form_args', 'remove_wpmem_txt_code' );
	function remove_wpmem_txt_code( $args ){
		$args = array(
			'txt_before' => '',
			'txt_after'  => ''
		);
		return $args;
	}
