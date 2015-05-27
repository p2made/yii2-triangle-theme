<?php
/**
 * TriangleMulticolorAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-triangle-theme
 * @license MIT
 */

namespace p2made\theme\Triangle\assets;

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
		'p2made\assets\JqueryAsset',
		'p2made\assets\BootstrapAsset',
		'p2made\assets\BootstrapPluginAsset',
		'p2made\assets\FontAwesomeAsset',
		'p2made\assets\AnimateAsset',
	];
}
