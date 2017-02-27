<?php
/**
 * ShareThisAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-triangle-theme
 * @license MIT
 */

namespace p2m\theme\Triangle\assets;

class ShareThisAsset extends \yii\web\AssetBundle
{
	public $sourcePath = null;

	public $js = [
		'http://w.sharethis.com/button/buttons.js',
	];

	public $depends = [];
}
