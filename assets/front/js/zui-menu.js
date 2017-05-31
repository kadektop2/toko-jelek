;(function( $ ) {

	"use strict";

	$.fn.zui_Menu = function( options ) {
		
		/* Bind each element
		------------------------------------------------*/
		if (this.length > 1){
			this.each(function() { 
				$(this).zui_Menu( options );
			});
			return this;
		}
		
		/* Defaults
		------------------------------------------------*/
		var opt = $.extend({
			mobile:  768,
			mobileText: 'MENU',
			submenuPointerForwardText: '&gt;',
			submenuPointerBackText: '&lt;',
			submenuMarkText: '+',
			hoverSpeed: 500,
			responsive: true,
			animation: false,  //fade|slide|slide-inverse|flip|zoom|false
			animationSpeed: 500,
			submenuAlign: false, //default subemnu alignment center|right|false(left)
		}, options );

		/* This object
		------------------------------------------------*/
		var obj = this;

		/* Variables
		------------------------------------------------*/
		var isResponsive = false,
		    hoverIntentTimer;

		/* Utilities
		------------------------------------------------*/
		var util = {

			// Check if the value is set
			isset: function( str ){
				return typeof str != 'undefined' ? true : false;
			},

			// If is set use data, else set it
			setData: function( option, data_attr ){
				return util.isset( obj.data(data_attr) ) ? obj.data(data_attr) : option;
			},

		};

		/* Search for data-* attr and replace defaults if exists
		------------------------------------------------*/
		opt.mobile = util.setData( opt.mobile, 'mobile');
	
		/* "Constructor"
		------------------------------------------------*/
		var init = function() {
			obj.prepareMenu();
			obj.outerClick();
			obj.makeItResponsive();
			obj.onWindowResize();
			obj.activateMenuOnClick();
			obj.submenuPointer();
			obj.menuHover();
			obj.markSubMenus();
			obj.alignLevel1();
		};

		/* Display(show or hide) the submenu
		------------------------------------------------*/
		this.displaySubmenu = function( elem, show_or_hide ){
			if( show_or_hide === 'remove' ){
				if( opt.animation ){
					elem.removeClass( 'zui-submenu-'+ opt.animation +'-show' )
					.removeClass('zui-submenu-'+ opt.animation +'-hide');
					elem.parent().removeClass('hovered');

				}
				else{
					elem.css({
						'display': 'block'
					});
				}
			}
			else if( show_or_hide === 'show' ){
				if( opt.animation ){
					elem.addClass( 'zui-submenu-'+ opt.animation +'-show' )
					.removeClass('zui-submenu-'+ opt.animation +'-hide');
					elem.parent().addClass('hovered');

				}
				else{
					elem.css({
						'display': 'block'
					});
				}
			}
			else{
				if( opt.animation ){
					elem.removeClass( 'zui-submenu-'+ opt.animation +'-show' )
					.addClass('zui-submenu-'+ opt.animation +'-hide');
					elem.parent().removeClass('hovered');
				}
				else{
					elem.css({
						'display': 'none'
					});
				}
			}
		};

		/* Prepare menu for JS
		------------------------------------------------*/
		this.prepareMenu = function(){
			var submenus = obj.find('.submenu');

			obj.addClass('has-js');
			obj.displaySubmenu( submenus, 'hide' );

			if( opt.animation ){
				submenus.css({
					'display': 'block',
				});
			}

			// setInterval(function(){
			// 	console.log(isResponsive);
			// }, 200);
		};

		/* Horizontal align of level 1 submenus
		------------------------------------------------*/
		this.alignLevel1 = function(){
			var li_with_subs = obj.find('.menu > li').not('.mega, .inline, .extra').has('.submenu');
			
				li_with_subs.each(function(){
					var _this = $(this),
					    this_sub = _this.children('.submenu'),
					    position = _this.position(),
					    li_width = _this.outerWidth(),
					    sub_width = this_sub.outerWidth(),
					    pos_left = position.left,
					    pos_center = li_width/2 + pos_left,
					    pos_right = li_width + pos_left;

					if( ! isResponsive ){
						// Center align	
						if( this_sub.hasClass('center') || opt.submenuAlign === 'center' ){
							this_sub.css({
								'left': ( pos_center - sub_width / 2 ) + 'px'
							}).removeClass('right').addClass('center');
						}
						// Right align	
						else if( this_sub.hasClass('right') || opt.submenuAlign === 'right' ){
							this_sub.css({
								'left': ( pos_left - sub_width ) + li_width + 'px'
							}).removeClass('center').addClass('right');
						}
						// Left align
						else{
							this_sub.css({
								'left': pos_left + 'px'
							});
						}
					}
					else{
						this_sub.css({
							'left': 'auto'
						});
					}

				});
		};

		/* Mark all list items that has a submenu
		------------------------------------------------*/
		this.markSubMenus = function(){
			if( opt.submenuMarkText ){
				obj.find('.submenu').parent().not('.do-not-mark').children('a').append( ' <span class="submenu-mark">'+  opt.submenuMarkText +'</span>' );
			}
		};

		/* When user hover the menu item
		------------------------------------------------*/
		this.menuHover = function(){
			if( ! isResponsive ){

				// Level 1 submenu
				var lev1_li = $(obj).children('.menu').children('li');
				$( lev1_li ).on({
					'mouseover': function () {
						clearTimeout(hoverIntentTimer);

						// One time animation speed set
						obj.find('.submenu').css({
							'animation-duration': opt.animationSpeed +'ms'
						});

						// Display the submenu of this li
						obj.displaySubmenu( lev1_li.not(this).find('.submenu'), 'hide' );
						obj.displaySubmenu( $(this).children('.submenu'), 'show' );
					},
					'mouseout' : function () {
						clearTimeout(hoverIntentTimer);
						var the_submenu = $(this).find('.submenu'); // This will close all submenus from a tree
						hoverIntentTimer = setTimeout(function () {
							obj.displaySubmenu( the_submenu, 'hide');
						}, opt.hoverSpeed );
					}
				});

				// Level 2+ submenu
				$( $(obj).children('.menu').find('.submenu > li') ).on({
					'mouseover': function () {
						clearTimeout(hoverIntentTimer);
						obj.displaySubmenu( $(this).parent().children('li').not(this).children('.submenu'), 'hide' );
						obj.displaySubmenu( $(this).children('.submenu'), 'show' );
						
					},
					'mouseout' : function () {
						clearTimeout(hoverIntentTimer);
						var the_submenu = $(this).children('.submenu');
						hoverIntentTimer = setTimeout(function () {
							obj.displaySubmenu( the_submenu, 'hide');
						}, opt.hoverSpeed );
					}
				});

			}
			else{
			}
		};




		/* Add mobile handle
		------------------------------------------------*/
		this.addMobileHandle = function(){
			if( obj.hasClass('mobile') ){
				if( obj.find('.mobile-handle').length < 1 ){
					obj.find('.menu').before('<span class="mobile-handle">'+ opt.mobileText +'</span>');
					obj.find('.mobile-handle').addClass(function(){
						return $(this).next('.menu').attr('class').replace('menu', '');
					});
				}
			}
		};

		/* Show the responsive menu on click. Activate.
		------------------------------------------------*/
		this.activateMenuOnClick = function(){
			obj.on('click', '.mobile-handle', function(event){
		  		event.preventDefault();
				event.stopPropagation();
				var _this = $(this);
				var _this_menu = _this.next(".menu");
				if( _this_menu.hasClass('active-menu') ){
					_this_menu.removeClass('active-menu');
					obj.resetAllSubMenuPointers();
				}
				else{
					_this_menu.addClass('active-menu');
					obj.prepend('<div class="zui menu-shadow"></div>');

					if( _this_menu.children('li').length == 1 ){

						_this_menu.find('.submenu-pointer').eq(0).each(function(){
							obj.activateSubMenuPointer( this );
						});

					}
				}
				event.stopImmediatePropagation();
			});
		};

		/* Deactivate menu.
		------------------------------------------------*/
		this.deactivateMenu = function(){
			obj.find(".menu").removeClass('active-menu');
			obj.resetAllSubMenuPointers();
			obj.find('.zui.menu-shadow').remove();
		};

		/* Add sub menu pointer
		------------------------------------------------*/
		this.addSubmenuPointer = function(elem){
			var current_li = $(elem);
			if ( current_li.children('.submenu').length > 0 ){
				if ( current_li.children('.submenu-pointer').length < 1 ){
					current_li.append('<span class="submenu-pointer">'+ opt.submenuPointerForwardText +'</span>');
				}
			}
		};

		/* Remove sub menu pointer
		------------------------------------------------*/
		this.removeSubmenuPointer = function(){
			obj.find('.submenu-pointer').remove();
		};

		/* Create sub menu pointer
		------------------------------------------------*/
		this.createSubMenuPointer = function(){
			$( $(this).find('.menu > li') ).each(function(){
				obj.addSubmenuPointer(this);
			});
			$( $(this).find('.menu .submenu > li') ).each(function(){
				obj.addSubmenuPointer(this);
			});
		};

		/* Reset this sub menu pointer
		------------------------------------------------*/
		this.resetSubMenuPointer = function(elem){

			var handle  = $(elem);
			var this_li = handle.parent('li');

			// Show all list items, and not this as well
			this_li.parent('ul').find('li').removeClass('inactive-li active-li');
			this_li.parent('ul').find('.submenu').css('display', 'none');

			// Remove all active handles
			this_li.parent('ul').find('.submenu-pointer').removeClass('active');
			this_li.parent('ul').find('.submenu-pointer').html( opt.submenuPointerForwardText );
		};

		/* Activate this sub menu pointer
		------------------------------------------------*/
		this.activateSubMenuPointer = function(elem){

			var handle  = $(elem);
			var li = handle.parent('li');
			var li_parent = li.parent('ul');
			var same_level_li = li_parent.children('li');
			var submenu_of_li = li.children('.submenu');
			var li_of_submenu = submenu_of_li.children('li');

			handle.html( opt.submenuPointerBackText );

			//Hide other items from the same level
			same_level_li.removeClass('active-li').addClass('inactive-li');
			
			//Show this item
			li.removeClass('inactive-li').addClass('active_li');

			//Show the subemnu of this item
			submenu_of_li.css('display', 'block');

			//Show submenu items of this items
			li_of_submenu.removeClass('inactive-li').addClass('active-li');

			// Make handle active
			handle.addClass('active');

		};

		/* Reset all sub menu pointers
		------------------------------------------------*/
		this.resetAllSubMenuPointers = function(){
			obj.find('.submenu-pointer').removeClass('active').html( opt.submenuPointerForwardText );
			obj.find('li').removeClass('inactive-li active-li');
			obj.find('.submenu').css('display', 'none');
		};


		/* Sub menu pointer
		------------------------------------------------*/
		this.submenuPointer = function(){
			obj.on('click', '.submenu-pointer', function(){
		  		event.preventDefault();
				$(this).hasClass('active') ? obj.resetSubMenuPointer( this ) : obj.activateSubMenuPointer( this );
				event.stopImmediatePropagation();
			});
		};

		/* Build responsive elements
		------------------------------------------------*/
		this.buildResponsive = function(){
			obj.addClass('mobile').removeClass('desktop');
			obj.addMobileHandle();
			obj.createSubMenuPointer();

			var subs = obj.find('.submenu');
			subs.css({
				'display': 'none'
			});

			obj.displaySubmenu( subs, 'remove' );
		};

		/* Destroy responsive elements
		------------------------------------------------*/
		this.destroyResponsive = function(){
			obj.removeClass('mobile').addClass('desktop');
			obj.find('.mobile-handle').remove();
			obj.removeSubmenuPointer();
			obj.deactivateMenu();

			var subs = obj.find('.submenu');
			subs.css({
				'display': 'block'
			});

			obj.displaySubmenu( subs, 'hide' );
		};

		/* Make it responsive
		------------------------------------------------*/
		this.makeItResponsive = function(){
			if( $(window).outerWidth() < opt.mobile ){
				if( opt.responsive ){
					if( ! isResponsive ){
						obj.buildResponsive();
					}
					isResponsive = true;
				}
			}
			else{
				obj.destroyResponsive();
				isResponsive = false;
			}
		};

		/* On Window Resize
		------------------------------------------------*/
		this.onWindowResize = function(){
			$(window).resize(function(){
				obj.makeItResponsive();
				$( obj.find('.menu > li, .menu .submenu > li') ).unbind('mouseover').unbind('mouseout');
				obj.menuHover();
				obj.alignLevel1();
			});
		};

		/* On Window Resize
		------------------------------------------------*/
		this.outerClick = function(){
			obj.on('click', '.zui.menu-shadow', function(){
				obj.deactivateMenu();
				$(this).remove();
			});
		};

		/* "Constructor" init
		------------------------------------------------*/
		init();
		return this;

	};

}( jQuery ));