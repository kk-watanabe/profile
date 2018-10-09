<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/meta.php');?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/header.php');?>

	<main class="l-main">
		<?php $sanitize->get_headline(); ?>

		<div class="l-body">
			<?php $sanitize->get_page_path(); ?>
			<!-- パンくず -->

			<div class="c-sentence01" data-aos="fade-up">
				<p class="c-sentence01__txt">
					アーリークロスでは、「EC事業」と「SP事業」を二軸に事業を推進。<br>
					ネット通販を通じて、全国のお客様にノベルティグッズ等を提供する「EC事業」と、<br>
					お客様の販促ツールを企画立案からイベント実施まで支援する「SP事業」を展開しています。
				</p>
			</div>

			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/parts/business_navi.php');?>
		</div>
	</main><!-- /#main -->

	<?php require($_SERVER['DOCUMENT_ROOT'].'/assets/inc/parts/contact.php');?>
	</div><!-- /.barba-container -->
	</div><!-- /#barba-wrapper -->

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/footer.php');?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/end.php');?>
