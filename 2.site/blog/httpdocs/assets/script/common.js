"use strict";

require('./app.js');

const
 list         = $('#js-articleList'),
 max_post     = list.attr('data-max-post'),
 domain       = window.location.protocol + '//' + window.location.host,
 path         = location.href,
 list_num     = 6,

 //getデータを取得し配列化
 get_param    = function(){
	if (1 < document.location.search.length) {
		// 最初の1文字 (?記号) を除いた文字列を取得する
		let query = document.location.search.substring(1);

		// クエリの区切り記号 (&) で文字列を配列に分割する
		let parameters = query.split('&');

		let result = new Object();
		for (let i = 0; i < parameters.length; i++) {
			// パラメータ名とパラメータ値に分割する
			let element = parameters[i].split('=');

			let paramName = decodeURIComponent(element[0]);
			let paramValue = decodeURIComponent(element[1]);

			// パラメータ名をキーとして連想配列に追加する
			result[paramName] = decodeURIComponent(paramValue);
		}
		return result;
	}
 },
 //AOSイベントをリセット、再実行
 aos_refresh  = function(){
	AOS.refresh();
	AOS.init({
		disable : 'mobile',
	});
 },
 //初期読み込み（?pagesによって変更）
 initial_load = function(){
	if (get !== undefined && get.pages && path.indexOf('?pages=') > -1) {
		let page = Number(get.pages),

			time  = 1500,
			speed = 0;

		for (let i = 0; i < page; i++) {
			(function(local){
				if (local !== 0) { speed = time * local };

				setTimeout(function(){
					ajax_start();
				}, speed);
			})(i);
		}
	} else 	{
		ajax_start();
	}
 },
 //ajaxを呼び出しを開始
 ajax_start   = function(){
	let
	 start     = list.attr('data-start-num'),
 	 stop      = list.attr('data-stop-num'),
 	 show      = list.attr('data-show-num'),
	 end       = list.attr('data-load-end'),
	 cate      = list.attr('data-cate-id'),
	 start_num = Number(start),
	 stop_num  = Number(stop),
	 show_num  = Number(show),
	 listbox   = $('#listBox' + show);

 	if (end === 'false' && !listbox.lenght) {
 		ajax_load(start_num, stop_num, show_num, cate);
 	}
 },
 //ajax呼び込み
 ajax_load    = function(start, stop, show, cate){
 	let
 	 set_start  = start - 1,
 	 set_stop   = stop,
 	 next_start = stop + 1,
 	 next_stop  = stop + list_num,
	 next_show  = show + 1,
	 cate_id,
	 data_num,
	 html;

	//読み込み時であればshow_numは「1」
	if (show > 1) {
		//新しい記事を読んだら「#」をつける
		if (path.indexOf('?s=') > -1) {
			let get_repath = repath + '?s=' + get.s;
			window.history.pushState(null, null, get_repath + '&pages=' + show);
		} else {
			window.history.pushState(null, null, repath + '?pages=' + show);
		}
	} else {
		//カテゴリIDがあるとき
		if (cate) {
			cate_id = Number(cate);
			json_url = json_url + '&categories=' + cate_id;
		}

		//検索キーワードがあるとき
		if (get !== undefined && get.s && path.indexOf('?s=') > -1) {
			json_url = json_url + '&search=' + get.s;
		}
	}

 	$.ajax({
 		url: json_url,
 		type: 'GET',
 		dataType: 'json',
 	})
 	.done(function(response) {
		data_num = response.length;

 		//maxを超えたとき
 		if(set_stop >= data_num) {
 			set_stop = data_num;
 			list.attr('data-load-end', true);
		}

 		//data属性をセット
 		list.attr({
 			'data-max'      : data_num,
 			'data-start-num': next_start,
 			'data-stop-num' : next_stop,
 			'data-show-num' : next_show,
		});

		//リストが0の場合
		if(data_num === 0){
			// list.remove();
			$('#conts').append('<div class="c-box01"><p>「'+get.s+'」を含む投稿はございません。<br>検索条件を変更し検索してください。</p></div>');
			return false;
		} else {
			//ループして表示
			html = '';
			for (let i = set_start; i < set_stop; i++) {
				const data = response[i];
				html += article_list(data);
			}
			//書き出し
			list.append('<div id="listBox'+show+'" class="p-listBox"></div>');
			$('#listBox'+show).append(html);
			aos_refresh();
		}

		//?pagesがある場合
		if (get !== undefined && show === Number(get.pages)) {
			let position = $('#listBox' + show).offset().top;

			$('html, body').animate({scrollTop: position}, 400, 'swing');
		}
 	})
 	.fail(function() {
 	})
 	.always(function() {
 		// console.log("complete");
 		ajax = true;
 	});
 },
 //日付取得
 get_date     = function(data){
 	let date      = [],
 		post_date = new Date(data),
 		year      = post_date.getFullYear(),
 		month     = post_date.getMonth() + 1,
 		day       = post_date.getDate(),
 		y         = ('0000' + year).slice(-4),
 		m         = ('00' + month).slice(-2),
		d         = ('00' + day).slice(-2);

 	date[1] = y + '-' + m + '-' + d;
 	date[2] = y + '/' + m + '/' + d;

 	return date;
 },
 //リスト用
 article_list = function(data){
 	let html  = '',
 		title = data.title['rendered'],
 		img   = data.postimg[0],
 		link  = data.link,
 		cate  = data.category_name,
 		date  = get_date(data.date),
 		text  = data.fields['simple_text'],
 		user  = data.user;

 	html = '<article class="p-article" data-aos="fade-up" itemprop="blogPost" itemscope="" itemtype="http://schema.org/BlogPosting">' +
 		'<a itemprop="url" href="'+link+'" title="'+title+'" class="p-article__anc">' +
 			'<div class="p-article__img" itemprop="image" itemscope="" itemtype="https://schema.org/ImageObject">' +
 				'<img src="'+img+'" width="300" height="200" alt="" itemprop="thumbnailUrl">' +
 				'<meta itemprop="url" content=""><meta itemprop="width" content="300"><meta itemprop="height" content="200">' +
 			'</div>' +
 			'<div class="p-article__detail">' +
 				'<div class="p-article__head">' +
 					'<time itemprop="datePublished" datetime="'+date[1]+'" class="p-article__time">'+date[2]+'</time>' +
 					'<span itemprop="articleSection" class="p-article__cate">'+cate+'</span>' +
 				'</div>' +
 					'<h2 class="p-article__ttl"><span itemprop="headline" class="p-article__ttl--in">'+title+'</span></h2>' +
 					'<div itemprop="articleBody" class="p-article__box"><p class="p-article__box--txt">'+text+'</p></div>' +
 				'<div class="u-hide">' +
 					'<div itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization">' +
 						'<div itemprop="logo" itemscope="" itemtype="https://schema.org/ImageObject">' +
 							'<meta itemprop="url" content="'+ domain +'/assets/img/logo.png">' +
 							'<meta itemprop="width" content="561"><meta itemprop="height" content="100">' +
 						'</div>' +
 						'<meta itemprop="name" content="my-site">' +
 					'</div>' +
 					'<div itemprop="author">'+user+'</div>' +
 				'</div>' +
 			'</div>' +
 			'<span class="p-article__arrow"></span>' +
 		'</a>' +
 	'</article>';
 	return html;
 },
 //スクロールイベント
 scrol_ajax   = function(scrl_top){
	if (list.length === 0) {
		return false;
	}

	let show_num  = Number(list.attr('data-show-num')),
		show      = show_num - 1,
		listbox   = $('#listBox' + show),
		listbox_y = listbox.offset().top,
		listbox_h = listbox.outerHeight(true),

		pos       = listbox_y + listbox_h / 4;

	//スクロール量とイベント位置を判定
	if (scrl_top > pos && ajax) {
		ajax = false;
		ajax_start();
	}
 },
 //スクロールによるparameterの変更
 scrol_param  = function(scrl_top){
	let linkbox     = $('.p-listBox'),
		tops        = [];

	get = get_param();

	//位置を設定
	for (let i = 0; i < linkbox.length; i++) {
		let num    = i + 1,
			list   = $('#listBox' + num),
			list_h = list.outerHeight(true),
			list_t = list.offset().top,
			list_b = list_t + list_h;

		tops[i] = [list_t, list_b];
	}

	//スクロール位置を取得
	for (let i = 0; i < tops.length; i++) {
		let num    = i + 1,
			top    = tops[i][0],
			bottom = tops[i][1];

		if(top <= scrl_top && bottom >= scrl_top) {
			//新しい記事を読んだら「#」をつける
			if (path.indexOf('?s=') > -1) {
				let get_repath = repath + '?s=' + get.s;
				window.history.pushState(null, null, get_repath + '&pages=' + num);
			} else {
				window.history.pushState(null, null, repath + '?pages=' + num);
			}
			return false;
		}
	}
 };

