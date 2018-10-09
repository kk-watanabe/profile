<?php
require_once(BASEDIR.'config.php');
require_once(BASEDIR.'setting.php');
/*******************************************************************************
* モバイルフォーム用HTMLヘルパー提供クラス
* Copyright(c) Respect CO.,LTD. All Rights Reserved.
* @Author : K.Sasaki@ Respect CO.,LTD
* @access : public
* New Release : 2010.10.13
* Last Modify : -
*
* ■このスクリプトはUTF-8で要エンコード！！
* php5専用（php4非対応）

* このクラスは、モバイルフォームテンプレートへSELECT,RADIO,CHECKBOXなどの
* HTMLを提供する。またポストパラメータからhiddenタグを提供する。
*
*******************************************************************************/
class html_helper01{

	//エラーを初期化
	var $error = '';

	//エラーを初期化
	var $param = array();

	//文字エンコードの定義
	var $encode_type = array('UTF-8', 'SJIS', 'EUC-JP');

	//フォームクラスのインスタンス
	var $form = '';

	/**************************************************************************
	* @public
	*
	* コンストラクタ
	*
	* checkbox,selectbox,radiobuttonのの設定を読み込む
	* formクラスのインスタンスを作成し、メンバ変数に代入
	*
	***************************************************************************/
	function __construct()
	{
		//コンフィグファイルから、入力パラメータを読みメンバ変数に登録
		global $param;
		$this->param = $param;

		//formクラスのインスタンス
		$this->form = new mobile_core;
	}




	/**************************************************************************
	* @public
	*
	* チェックボックスのhtmlを提供する
	* 引数にエラーがあるときはFALSEを戻す。
	*
	*
	* 引数	：$set,$post
	* 戻り値：$html or FALSE
	*
	***************************************************************************/
	function checkbox($set, $post, $setting)
	{
		//セッティングパラメータがないときはFALSEを戻す
		if ( empty($set) ) {
			return FALSE;
		}

		//$postをUTF8にエンコーディング
		if ( !empty($post) ) {
			$post = explode(',', $post);
			$post = array_filter($post, "strlen");
			$post = array_values($post);
			$post = $this->form->array_convert_encoding($post, SCRIPT_ENC, TPL_ENC);
		}

		// [] をパラメータ名から除去
		$set_arr = str_replace("[]","",$set);

		//初期化
		$html    = '';

		//親要素作成
		if ($setting['parent']) {
			$parent_class = '';
			$parent_other = '';

			//親要素のclass
			if ($setting['parent_class']) {
				$parent_class = ' class="'.$setting['parent_class'].'"';
			}

			//親要素のその他の属性
			if ($setting['parent_other']) {
				$parent_other = ' '.$setting['parent_other'].'"';
			}

			$html .= '<'.$setting['parent_tag'].$parent_class.$parent_other.'>';
		}

		//子要素作成
		if ($setting['child']) {
			$child_class = '';
			$child_other = '';
			$child_tag   = '';

			//子要素のclass
			if ($setting['child_class']) {
				$child_class = ' class="'.$setting['child_class'].'"';
			}

			//親要素のその他の属性
			if ($setting['child_other']) {
				$child_other = ' '.$setting['child_other'].'"';
			}

			$child_tag .= '<'.$setting['child_tag'].$child_class.$child_other.'>';
		}

		$n = 1;
		//checkboxが配列だった場合
		foreach($this->param[$set] as $k => $v) {
			$checked     = '';
			$input_other = '';

			if (!empty($post) && in_array($k, $post)) {
				$checked = ' checked';
			}

			if ($setting['input_other']) {
				$input_other = ' '.$setting['input_other'];
			}

			//子要素作成
			if ($setting['child']) {
				$html .= $child_tag;
			}

			$html .= '<input type="checkbox" name="'.$set.'[]" id="f'.$set.$n.'" value="'.$k.'" class="p-checkbox01__input"'.$checked.$input_other.'>';
			$html .= '<label for="f'.$set.$n.'" class="p-checkbox01__label"><span class="p-checkbox01__icon"></span>'.$v.'</label>';

			//子要素作成
			if ($setting['child']) {
				$html .= '</'.$setting['child_tag'].'>';
			}

			$n++;
		}

		//親要素閉じ作成
		if ($setting['parent']) {
			$html .= '</'.$setting['parent_tag'].'>';
		}

		//$htmlをSJISにエンコーディング
		$html = mb_convert_encoding($html, TPL_ENC, SCRIPT_ENC);

		return $html;
	}





