<?php
global $wpdb;
$path = site_url();
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<footer>
   <div class="top-footer clearfix">
      <div class="container">
         <div class="row">
            <div class="col-md-2 col-sm-4">
               <div class="logo-cert">
                  <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/iso-logo.svg">
               </div>
            </div>
            <div class="col-md-2 col-xs-6 col-sm-4">
               <div class="footer-listing">
			   <?php wp_nav_menu( array(
					'menu'   => 'Footer First', // Do not fall back to first non-empty menu.
					'theme_location' => '__no_such_location',
					'menu_class' => 'list-unstyled', 
					'fallback_cb'    => false // Do not fall back to wp_page_menu()
				) ); ?>
               
               </div>
            </div>
            <div class="col-md-2 col-xs-6 col-sm-4">
               <div class="footer-listing">
                  <?php wp_nav_menu( array(
					'menu'   => 'Footer Second', // Do not fall back to first non-empty menu.
					'theme_location' => '__no_such_location',
					'menu_class' => 'list-unstyled', 
					'fallback_cb'    => false // Do not fall back to wp_page_menu()
				) ); ?>
               </div>
            </div>
            <div class="col-md-6 col-sm-12">
               <div class="footer-feedback row">
                 <?php echo do_shortcode('[contact-form-7 id="6" title="Footer contact us form"]'); ?>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="clearfix"></div>
   <div class="bottom-footer">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <div class="footer_social-icons pull-right">
                  <a href="https://www.facebook.com/BiskFarm" target="_blank"><i class="fa fa-facebook"></i></a>
                  
                  <a href="https://www.youtube.com/user/biskfarmTVC" target="_blank"><i class="fa fa-youtube-play"></i></a>
               </div>
            </div>
            <div class="col-sm-12">
               <div class="copy-footer clearfix">
                  <div class="col-md-6 col-sm-6 padd-0 clearfix">
                     <span class="pull-left">Copyright @ Bisk Farm 2019. All rights reserved.</span>
                  </div>
                  <div class="col-md-6 col-sm-6 padd-0 clearfix">
                     <span class="pull-right mobile-justify"><a href="https://repindia.com/" target="_blank">Site by Repindia.</a></span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</footer>


