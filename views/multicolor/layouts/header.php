<?php
/**
 * header.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-triangle-theme
 * @license MIT
 */

use yii\helpers\Html;
use p2made\theme\Triangle\widgets\Nav;
use yii\bootstrap\NavBar;

/* @var $this \yii\web\View */
?>
	<header id="header">
<?= $this->render('social-nav-pills.php', []) ?>

		<?php
			NavBar::begin([
				'brandLabel' => '<h1><img src="/images/logo-square.png" alt="logo"> P<sup>2</sup>Triangle</h1>',
				'brandUrl' => Yii::$app->homeUrl,
				'options' => [
					'class' => 'navbar navbar-inverse',
					'role' => 'banner',
				],
			]);
			$menuItems = [
				['label' => 'Home', 'url' => ['/site/index']],
				['label' => 'Pages', 'items' => [ // <i class="fa fa-angle-down"></i>
					['label' => 'Calendar', 'url' => ['/site/page', 'view' => 'calendar']],
					['label' => 'About', 'url' => ['/site/about']],
					['label' => 'About 2', 'url' => ['/site/page', 'view' => 'about-2']],
					['label' => 'Contact', 'url' => ['/site/contact']],
					['label' => 'Contact 2', 'url' => ['/site/page', 'view' => 'contact-2']],
					'<li role="presentation" class="divider"></li>',
					['label' => 'Services', 'url' => ['/site/page', 'view' => 'services']],
					['label' => 'Pricing', 'url' => ['/site/page', 'view' => 'pricing']],
					'<li role="presentation" class="divider"></li>',
					['label' => '404 error', 'url' => ['/site/page', 'view' => '404']],
					['label' => 'Coming Soon', 'url' => ['/site/page', 'view' => 'coming-soon']],
					['label' => 'Blank', 'url' => ['/site/page', 'view' => 'blank']],
					['label' => 'Blank 2', 'url' => ['/site/page', 'view' => 'blank2']],
				], 'options' => ['class' => 'dropdown']],
				['label' => 'Blog', 'items' => [ // <i class="fa fa-angle-down"></i>
					['label' => 'Blog Default', 'url' => ['/site/page', 'view' => 'blog-default']],
					'<li role="presentation" class="divider"></li>',
					['label' => 'Timeline Blog', 'url' => ['/site/page', 'view' => 'blog-timeline']],
					['label' => '2 Columns + Right Sidebar', 'url' => ['/site/page', 'view' => 'blog-2cr']],
					['label' => '1 Column + Left Sidebar', 'url' => ['/site/page', 'view' => 'blog-1cl']],
					['label' => 'Blog Masonry', 'url' => ['/site/page', 'view' => 'blog-masonry']],
					'<li role="presentation" class="divider"></li>',
					['label' => 'Blog Details', 'url' => ['/site/page', 'view' => 'blog-details']],
				], 'options' => ['class' => 'dropdown']],
				['label' => 'Portfolio', 'items' => [ // <i class="fa fa-angle-down"></i>
					['label' => 'Portfolio Default', 'url' => ['/site/page', 'view' => 'portfolio-default']],
					'<li role="presentation" class="divider"></li>',
					['label' => 'Isotope 3 Columns + Right Sidebar', 'url' => ['/site/page', 'view' => 'portfolio-isotope']],
					['label' => '3 Columns + Right Sidebar', 'url' => ['/site/page', 'view' => 'portfolio-3cr']],
					['label' => '3 Columns + Left Sidebar', 'url' => ['/site/page', 'view' => 'portfolio-3cl']],
					['label' => '2 Columns', 'url' => ['/site/page', 'view' => 'portfolio-2c']],
					'<li role="presentation" class="divider"></li>',
					['label' => 'Portfolio Details', 'url' => ['/site/page', 'view' => 'portfolio-details']],
				], 'options' => ['class' => 'dropdown']],
				['label' => 'Members', 'items' => [ // <i class="fa fa-angle-down"></i>
					['label' => 'Signup', 'url' => ['/site/signup']],
					['label' => 'Login', 'url' => ['/site/login']],
					'<li role="presentation" class="divider"></li>',
					['label' => 'Profile', 'url' => ['/site/page', 'view' => 'profile.php']],
				], 'options' => ['class' => 'dropdown']],
				['label' => 'Shortcodes', 'url' => ['/site/page', 'view' => 'shortcodes.php']],
			];
			/*
			if (Yii::$app->user->isGuest) {
				$menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
				$menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
			} else {
				$menuItems[] = [
					'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
					'url' => ['/site/logout'],
					'linkOptions' => ['data-method' => 'post']
				];
			}
				<div class="search">
					<form role="form">
						<i class="fa fa-search"></i>
						<div class="field-toggle">
							<input type="text" class="search-form" autocomplete="off" placeholder="Search">
						</div>
					</form>
				</div>
			*/
			echo Nav::widget([
				'options' => ['class' => 'nav navbar-nav navbar-right'],
				'items' => $menuItems,
			]);
			NavBar::end();
		?>

	</header>
