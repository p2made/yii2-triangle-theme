<?php
/**
 * contact-2.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-triangle-theme
 * @license MIT
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
//use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

// load assets...
p2made\theme\Triangle\assets\TriangleOpenAsset::register($this);

p2made\assets\PrettyPhotoAsset::register($this);
p2made\theme\Triangle\assets\LightboxAsset::register($this);
p2made\theme\Triangle\assets\TriangleMulticolorAsset::register($this);
p2made\assets\GMapsAsset::register($this);

p2made\theme\Triangle\assets\TriangleCloseAsset::register($this);

$this->title = 'Contact Us 2';
$tagline = 'Stay close';
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

	<section id="map-section">
		<div class="container">
			<div id="gmap"></div>
			<div class="contact-info">
				<h2>Contacts</h2>
				<address>
				E-mail: <a href="mailto:someone@example.com">email@email.com</a> <br>
				Phone: +1 (123) 456 7890 <br>
				Fax: +1 (123) 456 7891 <br>
				</address>

				<h2>Address</h2>
				<address>
				Unit C2, St.Vincent's Trading Est., <br>
				Feeder Road, <br>
				Bristol, BS2 0UY <br>
				United Kingdom <br>
				</address>
			</div>
		</div>
	</section>
