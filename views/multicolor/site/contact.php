<?php
/**
 * about.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package yii2-triangle-theme
 * @license MIT
 */

/* @var $this yii\web\View */

use p2m\helpers\FA;

$this->title = 'Contact Us';

$assetDir = Yii::$app->assetManager->getPublishedUrl(
	'@vendor/p2made/yii2-triangle-theme/assets/lib/multicolor'
);

p2m\assets\PrettyPhotoAsset::register($this);
p2m\assets\GMapsApiAsset::register($this);
p2m\assets\GMapsAsset::register($this);
p2m\assets\AnimateAsset::register($this);
p2m\assets\WowAsset::register($this);
?>
<div id="content-wrapper">

	<section id="page-breadcrumb">
		<div class="vertical-center sun">
			 <div class="container">
				<div class="row">
					<div class="action">
						<div class="col-sm-12">
							<h1 class="title">Contact US</h1>
							<p>Stay close</p>
						</div>
					</div>
				</div>
			</div>
		</div>
   </section>
	<!--/#action-->

	<section id="map-section">
		<div class="container">
			<div id="gmap"></div>
		</div>
	</section>
	<!--/#map-section-->

	<?= $this->render('_footer.php', ['assetDir' => $assetDir]) ?>

</div>
<!--
	<script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
-->
