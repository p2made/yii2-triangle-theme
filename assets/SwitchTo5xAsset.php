<?php
/**
 * SwitchTo5xAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-triangle-theme
 * @license MIT
 */

namespace p2m\theme\Triangle\assets;

class SwitchTo5xAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/yii2-triangle-theme/assets/shared';

	public $js = [
		'js/switchTo5x.js',
	];

	public $depends = [];
}
