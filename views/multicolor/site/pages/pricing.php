<?php
/**
 * pricing.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-triangle-theme
 * @license MIT
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

// load assets...
p2made\theme\Triangle\assets\TriangleOpenAsset::register($this);

p2made\assets\PrettyPhotoAsset::register($this);
p2made\theme\Triangle\assets\LightboxAsset::register($this);
p2made\theme\Triangle\assets\TriangleMulticolorAsset::register($this);
p2made\assets\JqueryCountToAsset::register($this);

p2made\theme\Triangle\assets\TriangleCloseAsset::register($this);

$this->title = 'Pricing Table';
$tagline = 'configure your pricing table';
$this->params['breadcrumbs'][] = $this->title;
?>
	<section id="page-breadcrumb">
		<div class="vertical-center sun">
			<div class="container">
				<div class="row">
					<div class="action">
						<div class="col-sm-12">
							<h1 class="title"><?= Html::encode($this->title) ?></h1>
							<p><?= Html::encode($tagline) ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#action-->

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
							<li>Consectetur adipiscing <span><i class="fa fa-check"></i></span></li>
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
							<p class="plan-price"><span class="dollar-sign">$</span><span class="price">299</span><span class="month">/ Month</span></p>
						</div>
						<ul>
							<li>Lorem ipsum dolor <span><i class="fa fa-check"></i></span></li>
							<li>Consectetur adipiscing <span><i class="fa fa-check"></i></span></li>
							<li>Nulla pellentesque <span><i class="fa fa-times"></i></span> </li>
							<li> Integer quis risus <span><i class="fa fa-check"></i></span></li>
							<li>Phasellus et metus <span><i class="fa fa-check"></i></span></li>
							<li>Duis nec massa inter <span><i class="fa fa-check"></i></span></li>
						</ul>
						<a href="#" class="btn btn-buynow">Buy Now</a>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="single-price price-four">
						<div class="table-heading">
							<p class="plan-name">Platinum Plan</p>
							<p class="plan-price"><span class="dollar-sign">$</span><span class="price">699</span><span class="month">/ Month</span></p>
						</div>
						<ul>
							<li>Lorem ipsum dolor <span><i class="fa fa-check"></i></span></li>
							<li>Consectetur adipiscing <span><i class="fa fa-check"></i></span></li>
							<li>Nulla pellentesque <span><i class="fa fa-check"></i></span> </li>
							<li> Integer quis risus <span><i class="fa fa-check"></i></span></li>
							<li>Phasellus et metus <span><i class="fa fa-check"></i></span></li>
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
							<li>Consectetur adipiscing <span><i class="fa fa-check"></i></span></li>
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
							<li>Consectetur adipiscing <span><i class="fa fa-check"></i></span></li>
							<li>Nulla pellentesque <span><i class="fa fa-times"></i></span> </li>
							<li> Integer quis risus <span><i class="fa fa-check"></i></span></li>
							<li>Phasellus et metus <span><i class="fa fa-check"></i></span></li>
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
							<li>Consectetur adipiscing <span><i class="fa fa-check"></i></span></li>
							<li>Nulla pellentesque <span><i class="fa fa-check"></i></span> </li>
							<li> Integer quis risus <span><i class="fa fa-check"></i></span></li>
							<li>Phasellus et metus <span><i class="fa fa-check"></i></span></li>
							<li>Duis nec massa inter <span><i class="fa fa-check"></i></span></li>
						</ul>
					   <span class="btn-signup"><a href="#">sign up</a></span>
					</div>
				</div>
			</div>
		</div><!--/#price-table2-->
	</section>
