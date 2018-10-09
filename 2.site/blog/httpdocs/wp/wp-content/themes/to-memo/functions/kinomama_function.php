<?php
/**********************************************************************************
 * ■拡張設定ファイル
 **********************************************************************************/
//////////////////////////////////////////////////////////////////////////////////
////共通
//////////////////////////////////////////////////////////////////////////////////

//画像情報
function get_img_data($w, $h, $type) {
	$html = '';

	//img
	$thum_id = get_post_thumbnail_id();
	$thum    = wp_get_attachment_image_src($thum_id, $type);

	$html .= '<img src="'.$thum[0].'" width="'.$w.'" height="'.$h.'" alt="" itemprop="thumbnailUrl">';
	$html .= '<meta itemprop="url" content="'.$thum[0].'">';
	$html .= '<meta itemprop="width" content="'.$thum[1].'">';
	$html .= '<meta itemprop="height" content="'.$thum[2].'">';

	return $html;
}

//アカウント情報
function get_account_data($post) {
	$html = '';

	$anc_id   = $post->post_author;
	$anc      = get_users($anc_id);
	$anc_name = $anc[0]->user_nicename;

	$html .= '<div class="u-hide">';
	$html .= '<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">';
	$html .= '<div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">';
	$html .= '<meta itemprop="url" content="'.get_bloginfo('url').'/assets/img/logo.png">';
	$html .= '<meta itemprop="width" content="561">';
	$html .= '<meta itemprop="height" content="100">';
	$html .= '</div>';
	$html .= '<meta itemprop="name" content="my-site">';
	$html .= '</div>';
	$html .= '<div itemprop="author">'.$anc_name.'</div>';
	$html .= '</div>';

	return $html;
}

//検索結果
function get_search_content() {
	$html = '';

	$html .= '<section class="l-search">';
	$html .= '<h2 class="l-subConts__ttl l-search__ttl">記事検索</h2>';
	$html .= '<form role="search" method="get" action="/kinomama/" id="searchform" class="l-search__in">';
	$html .= '<input type="text" name="s" value="'.get_search_query().'" placeholder="検索" class="l-search__text">';
	$html .= '<button type="submit" class="l-search__btn">';
	$html .= '<svg role="img" width="24" height="24" class="l-search__btn--img">';
	$html .= '<title>検索する</title>';
	$html .= '<use xlink:href="/assets/img/sprite.min.svg#search">';
	$html .= '</svg>';
	$html .= '</button>';
	$html .= '</form>';
	$html .= '</section>';

	return $html;
}

//////////////////////////////////////////////////////////////////////////////////
////ヘッダーのカテゴリ
//////////////////////////////////////////////////////////////////////////////////
function create_header_navi(){
	$cates = get_terms('cate');
	$html = '';

	if ($cates) {
		$html .= '<div class="l-gnavi__in"><div class="l-gnavi__frame">';
		$html .= '<ul class="l-gnavi__naviList" itemscope itemtype="https://schema.org/SiteNavigationElement">';

		foreach ($cates as $cate) {
			$id     = $cate->term_id;
			$name   = $cate->name;
			$url    = get_category_link($id);
			$parent = $cate->parent;

			//親要素がなかったら
			if ($parent === 0) {
				$html .= '<li class="l-gnavi__naviList--list">';
				$html .= '<a href="'.$url.'" class="l-gnavi__naviList--anc" itemprop="url">';
				$html .= '<span itemprop="name">'.$name.'</span>';
				$html .= '</a></li>';
			}
		}

		$html .= '<li class="l-gnavi__naviList--list">';
		$html .= '<a href="/" target="_blank" class="l-gnavi__naviList--anc" itemprop="url">';
		$html .= '<span itemprop="name">WEB</span></a></li>';

		$html .= '</ul></div></div>';
	}

	echo $html;
}

//////////////////////////////////////////////////////////////////////////////////
////サイドバー
//////////////////////////////////////////////////////////////////////////////////

// 新着一覧
function create_side_news(){
	$html      = '';
	$args      = array(
		'post_type' => 'kinomama',
		'posts_per_page' => 5,
	);
	$the_query = new WP_Query($args);

	if ($the_query->have_posts()) {
		while($the_query->have_posts()): $the_query->the_post();
			$id   = get_the_ID();
			$post = get_post($id);

			$html .= '<article class="l-newsList" itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">';
			$html .= '<a href="'.get_the_permalink().'" class="l-newsList__anc" itemprop="url">';
			//img
			$html .= '<div class="l-newsList__img" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">';
			$html .= get_img_data(80, 80, 'thumbnail');
			$html .= '</div>';

			$html .= '<div class="l-newsList__box">';
			$html .= '<h3 class="l-newsList__ttl" itemprop="headline">'.get_the_title().'</h3>';
			$html .= '<p class="l-newsList__time" itemprop="datePublished"><time datetime="'.get_the_time('Y-m-d').'">'.get_the_time('Y.m.d').'</time></p>';
			$html .= '</div>';

			//アカウント
			$html .= get_account_data($post);

			$html .= '</a>';
			$html .= '</article>';

		endwhile;
	}

	echo $html;
}

