<?php

	function register_bootpress_menu() {
	  register_nav_menu('navbar-menu',__( 'Navbar Menu' ));
	}
	add_action( 'init', 'register_bootpress_menu' );

	if ( function_exists('register_sidebar') )
	    register_sidebar();

?>