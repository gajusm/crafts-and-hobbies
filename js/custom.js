var containerW = $('.container').eq(0).width();
var windowWidth = $(window).width();
function setPageHeight(){
	var headerH = $('header').outerHeight();
	var footerH = $('footer').outerHeight();
	var documentH = $(window).outerHeight();
	var wrappH = $('.pageWrapper').outerHeight();
	var actualH = parseFloat( documentH - (headerH + footerH) );
	// console.log('headerH: '+headerH);
	// console.log('footerH: '+footerH);
	// console.log('documentH: '+documentH);
	// console.log('actualH: '+actualH);
	// console.log('wrappH: '+wrappH);
	if (wrappH < actualH) {
		$('.pageWrapper').css('min-height',actualH);
	}
}
$(function () {
	setPageHeight();
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

	$(document).delegate('#checkout', 'click', function(event) {
		// console.log('sadadaa');
		window.location.href = './checkout1.php';
	});
	$(document).delegate('.forgotPass', 'click', function(event) {
		// console.log('sadadaa');
		$('.chkMethodWrap').addClass('hide');
		$('#chkForgotWrap').removeClass('hide');
	});
	$(document).delegate('#backToLogin', 'click', function(event) {
		// console.log('sadadaa');
		$('.chkMethodWrap').addClass('hide');
		$('#chkLoginWrap').removeClass('hide');
	});
	$(document).delegate('#guestRegisterButton', 'click', function(event) {
		// console.log('sadadaa');
		window.location.href = './checkout2.php';
	});
	$(document).delegate('#continueBilling', 'click', function(event) {
		// console.log('sadadaa');
		window.location.href = './checkout3.php';
	});
	$(document).delegate('#continueShipping', 'click', function(event) {
		// console.log('sadadaa');
		window.location.href = './checkout4.php';
	});
	$(document).delegate('.payMethod', 'click', function(event) {
		// console.log('sadadaa');
		if ( $(this).attr('id') == 'cardPay' ) {
			$('.cardPayForm').removeClass('hide');
		}else{
			$('.cardPayForm').addClass('hide');
		}
		setPageHeight();
	});
	// $(document).delegate('#expiryCard', 'keyup', function(event) {
	// 	// console.log('sadadaa');
	// 	// if ( $(this).attr('id') == 'cardPay' ) {
	// 	// 	$('.cardPayForm').removeClass('hide');
	// 	// }else{
	// 	// 	$('.cardPayForm').addClass('hide');
	// 	// }
	// });
});