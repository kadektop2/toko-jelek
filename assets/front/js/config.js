;(function( $ ) {

	"use strict";

	$(document).ready(function(){
		$('.zui.menu-nav').zui_Menu({
			animation: 'slide-inverse',
			animationSpeed: 250,
			mobile: 960,
			mobileText: '<i class="the-mobile-handle-icon fa fa-navicon"></i>',
			submenuPointerForwardText: '<i class="the-submenu-pointer-icon fa fa-chevron-right"></i>',
			submenuPointerBackText: '<i class="the-submenu-pointer-icon fa fa-chevron-left"></i>',
			submenuMarkText: '<i class="fa fa-angle-down"></i>',
		});
		$('.demo-icon').each(function(){
			var title = $(this).attr('class').replace('demo-icon', '');
			$(this).attr('title', title);
		});

		$('.demo-grid-col').each(function(){
			var classname = $(this).parent().attr('class');
			$(this).html('<span>'+ classname +'</span>');
		});

		/*
		-------------------------------------------------------------------------------
		Form nice selector
		-------------------------------------------------------------------------------
		*/
		$('.form-nice-selector').each(function(){
			var _t = $(this);
			var spans = _t.children('span');
			var input = _t.children('input');

			/* Action on option select
			-------------------------------*/
			spans.on('click', function(){
				var value = $(this).data('value');
				spans.removeClass('active');
				$(this).addClass('active');
				input.val( value ).change();
			});

			/* Prepare spans
			---------------------------*/
			$.each(spans, function(){
				if($(this).hasClass('active')){
					input.val( $(this).data('value') ).change();
				}
				
				// If has color option, show it
				var color = $(this).data('color');
				if( color ){
					color = (color.toString().indexOf('#') > -1) ? color : '#'+color;
					$(this).prepend('<div class="color-box" style="background-color: '+ color +'"></div>');
				}

				//If has image option, show it
				var img = $(this).data('img');
				if( img ){
					$(this).prepend('<div class="img-box"><img src="'+ img +'" alt="" /></div>');
				}
			});
		});

		/*
		-------------------------------------------------------------------------------
		Advanced search expand
		-------------------------------------------------------------------------------
		*/
		$('.advanced-search-link').on('click', function( event ){
			event.preventDefault();
			var _this = $(this),
			_form = _this.parents('form'),
			_expand = _form.find('.big-search-buttons.for-advanced');

			if( _expand.hasClass('expanded') ){
				_this.find('.the-icon').removeClass('fa-minus').addClass('fa-plus');
				_expand.slideUp(200).removeClass('expanded');
			}
			else{
				_this.find('.the-icon').removeClass('fa-plus').addClass('fa-minus');
				_expand.slideDown(200).addClass('expanded');
			}
		});

	});

}( jQuery ));