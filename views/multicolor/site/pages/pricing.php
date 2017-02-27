<?php
/**
 * pricing.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-triangle-theme
 * @license MIT
 */

/* @var $this yii\web\View */

use p2m\helpers\FA;

$this->title = 'Pricing Table';

$assetDir = Yii::$app->assetManager->getPublishedUrl(
	'@vendor/p2made/yii2-triangle-theme/assets/lib/multicolor'
);

p2m\assets\AnimateAsset::register($this);
p2m\assets\Lightbox2Asset::register($this);
p2m\assets\WowAsset::register($this);
?>
<div id="content-wrapper">

   <section id="page-breadcrumb">
		<div class="vertical-center sun">
			 <div class="container">
				<div class="row">
					<div class="action">
						<div class="col-sm-12">
							<h1 class="title">Pricing Table</h1>
							<p>configure your pricing table</p>
						</div>
					</div>
				</div>
			</div>
		</div>
   </section>
	<!--/#action-->

	<section class="container">
		<div class="price-table">
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<div class="single-price price-one">
						<div class="table-heading">
							<p class="plan-name">Basic Plan</p>
							<p class="plan-price"><span class="dollar-sign">$</span><span class="price">29</span><span class="month">/ Month</span></p>
						</div>
						<ul>
							<li>Lorem ipsum dolor <span><i class="fa fa-check"></i></span></li>
							<li>Consectetur adipiscing <span><i class="fa fa-times"></i></span></li>
							<li>Nulla pellentesque <span><i class="fa fa-times"></i></span> </li>
							<li> Integer quis risus <span><i class="fa fa-check"></i></span></li>
							<li>Phasellus et metus <span><i class="fa fa-times"></i></span></li>
							<li>Duis nec massa inter <span><i class="fa fa-check"></i></span></li>
						</ul>
						<a href="#" class="btn btn-buynow">Buy Now</a>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="single-price price-two">
						<div class="table-heading">
							<p class="plan-name">Silver Plan</p>
							<p class="plan-price"><span class="dollar-sign">$</span><span class="price">89</span><span class="month">/ Month</span></p>
						</div>
						<ul>
							<li>Lorem ipsum dolor <span><i class="fa fa-check"></i></span></li>
							<li>Consectetur adipiscing <span><i class="fa fa-times"></i></span></li>
							<li>Nulla pellentesque <span><i class="fa fa-times"></i></span> </li>
							<li> Integer quis risus <span><i class="fa fa-check"></i></span></li>
							<li>Phasellus et metus <span><i class="fa fa-times"></i></span></li>
							<li>Duis nec massa inter <span><i class="fa fa-check"></i></span></li>
						</ul>
						<a href="#" class="btn btn-buynow btn-hightlight">Buy Now</a>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="single-price price-three">
						<div class="table-heading">
							<p class="plan-name">Glod Plan</p>
							<p class="plan-price"><span class="dollar-sign">$</span><span class="price">29</span><span class="month">/ Month</span></p>
						</div>
						<ul>
							<li>Lorem ipsum dolor <span><i class="fa fa-check"></i></span></li>
							<li>Consectetur adipiscing <span><i class="fa fa-times"></i></span></li>
							<li>Nulla pellentesque <span><i class="fa fa-times"></i></span> </li>
							<li> Integer quis risus <span><i class="fa fa-check"></i></span></li>
							<li>Phasellus et metus <span><i class="fa fa-times"></i></span></li>
							<li>Duis nec massa inter <span><i class="fa fa-check"></i></span></li>
						</ul>
						<a href="#" class="btn btn-buynow">Buy Now</a>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="single-price price-four">
						<div class="table-heading">
							<p class="plan-name">Platinum Plan</p>
							<p class="plan-price"><span class="dollar-sign">$</span><span class="price">29</span><span class="month">/ Month</span></p>
						</div>
						<ul>
							<li>Lorem ipsum dolor <span><i class="fa fa-check"></i></span></li>
							<li>Consectetur adipiscing <span><i class="fa fa-times"></i></span></li>
							<li>Nulla pellentesque <span><i class="fa fa-times"></i></span> </li>
							<li> Integer quis risus <span><i class="fa fa-check"></i></span></li>
							<li>Phasellus et metus <span><i class="fa fa-times"></i></span></li>
							<li>Duis nec massa inter <span><i class="fa fa-check"></i></span></li>
						</ul>
						<a href="#" class="btn btn-buynow">Buy Now</a>
					</div>
				</div>
			</div>
		</div><!--/#price-table-->
	</section>

	<section class="container">
		<div class="price-table2">
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<div class="single-table table-one">
						<div class="table-header">
							<h2>Basic</h2>
							<p class="plan-price"><span class="dollar-sign">$</span><span class="price">29</span><span class="month">/ Month</span></p>
						</div>
						 <ul>
							<li>Lorem ipsum dolor <span><i class="fa fa-check"></i></span></li>
							<li>Consectetur adipiscing <span><i class="fa fa-times"></i></span></li>
							<li>Nulla pellentesque <span><i class="fa fa-times"></i></span> </li>
							<li> Integer quis risus <span><i class="fa fa-check"></i></span></li>
							<li>Phasellus et metus <span><i class="fa fa-times"></i></span></li>
							<li>Duis nec massa inter <span><i class="fa fa-check"></i></span></li>
						</ul>
						<span class="btn-signup"><a href="#">sign up</a></span>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="single-table table-two">
						<div class="table-header">
							<h2>Silver</h2>
							<p class="plan-price"><span class="dollar-sign">$</span><span class="price">89</span><span class="month">/ Month</span></p>
						</div>
						 <ul>
							<li>Lorem ipsum dolor <span><i class="fa fa-check"></i></span></li>
							<li>Consectetur adipiscing <span><i class="fa fa-times"></i></span></li>
							<li>Nulla pellentesque <span><i class="fa fa-times"></i></span> </li>
							<li> Integer quis risus <span><i class="fa fa-check"></i></span></li>
							<li>Phasellus et metus <span><i class="fa fa-times"></i></span></li>
							<li>Duis nec massa inter <span><i class="fa fa-check"></i></span></li>
						</ul>
						<span class="btn-signup"><a href="#">sign up</a></span>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="single-table table-three">
					   <div class="table-header">
							<h2>Gold</h2>
							<p class="plan-price"><span class="dollar-sign">$</span><span class="price">299</span><span class="month">/ Month</span></p>
						</div>
						 <ul>
							<li>Lorem ipsum dolor <span><i class="fa fa-check"></i></span></li>
							<li>Consectetur adipiscing <span><i class="fa fa-times"></i></span></li>
							<li>Nulla pellentesque <span><i class="fa fa-times"></i></span> </li>
							<li> Integer quis risus <span><i class="fa fa-check"></i></span></li>
							<li>Phasellus et metus <span><i class="fa fa-times"></i></span></li>
							<li>Duis nec massa inter <span><i class="fa fa-check"></i></span></li>
						</ul>
					   <span class="btn-signup"><a href="#">sign up</a></span>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="single-table table-four">
						<div class="table-header">
							<h2>Platinum</h2>
							<p class="plan-price"><span class="dollar-sign">$</span><span class="price">699</span><span class="month">/ Month</span></p>
						</div>
						 <ul>
							<li>Lorem ipsum dolor <span><i class="fa fa-check"></i></span></li>
							<li>Consectetur adipiscing <span><i class="fa fa-times"></i></span></li>
							<li>Nulla pellentesque <span><i class="fa fa-times"></i></span> </li>
							<li> Integer quis risus <span><i class="fa fa-check"></i></span></li>
							<li>Phasellus et metus <span><i class="fa fa-times"></i></span></li>
							<li>Duis nec massa inter <span><i class="fa fa-check"></i></span></li>
						</ul>
					   <span class="btn-signup"><a href="#">sign up</a></span>
					</div>
				</div>
			</div>
		</div><!--/#price-table2-->
	</section>

	<?= $this->render('../_footer.php', ['assetDir' => $assetDir]) ?>

</div>
