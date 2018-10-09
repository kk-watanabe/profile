<?php
// メールの送信先
$to = '****';
$saiyo_to = '****';

// メールの送信元
if (!isset($_POST['email'])) {
	$_POST['email'] = '';
}
if (!isset($_POST['name'])) {
	$_POST['name'] = '';
}
$from = $_POST['email'];

// 管理者
$fromname = $_POST['name'];
$subject = '株式会社アーリークロス WEBお問い合わせフォーム';

// 自動返信
$auto_reply_from = 'no-reply@early-cross.jp';
$auto_reply_fromname = "株式会社アーリークロス";
$auto_reply_subject = 'お問い合わせが完了しました。';

/*********************************************************
 * ログの記録の有無
 * (0:無 1:有)
 *********************************************************/

define('SEND_LOG' , 0);

/*********************************************************
 * ログの記録の有無
 * (0:無 1:有)
 *********************************************************/

define('FROMUSER' , 1);

/*********************************************************
 * デバッグモードの有無
 * $postを表示する
 * (0:無 1:有)
 *********************************************************/

define('DEBUG' , 0);

/*********************************************************
 * 暗号化するキャッシュファイル名のタネ
 * どうせ暗号化するので、何でも良い。
 *********************************************************/

define('MAGIC' , 'chickenball');

/*********************************************************
 * メールアドレスの同一性確認
 *
 *********************************************************/

define('_EMAIL_' , 'email');
define('_EMAIL_CONFIRM_' , 'email_confirm');
define('_EMAIL_NAME_' , 'E-mail');

/*********************************************************
 * チェックボックス、ラジオボタン、プルダウンの項目設定
 *
 * キーはhtml表示名とラベル名、値はPOSTパラメータとして渡る
 * 値に相当する
 *********************************************************/
$param = array(
	'type' => array (
		"サービスに関するお問い合わせ" 	=> "サービスに関するお問い合わせ",
		"商品に関するお問い合わせ" 		=> "商品に関するお問い合わせ",
		"求人情報に関するお問い合わせ" 	=> "求人情報に関するお問い合わせ",
		"その他" 						=> "その他"
	),
	'privacy' => array (
		"個人情報保護方針に同意する" => "個人情報保護方針に同意する",
	),
);


/*********************************************************
 * チェックボックス、ラジオボタン設定
 *
 * キーはhtml表示名とラベル名、値はPOSTパラメータとして渡る
 * 値に相当する
 *********************************************************/
$setting_parameter = array(
	'type' => array (
		'parent'       => true,
		'parent_tag'   => 'ul',
		'parent_class' => 'p-typeItem',
		'parent_other' => '',
		'child'        => true,
		'child_tag'    => 'li',
		'child_class'  => 'p-typeItem__list p-checkbox01',
		'child_other'  => '',
		'input_other'  => 'data-validation-engine="validate[required]" data-parts-parent="p-contactForm__box"',
	),
	'privacy' => array (
		'parent'       => false,
		'parent_tag'   => '',
		'parent_class' => '',
		'parent_other' => '',
		'child'        => true,
		'child_tag'    => 'div',
		'child_class'  => 'p-checkbox01 p-contactForm__privacy--txt',
		'child_other'  => '',
		'input_other'  => 'data-validation-engine="validate[required]" data-parts-parent="p-contactForm__privacy"',
	),
);


/**
 * 項目名とname値の関連付け
 * 入力値の検証ルールの設定。複数設定可能
 * void    : 値が空かどうかを検証
 * mail    : 入力値がメールアドレスの形式かどうかの検証
 *
 * ※20101013現在、VOIDとMAILの２種類の対応となっている
 */
// $setting_list = array(
// 	array(
// 		'key' => array('type'),
// 		'type' => "void",
// 		'message' => 'お問い合せ項目は必須選択項目です',
// 	),
// 	array(
// 		'key' => array('name'),
// 		'type' => "void",
// 		'message' => 'お名前は必須項目です',
// 	),
// 	array(
// 		'key' => array('kana'),
// 		'type' => "void",
// 		'message' => 'フリガナは必須項目です',
// 	),
// 	array(
// 		'key' => array('tel'),
// 		'type' => "void",
// 		'message' => '電話番号は必須項目です',
// 	),
// 	array(
// 		'key' => array('tel'),
// 		'type' => "number",
// 		'message' => '電話番号は数字でご入力ください。',
// 	),
// 	array(
// 		'key' => array('email'),
// 		'type' => "void",
// 		'message' => 'メールアドレスは必須項目です',
// 	),
// 	array(
// 		'key' => array('email'),
// 		'type' => "email",
// 		'message' => 'メールアドレスの形式が不正です',
// 	),
// 	array(
// 		'key' => array('content'),
// 		'type' => "void",
// 		'message' => 'お問い合わせ内容は必須項目です',
// 	),
// 	array(
// 		'key' => array('privacy'),
// 		'type' => "void",
// 		'message' => '個人情報保護方針への同意は必須選択項目です',
// 	),
// );

//初期化する名前のリスト
$setting_default = array(
	'type',
	'company',
	'name',
	'kana',
	'tel',
	'email',
	'content',
	'privacy',
);

