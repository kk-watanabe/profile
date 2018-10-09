<?php
require_once(BASEDIR.'config.php');
require_once(BASEDIR.'setting.php');
/*******************************************************************************
* モバイルフォーム用メイン処理クラス
* Copyright(c) Respect CO.,LTD. All Rights Reserved.
* @Author : K.Sasaki@ Respect CO.,LTD
* @access : public
* New Release : 2010.10.13
* Last Modify : -
*
* ■このスクリプトはUTF-8で要エンコード！！
* php5専用（php4非対応）
*
* このクラスは、モバイルフォーム送信のためのメイン処理関数を提供する。
* このスクリプトは、SJISでエンコードされているものとする
* PHPに変数を渡し、メール送信するときにUTF8にエンコードするものとする。
*
*******************************************************************************/
class mobile_core{

	//エラーを初期化
	var $error = '';

	//エラーカウントを初期化
	var $error_cnt = 0;

	//チェックパラメータ
	var $error_post = array();

	//セッティングリスト
	var $setting_list;

	//文字エンコードの定義
	var $encode_type = array('UTF-8', 'SJIS', 'EUC-JP');

	//キャッシュマジック
#	var $magic = MAGIC;
	var $magic = 'chickenball';

	var $error_msg_jp = '';
	var $error_msg_flag = '';


	/**************************************************************************
	* @public
	*
	* コンストラクタ
	*
	* ヴァリデーションの設定を読み込む
	*
	*
	***************************************************************************/
	function __construct()
	{
		//コンフィグファイルから、入力チェックパラメータを読みメンバ変数に登録
		global $setting_list;
		$this->setting_list = $setting_list;
	}





	/**************************************************************************
	* @public
	*
	* 確認画面時に遷移するときに入力エラーがあるかないか判定する
	* 入力エラーがあるときはエラーカウントを戻す
	*
	* 入力エラーがあるときは、そのエラーの日本語項目名と、key名をメンバ変数に
	* 一次元配列配列として登録する
	* ・$this->error_msg_jp  -- ($this->error_msg_jp[tel]   = "電話番号"）
	* ・$this->error_msg_key -- ($this->error_msg_flag[tel] = 1)
	*
	* 引数	：$post
	* 戻り値：$error_count(numeric)
	*
	***************************************************************************/
	function check_confirm($post)
	{
	}//end of func

	// function check_confirm($post)
	// {
	// 	//POSTパラメータ
	// 	foreach ( $post as $ak1 => $av1 ) {
	// 		//大項目
	// 		foreach ($this->setting_list as $k1 => $v1) {
	// 			echo '<pre style="font-size:13px;">'; var_dump($k1, $v1); echo '</pre>';
	// 			if ( $ak1 == $k1) {

	// 				//check_types
	// 				foreach ($v1 as $k2 => $v2) {
	// 					if ($k2 == CHECK_TYPES  &&  $v2 !== array() ) {
	// 					//チェックタイプを調べる
	// 					foreach ( $v2 as $k3 => $v3 ) {
	// 						//入力必須(VOID)だったら
	// 						if ( $v3 == VOID ) {
	// 							//ポストパラメータが空だったら
	// 							if ( empty($post[$ak1]) ) {
	// 								//エラーの項目をメンバ変数に格納
	// 								//■日本語エラー項目名
	// 								$this->error_msg_jp[$ak1]  = $this->setting_list[$k1][MESSAGE_TEXT];
	// 								//■エラー項目key名
	// 								$this->error_msg_flag[$ak1] = 1;
	// 								//■エラーカウントをインクリメント
	// 								$this->error_cnt = $this->error_cnt + 1;
	// 								#break 4;

	// 							}
	// 						} else
	// 						//入力必須(CTEL)だったら
	// 						if ( $v3 == CTEL ) {
	// 							if ( !$this->check_tel( $post[$ak1]) ) {
	// 								//エラーの項目をメンバ変数に格納
	// 								//■日本語エラー項目名
	// 								$this->error_msg_jp[$ak1]  = $this->setting_list[$k1][MESSAGE_TEXT];
	// 								//■エラー項目key名
	// 								$this->error_msg_flag[$ak1] = 1;
	// 								//■エラーカウントをインクリメント
	// 								$this->error_cnt = $this->error_cnt + 1;
	// 								#break 4;

