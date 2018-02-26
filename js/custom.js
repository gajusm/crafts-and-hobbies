var containerW = $('.container').eq(0).width();
var windowWidth = $(window).width();
$(function () {
	$('.searchMain input').focus(function(event) {
		// var containerW = $('.container').eq(0).width();
		$('.searchMain').addClass('focused').css('width', containerW);
	});
	$('.searchMain input').blur(function(event) {
		$('.searchMain').removeClass('focused').css('width', '100%');
	});

	var leftW = $('.allCatsList').width();
	var leftH = $('.allCatsList').height();
	var catsDD_width = parseFloat( containerW - leftW );
	
	if ( windowWidth > 767 ) {
		$('.catsDD').css({
			'width': catsDD_width,
			'min-height': leftH
		});
	} else {
		$('.allCats').click(function(event) {
			/* Act on the event */
		});
	}

	$('.prodSlider').slick({
		slidesToShow: 3,
		responsive: [
			{
			breakpoint: 768,
				settings: {
					arrows: false,
					slidesToShow: 3
				}
			},
			{
			breakpoint: 480,
				settings: {
					arrows: false,
					slidesToShow: 1
				}
			}
		]
	});
});