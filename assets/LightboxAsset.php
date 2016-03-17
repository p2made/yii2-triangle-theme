<?php
/**
 * LightboxAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-triangle-theme
 * @license MIT
 */

namespace p2made\theme\Triangle\assets;

class LightboxAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/yii2-triangle-theme/assets/shared';

	public $css = [
		'css/lightbox.min.css',
	];

	public $js = [
		'js/lightbox.min.js',
	];

	public $depends = [];
}
