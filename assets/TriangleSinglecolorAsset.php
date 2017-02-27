<?php
/**
 * TriangleSinglecolorAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-triangle-theme
 * @license MIT
 */

namespace p2m\theme\Triangle\assets;

class TriangleSinglecolorAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/yii2-triangle-theme/assets/singlecolor';

	public $css = [
		'css/triangle.min.css',
		'css/responsive.min.css',
	];

	public $js = [
		'js/triangle.min.js'
	];

	public $depends = [];
}
