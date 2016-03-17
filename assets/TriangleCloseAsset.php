<?php
/**
 * TriangleCloseAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-triangle-theme
 * @license MIT
 */

namespace p2made\theme\Triangle\assets;

class TriangleCloseAsset extends \yii\web\AssetBundle
{
	public $sourcePath = null;

	public $depends = [
		'p2made\assets\BootstrapSocialAsset',
		'p2made\assets\Html5shivAsset',
		'p2made\assets\PrintShivAsset',
	];
}
