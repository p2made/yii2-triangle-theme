<?php
/**
 * about.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-triangle-theme
 * @license MIT
 */

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

// load assets...
p2made\theme\Triangle\assets\TriangleOpenAsset::register($this);

p2made\theme\Triangle\assets\LightboxAsset::register($this);
p2made\theme\Triangle\assets\TriangleMulticolorAsset::register($this);

p2made\theme\Triangle\assets\TriangleCloseAsset::register($this);

$this->title = $name;
$tagline = '';
?>
	<section id="error-page">
		<div class="error-page-inner">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12">
						<div class="text-center">
							<div class="bg-404">
								<div class="error-image">
									<h1><?= Html::encode($this->title) ?></h1>
									<!--<img class="img-responsive" src="/images/404.png" alt="">-->
								</div>
							</div>
							<h2>PAGE NOT FOUND</h2>
							<p>The page you are looking for might have been removed, had its name changed.</p>


							<p>name: <?= nl2br(Html::encode($name)) ?></p>
							<p>message: <?= nl2br(Html::encode($message)) ?></p>

							<a href="index.php" class="btn btn-error">RETURN TO THE HOMEPAGE</a>
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
