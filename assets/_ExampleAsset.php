<?php
/**
 * _ExampleAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-triangle-theme
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\theme\Triangle\assets\_ExampleAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\theme\Triangle\assets\_ExampleAsset',
 */

namespace p2m\theme\Triangle\assets;

class _ExampleAsset extends \p2m\assets\base\P2AssetBundle
{
	private $resourceData = array(
		'published' => [
			'sourcePath' => '@path/to/assets/folder',
			'css' => [
				'css/css_file.css',
			],
			'js' => [
				'js/js_file.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

/*
		@vendor/p2made/yii2-triangle-theme/assets/lib/multicolor
		@vendor/p2made/yii2-triangle-theme/assets/lib/shared
		@vendor/p2made/yii2-triangle-theme/assets/lib/singlecolor
*/
