<!-- SideBar Begins Here -->
<div id="sidebar">
   
    <!-- Begin Sub-Navigation -->
    <div id="sub-navigation" class="widget">
    <?php if(is_page()) : #when in pages ?>
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
    <h2 class="sub-navigation-title">Blog</h2>
    <ul class="sub-navigation-items"><?php wp_list_categories(array(
								'show_option_all' =>     '',
								'orderby'	    =>	   'name',
								'order'	    =>	   'DESC',
								'title_li'        =>    __(''),
								'style'	    =>    'list'
									)); #show categories without titles ?>
    </ul>
    <?php endif; ?>
    </div>
    <!-- End Sub-Navigation -->
    
</div>
<!-- SideBar Ends Here -->