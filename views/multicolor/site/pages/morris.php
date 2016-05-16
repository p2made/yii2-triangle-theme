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

p2made\theme\sbAdmin\assets\SBAdmin2Asset::register($this);
p2made\assets\MorrisAsset::register($this);

// DEMO ONLY _DON'T_ use this in your production copy.
p2made\demo\assets\MorrisDemoData::register($this);

$this->title = 'Morris.js Charts';

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */
?>
<div id="content-wrapper">

	<!-- #pragma - 1 or more naked rows go in here -->

	<div class="row">

		<div class="col-lg-6">

			<div class="panel panel-default">
				<div class="panel-heading">
					Area Chart Example
				</div><!-- /.panel-heading -->
				<div class="panel-body">
					<div id="morris-area-chart"></div>
				</div><!-- /.panel-body -->
			</div><!-- /.panel -->

		</div>

		<div class="col-lg-6">

			<div class="panel panel-default">
				<div class="panel-heading">
					Bar Chart Example
				</div><!-- /.panel-heading -->
				<div class="panel-body">
					<div id="morris-bar-chart"></div>
				</div><!-- /.panel-body -->
			</div><!-- /.panel -->

		</div>

		<div class="col-lg-6">

			<div class="panel panel-default">
				<div class="panel-heading">
					Line Chart Example
				</div><!-- /.panel-heading -->
				<div class="panel-body">
					<div id="morris-line-chart"></div>
				</div><!-- /.panel-body -->
			</div><!-- /.panel -->

		</div>

		<div class="col-lg-6">

			<div class="panel panel-default">
				<div class="panel-heading">
					Donut Chart Example
				</div><!-- /.panel-heading -->
				<div class="panel-body">
					<div id="morris-donut-chart"></div>
				</div><!-- /.panel-body -->
			</div><!-- /.panel -->

		</div>

		<div class="col-lg-12">

			<div class="panel panel-default">
				<div class="panel-heading">
					Morris.js Usage
				</div><!-- /.panel-heading -->
				<div class="panel-body">
					<p>Morris.js is a jQuery based charting plugin created by Olly Smith. In SB Admin, we are using the most recent version of Morris.js which includes the resize function, which makes the charts fully responsive. The documentation for Morris.js is available on their website, <a target="_blank" href="http://morrisjs.github.io/morris.js/">http://morrisjs.github.io/morris.js/</a>.</p>
					<a target="_blank" class="btn btn-default btn-lg btn-block" href="http://morrisjs.github.io/morris.js/">View Morris.js Documentation</a>
				</div><!-- /.panel-body -->
			</div><!-- /.panel -->

		</div>

	</div>

	<!-- /#pragma -->

	<br><div class="alert alert-info" role="alert"><p><code><?= __FILE__ ?></code></p></div>

</div><!-- /#content-wrapper -->
