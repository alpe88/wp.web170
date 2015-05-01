<!DOCTYPE html>
<html lang="en">
	<head>
	<!-- Begin Meta Information -->
	<title>~~>a humbly amazing portfolio</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="description" content="an Aleksandar Petrovic site" />
	<meta name="keywords" content="portfolio site, aleksandar, petrovic, doing it big" />
	<meta name="robots" content="no index, no follow" />
	<meta http-equiv="Cache-Control" content="no-cache" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="-1" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">

	<!-- Begin Style Sheets -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/style.css" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/bootstrap.css" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/bootswatch.min.css" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/nrmlze.css" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/flexslider/flexslider.css" type="text/css">
	
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	
	</head>

	<body <?php body_class(); ?> class="nopadding" >
	
	<div class="navbar transparent navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a href="" class="navbar-brand">..when air takes breath</a>
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
			</div>
			<div class="navbar-collapse collapse" id="navbar-main">
				<ul class="nav navbar-nav">
					<?php wp_nav_menu(
						array( 
							'theme_location' => 'main_menu',
							'menu'           => 'Main Menu',
						 	'container'      => '', 
						 	'container_id'   => '',
			 			 	'container_class'=> '',
							'menu_id'        => '',
							'menu_class'     => '',
							'items_wrap'     => '%3$s',
							)
						);
					?>
				</ul>			
			</div>
		</div>
	</div>
	<!--feedback control-->
    <div class="container" style="margin-top:.5em;">
		<div class="row">
			<div class="col-xs-12 col-lg-12"></div>
		</div>
	</div>
	<!--feedback control-->
<div class="nopadding jumbotron">
	<div id="" class="flexslider" style="margin-top:2em;">
		<ul class="slides">
			<li>
				<img src="<?php bloginfo('template_directory');?>/images/slideOne.png" />
				<span class="text-overlay flex-caption"~~>spanning vast distances...</span>
			</li>
			<li>
				<img src="<?php bloginfo('template_directory');?>/images/slideTwo.png" />
				<span class="text-overlay flex-caption">~~>with grand horizons...</span>
			</li>
			<li>
				<img src="<?php bloginfo('template_directory');?>/images/slideThree.png" />
				<span class="text-overlay flex-caption">~~>on my super sayan s#!7.</span>
			</li>
		</ul>
	</div>
</div>

<div class="container">

    <div class="row">
		<h1 class="col-xs-12">~~>a humbly amazing portfolio</h1>
  	</div>
	
	<!-- Begin Icon Navigation -->
	<div class="row">
		<div class="col-xs-12">	
			<div class="row">
				<div class="col-lg-12 col-xs-12">
					<div class="row" id="grid">
						<div class="col-md-1 col-xs-4"><a class="" href="../wordpress/" title="~>back to Home"><img src="<?php bloginfo('template_directory');?>/images/icons/back-button.png" class="img-thumbnail img-responsive" /></a></div>  
						<div class="col-md-1 col-xs-4"><a class="" href="" title="~>to About Me"><img src="<?php bloginfo('template_directory');?>/images/icons/empty-my-world.png" class="img-thumbnail img-responsive" /></a></div> 
						<div class="col-md-1 col-xs-4"><a class="" href=""><img src="<?php bloginfo('template_directory');?>/images/icons/empty-mail.png" class="img-thumbnail img-responsive" /></a></div> 
						<div class="col-md-1 col-xs-4"><a class="" href=""><img src="<?php bloginfo('template_directory');?>/images/icons/brain.png" class="img-thumbnail img-responsive" /></a></div>  
						<div class="col-md-1 col-xs-4"><a class="" href=""><img src="<?php bloginfo('template_directory');?>/images/icons/empty-clock-logo.png" class="img-thumbnail img-responsive" /></a></div> 
						<div class="col-md-1 col-xs-4"><a class="" href=""><img src="<?php bloginfo('template_directory');?>/images/icons/empty-google-logo.png" class="img-thumbnail img-responsive" /></a></div> 
						<div class="col-md-1 col-xs-4"><a class="" href=""><img src="<?php bloginfo('template_directory');?>/images/icons/empty-linkedin-logo-square2.png" class="img-thumbnail img-responsive" /></a></div>  
						<div class="col-md-1 col-xs-4"><a class="" href=""><img src="<?php bloginfo('template_directory');?>/images/icons/empty-instagram-logo.png" class="img-thumbnail img-responsive" /></a></div> 
						<div class="col-md-1 col-xs-4"><a class="" href=""><img src="<?php bloginfo('template_directory');?>/images/icons/empty-settings.png" class="img-thumbnail img-responsive" /></a></div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-12">
					<div id="loadedContent"><!-- Content from the 'pages' directory will be loaded here-->
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //start the loop ?>
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); //get the page or posting title ?></a></h1>
						<?php the_content(''); //get page or posting written content ?>
						<?php endwhile; endif; //end the loop ?>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

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
		});
	</script>
<?php wp_footer(); ?>
</body>
</html>
