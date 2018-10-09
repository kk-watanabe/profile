<?php
/**********************************************************************************
 * ■拡張設定ファイル
 **********************************************************************************/
//////////////////////////////////////////////////////////////////////////////////
////自動変換を防ぐ
//////////////////////////////////////////////////////////////////////////////////
add_action('init', function() {
	remove_filter('the_title', 'wptexturize');
	remove_filter('the_content', 'wptexturize');
	remove_filter('the_excerpt', 'wptexturize');
	remove_filter('the_title', 'wpautop');
	remove_filter('the_content', 'wpautop');
	remove_filter('the_excerpt', 'wpautop');
	remove_filter('the_editor_content', 'wp_richedit_pre');
});

add_filter('tiny_mce_before_init', function($init) {
	$init['wpautop'] = false;
	$init['apply_source_formatting'] = ture;
	return $init;
});

//////////////////////////////////////////////////////////////////////////////////
// 投稿者一覧ページの使用設定
//////////////////////////////////////////////////////////////////////////////////
function author_archive_redirect(){
	$anthor = (string) filter_input(INPUT_GET,'author');
	if(!empty($anthor)){
		wp_redirect(home_url('/'));
		exit;
	}
}
add_action('init', 'author_archive_redirect');


//////////////////////////////////////////////////////////////////////////////////
//wp_head()の出力タグの削除
//////////////////////////////////////////////////////////////////////////////////
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

//////////////////////////////////////////////////////////////////////////////////
//json にカスタムフィールド追加
//////////////////////////////////////////////////////////////////////////////////
function wp_rest_api_cf() {
	$params = array(
		'get_callback'    => function($data, $field, $request, $type) {
			if (function_exists('get_fields')) {
				return get_fields($data['id']);
			}
			return [];
		},
		'update_callback' => null,
		'schema'          => null,
	);

	register_rest_field('post', 'fields', $params);
}
add_action( 'rest_api_init', 'wp_rest_api_cf');

//////////////////////////////////////////////////////////////////////////////////
//json にカテゴリ追加
//////////////////////////////////////////////////////////////////////////////////
function register_rest_category_name() {
	//register_rest_field関数を用いget_category_name関数からカテゴリ名を取得し、追加する
	register_rest_field(
		'post',
		'category_name',
		array(
			'get_callback' => 'get_category_name'
		)
	);
}

//$objectは現在の投稿の詳細データが入る
function get_category_name( $object ) {
	$category = get_the_category($object[ 'id' ]);
	$cat_name = $category[0]->cat_name;
	return $cat_name;
}

add_action( 'rest_api_init', 'register_rest_category_name');

//////////////////////////////////////////////////////////////////////////////////
//json 投稿者名
//////////////////////////////////////////////////////////////////////////////////
function register_rest_user_name() {
	//register_rest_field関数を用いget_user_name関数から投稿者名を取得し、追加する
	register_rest_field(
		'post',
		'user',
		array(
			'get_callback' => 'get_user_name'
		)
	);
}

//$objectは現在の投稿の詳細データが入る
function get_user_name( $object ) {
	$anc_id   = $object['post_author'];
	$anc      = get_users($anc_id);
	$anc_name = $anc[0]->user_nicename;

	return $anc_name;
}

add_action( 'rest_api_init', 'register_rest_user_name');

//////////////////////////////////////////////////////////////////////////////////
//json アイキャッチ追加
//////////////////////////////////////////////////////////////////////////////////
function register_rest_postimg_name() {
	//register_rest_field関数を用いget_postimg_name関数から投稿者名を取得し、追加する
	register_rest_field(
		'post',
		'postimg',
		array(
			'get_callback' => 'get_postimg_name'
		)
	);
}

//$objectは現在の投稿の詳細データが入る
function get_postimg_name( $object ) {
	$thum_id = get_post_thumbnail_id($object[ 'id' ]);
	$thum    = wp_get_attachment_image_src($thum_id, 'list_img');

	return $thum;
}

add_action( 'rest_api_init', 'register_rest_postimg_name');

