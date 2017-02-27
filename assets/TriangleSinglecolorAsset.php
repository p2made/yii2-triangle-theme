<?php
/**
 * TriangleSinglecolorAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-triangle-theme
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\theme\Triangle\assets\TriangleSinglecolorAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\theme\Triangle\assets\TriangleSinglecolorAsset',
 */

namespace p2m\theme\Triangle\assets;

class TriangleSinglecolorAsset extends \p2m\assets\base\P2AssetBundle
{
	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/p2made/yii2-triangle-theme/assets/lib/singlecolor',
			'css' => [
				'css/triangle.min.css',
				'css/responsive.min.css',
			],
			'js' => [
				'js/triangle.min.js',
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
