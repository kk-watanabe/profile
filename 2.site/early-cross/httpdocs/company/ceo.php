<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/meta.php');?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/header.php');?>

	<main class="l-main">
		<?php $sanitize->get_headline(); ?>
		<!-- headline -->

		<div class="l-body">
			<?php $sanitize->get_page_path(); ?>
			<!-- パンくず -->

			<h1 class="c-ttl01" data-aos="fade-up">
				<span class="c-ttl01__main">代表挨拶</span>
			</h1>

			<div class="p-ceo c-contsFix01">
				<div class="p-ceo__img" data-aos="fade-left">
					<img src="/assets/img/company/ceo/photo.jpg" width="480" height="500" alt="" class="p-ceo__img--photo">
				</div>

				<div class="p-ceo__detail">
					<p class="p-ceo__detail--catch is-shs-jp-min" data-aos="fade-up">
						<strong class="p-ceo__detail--catch__in">
							スピード感ある事業展開で、<br>
							新たな価値を創造する。
						</strong>
					</p>

					<div class="c-sentence01 p-ceo__detail--txt">
						<p class="c-sentence01__txt" data-aos="fade-up">
							当社は、2008年に当時私が勤めていた会社から独立し、セールプロモーションを中心とする販促支援の会社として創業したのがはじまりです。<br>
							私ただ一人からのスタートではありましたが、事業をスピード感を持って、ダイナミックに展開していきたいという想いが、サッカーのアーリークロスのイメージに重なり、社名にしました。
						</p>
						<p class="c-sentence01__txt" data-aos="fade-up">
							2010年には、サラリーマン時代からチャレンジしたいと考えていたネット通販事業に参入。<br>
							当初は思うように売上も上がりませんでしたが、諦めることなく、試行錯誤を繰り返す中で着実にノウハウを蓄積。黒字化するまでには相応の時間も要しましたが、継続的な改善を行ない続けることで、ノベルティ関連多数の通販サイトを展開するまでに拡大。<br>
							現在では、ネット通販を通して全国のお客様にサービスを提供する「EC事業」が、柱となっています。
						</p>
						<p class="c-sentence01__txt" data-aos="fade-up">
							今後は、EC事業を中心に、ノベルティ業界では一番と呼ばれる存在を目指し、より多くのお客様に、より高いクオリティのサービスを届けてまいります。<br>
							さらには、既存のフィールドにのみとらわれることなく、積極的に新しい試みにもチャレンジを続けていくことで、さらなる成長ドライブを描いていく覚悟です。
						</p>
					</div>

					<p class="p-ceo__detail--name" data-aos="fade-up">
						株式会社アーリークロス　代表取締役<br>
						<span class="is-shs-jp-min">佐藤　智裕</span>
					</p>
					<!-- /.name -->
				</div>
			</div>
		</div>
	</main><!-- /#main -->

	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/parts/company_navi.php');?>
	<?php require($_SERVER['DOCUMENT_ROOT'].'/assets/inc/parts/contact.php');?>

	</div><!-- /.barba-container -->
	</div><!-- /#barba-wrapper -->

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/footer.php');?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/end.php');?>