//////////////////////////////////////////////////////////////////////////////////
//アーカイブ"年"付与
//////////////////////////////////////////////////////////////////////////////////
function my_archives_link($html){
	if(preg_match('/[0-9]+?<\/a>/', $html))
		$html = preg_replace('/([0-9]+?)<\/a>/', '$1年</a>', $html);
	if(preg_match('/title=[\'\"][0-9]+?[\'\"]/', $html))
		$html = preg_replace('/(title=[\'\"][0-9]+?)([\'\"])/', '$1年$2', $html);
	return $html;
}
add_filter('get_archives_link', 'my_archives_link', 10);

//////////////////////////////////////////////////////////////////////////////////
//固定ページのbody_classにルートのスラッグを追加
//////////////////////////////////////////////////////////////////////////////////
function add_page_root_body_class( $classes ) {
	if ( is_singular() ) {
		$post_type = get_query_var( 'post_type' );
		if ( is_page() ) {
			$post_type = 'page';
		}
		if ( $post_type && is_post_type_hierarchical( $post_type ) ) {
			global $post;
			if ( $post->ancestors ) {
				$root = $post->ancestors[count($post->ancestors) - 1];
				$root_post = get_post( $root );
				$classes[] = esc_attr( $post_type . '-' . $root_post->post_name );
			} else {
				$classes[] = esc_attr( $post_type . '-' . $post->post_name );
			}
		}
	}
	return $classes;
}
add_filter( 'body_class', 'add_page_root_body_class' );


//////////////////////////////////////////////////////////////////////////////////
//ルートカテゴリ取得
//////////////////////////////////////////////////////////////////////////////////
function get_root_category_id($cat_id) {
	if($cat_id != 0){
		$cat = get_category($cat_id);
		if($cat->category_parent){
			$parent = get_category($cat->category_parent);
			if($parent->term_id != 0){
				$cat_id = $parent->term_id;
				$cat_id = get_root_category_id($cat_id);
			}
		}
	}
	return $cat_id;
}

//////////////////////////////////////////////////////////////////////////////////
//カテゴリスラッグからIDを取得
//////////////////////////////////////////////////////////////////////////////////
function get_category_id_by_slug($val) {
	$cat = get_category_by_slug($val);
	return $cat->term_id;
}

//////////////////////////////////////////////////////////////////////////////////
//カテゴリIDからスラッグを取得
//////////////////////////////////////////////////////////////////////////////////
function get_category_slug_by_ID($val) {
	$cat = get_category($val);
	return $cat->category_nicename;
}

//////////////////////////////////////////////////////////////////////////////////
//現在のページが指定したページ、またはそのサブページであるかどうかの判定//////////////////////////////////////////////////////////////////////////////////
function is_tree($pid) {
	global $post;
	$pid = get_page_by_path($pid)->ID;
	$anc = get_post_ancestors( $post->ID );

	foreach($anc as $ancestor) {
		if(is_page() && $ancestor == $pid) {
		return true;
		}
	}
	if(is_page()&&(is_page($pid)))
		return true;
	else
		return false;
}


//////////////////////////////////////////////////////////////////////////////////
//抜粋の末尾変更
//////////////////////////////////////////////////////////////////////////////////
function new_excerpt_more($more) {
	return '…<a href="'.get_permalink().'">続きを読む</a>';
}
//add_filter('excerpt_more', 'new_excerpt_more');


//////////////////////////////////////////////////////////////////////////////////
//１週間以内の投稿に「NEW」を表示
//////////////////////////////////////////////////////////////////////////////////
function is_new() {
	$days=7;
	$today=date('U');
	$entry=get_the_time('U');
	$sa=date('U',($today - $entry))/86400;
	if( $days > $sa ){
		echo '<span class="new">new</';
	}
}

//////////////////////////////////////////////////////////////////////////////////
////アイキャッチ画像の定義と切り抜き
//////////////////////////////////////////////////////////////////////////////////
function baw_theme_setup() {
	add_image_size('list_img', 300, 200 ,true );
	add_image_size('detail_img', 800, 530, true );
}
add_action( 'after_setup_theme', 'baw_theme_setup' );

//////////////////////////////////////////////////////////////////////////////////
////カテゴリ・タグ・カスタムタクソノミー オブジェクト取得
//////////////////////////////////////////////////////////////////////////////////
function get_current_term(){
	$id;
	$tax_slug;

	if(is_category()){
		$tax_slug = "category";
		$id = get_query_var('cat');
	}else if(is_tag()){
		$tax_slug = "post_tag";
		$id = get_query_var('tag_id');
	}else if(is_tax()){
		$tax_slug = get_query_var('taxonomy');
		$term_slug = get_query_var('term');
		$term = get_term_by("slug",$term_slug,$tax_slug);
		$id = $term->term_id;
	}

	return get_term($id,$tax_slug);
}

