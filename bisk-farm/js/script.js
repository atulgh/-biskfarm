$(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
        $('body').addClass("stickyheader");
    } else {
        $('body').removeClass("stickyheader");
    }
});


// $("#search-icon").click(function(){
//   $(this).find($(".fa")).toggleClass('fa-search').toggleClass('fa-times');
//   $("#head-search").slideToggle(400);
//       $(".overlay").slideToggle(400);
// });
$(document).ready(function() {
	function stopScrolling(e) {
	    e.preventDefault();
	    e.stopPropagation();
	    return false;
	}

	// function noscroll() {
	//   window.scrollTo( 0, 0 );
	// }
	// // add listener to disable scroll
	// window.addEventListener('scroll', noscroll);
	// // Remove listener to disable scroll
	// window.removeEventListener('scroll', noscroll);



    $("body").on("click", function() {
    	
        $(".search_bar_tab").removeClass('current01');
        $('#head-search').removeClass('active');
        $('.overlay').removeClass('active');
        $('body').removeClass('stoppagescroll');
        // $('body').off('scroll', stopScrolling);
        console.log("Body Clicked");
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
});


// Humburgar Icon Annimations
$(".my-navbar-toggle").on({
    mouseenter: function() {
        $(this).children().addClass("normal-hover");
    },
    mouseleave: function() {
        $(this).children().removeClass("normal-hover");
    },
    click: function() {
        $(this).toggleClass("animated-click");
        $(".nav-menu").toggleClass("visible");
        //$("body").toggleClass("open");

        if ($(this).hasClass("animated-click")) {
            /*=======top======*/
            $(this).children(".top").animate({ fake1: 90 }, {
                step: function(now, fx) {
                    $(this).css({ '-webkit-transform': 'rotate(90deg ) translate(10px,0px)' });
                },
                duration: 1000

            }).animate({ fake2: 90 }, {
                step: function(now, fx) {
                    $(this).css({ '-webkit-transform': 'rotate(90deg ) translate(10px,-21px)' });
                },
                duration: 200

            }).animate({ fake3: 90 }, {
                step: function(now, fx) {
                    $(this).css({ '-webkit-transform': 'rotate(90deg ) translate(10px,0px)' });
                },
                duration: 250

            }).animate({ fake4: 90 }, {
                step: function(now, fx) {
                    $(this).css({ '-webkit-transform': 'rotate(90deg ) translate(10px,-21px)' });
                },
                duration: 200

            }).animate({ fake5: 90 }, {
                step: function(now, fx) {
                    $(this).css({ '-webkit-transform': 'rotate(45deg ) translate(21px,-12px)' });
                },
                duration: 200

            }).animate({ fake6: 90 }, {
                step: function(now, fx) {
                    $(this).css({ '-webkit-transform': 'rotate(45deg ) translate(21px,-12px)' });
                },
                duration: 200

            }).animate({ fake7: 90 }, {
                step: function(now, fx) {
                    $(this).css({ '-webkit-transform': 'rotate(45deg ) translate(7px,7px)' });
                },
                duration: 200

            });
            /*=======middle======*/
            $(this).children(".middle").animate({ fake11: 90 }, {
                step: function(now, fx) {
                    $(this).css({ '-webkit-transform': 'rotate(0deg ) translate(0px,0px)' });
                },
                duration: 1000

            }).animate({ fake22: 90 }, {
                step: function(now, fx) {
                    $(this).css({ '-webkit-transform': 'rotate(0deg ) translate(0px,0px)' });
                },
                duration: 200

            }).animate({ fake33: 90 }, {
                step: function(now, fx) {
                    $(this).css({ '-webkit-transform': 'rotate(0deg ) translate(0px,0px)' });
                },
                duration: 250

            }).animate({ fake44: 90 }, {
                step: function(now, fx) {
                    $(this).css({ '-webkit-transform': 'rotate(0deg ) translate(21px,0px)' });
                },
                duration: 200

            }).animate({ fake55: 90 }, {
                step: function(now, fx) {
                    $(this).css({ '-webkit-transform': 'rotate(-45deg ) translate(18px,13px)' });
                },
                duration: 200

            }).animate({ fake66: 90 }, {
                step: function(now, fx) {
                    $(this).css({ '-webkit-transform': 'rotate(-45deg ) translate(18px,16px)' });
                },
                duration: 200

            }).animate({ fake77: 90 }, {
                step: function(now, fx) {
                    $(this).css({ '-webkit-transform': 'rotate(-45deg ) translate(0px,0px)' });
                },
                duration: 200

            });
            /*=======bottom======*/
            $(this).children(".bottom").animate({ fake1: 90 }, {
                step: function(now, fx) {
                    $(this).css({ '-webkit-transform': 'rotate(90deg ) translate(-10px,13px)' });
                },
                duration: 1000

            }).animate({ fake2: 90 }, {
                step: function(now, fx) {
                    $(this).css({ '-webkit-transform': 'rotate(90deg ) translate(-10px,13px)' });
                },
                duration: 200

            }).animate({ fake3: 90 }, {
                step: function(now, fx) {
                    $(this).css({ '-webkit-transform': 'rotate(90deg ) translate(-10px,13px)' });
                },
                duration: 250

            }).animate({ fake4: 90 }, {
                step: function(now, fx) {
                    $(this).css({ '-webkit-transform': 'rotate(90deg ) translate(-10px,-23px)' });
                },
                duration: 200

            }).animate({ fake55: 90 }, {
                step: function(now, fx) {
                    $(this).css({ '-webkit-transform': 'rotate(45deg ) translate(7px,-26px)' });
                },
                duration: 200

            }).animate({ fake66: 90 }, {
                step: function(now, fx) {
                    $(this).css({ '-webkit-transform': 'rotate(45deg ) translate(7px,-26px)' });
                },
                duration: 200

            }).animate({ fake77: 90 }, {
                step: function(now, fx) {
                    $(this).css({ '-webkit-transform': 'rotate(45deg ) translate(-7px,-7px)' });
                },
                duration: 200

            });
            /*==================================*/
            /*===============settiemout start===================*/

            $(this).mouseenter(function() {

                $(this).children(".top").animate({ fake1: 90 }, {
                    step: function(now, fx) {
                        $(this).css({ '-webkit-transform': 'rotate(270deg ) translate(-10px,-10px)' });
                    },
                    duration: 0

                });
                $(this).children(".middle").animate({ fake1: 90 }, {
                    step: function(now, fx) {
                        $(this).css({ '-webkit-transform': 'rotate(-270deg ) translate(0px,0px)' });
                    },
                    duration: 0

                });
                $(this).children(".bottom").animate({ fake1: 90 }, {
                    step: function(now, fx) {
                        $(this).css({ '-webkit-transform': 'rotate(270deg ) translate(10px,10px)' });
                    },
                    duration: 0

                });
            });
            $(this).mouseleave(function() {

                $(this).children(".top").animate({ fake1: 90 }, {
                    step: function(now, fx) {
                        $(this).css({ '-webkit-transform': 'rotate(45deg ) translate(7px,7px)' });
                    },
                    duration: 0

                });
                $(this).children(".middle").animate({ fake1: 90 }, {
                    step: function(now, fx) {
                        $(this).css({ '-webkit-transform': 'rotate(-45deg ) translate(0px,0px)' });
                    },
                    duration: 0

                }, );
                $(this).children(".bottom").animate({ fake1: 90 }, {
                    step: function(now, fx) {
                        $(this).css({ '-webkit-transform': 'rotate(45deg ) translate(-7px,-7px)' });
                    },
                    duration: 0

                });
            });


            /*==========settimeout ends=====*/
            $(this).mouseenter(function() {
                $(this).children().removeClass("normal-hover");

            });


        } else {

            /*=======top======*/
            $(this).children(".top").animate({ fake1: 90 }, {
                step: function(now, fx) {
                    $(this).css({ '-webkit-transform': 'none' });
                },
                duration: 0

            });
            /*=======middle======*/
            $(this).children(".middle").animate({ fake11: 90 }, {
                step: function(now, fx) {
                    $(this).css({ '-webkit-transform': 'none' });
                },
                duration: 0

            });
            /*=======bottom======*/
            $(this).children(".bottom").animate({ fake1: 90 }, {
                step: function(now, fx) {
                    $(this).css({ '-webkit-transform': 'none' });
                },
                duration: 0

            });
            /*==================================*/
            /*===============settiemout start===================*/

            $(this).mouseenter(function() {

                $(this).children(".top").animate({ fake1: 90 }, {
                    step: function(now, fx) {
                        $(this).css({ '-webkit-transform': 'rotate(0deg ) translate(0px,-4px)' });
                    },
                    duration: 0

                });
                $(this).children(".middle").animate({ fake1: 90 }, {
                    step: function(now, fx) {
                        $(this).css({ '-webkit-transform': 'rotate(0deg ) translate(0px,0px)' });
                    },
                    duration: 0

                });
                $(this).children(".bottom").animate({ fake1: 90 }, {
                    step: function(now, fx) {
                        $(this).css({ '-webkit-transform': 'rotate(0deg ) translate(0px,4px)' });
                    },
                    duration: 0

                });
            });
            $(this).mouseleave(function() {

                $(this).children(".top").animate({ fake1: 90 }, {
                    step: function(now, fx) {
                        $(this).css({ '-webkit-transform': 'rotate(0deg ) translate(0px,0px)' });
                    },
                    duration: 0

                });
                $(this).children(".middle").animate({ fake1: 90 }, {
                    step: function(now, fx) {
                        $(this).css({ '-webkit-transform': 'rotate(0deg ) translate(0px,0px)' });
                    },
                    duration: 0

                }, );
                $(this).children(".bottom").animate({ fake1: 90 }, {
                    step: function(now, fx) {
                        $(this).css({ '-webkit-transform': 'rotate(0deg ) translate(0px,0px)' });
                    },
                    duration: 0

                });
            });


            /*==========settimeout ends=====*/

            $(this).mouseenter(function() {
                $(this).children().addClass("normal-hover");

            });



            /*==========settimeout ends=====*/
        }
        $(this).children().removeClass("normal-hover");
    }

});


/*==========nav bar===========*/
$('.nav-menu li.has-child > a').on('click', function() {
    if ($('window').width() < 1025) {
        $(this).parents('li').siblings('.has-child').children('.sub-menu').slideUp();
        $(this).next('.sub-menu').slideToggle();
        $(this).parent('li').toggleClass('active').siblings('li').removeClass('active');
    }

});


 // Nav
  $(".has-child > a").click(function(event){
    if($(window).width() < 1025){
        event.preventDefault();
        $(".sub-menu").slideUp();
        if($(this).next(".sub-menu").is(":visible") == false){
            $(this).next(".sub-menu").slideDown();
        }
      }
  });


// Filter Gallery
  $('.mb-tab_gallery ul li').click(function(){
    $(this).addClass("active-btn").siblings().removeClass("active-btn");
});

// Filter Gallery
    $("#showatable").click(function(){
            $("#hidden_table").toggleClass("visible");
            $("#show_table").toggleClass("invisible");
        });

        $("#showapprove").click(function(){
            $("#hidden_table").removeClass("visible");
            $("#show_table").removeClass("invisible");
        });

    // DropDown


$("#banner_slider").owlCarousel({
    loop: true,
    dots: true,
    nav: true,
    items: 1,
    margin: 0,
    navText: ["<img src='images/left-arrow.png'>", "<img src='images/right-arrow.png'>"],
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
    navText: ["<img class='left-icon' src='images/left-arrow.png'>", "<img class='right-icon' src='images/right-arrow.png'>"],
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



$("#tvc-slider").owlCarousel({
    loop: true,
    dots: true,
    nav: true,
    items: 1,
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    navText: ["<img src='images/left-arrow.png'>", "<img src='images/right-arrow.png'>"],


});


// DropDown
$(function() {
    $(".tabs_parent .select").on("click", function() {
        if ($(window).width() < 980) {
            $(this).next("ul").slideToggle();
        }
    });
    $(".nav-tabs li").on("click", function() {
        if ($(window).width() < 980) {
            var liText = $(this).children("a").text();
            $(".tabs_parent .select").text(liText);
            $(this).parents("ul").slideUp();
        }
    });

});




$('.opportunity-listing .view-opp').on("click" , function(){
    $(".job-form").slideUp();
    if($(this).next(".job-form").is(":visible") == false){
        $(this).next(".job-form").slideDown();
    }
});

// $(document).ready(function(){
//   $(".job-form").hide();
//   $(".view-opp").click(function(){
//     $(".job-form").slideToggle("slow");
//   });
// });