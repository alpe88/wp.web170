<!-- Footer Begins Here -->
<hr />
<div class="container">
	<div class="row">
			<div class="col-xs-8 col-lg-8 nopadding">
					<a href="" class="btn-xs">an aleksandar petrovic site&nbsp&copy; 2015</a>
			</div>
			<div class="col-xs-4 col-lg-4 nopadding">
				<div id="social_navigation_footer" class="col-xs-12">
					<ul>
						<?php wp_nav_menu(
							array( 
								'theme_location' => 'social_menu',
								'menu'           => 'Social Menu',
						 		'container'      => '', 
						 		'container_id'   => '',
			 			 		'container_class'=> '',
								'menu_id'        => '',
								'menu_class'     => '',
								'items_wrap'     => '%3$s',
								'fallback_cb'	 => '',
								)
							);
						?>
					</ul>
				</div>
			</div>
	</div>
</div>

<!-- NOTE: This function will currently not retrieve pages using the 'meta_key' and 'meta_value' parameters in the $args array as described below. Until this is fixed in the WordPress codebase, you may want to use get_posts() instead. -->
<div class="jumbotron">
<div class="container">
<div class="row">
<div class="col-xs-12">

<!-- NOTE: This function will currently not retrieve pages using the 'meta_key' and 'meta_value' parameters in the $args array as described below. Until this is fixed in the WordPress codebase, you may want to use get_posts() instead. -->

<div id="footer-menu">
	<p>I am working on the new responsive navigation system's menu function below:</p><br>
	<ul id="footer-menu-items">
    <?php
	
	$parent = get_pages(array( 'post_type' => 'page',
				   'post_status' => 'publish',
				   'parent' => 0,	
				 ));
	
	
	function get_menu_classes() {
		
		global $post;
	
			
		if( is_page($post->ID) ) {
			if($post->post_parent){
			 	return 'current-page-item';
			} 
			if(!$post->post_parent){
				return 'current-page-parent';	
			}
		}		
	}
	$children = get_pages(array('child_of' => $post->parent,
						));
		
	foreach ($parent as $post) { // foreach gateway page... 
		echo '<li class="page-item page-item-'.$post->ID.' '.get_menu_classes().'">'; // get the list item with classes
		echo '<a href="'.get_permalink($post->ID).'">'.$post->post_title.'</a>'; // get the title with permalink
			
		if ($post->post_parent) { // if the page has a parent...
			echo '<ul class="sub-menu">'; // get the sub-menu items
			echo '<li class="page-item page-item-'.$children->ID.' '.get_menu_classes().'">'; // get the list item with classes
			echo '<a href="'.get_permalink($children->ID).'">'.$children->post_title.'</a>'; // get the title with permalink echo '</li>';		
			wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => $post->post_title.' &raquo; Class:', 'meta_key' => 'navigation', 'meta_value' => 'class',)); 
			wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => $post->post_title.' &raquo; Lectures:', 'meta_key' => 'navigation', 'meta_value' => 'lecture',));
			wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => $post->post_title.' &raquo; Assignments:', 'meta_key' => 'navigation', 'meta_value' => 'assignment',)); 
			wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => $post->post_title.' &raquo; Exercises:', 'meta_key' => 'navigation', 'meta_value' => 'exercise',));
			wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => $post->post_title.' &raquo; Teams:', 'meta_key' => 'navigation', 'meta_value' => 'team',));
			wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => $post->post_title.' &raquo; Students:', 'meta_key' => 'navigation', 'meta_value' => 'student',));
			echo '</ul>';
		} else { // if the page does not have a parent...
		
			wp_list_pages(array('child_of' => $post->ID, 'title_li' => $post->post_title.' &raquo; Class:', 'meta_key' => 'navigation', 'meta_value' => 'class',));
			wp_list_pages(array('child_of' => $post->ID, 'title_li' => $post->post_title.' &raquo; Lectures:', 'meta_key' => 'navigation', 'meta_value' => 'lecture',));
			wp_list_pages(array('child_of' => $post->ID, 'title_li' => $post->post_title.' &raquo; Assignments:', 'meta_key' => 'navigation', 'meta_value' => 'assignment',));
			wp_list_pages(array('child_of' => $post->ID, 'title_li' => $post->post_title.' &raquo; Exercises:', 'meta_key' => 'navigation', 'meta_value' => 'exercise',));
			wp_list_pages(array('child_of' => $post->ID, 'title_li' => $post->post_title.' &raquo; Teams:', 'meta_key' => 'navigation', 'meta_value' => 'team',));
			wp_list_pages(array('child_of' => $post->ID, 'title_li' => $post->post_title.' &raquo; Students:', 'meta_key' => 'navigation', 'meta_value' => 'student',));
			
		}
		
		echo '</li>';
		
	 
	}

	?>
    </ul>
</div>



</div>
</div>
</div>
</div>








	<!-- Begin Scripts -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
   	<script src="<?php bloginfo('template_directory');?>/js/bootstrap.min.js"></script>
   	<script src="<?php bloginfo('template_directory');?>/js/bootswatch.js"></script>
	<script src="<?php bloginfo('template_directory');?>/js/ajaxlinks.js"></script>
	<script src="<?php bloginfo('template_directory');?>/js/custom.js"></script>

	<!-- FlexSlider -->
  	<script src="<?php bloginfo('template_directory');?>/flexslider/jquery.flexslider-min.js"></script>

  	<script type="text/javascript">
		$(document).ready(function() {
			var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
			$('.flexslider').flexslider({
				animation: "fade",
				controlNav: false,
				directionNav: false
			});

			$('div.ico-menu-item a img').each(function(){
				$(this).hover(function(){$(this).addClass("highlight");},function(){$(this).removeClass("highlight");});
			});
		    	$(window).scroll(function (event) {
    				var y = $(this).scrollTop();
    				if(y > 0){ $('#nav_wrap').slideUp(100); } 
    				else{ $('#nav_wrap').slideDown(100); }
			});
			$(window).resize(function () {
   				waitForFinalEvent(function(){
    				}, 500, "this string is really unique...");
				if(w < 768){ $('.ico-row').addClass("ico-row-style");}
				if(w > 768){ $('.ico-row').removeClass("ico-row-style");}
			});
		});
	</script>
<?php wp_footer(); ?>
<!-- Footer Ends Here -->
</body>
<!-- Body Ends Here -->
</html>
<!-- Document Ends Here -->