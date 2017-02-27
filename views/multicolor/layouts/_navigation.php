<?php
/**
 * _navigation.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-triangle-theme
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\ArrayHelper;
use p2m\helpers\FA;

NavBar::begin([
	'brandLabel' => 'P2 Modern Business',
	'brandUrl' => Yii::$app->homeUrl,
	'options' => [
		'class' => 'navbar navbar-inverse navbar-fixed-top',
	],
]);
$menuItems = [
	['label' => 'About', 'url' => ['/site/about']],
	['label' => 'Services', 'url' =>['/site/page', 'view' => 'services']],
	['label' => 'Contact', 'url' => ['/site/contact']],
	['label' => 'Portfolio', 'url' =>'#', 'items' => [
		['label' => '1 Column Portfolio', 'url' =>['/site/page', 'view' => 'portfolio-1-col']],
		['label' => '2 Column Portfolio', 'url' =>['/site/page', 'view' => 'portfolio-2-col']],
		['label' => '3 Column Portfolio', 'url' =>['/site/page', 'view' => 'portfolio-3-col']],
		['label' => '4 Column Portfolio', 'url' =>['/site/page', 'view' => 'portfolio-4-col']],
		['label' => 'Single Portfolio Item', 'url' =>['/site/page', 'view' => 'portfolio-item']],
	]],
	['label' => 'Blog', 'url' =>'#', 'items' => [
		['label' => 'Blog Home 1', 'url' =>['/site/page', 'view' => 'blog-home-1']],
		['label' => 'Blog Home 2', 'url' =>['/site/page', 'view' => 'blog-home-2']],
		['label' => 'Blog Post', 'url' =>['/site/page', 'view' => 'blog-post']],
	]],
	['label' => 'Other Pages', 'url' =>'#', 'items' => [
		['label' => 'Full Width Page', 'url' =>['/site/page', 'view' => 'full-width']],
		['label' => 'Sidebar Page', 'url' =>['/site/page', 'view' => 'sidebar']],
		['label' => 'FAQ', 'url' =>['/site/page', 'view' => 'faq']],
		['label' => 'Pricing Table', 'url' =>['/site/page', 'view' => 'pricing']],
		['label' => '404', 'url' =>['/site/page', 'view' => '404']],
	]],
];
if (Yii::$app->user->isGuest) {
	$menuItems[] = ['label' => 'Users', 'url' =>'#', 'items' => [
		['label' => 'Signup', 'url' => ['/site/signup']],
		['label' => 'Login', 'url' => ['/site/login']],
	]];
} else {
	$menuItems[] = [
		'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
		'url' => ['/site/logout'],
		'linkOptions' => ['data-method' => 'post']
	];
}
echo Nav::widget([
	'options' => ['class' => 'navbar-nav navbar-right'],
	'items' => $menuItems,
]);
NavBar::end();
?>

<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 overflow">
			   <div class="social-icons pull-right">
					<ul class="nav nav-pills">
						<li><a href=""><i class="fa fa-facebook"></i></a></li>
						<li><a href=""><i class="fa fa-twitter"></i></a></li>
						<li><a href=""><i class="fa fa-google-plus"></i></a></li>
						<li><a href=""><i class="fa fa-dribbble"></i></a></li>
						<li><a href=""><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		 </div>
	</div>
	<div class="navbar navbar-inverse" role="banner">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<a class="navbar-brand" href="index.html">
					<h1><img src="assets/img/logo.png" alt="logo"></h1>
				</a>

			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="index.php">Home</a></li>
					<li class="dropdown"><a href="#">Pages <i class="fa fa-angle-down"></i></a>
						<ul role="menu" class="sub-menu">
							<li><a href="aboutus.php">About</a></li>
							<li><a href="aboutus2.php">About 2</a></li>
							<li><a href="service.php">Services</a></li>
							<li><a href="pricing.php">Pricing</a></li>
							<li><a href="contact.php">Contact us</a></li>
							<li><a href="contact2.php">Contact us 2</a></li>
							<li><a href="404.php">404 error</a></li>
							<li><a href="coming-soon.php">Coming Soon</a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="blog.php">Blog <i class="fa fa-angle-down"></i></a>
						<ul role="menu" class="sub-menu">
							<li><a href="blog.php">Blog Default</a></li>
							<li><a href="blogtwo.php">Timeline Blog</a></li>
							<li><a href="blogone.php">2 Columns + Right Sidebar</a></li>
							<li><a href="blogthree.php">1 Column + Left Sidebar</a></li>
							<li><a href="blogfour.php">Blog Masonary</a></li>
							<li><a href="blogdetails.php">Blog Details</a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="portfolio.php">Portfolio <i class="fa fa-angle-down"></i></a>
						<ul role="menu" class="sub-menu">
							<li><a href="portfolio.php">Portfolio Default</a></li>
							<li><a href="portfoliofour.php">Isotope 3 Columns + Right Sidebar</a></li>
							<li><a href="portfolioone.php">3 Columns + Right Sidebar</a></li>
							<li><a href="portfoliotwo.php">3 Columns + Left Sidebar</a></li>
							<li><a href="portfoliothree.php">2 Columns</a></li>
							<li><a href="portfolio-details.php">Portfolio Details</a></li>
						</ul>
					</li>
					<li><a href="shortcodes.html ">Shortcodes</a></li>
				</ul>
			</div>
			<div class="search">
				<form role="form">
					<i class="fa fa-search"></i>
					<div class="field-toggle">
						<input type="text" class="search-form" autocomplete="off" placeholder="Search">
					</div>
				</form>
			</div>
		</div>
	</div>
</header>
