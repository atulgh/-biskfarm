<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

         <section class="home-banner">

            <div class="owl-carousel owl-theme" id="banner_slider">
            	<?php
            	$query = new WP_Query(array(
    					'post_type' => 'home_banner',
    					'post_status' => 'publish',
    					'posts_per_page' => -1,
					));
            	 	while ( $query->have_posts() ) : $query->the_post();       
            	      	$bannerImage_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID) ); 

            	?>

            	
               <div class="item">
                  <div class="relative-sec">
                     <div class="slider" style="background-image: url('<?= $bannerImage_url ?>');">
                        <figure>
                           <div class="slider-text">
                              <!--<h1 class=" wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s"><?php the_title() ?></h1>
                              <div class="wheat-img">
                                 <div class="line-w3ls"><i><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/wheat.png"></i></div>
                              </div>-->
                              <a class="exp-btn" href="<?= get_field('banner_link') ?>"><?= get_field('bannner_button') ?></a>
                           </div>
                        </figure>
                     </div>
                  </div>
               </div>

               <?php endwhile; wp_reset_postdata(); ?>


            </div>
         </section>
         <section class="bg-dark">
            <div class="container">
               <div class="row">
                  <div class="abt-pres">
                     <div class="col-sm-6">
                        <div class="div-sec">
                           <div class="title-head  wow fadeInUp" data-wow-duration="1s">
                              <h2><?php echo get_field('about_title', 260); ?></h2>
                           </div>
                           <div class="det-text">
                             <?= get_field('about_content', 260) ?>
                           </div>
                           <div class="btn-wdth">
                              <div class="btn-more"><a href="<?= get_field('url_link', 260) ?>">Know More</a></div>
                           </div>
                           <div class="wdth-more">
						   
                              <div class="more-text"><?= get_field('vision_subtitle', 260) ?></div>
                              <div class="more-vision"><a href="about-us?vision">OUR VISION <span class="arrow-v"></span></a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="div-sec">
                           <div class="title-head wow fadeInUp" data-wow-duration="1s">
                              <h2><?= get_field('our_preference_title', 260) ?></h2>
                           </div>
                           <div class="pre-map"><img src="<?= get_field('preference_upload', 260)['url'] ?>"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="bg-dark">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="tabbed-prod">
                        <div class="title-head">
                           <h2>PRODUCT CATALOG</h2>
                        </div>
                        <div class="tabs_parent">
                           <span class="select">BISCUITS </span>
						    <?php
	                  		/** The taxonomy we want to parse */
	                  		$taxonomy = "brands_category";
	                 		 /** Get all taxonomy terms */
	                  		$terms = get_terms(array(
	                          "taxonomy"    => $taxonomy,
	                          "orderby"    => "count",
	                          "child_of"       => 22,
	                          "hide_empty" => true,
	                          "hierarchical" => false,
	                     		 )
	                 		 );
	                  				/** Get terms that have children */
	                				 // $hierarchy = _get_term_hierarchy($taxonomy);
	              				  // var_dump($terms);
	                 				 $count = 1;
               				?>
                           <ul class="nav nav-tabs">
						  <?php foreach($terms as $term) { 
							if($term->parent=="22"){
						  ?>
                              <li data-title="<?php echo $term->name; ?>" data-summary="" <?=($term->slug=="biscuits")?"class='active'":""?>><a data-toggle="tab" href="#<?php echo $term->slug; ?>"><?php echo $term->name; ?></a></li>
						  <?php } } ?>
                           
                              <li class="pull-right hidden-sm hidden-xs"><a href="<?= get_field('catalog_pdf', 260)['url'] ?>" class="download-tag" target="_blank"><span><i class="fa fa-download"></i></span> DOWNLOAD CATALOG</a></li>
                           </ul>
                           <div class="text-center visible-xs visible-sm"><a href="<?= get_field('catalog_pdf', 260)['url'] ?>" class="download-tag" target="_blank"><span><i class="fa fa-download"></i></span> DOWNLOAD CATALOG</a></div>
                        </div>
                        <div class="tab-content">
					<?php 
					$sliderCounter = 1;
					foreach($terms as $term) { 
							if($term->parent=="22"){
						  ?>
                           <div id="<?php echo $term->slug; ?>" class="tab-pane fade<?=($term->slug=="biscuits")?" in active":""?>">
                              <div class="owl-carousel owl-theme" id="product_slider-<?= $sliderCounter ?>">
							  <?php
									$currentTerm = $term->slug;

							

										$args = array(
										  'post_type'   => 'our_brands',
										  'post_status' => 'publish',
										  'tax_query'   => array(
											array(
												'taxonomy' => $taxonomy,
												'field'    => 'slug',
												'terms'    => $currentTerm
											)
										  )
										 );									

									// The Query
								$brandpost = new WP_Query( $args );
								if( $brandpost->have_posts() ) :
									
									 while( $brandpost->have_posts() ) :
										$brandpost->the_post();
										 $featured_img_url = get_the_post_thumbnail_url($brandpost->ID,'full'); 
									?>
										 <div class="item">
											<div class="product-relative">
											   <img src="<?php echo $featured_img_url; ?>">
											   <div class="hover-overlay">
												  <h3><?php the_title(); ?></h3>
												  <a class="view-prod" href="<?php the_permalink(); ?>">VIEW PRODUCT</a>
											   </div>
											</div>
										 </div>
								 	<?php endwhile; endif; // end of the loop. ?>

									<?php wp_reset_postdata(); ?>
 
                              </div>
                           </div>
						   
						   <?php $sliderCounter++; } } ?>

                        </div>
                        <div class="prod-foot">
                           <div class="product-footer_title" id="data-title">BISCUITS</div>
                           <!--<div class="product-footer_tagline">SEMI SWEET BISCUITS</div>-->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="bg-dark">
            <div class="container">
               <div class="row">
                  <div class="title-head title-padd">
                     <h2>PRODUCT TVC</h2>
                  </div>
                  <div class="tvc-slider cust-padd">
                     <div class="owl-carousel owl-theme" id="tvc-slider">
					<?php 
					$counter = 1;
						  $wp_query = new WP_Query(array('post_type' => 'brand_tvc','posts_per_page' => 3, 'paged' => 1));
						  if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
					?>
                        <div class="item-video" data-merge="<?php echo $counter; ?>">
                           <div class="slider-tube clearfix">
                              <div class="col-md-9 col-sm-8 padd-0">
                                 <div class="fram-tv"> 
                                    <iframe class="youtube-video" id="video<?php echo $counter; ?>" width="100%" height="460" src="https://www.youtube.com/embed/<?php echo get_field('youtube_id'); ?>?enablejsapi=1&version=3&playerapiid=ytplayer" frameborder="0"  allowfullscreen></iframe> 
                                 </div>
                              </div>
                              <div class="col-md-3 col-sm-4 padd-0">
                                 <div class="tvc-detail">
                                    <h3><?php the_title(); ?></h3>
                                    <div class="tvc-detail-txt">
                                       <?php the_content(); ?>
                                       <div class="view-name"><a href="/gallery/#tvc">VIEW ALL</a></div>
                                    </div>
                                 </div>
                              </div>
                              <!-- <span class="pagination-num"><a href="javascript:void(0)">2/1</a></span> -->
                           </div>
                        </div>
						<?php $counter++; endwhile; endif;  wp_reset_query();?>
                        
                     </div>
                  </div>
               </div>
               <!-- <div id="counter"></div> -->
            </div>
         </section>
         <section class="hamper-sec">
            <div class="hamper-rel">
               <div class="hamper-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/banner/hamper-bg.png');">
                  <div class="hamper-text">
                     <h2 class="italic-text">Gift A Hamper</h2>
                     <div class="gift-det">
                        <p>English Cracker Cream(Lemon) is the new lemony variant of the popular English Cracker Cream. Crispy biscuits with a layer of lemon cream inside- a rare variety of crackers with the fresh lemony feel.</p>
                     </div>
                     <div class="btn-more text-center"><a href="javascript:void(0);" data-toggle="modal" data-target="#gift-modal">GET IT NOW</a></div>
                  </div>
               </div>
            </div>
         </section>
         <section class="news-update">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-7">
                     <div class="wdth-left-new clearfix">
                        <div class="title-head">
                           <h2>NEWS AND UPDATES</h2>
                        </div>
                        <div class="more-listing">
                           <ul class="list-unstyled">
						<?php 
								  $wp_query = new WP_Query(array('post_type' => 'news','posts_per_page' => -1, 'paged' => 1));
								  if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
					    ?>
                              <li><span class="arrow-news"><i class="fa fa-arrow-right"></i></span> <span class="wdth-dt"><a class="date-up" href="/news-and-updates"><?php echo get_field('news_publish_date', $post->ID) ?></a> </span>
                                 <span class="list-v"><a class="upd-list" href="/news-and-updates"><?php the_title() ?></a></span>
                              </li>
						<?php endwhile; endif;  wp_reset_query();?>

                           </ul>
                           <div class="view-name pull-right clearfix"><a href="<?php echo site_url() ?>/news-and-updates">MORE</a></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-5 greet-sec">
                     <div class="wdth-right">
                        <div class="img-greet" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/greeting-send.png')">
                           <div class="greet-text">
                              <h4>SEND A</h4>
                              <h3>GREETING</h3>
                              <span>To Your Friends and love ones</span>
                              <div class="send-gift"><a href="javascript:void(0);" data-toggle="modal" data-target="#send-gift-modal">Send</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End  -->




	<?php get_sidebar(); ?>


<?php
get_footer();

