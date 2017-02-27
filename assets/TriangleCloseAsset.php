<?php
/**
 * TriangleCloseAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-triangle-theme
 * @license MIT
 */

namespace p2m\theme\Triangle\assets;

class TriangleCloseAsset extends \yii\web\AssetBundle
{
	public $sourcePath = null;

	public $depends = [
		'p2m\assets\BootstrapSocialAsset',
	];
}
