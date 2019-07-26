<?php
/**
 * Template Name: Static Page Layout
 *

 */

get_header(); ?>


<?php while(have_posts()): the_post() ?>

         <section class="bg-dark about-frst_sec">
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
   
         </section>



<?php
get_footer();
