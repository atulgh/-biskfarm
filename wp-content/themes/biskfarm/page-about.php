<?php
/**
 * Template Name: About Us
 *

 */

get_header(); ?>

        <section class="bg-dark about-frst_sec">
            <div class="container">
               <div class="row">
                  <div class="abt-pres">
                     <div class="col-sm-6">
                        <div class="div-sec clearfix">
                          <?php $first_section_image= get_field('first_section_image')['url']; ?>
						    <img class="img-responsive" src="<?php echo $first_section_image; ?>">
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="div-sec mob-grid clearfix">
                           <?php $first_section_content= get_field('first_section_content'); ?>
						   <?php echo $first_section_content; ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="bg-dark abt-normal_sec">
            <div class="container">
               <div class="row">
                  <div class="abt-pres">
                     <div class="col-sm-6 pull-right">
                        <div class="div-sec clearfix">
                          <?php $second_section_image= get_field('second_section_image')['url']; ?>
						    <img class="img-responsive" src="<?php echo $second_section_image; ?>">
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="div-sec mob-grid clearfix">
                           <?php $first_section_content= get_field('second_section_content'); ?>
						   <?php echo $first_section_content; ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="bg-dark abt-normal_sec vision">
            <div class="container">
               <div class="row">
                  <div class="abt-pres">
                     <div class="col-sm-6 pull-right">
                        <div class="div-sec clearfix">
                          <?php $third_section_image= get_field('third_section_image')['url']; ?>
						    <img class="img-responsive" src="<?php echo $third_section_image; ?>">
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="div-sec mob-grid clearfix">
                            <?php $third_section_content= get_field('third_section_content'); ?>
						   <?php echo $third_section_content; ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="bg-dark abt-normal_sec">
            <div class="container">
               <div class="row">
                  <div class="abt-pres">
                     <div class="col-sm-6 pull-right">
                        <div class="div-sec clearfix">
                           <?php $fourth_section_image= get_field('fourth_section_image')['url']; ?>
						    <img class="img-responsive" src="<?php echo $fourth_section_image; ?>">
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="div-sec mob-grid clearfix">
                            <?php $fourth_section_content= get_field('fourth_section_content'); ?>
						   <?php echo $fourth_section_content; ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="bg-dark abt-normal_sec">
            <div class="container">
               <div class="row">
                  <div class="abt-pres">
                     <div class="col-sm-6 pull-right">
                        <div class="div-sec clearfix">
                           <?php $fifth_section_image= get_field('fifth_section_image')['url']; ?>
						    <img class="img-responsive" src="<?php echo $fifth_section_image; ?>">
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="div-sec mob-grid clearfix">
                           <?php $fifth_section_content= get_field('fifth_section_content'); ?>
						   <?php echo $fifth_section_content; ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="bg-dark abt-normal_sec">
            <div class="container">
               <div class="row">
                  <div class="abt-pres">
                     <div class="col-sm-12">
                        <div class="div-sec clearfix">
                           <div class="cat-text">
                              <?php $sixth_section_content= get_field('sixth_section_content'); ?>
						   <?php echo $sixth_section_content; ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="bg-dark abt-normal_sec">
            <div class="container">
               <div class="row">
                  <div class="abt-pres">
                     <div class="col-sm-12">
                        <div class="div-sec clearfix">
                           <div class="com-budget">
                              <div class="abt-listing">
                                 <ul>
                                     <?php $seventh_section_content= get_field('seventh_section_content'); ?>
						   <?php echo $seventh_section_content; ?>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="bg-dark abt-normal_sec">
            <div class="container">
               <div class="row">
                  <div class="abt-pres">
                     <div class="col-sm-12">
                        <div class="div-sec clearfix">
                           <div class="com-budget">
                              <div class="abt-listing">
                                 <ul>
                                     <?php $eigth_section_content= get_field('eigth_section_content'); ?>
						   <?php echo $eigth_section_content; ?>
                                 </ul>
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
