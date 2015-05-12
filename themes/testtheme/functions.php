<?php
/*
Theme Name: Aleksandar Petrovic's WordPress Demo Theme
Author: Aleksandar Petrovic
Author URI: http://www.alna-dev.com
Description: This is a demo theme I developed for the WEB170 class.
Version: 1.0
*/

#register menues
register_nav_menus(array(
	'main-menu' => __( 'Main Menu' ),
	'social-menu' => __( 'Social Menu' )
));



#register sidebar
register_sidebar(array(
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
));

#for post thumbnail images
add_theme_support( 'post-thumbnails' );

#for post text excerpts
add_post_type_support( 'page', 'excerpt' );

#admin bar toggle
if( !is_super_admin() ) {
show_admin_bar(false);
}else{show_admin_bar(true);}

#custom walker include
require_once('DD_Walker.php');

?>