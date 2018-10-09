<?php
#print "<pre>";print_r($_POST);print "</pre>";
/*******************************************************************************
* モバイルフォーム メイン処理スクリプト
* Copyright(c) Respect CO.,LTD. All Rights Reserved.
* @Author : K.Sasaki@ Respect CO.,LTD
* @access : public
* New Release : 2010.10.13
* Last Modify : -
*
* ■このスクリプトはUTF-8で要エンコード！！
* php5専用（php4非対応）

* SUBMITのネームでモード判別し、処理を実行する
* このスクリプトのエンコードはUTF8とする（必須）
*
* □このシステムで使用するセッティングファイル
* ・config.php
* ・setting.php
*
* □このシステムで使用するライブラリ
* ・jPHPMailer
* ・dBug
*
* □使用インスタンス
* $form : メール送信、モード判別などのメイン処理クラス
* ($dBug)
*
*******************************************************************************/





/***************************************
* コンフィグファイル等の読み込み
****************************************/
require_once('setting.php');
require_once('config.php');


/***************************************
* ポストフィルター
*
* ポスト配列を一律でフィルタリングして、
* 標準化する
*
* $form::nomalize	ポスト値を
* mb_convert_kanaでフィルタリングして、
* 値をtrimする
****************************************/
// $_POSTがデフォルトでUTF-8で入ってくる場合は、
// array_convert_encodingする必要無し
// mb_detect_encodingできないサーバ(mb_internal_encodingがnovalue)の
// 場合は手動で以下を切り分けなければいけない。

			#print_r(mb_detect_encoding($_POST['name']));

/********************************************************************
* $_POSTがSJISの場合
********************************************************************/
$post = $form->array_convert_encoding($_POST, SCRIPT_ENC, TPL_ENC);

/********************************************************************
* $_POSTがUTF-8の場合
********************************************************************/
//trimなどの基本的なパラメータ整形処理
//追加予定！！

/***************************************
* モード判定１
* Submitからこのスクリプトで処理するモード
* を決める
****************************************/
//決定

if ( isset($post[SUBMIT_NAME])
		 or isset($post[SUBMIT_NAME.'_x'])
			 or isset($post[SUBMIT_NAME.'x'])) {
	$mode = 'confirm';
} else
//送信
if ( isset($post[SEND_NAME])
		 or isset($post[SEND_NAME.'_x'])
			 or isset($post[SEND_NAME.'x']) )  {
	$mode = 'send';
} else
//戻る
if ( isset($post[RETRY_INPUT])
		 or isset($post[RETRY_INPUT.'_x'])
			 or isset($post[RETRY_INPUT.'x']) ) {
	$mode = 'back';
} else
//送信
if ( isset($post[SEND_NAME])
		 or isset($post[SEND_NAME.'_x'])
			 or isset($post[SEND_NAME.'x']) ) {
	$mode = 'send';
} else {
//インデックス
	$mode = 'index';
}




