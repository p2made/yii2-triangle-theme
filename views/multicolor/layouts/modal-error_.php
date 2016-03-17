<?php
/**
 * modal-error.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-triangle-theme
 * @license MIT
 */

use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>
	<header id="header">
<?= $this->render('social-nav-pills.php', []) ?>

	</header>

	<section id="page-breadcrumb">
		<div class="vertical-center sun">
			<div class="container">
				<div class="row">
					<div class="action">
						<div class="col-sm-12 text-center">
							<h1 class="user-title">
								<img src="/images/logo-square.png" alt="badge">
								P<sup>2</sup>Triangle
							</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="auth">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-4 col-md-offset-4">

<?= $content ?>

				</div>
			</div>
		</div>
	</section>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center bottom-separator">
					<img src="/images/under.png" class="img-responsive inline" alt="">
				</div>
			</div>
		</div>
	</footer>