// カテゴリー
function create_side_category(){
	$cates = get_terms('cate');
	$html = '';

	if ($cates) {
		$html .= '<section class="l-category">';
		$html .= '<h2 class="l-subConts__ttl">カテゴリ</h2>';
		$html .= '<ul class="l-cateList">';

		foreach ($cates as $cate) {
			$id = $cate->term_id;
			$name = $cate->name;
			$url = get_category_link($id);

			$html .= '<li class="l-cateList__list">';
			$html .= '<a href="'.$url.'" class="l-cateList__anc">'.$name.'</a>';
			$html .= '</li>';
		}

		$html .= '</ul>';
		$html .= '</section>';
	}

	echo $html;
}

//////////////////////////////////////////////////////////////////////////////////
////一覧ページ
//////////////////////////////////////////////////////////////////////////////////

// 新着一覧
function create_list_news(){
	$paged = get_query_var('paged') ? get_query_var('paged') : 1;
	$args  = array(
		'post_type'      => 'kinomama',
		'posts_per_page' => 10,
		'paged'          => $paged,
	);

	if (is_tax('cate')) {
		$term = get_current_term();
		$slug = $term->slug;

		$add_args = array(
			'tax_query' => array(
				array(
					'taxonomy' => 'cate',
					'field'    => 'slug',
					'terms'    => $slug,
				),
			),
		);

		$args = array_merge($args, $add_args);
	} elseif(is_search()) {
		$search_val = get_search_query();
		$args = array_merge($args, array('s' => $search_val));
	}

	//検索ワードが空の時
	if (isset($search_val) && empty($search_val)) {
		echo '<p>検索キーワードが「空」です。<br>キーワードを入力し、再度検索してください。</p>';
	}

	$the_query = new WP_Query($args);
	$num       = 0;

	if ($the_query->have_posts()) {
		while($the_query->have_posts()): $the_query->the_post();
			$id   = get_the_ID();
			$post = get_post($id);

			if ($num === 0) {
				echo cureate_first_list($post);
			} else {
				echo cureate_basic_list($post);
			}

			++$num;
		endwhile;

		//ページャー
		cureate_pager($the_query, 'kinomama');
	} else {
		$html = '<div class="c-box02">'.get_search_content().'</div>';
		$html .= '<p>「'.$search_val.'」を含む投稿はございません。<br>検索条件を変更し検索してください。</p>';

		echo $html;
	}
}

// 新着一覧 - first
function cureate_first_list($post) {
	$html = '';

	//img
	$thum_id = get_post_thumbnail_id();
	$thum    = wp_get_attachment_image_src($thum_id, 'detail_img');

	//category
	$cate      = get_the_terms($id, 'cate');
	$cate_name = $cate[0]->name;

	//text
	$content = get_the_content();
	$content = wp_strip_all_tags( $content );
	$content = mb_strimwidth($content, 0, 120, "...");

	$html .= '<article class="p-firstList" itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">';
	$html .= '<a href="'.get_the_permalink().'" class="p-firstList__anc" itemprop="url">';
	//img
	$html .= '<div class="p-firstList__img" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">';
	$html .= get_img_data(800, 530, 'detail_img');
	$html .= '</div>';

	$html .= '<div class="p-firstList__detail">';
	$html .= '<h2 class="p-firstList__ttl" itemprop="headline">'.get_the_title().'</h2>';
	$html .= '<div class="p-firstList__head">';
	$html .= '<p class="p-firstList__time" itemprop="datePublished"><time datetime="'.get_the_time('Y-m-d').'">'.get_the_time('Y.m.d').'</time></p>';
	if (!is_tax('cate')) {
		$html .= '<div class="p-firstList__cate" itemprop="articleSection">'.$cate_name.'</div>';
	}
	$html .= '</div>';
	$html .= '<div class="p-firstList__txt" itemprop="articleBody"><p>'.$content.'</p></div>';

	//アカウント
	$html .= get_account_data($post);

	$html .= '</div>';

	$html .= '</a>';
	$html .= '</article>';

	return $html;
}

