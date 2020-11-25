jQuery(document).ready(function ($) {

	//myFunctions
	$('.header__burger').click(function (event) {
		$('.header__burger, .header__menu').toggleClass('active');
		$('body').toggleClass('lock');

	});
	$('.header__burger1').click(function (event) {
		$('.header__burger1, .header__menu1').toggleClass('active');

	});
	var n = 1;

	$('.next').click(function (event) {
		n++;
		$('.order__button').addClass('stap' + n);
		$('.order__step' + n).addClass('active');
		$('.itemorder' + n).addClass('actives');
		$('.itemorder' + n).removeClass('hide');
		n--;
		$('.itemorder' + n).addClass('hide');
		$('.order__button').removeClass('stap' + n);
		$('.order__step' + n).removeClass('active');
		$('.itemorder' + n).removeClass('actives');

		n++;

	});

	if (n === 4) {
		$('.send').addClass('stap' + n);
	}

	$('.previous').click(function (event) {

		$('.order__button').removeClass('stap' + n);
		$('.itemorder' + n).addClass('hide');
		$('.order__step' + n).removeClass('active');
		$('.itemorder' + n).removeClass('actives');
		n--;
		$('.order__button').addClass('stap' + n);
		$('.order__step' + n).addClass('active');
		$('.itemorder' + n).addClass('actives');
		$('.itemorder' + n).removeClass('hide');
	});


	$('.wappgroup__button, .footer__pricebutton, .menu-item-396, .menu-item-406, .menu-item-326, .menu-item-335, .menu-item-345, .menu-item-356, .menu-item-366, .menu-item-376, .menu-item-386').click(function (event) {

		$('.modals, .modals__01').addClass('open');
		$('.modals__body').addClass('h400');
		$('body').addClass('lock');
	});

	$('.rew').click(function (event) {

		$('.modals, .modals__02').addClass('open');
		$('.modals__body').addClass('h600');
		$('body').addClass('lock');
	});

	$('.modals__close, .modals__bg').click(function (event) {

		$('.modals, .modals__01, .modals__02, .modals__03').removeClass('open');
		$('.modals__body').removeClass('h400');
		$('.modals__body').removeClass('h600');
		$('.modals__body').removeClass('h230');
		$('body').removeClass('lock');
	});

	var button = $('#button-up');
	$(window).scroll(function () {
		if ($(this).scrollTop() > 300) {
			button.fadeIn();
		} else {
			button.fadeOut();
		}
	});
	button.on('click', function () {
		$('body, html').animate({
			scrollTop: 0
		}, 800);
		return false;
	});

	//WOW
	//new WOW().init();

	//swiper slider
	//if($('.swiper-slide').length>1){
	//	var swiper = new Swiper('.swiper-container', {
	//		navigation: {
	//			nextEl: '.swiper-button-next',
	//			prevEl: '.swiper-button-prev',
	//		},
	//		loop: true,
	//		autoplay: {
	//	        delay: 5000,
	//	        disableOnInteraction: false,
	//	    },
	//	    simulateTouch: true,
	//	});
	//} else {
	//	$('.swiper-button-next').css('display', 'none');
	//	$('.swiper-button-prev').css('display', 'none');
	//}

	//lazyload
	$(window).scroll(function () {
		$(".sp_lazyload").lazyload();
	});

	$(window).mousemove(function () {
		$(".sp_lazyload").lazyload();
	});

});	