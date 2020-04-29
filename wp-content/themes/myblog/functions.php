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


	function add_menu_link_class($atts, $item, $args){
		$atts['class'] = 'nav-link';
		return $atts;
	}
	add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);
	// add_filter( 'nav_menu_link_attributes', 'wpse156165_menu_add_class', 10, 3 );

	// function wpse156165_menu_add_class( $atts, $item, $args ) {
	// 	$class = 'class'; // or something based on $item
	// 	$atts['class'] = $class;
	// 	return $atts;
	// }
?>
