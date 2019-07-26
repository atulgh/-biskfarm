
$(".my-navbar-toggle").on({
            mouseenter:function(){
            	$(this).children().addClass("normal-hover");
            },
            mouseleave:function(){
            	$(this).children().removeClass("normal-hover"); 
            },
            click:function(){
                $(this).toggleClass("animated-click");
                $("#nav").toggleClass("visible");
                //$("body").toggleClass("open");
                
                if($(this).hasClass("animated-click")){
                    /*=======top======*/
                    $(this).children(".top").animate({  fake1:90 }, {
		                step: function(now,fx) {
		                  $(this).css({'-webkit-transform':'rotate(90deg ) translate(10px,0px)'});
		                },
		                duration: 1000
		                        
		            }).animate({  fake2:90 }, {
		                step: function(now,fx) {
		                  $(this).css({'-webkit-transform':'rotate(90deg ) translate(10px,-21px)'});
		                },
		                duration: 200
		                        
		            } ).animate({  fake3:90 }, {
		                step: function(now,fx) {
		                  $(this).css({'-webkit-transform':'rotate(90deg ) translate(10px,0px)'});
		                },
		                duration:250
		                        
		            } ).animate({  fake4:90 }, {
		                step: function(now,fx) {
		                  $(this).css({'-webkit-transform':'rotate(90deg ) translate(10px,-21px)'});
		                },
		                duration: 200
		                        
		            } ).animate({  fake5:90 }, {
		                step: function(now,fx) {
		                  $(this).css({'-webkit-transform':'rotate(45deg ) translate(21px,-12px)'});
		                },
		                duration:200
		                        
		            } ).animate({  fake6:90 }, {
		                step: function(now,fx) {
		                  $(this).css({'-webkit-transform':'rotate(45deg ) translate(21px,-12px)'});
		                },
		                duration:200
		                        
		            } ).animate({  fake7:90 }, {
		                step: function(now,fx) {
		                  $(this).css({'-webkit-transform':'rotate(45deg ) translate(7px,7px)'});
		                },
		                duration:200
		                        
		            } );
		                /*=======middle======*/ 
		                    $(this).children(".middle").animate({  fake11:90 }, {
		                step: function(now,fx) {
		                  $(this).css({'-webkit-transform':'rotate(0deg ) translate(0px,0px)'});
		                },
		                duration: 1000
		                        
		            }).animate({  fake22:90 }, {
		                step: function(now,fx) {
		                  $(this).css({'-webkit-transform':'rotate(0deg ) translate(0px,0px)'});
		                },
		                duration: 200
		                        
		            } ).animate({  fake33:90 }, {
		                step: function(now,fx) {
		                  $(this).css({'-webkit-transform':'rotate(0deg ) translate(0px,0px)'});
		                },
		                duration:250
		                        
		            } ).animate({  fake44:90 }, {
		                step: function(now,fx) {
		                  $(this).css({'-webkit-transform':'rotate(0deg ) translate(21px,0px)'});
		                },
		                duration:200
		                        
		            } ).animate({  fake55:90 }, {
		                step: function(now,fx) {
		                  $(this).css({'-webkit-transform':'rotate(-45deg ) translate(18px,13px)'});
		                },
		                duration:200
		                        
		            } ).animate({  fake66:90 }, {
		                step: function(now,fx) {
		                  $(this).css({'-webkit-transform':'rotate(-45deg ) translate(18px,16px)'});
		                },
		                duration:200
		                        
		            } ).animate({  fake77:90 }, {
		                step: function(now,fx) {
		                  $(this).css({'-webkit-transform':'rotate(-45deg ) translate(0px,0px)'});
		                },
		                duration: 200
		                        
		            } );
                /*=======bottom======*/
                    $(this).children(".bottom").animate({  fake1:90 }, {
		                step: function(now,fx) {
		                  $(this).css({'-webkit-transform':'rotate(90deg ) translate(-10px,13px)'});
		                },
		               duration: 1000
		                        
		            }).animate({  fake2:90 }, {
		                step: function(now,fx) {
		              $(this).css({'-webkit-transform':'rotate(90deg ) translate(-10px,13px)'});
		                },
		               duration: 200
		                        
		            } ).animate({  fake3:90 }, {
		            step: function(now,fx) {
		                  $(this).css({'-webkit-transform':'rotate(90deg ) translate(-10px,13px)'});
		                },
		               duration:250
		                        
		            } ).animate({  fake4:90 }, {
		                step: function(now,fx) {
		                  $(this).css({'-webkit-transform':'rotate(90deg ) translate(-10px,-23px)'});
		                },
		                duration:200
		                        
		            } ).animate({  fake55:90 }, {
		                step: function(now,fx) {
		                  $(this).css({'-webkit-transform':'rotate(45deg ) translate(7px,-26px)'});
		                },
		                duration: 200
		                        
		            } ).animate({  fake66:90 }, {
		                step: function(now,fx) {
		                  $(this).css({'-webkit-transform':'rotate(45deg ) translate(7px,-26px)'});
		                },
		                duration:200
		                        
		            } ).animate({  fake77:90 }, {
		                step: function(now,fx) {
		                  $(this).css({'-webkit-transform':'rotate(45deg ) translate(-7px,-7px)'});
		                },
		                duration: 200
		                        
		            } );
                    /*==================================*/
                    /*===============settiemout start===================*/
                    
                        $(this).mouseenter(function(){
                    
			                    $(this).children(".top").animate({  fake1:90 }, {
			                step: function(now,fx) {
			                  $(this).css({'-webkit-transform':'rotate(270deg ) translate(-10px,-10px)'});
			                },
			                duration:0
			                        
			            }); $(this).children(".middle").animate({  fake1:90 }, {
			                step: function(now,fx) {
			                  $(this).css({'-webkit-transform':'rotate(-270deg ) translate(0px,0px)'});
			                },
			                duration:0
			                        
			            });
			                        $(this).children(".bottom").animate({  fake1:90 }, {
			                step: function(now,fx) {
			                  $(this).css({'-webkit-transform':'rotate(270deg ) translate(10px,10px)'});
			                },
			                duration: 0
			                        
			            });
			            });
			                    $(this).mouseleave(function(){
			                    
			                    $(this).children(".top").animate({  fake1:90 }, {
			                step: function(now,fx) {
			                  $(this).css({'-webkit-transform':'rotate(45deg ) translate(7px,7px)'});
			                },
			                duration:0
			                        
			            }); $(this).children(".middle").animate({  fake1:90 }, {
			                step: function(now,fx) {
			                  $(this).css({'-webkit-transform':'rotate(-45deg ) translate(0px,0px)'});
			                },
			                duration:0
			                        
			            },);
			                        $(this).children(".bottom").animate({  fake1:90 }, {
			                step: function(now,fx) {
			                  $(this).css({'-webkit-transform':'rotate(45deg ) translate(-7px,-7px)'});
			                },
			                duration:0
			                        
			            });
            });
                        
                    
                    /*==========settimeout ends=====*/
                    $(this).mouseenter(function(){
                    $(this).children().removeClass("normal-hover");
                    
            });
                    
                    
        }
                else{
                            
                    /*=======top======*/
                    $(this).children(".top").animate({  fake1:90 }, {
                step: function(now,fx) {
                  $(this).css({'-webkit-transform':'none'});
                },
                duration: 0
                        
            });
                /*=======middle======*/ 
                    $(this).children(".middle").animate({  fake11:90 }, {
                step: function(now,fx) {
                  $(this).css({'-webkit-transform':'none'});
                },
                duration: 0
                        
            });
                /*=======bottom======*/
                    $(this).children(".bottom").animate({  fake1:90 }, {
                step: function(now,fx) {
                  $(this).css({'-webkit-transform':'none'});
                },
               duration: 0
                        
            });
                    /*==================================*/
                    /*===============settiemout start===================*/
                    
                        $(this).mouseenter(function(){
                    
                    $(this).children(".top").animate({  fake1:90 }, {
                step: function(now,fx) {
                  $(this).css({'-webkit-transform':'rotate(0deg ) translate(0px,-4px)'});
                },
                duration:0
                        
            }); $(this).children(".middle").animate({  fake1:90 }, {
                step: function(now,fx) {
                  $(this).css({'-webkit-transform':'rotate(0deg ) translate(0px,0px)'});
                },
                duration:0
                        
            });
                        $(this).children(".bottom").animate({  fake1:90 }, {
                step: function(now,fx) {
                  $(this).css({'-webkit-transform':'rotate(0deg ) translate(0px,4px)'});
                },
                duration:0
                        
            });
            });
                    $(this).mouseleave(function(){
                    
                    $(this).children(".top").animate({  fake1:90 }, {
                step: function(now,fx) {
                  $(this).css({'-webkit-transform':'rotate(0deg ) translate(0px,0px)'});
                },
                duration:0
                        
            }); $(this).children(".middle").animate({  fake1:90 }, {
                step: function(now,fx) {
                  $(this).css({'-webkit-transform':'rotate(0deg ) translate(0px,0px)'});
                },
                duration:0
                        
            },);
                        $(this).children(".bottom").animate({  fake1:90 }, {
                step: function(now,fx) {
                  $(this).css({'-webkit-transform':'rotate(0deg ) translate(0px,0px)'});
                },
                duration:0
                        
            });
            });
                        
                    
                    /*==========settimeout ends=====*/
                    
             $(this).mouseenter(function(){
                    $(this).children().addClass("normal-hover");
                    
            });
                    
                        
                    
                    /*==========settimeout ends=====*/
                }
                $(this).children().removeClass("normal-hover");
              }
            
        });
        /*==========nav bar===========*/
