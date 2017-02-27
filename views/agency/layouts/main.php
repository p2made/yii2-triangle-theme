<?php
/**
 * main.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

/* @var $this \yii\web\View */
/* @var $content string */

p2m\SB\assets\AgencyAsset::register($this);

$layout = 'primary';
$actionId = Yii::$app->controller->action->id;
$entryIds  = [NULL, 'login', 'signup', 'request-password-reset', 'error'];
$foundId = array_search($actionId, $entryIds);

if (false !== $foundId) {
	$layout = 'user-entry';
}

echo $this->render(
	$layout, ['content' => $content]
);
