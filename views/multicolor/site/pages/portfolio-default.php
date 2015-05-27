<?php
/**
 * portfolio-default.php
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

p2made\theme\Triangle\assets\LightboxAsset::register($this);
p2made\theme\Triangle\assets\TriangleMulticolorAsset::register($this);
p2made\assets\IsotopeAsset::register($this);

p2made\theme\Triangle\assets\TriangleCloseAsset::register($this);

$this->title = 'Portfolio';
$tagline = 'Be Creative';
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
   </section>

	<section id="portfolio">
		<div class="container">
			<div class="row">
				<ul class="portfolio-filter text-center">
					<li><a class="btn btn-default active" href="#" data-filter="*">All</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".branded">Branded</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".design">Design</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".folio">Folio</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".logos">Logos</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".mobile">Mobile</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".mockup">Mockup</a></li>
				</ul><!--/#portfolio-filter-->

				<div class="portfolio-items">
					<div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
						<div class="portfolio-wrapper">
							<div class="portfolio-single">
								<div class="portfolio-thumb">
									<img src="/images/portfolio/1.jpg" class="img-responsive" alt="">
								</div>
								<div class="portfolio-view">
									<ul class="nav nav-pills">
										<li><a href="portfolio-details.php"><i class="fa fa-link"></i></a></li>
										<li><a href="assets/images/portfolio/1.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="portfolio-info ">
								<h2>Sailing Vivamus</h2>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded folio">
						<div class="portfolio-wrapper">
							<div class="portfolio-single">
								<div class="portfolio-thumb">
									<img src="/images/portfolio/2.jpg" class="img-responsive" alt="">
								</div>
								<div class="portfolio-view">
									<ul class="nav nav-pills">
										<li><a href="portfolio-details.php"><i class="fa fa-link"></i></a></li>
										<li><a href="assets/images/portfolio/2.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="portfolio-info">
								<h2>Sailing Vivamus</h2>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 portfolio-item design logos">
						<div class="portfolio-wrapper">
							<div class="portfolio-single">
								<div class="portfolio-thumb">
									<img src="/images/portfolio/3.jpg" class="img-responsive" alt="">
								</div>
								<div class="portfolio-view">
									<ul class="nav nav-pills">
										<li><a href="portfolio-details.php"><i class="fa fa-link"></i></a></li>
										<li><a href="assets/images/portfolio/3.jpg"  data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="portfolio-info ">
								<h2>Sailing Vivamus</h2>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 portfolio-item design logos">
						<div class="portfolio-wrapper">
							<div class="portfolio-single">
								<div class="portfolio-thumb">
									<img src="/images/portfolio/4.jpg" class="img-responsive" alt="">
								</div>
								<div class="portfolio-view">
									<ul class="nav nav-pills">
										<li><a href="portfolio-details.php"><i class="fa fa-link"></i></a></li>
										<li><a href="assets/images/portfolio/4.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="portfolio-info ">
								<h2>Sailing Vivamus</h2>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded mobile">
						<div class="portfolio-wrapper">
							<div class="portfolio-single">
								<div class="portfolio-thumb">
									<img src="/images/portfolio/5.jpg" class="img-responsive" alt="">
								</div>
								<div class="portfolio-view">
									<ul class="nav nav-pills">
										<li><a href="portfolio-details.php"><i class="fa fa-link"></i></a></li>
										<li><a href="assets/images/portfolio/5.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="portfolio-info ">
								<h2>Sailing Vivamus</h2>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded mockup">
						<div class="portfolio-wrapper">
							<div class="portfolio-single">
								<div class="portfolio-thumb">
									<img src="/images/portfolio/6.jpg" class="img-responsive" alt="">
								</div>
								<div class="portfolio-view">
									<ul class="nav nav-pills">
										<li><a href="portfolio-details.php"><i class="fa fa-link"></i></a></li>
										<li><a href="assets/images/portfolio/6.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="portfolio-info ">
								<h2>Sailing Vivamus</h2>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded folio">
						<div class="portfolio-wrapper">
							<div class="portfolio-single">
								<div class="portfolio-thumb">
									<img src="/images/portfolio/7.jpg" class="img-responsive" alt="">
								</div>
								<div class="portfolio-view">
									<ul class="nav nav-pills">
										<li><a href="portfolio-details.php"><i class="fa fa-link"></i></a></li>
										<li><a href="assets/images/portfolio/7.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="portfolio-info ">
								<h2>Sailing Vivamus</h2>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 portfolio-item design logos">
						<div class="portfolio-wrapper">
							<div class="portfolio-single">
								<div class="portfolio-thumb">
									<img src="/images/portfolio/8.jpg" class="img-responsive" alt="">
								</div>
								<div class="portfolio-view">
									<ul class="nav nav-pills">
										<li><a href="portfolio-details.php"><i class="fa fa-link"></i></a></li>
										<li><a href="assets/images/portfolio/8.jpg#" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="portfolio-info ">
								<h2>Sailing Vivamus</h2>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
						<div class="portfolio-wrapper">
							<div class="portfolio-single">
								<div class="portfolio-thumb">
									<img src="/images/portfolio/9.jpg" class="img-responsive" alt="">
								</div>
								<div class="portfolio-view">
									<ul class="nav nav-pills">
										<li><a href="portfolio-details.php"><i class="fa fa-link"></i></a></li>
										<li><a href="assets/images/portfolio/9.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="portfolio-info ">
								<h2>Sailing Vivamus</h2>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded mockup">
						<div class="portfolio-wrapper">
							<div class="portfolio-single">
								<div class="portfolio-thumb">
									<img src="/images/portfolio/10.jpg" class="img-responsive" alt="">
								</div>
								<div class="portfolio-view">
									<ul class="nav nav-pills">
										<li><a href="portfolio-details.php"><i class="fa fa-link"></i></a></li>
										<li><a href="assets/images/portfolio/10.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="portfolio-info ">
								<h2>Sailing Vivamus</h2>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 portfolio-item design folio">
						<div class="portfolio-wrapper">
							<div class="portfolio-single">
								<div class="portfolio-thumb">
									<img src="/images/portfolio/11.jpg" class="img-responsive" alt="">
								</div>
								<div class="portfolio-view">
									<ul class="nav nav-pills">
										<li><a href="portfolio-details.php"><i class="fa fa-link"></i></a></li>
										<li><a href="assets/images/portfolio/11.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="portfolio-info ">
								<h2>Sailing Vivamus</h2>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded mockup">
						<div class="portfolio-wrapper">
							<div class="portfolio-single">
								<div class="portfolio-thumb">
									<img src="/images/portfolio/12.jpg" class="img-responsive" alt="">
								</div>
								<div class="portfolio-view">
									<ul class="nav nav-pills">
										<li><a href="portfolio-details.php"><i class="fa fa-link"></i></a></li>
										<li><a href="assets/images/portfolio/12.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="portfolio-info ">
								<h2>Sailing Vivamus</h2>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 portfolio-item design mobile">
						<div class="portfolio-wrapper">
							<div class="portfolio-single">
								<div class="portfolio-thumb">
									<img src="/images/portfolio/13.jpg" class="img-responsive" alt="">
								</div>
								<div class="portfolio-view">
									<ul class="nav nav-pills">
										<li><a href="portfolio-details.php"><i class="fa fa-link"></i></a></li>
										<li><a href="assets/images/portfolio/13.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="portfolio-info ">
								<h2>Sailing Vivamus</h2>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 portfolio-item design logos">
						<div class="portfolio-wrapper">
							<div class="portfolio-single">
								<div class="portfolio-thumb">
									<img src="/images/portfolio/14.jpg" class="img-responsive" alt="">
								</div>
								<div class="portfolio-view">
									<ul class="nav nav-pills">
										<li><a href="portfolio-details.php"><i class="fa fa-link"></i></a></li>
										<li><a href="assets/images/portfolio/14.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="portfolio-info ">
								<h2>Sailing Vivamus</h2>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
						<div class="portfolio-wrapper">
							<div class="portfolio-single">
								<div class="portfolio-thumb">
									<img src="/images/portfolio/15.jpg" class="img-responsive" alt="">
								</div>
								<div class="portfolio-view">
									<ul class="nav nav-pills">
										<li><a href="portfolio-details.php"><i class="fa fa-link"></i></a></li>
										<li><a href="assets/images/portfolio/15.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="portfolio-info ">
								<h2>Sailing Vivamus</h2>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
						<div class="portfolio-wrapper">
							<div class="portfolio-single">
								<div class="portfolio-thumb">
									<img src="/images/portfolio/16.jpg" class="img-responsive" alt="">
								</div>
								<div class="portfolio-view">
									<ul class="nav nav-pills">
										<li><a href="portfolio-details.php"><i class="fa fa-link"></i></a></li>
										<li><a href="assets/images/portfolio/16.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="portfolio-info ">
								<h2>Sailing Vivamus</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="portfolio-pagination">
					<ul class="pagination">
					  <li><a href="#">left</a></li>
					  <li><a href="#">1</a></li>
					  <li><a href="#">2</a></li>
					  <li class="active"><a href="#">3</a></li>
					  <li><a href="#">4</a></li>
					  <li><a href="#">5</a></li>
					  <li><a href="#">6</a></li>
					  <li><a href="#">7</a></li>
					  <li><a href="#">8</a></li>
					  <li><a href="#">9</a></li>
					  <li><a href="#">right</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