// 新着一覧 - basic
function cureate_basic_list($post) {
	$html = '';

	//img
	$thum_id = get_post_thumbnail_id();
	$thum    = wp_get_attachment_image_src($thum_id, 'list_img');

	//category
	$cate      = get_the_terms($id, 'cate');
	$cate_name = $cate[0]->name;

	//text
	$content = get_the_content();
	$content = wp_strip_all_tags( $content );
	$content = mb_strimwidth($content, 0, 100, "...");

	$html .= '<article class="c-basicList" data-aos="fade-up" itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">';
	$html .= '<a href="'.get_the_permalink().'" class="c-basicList__anc" itemprop="url">';
	//img
	$html .= '<div class="c-basicList__img" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">';
	$html .= get_img_data(300, 200, 'list_img');
	$html .= '</div>';

	$html .= '<div class="c-basicList__detail">';
	$html .= '<h2 class="c-basicList__ttl" itemprop="headline">'.get_the_title().'</h2>';
	$html .= '<div class="c-basicList__head">';
	$html .= '<p class="c-basicList__time" itemprop="datePublished"><time datetime="'.get_the_time('Y-m-d').'">'.get_the_time('Y.m.d').'</time></p>';
	if (!is_tax('cate')) {
		$html .= '<div class="c-basicList__cate" itemprop="articleSection">'.$cate_name.'</div>';
	}
	$html .= '</div>';
	$html .= '<div class="c-basicList__txt" itemprop="articleBody"><p>'.$content.'</p></div>';

	//アカウント
	$html .= get_account_data($post);

	$html .= '</div>';

	$html .= '</a>';
	$html .= '</article>';

	return $html;
}

/**
* ページネーションHTML出力
*
* $limit      ページあたりの表示上限数
* $post_typed 投稿タイプのスラッグ
*/
function cureate_pager($query, $post_typed = 'posts') {
    global $wp_rewrite;
    global $paged;

    // 検索条件
	$paginate_base = get_pagenum_link();

	if( strpos( $paginate_base, '?' ) || !$wp_rewrite->using_permalinks() ) {
		$paginate_format = '';
		$paginate_base = add_query_arg( 'paged', '%#%' );
	} else {
		$paginate_format = (substr( $paginate_base, -1, 1 ) == '/' ? '' : '/') . user_trailingslashit('page/%#%/','paged');
		$paginate_base .= '%_%';
	}

	if( $paged < 2 ) {
		$paged = 1;
	}

	$total = $query->max_num_pages;
	$args = array(
		'base'      => $paginate_base,
		'format'    => $paginate_format,
		'total'     => $total,
		'current'   => $paged,
		'show_all'  => false,
		'prev_next' => true,
		'prev_text' => '&laquo;',
		'next_text' => '&raquo;',
		'type'      => 'array',
	);

	$pagenate_array = paginate_links($args);

	// 配列がある場合のみ
	if (is_array($pagenate_array) == TRUE) {
		$pagenate .= '<div class="wp-pagenavi">';
		foreach ($pagenate_array as $key => $value) {

			if (preg_match('/current/', $value) == TRUE) {
				$class = '';
			}
			else {
				$class = '';
			}

			// $value = "<span class=\"{$class}\">".$value.'</span>';
			// リンク追加
			$pagenate .= $value;
		}

		$pagenate .= '</div>';
		echo $pagenate;
	}
}

//////////////////////////////////////////////////////////////////////////////////
////詳細ページ
//////////////////////////////////////////////////////////////////////////////////

// SNS
function cureate_sns_list($id, $add=false) {
	$class_name = '';
	$ttl        = get_the_title($id);
	$url        = get_the_permalink($id);

	if ($add) {
		$class_name = ' '.$add;
	}

	$html = '';

	$html .= '<ul class="p-detail__sns'.$class_name.'">';

	$html .= '<li class="p-detail__sns--list">';
	$html .= '<a href="https://twitter.com/share?url='.$url.'&text='.$ttl.'" target="_blank" class="p-detail__sns--anc is-tw">';
	$html .= '<span class="p-detail__sns--txt">';
	$html .= '<svg role="img" width="12" height="10" class="p-detail__sns--icon">';
	$html .= '<use xlink:href="/assets/img/sprite.min.svg#twitterIcon">';
	$html .= '</svg>';
	$html .= 'twiiter';
	$html .= '</span>';
	$html .= '</a>';
	$html .= '</li>';

	//
	$html .= '<li class="p-detail__sns--list">';
	$html .= '<a href="https://www.facebook.com/sharer/sharer.php?u='.$url.'" target="_blank" class="p-detail__sns--anc is-fb">';
	$html .= '<span class="p-detail__sns--txt">';
	$html .= '<svg role="img" width="12" height="10" class="p-detail__sns--icon">';
	$html .= '<use xlink:href="/assets/img/sprite.min.svg#facebookIcon2">';
	$html .= '</svg>';
	$html .= 'facebook';
	$html .= '</span>';
	$html .= '</a>';
	$html .= '</li>';

	$html .= '<li class="p-detail__sns--list">';
	$html .= '<a href="http://b.hatena.ne.jp/entry/'.$url.'" target="_blank" class="p-detail__sns--anc is-ha">';
	$html .= '<span class="p-detail__sns--txt">';
	$html .= '<svg role="img" width="12" height="10" class="p-detail__sns--icon">';
	$html .= '<use xlink:href="/assets/img/sprite.min.svg#hatenaIcon2">';
	$html .= '</svg>';
	$html .= 'Hatena';
	$html .= '</span>';
	$html .= '</a>';
	$html .= '</li>';
	$html .= '</ul>';

	echo $html;
}
