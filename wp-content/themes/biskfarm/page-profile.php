<?php
global $wpdb;
$path = site_url();
$uniquePath = $_GET['q'];
$results = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}greeting_tbl WHERE slug = '{$uniquePath}' ", OBJECT );
/**
 * Template Name: Profile Page Layout
 *

 */

get_header(); ?>

  
<?php while(have_posts()): the_post() ?>

  <div class="container">
  <div class="share-container">
                <div class="gift-form">
                    <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
											<div class="preview-container">
                                              <div class="profile-share"><img class="img-resposive" src="<?php echo $path.$results[0]->uploaded_image ?>"></div>
                                            </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 center-text">
                                <div class="greeting-detail">
                                    <div class="text-para">
                                        <label>Dear <span><?= $results[0]->to_username ?>,</span></label>
                                    </div><br/>
                                    <div class="text-para">
                                        <label><span><?= $results[0]->gift_option ?>.</span></label>
                                    </div>
									 <div class="text-para">
                                        <label>Thank you for being in my life. </label>
                                    </div><br/>
          
                                   
                                    <div class="text-para">
                                        <label>Your <span><?= $results[0]->from_name ?></span></label>
                                    </div>
                                  
                                      <div class="btn-more btn-white share-btn"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink()."?q=".$uniquePath ?>" target="_blank"><i class="fa fa-facebook"></i> Share it on facebook</a>
                                        <a href="https://twitter.com/share?url=<?php echo get_the_permalink()."?q=".$uniquePath ?>&text=<?php the_title() ?>&via=<?= $friendname_ses ?>&hashtags=<?= $yourname_ses ?>
" target="_blank"><i class="fa fa-twitter"></i> Share it on twitter</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
       
        </div>
        </div>


			<?php endwhile; ?>


<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

<?php
get_footer();
