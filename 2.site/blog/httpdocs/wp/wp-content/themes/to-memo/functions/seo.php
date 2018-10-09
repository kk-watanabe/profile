<?php
/**********************************************************************************
 * ■SEO設定ファイル
 **********************************************************************************/
//////////////////////////////////////////////////////////////////////////////////
//URLの設定
//////////////////////////////////////////////////////////////////////////////////
function get_current_url() {
	$protocol = is_ssl() ? 'https' : 'http';
	$uri = $protocol . '://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
	return $uri;
}

//////////////////////////////////////////////////////////////////////////////////
//titleの設定
//////////////////////////////////////////////////////////////////////////////////
function get_meta_title() {
	global $post;

	$title     = '';
	$site_name = get_bloginfo('name');

	if ($post->post_type === 'kinomama') {
		$site_name = 'きのまま - toMemo';
	}

	if(is_year()) {
		$title = get_query_var('year') . '年' . ' | ' . $site_name;
	} else {
		if (is_home()) {
			$title = $site_name;
		} elseif(is_single() || is_page()) {
			$title = $post->post_title.' | '.$site_name;
		} elseif (is_post_type_archive('kinomama')) {
			$title = $site_name;
		} elseif(is_search()) {
			$search_val = get_search_query();

			$title = '「'.$search_val.'」の検索結果 | '.$site_name;
		} else {
			$term = get_current_term();
			$term_url = get_category_link($term->term_id);
			$page_ttl = $term->name;

			$title = $page_ttl.' | '.$site_name;
		}
	}

	return $title;
}

//////////////////////////////////////////////////////////////////////////////////
//descriptionの設定
//////////////////////////////////////////////////////////////////////////////////
function get_meta_description() {
	global $post;

	$content   = '';
	$site_text = get_bloginfo('description');

	$conts     = $post->post_content;
	$conts     = str_replace(array("\r\n","\r","\n","&nbsp;"),'', $conts);
	$conts     = wp_strip_all_tags( $conts );
	$conts     = mb_strimwidth($conts, 0, 300, "...");

	if(is_year()) {
		$content = get_query_var('year') . '年の投稿一覧です。'. $site_text;
	} else {
		if (is_home()) {
			$content = $site_text;
		} elseif (is_post_type_archive('kinomama')) {
			$obj = get_post_type_object( 'kinomama' );

			if (!empty($obj->description)) {
				$content = $obj->description;
			} else {
				$content = $conts;
			}
		} elseif(is_single() || is_page()) {
			$content = $conts;
		} else {
			if (!empty(category_description())) {
				$content = category_description();
				$content = wp_strip_all_tags( $content );
			} else {
				$content = $conts;
			}

		}
	}

	return $content;
}

//////////////////////////////////////////////////////////////////////////////////
//サムネイルの設定
//////////////////////////////////////////////////////////////////////////////////
function get_meta_img() {
	global $post;

	$img         = '';
	$default_img = get_bloginfo('url').'/wp/wp-content/uploads/2017/08/thum_img02.jpg';

	if (is_single() || is_page()) {
		if (has_post_thumbnail()) {
			$img_id  = get_post_thumbnail_id ();
			$img_url = wp_get_attachment_image_src($img_id, 'full');

			$img = $img_url[0];
		} else {
			$img = $default_img;
		}
	} else {
		$img = $default_img;
	}


	return $img;
}

//////////////////////////////////////////////////////////////////////////////////
//headの設定
//////////////////////////////////////////////////////////////////////////////////
function get_head() {
	$html              = '';
	$google_web_master = '_JXyMPrEjz031MnqIDs2BKnpvicFZkTJkhxVQeLcXXg';
	$default_img       = '';

	$html .= "<meta charset=\"UTF-8\">";
	$html .= "<meta name=\"format-detection\" content=\"telephone=no\">\n";
	$html .= "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n";
	$html .= "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0\">\n";

	$html .= "<title>".get_meta_title()."</title>\n";

	$html .= "<meta name=\"description\" content=\"".get_meta_description()."\">\n";
	$html .= "<meta name=\"keywords\" content=\"\">\n";

	$html .= "<meta name=\"google-site-verification\" content=\"".$google_web_master."\">\n";

	$html .= "<link rel=\"canonical\" href=\"".get_current_url()."\">\n";

	$html .= "<meta property=\"og:title\" content=\"".get_meta_title()."\">\n";

	if (is_home()) {
		$html .= "<meta property=\"og:type\" content=\"website\">\n";
	} else {
		$html .= "<meta property=\"og:type\" content=\"article\">\n";
	}

	$html .= "<meta property=\"og:url\" content=\"".get_current_url()."\">\n";
	$html .= "<meta property=\"og:image\" content=\"".get_meta_img()."\">\n";
	$html .= "<meta property=\"og:site_name\" content=\"".get_meta_title()."\">\n";
	$html .= "<meta property=\"og:description\" content=\"".get_meta_description()."\">\n";
	$html .= "<meta name=\"twitter:card\" content=\"summary\">\n";
	$html .= "<meta name=\"twitter:site\" content=\"@toMemo_web\">\n";
	$html .= "<meta name=\"twitter:domain\" content=\"toMemo_web\">\n";
	$html .= "<meta name=\"twitter:title\" content=\"".get_meta_title()."\">\n";
	$html .= "<meta name=\"twitter:description\" content=\"".get_meta_description()."\">\n";
	$html .= "<meta name=\"twitter:image\" content=\"".get_meta_img()."\">\n";

	$html .= "<meta itemprop=\"image\" content=\"".get_meta_img()."\">\n";

	echo $html;
}
