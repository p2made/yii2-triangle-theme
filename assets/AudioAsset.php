<?php
/**
 * AudioAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-triangle-theme
 * @license MIT
 */

namespace p2made\theme\Triangle\assets;

class AudioAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/yii2-triangle-theme/assets/shared';

	public $js = [
		'js/audio.min.js',
		'js/audio.create.js',
	];

	public $depends = [];
}
