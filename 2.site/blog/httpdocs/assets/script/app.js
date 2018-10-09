"use strict";
/* ---------------------------------------------------
	プラグイン用
 ----------------------------------------------------- */
window.$ = window.jQuery = jQuery;

/* ---------------------------------------------------
	共通用
 ----------------------------------------------------- */
$(function(){
	//共通変数
	const win = $(window),
		html = $('html'),
		body = $('body'),
		container = $('#container'),
		header = $('#header'),
		g_navi = $('#gnavi'),
		main = $('#main'),
		conts = $('#conts'),
		footer = $('#footer'),
		url = location.pathname;

	//デバイス取得
	let get_device = function(){
		var ua = navigator.userAgent;
		if(ua.indexOf('iPhone') > 0 || ua.indexOf('iPod') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0){
			return 'sp';
		}else if(ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0){
			return 'tab';
		}else{
			return 'other';
		}
	};

	//呼び込み時
	let init = function(){
		//デバイスチェック
		if (get_device() === 'other') {
			html.addClass('pc_device');
		}
	}();

	//アクションイベント
	let action_ev = function(){
		let page_move = function(){
			$('a[href^="#"]').off('click.pagemove');
			$('a[href^="#"]').not('[target="_blank"]').on('click.pagemove', function() {
				var speed = 750,
					href= $(this).attr('href'),
					target = $(href == "#" || href == "" ? 'html' : href),
					position = target.offset().top;

				$('html, body').animate({scrollTop: position}, speed, 'swing');
				return false;
			});
		};

		//ページTOPボタン
		(function(){
			page_move();
		})();

		//メニューボタン
		(function(){
			var menu_btn = $('#js-menu__btn'),
				menu_navi = $('#js-menu_navi'),
				menu_after = $('#js-navi_after'),

				menu_class = 'is-menu_open',

				first_scol_top,

				close_ev = function(target) {
					container.removeClass(menu_class).css('top', '');
					$('html,body').scrollTop(first_scol_top);
				};

			menu_btn.on('click', function() {
				var scol_top = win.scrollTop();

				if (container.hasClass(menu_class)) {
					close_ev($(this));
				} else {
					container.addClass(menu_class).css('top', -scol_top);
					first_scol_top = scol_top;
				}
			});

			menu_after.on('click', function() {
				close_ev(menu_btn);
			});
		})();

		//divでtableを囲う
		(function(){
			let detail_main = $('.p-detail__body'),
				table = detail_main.find('table'),
				tag = '<div class="scroll"></div>';

			table.each(function() {
				$(this).wrap(tag);
			});
		})();

		//目次開閉と作成
		(function(){
			const
				pagenaviTable = $('#js-pagenaviTable'),
				detailBody    = $('#js-detailBody'),
				pagenavi      = $('#js-pagenavi'),

				headline      = detailBody.find('h2'),

				pagenavi_ev   = function(){
					let tableTtl   = $('#js-tableTtl'),
						open_class = 'is-open';

					tableTtl.on('click', function(event) {
						event.preventDefault();

						if ($(this).hasClass(open_class)) {
							$(this).removeClass(open_class);
						} else {
							$(this).addClass(open_class);
						}
					});
				};

			if (headline.length === 0) {
				pagenaviTable.hide();
			} else {
				headline.each(function(i, el) {
					let text = $(this).text(),
						list = '<li class="p-detail__pagenavi--list"><a href="#headline' + i +'">'+text+'</a></li>';

					$(this).attr('id', 'headline' + i);
					pagenavi.append(list);
				});

				setTimeout(function(){
					page_move();
					pagenavi_ev();
				}, 500);
			}
		})();

		//AOS
		AOS.init({
			disable : 'mobile',
		});
	}();
});