/***************************************
* モード判定２
* モード判定１に従い、実際に処理を行う
****************************************/
switch ($mode) {

   /*****************************************
	* 確認画面へのボタンが押されたら
	*****************************************/
	case 'confirm':
		//エラー項目があるかチェックする

		$error_cnt = $form->check_confirm($post);

		//エラーカウントが0だったら
		if ( empty($error_cnt) ) {

			//プレビュー画面を表示する前に空の値を-に変換
			foreach ($post as $k => $v) {
				if (empty($v) or $v == array()) {
					$post[$k] = '-';
				}
			}

			$request_mode = 'preview';
		} else {
		//エラーカウントが0以外だったら
			$request_mode = 'error';
		}
		break;


   /*****************************************
	* プレビュー画面から戻るボタンが押されたら
	*****************************************/
	case 'back':

		//プレビュー画面を表示する前に空の値を-に変換
		foreach ($post as $k => $v) {
			if ( $v === '-' ) {
				$post[$k] = '';
			}
		}

		//エンティティ化されているpost値を元に戻す
		$post = $form->array_htmlspecialchars_decode($post);

		$request_mode = 'back';
		break;


   /*****************************************
	* プレビュー画面から送信ボタンが押されたら
	*****************************************/
	case 'send':

		//エンティティ化されているpost値を元に戻す
		$post = $form->array_htmlspecialchars_decode($post);
		/*****************************************
		* 管理者へメール送信
		*
		******************************************/
		$saiyo = false;

		// BODY用の予約タグの準備
		$reserve_tag = $form->host_info();

		// メールテンプレートの読み出し
		//お見積のときにメールテキストファイルを変更する
		$body = file_get_contents(MAILTPLDIR.MAIL_TEMPLATE_MAN);

		// 入力情報とタグの置換
		foreach( $post as $k => $v ) {
			if (is_array($v)) {
				if ($k === 'save_design_data') {
					$v = $post['save_design_data']['dir'].'/upfile.zip';
				} else {
					$v = join("," , $v);
				}
			}

			//採用確認
			if ($k === 'type' && strpos($v, '求人情報') !== false) {
				$to = $saiyo_to;
			}

			$body = str_replace('<{'.$k.'}>',$v ,$body);
		}

		foreach( $reserve_tag as $k => $v ) {
			$body = str_replace('<{'.$k.'}>', $v , $body);
		}

		// 文字コード変換
		$body = mb_convert_encoding($body,"UTF-8","AUTO");
		$subject  = mb_convert_encoding($subject,"ISO-2022-JP","AUTO");
		$fromname = mb_convert_encoding($fromname,"UTF-8","AUTO");


		// メール内容を整理
		$phpmailer->addTo($to);
		$phpmailer->setFrom($from , $fromname);
		$phpmailer->setSubject($subject);
		$phpmailer->setBody($body);

		// メール送信処理
		if(!$phpmailer->Send()) {
			echo "メールの送信に失敗しました。: " . $phpmailer->ErrorInfo;
			exit();
		} else {
		    #ここにログ記録機能など
			if (SEND_LOG) {
				$fp = fopen(LOGDIR.LOG_FILE, 'a');
				if (!$fp) { return; }
					flock($fp, LOCK_EX);
					fwrite($fp, date("Y-m-d h:i:s")."  :  ".$to."\r\n");
					flock($fp, LOCK_UN);
					fclose($fp);
			}
		}

		//TO,CC、BCCを消去
		$phpmailer->ClearAllRecipients();
		//添付ファイルを消去
		$phpmailer->ClearAttachments();





		/*****************************************
		* 自動返信（ユーザへメール送信）
		*
		******************************************/
		if (FROMUSER) {
			//お見積のときにメールテキストファイルを変更する
			$body = file_get_contents(MAILTPLDIR.MAIL_TEMPLATE_USR);

			// 文字コード変換
			$body = mb_convert_encoding($body,"UTF-8","AUTO");
			$auto_reply_subject = mb_convert_encoding($auto_reply_subject,"ISO-2022-JP","AUTO");
			$fromname = mb_convert_encoding($fromname,"UTF-8","AUTO");

			// 入力情報とタグの置換
			foreach( $post as $k => $v ) {
				if (is_array($v)) {
					if ($k === 'save_design_data') {
						$v = $post['save_design_data']['name'];
					} else {
						$v = join("," , $v);
					}
				}
				$body = str_replace('<{'.$k.'}>',$v ,$body);
			}

			// 自動返信メール送信処理
			$phpmailer->addTo($post['email']);
			$phpmailer->setFrom($auto_reply_from , $auto_reply_fromname);
			$phpmailer->setSubject($auto_reply_subject);
			$phpmailer->setBody($body);
			if (!$phpmailer->Send()) {
				echo "メールの送信に失敗しました。: ";
				exit();
			}
		}





		$request_mode = 'complete';
		break;


   /*****************************************
	* なにもボタンが押されなかったら
	*****************************************/
	case 'index':
		$request_mode = 'index';
		break;


   /*****************************************
	* デフォルト
	*****************************************/
	default:
		break;
}









/***************************************
* テンプレートの呼び出し
* ※POSTの文字コードを変換してから
*   テンプレートを呼び出す
****************************************/
switch ($request_mode) {
	case 'preview':
		$file = TPLDIR.PREVIEW_TEMPLATE;
		//値を初期化
		foreach ($setting_default as $value) {
			if (empty($post[$value])) {
				$post[$value] = '';
			}
		}

		break;


	case 'error':
		$file = TPLDIR.ERROR_TEMPLATE;
		break;


	case 'back':
		$file = TPLDIR.INDEX_TEMPLATE;
		break;


	case 'index':
		if ( !isset($post['__submit__']) ) {
			//値を初期化
			foreach ($setting_default as $value) {
				$post[$value] = '';
			}
		}
		$file = TPLDIR.INDEX_TEMPLATE;
		break;


	case 'complete':
		header('Location: ' . THANKS_URL);
		exit;
		break;

}

//ポストパラメータを埋め込んで、SJISにエンコードしてキャッシュファイルを作る
$file = $form->assign_tmplate($file, $post, 'UTF-8');

//キャッシュファイルを呼び出す。
require_once($file);

//キャッシュファイルを削除
@unlink($file);


exit(0);
