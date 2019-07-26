<?php
/**
 * Template Name: News Page
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

                     <div class="clearfix"></div>
                     <div class="gallery-listing video-list" id="hidden_table">
                     
                      <div class="col-sm-12">
                        <div class="title-head about-top0">
                           <h2 class="top-title">News and Updates</h2>
                        </div>
                        </div>
						<?php
                   
                  $wp_query = new WP_Query(array('post_type' => 'news','posts_per_page' => -1, 'paged' => 1));
                  if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
				  

  
              ?>
                        <div class="col-sm-6 col-md-4">
                           <div class="video-gall">
                              <div class="frame-video">
                                <img src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="<?php the_title(); ?>">
                              </div>
                              <div class="brand-detail">
                                 <h3><?php the_title(); ?></h3>
                                 <div class="brand-det">
                                    <?php the_content(); ?>
                                 </div>
                                 <div class="social-ads">
                                    <span class="wat-add" ><?php echo get_field('news_publish_date', $post->ID) ?></span> 
									 <?php if(get_field('watch_ads', $post->ID) !="") {  ?>
                                    <span><a class="wat-add" href="<?php echo get_field('watch_url', $post->ID); ?>" target="blank">Watch ad</a></span> 
								 <?php } ?>
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
