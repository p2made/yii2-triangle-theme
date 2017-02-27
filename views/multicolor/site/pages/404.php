<?php
/**
 * 404.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-triangle-theme
 * @license MIT
 */

/* @var $this yii\web\View */

use p2m\helpers\FA;

$this->title = '404 Error';

$assetDir = Yii::$app->assetManager->getPublishedUrl(
	'@vendor/p2made/yii2-triangle-theme/assets/lib/multicolor'
);
?>
<div id="content-wrapper">

	<section id="error-page">
		<div class="error-page-inner">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12">
						<div class="text-center">
							<div class="bg-404">
								<div class="error-image">
									<img class="img-responsive" src="assets/img/404.png" alt="">
								</div>
							</div>
							<h2>PAGE NOT FOUND</h2>
							<p>The page you are looking for might have been removed, had its name changed.</p>
							<a href="index.html" class="btn btn-error">RETURN TO THE HOMEPAGE</a>
							<div class="social-link">
								<span><a href="#"><i class="fa fa-facebook"></i></a></span>
								<span><a href="#"><i class="fa fa-twitter"></i></a></span>
								<span><a href="#"><i class="fa fa-google-plus"></i></a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</div>
