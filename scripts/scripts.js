import $ from 'jquery';

import 'slick-carousel/slick/slick.js';

$.fn.isOnScreen = function() {
	var win = $(window);

	var viewport = {
		top: win.scrollTop(),
		left: win.scrollLeft()
	};
	viewport.right = viewport.left + win.width();
	viewport.bottom = viewport.top + win.height();

	var bounds = this.offset();
	bounds.right = bounds.left + this.outerWidth();
	bounds.bottom = bounds.top + this.outerHeight();

	return !(
	viewport.right < bounds.left ||
	viewport.left > bounds.right ||
	viewport.bottom < bounds.top ||
	viewport.top > bounds.bottom
	);
};

$(".slide-up, .slide-down, .slide-right, .slow-fade, .col__circle-list ul li").each(function() {
	if ($(this).isOnScreen()) {
  		$(this).addClass("active");
	}
});

  // ========== Add class on entering viewport

  $.fn.isInViewport = function() {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();
    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();
    return elementBottom > viewportTop && elementTop < viewportBottom;
  };

  $(window).on("resize scroll", function() {
    $(".slide-up, .slide-down, .slide-right, .slow-fade, .col__circle-list ul li").each(function() {
      if ($(this).isInViewport()) {
        $(this).addClass("active");
      }
    });
  });

$('.hero__image-container').slick({
	autoplay:true,
	fade:true,
	dots:false,
	arrows:false,
	autoplaySpeed:5000,
});

$('.location__container').slick({
	slidesToShow: 3,
	centerMode: true,
	autoplay:true,
	dots:false,
	arrows:false,
	autoplaySpeed:4000,
	easing: 'easeInOutQuint',
	speed: 800,
	 responsive: [
    {
      breakpoint: 1025,
	      settings: {
	        slidesToShow: 2,
	      }
	    },
	    {
      breakpoint: 767,
	      settings: {
	        slidesToShow: 1,
	      }
	    }
    ]
});

$('.information__content').on('click', function(){
	var id = $(this).attr('data-infoid');
	$('#' + id).addClass('active');
});

$('.information__block--circle').on('click', function(){
	$('.information__block').removeClass('active');
})