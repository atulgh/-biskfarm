<?php
global $wpdb;
$path = site_url();
$uniquePath = $_GET['q'];	
$results = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}greeting_tbl WHERE slug = '{$uniquePath}' ", OBJECT );
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content= "width=device-width, user-scalable=no">
<?php if(is_page(253)) { ?>

<meta property="og:url"           content="<?php echo get_the_permalink()."?q=".$uniquePath ?>" />
<meta property="og:type"          content="Bisk Farm" />
<meta property="og:title"         content="Dear <?php echo $results[0]->to_username ?>, <?php echo $results[0]->gift_option ?>" />
<meta property="og:description"   content="Thank you for being in my life" />
<meta property="og:image"         content="<?php echo $path.$results[0]->uploaded_image ?>" />
  <?php } ?>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- FontAwsome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Owl Slider -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<link href="https://fonts.googleapis.com/css?family=Oxygen:300,400,700" rel="stylesheet">
<!-- Custom -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
	<div class="nav container-fluid">
   <div class="logo">
      <a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt=""></a>
   </div>

   <nav id="nav">
      <!--  -->
   <div type="button" class="my-navbar-toggle">
      <span class="bar top"></span>
      <span class="bar middle"></span>
      <span class="bar bottom"></span>
   </div>
	<?php $postid = get_the_ID();  ?>
      <div class="nav-menu">
         <ul>
         <li <?php if($postid == "30") { ?> class="active" <?php } ?>><a href="<?php echo site_url(); ?>/about-us/">ABOUT US</a></li>
         <li class="has-child <?php if(is_tax()) { echo "active"; } ?>">
            <a href="JavaScript:void(0);">BRANDS<i class="fa fa-angle-down"></i></a>
            <ul class="sub-menu">
               <?php
                  /** The taxonomy we want to parse */
                  $taxonomy = "brands_category";
                  /** Get all taxonomy terms */
                  $terms = get_terms(array(
                          "taxonomy"    => $taxonomy,
                          'orderby'     => 'name',
                          "child_of"       => 22,
                          "hide_empty" => false,
                          "hierarchical" => false,
                      )
                  );
                  /** Get terms that have children */
                 // $hierarchy = _get_term_hierarchy($taxonomy);
                // var_dump($terms);
               $count = 1;
               ?>
               <div class="sub-menu_inner">
                <?php foreach($terms as $term) { 
                  $termparent=$term->parent;
				  
                  if($termparent=="22"){	 
                    $childs = get_terms( array(
                     "taxonomy"    => $taxonomy,
                          "orderby"    => "count",
                          "child_of"       => $term->term_id,
                          "hide_empty" => false,
                          "include_children" => false
                      )
                  );

				        $imageicon = get_field('icon_mega_menu', 'brands_category_'.$term->term_id);
                    $imagethumb = get_field('thumbnail_image', 'brands_category_'.$term->term_id);
                  if($count % 4 == 0) { ?>
						<?php if($count == 4) 
							{ 
								$catUrl = get_term_link($term);
							}
							elseif($count == 8)
							{
								$catUrl = get_the_permalink('739');
							}
							
						?>
                     <li id="<?php echo $count; ?>">
                     <figure class="brand-list">
                        <img class="img-responsive" src="<?php echo $imagethumb['url'] ?>">  
                     </figure>
                     <div class="v-brand"><a href="<?php echo $catUrl ?>">VIEW MORE</a></div>
                      </li>
                  <?php } else {
                  ?>
                  
                  <li class="has-child <?php if($childs) { echo "active"; } ?>" id="<?php echo $count; ?>">
                     <span><a href="<?php echo get_term_link($term) ?>"><span><img class="img-responsive" src="<?php echo $imageicon['url'] ?>"></span><?php echo $term->name; ?></a></span>
                     <figure class="brand-list <?php if(empty($childs)) { ?>no-child<?php } ?>">
                        <img class="img-responsive" src="<?php echo $imagethumb['url'] ?>">  
                        <?php if($childs) { ?>
                        <ul>
                           <?php foreach($childs as $child) { ?>
                           <li><a href="<?php echo get_term_link($child) ?>"><?php echo $child->name; ?></a></li>
                          <?php } ?>
                        </ul>
                     <?php } ?>
                     </figure>
                     <div class="v-brand"><a href="<?php echo get_term_link($term) ?>">VIEW MORE</a></div>
                  </li>
               <?php } $count++;  } } ?>
  
                  


        
                     <li class="mob-menu_img visible-xs visible-sm">  <a href="<?php echo site_url(); ?>/brands/indiaah/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/indiaah.png"></a><span class="pull-right">Traditional Indian Taste</span></li>
                     <li class="mob-menu_img visible-xs visible-sm">  <a href="<?php echo site_url(); ?>/just-baked/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/just-baked.png"></a><span class="pull-right">Retail</span></li>

               </div>
            </ul>
         </li>
         <li <?php if($postid == "52") { ?> class="active" <?php } ?>><a href="<?php echo site_url(); ?>/gallery/">GALLERY</a></li>
         <li <?php if($postid == "45") { ?> class="active" <?php } ?>><a href="<?php echo site_url(); ?>/careers/">CAREERS</a></li>
         <li <?php if($postid == "47") { ?> class="active" <?php } ?>><a href="<?php echo site_url(); ?>/contact-us/">CONTACT US</a></li>
         
      </ul>
      </div>
      <div class="searchbox">
         <ul>
            <li class="header-search " id="head-search">
            <div class="searc-rel">
			<?php $unique_id = esc_attr( twentyseventeen_unique_id( 'search-form-' ) ); ?>

				<form role="search" method="get" class="example" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                  <input type="text" placeholder="Search.." name="s" id="<?php echo $unique_id; ?>" pattern=".{3,}" required="required" title="Enter at least 3 characters">
                  <button type="submit" class="srch-con"><i class="fa fa-search"></i></button>
               </form>
            </div>
         </li>
         <li class="searchbar_tab search_icon">
            <button type="button" class="search_bar_tab">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
         </li>
         </ul>
      </div>
   </nav>
</div>

</header>

      <div class="overlay"></div>
      <!-- End Header -->
      <div class="main">