<div id="gift-modal" class="modal  fade" role="dialog">
    <div class="modal-dialog modal-cust">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="modalgift clearfix">
            <div class="col-md-12">
                <div class="header-modal">
                    <h2 class="italic-text">Gift A Hamper</h2>
                </div>
                <div class="gift-form apply-form">
                    <div class="row">
                 <?php echo do_shortcode('[contact-form-7 id="209" title="Gift Hamper"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- send-gift-modal -->
<div id="send-gift-modal" class="modal  fade" role="dialog">
    <div class="modal-dialog modal-cust">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="modalgift clearfix">
            <div class="col-md-12">
                <div class="gift-form">
                    <div class="row">
                        <form action="<?php echo $path; ?>/actiongreeting.php" method="POST" id="sendGift" class="image-editor" enctype="multipart/form-data">
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <div class="profile-farm-main">
                                    <div class="profile-farm">
                                        <div class="">
                                            <div class="cropit-preview-main-container">
                                                <div class="cropit-preview"></div>
                                            </div>
                                            <div class="profileselectedimage">
                                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb-1.png">
                                            </div>
                                            <div class="controle-container">
                                                <div class="image-size-label">
                                                    Resize image
                                                </div>
                                                <input type="range" class="cropit-image-zoom-input">
												<input type="hidden" id="image-data" name="image-data" class="hidden-image-data" />
                                                <button class="rotate-ccw" type="button"><i class="fa fa-undo" aria-hidden="true"></i></button>
                                                <button class="rotate-cw" type="button"><i class="fa fa-repeat" aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
								<!-- <code id="result-data"></code> -->
                            </div>
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <div class="greeting-field">
                                    <div class="logo-profile pull-right hidden-xs">
									<?php if(!empty($statusMsg)){ ?>
    <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
<?php } ?>
									<a href="index.php"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt=""></a></div>
                                    <div class="clearfix"></div>
                                    <div class="form-group">
                                        <label>Dear</label>
                                        <input type="text" name="friendname" required placeholder="Your Friend's name">
                                    </div>
                                    <div class="form-group">
                                        <!--<label>You are my</label>-->
                                        <input type="hidden" id="image-type" name="image-type" class="hidden-image-data" value="<?php echo get_template_directory_uri(); ?>/assets/images/thumb-1.png">
                                        <select class="transparent-filed" name="biscuitType">
                                            <option value=" Life with you is full of Googly(s) that I wouldn’t dodge " data-image="<?php echo get_template_directory_uri(); ?>/assets/images/thumb-1.png"> Life with you is full of Googly(s) that I wouldn’t dodge  </option>
                                            <option value="Let’s reach the Top together" data-image="<?php echo get_template_directory_uri(); ?>/assets/images/thumb-2.png">Let’s reach the Top together</option>
                                            <option value="Let’s ‘Spicy’ things up a little" data-image="<?php echo get_template_directory_uri(); ?>/assets/images/Spicy.png">Let’s ‘Spicy’ things up a little</option>
											<option value="You are my Champ" data-image="<?php echo get_template_directory_uri(); ?>/assets/images/Champ.png">You are my Champ</option>
											<option value="We are Half Half in everything together" data-image="<?php echo get_template_directory_uri(); ?>/assets/images/Half-Half-150gm.png">We are Half Half in everything together</option>
											<option value="You are So Sweet" data-image="<?php echo get_template_directory_uri(); ?>/assets/images/Sweet.png">You are So Sweet</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                         <!--<label>Thank you for being in my life</label>-->
                                    </div>
                                    <div class="form-group">
                                        <label>Your</label>
                                        <input type="text" name="yourname" required placeholder="Your Name">
                                    </div>
                                    <div class="form-group btn-more btn-white">
                                        <input type="file" name="profileupload" class="cropit-image-input uploadfile">
                                        <a href="javascript:void(0);" id="uploadfilename">Upload image...</a>
                                        <small class="kb-tagline">Please pick a picture in a png or a jpeg format.</small>
                                    </div>
                                    <div class="btn-more btn-white share-btn" id="creatgreating" style="display:none;margin-top: 10px;">
									<input type="submit" name="sendgift" class="submit_btn" value="CREATE THE GREETING" >
									
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- job apply -->
<div id="gift-modal" class="modal  fade" role="dialog">
    <div class="modal-dialog modal-cust">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="modalgift clearfix">
            <div class="col-md-12">
                <div class="header-modal">
                    <h2 class="italic-text">Gift A Hamper</h2>
                </div>
                <div class="gift-form">
                    <div class="row">
				  <?php echo do_shortcode('[contact-form-7 id="209" title="Gift Hamper" html_id="open-possition"]') ?> 
					
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div id="gift-modal-applyjob" class="modal  fade" role="dialog">
    <div class="modal-dialog modal-cust">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="modalgift clearfix">
            <div class="col-md-12">
                <div class="header-modal">
                    <h2 class="italic-text">Job Apply</h2>
                </div>
                <div class="gift-form apply-form">
                    <div class="row">
                       <?php echo do_shortcode('[contact-form-7 id="236" title="careers"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--main container close-->
</div>
<!--JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- OWL Slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.min.js"></script> -->
<!-- Need To confirm -->

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/sticky-sidebar.min.js"></script>
 <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
<script type="text/javascript">


   new WOW().init(); 
</script>
<?php if(is_front_page() || is_home()) { ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropit/0.5.1/jquery.cropit.min.js"></script>
    <script>
    // 

    $('input[type="file"].uploadfile').change(function(e) {
        var file_image_name = e.target.files[0].name;
        setTimeout(function() {

            $('#uploadfilename').text(file_image_name);
            var image_name = $('#uploadfilename')[0].innerText;
            var image_ext = image_name.split('.').pop().toLowerCase();
            console.log(image_ext);
            if (image_ext == image_name || (image_ext != "jpg" && image_ext != "jpeg" && image_ext != "png")) {
                $('.kb-tagline').addClass("text-danger");
                $('#uploadfilename').text("Upload image...");
            } else {
                $('.kb-tagline').removeClass("text-danger");
                $('.cropit-preview-main-container').addClass("loded");
                $(".controle-container, #creatgreating, .profileselectedimage").show();
            }
        }, 300)
    });

    $(".transparent-filed").on("change", function(){
      var Data_Image = $(this).find(':selected').data("image");
      $(".profileselectedimage img").attr("src" , Data_Image);
     $("#image-type").val(Data_Image);
     console.log(Data_Image);
    });


    $('.image-editor').cropit({
        // imageState: {
        //   src: 'images/farm-profile.png',
        // },
        smallImage: 'allow',
        width: 175,
        height: 177,
    });
	
	
	$('form').submit(function() {
          // Move cropped image data to hidden input
          var imageData = $('.image-editor').cropit('export');
          $('#image-data').val(imageData);
          // Print HTTP request params
          var formValue = $(this).serialize();
          $('#result-data').text(formValue);
          // Prevent the form from actually submitting
         
        });
	
	
    $('.rotate-cw').click(function() {
        $('.image-editor').cropit('rotateCW');
    });
    $('.rotate-ccw').click(function() {
        $('.image-editor').cropit('rotateCCW');
    });
    </script>
	
<?php } ?>
<?php  wp_footer(); ?>

<script type="text/javascript">

var disableSubmit = false;
jQuery('#wpcf7-f6-o1 input.wpcf7-submit[type="submit"]').click(function() {
    //jQuery('#wpcf7-f1213-o1 :input[type="submit"]').attr({value : "Sending..." , disabled : 'disabled'});
	jQuery('#wpcf7-f6-o1 :input[type="submit"]').attr("value" , "SENDING...").css({"pointer-events" :"none"});
    if (disableSubmit == true) {
        return false;
    }
    disableSubmit = true;
    return true;
});
  
var wpcf7Elm = document.querySelector( '#wpcf7-f6-o1' );
wpcf7Elm.addEventListener( 'wpcf7submit', function( event ) {
    jQuery('#wpcf7-f6-o1 :input[type="submit"]').attr('value',"ENQUIRE NOW").css({"pointer-events" :"auto"});
    disableSubmit = false;
}, false );

//2 

jQuery('#wpcf7-f209-o2 input.wpcf7-submit[type="submit"]').click(function() {
    jQuery('#wpcf7-f209-o2 :input[type="submit"]').attr('value',"SENDING...").css({"pointer-events" :"none"});
    if (disableSubmit == true) {
        return false;
    }
    disableSubmit = true;
    return true;
});
  
var wpcf7Elm = document.querySelector( '#wpcf7-f209-o2' );
wpcf7Elm.addEventListener( 'wpcf7submit', function( event ) {
    jQuery('#wpcf7-f209-o2 :input[type="submit"]').attr('value',"ENQUIRE NOW").css({"pointer-events" :"auto"});
    disableSubmit = false;
}, false );

jQuery('#wpcf7-f236-o4 input.wpcf7-submit[type="submit"]').click(function() {
    jQuery('#wpcf7-f236-o4 :input[type="submit"]').attr('value',"SENDING...").css({"pointer-events" :"none"});
    if (disableSubmit == true) {
        return false;
    }
    disableSubmit = true;
    return true;
});
  
var wpcf7Elm = document.querySelector( '#wpcf7-f236-o4' );
wpcf7Elm.addEventListener( 'wpcf7submit', function( event ) {
    jQuery('#wpcf7-f236-o4 :input[type="submit"]').attr('value',"ENQUIRE NOW").css({"pointer-events" :"auto"});
    disableSubmit = false;
}, false );

$(window).on("load" , function(){
	$(".qe-toggle-title")[0].click();
	return false;
});
</script>
</body>
</html>
