<?php 

/*

@package sunsettheme

	==================
		ADMIN PAGE
	==================

*/

	function sunse_add_admin_page(){

		add_menu_page('Sunset Theme Options', 'Sunset', 'manage_options', 'alecaddd-sunset', 'sunset_theme_create_page', 
		get_template_directory_uri() . '/img/sunset-icon.png', 110 );

	}

	add_action( 'admin_menu', 'sunse_add_admin_page' );

	function sunset_theme_create_page(){
		echo "<h1>Sunset Theme Options</h1>";	
	}