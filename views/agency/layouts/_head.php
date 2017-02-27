<?php
/**
 * _head.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

use yii\bootstrap\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>
<meta charset="<?= Yii::$app->charset ?>"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?= Html::csrfMetaTags() ?>
<title><?= Html::encode($this->title) ?> | P2 Agency</title>
<?php $this->head() ?>
