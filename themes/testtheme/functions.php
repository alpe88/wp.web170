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

#filter that adds wp css classes to custom post types as appropriate
function kct_page_css_class( $css_class, $page, $depth, $args ) {
  if ( empty($args['post_type']) || !is_singular($args['post_type']) )
    return $css_class;

  $_current_page = get_queried_object();

  if ( in_array( $page->ID, $_current_page->ancestors ) )
    $css_class[] = 'current_page_ancestor';
  if ( $page->ID == $_current_page->ID )
    $css_class[] = 'current_page_item';
  elseif ( $_current_page && $page->ID == $_current_page->post_parent )
    $css_class[] = 'current_page_parent';

  return $css_class;
}
add_filter( 'page_css_class', 'kct_page_css_class', 10, 4 );

#filter that adds custom post types to blog page and other feeds.
function get_custom_post_type($query){
if ( is_home() && $query->is_main_query() || is_feed() )
	$query->set( 'post_type', array( 'post', 'video') );
return $query;
}
add_filter( 'pre_get_posts', 'get_custom_post_type' );

#filter that adds custom post types to category and tag pages.
function query_post_type($query) {
  if(is_category() || is_tag()) {
    $post_type = get_query_var('post_type');
	if($post_type)
	    $post_type = $post_type;
	else
	    $post_type = array('post','video');
    $query->set('post_type',$post_type);
	return $query;
    }
}
add_filter('pre_get_posts', 'query_post_type');

#custom tag cloud tool tip function
function custom_tooltip_callback($count){
    return sprintf( 
        _n('%s Topic.', '%s Topics.', $count),
        number_format_i18n($count)
    );
}

?>