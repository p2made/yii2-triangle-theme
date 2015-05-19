<?php
/**
 * Theme.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-triangle-theme
 * @license MIT
 */

namespace p2made\theme\Triangle;

use Yii;

class Theme extends \yii\base\Theme
{
	/**
	 * @inheritdoc
	 */
	public $pathMap = [
		'@frontend/views' => '@p2made/theme/Triangle/views',
		//'@frontend/modules' => '@p2made/theme/Flat/modules'
	];
}
