<?php
get_header();
$category = get_queried_object();  
$currentCat = $category->term_id; 
$currentcatparnt = $category->parent;

$taxonomy = "brands_category";

?>
<section class="brand-banner">
            <div class="item">
               <div class="relative-sec" style="background-image: url('<?php echo get_field('banner_image', 'term_'.$currentCat)['url'];?>');">
               </div>
            </div>
         </section>
        
         <section class="bg-dark">
            <div class="container">
               <div class="row">
                  <div class="filter-tabbed clearfix">
                     <div class="title-head">
                        <h1>OUR BRANDS</h1>
                     </div>
                     <div class="brand-filter clearfix">
                        <div class="col-sm-3 col-md-2 col-xs-2 mob-left0 padd-left0">
                    <?php
	                  		/** The taxonomy we want to parse */
	                  		
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
                           <ul class="verticaltabs" id="myHeader">
						   <?php foreach($terms as $term) { 
									if($term->parent=="22"){  
										$imageicon = get_field('icon_mega_menu', 'brands_category_'.$term->term_id);
										$imageiconwhite = get_field('icon_upload', 'brands_category_'.$term->term_id);
							?>
                              <li class="<?php if(($term->term_id == $currentCat) || ($term->term_id == $category->parent) || ($currentCat=='22' && $term->term_id=='14') ) {  ?>active <?php } ?>  clearfix">
                                 <a href="<?php echo get_term_link($term) ?>">
                                 <span class="icon-wdth"><img class="img-responsive" src="<?php if(($term->term_id == $currentCat) || ($term->term_id == $category->parent) || ($currentCat=='22' && $term->term_id=='14') ) { echo $imageiconwhite['url']; }else{ echo $imageicon['url']; }?>"></span>
                                 <span class="icon-text_wdth"><?php echo $term->name; ?></span>
                                 </a>
                              </li>
						   <?php  } } ?>

                           </ul>
                        </div>
                        <div class="col-sm-9 col-md-10 col-xs-10">
                           <div class="filter-sec">
						   <?php 
				
				$activeTab = "avtive-filter";
				if($currentCat != 22) {
					
					if($currentcatparnt != 22) {
						
						$activeTab = "";
						$childs = get_terms( array(
						 "taxonomy"    => $taxonomy,
							  "orderby"    => "count",
							  "child_of"       => $currentcatparnt,
							  "hide_empty" => false,
							  "include_children" => false
						  )
					  );
					  
					}
					else{
						
						$childs = get_terms( array(
						 "taxonomy"    => $taxonomy,
							  "orderby"    => "count",
							  "child_of"       => $currentCat,
							  "hide_empty" => false,
							  "include_children" => false
						  )
					  );
					}
					
					
				  
				} 
				else { 
					$childs = get_terms( array(
                     "taxonomy"    => $taxonomy,
                          "orderby"    => "count",
                          "child_of"       => 14,
                          "hide_empty" => false,
                          "include_children" => false
                      )
                  );
				}
                 ?>	<?php if($childs) { ?>
                              <div class="filter-header">
                                     <div class="tabs_parent">
                                    <span class="select-brand">All</span>
                                 
								
						  
                        <ul>
						
						<?php if($currentCat == 14){ ?>
						 <li><a href='<?php echo get_term_link($currentCat) ?>'  class='<?=$activeTab?>'>All</a></li>
						<?php } else { ?>
						 <li><a href='<?php echo get_term_link($currentcatparnt) ?>'  class='<?=$activeTab?>'>All</a></li>
						<?php } foreach($childs as $child) { ?>
                           <li><a href="<?php echo get_term_link($child) ?>" class="<?=($currentCat==$child->term_id)?"avtive-filter":""?>"><?php echo $child->name; ?></a></li>
                          <?php } ?>
                        </ul>
                     		
									
				
						</div>
                              </div><?php } ?>	
                              <div class="filter-prod">
							  
							  <?php $current_category = single_cat_title("", false); 
$currentTerm = get_query_var( 'term' );
$terms = wp_get_post_terms( $post->ID, $taxonomy);
$childterms= get_term_children( $terms[0]->term_id, $taxonomy );
$str=strtoupper($terms[1]->name);
//print_r($terms);exit;


        // The Arguments
          $post_args = array(
			'taxonomy'    => $taxonomy,
            'post_type' => 'our_brands',
			'field' => 'slug',			
			'post_status' => 'publish',
			'term' =>  $currentTerm,
			'post_per_page'=>-1
        );  

        // The Query
        $the_query = new WP_Query( $post_args );
        // If we have the posts...
        if ( $the_query->have_posts() ) : 

       // Start the loop the loop --> 
             while ( $the_query->have_posts() ) : $the_query->the_post(); 
			$productThumb = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID(),'thumbnail') ); 
			?>

								<div class="item-product" id="<?= $currentTerm  ?>">
                                    <div class="product-relative">
                                       <div class="prod-wrap">
                                          <div class="produ-img">
                                             <img src="<?php echo $productThumb; ?>" alt="<?php the_title(); ?>">
                                          </div>
                                          <div class="prod-name">
                                             <h3><?php the_title(); ?></h3>
                                             <span class="prod-tagline"><?php // echo $current_category; ?> 
				
											 <?php 
											 $product_terms = wp_get_object_terms( $post->ID,  'brands_category' );
											 $product_terms = array_reverse($product_terms);
											 $separator = ' ';
if ( ! empty( $product_terms ) ) {
	if ( ! is_wp_error( $product_terms ) ) {
		echo '<ul>';
			foreach( $product_terms as $term ) {
				echo strtoupper($term->name) ."    "; 
			}
		
	}
}
												//if($terms[1]->term_id != 14){ echo $str." ".$terms[0]->name ; }else{ echo ''; } ?>
											 
											 </span>
                                          </div>
                                          <div class="hover-overlay">
                                             <div class="hover-product">
                                                <h3><?php the_title(); ?></h3>
                                                <?php the_content();  ?>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
			
			 <?php endwhile; endif; wp_reset_query(); ?>

                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <?php get_sidebar(); get_footer(); ?>