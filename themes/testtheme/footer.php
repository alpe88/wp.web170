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