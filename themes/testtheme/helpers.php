<?php
/*<div id="loadedContent" class="col-xs-12 col-md-8"><!-- Content will be loaded here -->
						<?php if(have_posts()) : while(have_posts()) : the_post(); #begins the WP Loop ?>
						<?php if(is_front_page() && is_home()){#when default home page ?>
						<?php			the_content(); #display page content ?>
						<?php	 }elseif (is_front_page()){#when static home page ?>
										<?php the_content(); #display page content ?>
						<?php	 }elseif (is_home()){#blog posts page as set up in Settings>>Reading ?>
										<article id="post-excerpt-<?php the_ID(); ?>" class="post-excerpt">
														<h2><a href="<?php the_permalink(); #link to post ?>"><?php the_title(); #title ?></a></h2>
														<small>Posted on <?php the_time('F j, Y'); #time item posted on ?> by <?php the_author(); #post author ?>
														in <?php the_category(', '); #list of categories ?></small>
														<a href="<?php the_permalink(); #link ?>"><?php the_post_thumbnail( 'thumbnail' ); #featured image ?></a>
														<?php the_excerpt(); #the excerpt of the post ?>
														<p class="read-more">
															<a href="<?php the_permalink(); #link to post, used to show full post ?>">Read More &raquo;</a>
														</p>
											</article>
						<?php	 }else if(is_page()){#when it's a page ?>
						<?php 				the_content(); #the content of the post ?>	
						<?php	 }else{#possibly the sloppiest way to handle what I'm trying to do here.... ?>
										<article id="post-content-<?php the_ID(); ?>" class="post-content">
														<h2><a href="<?php the_permalink(); #link to post ?>"><?php the_title(); #title ?></a></h2>
														<small>Posted on <?php the_time('F j, Y'); #time item posted on ?> by <?php the_author(); #post author ?>
														in <?php the_category(', '); #list of categories ?></small>
														<a href="<?php the_permalink(); #link ?>"><?php the_post_thumbnail( 'large' ); #featured image ?></a>
														<?php the_content(); #the content of the post ?>
														<p class="read-more">
															<a href="../blog/">Back to Blog</a>
														</p>
										</article> 
						<?php			} ?>
						<?php endwhile; endif; #end of The Loop ?>
					</div>*/
					?>