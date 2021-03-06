<?php
/**
 * primary.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package yii2-triangle-theme
 * @license MIT
 */

/* @var $this \yii\web\View */
/* @var $content string */

use yii\bootstrap\Html;

p2m\theme\Triangle\assets\TriangleMulticolorAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<?= $this->render('_head.php') ?>
</head>
<body>
	<?php $this->beginBody() ?>

	<header id="header">
		<?= $this->render('_social-pills.php') ?>
		<?= $this->render('_navigation.php') ?>
	</header>

	<?= $content ?>

	<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
