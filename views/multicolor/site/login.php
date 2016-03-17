<?php
/**
 * login.php
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
/* @var $model \common\models\LoginForm */

// load assets...
p2made\theme\Triangle\assets\TriangleOpenAsset::register($this);

p2made\theme\Triangle\assets\LightboxAsset::register($this);
p2made\theme\Triangle\assets\TriangleMulticolorAsset::register($this);

p2made\theme\Triangle\assets\TriangleCloseAsset::register($this);

$this->title = 'Login';
$tagline = 'Login to start your session';
$this->params['breadcrumbs'][] = $this->title;

$formOptions = [
	'id' => 'login-form',
	'enableClientValidation' => false
];

$usernameFieldOptions = [
	'options' => ['class' => 'form-group has-feedback', 'autofocus' => 'autofocus'],
	'inputTemplate' => "{input}<i class='glyphicon glyphicon-envelope form-control-feedback'></i>",
];

$passwordFieldOptions = [
	'options' => ['class' => 'form-group has-feedback'],
	'inputTemplate' => "{input}<i class='glyphicon glyphicon-lock form-control-feedback'></i>",
];

$submitButtonOptions = [
	'class' => 'btn btn-primary btn-block btn-flat',
	'name' => 'login-button'
];
?>
<div class="site-login">
					<!-- <h1 class="text-center">< ?= Html::encode($this->title) ?></h1> -->
					<h2 class="text-center"><?= Html::encode($tagline) ?></h2>

					<div class="panel panel-default">
						<div class="panel-body">

<?php $form = ActiveForm::begin($formOptions); ?>

	<?= $form
		->field($model, 'username', $usernameFieldOptions)
		->label(false)
		->textInput(['placeholder' => $model->getAttributeLabel('username')])
	?>

								<!-- alternatively loging with email
								<div class="form-group has-feedback field-loginform-email required">
									<input type="text" id="loginform-email" name="loginform-email" class="form-control" placeholder="Email">
									<i class='glyphicon glyphicon-envelope form-control-feedback'></i>
								</div>
								-->

	<?= $form
		->field($model, 'password', $passwordFieldOptions)
		->label(false)
		->passwordInput(['placeholder' => $model->getAttributeLabel('password')])
	?>

								<div class="row">
									<div class="col-sm-8">
										<?= $form->field($model, 'rememberMe')->checkbox() ?>
									</div>
									<div class="col-sm-4">
										<?= Html::submitButton('Login', $submitButtonOptions) ?>
									</div>
								</div>

<?php ActiveForm::end(); ?>

							<div class="social-auth-links text-center">
								<p>– OR –</p>
								<a href="#" class="btn btn-block btn-social btn-facebook btn-flat">
									<i class="fa fa-facebook"></i> Login using Facebook
								</a>
								<a href="#" class="btn btn-block btn-social btn-google-plus btn-flat">
									<i class="fa fa-google-plus"></i> Login using Google+
								</a>
							</div>

						</div>
					</div>
</div>
