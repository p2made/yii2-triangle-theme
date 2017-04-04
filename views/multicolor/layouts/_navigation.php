<?php
/**
 * _navigation.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-triangle-theme
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\ArrayHelper;
use p2m\helpers\FA;

$assetDir = Yii::$app->assetManager->getPublishedUrl(
	'@vendor/p2made/yii2-triangle-theme/assets/lib/multicolor'
);

$brandLabel = '<h1><img src="' . $assetDir . '/img/logo-square.png" alt="logo"> P<sup>2</sup>Triangle</h1>';

$menuItems = [
	['label' => 'Home', 'url' => ['/site/index']],
	['label' => 'Pages ', 'url' =>'#', 'items' => [
		['label' => 'About', 'url' =>['/site/about']],
		['label' => 'About 2', 'url' =>['/site/page', 'view' => 'about-2']],
		['label' => 'Services', 'url' =>['/site/page', 'view' => 'services']],
		['label' => 'Pricing', 'url' =>['/site/page', 'view' => 'pricing']],
		['label' => 'Contact', 'url' =>['/site/contact']],
		['label' => 'Contact 2', 'url' =>['/site/page', 'view' => 'contact-2']],
		['label' => '404 error', 'url' =>['/site/page', 'view' => '404']],
		['label' => 'Coming Soon', 'url' =>['/site/page', 'view' => 'coming-soon']],
	]],
	['label' => 'Blog ', 'url' =>'#', 'items' => [
		['label' => 'Blog Default', 'url' =>['/site/page', 'view' => 'blog']],
		['label' => 'Timeline Blog', 'url' =>['/site/page', 'view' => 'blog-2']],
		['label' => '2 Columns + Right Sidebar', 'url' =>['/site/page', 'view' => 'blog-3']],
		['label' => '1 Column + Left Sidebar', 'url' =>['/site/page', 'view' => 'blog-4']],
		['label' => 'Blog Masonary', 'url' =>['/site/page', 'view' => 'blog-5']],
		['label' => 'Blog Details', 'url' =>['/site/page', 'view' => 'blogdetails']],
	]],
	['label' => 'Portfolio ', 'url' =>'#', 'items' => [
		['label' => 'Portfolio Default', 'url' =>['/site/page', 'view' => 'portfolio']],
		['label' => 'Isotope 3 Columns + Right Sidebar', 'url' =>['/site/page', 'view' => 'portfoliofour']],
		['label' => '3 Columns + Right Sidebar', 'url' =>['/site/page', 'view' => 'portfolioone']],
		['label' => '3 Columns + Left Sidebar', 'url' =>['/site/page', 'view' => 'portfoliotwo']],
		['label' => '2 Columns', 'url' =>['/site/page', 'view' => 'portfoliothree']],
		['label' => 'Portfolio Details', 'url' =>['/site/page', 'view' => 'portfolio-details']],
	]],
	['label' => 'Shortcodes', 'url' =>['/site/page', 'view' => 'shortcodes']],
];
if (Yii::$app->user->isGuest) {
	$menuItems[] = ['label' => 'Users', 'url' =>'#', 'items' => [
		['label' => 'Signup', 'url' => ['/site/signup']],
		['label' => 'Login', 'url' => ['/site/login']],
	]];
} else {
	$menuItems[] = [
		'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
		'url' => ['/site/logout'],
		'linkOptions' => ['data-method' => 'post']
	];
}

NavBar::begin([
	'brandLabel' => $brandLabel,
	'brandUrl' => Yii::$app->homeUrl,
	'options' => [
		'class' => 'navbar navbar-inverse',
	],
]);
echo Nav::widget([
	'options' => ['class' => 'nav navbar-nav navbar-right'],
	'items' => $menuItems,
]);
NavBar::end();
