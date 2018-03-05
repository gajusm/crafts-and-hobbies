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

	$('.homeProdSlider').slick({
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
	$('.brandSlider').slick({
		slidesToShow: 6,
		autoplay:true,
		responsive: [
			{
			breakpoint: 992,
				settings: {
					slidesToShow: 5
				}
			},
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

	$(document).delegate('.catVariation', 'click', function(event) {
		$(this).parent().find('.catVariation').removeClass('active');
		$(this).addClass('active');
	});
	$('.prodDetailsMainSlider').slick({
		slidesToShow: 1,
		arrows: true,
		autoplay:true,
		infinite: false,
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
	$('.detProdSlider').slick({
		slidesToShow: 4,
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