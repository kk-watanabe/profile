<?php
/***********************************************************
* モバイルフォーム　セッティングファイル
*
* セッティングエリアにてパラメータをセッティングする。
* 非セッティングエリア（このスクリプトの下半分）はいじる
* 必要はない。
*
* メイン処理クラスのオブジェクトは$formで定義する
*
************************************************************/

/*------セッティングエリア*--------------------------------*/


// テンプレートファイルの名前を定義
define('INDEX_TEMPLATE' , 'index.tpl');
define('ERROR_TEMPLATE' , 'error.tpl');
define('PREVIEW_TEMPLATE' , 'preview.tpl');

// サンキューページのURL
define('THANKS_URL' , 'thanks.php');

// 状態判定に使うsubmitパラメータのname
define('SUBMIT_NAME' , '__submit__');
define('SEND_NAME' , '__send__');
define('RETRY_INPUT' , '__retry__');

//お見積のときにメールテキストファイルを変更する
// 管理者メール本文テンプレ
define('MAIL_TEMPLATE_MAN_ESTIMATE' , 'mail_body_man_estimate.txt');
// 自動返信メール本文テンプレ
define('MAIL_TEMPLATE_USR_ESTIMATE' , 'mail_body_usr_estimate.txt');

//通常
// 管理者メール本文テンプレ
define('MAIL_TEMPLATE_MAN' , 'mail_body_man.txt');
// 自動返信メール本文テンプレ
define('MAIL_TEMPLATE_USR' , 'mail_body_usr.txt');

// ログファイル名
define('LOG_FILE' , 'send_log.txt');




/*****************************
*
* エンコード関係
*
*****************************/

//テンプレのエンコード
define('SCRIPT_ENC', 'UTF-8');

//テンプレのエンコード
define('TPL_ENC', 'UTF-8');







/*-----非セッティングエリア（基本的に以下は触らなくて良い）*------/

/*****************************
*
* ディレクトリ関係
*
*****************************/
//ベースディレクトリ
define("BASEDIR",realpath(dirname(__FILE__))."/");
//テンプレートディレクトリ
define("TPLDIR",realpath(dirname(__FILE__))."/tpl/");
//クラスディレクトリ
define("CLASSDIR",realpath(dirname(__FILE__))."/class/");
//キャッシュディレクトリ
define("CACHEDIR",realpath(dirname(__FILE__))."/cache/");
//ライブラリディレクトリ
define("LIBSDIR",realpath(dirname(__FILE__))."/libs/");
//メールテンプレディレクトリ
define("MAILTPLDIR",realpath(dirname(__FILE__))."/mail_tpl/");
//ログ格納ディレクトリ
define("LOGDIR",realpath(dirname(__FILE__))."/logs/");
//入稿データ
define("FILE_DIR", $_SERVER['DOCUMENT_ROOT']."/img/upfile/contact/");

/*****************************
*
* 入力チェック関係
*
*****************************/
//チェックタイプの名前
define('CHECK_TYPES','check_types');

//アイテムネームの名前
define('ITEM_NAME','item_name');

//アイテムネームの名前
define('MESSAGE_TEXT','message_text');




//必須入力
define('VOID','void');

//メール項目
define('MAIL','email');

//電話
define('CTEL','tel');

//電話
define('NUMBER','number');

//ファイル
define('FILE','file');

/*****************************
*
* オブジェクト生成
*
*****************************/

//send_mobileクラスを読み込む
require_once(CLASSDIR.'form_core.php');
//メイン処理のオブジェクトを作成
$form = new mobile_core;

//send_mobileクラスを読み込む
require_once(CLASSDIR.'html_helper01.php');
//メイン処理のオブジェクトを作成
$helper = new html_helper01;

// jPHPMailerを読み込む
require_once(LIBSDIR.'phpmailer/jphpmailer.php');
$phpmailer = new JPHPMailer();

// dBugを読み込む(インスタンスは作成しない)
require_once(CLASSDIR.'dBug.php');

