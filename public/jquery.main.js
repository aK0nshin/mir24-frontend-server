$(document).ready(function(){
	$('.image-discription').stop().mouseenter(function() {
		var _el = $(this).find('.image-row-text');
		var _hh = _el.find('p').outerHeight(true);
		_el.css({
			'height': _hh
		});
	});
	$('.image-discription').stop().mouseleave(function() {
		var _el = $(this).find('.image-row-text');
		_el.css({
			'height': 0
		});
	});
});

