<?php
/**
 * blank.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

p2made\theme\Triangle\assets\TriangleOpenAsset::register($this);

p2made\assets\Lightbox2Asset::register($this);
p2made\theme\Triangle\assets\TriangleMulticolorAsset::register($this);

p2made\theme\Triangle\assets\TriangleCloseAsset::register($this);

$this->title = 'Blank';
?>
<div id="content-wrapper">

	<!-- #pragma - 1 or more id'd sections go in here -->

	<section id="blank">
	</section><!--/#blank-->

	<!-- /#pragma -->

	<div class="container">
		<div class="alert alert-info" role="alert"><p><code><?= __FILE__ ?></code></p></div>
	</div>

</div><!-- /#content-wrapper -->
