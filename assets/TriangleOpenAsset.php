<?php
/**
 * TriangleOpenAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-triangle-theme
 * @license MIT
 */

namespace p2made\theme\Triangle\assets;

class TriangleOpenAsset extends \yii\web\AssetBundle
{
	public $sourcePath = null;

	public $depends = [
		'p2made\assets\JqueryAsset',
		'p2made\assets\BootstrapAsset',
		'p2made\assets\BootstrapPluginAsset',
		'p2made\assets\FontAwesomeAsset',
		'p2made\assets\AnimateAsset',
		'p2made\assets\WowAsset',
	];
}