	// 							}
	// 						} else
	// 						//メール(MAIL)だったら
	// 						if ( $v3 == MAIL ) {
	// 							if ( !$this->check_email( $post[$ak1]) ) {
	// 								//エラーの項目をメンバ変数に格納
	// 								//■日本語エラー項目名
	// 								$this->error_msg_jp[$ak1]  = $this->setting_list[$k1][MESSAGE_TEXT];
	// 								//■エラー項目key名
	// 								$this->error_msg_flag[$ak1] = 1;
	// 								//■エラーカウントをインクリメント
	// 								$this->error_cnt = $this->error_cnt + 1;
	// 								#break 4;

	// 							} else
	// 							//Emailの同一性チェック
	// 							if ($post[_EMAIL_] !== $post[_EMAIL_CONFIRM_]) {
	// 								//エラーの項目をメンバ変数に格納
	// 								//■日本語エラー項目名
	// 								$this->error_msg_jp[_EMAIL_]          = '確認用と違います';
	// 								$this->error_msg_jp[_EMAIL_CONFIRM_]  = '確認用と違います';
	// 								//■エラー項目key名
	// 								$this->error_msg_flag[_EMAIL_] = 1;
	// 								#$this->error_msg_flag[_EMAIL_CONFIRM_] = 1;
	// 								//■エラーカウントをインクリメント
	// 								$this->error_cnt = $this->error_cnt + 1;
	// 								#break 4;
	// 							}
	// 						}
	// 					}
	// 					}
	// 				}
	// 			}
	// 		}
	// 	}

	// 	//メンバ変数のエラーメッセージを日本語化
	// 	$this->error_msg_jp = $this->array_convert_encoding($this->error_msg_jp, TPL_ENC, SCRIPT_ENC);

	// 	return $this->error_cnt;
	// }





	/**************************************************************************
	* @private
	*
	* fileがある場合、問題無いか確認
	* 不正形式の場合はFALSEを戻す。
	* 形式が正しい場合はTRUEを戻す。
	*
	*
	* 引数	：$file
	* 戻り値：TRUE or FALSE
	*
	***************************************************************************/
	function check_file($file)
	{
		if (!is_uploaded_file($file['design_data']['tmp_name']) || empty($_POST['save_design_data'])) {
			return $this->check_file_error(true);
		}

		$flag        = false;
		$uploadfolde = '';
		$uploadfile  = '';
		$data        = $file['design_data'];
		$error       = $data['error'];
		$user_name   = 'early';

		//エラー（ファイスサイズ）の確認
		if ($error === 2) {
			return $this->check_file_error($flag, 'ファイルサイズが100MBを超えています。');
		}

		$name       = $data['name'];
		$tmp_name   = $data['tmp_name'];
		$type       = mime_content_type($tmp_name);

		header("Content-type: text/html; charset=UTF-8");

		$uploaddir     = FILE_DIR;
		$save_filename = date('YmdHis');
		$fine_name     = $this->mb_basename($name, '.zip').'.zip';

		$uploadfolder  = $uploaddir.$save_filename.'/';
		$uploadfile    = $uploadfolder.$fine_name;
		$uploadfiles   = $uploadfolder.'upfile.zip';

		//ファイルを削除する
		$dir       = scandir($uploaddir);
		$delet_day = date('YmdHis',strtotime("- 30 day"));
		foreach ($dir as $key => $value) {
			$filepath = $uploaddir . $value;

			if(!is_file($filepath)) continue;
			$mod = filemtime($filepath);

			if($delet_day > $mod){
				unlink($file);
			}
		}

		//ファイル形式がzipであるか調べる
		if ($type === 'application/zip' || $type === 'application/x-zip-compressed') {
			$flag = true;
		} else {
			$flag  = false;
			return $this->check_file_error($flag, '「zip」ファイルでアップロードをお願いします。');
		}

		//フォルダを作成
		if ($flag && !is_dir($uploadfolder)) {
			if(mkdir($uploadfolder, 0777, true)){
				$flag = true;
				chmod($uploadfolder, 0777);
			}else{
				$flag  = false;
				return $this->check_file_error($flag, 'ファイルのアップロードを失敗しました。');
			}
		}

		if ($flag && move_uploaded_file($tmp_name, $uploadfiles)) {
			$flag = true;
		} else {
			$flag  = false;
			return $this->check_file_error($flag, 'ファイルのアップロードを失敗しました。');
		}
	}



	/**************************************************************************
	* @private
	*
	* check_file()がfalseであればエラー文を返す
	*
	* 引数	：$file, $error_txt
	* 戻り値：$error_count(numeric)
	*
	***************************************************************************/
	function check_file_error($flag, $error_txt = '')
	{
		if (!$flag) {
			//■日本語エラー項目名
			$this->error_msg_jp['design_data']  = $error_txt;
			//■エラー項目key名
			$this->error_msg_flag['design_data'] = 1;
			//■エラーカウントをインクリメント
			$this->error_cnt = $this->error_cnt + 1;
		}

		//メンバ変数のエラーメッセージを日本語化
		$this->error_msg_jp = $this->array_convert_encoding($this->error_msg_jp, TPL_ENC, SCRIPT_ENC);

		return $this->error_cnt;
	}



