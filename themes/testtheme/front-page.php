<?php get_header(); ?>
<!-- header.php Ends Here -->

<!-- Content Begins Here -->
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
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-lg-12">
					<div id="loadedContent" class="col-xs-12 col-sm-8"><!-- Content will be loaded here -->
					<!-- Widgets Start Here -->
						<!-- Introducing Multiple Loops Here -->
						<div class="row">
							<div id="widgets" class="col-xs-12">
								<!-- Loop One: -->
								<section class="widget-item col-xs-6">
									<?php if(have_posts()) : while(have_posts()) : the_post(); #begins the WP Loop ?>
									<?php		the_content(); #display page content ?>
									<?php endwhile; endif; #end of The Loop ?>
								</section>
								<!-- Loop Two: -->
								<section class="widget-item col-xs-6">
									<?php rewind_posts(); #this function stops the first loop in order to prevent a functional error - aka an infinite loop :[] ?>
									<?php query_posts('showposts=5'); #this instructs the second loop - how many posts to pull from the blog ?>
										<ul id="latest-posts">
											<?php while (have_posts()) : the_post(); #the secound loop starts here ?>
												<li><a href="<?php the_post_thumbnail( 'thumbnail' ); #featured image ?><?php the_permalink(); ?>"><?php the_title(); ?></a></li>
											<?php endwhile; #end of secound loop ?>
										</ul>
								</section>
								<!-- Another Loop Might Go Here: -->
							</div>
						</div>
    				</div>
					<div id="sidebar" class="col-sm-4 hidden-xs"><!-- Sidebar will be loaded here -->
						<?php get_sidebar(); ?>
					</div>
					<!-- Main Content Section Ends Here -->
				</div>
			</div><small>front-page.php</small>
		</div>
	</div>
</div>
<!-- Content Ends Here -->

<!-- footer.php begins here -->
<?php get_footer(); ?>