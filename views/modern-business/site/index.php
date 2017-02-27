<?php
/**
 * index.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-triangle-theme
 * @license MIT
 */

/* @var $this yii\web\View */

use yii\bootstrap\Html;
use p2m\helpers\FA;

$this->title = 'Home';
?>

<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<div class="item active">
			<div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
			<div class="carousel-caption">
				<h2>Caption 1</h2>
			</div>
		</div>
		<div class="item">
			<div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
			<div class="carousel-caption">
				<h2>Caption 2</h2>
			</div>
		</div>
		<div class="item">
			<div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
			<div class="carousel-caption">
				<h2>Caption 3</h2>
			</div>
		</div>
	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="icon-prev"></span>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="icon-next"></span>
	</a>
</header>

<!-- Page Content -->
<div class="container">

	<!-- Marketing Icons Section -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">
					Welcome to Modern Business
			</h1>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4><i class="fa fa-fw fa-check"></i> Bootstrap v3.3.7</h4>
				</div>
				<div class="panel-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
					<a href="#" class="btn btn-default">Learn More</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4><i class="fa fa-fw fa-gift"></i> Free &amp; Open Source</h4>
				</div>
				<div class="panel-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
					<a href="#" class="btn btn-default">Learn More</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4><i class="fa fa-fw fa-compass"></i> Easy to Use</h4>
				</div>
				<div class="panel-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
					<a href="#" class="btn btn-default">Learn More</a>
				</div>
			</div>
		</div>
	</div>
	<!-- /.row -->

	<!-- Portfolio Section -->
	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header">Portfolio Heading</h2>
		</div>
		<div class="col-md-4 col-sm-6">
			<a href="portfolio-item.html">
				<img src="http://placehold.it/700x450" alt="" class="img-responsive img-portfolio img-hover">
			</a>
		</div>
		<div class="col-md-4 col-sm-6">
			<a href="portfolio-item.html">
				<img src="http://placehold.it/700x450" alt="" class="img-responsive img-portfolio img-hover">
			</a>
		</div>
		<div class="col-md-4 col-sm-6">
			<a href="portfolio-item.html">
				<img src="http://placehold.it/700x450" alt="" class="img-responsive img-portfolio img-hover">
			</a>
		</div>
		<div class="col-md-4 col-sm-6">
			<a href="portfolio-item.html">
				<img src="http://placehold.it/700x450" alt="" class="img-responsive img-portfolio img-hover">
			</a>
		</div>
		<div class="col-md-4 col-sm-6">
			<a href="portfolio-item.html">
				<img src="http://placehold.it/700x450" alt="" class="img-responsive img-portfolio img-hover">
			</a>
		</div>
		<div class="col-md-4 col-sm-6">
			<a href="portfolio-item.html">
				<img src="http://placehold.it/700x450" alt="" class="img-responsive img-portfolio img-hover">
			</a>
		</div>
	</div>
	<!-- /.row -->

	<!-- Features Section -->
	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header">Modern Business Features</h2>
		</div>
		<div class="col-md-6">
			<p>The Modern Business template by Start Bootstrap includes:</p>
			<ul>
				<li><strong>Bootstrap v3.3.7</strong></li>
				<li>jQuery v2.2.4</li>
				<li>Font Awesome v4.7.0</li>
				<li>Working PHP contact form with validation</li>
				<li>Unstyled page elements for easy customization</li>
				<li>17 HTML pages</li>
			</ul>
			<p>This Yii2 implementation of Modern Business is crafted with <?= FA::icon('heart') ?> by Pedro fp, on the
			<a href="https://en.wikipedia.org/wiki/Sunshine_Coast,_Queensland" target="_blank">
					Sunshine Coast <?= FA::icon(FA::_EXTERNAL_LINK) ?>
			</a> of Queensland Australia.</p>
		</div>
		<div class="col-md-6">
			<img src="http://placehold.it/700x450" alt="" class="img-responsive">
		</div>
	</div>
	<!-- /.row -->

	<hr>

	<!-- Call to Action Section -->
	<div class="well">
		<div class="row">
			<div class="col-md-8">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
			</div>
			<div class="col-md-4">
				<a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
			</div>
		</div>
	</div>

	<?= $this->render('_footer.php') ?>

	<!-- Page Code Location - remove in production -->
	<div class="row">
		<div class="col-lg-12">
			<code><?= __FILE__ ?></code>
		</div>
	</div>

</div>
<!-- /.container -->
