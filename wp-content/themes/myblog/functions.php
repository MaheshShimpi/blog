<?php 

	function register_menu() {
		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu' ),
				'extra-menu' => __( 'Extra Menu' )
			)
		);
	}
	add_action( 'init', 'register_menu' );



?>
