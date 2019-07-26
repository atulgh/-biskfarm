$(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
        $('body').addClass("stickyheader");
    } else {
        $('body').removeClass("stickyheader");
    }
});

$('input[type="file"]#chooseFile').change(function(e) {
    $('#noFile').text(e.target.files[0].name);
});
// $(document).ready(function() {
    function stopScrolling(e) {
        e.preventDefault();
        e.stopPropagation();
        return false;
    }


    $("body").on("click", function() {

        $(".search_bar_tab").removeClass('current01');
        $('#head-search').removeClass('active');
        $('.overlay').removeClass('active');
        $('body').removeClass('stoppagescroll');
        // $('body').off('scroll', stopScrolling);
    });
    $('.search_bar_tab, #head-search').on('click', function(event) {
        event.stopPropagation();
    });
    $('.search_bar_tab').on('click', function() {
        $(this).toggleClass('current01');
        $('#head-search').toggleClass('active');
        $('.overlay').toggleClass('active');
        $('body').toggleClass('stoppagescroll');
        // $('body').on('scroll', stopScrolling);
    });
// });




// Nav
$(".has-child > a").click(function(event) {
    if ($(window).width() < 1025) {
        event.preventDefault();
        $(".sub-menu").slideUp();
        if ($(this).next(".sub-menu").is(":visible") == false) {
            $(this).next(".sub-menu").slideDown();
        }
    }
});


// Filter Gallery
$('.mb-tab_gallery ul li').click(function() {
    $(this).addClass("active-btn").siblings().removeClass("active-btn");
});

// Filter Gallery
$("#showatable").click(function() {
    $("#hidden_table").toggleClass("visible");
    $("#show_table").toggleClass("invisible");
});

$("#showapprove").click(function() {
    $("#hidden_table").removeClass("visible");
    $("#show_table").removeClass("invisible");
});

// DropDown
var hostUrl = 'http://' + window.location.hostname;

$("#banner_slider").owlCarousel({
    loop: true,
    dots: true,
    nav: true,
    items: 1,
    margin: 0,
    navText: ["<img src='" + hostUrl + "/wp-content/themes/biskfarm/assets/images/left-arrow.png'>", "<img src='" + hostUrl + "/wp-content/themes/biskfarm/assets/images/right-arrow.png'>"],
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    responsive: {
        0: {
            items: 1
        },
        480: {
            items: 1
        },
        640: {
            items: 1
        },
        1000: {
            items: 1
        }
    }

});


$("#product_slider-1, #product_slider-2, #product_slider-3,  #product_slider-4,  #product_slider-5,  #product_slider-6,  #product_slider-7").owlCarousel({
    loop: true,
    dots: false,
    nav: true,
    items: 4,
    margin: 25,
    navText: ["<img class='left-icon' src='" + hostUrl + "/wp-content/themes/biskfarm/assets/images/left-arrow.png'>", "<img class='right-icon' src='" + hostUrl + "/wp-content//themes/biskfarm/assets/images/right-arrow.png'>"],
    responsive: {
        0: {
            items: 1
        },
        480: {
            items: 2
        },
        640: {
            items: 2
        },
        1000: {
            items: 4
        }
    }

});

$("#tvc-slider1").owlCarousel({
    loop: true,
    dots: true,
    nav: true,
    items: 1,
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    navText: ["<img src='" + hostUrl + "/wp-content/themes/biskfarm/assets/images/left-arrow.png'>", "<img src='" + hostUrl + "/wp-content/themes/biskfarm/assets/images/right-arrow.png'>"],

});
var owltvc;
owltvc = $("#tvc-slider").owlCarousel({
    loop: true,
    dots: true,
    nav: true,
    items: 1,
    video: true,
    lazyLoad:true,
    // onInitialized  : counter,
    // onTranslated : counter,
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    navText: ["<img src='" + hostUrl + "/wp-content/themes/biskfarm/assets/images/left-arrow.png'>", "<img src='" + hostUrl + "/wp-content/themes/biskfarm/assets/images/right-arrow.png'>"],


});
// function counter(event) {
//    var element   = event.target;
//     var items     = event.item.count; 
//     var item      = event.item.index - 1;
//   if(item > items) {
//     item = item - items
//   }
//   $('#tvc-slider .owl-dots').html("<span>"+item+"</span> / "+items)
// }
owltvc.on('changed.owl.carousel', function(e) {
    // console.log("test");
     $('.youtube-video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
    $('.youtube-video')[1].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
    $('.youtube-video')[2].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
    $('.youtube-video')[3].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
    $('.youtube-video')[4].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
    $('.youtube-video')[5].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');

  });
// DropDown
$(function() {
    $(".tabs_parent .select").on("click", function() {
        if ($(window).width() < 980) {
            $(this).next("ul").slideToggle();
        }
    });
    $(".nav-tabs li").on("click", function() {
    	var datatitle = $(this).data('title');
    	$("#data-title").text(datatitle);
    	console.log(datatitle);
        if ($(window).width() < 980) {
            var liText = $(this).children("a").text();
            $(".tabs_parent .select").text(liText);
            $(this).parents("ul").slideUp();
        }
    });

});

$(function() {
    $(".tabs_parent .select-brand").on("click", function() {
        if ($(window).width() < 980) {
            $(this).next("ul").slideToggle();
        }
    });
    $(".nav-tabs li").on("click", function() {
        if ($(window).width() < 980) {
            var liText = $(this).children("a").text();
            $(".tabs_parent .select-brand").text(liText);
            $(this).parents("ul").slideUp();
        }
    });

});



$('.opportunity-listing .view-opp').on("click", function() {
    $(".job-form").slideUp();
    if ($(this).parents(".opportunity-listing").next(".job-form").is(":visible") == false) {
        $(this).parents(".opportunity-listing").next(".job-form").slideDown();
    }
});




// Nav
(function($) {
$(".my-navbar-toggle").on({
            mouseenter:function(){
                $(this).children().addClass("normal-hover");
            },
            mouseleave:function(){
                $(this).children().removeClass("normal-hover"); 
            },
            click:function(){
                $(this).toggleClass("animated-click");
                $(".nav-menu").toggleClass("visible");
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
                                    
                        });
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
                        
            });
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
        }(jQuery));


// vision
var Url = location.href;
var spliturl = Url.split('?')[1];
if(spliturl == 'vision'){
    setTimeout(function(){
        $('html , body').animate({
            scrollTop: $('.vision').offset().top - 40
        }, 1300);
        console.log('setTimeout');
    }, 600);
}
