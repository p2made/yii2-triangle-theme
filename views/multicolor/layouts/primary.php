<?php
/**
 * primary.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-triangle-theme
 * @license MIT
 */

/* @var $this \yii\web\View */
/* @var $content string */

use yii\bootstrap\Html;

p2m\SB\assets\TriangleMulticolorAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<?= $this->render('_head.php') ?>
</head>
<body>
	<?php $this->beginBody() ?>

	<?= $this->render('_navigation.php') ?>

	<?= $content ?>

	<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