	/**************************************************************************
	* @public
	*
	* セレクトボックスのhtmlを提供する
	* 引数にエラーがあるときはFALSEを戻す。
	*
	*
	* 引数	：$set,$post
	* 戻り値：$html or FALSE
	*
	***************************************************************************/
	function selectbox($set, $post, $class = 'select01', $id = "")
	{

		//セッティングパラメータがないときはFALSEを戻す
		if ( empty($set) ) {
			return FALSE;
		}

		//初期化
		$html = '';

		$html .= "<select name=\"".$set."\" class=\"".$class."\" id=\"".$id."\">\n";
		foreach($this->param[$set] as $k => $v) {

			$html .= "<option value=\"".$v."\"";

			if ($v == $post[$set]) {
				$html .= " selected = selected";
			}

			$html .= ">".$k."</option>\n";
		}
		$html .= "</select>\n";

		//$htmlをSJISにエンコーディング
		$html = mb_convert_encoding($html, TPL_ENC, SCRIPT_ENC);

		return $html;
	}





	/**************************************************************************
	* @public
	*
	* ラジオボタンのhtmlを提供する
	* 引数にエラーがあるときはFALSEを戻す。
	*
	*
	* 引数	：$set,$post
	* 戻り値：$html or FALSE
	*
	***************************************************************************/
	function radio_btn($set, $post)
	{
		//セッティングパラメータがないときはFALSEを戻す
		if ( empty($set) ) {
			return FALSE;
		}

		//$postをUTF8にエンコーディング
		$default_checked = FALSE;
		//$postvalueをUTF8にエンコーディング

		if ( !empty($post) ) {
#			$postvalue = $this->form->array_convert_encoding($postvalue, SCRIPT_ENC, TPL_ENC);
		} else {
			$default_checked = TRUE;
		}

		//初期化
		$html = '';
		$n = '';

		//デフォルトchecked
		if ($set == 'katanuki' && empty($post[$set])) {
			$post[$set] = 'しない';
		}
		if ($set == 'katanuki_object' && empty($post[$set])) {
			$post[$set] = '';
		}

		//製品タイプ
		if ($set == 'item_select') {
			//デフォルトchecked
			if (empty($post[$set])) {
				$post[$set] = 'カバー無しタイプ';
			}


			$html .= '<ul class="itemSelect">';

			$num = 1;
			$n = 0;
			foreach($this->param[$set] as $k => $v) {
				if ($k === 'その他') {
					$html .= '</ul><div class="otherTtl"><label><input type="radio" name="'.$set.'" value="'.$v.'"';
					if ($v == $post[$set]) {
						$html .= " checked";
					} else
					if ( $default_checked && $n === 0) {
						$html .= " checked";
					}

					$html .= '>'.$v.'</label></div>';
				} else {
					$html .= "<li><label><img src=\"/img/contact/item/item".$num.".jpg\" width=\"120\" height=\"120\" alt=\"\">";
					$html .= "<div class=\"name\"><input type=\"radio\" name=\"".$set."\" value=\"".$v."\"";
					if ($v == $post[$set]) {
						$html .= " checked";
					} else
					if ( $default_checked && $n === 0) {
						$html .= " checked";
					}

					$html .= '>';
					$html .= $k."</div></label></li>\n";
				}

				$num++;
			}
		} else {
			$n = 0;
			foreach($this->param[$set] as $k => $v) {
				$html .= "<li><input type=\"radio\" name=\"".$set."\" id=\"".$k."\" value=\"".$v."\"";

				if ($v == $post[$set]) {
					$html .= " checked";
				} else
				if ( $default_checked && $n === 0) {
					$html .= " checked";
				}

				$html .= ">";

				$html .= "<label for=\"".$k."\">".$k."</label></li>\n";
			}
		}


		//$htmlをSJISにエンコーディング
		$html = mb_convert_encoding($html, TPL_ENC, SCRIPT_ENC);

		return $html;
	}//end fo func





	/**************************************************************************
	* @private
	*
	* ポストパラメータから二次元配列までのhiddenタグを戻す
	*
	*
	* 引数	：$post
	* 戻り値：TRUE or FALSE
	*
	***************************************************************************/
    function hidden_tag($post)
    {
    	$file = false;

		if (empty($post) or !is_array($post)) {
			return FALSE;
		}

		//初期化
		$html = '';

		foreach ($post as $k1 => $v1) {
			//submit系のpostパラメータを対象外とする
			if (
				   $k1 == SUBMIT_NAME || $k1 == SUBMIT_NAME."_x" || $k1 == SUBMIT_NAME.".x"
				||                       $k1 == SUBMIT_NAME."_y" || $k1 == SUBMIT_NAME.".y"
				|| $k1 == SEND_NAME || $k1 == SUBMIT_NAME."_x" || $k1 == SUBMIT_NAME.".x"
				||                     $k1 == SUBMIT_NAME."_y" || $k1 == SUBMIT_NAME.".y"
				|| $k1 == RETRY_INPUT || $k1 == RETRY_INPUT."_x" || $k1 == RETRY_INPUT.".x"
				||                       $k1 == RETRY_INPUT."_y" || $k1 == RETRY_INPUT.".y"
  		)  {
				continue;
			}

			//二次元配列だったら
			if ( is_array($v1) ) {
				$val = '';
				foreach ($v1 as $k2 => $v2) {
					//ポスト値にスペシャルキャラクターをはさむ
					$v2 = htmlspecialchars($v2,ENT_QUOTES);
					$val .= $v2.',';
				}

				$html .= "<input type=\"hidden\" name=\"".$k1."\" value=\"".$val."\" />\n";

			//一次元配列だったら
			} else {
				//ポスト値にスペシャルキャラクターをはさむ
				$v1 = htmlspecialchars($v1,ENT_QUOTES);

				$html .= "<input type=\"hidden\" name=\"".$k1."\" value=\"".$v1."\" />\n";
			}
		}

		//$htmlをSJISにエンコーディング
		$html = mb_convert_encoding($html, TPL_ENC, SCRIPT_ENC);


		return $html;
    }





