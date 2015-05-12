<!-- Document Begins Here -->
<!DOCTYPE html>
<html lang="en">
<!-- Header Begins Here -->
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
	<!-- Header Ends Here -->
	<!-- Body Begins Here -->
	<body <?php body_class() ." nopadding "; ?> >
	
	<div id="nav_wrap" class="navbar transparent navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a href="/home/" class="navbar-brand">..when air takes breath</a>
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
							'depth'          => '2',
						 	'container'      => '', 
						 	'container_id'   => '',
			 			 	'container_class'=> '',
							'menu_id'        => '',
							'menu_class'     => '',
							'items_wrap'     => '%3$s',
							'fallback_cb'	 => '',
							'walker'         => new DD_Walker(),
							)
						);
					?>
				</ul>			
			</div>
		</div>
	</div>