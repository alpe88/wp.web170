<?php if(get_option('show_on_front') == 'page'){#true when on a page
										if(!is_front_page()){#true when not on the front page, as specified in Settings>>Reading ?>
											<h2><a href="<?php the_permalink(); #link to post ?>"><?php the_title(); #title ?></a></h2>
											<?php the_content(); #display page content ?>
								<?php 	}else{#true when on the front page
											the_content(); #display page content
										}
									}else if(get_option('show_on_front') == 'posts'){#true when on a post
										if(!is_single()){#true when a list of posts ?>
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
								<?php	}else{#true when on a single post ?>
											<article id="post-excerpt-<?php the_ID(); ?>" class="post-excerpt">
													<h2><a href="<?php the_permalink(); #link to post ?>"><?php the_title(); #title ?></a></h2>
													<small>Posted on <?php the_time('F j, Y'); #time item posted on ?> by <?php the_author(); #post author ?>
													in <?php the_category(', '); #list of categories ?></small>
													<a href="<?php the_permalink(); #link ?>"><?php the_post_thumbnail( 'thumbnail' ); #featured image ?></a>
													<?php the_content(); #the excerpt of the post ?>
													<p class="read-more">
														<a href="../blog/">Back to Blog</a>
													</p>
											</article>
								<?php		}
									}else{ echo 'What a jive turkey :d';} ?>