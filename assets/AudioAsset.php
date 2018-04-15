<?php
/**
 * AudioAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-triangle-theme
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\theme\Triangle\assets\AudioAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\theme\Triangle\assets\AudioAsset',
 */

namespace p2m\theme\Triangle\assets;

class AudioAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/p2made/yii2-triangle-theme/assets/lib/shared',
			'css' => [],
			'js' => [
				'js/player.js',
			],
		],
		'depends' => [
			'p2m\assets\jPlayer\BlueMondayAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
