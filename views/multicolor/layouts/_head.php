<?php
/**
 * _head.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-triangle-theme
 * @license MIT
 */

use yii\bootstrap\Html;

/* @var $this \yii\web\View */
/* @var $content string */

$assetDir = Yii::$app->assetManager->getPublishedUrl(
	'@vendor/p2made/yii2-triangle-theme/assets/lib/shared'
);
?>
<meta charset="<?= Yii::$app->charset ?>"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?= Html::csrfMetaTags() ?>
<title><?= Html::encode($this->title) ?> | P2Triangle</title>
<?php $this->head() ?>

<link href="<?= $assetDir ?>/ico/favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="<?= $assetDir ?>/ico/favicon.png" rel="shortcut icon" type="image/x-icon">
<link href="<?= $assetDir ?>/ico/favicon-32x32.png" rel="icon" type="image/png" sizes="32x32">
<link href="<?= $assetDir ?>/ico/favicon-16x16.png" rel="icon" type="image/png" sizes="16x16">
<link href="<?= $assetDir ?>/ico/favicon-96x96.png" rel="icon" type="image/png" sizes="96x96">
<link href="<?= $assetDir ?>/ico/apple-touch-icon.png" rel="apple-touch-icon">
<link href="<?= $assetDir ?>/ico/apple-touch-icon-57x57.png" rel="apple-touch-icon" sizes="57x57">
<link href="<?= $assetDir ?>/ico/apple-touch-icon-60x60.png" rel="apple-touch-icon" sizes="60x60">
<link href="<?= $assetDir ?>/ico/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="<?= $assetDir ?>/ico/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76">
<link href="<?= $assetDir ?>/ico/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="<?= $assetDir ?>/ico/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120">
<link href="<?= $assetDir ?>/ico/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
<link href="<?= $assetDir ?>/ico/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152">
<link href="<?= $assetDir ?>/ico/apple-touch-icon-180x180.png" rel="apple-touch-icon" sizes="180x180">
<link href="<?= $assetDir ?>/ico/safari-pinned-tab.svg" rel="mask-icon" color="#5bbad5">
<link href="<?= $assetDir ?>/ico/manifest.json" rel="manifest">
<link href="<?= $assetDir ?>/ico/android-chrome-36x36.png" rel="icon" type="image/png" sizes="36x36">
<link href="<?= $assetDir ?>/ico/android-chrome-48x48.png" rel="icon" type="image/png" sizes="48x48">
<link href="<?= $assetDir ?>/ico/android-chrome-72x72.png" rel="icon" type="image/png" sizes="72x72">
<link href="<?= $assetDir ?>/ico/android-chrome-96x96.png" rel="icon" type="image/png" sizes="96x96">
<link href="<?= $assetDir ?>/ico/android-chrome-144x144.png" rel="icon" type="image/png" sizes="144x144">
<link href="<?= $assetDir ?>/ico/android-chrome-192x192.png" rel="icon" type="image/png" sizes="192x192">
<link href="<?= $assetDir ?>/ico/android-chrome-256x256.png" rel="icon" type="image/png" sizes="256x256">
<link href="<?= $assetDir ?>/ico/android-chrome-384x384.png" rel="icon" type="image/png" sizes="384x384">
<link href="<?= $assetDir ?>/ico/android-chrome-512x512.png" rel="icon" type="image/png" sizes="512x512">
<link href="<?= $assetDir ?>/ico/browserconfig.xml" rel="browserconfig">
<meta content="<?= $assetDir ?>/ico/mstile-70x70.png" name="msapplication-square70x70logo">
<meta content="<?= $assetDir ?>/ico/mstile-144x144.png" name="msapplication-TileImage">
<meta content="<?= $assetDir ?>/ico/mstile-150x150.png" name="msapplication-square150x150logo">
<meta content="<?= $assetDir ?>/ico/mstile-310x150.png" name="msapplication-wide310x150logo">
<meta content="<?= $assetDir ?>/ico/mstile-310x310.png" name="msapplication-square310x310logo">
<meta content="#000000" name="msapplication-TileColor">
<meta content="#ffffff" name="theme-color">
