$(function(){
	$('.banner-section_slider').slick({
		dots: true,
		prevArrow:'<button class="banner-section_slider-btn banner-section_slider-btnprev"><img src="img/arrow-left.png" alt=""></button>',	
		nextArrow:'<button class="banner-section_slider-btn banner-section_slider-btnnext"><img src="img/arrow-right.png" alt=""></button>'
	});

	$('.tab').on('click', function(e){
		e.preventDefault();
		$($(this).siblings()).removeClass('tab--active');
		$($(this).parent().siblings().find('div')).removeClass('tabs-content--active');
		
		$(this).addClass('tab--active');
		$($(this).attr('href')).addClass('tabs-content--active');
	});

	$('.product-slider').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		prevArrow:'<button class="product-slider_slider-btn product-slider_slider-btnprev"><img src="img/arrow-left.png" alt=""></button>',	
		nextArrow:'<button class="product-slider_slider-btn product-slider_slider-btnnext"><img src="img/arrow-right.png" alt=""></button>'
	});




});