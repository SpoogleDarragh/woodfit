jQuery(document).ready(function($){
	var pcw = $('.product-color').width();
	$('.product-color').css({
	    'height': pcw + 'px'
	});

	var specW = $('.specsheet-image').width();
	var specH = $('.specsheet-image').height();
	$('.specsheet-dl').css({
		'height' : specH + 'px',
		'width' : specW + 'px',
		'padding-top' : specH/2 +'px'
	})

});