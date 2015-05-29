<!-- SideBar Begins Here -->
<div id="sidebar">
   
    <!-- Begin Sub-Navigation -->
    <div id="sub-navigation" class="widget">
    <?php if(is_page()) : #when in pages ?>
	<?php if(get_post_meta($post->ID, 'quote', true)){
		?>
		<div id="coolQuote"><blockquote>
			<?php echo get_post_meta($post->ID,'quote',true);?>
		</blockquote></div>	
<?php } ?>
    <h2 class="sub-navigation-title">
    <?php echo get_the_title($post->post_parent); #get the title of the page ?></h2>
    <ul class="sub-navigation-items"><?php 
    
    if($post->post_parent){#when page is a child, aka it has a parent
        wp_list_pages(array(
				'child_of' => $post->post_parent,
				'title_li' => __('')
			)); #show the sub pages without titles
    }else{ #when page does not have a parent
        wp_list_pages(array(
				'child_of' => $post->ID,
				'title_li' => __('')
			)); #show the sub pages without titles
    }

    ?></ul>
    <?php endif; #end of page check ?>
    <?php if (!(is_page())) : #when not in pages ?>
    <h2 class="sub-navigation-title">tha! Cloud of Tags ~ yo</h2>
    <ul class="sub-navigation-items">
		<?php wp_tag_cloud(array(
		'smallest'                  => get_smallest_count(), 
		'largest'                   => 22,
		'unit'                      => 'pt', 
		'number'                    => 45,  
		'format'                    => 'flat',
		'separator'                 => "\n",
		'orderby'                   => 'count', 
		'order'                     => 'ASC',
		'exclude'                   => null, 
		'include'                   => null, 
		'topic_count_text_callback' => custom_tooltip_callback,
		'link'                      => 'view', 
		'taxonomy'                  => array('post_tag','category','link_category'), 
		'echo'                      => true,
		'child_of'                  => null, #Note
					)); #the cloud! ?>
    </ul>
	
    <?php endif; ?>

    <!-- Begin Dynamic Sidebar -->
    <?php dynamic_sidebar(1); ?>

    </div>
    <!-- End Sub-Navigation -->
</div>
<!-- SideBar Ends Here -->


<?php
function get_smallest_count(){
return 0;
}
?>