<?php get_header(); ?>
<!-- header.php Ends Here -->
<?php
          setPostViews(get_the_ID()); #for counting of post views.
?>
<!-- Content -->
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
	
	<div class="row">
		<div class="col-xs-12">	
			<div class="row margin-bottom-md">
				<div class="col-lg-12 col-xs-12">
				<!-- Begin Icon Navigation -->
					<div class="row" id="grid">
						<div class="icon-row">
							<div class="col-sm-1 col-xs-4 ico-menu-item"><a class="" href="../wordpress/" title="~>back to Home"><img src="<?php bloginfo('template_directory');?>/images/icons/back-button.png" class="img-thumbnail img-responsive" /></a></div>  
							<div class="col-sm-1 col-xs-4 ico-menu-item"><a class="" href="/about/" title="~>to About Me"><img src="<?php bloginfo('template_directory');?>/images/icons/empty-my-world.png" class="img-thumbnail img-responsive" /></a></div> 
							<div class="col-sm-1 col-xs-4 ico-menu-item"><a class="" href="/contact-form/"><img src="<?php bloginfo('template_directory');?>/images/icons/empty-mail.png" class="img-thumbnail img-responsive" /></a></div> 
						</div>
						<div class="icon-row">
							<div class="col-sm-1 col-xs-4 ico-menu-item"><a class="" href="/portfolio/"><img src="<?php bloginfo('template_directory');?>/images/icons/brain.png" class="img-thumbnail img-responsive" /></a></div>  
							<div class="col-sm-1 col-xs-4 ico-menu-item"><a class="" href="../wordpress/"><img src="<?php bloginfo('template_directory');?>/images/icons/empty-clock-logo.png" class="img-thumbnail img-responsive" /></a></div> 
							<div class="col-sm-1 col-xs-4 ico-menu-item"><a class="" href="../wordpress/"><img src="<?php bloginfo('template_directory');?>/images/icons/empty-google-logo.png" class="img-thumbnail img-responsive" /></a></div> 
						</div>
						<div class="icon-row">
							<div class="col-sm-1 col-xs-4 ico-menu-item"><a class="" href="../wordpress/"><img src="<?php bloginfo('template_directory');?>/images/icons/empty-linkedin-logo-square2.png" class="img-thumbnail img-responsive" /></a></div>  
							<div class="col-sm-1 col-xs-4 ico-menu-item"><a class="" href="../wordpress/"><img src="<?php bloginfo('template_directory');?>/images/icons/empty-instagram-logo.png" class="img-thumbnail img-responsive" /></a></div> 
							<div class="col-sm-1 col-xs-4 ico-menu-item"><a class="" href="../wordpress/"><img src="<?php bloginfo('template_directory');?>/images/icons/empty-settings.png" class="img-thumbnail img-responsive" /></a></div>
						</div>
					</div>
				</div>
			</div>
			<!-- Main Content Section Begins Here -->
			<div class="row">
				<div class="col-xs-12 col-lg-12">
				
					<div id="loadedContent" class="col-xs-12 col-sm-8"><!-- Content will be loaded here -->
						<?php if(have_posts()) : while(have_posts()) : the_post(); #begins the WP Loop ?>
										<article id="post-content-<?php the_ID(); ?>" class="post-content">
													<div class="row">
														<div class="col-xs-3 nopadding">
															<?php the_post_thumbnail('thumbnail',array('class' => "img-responsive center-block")); #featured image ?>
														</div>
														<div class="col-xs-9 nopadding">
															<h2><a href="<?php the_permalink(); #link to post ?>"><?php the_title(); #title ?></a></h2>
															<?php if(function_exists('the_ratings')) { the_ratings(); } ?>
														</div>
														</div>
														<small>Posted on <?php the_time('F j, Y'); #time item posted on ?> by <?php the_author(); #post author ?>
														in <?php the_category(' '); #list of categories ?></small>
														<?php the_content(); #the content of the post ?>
														<p class="read-more">
															<a href="/blog/">Back to Blog</a>
															<?php echo getPostViews(get_the_ID());?>
														</p>
										</article> 
						<?php endwhile; endif; #end of The Loop ?>
					</div>
					<div id="sidebar" class="col-sm-4 hidden-xs"><!-- Sidebar will be loaded here -->
						<?php get_sidebar(); ?>
					</div>
					<!-- Main Content Section Ends Here -->
    			</div>
			</div>
		</div>
	</div>
<small>single.php</small>
</div>
<!-- Content -->

<!-- footer.php begins here -->
<?php get_footer(); ?>