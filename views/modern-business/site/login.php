<?php
/**
 * login.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-triangle-theme
 * @license MIT
 */

/* @var $this yii\web\View */

use yii\bootstrap\Html;
use yii\bootstrap\ActiveForm;
use p2m\helpers\FA;
use p2m\helpers\BSocial;

$this->title = 'Login';

$fieldOptions1 = [
	'options' => ['class' => 'form-group has-feedback', 'autofocus' => 'autofocus'],
	'inputTemplate' => "{input}<i class='glyphicon glyphicon-envelope form-control-feedback'></i>",
];

$fieldOptions2 = [
	'options' => ['class' => 'form-group has-feedback'],
	'inputTemplate' => "{input}<i class='glyphicon glyphicon-lock form-control-feedback'></i>",
];
?>

<div class="container">

	<!-- Page Heading -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><?= Html::encode($this->title) ?>
				<small>to start your session</small>
			</h1>
		</div>
	</div>
	<!-- /.row -->

	<!-- Login row -->
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<div class="panel panel-info">
				<div class="panel-heading">Signup for membership</div>
				<div class="panel-body">
			<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

				<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

				<?= $form->field($model, 'password')->passwordInput() ?>

				<?= $form->field($model, 'rememberMe')->checkbox() ?>

				<div style="color:#999;margin:1em 0">
					If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
				</div>

				<div class="form-group">
					<?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
				</div>

			<?php ActiveForm::end(); ?>
				</div>
			</div>

			<p class="text-center">- OR -</p>

		</div>

		<div class="col-lg-3 col-lg-offset-3">
			<?= BSocial::b('github')->caption('Login using @@@') ?>
			<?= BSocial::b('google')->caption('Login using @@@') ?>
		</div>
		<div class="col-lg-3">
			<?= BSocial::b('twitter')->caption('Login using @@@') ?>
			<?= BSocial::b('facebook')->caption('Login using @@@') ?>
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
