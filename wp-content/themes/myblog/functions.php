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
//---------------- hooks ---------------------------

//---------------- filter ---------------------------
	function add_menu_link_class($atts, $item, $args){
		$atts['class'] = 'nav-link';
		// echo 'Item :'.$item;
		return $atts;
	}
	add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);

	function add_classes_on_li($classes, $item, $args) {
		$classes[] = 'nav-item';
		return $classes;
	  }
	  add_filter('nav_menu_css_class','add_classes_on_li',1,3);
?>
