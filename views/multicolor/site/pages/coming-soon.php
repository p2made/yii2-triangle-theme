<?php
/**
 * coming-soon.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package yii2-triangle-theme
 * @license MIT
 */

/* @var $this yii\web\View */

use p2m\helpers\FA;

$this->title = 'About Us';

$assetDir = Yii::$app->assetManager->getPublishedUrl(
	'@vendor/p2made/yii2-triangle-theme/assets/lib/multicolor'
);

p2m\assets\WowAsset::register($this);
?>
<div id="content-wrapper">

	<div class="logo-image">
	   <a href="index.php"><img class="img-responsive" src="assets/img/logo.png" alt=""> </a>
	</div>
	<section id="coming-soon">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<div class="text-center coming-content">
						<h1>UNDER CONSTRUCTION</h1>
						<p>We have been spending long hours in order to launch our new website.
							We will offer freebies, a brand new blog and featured content of our latest work. Join our mailing list or follow us on<br /> Facebook or Twitter to stay up to date.</p>
						<div class="social-link">
							<span><a href="#"><i class="fa fa-facebook"></i></a></span>
							<span><a href="#"><i class="fa fa-twitter"></i></a></span>
							<span><a href="#"><i class="fa fa-google-plus"></i></a></span>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="time-count">
						<ul id="countdown">
							<li class="angle-one">
								<span class="days time-font">00</span>
								<p>Days</p>
							</li>
							<li class="angle-two">
								<span class="hours time-font">00</span>
								<p>Hours</p>
							</li>
							<li class="angle-three">
								<span class="minutes time-font">00</span>
								<p class="minute">Mins</p>
							</li>
							<li class="angle-four">
								<span class="seconds time-font">00</span>
								<p>Secs</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="subscribe">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<div class="row">
						<div class="col-sm-6">
							<h2><i class="fa fa-envelope-o"></i> SUBSCRIBE TO OUR NEWSLETTER</h2>
							<p>Quis filet mignon proident, laboris venison tri-tip commodo brisket aute ut. Tail salami pork belly, flank ullamco bacon bresaola do beef<br /> laboris venison tri-tip.</p>
						</div>
						<div class="col-sm-6 newsletter">
							<form id="newsletter">
								<input class="form-control" type="email" name="email"  value="" placeholder="Enter Your email">
								<i class="fa fa-check"></i>
							</form>
							<p>Don't worry we will not use your email for spam</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="coming-soon-footer" class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="text-center">
					<p>&copy; Your Company 2014. All Rights Reserved.</p>
					<p>Designed by <a target="_blank" href="http://www.themeum.com">Themeum</a></p>
				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript">
			//Countdown js
		 $("#countdown").countdown({
				date: "10 march 2015 12:00:00",
				format: "on"
			},
			function() {
				// callback function
		});
	</script>

</div>
