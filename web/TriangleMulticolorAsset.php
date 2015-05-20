<?php
/**
 * TriangleMulticolorAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-triangle-theme
 * @license MIT
 */

namespace p2made\theme\Triangle\web;

class TriangleMulticolorAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/yii2-triangle-theme/assets';

	public $css = [
		'css/main-multicolor.min.css',
		'css/responsive-multicolor.min.css',
	];

	public $js = [
		'js/wow.min.js'
		'js/main.min.js'
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapPluginAsset',
		'p2made\assets\FontAwesomeAsset',
	];
}
