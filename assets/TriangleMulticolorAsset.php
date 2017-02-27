<?php
/**
 * TriangleMulticolorAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-triangle-theme
 * @license MIT
 */

namespace p2m\theme\Triangle\assets;

class TriangleMulticolorAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/yii2-triangle-theme/assets/multicolor';

	public $css = [
		'css/triangle.min.css',
		'css/responsive.min.css',
	];

	public $js = [
		'js/triangle.min.js'
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
		'p2m\assets\AnimateAsset',
	];
}
