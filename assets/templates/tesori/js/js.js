var myMap = null;
var popupTime = 1000;

function initMap() {
	myMap = new ymaps.Map('YMap', {
        center: [55.746,37.577], 
        zoom: 16
    });
	var myPlacemark = new ymaps.Placemark([55.746,37.577], {}, {
        iconLayout: 'default#image',
        iconImageHref: '/assets/templates/tesori/design/img/placemark.png',
        iconImageSize: [42, 42],
        iconImageOffset: [-21, -21]
    });
	myMap.geoObjects.add(myPlacemark);
}


function popupClose(){
	if ( !$('div.popup').hasClass('move') ) {
		$('div.popup').addClass('move');
		if (myMap) myMap.destroy();
		if ($('address', 'div.popup-body').is('address')) $('address', 'div.popup-body').remove();		
		$('div.popup').addClass('closing');
		setTimeout(function() {
			if ( $('div.popup-body').html() ){
				$('#'+$('div.popup-body').attr('for')).html($('div.popup-body').html());
				$('div.popup-body').html('');
			}
			$('div.popup').removeClass('opened').removeClass('closing').removeClass('move');
		}, popupTime);	
	}
}

function popupClick(){
	if (myMap) myMap.destroy();
	if ($('address', 'div.popup-body').is('address')) $('address', 'div.popup-body').remove();	
	if ( $('div.popup-body').html() ){
		$('#'+$('div.popup-body').attr('for')).html($('div.popup-body').html());
		$('div.popup-body').html('');
	}	
}


function popupFormMessage(param){	
	$('li.hide', 'form.message-form').slideUp();
	$select = ( param=='notpopup' ) ? $('select.message-type') : $('select.message-type', 'div.popup');
	$select.change(function (e) { 
		$form = $(this).parents('form.message-form');
		$('li.hide', $form).slideUp();		
		$('li.' + $(this).find('option:selected').val(), $form).slideDown();						
	});		
	if (param) {
		$('option[value="' + param + '"]').attr('selected', 'selected');
		$('select.message-type').trigger('change');	
	}
}

function popupMap(){	
	mapHeight = $(window).height() - $('div#YMap').offset().top;
	$('div#YMap').css({height:mapHeight});
	ymaps.ready(function(){
        initMap();
    });
}	

function itemsSlider(){
	$('div.items-slider').each(function(){
		$('span.touchslider-nav-item', this).removeClass('opened');
		$('span.touchslider-nav-item-current', this).addClass('opened');
		$next = $('span.touchslider-nav-item-current', this).next('span.touchslider-nav-item');
		$prev = $('span.touchslider-nav-item-current', this).prev('span.touchslider-nav-item');
		if (!$next.is('span')) $next = $prev.prev('span.touchslider-nav-item');
		if (!$prev.is('span')) $prev = $next.next('span.touchslider-nav-item');
		$next.addClass('opened');
		$prev.addClass('opened');
		if ( ($('div.head-search-pc').css('display') != 'block') ) {
			$next1 =  $('span.touchslider-nav-item.opened:last', this).next('span.touchslider-nav-item');
			$prev1 = $('span.touchslider-nav-item.opened:first', this).prev('span.touchslider-nav-item');
			if (!$next1.is('span')) $next1 = $prev1.prev('span.touchslider-nav-item');
			if (!$prev1.is('span')) $prev1 = $next1.next('span.touchslider-nav-item');
			$next1.addClass('opened');
			$prev1.addClass('opened');
		}
		
	});
	
}

function getScrol() {
	var html = document.documentElement;
	var body = document.body;
	var top = html.scrollTop || body && body.scrollTop || 0;
	top -= html.clientTop;
	return top;
}

var messagePage = false;

