// JavaScript Document



//this use ony navigation

(function($) {

$.fn.menumaker = function(options) { 

 var cssmenu = $(this), settings = $.extend({

   format: "dropdown",

   sticky: false

 }, options);

 return this.each(function() {

   $(this).find(".button").on('click', function(){

     $(this).toggleClass('menu-opened');

     var mainmenu = $(this).next('ul');

     if (mainmenu.hasClass('open')) { 

       mainmenu.slideToggle().removeClass('open');

     }

     else {

       mainmenu.slideToggle().addClass('open');

       if (settings.format === "dropdown") {

         mainmenu.find('ul').show();

       }

     }

   });

   cssmenu.find('li ul').parent().addClass('has-sub');

multiTg = function() {

     cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');

     cssmenu.find('.submenu-button').on('click', function() {

       $(this).toggleClass('submenu-opened');

       if ($(this).siblings('ul').hasClass('open')) {

         $(this).siblings('ul').removeClass('open').slideToggle();

       }

       else {

         $(this).siblings('ul').addClass('open').slideToggle();

       }

     });

   };

   if (settings.format === 'multitoggle') multiTg();

   else cssmenu.addClass('dropdown');

   if (settings.sticky === true) cssmenu.css('position', 'fixed');

resizeFix = function() {

  var mediasize = 991;

     if ($( window ).width() > mediasize) {

       cssmenu.find('ul').show();

     }

     if ($(window).width() <= mediasize) {

       cssmenu.find('ul').hide().removeClass('open');

     }

   };

   resizeFix();

   return $(window).on('resize', resizeFix);

 });

  };

})(jQuery);



(function($){

$(document).ready(function(){

$("#cssmenu").menumaker({

   format: "multitoggle"

});

});

})(jQuery);



//header fixed top

 $(document).ready(function() {
			  

 // Hide Header on on scroll down

var didScroll;

var lastScrollTop = 5;

var delta = 20;

var navbarHeight = $('.main-header').outerHeight();



$(window).scroll(function(event){

    didScroll = true;

});



setInterval(function() {

    if (didScroll) {

        hasScrolled();

        didScroll = false;

    }

}, 20);



function hasScrolled() {

    var st = $(this).scrollTop();

    

    // Make sure they scroll more than delta

    if(Math.abs(lastScrollTop - st) <= delta)

        return;

    

    // If they scrolled down and are past the navbar, add class .nav-up.

    // This is necessary so you never see what is "behind" the navbar.

    if (st > lastScrollTop && st > navbarHeight){

        // Scroll Down

        $('.main-header').removeClass('nav-down').addClass('nav-up');

    } else {

        // Scroll Up

        if(st + $(window).height() < $(document).height()) {

            $('.main-header').removeClass('nav-up').addClass('nav-down');

        }

    }

    

    lastScrollTop = st;

}
//dropdown search button start			  
  var timer;
  $('.btn_search, .dropdown-menu').hover(function() {
    clearTimeout(timer);
    $('.dropdown').addClass('open');
    
  }, function() {
    timer = setTimeout(function() {
      $('.dropdown').removeClass("open");
    }, 500);
    
  });
  //dropdown search button end	
$('.search-panel .dropdown-menu').find('a').click(function(e) {
		e.preventDefault();
		var param = $(this).attr("href").replace("#","");
		var concept = $(this).text();
		$('.search-panel span#search_concept').text(concept);
		$('.input-group #search_param').val(param);
	});
     
     
     //carousel options
  $('#quote-carousel').carousel({
    pause: true, interval: 10000,
  });

            })

//header fixed top end



	$('#myCarousel').carousel({
	  interval: 3000
	});

	// handles the carousel thumbnails
	$('[id^=carousel-selector-]').hover(function() {
	  var id_selector = $(this).attr("id");
	  //console.log(id_selector);
	  var id = id_selector.substr(id_selector.length - 1);
	  //console.log(id);
	  id = parseInt(id);
	  $('#myCarousel').carousel(id - 1);
	  $('[id^=carousel-selector-]').removeClass('selected');
	  $(this).addClass('selected');
	  //console.log(this);
	});

	// when the carousel slides, auto update
	$('#myCarousel').on('slid.bs.carousel', function(e) {
	  var id = $('.item.active').data('slide-number');
	  id = parseInt(id);
	  $('[id^=carousel-selector-]').removeClass('selected');
	  $('[id=carousel-selector-' + id + ']').addClass('selected');
	});
