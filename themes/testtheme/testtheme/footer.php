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


<?php
/*
<!-- Start New Menu --> 
<div id="new-menu">
	<p>I am working on the new responsive navigation system's menu function below:</p>
    <ul id="new-menu-items">
    <?php	
	$main = get_pages(array('meta_key' => 'navigation', 'meta_value' => 'main', ));
	$parent_ID = wp_get_post_parent_id( $post_ID );
	
	foreach ($main as $post) { // foreach gateway page... 
	
		if (is_page($post->ID)) { // get list item with classes of...
			 
			echo '<li class="page-item-'.$post->ID.' current-page-item">'; // ... current page item
			 
		} elseif ($parent_ID == ($post->ID)) {
			
			echo '<li class="page-item-'.$post->ID.' current-page-parent">'; // ... current page parent
				
		} else {
			
			echo '<li class="page-item-'.$post->ID.'">'; // ... none
		}
		
		echo '<a href="'.get_permalink($post->ID).'">'.$post->post_title.'</a>'; // get the title with permalink
		echo '<ul class="sub-menu">'; // get the sub-menu items
			
		if ($post->post_parent) { // if the page has a parent...
						
			echo '<li class="pagenav" >'.$post->post_title.' &raquo; Class';
			echo '<ul>';
			echo '<li><a href="'.get_permalink($post->post_parent).'">Syllabus</a></li>'; // stick in the link to syllabus with no class
			wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => '', 'meta_key' => 'navigation', 'meta_value' => 'class',)); 
			echo '</ul>';
			wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => $post->post_title.' &raquo; Lectures:', 'meta_key' => 'navigation', 'meta_value' => 'lecture',));
			wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => $post->post_title.' &raquo; Assignments:', 'meta_key' => 'navigation', 'meta_value' => 'assignment',)); 
			wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => $post->post_title.' &raquo; Exercises:', 'meta_key' => 'navigation', 'meta_value' => 'exercise',));
			wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => $post->post_title.' &raquo; Teams:', 'meta_key' => 'navigation', 'meta_value' => 'team',));
			wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => $post->post_title.' &raquo; Students:', 'meta_key' => 'navigation', 'meta_value' => 'student',));
			
		} else { // if the page does not have a parent...
		
			echo '<li class="pagenav">'.$post->post_title.' &raquo; Class';
			echo '<ul>';
			
			if (is_page($post->ID)) { // stick in the link to syllabus with class
				
				echo '<li class="current-page-item"><a href="'.get_permalink($post->post_parent).'">Syllabus</a></li>';
				
			} else {
				
				echo '<li><a href="'.get_permalink($post->post_parent).'">Syllabus</a></li>';
				
			}
			
			wp_list_pages(array('child_of' => $post->ID, 'title_li' => '', 'meta_key' => 'navigation', 'meta_value' => 'class',));
			echo '</ul>';
			wp_list_pages(array('child_of' => $post->ID, 'title_li' => $post->post_title.' &raquo; Lectures:', 'meta_key' => 'navigation', 'meta_value' => 'lecture',));
			wp_list_pages(array('child_of' => $post->ID, 'title_li' => $post->post_title.' &raquo; Assignments:', 'meta_key' => 'navigation', 'meta_value' => 'assignment',));
			wp_list_pages(array('child_of' => $post->ID, 'title_li' => $post->post_title.' &raquo; Exercises:', 'meta_key' => 'navigation', 'meta_value' => 'exercise',));
			wp_list_pages(array('child_of' => $post->ID, 'title_li' => $post->post_title.' &raquo; Teams:', 'meta_key' => 'navigation', 'meta_value' => 'team',));
			wp_list_pages(array('child_of' => $post->ID, 'title_li' => $post->post_title.' &raquo; Students:', 'meta_key' => 'navigation', 'meta_value' => 'student',));
			
		}
		
		echo '</li>';
		echo '</ul>';
	 
	}
	?>
    </ul>
</div>
<!-- End New menu -->

*/
?>