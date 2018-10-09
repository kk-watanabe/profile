<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/../public/class/set.php'); //コンフィグファイル

//NEW新着情報用
$url = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"];
$news_id = 0;
$article_title = '';

if (isset($_GET['news_id']) && !empty($_GET['news_id'])) {
	$news_id  = $_GET['news_id'];
}

if (isset($news) && !empty($news)) {
	$info  = $news->get_data_from_news($news_id);

	if (isset($info['title'])) {
		$article_title = $info['title'];
	}
} else {
	if (isset($article_title)) {
		$article_title = '';
	}
}
?>
<!DOCTYPE html>
<html lang="ja" data-font-load="false">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-15901152-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'UA-15901152-1');
</script>

<meta charset="UTF-8">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo $sanitize->get_meta_description(); ?>">
<meta name="keywords" content="">
<title><?php echo $sanitize->get_meta_title($article_title); ?></title>
<link href="/assets/css/style.css" rel="stylesheet">
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/tag.php');?>
</head>
<body<?php echo ' id="'.$sanitize->get_meta_body_id().'"'; ?>
 data-load-complete="false"
 data-hide-complete="false"
 data-move-event="false"
 data-move-anime="scale">
