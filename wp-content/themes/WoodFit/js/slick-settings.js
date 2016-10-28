jQuery(document).ready(function($){
      $('.testimonial-slider').slick({
			infinite: true,
			speed: 300,
			slidesToShow: 1,
			adaptiveHeight: true,
			nextArrow: $('.testimonial-next-button'),
			prevArrow: $('.testimonial-prev-button'),
      });

      $('.client-logo-slider').slick({
			autoplay: true,
			arrows: false,
			autoplaySpeed: 1000,
			//draggable: true,
			infinite: true,
			speed: 600,
			slidesToShow: 4,
			slidesToScroll: 1,
			adaptiveHeight: false,
			pauseOnHover: true,
			variableWidth: true,
			//nextArrow: $('.client-next-button'),
			//prevArrow: $('.client-prev-button'),
      });

      $('.product-trim-slider').slick({
			autoplay: true,
			arrows: false,
			autoplaySpeed: 3500,
			//draggable: true,
			infinite: true,
			speed: 600,
			slidesToShow: 1,
			slidesToScroll: 1,
			adaptiveHeight: false,
			pauseOnHover: true,
			variableWidth: true
      });




    });