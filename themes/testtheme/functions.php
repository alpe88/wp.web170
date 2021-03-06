<?php
/*
Theme Name: Aleksandar Petrovic's WordPress Demo Theme4
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
function add_page_css_class( $css_class, $page, $depth, $args ) {
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
add_filter( 'page_css_class', 'add_page_css_class', 10, 4 );

#filter that adds custom post types to pages.
function set_query_post_type($query) {
  if(is_home() && $query->is_main_query() || is_feed() || is_category() || is_tag()) {
    $post_type = get_query_var('post_type');
	if($post_type)
	    $post_type = $post_type;
	else
	    $post_type = array('post','video');
    $query->set('post_type',$post_type);
	return $query;
    }
}
add_filter('pre_get_posts', 'set_query_post_type');

#custom tag cloud tool tip function
function custom_tooltip_callback($count){
    return sprintf( 
        _n('%s Topic.', '%s Topics.', $count),
        number_format_i18n($count)
    );
}

#custom flexslider ala mike sinkula - #genius
function add_flexslider() {    
    $attachments = get_children(array('post_parent' => get_the_ID(), 'order' => 'ASC', 'orderby' => 'menu_order', 'post_type' => 'attachment', 'post_mime_type' => 'image','caption' => $attachment->post_excerpt, ));

    if ($attachments) {        
        echo '<div class="flexslider">';
        echo '<ul class="slides">';
    
        foreach ($attachments as $attachment_id => $attachment) {            
	     echo '<li>';
            echo wp_get_attachment_image($attachment_id, 'large');
            echo '<span class="text-overlay flex-caption">';
            echo get_post_field('post_excerpt', $attachment->ID);
            echo '</span>';
            echo '</li>';
        }
        echo '</ul>';
        echo '</div>';
    }
}
add_shortcode( 'flexslider', 'add_flexslider' );

#for custom post meta fun stuff yay!
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

// Remove issues with prefetching adding extra views
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0); 
?>