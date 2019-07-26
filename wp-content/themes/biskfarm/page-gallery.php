<?php
/**
 * Template Name: Gallery Page
 *
 */

get_header(); ?>

<section class="brand-banner">
            <div class="item">
               <div class="relative-sec" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');">
               </div>
            </div>
         </section>
         <section class="bg-dark abt-normal_sec">
            <div class="container">
               <div class="row">
                  <div class="gallery">
                     <div class="mb-tab_gallery">
                        <div class="col-md-12">
						   <ul class="clearfix">
							  <li class="active-btn"  id="showapprove"><a href="javascript:void(0);">PRINT ADS</a></li>
							  <li  id="showatable"><a href="javascript:void(0);">BRAND TVC</a></li>
						   </ul> 
						</div>
                     </div>
                     <div class="gallery-listing clearfix" id="show_table">
                        <div class="col-sm-12">
                        <div class="title-head about-top0">
                           <h1 class="top-title">PRINT ADS</h1>
                        </div>
                        </div>
						<?php
                   
                  $wp_query = new WP_Query(array('post_type' => 'print_ads','posts_per_page' => -1, 'paged' => 1));
                  if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
				  

  
              ?>
                        <div class="col-sm-3 col-md-3 col-xs-6">
                           <div class="add-gall">
							 <a data-fancybox="gallery" href="<?php if(has_post_thumbnail()){ the_post_thumbnail_url('full'); } ?>">
						     <img src="<?php if(has_post_thumbnail()){ the_post_thumbnail_url('full'); } ?>">
						     </a>
						   </div>
                        </div>
						<?php endwhile; endif;  wp_reset_query();?>
                        
                     </div>
                     <div class="clearfix"></div>
                     <div class="gallery-listing video-list" id="hidden_table">
                     
                      <div class="col-sm-12">
                        <div class="title-head about-top0">
                           <h2 class="top-title">BRAND TVC</h2>
                        </div>
                        </div>
						<?php
                   
                  $wp_query = new WP_Query(array('post_type' => 'brand_tvc','posts_per_page' => -1, 'paged' => 1));
                  if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
				  

  
              ?>
                        <div class="col-sm-6 col-md-4">
                           <div class="video-gall">
                              <div class="frame-video">
                                 <iframe width="100%" height="250" src="https://www.youtube.com/embed/<?php echo get_field('youtube_id'); ?>" frameborder="0"></iframe>
                              </div>
                              <div class="brand-detail clearfix">
                                 <h3><?php the_title(); ?></h3>
                                 <div class="brand-det">
                                    <?php the_content(); ?>
                                 </div>
                                 <div class="social-ads">
								 <?php if(get_field('watch_url', $post->ID) !="") {  ?>
                                    <span><a class="wat-add" href="<?php echo get_field('watch_url', $post->ID); ?>" target="_blank">Watch ad</a></span> 
								 <?php } ?>
                                  <!--  <span class="pull-right"><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>-->
                                 </div>
                              </div>
                           </div>
                        </div>
							<?php endwhile; endif;  wp_reset_query();?>
                        
                     </div>
                  </div>
               </div>
            </div>
         </section>



<?php
get_footer();