	/**************************************************************************
	* @private
	*
	* basename対策
	*
	* 引数	：$str, $suffix
	* 戻り値：$res
	*
	***************************************************************************/
	function mb_basename($str, $suffix=null){
		$tmp = preg_split('/[\/\\\\]/', $str);
		$res = end($tmp);

		if(strlen($suffix)){
			$suffix = preg_quote($suffix);
			$res = preg_replace("/({$suffix})$/u", "", $res);
		}

		return $res;
	}




	/**************************************************************************
	* @private
	*
	* メールアドレスの形式になっているかどうかチェックする
	* 不正形式の場合はFALSEを戻す。
	* 形式が正しい場合はTRUEを戻す。
	*
	*
	* 引数	：$email
	* 戻り値：TRUE or FALSE
	*
	***************************************************************************/
	function check_email($email)
	{
		if ( empty($email) ) {
			$this->error = 'メールアドレスがありません。';
			return FALSE;
		}

		// メールアドレスのチェック
		if ( ! preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email) ) {
			return FALSE;
		}

		return TRUE;
	}





	/**************************************************************************
	* @private
	*
	* 電話番号の形式になっているかどうかチェックする
	* 不正形式の場合はFALSEを戻す。
	* 形式が正しい場合はTRUEを戻す。
	*
	*
	* 引数	：$tel
	* 戻り値：TRUE or FALSE
	*
	***************************************************************************/
	function check_tel($tel)
	{
		if ( empty($tel) ) {
			$this->error = '電話番号がありません。';
			return FALSE;
		}

		//全角をすべて半角になおす
		$tel = mb_convert_kana($tel,"rnshka","UTF-8");

		//ハイフンを取り除く
		$tel = str_replace( array("-","ー","－","―"), "", $tel );

		// 電話番号のチェック
		if ( ! preg_match("/^0\d{1,4}[-(]?\d{1,4}[-)]?\d{3,4}$/", $tel) ) {
			return FALSE;
		}

		return TRUE;
	}





	/**************************************************************************
	* @public
	*
	* テキストの文字コードを変換する
	* 引数のテキストは２次元配列まで自動対応し、同次元で出力を戻す。
	* 失敗したときFALSEを戻す。成功したときはUTF-8にエンコードされた
	* テキストを戻す。
	* PHPのinternal_encodingは変更しない仕様とする。
	*
	* 引数	：$text
	* 		：$char_enc (default:SJIS)
	* 		：$from_enc (default:SJIS)
	* 戻り値：FALSE or $encoded_text
	*
	* $to_encは	UTF-8 or SJIS or EUC-JPのいずれかとする
	*
	***************************************************************************/
	function array_convert_encoding($text, $to_enc = 'SJIS', $from_enc = "SJIS" )
	{
		//引数の$textがないときはFALSEを戻す
		if (empty($text) or !is_array($text)) {
			return FALSE;
		}

		//エンコードタイプのチェック(全角を半角英数字にして大文字に変更)
		$to_enc = strtoupper(mb_convert_kana( $to_enc, "a", $from_enc));
		$flag = FALSE;
		foreach ( $this->encode_type as $k => $v ) {
			if ( $to_enc == $v ) {
				$flag = TRUE;
				break;
			}
		}
		if ( ! $flag ) {
			$this->error = '文字エンコードの引数を間違えています';
			return FALSE;
		}

		foreach($text as $k1 => $v1){
			//$v1が二次元配列だったら
			if ( is_array($v1) ) {
				foreach($v1 as $k2 => $v2) {
					//テキストが空でなければ変換する。
					if ( !empty($v2) ) {
						//入力テキストがUTF-8かASCIIでなかったらFALSEを戻す
#						$v2 = mb_convert_encoding($v2,$to_enc, $from_enc);
						//戻り値用の変数にエンコード済みのtextを格納
						$encoded_text[$k1][$k2] = $v2;
					} else {
					//テキストが空のときは、変換しないでそのまま格納
						$encoded_text[$k1][$k2] = $v2;
					}
				}//end foreach
			//$v1が一次元配列だったら
			} else {
				//テキストが空でなければ変換する。
				if ( !empty($v1) ) {
#					$v1 = mb_convert_encoding($v1,$to_enc, $from_enc);
					//戻り値用の変数にエンコード済みのtextを格納
					$encoded_text[$k1] = $v1;
				} else {
					//テキストが空のときは、変換しないでそのまま格納
					$encoded_text[$k1] = $v1;
				}
			}
		}//end foreach
		return $encoded_text;
	}//end of func





	/**************************************************************************
	* @public
	*
	* テンプレートにポスト関数を埋め込んで、エンコードして戻す
	*
	* 引数	：$file
	* 		：$post (default:'')
	* 		：$to_enc (default:UTF8)
	* 戻り値：FALSE or $cache_name;
	*
	* $to_encは	UTF-8 or SJIS or EUC-JPのいづれかとする
	*
	***************************************************************************/
	function assign_tmplate($file, $post = '', $to_enc = 'UTF-8')
	{
		/***************************************
		* デバッグモード
		* ※config.phpで設定：DEBUG
		****************************************/
		if (DEBUG) {
			new dBug($post);//$postをデバッグ表示
		}


		//引数の$fileがないときはFALSEを戻す
		if (empty($file)) {
			return FALSE;
		}

		//エンコードタイプのチェック(全角を半角英数字にして大文字に変更)
		$to_enc = strtoupper(mb_convert_kana( $to_enc, "a", SCRIPT_ENC));
		$flag = FALSE;
		foreach ( $this->encode_type as $k => $v ) {
			if ( $to_enc == $v ) {
				$flag = TRUE;
				break;
			}
		}
		if ( ! $flag ) {
			$this->error = '文字エンコードの引数を間違えています';
			return FALSE;
		}

		//キャッシュネームを作成
		$basename = basename($file);
		$cache_name = CACHEDIR.md5($this->magic).$basename.'.php';

		// ファイルをオープンして既存のコンテンツを取得
		//($currentの文字コードはテンプレのエンコーディング)
		$current = file_get_contents($file);

		//currentの中の<!--$hoge-->をエンコード済みの$post['hoge']に置換する
		//$post['hoge']は一次元配列のみ。２次元配列のPOSTはhtmlヘルパーで処理
		//<!--{*}-->タグの*を置換する

		//ターゲットとするテンプレタグに｜があるかどうか
		preg_match_all("/(<!--{).*(}-->)/U", $current ,$matches);

		//save_design_data配列用の処理
		//配列を組み合わせ$postに追加
		if (!empty($post) && is_array($post)) {
			foreach ($post as $k1 => $v1) {
				if ($k1 === 'save_design_data') {
					foreach ($v1 as $k2 => $v2) {
						$post[$k1.'['.$k2.']'] = $v2;
						// echo '<pre style="font-size:13px;">'; var_dump('save_design_data['.$k2.']', $v2); echo '</pre>';
					}
				}
			}
		}

		//テンプレタグを解析して、パラメータを加工する
		foreach ($matches[0] as $k => $v) {
			if (!empty($post) && is_array($post)) {
				//ポストパラメータのキーがテンプレタグ内に存在するか調べる
				foreach($post as $ak => $av) {
					//テンプレタグの中のインプットネーム部分のみを抽出する。
					$e = str_replace('<!--{$','',$v);
					$e = str_replace('}-->','',$e);

					// | があったら
					if ( strpos($e,'|') !== FALSE ) {
						$needle = strpos($e, '|');
						$e = substr($e,0,$needle);
					}

					//テンプレタグのネームと、ポストネームが一致したら
					if ( $ak == $e ) {
#					if ( strpos($v,$ak) !== FALSE ) {
						//|が存在する場合、|の数が０かどうかカウントする
						$n = substr_count($v, '|');
						if ( !empty($n) ) {
							if ( strpos($v, "escape") !== FALSE ) {
								$post[$ak] = htmlspecialchars($post[$ak],ENT_QUOTES);
							}

							if ( strpos($v, "chkmail") !== FALSE ) {
								$post[$ak] = htmlentities($post[$ak],ENT_QUOTES);
							}

							if ( strpos($v, "nl2br") !== FALSE ) {
								$post[$ak] = nl2br($post[$ak]);
							}

						}
						$search = $v;

						$post[$ak] = mb_convert_encoding($post[$ak],$to_enc, SCRIPT_ENC);
						$current = str_replace( $search, $post[$ak], $current );
					}

				}


			} else {
				$post = mb_convert_encoding($post,$to_enc, SCRIPT_ENC);
				$current = str_replace( $v, $post, $current );
			}
		}

		//エンコード済みのポストパラメータを埋め込んだhtmlをSJISに変換して戻す
		$encoded_file = $current;

		//キャッシュディレクトリにキャッシュファイルを作る(排他ロック)
		// LOCK_EX フラグは他の人が同時にファイルに書き込めない(accoding to manual)
		file_put_contents($cache_name, $encoded_file, LOCK_EX);

		return $cache_name;

	}//end of func





	/***************************************************************************
	* @public
	* メールに添付するホスト情報（送信日時、送信時間、曜日、ユーザエージェント、
	* リモートホスト、アクセス元IPアドレス、ホスト情報）を１次元配列で戻す。
	*
	* 引数	：無し
	* 戻り値：array
	*
	***************************************************************************/
	function host_info() {
		$entry_date = date("Y年n月j日");
		$entry_time = date("H:i:s");
		// 曜日
		$weekday	= array( "日", "月", "火", "水", "木", "金", "土" );
		$youbi		= '('.$weekday[date("w")].')';

		$ua = $_SERVER['HTTP_USER_AGENT'];
		$ip_addr = $_SERVER['REMOTE_ADDR'];
		$host = gethostbyaddr($ip_addr);
		return array(
			'DATE'		=> $entry_date ,
			'TIME'		=> $entry_time,
			'YOUBI'		=> $youbi,
			'UA'		=> $ua ,
			'IP'		=> $ip_addr ,
			'HOST'		=> $host
		);
	}





	/**************************************************************************
	* @public
	*
	* テキストの文字コードを変換する
	* 引数のテキストは２次元配列まで自動対応し、同次元で出力を戻す。
	* 失敗したときFALSEを戻す。成功したときはUTF-8にエンコードされた
	* テキストを戻す。
	* PHPのinternal_encodingは変更しない仕様とする。
	*
	* 引数	：$text
	* 		：$char_enc (default:SJIS)
	* 		：$from_enc (default:SJIS)
	* 戻り値：FALSE or $encoded_text
	*
	* $char_encは	UTF-8 or SJIS or EUC-JPのいずれかとする
	*
	***************************************************************************/
	function array_htmlspecialchars_decode($arr)
	{

		//引数の$textがないときはFALSEを戻す
		if (empty($arr) or !is_array($arr)) {
			return FALSE;
		}

		foreach($arr as $k1 => $v1){
			//$v1が二次元配列だったら
			if ( is_array($v1) ) {
				foreach($v1 as $k2 => $v2) {
					//テキストが空でなければ変換する。
					if ( !empty($v2) ) {
						//入力テキストがUTF-8かASCIIでなかったらFALSEを戻す
						$v2 = htmlspecialchars_decode($v2);
						$encoded_text[$k1][$k2] = $v2;
					} else {
					//テキストが空のときは、変換しないでそのまま格納
						$encoded_text[$k1][$k2] = $v2;
					}
				}//end foreach
			//$v1が一次元配列だったら
			} else {
				//テキストが空でなければ変換する。
				if ( !empty($v1) ) {
					$v1 = htmlspecialchars_decode($v1);
					$encoded_text[$k1] = $v1;
				} else {
					//テキストが空のときは、変換しないでそのまま格納
					$encoded_text[$k1] = $v1;
				}
			}
		}//end foreach
		return $encoded_text;
	}//end of func





	/**************************************************************************
	* @public
	*
	* ゲットパラメータをチェックする
	* 許可されていないパラメータが入力された場合は'ERROR'を戻す
	* 引数がエンプティの場合はFALSEを戻す
	*
	* 引数	：$get -- $_GET
	*
	* 戻り値：TRUE or FALSE or 'ERROR'
	*
	***************************************************************************/
	function check_get_parameter($get)
	{
		if (empty($get)) {
			return FALSE;
		}

		//許可パラメータをコンフィグファイルからinclude
		global $admit_get_key;
		global $admit_get_value;

		//初期化
		$flag_key 	= 0;
		$flag_value = 0;

		//フィルタリング
		if (is_array($get)) {
			//itemをチェック
			foreach ($get as $k => $v) {
				//二次元配列の場合
				if (is_array($v)) {
					return 'ERROR';
				}

				$v = htmlspecialchars($v);
				$k = htmlspecialchars($k);

				foreach ($admit_get_key as $k1 => $v1) {
					if ($v1 == $k) {

						$flag_key = 1;
						break 2;
					}
				}
			}

			foreach ($get as $k => $v) {

				foreach ($admit_get_value as $k2 => $v2) {
					if ($v2 == $v) {
						$flag_value = 1;
						break 2;
					}
				}
			}

		}

		if ($flag_value && $flag_key) {
			return $get;
		} else {
			return 'ERROR';
		}
	}




	/***
	* ディストラクタ
	*/
	function __distruct()
	{
	}

}//end of class
