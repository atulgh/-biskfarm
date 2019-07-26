<?php
/**
 * Template Name: Careers Page
 *

 */

get_header(); ?>

<section class="brand-banner">
<?php while(have_posts()): the_post() ?>
            <div class="item">
               <div class="relative-sec" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');"> </div>
            </div>
         </section>
         <section class="bg-dark abt-normal_sec">
            <div class="container">
               <div class="row">
                  <div class="abt-pres">
                     <div class="col-sm-12">
                        <div class="div-sec mob-grid">
                           <div class="title-head about-top0">
                              <h1 class="about-top0"><?php the_title(); ?></h1>
                           </div>
                           <div class="det-text career-mob">
                              <?php the_content(); ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
			<?php endwhile; ?>
            <div class="container">
               <div class="row">
                  <div class="abt-pres">
                     <div class="col-sm-12">
                        <div class="div-sec mob-grid">
                           <div class="title-head about-top0">
                              <h2 class="about-top0">JOB OPPORTUNITIES</h2>
                           </div>
                           <div class="job-listing">
                              <ul>
							  <?php $wp_query = new WP_Query(array('post_type' => 'job_opportunities','posts_per_page' => -1, 'paged' => 1));
                  if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                                 <li class="clearfix">
                                   <div class="opportunity-listing">
                                    <span class="chain-off"><?php the_title(); ?><br> <small><?php echo get_field('designation'); ?></small></span> 
                                   <!--<span class="chain-off"><?php// echo get_field('department'); ?></span>-->
                                    <a href="javascript:void(0);" class="view-opp pull-right">VIEW DETAILS</a>
                                   </div>
                                              <div class="job-form">
											  

                                  <h4>Job Description</h4>
<div class="description-job">
   <?php echo get_field('department'); ?>
</div>
                                       <div class="btn-more text-center"><a href="javascript:void(0);" data-toggle="modal" data-target="#gift-modal-applyjob">Apply Now</a></div></div>
                                 </li>
								 <?php endwhile; endif;  wp_reset_query();?>
                                 
                              </ul>
                              <div class="apply-link">
                                 <p>If you want to apply to sales & administration and other function, please contact <strong><a href="mailto:hr@biskfarm.com" target="_blank" >hr@biskfarm.com</a></strong> </p>
                                 <p>If you want to apply to factory operations, please contact <strong><a href="mailto:hrfactory@biskfarm.com" target="_blank" >hrfactory@biskfarm.com</a></strong></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>



<?php
get_footer();