$(document).ready(function(){ 
	
	$('a.popup:not(.mobile)').live('click', function (e) { 
		e.preventDefault();
		if ( !$('div.popup').hasClass('move') ) {			
			if ($(this).parents('div.popup').is('div')) popupClick();
			$div = $('#'+$(this).data('href'));
			$('div.popup').addClass('move');			
			if ( $div.html() ) {
				$('div.popup-body').html($div.html()).attr('for', $(this).data('href'));
				$('div.popup').addClass('opened');
				$div.html('');		
			}
			if (!messagePage && $('div.popup').find('select.message-type').is('select')) { //разные поля сообщения в зависимости от вида обращения
				param = (typeof $(this).data('param') != 'undefined') ? $(this).data('param') : 0;
				popupFormMessage(param);
			} else if ($('div.popup').find('div.map-h1').is('div')) { //добавить карту
				popupMap();
				if ($(this).hasClass('addaddress')) { //добавить контакты (для мобилы)
					$('address', 'header').clone().insertAfter($('div.map-h1', 'div.popup-body'));
					$('.address-phone', 'header').clone().insertAfter($('.address-street', 'div.popup-body'));
					$('a.address-phone-a', 'div.popup-body').addClass('mobile'); //телефон без qrcode
				}
			}
			setTimeout(function() {
				$('div.popup').removeClass('move');
			}, popupTime);			
			$('div.popup-back').css('height', getScrol() + 20);
		}
	});
	
	$('div.popup-back, div.popup-bg').swipe({ 
		tap:function(event) { popupClose(); }, 
		swipeLeft:	function(event) { popupClose(); }, threshold:150,
		swipeRight:	function(event) { popupClose(); }, threshold:150 
	});
	$('div.popup').swipe({ 
		swipeLeft:	function(event) { if ( !$('div.popup').find('div.map-h1').is('div') ) popupClose(); }, threshold:150,
		swipeRight:	function(event) { if ( !$('div.popup').find('div.map-h1').is('div') ) popupClose(); }, threshold:150 
	});
	$(document).keydown(function(e) { if (e.keyCode == 27) popupClose(); });
	
	$('form.head-search-form').live('click', function (e) { $('input.head-search-input', 'form.head-search-form').focus(); });
	
	$(window).scroll(function () {
		if (!$('div.topbutton').hasClass('fixed')){
			if ($(window).scrollTop() > 800) $('div.topbutton').addClass('fixed');
		} else {
			if ($(window).scrollTop() < 800) $('div.topbutton').removeClass('fixed');
		}
	});
	$('div.topbutton i').click(function (e) { $('html, body').stop().animate({ scrollTop: 0 }, 300); });
	
	$('li.head-menu-li', 'header').mouseenter(function(){ 
		if ( ($('div.head-search-pc').css('display') == 'block') && $('div.head-menu-sub', this).is('div') ) $('div.head-search-pc').stop().fadeOut(100); 
	}).mouseleave(function(){ 
		$('div.head-search-pc').fadeIn(1500, function(){ $(this).attr('style', '') }); 
	});
	
	
	$('div.popup-body').find('li:has(div.head-menu-sub)').find('a:not(div.head-menu-sub a)').live('click', function (e) {
	if (!$(e.target).is('span.cat')){
		e.preventDefault();
		$parent = $(this).parents('li');
		if ( $parent.find('div.head-menu-sub.opened').hasClass('opened') ){
			$parent.find('div.head-menu-sub.opened').removeClass('opened');
		} else if ( !$('div.head-menu-sub.opened', 'div.popup-body').is('div') ){
			$parent.find('div.head-menu-sub').addClass('opened');
		} else {
			openedHeight = $('div.head-menu-sub.opened', 'div.popup-body').height();
			openedOffset = $('div.head-menu-sub.opened', 'div.popup-body').offset().top;
			newOffset = $(this).offset().top;
			$('div.head-menu-sub.opened', 'div.popup-body').removeClass('opened');
			$parent.find('div.head-menu-sub').addClass('opened');			
			if ( newOffset > openedOffset ) $('html, body').stop().animate({ scrollTop: newOffset - openedHeight + $('div.popup-back').height() - 50 }, 500);			
		}
	}
	});
	
	$('div.markstar', 'form.message-form').each(function(){
		$li = $(this).parents('li.message-mark');
		$('div.markstar', $li).addClass('star' + $li.find('option:selected').val()).show().removeClass('star0');
		$('li.message-mark select', 'form.message-form').hide();
		$(this).show();
	});
	
	$('div.markstar span', 'form.message-form').live('click', function (e) { 
		$(this).parents('div.markstar').removeClass('star1').removeClass('star2').removeClass('star3').removeClass('star4').removeClass('star5').addClass('star' + $(this).data('mark')).parents('li.message-mark').find('select').find('option[value=' + $(this).data('mark') + ']').attr('selected', 'selected');		
	});
	
	
	$('div.mainphoto-slider').touchSlider({autoplay:true, duration:500});
	$('div.mainphoto-slider').each(function(){
		$('span.touchslider-nav-all', this).html( $('div.touchslider-item', this).length );
	});
	$('div.photo-slider').touchSlider();
	$('div.items-slider').touchSlider();
	$('div.slider1000').touchSlider({autoplay:true, duration:500}).find('span.touchslider-nav-all').html( $('div.touchslider-item', this).length );
	
	$(window).resize(function(){
		var squareWidth = $('div.mainphoto-item:last').width();
		
		var productDescriptionHeight = $('div.panel-description div.description').height();
		if ( $(window).width() < 600 ){
			squareWidth = $('div.main').width()/2 - 2;
			if ( (typeof productDescriptionHeight !== 'undefined') ) {
				if ( (productDescriptionHeight > 150) && !$('div.panel-description div.description').hasClass('long') ){
					$('div.panel-description div.description').addClass('long');				
					$('div.description-long').show();				
				}
			} else {
				$('div.panel-description div.description').removeClass('long');				
				$('div.description-long').hide();				
			}
		}
		if ( squareWidth == null ) squareWidth = $('div.main').width()/4;
		var sliderWidth = squareWidth*2 + 4;
		$('div.mainphoto-item, div.mainphoto-item img, div.mainphoto-slider span.touchslider-arrow').css('height', squareWidth);
		$('div.mainphoto-slider, div.mainphoto-slider div.touchslider-viewport').css('width', sliderWidth).css('height', squareWidth);		
		$('div.mainphoto-slider div.touchslider-viewport img').css({'max-height': squareWidth});
		$('.product-panels div.mainphoto-slider div.touchslider-viewport img').css({'max-height': '1000px'});
		$('div.mainphoto-slider div.touchslider-item').css('width', sliderWidth);
		if ( $(window).width() < 1000 ) { 
			$('div.mainphoto-slider').insertAfter('div.mainphoto-item:last');
		} else {
			$('div.mainphoto-slider').insertAfter('div.mainphoto-item:first');
		}
		
		$('div.photo-slider, div.photo-slider div.touchslider-viewport, div.photo-slider div.touchslider-item').css('width', $('div.main').width()).css('height', $('div.main').width()/2.5);		
		if ( ($('div.col2-2').css('position') == 'absolute') ) { 
			var w2 = $('div.main').width()/2 - 5;
		} else {
			var w2 = $('div.main').width();
		}
		$('div.items-slider, div.items-slider div.touchslider-viewport, div.items-slider div.touchslider-item').css('width', w2).css('height', w2/2.5);		
		
		var squareWidth = $('div.mebel div.coli').width();
		var mebelLogoWidth = squareWidth/3;
		$('div.mebel div.img, div.mebel div.img img').css('height', squareWidth);
		$('div.mebel div.logo').css('width', mebelLogoWidth).css('height', mebelLogoWidth).css('top', mebelLogoWidth).css('left', mebelLogoWidth);
				
		
	}).trigger('resize');
	
	$('a[rel="photo1"]').colorbox({
		width:'100%',
		maxHeight:$(window).height(),
		speed:'500', 
		onLoad:function(){ 
			if ( $(window).width() < 500 ) $.colorbox.remove();
		},
		onOpen:function(){ 			
			if ($('div.touchslider').is('div')) $('div.touchslider').data('touchslider').stop(); 
		},
		onClosed:function(){ 
			if ($('div.touchslider').is('div')) $('div.touchslider').data('touchslider').start(); 
		}		
	});
	
		
	$('span.touchslider-nav-zoom').live('click', function (e) { 
		$slider = $(this).parents('div.touchslider');
		current = parseInt($('span.touchslider-nav-now', $slider).html(), 10) - 1;
		$slider.find( $('a.zoom', 'div.touchslider-item:eq(' + current + ')') ).trigger('click');
	});
	
	$('div.items-slider span.touchslider-nav-item a').click(function (e) { 
		e.preventDefault();	
	});
	itemsSlider();
	
	$('.filters a:not(.normal)').click( function (e) { 
		e.preventDefault();		
		if ( $(this).hasClass('active') ){
			$(this).removeClass('active');
			$('.item-list li.item:hidden').fadeIn(500);				
		} else {
			$(this).parent('.filters').find('a').removeClass('active');
			$(this).addClass('active');
			$('.item-list li.item:not(.' + $(this).data('href') + ')').fadeOut(500);
			$('.item-list li.item.' + $(this).data('href')).fadeIn(500);
			
		}
		var filter = ( $('.filters a.active').size() ) ?  $('.filters a.active').data('href') : '';		
		if (!filter || (filter && !$('.item-list-more-a').data(filter+'-all'))) $('.item-list-more-a').show(); 
		var ids = '';
		$('.item-list li.item').each(function(){ ids += $(this).attr('id')+','; });
		$('.item-list-more-a').data('ids', ids).data('filter', filter).animate({opacity:1}, 1000, function(){
			if ($('.item-list li.item:visible').size()<1) $('.item-list-more-a').trigger('click');
		});		
	});
	

	$('.item-list-more-a').click( function (e) { 
		e.preventDefault();		
		if ( !$(this).hasClass('loading') ){
			var $morebutton = $(this);
			$morebutton.data('offset', $('.item-list li.item:visible').size() );			
			$.ajax({
			  type: 'POST',
			  data: $morebutton.data(),
			  url: $morebutton.data('href'),
			  beforeSend: function(){
				$morebutton.addClass('loading');
			  }, 
			  success: function(data){
				$('ul.item-list').append(data);				
				var loadeditems = $('.item-list li.item:visible').size() - $morebutton.data('offset');
				if ( loadeditems<$morebutton.data('limit') ) {
					if ( $('.filters a.active').is('a') ){
						$morebutton.data($('.filters a.active').data('href') + '-all', true).hide();
						var filterAll = true;
						$('.filters a:not(.normal)').each( function (e) { 
							if ( !$morebutton.data($(this).data('href') + '-all') ) filterAll = false;														
						});
						if ( filterAll ) $morebutton.remove();
						
					} else {
						$morebutton.remove();
					}					
				}				
				$morebutton.removeClass('loading');
				var ids = '';
				$('.item-list li.item').each(function(){ ids += $(this).attr('id')+','; });
				$morebutton.data('ids', ids);
				console.log(ids);
			  }
			});			
		}
	});

	
	$('.description-long').click( function (e) { 
		$('.panel-description .description').toggleClass('long');						
	});
	
	$('select.order-type', '.order-form').change(function (e) { 
		$form = $(this).parents('.order-form');
		$('.hide', $form).slideUp();		
		orderTypeVal = $(this).find('option:selected').val();
		if (orderTypeVal) $('.' + orderTypeVal, $form).slideDown();				
	}).trigger('change');	
	
	$('.otzyvy-show span').live('click', function (e) { 
		$otzyv = $(this).parents('.otzyvy-item');
		$otzyv.find('.otzyvy-text2').toggleClass('show');
	});
	
	$('.otzyvy-rating-link').live('click', function (e) { 
		$otzyv = $(this).parents('.otzyvy-item');
		$val = $otzyv.find('.' + $(this).attr('for') + '-val');
		$val.html( parseInt($val.html(), 10)+1 );
	});
		
	$('.vopros-item').live('click', function (e) { 
		$(this).find('.vopros-text2').slideToggle(200);
	});
	
	$('.sovety-item').live('click', function (e) { 		
		if (e.target.className != 'sovety-title') {
			document.location.href = $(this).find('.sovety-title').attr('href');
		}
	});
	
	$('a[rel="colorbox"]').colorbox();
	
	$('.filters.vnalichii a').each( function () { 		
		if ( document.location.href.indexOf($(this).data('href'))>0 ){
			$(this).trigger('click');
			$('.item-list-more-a').trigger('click');
		} 
	});
		
	$('a.zoom', 'div.touchslider-item').click(function(e){
		if ( $(window).width() < 500 ) e.preventDefault();
	});
	
	$('.gn-index img').click(function(e){
		if ( $(window).width() > 500 ) document.location.href = $(this).parents('.gn-index').find('a').attr('href');
	});		
	
	
});






