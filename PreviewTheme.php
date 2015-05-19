<?php

namespace vova07\themes\site;

use Yii;

/**
 * Class Theme
 * @package vova07\themes\admin
 */
class Theme extends \yii\base\Theme
{
	/**
	 * @inheritdoc
	 */
	public $pathMap = [
		'@frontend/views' => '@vova07/themes/site/views',
		'@frontend/modules' => '@vova07/themes/site/modules'
	];

	/**
	 * @inheritdoc
	 */
	public function init()
	{
		parent::init();

		Yii::$app->assetManager->bundles['yii\bootstrap\BootstrapAsset'] = [
			'sourcePath' => '@vova07/themes/site/assets',
			'css' => [
				'css/bootstrap.min.css'
			]
		];
		Yii::$app->assetManager->bundles['yii\bootstrap\BootstrapPluginAsset'] = [
			'sourcePath' => '@vova07/themes/site/assets',
			'js' => [
				'js/bootstrap.min.js'
			]
		];
	}
}
p2made/theme/Flat/
