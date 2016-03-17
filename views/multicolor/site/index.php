<?php
/**
 * index.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
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

p2made\theme\Triangle\assets\TriangleCloseAsset::register($this);

$this->title = 'Home';

/*
yii\web\YiiAsset::register($this);

p2made\theme\Triangle\assets\TriangleOpenAsset::register($this);
p2made\theme\Triangle\assets\TriangleCloseAsset::register($this);

p2made\theme\Triangle\assets\TriangleMulticolorAsset::register($this);
p2made\theme\Triangle\assets\AudioAsset::register($this);
p2made\theme\Triangle\assets\CountdownTimerAsset::register($this);
p2made\theme\Triangle\assets\LightboxAsset::register($this);
p2made\theme\Triangle\assets\ShareThisAsset::register($this);
p2made\theme\Triangle\assets\StLightAsset::register($this);
p2made\theme\Triangle\assets\SwitchTo5xAsset::register($this);

p2made\theme\Triangle\demo\CountdownDemoAsset::register($this);

p2made\assets\AnimateAsset::register($this);
p2made\assets\BootstrapAsset::register($this);
p2made\assets\BootstrapPluginAsset::register($this);
p2made\assets\BootstrapSocialAsset::register($this);
p2made\assets\DataTablesAsset::register($this);
p2made\assets\ExcanvasAsset::register($this);
p2made\assets\FitvidsAsset::register($this);
p2made\assets\FlotChartsAsset::register($this);
p2made\assets\FontAwesomeAsset::register($this);
p2made\assets\FullCalendarAsset::register($this);
p2made\assets\GMapsAsset::register($this);
p2made\assets\HolderAsset::register($this);
p2made\assets\IsotopeAsset::register($this);
p2made\assets\JqueryAsset::register($this);
p2made\assets\JqueryCountToAsset::register($this);
p2made\assets\JqueryMigrateAsset::register($this);
p2made\assets\JuiAsset::register($this);
p2made\assets\MasonryAsset::register($this);
p2made\assets\MetisMenuAsset::register($this);
p2made\assets\MomentAsset::register($this);
p2made\assets\MomentTimezoneAsset::register($this);
p2made\assets\MorrisAsset::register($this);
p2made\assets\PrettyPhotoAsset::register($this);
p2made\assets\PrettySociableAsset::register($this);
p2made\assets\RaphaelAsset::register($this);
p2made\assets\SweetAlertAsset::register($this);
p2made\assets\TimelineAsset::register($this);
p2made\assets\WowAsset::register($this);

p2made\assets\Html5shivAsset::register($this);
p2made\assets\PrintShivAsset::register($this);

		'p2made\assets\AnimateAsset',
		'p2made\assets\BootstrapAsset',
		'p2made\assets\BootstrapPluginAsset',
		'p2made\assets\BootstrapSocialAsset',
		'p2made\assets\DataTablesAsset',
		'p2made\assets\ExcanvasAsset',
		'p2made\assets\FitvidsAsset',
		'p2made\assets\FlotChartsAsset',
		'p2made\assets\FontAwesomeAsset',
		'p2made\assets\FullCalendarAsset',
		'p2made\assets\GMapsAsset',
		'p2made\assets\HolderAsset',
		'p2made\assets\IsotopeAsset',
		'p2made\assets\JqueryAsset',
		'p2made\assets\JqueryCountToAsset',
		'p2made\assets\JqueryMigrateAsset',
		'p2made\assets\JuiAsset',
		'p2made\assets\MasonryAsset',
		'p2made\assets\MetisMenuAsset',
		'p2made\assets\MomentAsset',
		'p2made\assets\MomentTimezoneAsset',
		'p2made\assets\MorrisAsset',
		'p2made\assets\PrettyPhotoAsset',
		'p2made\assets\PrettySociableAsset',
		'p2made\assets\RaphaelAsset',
		'p2made\assets\SweetAlertAsset',
		'p2made\assets\TimelineAsset',
		'p2made\assets\WowAsset',

		'p2made\assets\Html5shivAsset',
		'p2made\assets\PrintShivAsset',
 */
