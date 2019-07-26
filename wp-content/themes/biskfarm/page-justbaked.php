<?php /* Template Name: Just Baked */ 
get_header();  while(have_posts()): the_post() ?>
<section class="brand-banner">
            <div class="item">
               <div class="relative-sec">
                   <div class="slider just-bak" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');"></div>
               </div>
            </div>
         </section>
         <section class="bg-dark abt-normal_sec">
            <div class="container">
               <div class="row">
                  <div class="abt-pres">
                     <div class="col-sm-6">
                        <div class="div-sec">
                           <div class="title-head about-top0">
                              <h1 class="about-top0"><?php the_title(); ?></h1>
                           </div>
                           <div class="det-text">
                              <?php echo get_field('first_block_content'); ?>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="div-sec">
                           <img class="img-responsive" src="<?php echo get_field('first_block_image')['url']; ?>">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="tvc-slider">
                        <div class="owl-carousel owl-theme baked-pag" id="tvc-slider1">
                          
  <?php
$gallery = get_post_meta($post->ID, 'slider', true);
//print_r($gallery);exit;

preg_match('/\[gallery.*ids=.(.*).\]/', $gallery, $ids);
$images_id = explode(",", $ids[1]);
if ($images_id[0] != "") {
    if (is_array($images_id) || is_object($images_id)) {
        foreach ($images_id as $image) {
            $image_url = wp_get_attachment_image_src($image, 'banner');
			
            ?>
			<div class="item">
                              <div class="slider-baked clearfix">
                                 <div class="bak-img"> 
                             <?php echo wp_get_attachment_image($image, '', 'true', array("class" => "img-responsive")); ?>
                              </div> </div>
                              </div><?php }
    }
} ?>
                                   
                        </div>
                           <div class="baked-store clearfix">
                                    <div class="img-logo"><img class="img-responsive" src="<?php echo get_field('logo')['url']; ?>" alt="Just Baked"></div>
                                    <?php echo get_field('address'); ?>
                                    <div class="down-tag"><a href="<?php echo get_field('download_brochure'); ?>" target="_blank">STORES LIST</a></div>
                                 </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
		 <?php endwhile; get_footer(); ?>