<!-- Footer Begins Here -->
<hr />
<div class="container">
	<div class="row">
			<div class="col-xs-10 col-lg-10">
					<a href="" class="btn-xs">an aleksandar petrovic site&nbsp&copy; 2015</a>
			</div>
	</div>
</div>	

	<!-- Begin Scripts -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/bootstrap.min.js"></script>
   	<script src="<?php bloginfo('template_directory');?>/js/bootswatch.js"></script>
	<script src="<?php bloginfo('template_directory');?>/js/ajaxlinks.js"></script>
	
	<!-- FlexSlider -->
  	<script src="<?php bloginfo('template_directory');?>/flexslider/jquery.flexslider-min.js"></script>

  	<script type="text/javascript">
		$( document ).ready(function() {
			$('.flexslider').flexslider({
				animation: "fade",
				controlNav: false,
				directionNav: false
			});
			$('div a img').each(function(){
				$(this).hover(function(){$(this).addClass("highlight");},function(){$(this).removeClass("highlight");});
			});
		       $(window).scroll(function (event) {
    				var y = $(this).scrollTop();
    				if(y > 0){ $('#nav_wrap').slideUp(100); } 
    				else{ $('#nav_wrap').slideDown(100); }
			});
		});
	</script>
<?php wp_footer(); ?>
<!-- Footer Ends Here -->
</body>
<!-- Body Ends Here -->
</html>
<!-- Document Ends Here -->