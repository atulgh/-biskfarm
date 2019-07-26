<?php
/**
Template Name: Contact US
 */



get_header(); ?>

<section class="bg-dark cont_sec">
            <div class="container">
               <div class="row">
                  <div class="abt-pres">
                     <div class="col-sm-12">
                     <div class="title-head about-top0">
                        <h1 class="top-title"><?php the_title(); ?></h1>
                     </div>
                     </div>
                     <div class="con-add clearfix">
                        <div class="col-sm-8 bg-left">
                           <div class="div-sec">
                              <div class="cont-add">
                                 <?php echo get_field('address'); ?>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-4 padd-left0"><?php echo get_field('map_iframe'); ?></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="con-cont">
               <div class="container">
                  <div class="row">
                     <div class="cont-listing">
                        <ul>
                           <?php echo get_field('support_section'); ?>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
      </div>
      </section>

<?php 
get_footer(); ?>
