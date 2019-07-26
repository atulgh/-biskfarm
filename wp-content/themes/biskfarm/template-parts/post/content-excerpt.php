<?php
/**
 * Template part for displaying posts with excerpts
 *
 * Used in Search Results and for Recent Posts in Front Page panels.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
 global $post;
$productThumb = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID(),'thumbnail')); 
$current_category = get_the_category($post->ID);
//print_r($current_category);
if ( 'our_brands' 	== get_post_type() ){ 
$terms = wp_get_post_terms( $post->ID, 'brands_category');
//echo "<pre>";
//echo $terms->name;
//var_dump($terms); exit;
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix mrgbot'); ?>>
			<div class="item-product" id="<?= $currentTerm  ?>">
                                    <div class="product-relative">
                                       <div class="prod-wrap">
                                          <div class="produ-img">
                                             <img src="<?php echo $productThumb; ?>" alt="<?php the_title(); ?>">
                                          </div>
                                          <div class="prod-name">
                                             <h3><?php the_title(); ?></h3>
                                             <span class="prod-tagline"><?php echo $terms[0]->name; ?></span>
                                          </div>
                                          <div class="hover-overlay">
                                             <div class="hover-product">
                                                <h3><?php the_title(); ?></h3>
                                                <?php the_content();  ?>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div></article>
	<?php }elseif ( 'page' == get_post_type()) { ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
	<div class="cont-add "><h3><a href="<?php the_permalink(); ?>" class="more-link"><?php the_title() ?></a></h3></div>
	<?php the_excerpt() ?>
	<hr>
</article>
	<?php }else{  echo ""; }?>


<!-- #post-<?php the_ID(); ?> -->
