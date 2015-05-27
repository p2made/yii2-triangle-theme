<?php
/**
 * html-header.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-triangle-theme
 * @license MIT
 */

use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>
<head>
	<meta charset="<?= Yii::$app->charset ?>"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" sizes="57x57" href="/ico/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/ico/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/ico/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/ico/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/ico/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/ico/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/ico/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/ico/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/ico/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="/ico/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/ico/favicon-194x194.png" sizes="194x194">
	<link rel="icon" type="image/png" href="/ico/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/ico/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="/ico/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/ico/manifest.json">
	<link rel="shortcut icon" href="/ico/favicon.ico">
	<meta name="application-name" content="p2made">
	<meta name="msapplication-TileColor" content="#ffcc00">
	<meta name="msapplication-TileImage" content="/ico/mstile-144x144.png">
	<meta name="msapplication-square70x70logo" content="/ico/mstile-70x70.png">
	<meta name="msapplication-square150x150logo" content="/ico/mstile-150x150.png">
	<meta name="msapplication-wide310x150logo" content="/ico/mstile-310x150.png">
	<meta name="msapplication-square310x310logo" content="/ico/mstile-310x310.png">
	<meta name="msapplication-config" content="/ico/browserconfig.xml">
	<meta name="theme-color" content="#ffcc00">
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?> | P2Triangle</title>
	<?php $this->head() ?>

</head>
