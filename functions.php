<?php

	function register_bootpress_menu() {
	  register_nav_menu('navbar-menu',__( 'Navbar Menu' ));
	}
	add_action( 'init', 'register_bootpress_menu' );

	if ( function_exists('register_sidebar') )
	   register_sidebars(4,array(
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    /**
	 * Proper way to enqueue scripts and styles
	 */
	function bootpress_libs() {

		wp_register_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', '', '3.0.0' );
		wp_register_style( 'bootstrap-theme', get_template_directory_uri() . '/assets/css/bootstrap-theme.min.css', array('bootstrap'), '3.0.0' );
		wp_register_style( 'bootpress', get_template_directory_uri() . '/style.css', array('bootstrap'), '' );

		wp_register_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '3.0.0', true );
		wp_register_script( 'bootpress', get_template_directory_uri() . '/assets/js/bootpress.js', array('jquery'), '', true );

		wp_enqueue_style( 'bootstrap' );
		wp_enqueue_style( 'bootstrap-theme' );
		wp_enqueue_style( 'bootpress' );

		wp_enqueue_script('jquery','','','',true);
		wp_enqueue_script( 'bootstrap' );
		wp_enqueue_script( 'bootpress' );
	}

	add_action( 'wp_enqueue_scripts', 'bootpress_libs' );

?>