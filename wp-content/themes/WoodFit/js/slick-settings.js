jQuery(document).ready(function($){
      $('.testimonial-slider').slick({
			infinite: true,
			speed: 300,
			slidesToShow: 1,
			adaptiveHeight: true,
			nextArrow: $('.testimonial-next-button'),
			prevArrow: $('.testimonial-prev-button'),
      });
    });