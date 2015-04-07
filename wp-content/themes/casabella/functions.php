<?php 
//***********Custom Menu******************
add_theme_support( 'nav-menus' );

function register_my_menu() {
register_nav_menus(
array(
    	'menu-1-slug' => 'menu1',
     	'menu-2-slug' => 'menu2',
	 	'menu' => __( 'menu', 'Casa Bella' ),
		'menu-footer'=>__( 'menu-footer', 'Casa Bella' )
    )
);
}

add_action( 'init', 'register_my_menu' );



//*******************************


 ?>