<?php
/**
 * Nav.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-triangle-theme
 * @license MIT
 */

namespace p2m\theme\Triangle\widgets;

use p2m\theme\Triangle\widgets\Dropdown;

use Yii;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * Nav renders a nav HTML component.
 *
 * For example:
 *
 * ```php
 * echo Nav::widget([
 *     'items' => [
 *         [
 *             'label' => 'Home',
 *             'url' => ['site/index'],
 *             'linkOptions' => [...],
 *         ],
 *         [
 *             'label' => 'Dropdown',
 *             'items' => [
 *                  ['label' => 'Level 1 - Dropdown A', 'url' => '#'],
 *                  '<li class="divider"></li>',
 *                  '<li class="dropdown-header">Dropdown Header</li>',
 *                  ['label' => 'Level 1 - Dropdown B', 'url' => '#'],
 *             ],
 *         ],
 *     ],
 *     'options' => ['class' =>'nav-pills'], // set this to nav-tab to get tab-styled navigation
 * ]);
 * ```
 *
 * Note: Multilevel dropdowns beyond Level 1 are not supported in Bootstrap 3.
 *
 * @see http://getbootstrap.com/components/#dropdowns
 * @see http://getbootstrap.com/components/#nav
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @since 2.0
 */

class Nav extends \yii\bootstrap\Nav
{
/* ##### ^ ##### P2mod ##### ^ ##### */
	/**
	 * Initializes the widget.
	 */
	public function init()
	{
		parent::init();
		$this->dropDownCaret = Html::tag('i', '', ['class' => 'fa fa-angle-down']);

		if ($this->route === null && Yii::$app->controller !== null) {
			$this->route = Yii::$app->controller->getRoute();
		}
		if ($this->params === null) {
			$this->params = Yii::$app->request->getQueryParams();
		}
		if ($this->dropDownCaret === null) {
		}
		Html::addCssClass($this->options, 'nav');
	}
/* #### ^ ##### / P2mod ##### ^ #### */

/* ##### ^ ##### P2mod ##### ^ ##### */
	/**
	 * Renders a widget's item.
	 * @param string|array $item the item to render.
	 * @return string the rendering result.
	 * @throws InvalidConfigException
	 */
	public function renderItem($item)
	{
		if (is_string($item)) {
			return $item;
		}
		if (!isset($item['label'])) {
			throw new InvalidConfigException("The 'label' option is required.");
		}
		$encodeLabel = isset($item['encode']) ? $item['encode'] : $this->encodeLabels;
		$label = $encodeLabel ? Html::encode($item['label']) : $item['label'];
		$options = ArrayHelper::getValue($item, 'options', []);
		$items = ArrayHelper::getValue($item, 'items');
		$url = ArrayHelper::getValue($item, 'url', '#');
		$linkOptions = ArrayHelper::getValue($item, 'linkOptions', []);

		if (isset($item['active'])) {
			$active = ArrayHelper::remove($item, 'active', false);
		} else {
			$active = $this->isItemActive($item);
		}

		if ($items !== null) {
			$linkOptions['data-toggle'] = 'dropdown';
			Html::addCssClass($options, 'dropdown');
			if ($this->dropDownCaret !== '') {
				$label .= ' ' . $this->dropDownCaret;
			}
			if (is_array($items)) {
				if ($this->activateItems) {
					$items = $this->isChildActive($items, $active);
				}
				$items = $this->renderDropdown($items, $item);
			}
		}

		if ($this->activateItems && $active) {
			Html::addCssClass($options, 'active');
		}

		return Html::tag('li', Html::a($label, $url, $linkOptions) . $items, $options);
	}
/* #### ^ ##### / P2mod ##### ^ #### */

	/**
	 * Renders the given items as a dropdown.
	 * This method is called to create sub-menus.
	 * @param array $items the given items. Please refer to [[Dropdown::items]] for the array structure.
	 * @param array $parentItem the parent item information. Please refer to [[items]] for the structure of this array.
	 * @return string the rendering result.
	 * @since 2.0.1
	 */
	protected function renderDropdown($items, $parentItem)
	{
		return Dropdown::widget([
			'items' => $items,
			'encodeLabels' => $this->encodeLabels,
			'clientOptions' => false,
			'view' => $this->getView(),
		]);
	}
}