$('#nav li.has-child > a').on('click' , function(){
	if($('window').width() < 1025){
		$(this).parents('li').siblings('.has-child').children('.sub-menu').slideUp();
		$(this).next('.sub-menu').slideToggle();
		$(this).parent('li').toggleClass('active').siblings('li').removeClass('active');
	}
	
});




 
$(document).ready(function(){
  $("#show").click(function(){
    $("#head-show").toggle();
  });
});




                 $("#banner_slider").owlCarousel({
                  loop:true,
                  dots: false,
                  nav:true,
                  items: 1,
                  margin:0,
                  navText:['<i class="fa fa-arrow-left"></i>','<i class="fa fa-arrow-right"></i>'],
                   animateIn: 'fadeIn',
                  animateOut: 'fadeOut',
                  responsive:{
                        0:{
                          items:1
                        },
                        480:{
                          items:1
                        },
                        640:{
                          items:1
                        },
                        1000:{
                          items:1
                        }
                      }

                });   


              $("#product_slider-1, #product_slider-2, #product_slider-3,  #product_slider-4,  #product_slider-5,  #product_slider-6,  #product_slider-7").owlCarousel({
                  loop:true,
                  dots: false,
                  nav:true,
                  items: 4,
                  margin:25,
                  navText:['<i class="fa fa-arrow-left"></i>','<i class="fa fa-arrow-right"></i>'],
                  responsive:{
                        0:{
                          items:1
                        },
                        480:{
                          items:2
                        },
                        640:{
                          items:2
                        },
                        1000:{
                          items:4
                        }
                      }

                });    



              $("#tvc-slider").owlCarousel({
                  loop:true,
                  dots: false,
                  nav:true,
                  items: 1,
                 animateIn: 'fadeIn',
                 animateOut: 'fadeOut',
                  navText:['<i class="fa fa-arrow-left"></i>','<i class="fa fa-arrow-right"></i>'],
              

                }); 
