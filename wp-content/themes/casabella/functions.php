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

if ( function_exists('register_sidebars') )
register_sidebar(array(
'name' => 'sidebar-noticias',
'before_widget' => '<div class="homenoticias">',
'after_widget' => '</div>',
));

register_sidebars(3, array(
'before_widget' => '<div class="widget">',
'after_widget' => '</div><!--/widget-->',
));

//*******************************


 ?>