<?php
/* ===============================================================================
  管理画面設定ファイル
=============================================================================== */

/* 1.ベース設定
------------------------------------------------------------------------------- */

/* ----- アップデート情報非表示 ----- */
remove_action('wp_version_check', 'wp_version_check');
remove_action('load-update-core.php', 'wp_update_plugins');
add_filter('pre_site_transient_update_plugins', create_function('$a', "return null;"));
add_filter('pre_site_transient_update_core', '__return_zero');


/* ----- 自動アップデート無効化 ----- */
add_filter('automatic_updater_disabled', '__return_true');


/* ----- 管理画面のメニュー非表示 ----- */
function remove_menus() {
	//remove_menu_page('edit-comments.php'); 									// コメント
	//remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=post_tag');		// タグ
}
// add_action('admin_menu', 'remove_menus');


/* ----- ダッシュボードの項目非表示 ----- */
function my_remove_dashboard_widgets() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);	// 被リンク
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);			// プラグイン
	// unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);	// 最近のコメント
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);		// クイック投稿
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);		// 最近の下書き
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);			// WordPress開発ブログ
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);			// WordPressフォーラム
}
//add_action('wp_dashboard_setup', 'my_remove_dashboard_widgets');


/* ----- 投稿画面のボックス非表示 ----- */
function remove_extra_meta_boxes() {
	remove_meta_box('postcustom','post','normal');			// 投稿のカスタムフィールド
	remove_meta_box('postcustom','page','normal');			// 固定ページのカスタムフィールド
	remove_meta_box('postexcerpt','post','normal');			// 投稿の抜粋
	remove_meta_box('postexcerpt','page','normal');			// 固定ページの抜粋
	// remove_meta_box('commentsdiv','post','normal');			// 投稿のコメント
	remove_meta_box('commentsdiv','page','normal');			// 固定ページのコメント
	remove_meta_box('tagsdiv-post_tag','post','side');		// 投稿のタグ
	remove_meta_box('tagsdiv-post_tag','page','side');		// 固定ページのタグ
	remove_meta_box('trackbacksdiv','post','normal');		// 投稿のトラックバック
	remove_meta_box('trackbacksdiv','page','normal');		// 固定ページのトラックバック
	remove_meta_box('commentstatusdiv','post','normal');	// 投稿のディスカッション
	remove_meta_box('commentstatusdiv','page','normal');	// ページのディスカッション
	remove_meta_box('authordiv','post','normal');			// 投稿の作成者
	remove_meta_box('authordiv','page','normal');			// 固定ページの作成者
	remove_meta_box('revisionsdiv','post','normal');		// 投稿のリビジョン
	remove_meta_box('revisionsdiv','page','normal');		// 固定ページのリビジョン

	// 以下は必要に応じて選択 //
	// remove_meta_box('slugdiv','post','normal');			// 投稿のスラッグ
	// remove_meta_box('slugdiv','page','normal');			// 固定ページのスラッグ
	// remove_meta_box('pageparentdiv','page','side');		// 固定ページのページ属性
}
//add_action('admin_menu','remove_extra_meta_boxes');



/* 2.オプション設定
   ※必要に応じて設定してください
------------------------------------------------------------------------------- */

/* ----- アイキャッチ有効化 ----- */
add_theme_support('post-thumbnails');


/* ----- 管理画面用CSS ----- */
function my_admin_css() {
	echo "\n" . '<link rel="stylesheet" type="text/css" href="' .get_bloginfo('template_directory'). '/css/admin.css' . '" />' . "\n";
}
// add_action('admin_head','my_admin_css');

add_editor_style(get_bloginfo('template_directory'). '/editor-style.css');

function custom_editor_settings( $initArray ) {
    $initArray['body_class'] = 'p-detail__box';
    return $initArray;
}
add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );


/* ----- ログイン画面ロゴ変更 ----- */
function my_custom_login_logo() {
    echo '<style type="text/css">
        h1 a { background:url('.get_bloginfo('template_directory').'/img/common/custom-login-logo.png) no-repeat center top!important; height:40px; }
    </style>';
}
// add_action('login_head','my_custom_login_logo');


/* ----- 管理画面ロゴ変更 ----- */
function my_custom_logo() {
	echo '<style type="text/css">#header-logo { background-image:url('.get_bloginfo('template_directory').'/img/common/admin-logo-image.png) !important; }</style>';
}
// add_action('admin_head','my_custom_logo');


/* ----- プロフィールの項目削除 ----- */
function hide_profile_fields($contactmethods) {
	unset($contactmethods['aim']);
	unset($contactmethods['jabber']);
	unset($contactmethods['yim']);
	return $contactmethods;
}
// add_filter('user_contactmethods', 'hide_profile_fields');


/* ----- プロフィールに項目追加 ----- */
function my_new_contactmethods($contactmethods) {
	$contactmethods['koumokumei'] = '項目名';
	return $contactmethods;
}
// add_filter('user_contactmethods', 'my_new_contactmethods', 10, 1);


/* ----- カスタムメニュー有効化 ----- */
/*
add_theme_support('menus');
register_nav_menus(array(
	'footerNav' => 'footerナビゲーション',
));
*/
