<?php
/* ===============================================================================
  総合設定ファイル
=============================================================================== */

/* 1.ディレクトリ設定
------------------------------------------------------------------------------- */
$templatepath = get_template_directory();

define('T_FUNCTIONS', $templatepath . '/functions/');
define('T_LIBS', $templatepath . '/libs/');
define('T_THEME', get_template_directory_uri());
define('T_JS', get_template_directory_uri() . '/js');
define('T_CSS', get_template_directory_uri() . '/css');



/* 2.必須インクルードファイル
------------------------------------------------------------------------------- */
/* ----- 管理画面設定ファイル ----- */
if(is_admin()){
	include_once(T_FUNCTIONS . '/admin.php');
}

/* ----- ショートコード設定ファイル ----- */
include_once(T_FUNCTIONS . '/shortcodes.php');

/* ----- SEO設定ファイル ----- */
include_once(T_FUNCTIONS . '/seo.php');

/* ----- 拡張設定ファイル ----- */
include_once(T_FUNCTIONS . '/expansion.php');

/* ----- [kinomama]拡張設定ファイル ----- */
include_once(T_FUNCTIONS . '/kinomama_function.php');

/* ----- リサイズ用インクルードファイル ----- */
include_once(T_LIBS . '/aq_resizer/aq_resizer.php');