	/**************************************************************************
	* @public
	*
	* サービス名を戻す
	*
	*
	* 引数	：$get
	* 戻り値：$str or FALSE
	*
	***************************************************************************/
    function get_service_name($get)
    {

		if (empty($get['shop']) ) {
			return "サービス名が不明";
		}

		//初期化
		$str = '';



		if (isset($get['cms']) && !empty($get['cms'])) {
			switch($get['cms']) {
				case 'mt' :
				$str = "MovableTypeコーディング";
				break;

				case 'wp':
				$str = "Wordpressコーディング";
				break;

				case 'xoops':
				$str = "Xoopsコーディング";
				break;

				case 'openpne':
				$str = "OpenPNEコーディング";
				break;

				case 'joomla':
				$str = "joomla!コーディング";
				break;

				case 'jimdo':
				$str = "Jimdoコーディング";
				break;

				case '';
				break;
			}//end of switch

			$str .= "<input type=\"hidden\" name=\"service_name\" value=\"".$str."\" />\n";

		}

		if (isset($get['shop']) && !empty($get['shop'])) {
			switch($get['shop']) {
				case 'rakuten' :
				$str = "楽天市場コーディング";
				break;

				case 'ocha' :
				$str = "おちゃのこネットコーディング";
				break;

				case 'color' :
				$str = "カラーミーショップコーディング";
				break;

				case 'zencart' :
				$str = "ZENCARTコーディング";
				break;

				case 'yahoo' :
				$str = "Yahoo!ショッピングコーディング";
				break;

				case 'eccube' :
				$str = "EC-CUBEコーディング";
				break;

				case '';
				break;
			}//end of switch

			$str .= "<input type=\"hidden\" name=\"service_name\" value=\"".$str."\" />\n";
		}//end of if


		return $str;
	}//end of func





	/**************************************************************************
	* @public
	*
	* ラジオボタンのhtmlを提供する
	* 引数にエラーがあるときはFALSEを戻す。
	*
	*
	* 引数	：$post,$get
	* 戻り値：$html or FALSE
	*
	***************************************************************************/
	function get_plan_name($post,$get)
	{
		//定義をコンフィグファイルから読み込む
		global $plan_array;

		//$postをUTF8にエンコーディング
		if ( !empty($post) ) {
			$post = $this->form->array_convert_encoding($post, SCRIPT_ENC, TPL_ENC);
		}

		//mode確定
		if (isset($get['cms']) && !empty($get['cms'])) {
			$mode = $get['cms'];
		} else
		if (isset($get['shop']) && !empty($get['shop'])) {
			$mode = $get['shop'];
		} else {
			return FALSE;
		}

		//初期化
		$html = '';

		//デフォルトchecked
		if ( !isset($post['plan']) && $post['plan'] == '') {
			$post[$set] = '';
		}

		foreach($plan_array as $k1 => $v1) {

			if ($k1 == $mode) {
				foreach($v1 as $k2 => $v2) {
					$html .= "<li><input type=\"radio\" name=\"plan\" id=\"".$v2."\" value=\"".$v2."\"";
					if ($v2 == $post['plan']) {
						$html .= " checked";
					} else
					//デフォルトchecked
					if ( !isset($post['plan']) && $post['plan'] == '' && empty($k2)) {
						$html .= " checked";
					}

					$html .= ">";

					$html .= "<label for=\"".$v2."\">".$v2."</label></li>\n";
				}
			}
		}

		//$htmlをSJISにエンコーディング
		$html = mb_convert_encoding($html, TPL_ENC, SCRIPT_ENC);

		return $html;
	}//end fo func



	/**************************************************************************
	* @public
	*
	* サービス名を戻す
	*
	*
	* 引数	：$get
	* 戻り値：$str or FALSE
	*
	***************************************************************************/
    function disp_checkbox_value($set = '',$postvalue)
    {
		//初期化
		$html = '';
		if (empty($set)) {
			return $html;
		}

		if (empty($postvalue[$set]) or !is_array($postvalue[$set])) {
			return $html;
		}

		foreach ($postvalue[$set] as $k => $v) {
			if ($k === 0) {
				$html .= $v;
			} else {
				$html .= '<br>'.$v;
			}
		}

		return $html;
	}//end of func
}//end of class