let get      = {},
	ajax     = true,
	repath   = domain + location.pathname,
	json_url = domain + '/wp-json/wp/v2/posts?per_page='+max_post;

$(function(){
	//共通変数
	const
	 win       = $(window),
	 html      = $('html'),
	 body      = $('body'),
	 container = $('#container'),
	 header    = $('#header'),
	 g_navi    = $('#gnavi'),
	 main      = $('#main'),
	 conts     = $('#conts'),
	 footer    = $('#footer'),
	 url       = location.pathname;

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

	//一覧のレイアウト変更
	(function(){
		let layout_btn = $('.js-layout_btn'),
			card_class = 'is-layout_card',
			list_calss = 'is-layout_list',
			actice_class = 'is-active';

		layout_btn.on('click', function() {
			let _self = $(this);

			scrl_top = win.scrollTop();

			if (_self.hasClass(actice_class)) {
				return false;
			}

			layout_btn.removeClass(actice_class);
			_self.addClass(actice_class);

			if (conts.hasClass(list_calss)) {
				conts.removeClass(list_calss).addClass(card_class);
			} else {
				conts.removeClass(card_class).addClass(list_calss);
			}

			scrol_ajax(scrl_top);
			aos_refresh();
		});
	})();

	//ajax
	get = get_param();
	initial_load();
});

let timer = false;
$(window).on('scroll', function(){
	let scrl_top = $(this).scrollTop();

	scrol_ajax(scrl_top);

	if( timer !== false ){
		clearTimeout( timer );
	}

	timer = setTimeout( function(){
		let stop_scrl = scrl_top;

		scrol_param(stop_scrl);
	}, 200 );
});
