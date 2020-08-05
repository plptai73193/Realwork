AOS.init({
	duration: 1200
});
$(document).ready(function() {
	$('.sp-cn').hide();
	$('.sp-sn').click(function() {
		$(this).hide();
		$('.sp-cn').show();
		$('body').addClass('push-left');
	});
	$('.sp-cn').click(function() {
		$(this).hide();
		$('.sp-sn').show();
		$('body').removeClass('push-left');
	});
	/*----------------------------------------------*/
	$('.sp-sn').click(function() {
		$('#mySidenav').css('width', '280px');
	});
	$('.sp-cn').click(function() {
		$('#mySidenav').css('width', '0');
	});
	/*--------------------------------------------*/
	$('.slider-feedback').owlCarousel({
		loop: true,
		margin: 10,
		nav: false,
		items: 3,
		dots: false,
		autoplayTimeout: 5000,
		autoplay: true
	});
	/*---------------------------------------------*/
	$('.slider-doitac').owlCarousel({
		loop: true,
		margin: 10,
		nav: false,
		items: 5,
		dots: false,
		autoplay: true,
		autoplayTimeout: 5000,
		responsive: {
			0: {
				items: 2
			},
			481: {
				items: 3
			},
			768: {
				items: 4
			},
			992: {
				items: 5
			}
		}
	});
	/*---------------------------------------------*/
	$('.color-sp').click(function() {
		$('.color-sp').removeClass('active');
		$(this).addClass('active');
		var src = $(this).find('img').attr('src');
		var delimg = src.replace('img/', '');
		var mamau = delimg.replace('.jpg', '');
		var masp = $('.code-door').text().toLowerCase();
		var fullsrc = masp + '-' + mamau;
		var gal = $('.slider-spct .lSSlideOuter .lSPager.lSGallery li');
		$(gal).each(function() {
			var stt = $(this).index();
			var getformat = $(this).find('img').attr('src');
			var lastformat = getformat.substr(getformat.length - 4);
			$(this).find('img').attr('src', 'img/' + fullsrc + '-' + (stt + 1) + lastformat);
		});
		var kb = $('.slider-spct .lSSlideOuter .lightSlider li');
		$(kb).each(function() {
			var id = $(this).attr('id');
			var getformat = $(this).find('img').attr('src');
			var lastformat = getformat.substr(getformat.length - 4);
			$(this).attr('data-thumb', 'img/' + masp + '-' + mamau + '-' + id + lastformat);
			$(this).attr('data-src', 'img/' + masp + '-' + mamau + '-' + id + lastformat);
			$(this).find('img').attr('src', 'img/' + masp + '-' + mamau + '-' + id + lastformat);
		});
	});
	/*----------------------------------------------*/
	$('.btn-plus').click(function() {
		$(this).prev().val(parseInt($(this).prev().val()) + 1);
	});
	$('.btn-minus').click(function() {
		$(this).next().val(parseInt($(this).next().val()) - 1);
		if ($(this).next().val() == 0) {
			$(this).next().val(1);
		}
	});
	/*---------------------------------------------*/
	$('#back-to-top').hide();
	$(window).scroll(function() {
		if ($(this).scrollTop() > 50) {
			$('#back-to-top').show();
		} else {
			$('#back-to-top').hide();
		}
	});
	$('#back-to-top').click(function() {
		$('#back-to-top').tooltip('hide');
		$('body,html').animate(
			{
				scrollTop: 0
			},
			800
		);
		return false;
	});
	$('#back-to-top').tooltip('show');
});
