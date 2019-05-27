jQuery(function($){			
		$('.example dd').hide(); 
		$('.example dt').hover(function(){$(this).addClass('hover')},function(){$(this).removeClass('hover')}).click(function(){
		$(this).next().slideToggle('normal');
		}); 
	
});
jQuery(function($){			
		$('.toggle dd').hide(); 
		$('.toggle dt').hover(function(){$(this).addClass('hover')},function(){$(this).removeClass('hover')}).click(function(){
		$(this).next().slideToggle('normal');
		}); 
	
});



jQuery(function($){
	$("#ticker").NewsTicker({
	    direction: "up",
	    easing: "easeInQuart",
	    interval: 3000,
	    speed: 1000
	});
    });

jQuery(function($){
$('.about_slide').bxSlider({
  mode: 'horizontal',
  useCSS: false,
  infiniteLoop: true,
  hideControlOnEnd: false,
  auto: true,
  autoControls: true,
  easing: 'easeInQuart',
  speed: 800
});
});

jQuery(function($){
    $(".panel_quote").click(function() {
        $(".panel_quote_frm").slideToggle("fast");
    });
});

jQuery(function($){
    $(".panel_search").click(function() {
        $(".panel_search_frm").slideToggle("fast");
    });
});

jQuery(function($){
    
    //Show Banner
    $(".main_image .desc").show(); //Show Banner
    $(".main_image .block").animate({ opacity: 0.85 }, 1 ); //Set Opacity
 
   
    //Toggle Teaser
    $("a.collapse").click(function(){
        $(this).next().slideToggle();
        $(this).toggleClass("show");
    });


});//Close Function  


/*===========================================================*/
/*	Sharrre Plugin (Social Media)
/*===========================================================*/	
$('.shareme').sharrre({
share: {
twitter: true,
facebook: true,
googlePlus: true
},
template: '<div class="box"><div class="left">Share</div><div class="middle"><a href="#" class="facebook"><i class="icon-facebook"></i></a><a href="#" class="twitter"><i class="icon-twitter"></i></a><a href="#" class="googleplus"><i class="icon-google-plus"></i></a></div><div class="right">{total}</div></div>',
enableHover: false,
enableTracking: true,
render: function(api, options){
$(api.element).on('click', '.twitter', function() {
api.openPopup('twitter');
});
$(api.element).on('click', '.facebook', function() {
api.openPopup('facebook');
});
$(api.element).on('click', '.googleplus', function() {
api.openPopup('googlePlus');
});
}
});




  $(function(){
	$('.f_count').sharrre({
    share: {
      facebook: true
    },
enableHover: false,
  template: '<div class="count">{total}</div>',
    url: 'http://google.com'
  });
  });

  $(function(){
	$('.t_count').sharrre({
    share: {
      twitter: true
    },
enableHover: false,
  template: '<div class="count">{total}</div>',
    url: 'http://google.com'
  });
  });

  $(function(){
	$('.l_count').sharrre({
    share: {
      linkedin: true
    },
enableHover: false,
  template: '<div class="count">{total}</div>',
    url: 'http://google.com'
  });
  });



      jQuery(function($){
        $(".tweet").tweet({
          avatar_size: 32,
          count: 2,
          fetch: 2,
          filter: function(t){ return ! /^@\w+/.test(t.tweet_raw_text); },
          username: "twitter"
        });
      });

var ww = document.body.clientWidth;

jQuery(function($){
	$(".nav li a").each(function() {
		if ($(this).next().length > 0) {
			$(this).addClass("parent");
		};
	})
	
	$(".toggleMenu").click(function(e) {
		e.preventDefault();
		$(this).toggleClass("active");
		$(".nav").toggle();
	});
	adjustMenu();
})

$(window).bind('resize orientationchange', function() {
	ww = document.body.clientWidth;
	adjustMenu();
});

var adjustMenu = function() {
	if (ww < 768) {
		$(".toggleMenu").css("display", "inline-block");
		if (!$(".toggleMenu").hasClass("active")) {
			$(".nav").hide();
		} else {
			$(".nav").show();
		}
		$(".nav li").unbind('mouseenter mouseleave');
		$(".nav li a.parent").unbind('click').bind('click', function(e) {
			// must be attached to anchor element to prevent bubbling
			e.preventDefault();
			$(this).parent("li").toggleClass("hover");
		});
	} 
	else if (ww >= 768) {
		$(".toggleMenu").css("display", "none");
		$(".nav").show();
		$(".nav li").removeClass("hover");
		$(".nav li a").unbind('click');
		$(".nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
		 	// must be attached to li so that mouseleave is not triggered when hover over submenu
		 	$(this).toggleClass('hover');
		});
	}
}

jQuery(function($){
			
			$(window).scroll(function(){
				if ($(this).scrollTop() > 100) {
					$('.scrollup').fadeIn();
				} else {
					$('.scrollup').fadeOut();
				}
			}); 
			
			$('.scrollup').click(function(){
				$("html, body").animate({ scrollTop: 0 }, 600);
				return false;
			});
 
		});