?>
	<section id="home-slider">
		<div class="container">
			<div class="row">
				<div class="main-slider">
					<div class="slide-text">
						<h1>We Are Creative Nerds</h1>
						<p>Boudin doner frankfurter pig. Cow shank bresaola pork loin tri-tip tongue venison pork belly meatloaf short loin landjaeger biltong beef ribs shankle chicken andouille.</p>
						<a href="#" class="btn btn-common">SIGN UP</a>
					</div>
					<img src="/images/slider/hill.png" class="slider-hill" alt="slider image">
					<img src="/images/slider/house.png" class="slider-house" alt="slider image">
					<img src="/images/slider/sun.png" class="slider-sun" alt="slider image">
					<img src="/images/slider/birds1.png" class="slider-birds1" alt="slider image">
					<img src="/images/slider/birds2.png" class="slider-birds2" alt="slider image">
				</div>
			</div>
		</div>
		<div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
	</section>

	<section id="services">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="single-service">
						<div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
							<img src="/images/icon-1.png" alt="">
						</div>
						<h2>Incredibly Responsive</h2>
						<p>Ground round tenderloin flank shank ribeye. Hamkevin meatball swine. Cow shankle beef sirloin chicken ground round.</p>
					</div>
				</div>
				<div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
					<div class="single-service">
						<div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
							<img src="/images/icon-2.png" alt="">
						</div>
						<h2>Superior Typography</h2>
						<p>Hamburger ribeye drumstick turkey, strip steak sausage ground round shank pastrami beef brisket pancetta venison.</p>
					</div>
				</div>
				<div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
					<div class="single-service">
						<div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
							<img src="/images/icon-3.png" alt="">
						</div>
						<h2>Swift Page Builder</h2>
						<p>Venison tongue, salami corned beef ball tip meatloaf bacon. Fatback pork belly bresaola tenderloin bone pork kevin shankle.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="action" class="responsive">
		<div class="vertical-center">
			<div class="container">
				<div class="row">
					<div class="action take-tour">
						<div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
							<h1 class="title">Triangle Corporate Template</h1>
							<p>A responsive, retina-ready &amp; wide multipurpose template.</p>
						</div>
						<div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
							<div class="tour-button">
								<a href="#" class="btn btn-common">TAKE THE TOUR</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
   </section>

	<section id="features">
		<div class="container">
			<div class="row">
				<div class="single-features">
					<div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
						<img src="/images/misc/image1.png" class="img-responsive" alt="">
					</div>
					<div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
						<h2>Experienced and Enthusiastic</h2>
						<P>Pork belly leberkas cow short ribs capicola pork loin. Doner fatback frankfurter jerky meatball pastrami bacon tail sausage. Turkey fatback ball tip, tri-tip tenderloin drumstick salami strip steak.</P>
					</div>
				</div>
				<div class="single-features">
					<div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
						<h2>Built for the Responsive Web</h2>
						<P>Mollit eiusmod id chuck turducken laboris meatloaf pork loin tenderloin swine. Pancetta excepteur fugiat strip steak tri-tip. Swine salami eiusmod sint, ex id venison non. Fugiat ea jowl cillum meatloaf.</P>
					</div>
					<div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
						<img src="/images/misc/image2.png" class="img-responsive" alt="">
					</div>
				</div>
				<div class="single-features">
					<div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
						<img src="/images/misc/image3.png" class="img-responsive" alt="">
					</div>
					<div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
						<h2>Experienced and Enthusiastic</h2>
						<P>Ut officia cupidatat anim excepteur fugiat cillum ea occaecat rump pork chop tempor. Ut tenderloin veniam commodo. Shankle aliquip short ribs, chicken eiusmod exercitation shank landjaeger spare ribs corned beef.</P>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="clients">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
						<p><img src="/images/clients.png" class="img-responsive" alt=""></p>
						<h1 class="title">Happy Clients</h1>
						<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud </p>
					</div>
					<div class="clients-logo wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
						<div class="col-xs-3 col-sm-2">
							<a href="#"><img src="/images/clients/1.png" class="img-responsive" alt=""></a>
						</div>
						<div class="col-xs-3 col-sm-2">
							<a href="#"><img src="/images/clients/2.png" class="img-responsive" alt=""></a>
						</div>
						<div class="col-xs-3 col-sm-2">
							<a href="#"><img src="/images/clients/3.png" class="img-responsive" alt=""></a>
						</div>
						<div class="col-xs-3 col-sm-2">
							<a href="#"><img src="/images/clients/4.png" class="img-responsive" alt=""></a>
						</div>
						<div class="col-xs-3 col-sm-2">
							<a href="#"><img src="/images/clients/5.png" class="img-responsive" alt=""></a>
						</div>
						<div class="col-xs-3 col-sm-2">
							<a href="#"><img src="/images/clients/6.png" class="img-responsive" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