//////////////////////////////////////////////////////////////////////////////////
////一覧表示
//////////////////////////////////////////////////////////////////////////////////
function max_posts_num() {
	$count_posts = wp_count_posts();
	$posts       = $count_posts->publish;

	return $posts;
}

function post_list_show() {
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => -1,
	);

	if (is_category()) {
		$cat_id = get_query_var('cat');
		$args = array_merge($args, array('cat' => $cat_id));
	} elseif(is_tag()) {
		$tag_id = get_query_var('tag_id');
		$args = array_merge($args, array('tag_id' => $tag_id));
	} elseif(is_search()) {
		$search_val = get_search_query();
		$args = array_merge($args, array('s' => $search_val));
	}

	$the_query = new WP_Query($args);
	if ($the_query->have_posts()) {
		while($the_query->have_posts()): $the_query->the_post();
		$id = get_the_ID();
		$post = get_post($id);
		$ttl = get_the_title();
		$url = get_the_permalink();
		$text = get_field('simple_text');

		//category
		$cate = get_the_category($id);
		$cate_name = $cate[0]->name;

		//user
		$anc_id = $post->post_author;
		$anc = get_users($anc_id);
		$anc_name = $anc[0]->user_nicename;

		//img
		$thum_id = get_post_thumbnail_id();
		$thum = wp_get_attachment_image_src($thum_id, 'list_img');

		echo '<article class="p-article" data-aos="fade-up" itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
			<a itemprop="url" href="'.$url.'" title="'.$ttl.'" class="p-article__anc">
				<div class="p-article__img" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
					<img src="'.$thum[0].'" width="300" height="200" alt="" itemprop="thumbnailUrl">
					<meta itemprop="url" content="'.$thum[0].'">
					<meta itemprop="width" content="300">
					<meta itemprop="height" content="200">
				</div>
				<div class="p-article__detail">
					<div class="p-article__head">
						<time itemprop="datePublished" datetime="'.get_the_time('Y-m-d').'" class="p-article__time">'.get_the_time('Y/m/d').'</time>
						<span itemprop="articleSection" class="p-article__cate">'.$cate_name.'</span>
					</div>

					<h2 class="p-article__ttl"><span itemprop="headline" class="p-article__ttl--in">'.$ttl.'</span></h2>

					<div itemprop="articleBody" class="p-article__box"><p class="p-article__box--txt">'.$text.'</p></div>

					<div class="u-hide">
						<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
							<div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
								<meta itemprop="url" content="'.get_bloginfo('url').'/assets/img/logo.png">
								<meta itemprop="width" content="561">
								<meta itemprop="height" content="100">
							</div>
							<meta itemprop="name" content="my-site">
						</div>
						<div itemprop="author">'.$anc_name.'</div>
					</div>
				</div>
				<span class="p-article__arrow"></span>
			</a>
		</article>';
	endwhile;

	} else {
		if(is_search()) {
			echo '<div class="c-box01"><p>「'.$search_val.'」を含む投稿はございません。<br>検索条件を変更し検索してください。</p></div>';
		}
	}
}

//////////////////////////////////////////////////////////////////////////////////
//検索ページの分岐
//////////////////////////////////////////////////////////////////////////////////
function custom_search_template($template){
	if ( is_search() ){
		$post_types = get_query_var('post_type');
		foreach ( (array) $post_types as $post_type )
			$templates[] = "search-{$post_type}.php";
			$templates[] = 'search.php';
			$template = get_query_template('search',$templates);
	}
	return $template;
}
add_filter('template_include','custom_search_template');

//////////////////////////////////////////////////////////////////////////////////
//404ページの分岐
//////////////////////////////////////////////////////////////////////////////////
function custom_404_template($template){
	if ( is_404() ){
		$url = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];

		if (strpos($url, 'kinomama') === false) {
			$template = get_query_template('404', '404.php');
		} else  {
			$template = get_query_template('404', '404-kinomama.php');
		}
	}
	return $template;
}
add_filter('template_include','custom_404_template');
