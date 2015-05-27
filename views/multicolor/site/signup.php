<?php
/**
 * signup.php
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
/* @var $model \frontend\models\SignupForm */

// load assets...
p2made\theme\Triangle\assets\TriangleOpenAsset::register($this);

p2made\theme\Triangle\assets\LightboxAsset::register($this);
p2made\theme\Triangle\assets\TriangleMulticolorAsset::register($this);

p2made\theme\Triangle\assets\TriangleCloseAsset::register($this);

$this->title = 'Signup';
$tagline = 'Signup for membership';
$this->params['breadcrumbs'][] = $this->title;

$formOptions = [
	'id' => 'form-signup',
	'enableClientValidation' => false
];

$usernameFieldOptions = [
	'options' => ['class' => 'form-group has-feedback', 'autofocus' => 'autofocus'],
	'inputTemplate' => "{input}<i class='glyphicon glyphicon-user form-control-feedback'></i>",
];

$emailFieldOptions = [
	'options' => ['class' => 'form-group has-feedback'],
	'inputTemplate' => "{input}<i class='glyphicon glyphicon-envelope form-control-feedback'></i>",
];

$passwordFieldOptions = [
	'options' => ['class' => 'form-group has-feedback'],
	'inputTemplate' => "{input}<i class='glyphicon glyphicon-lock form-control-feedback'></i>",
];

$submitButtonOptions = [
	'class' => 'btn btn-primary btn-block btn-flat',
	'name' => 'signup-button'
];
?>
<div class="site-signup">
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
	<?= $form
		->field($model, 'email', $emailFieldOptions)
		->label(false)
		->textInput(['placeholder' => $model->getAttributeLabel('email')])
	?>
	<?= $form
		->field($model, 'password', $passwordFieldOptions)
		->label(false)
		->passwordInput(['placeholder' => $model->getAttributeLabel('password')])
	?>

								<div class="form-group has-feedback field-signupform-password required">
									<input type="password" id="signupform-confirm" name="signupform-confirm" class="form-control" placeholder="Confirm">
									<i class='glyphicon glyphicon-lock form-control-feedback'></i>
								</div>

								<div class="row">
									<div class="col-sm-8">
										<div class="form-group field-signupform-agree">
											<div class="checkbox">
												<label for="signupform-agree">
													<input type="checkbox" id="signupform-agree" name="signupform-agree" value="0">
													I Agree
												</label>
											</div>
										</div>
									</div>
									<!-- < ?= $form->field($model, 'rememberMe')->checkbox() ?> -->
									<div class="col-sm-4">
										<?= Html::submitButton('Signup', $submitButtonOptions) ?>
									</div>
								</div>

<?php ActiveForm::end(); ?>

							<div class="social-auth-links text-center">
								<p>– OR –</p>
								<a href="#" class="btn btn-block btn-social btn-facebook btn-flat">
									<i class="fa fa-facebook"></i> Signup using Facebook
								</a>
								<a href="#" class="btn btn-block btn-social btn-google-plus btn-flat">
									<i class="fa fa-google-plus"></i> Signup using Google+
								</a>
							</div>

						</div>
					</div>
</div>
