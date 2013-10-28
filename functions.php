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

?>