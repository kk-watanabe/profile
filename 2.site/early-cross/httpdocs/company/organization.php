<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/meta.php');?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/header.php');?>

	<main class="l-main">
		<?php $sanitize->get_headline(); ?>
		<!-- headline -->

		<div class="l-body">
			<?php $sanitize->get_page_path(); ?>
			<!-- パンくず -->

			<h1 class="c-ttl01" data-aos="fade-up">
				<span class="c-ttl01__main">組織概要</span>
			</h1>

			<figure class="c-figure01" data-aos="zoom-in">
				<img src="/assets/img/company/organization/figure.png" width="749" height="740" alt="株式会社アーリークロスの組織概要は以下のようになっております。一番上に取締役会、次に代表取締役、その下に生産・品質管理部門、経営企画・マーケティング部、総務・経理部があります。生産・品質管理部門の下にはSP事業部、EC事業部、制作部、製造部の4つの部門があります。それぞれの部門には2つの課があります。SP事業部の下には営業一課と営業二課。EC事業部の下にはノベルティ販売促進グループ営業一課とノベルティ販売促進グループ営業二課。制作部にはクリエイティブ課とDTP課。製造部には製造と出荷があります。総務・経理部の下には総務と
				経理があります。経営企画・マーケティング部の下はありません。以上が株式会社アーリークロスの組織概要になります。">
			</figure>
		</div>
	</main><!-- /#main -->

	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/parts/company_navi.php');?>
	<?php require($_SERVER['DOCUMENT_ROOT'].'/assets/inc/parts/contact.php');?>

	</div><!-- /.barba-container -->
	</div><!-- /#barba-wrapper -->

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/footer.php');?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/end.php');?>
