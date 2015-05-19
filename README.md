P2Triangle Theme v0.1.0
=======================

Triangle Theme from [ShapeBootstrap](http://shapebootstrap.net) as a frontend UI for Yii 2 Framework.

Flat Theme contains [AssetBundles for Yii 2.0 Framework](http://www.yiiframework.com/doc-2.0/guide-structure-assets.html)
which registers the CSS & JS files for the SB Admin 2 UI.

It declares [`p2made/yii2-asset-collection`](https://github.com/p2made/yii2-asset-collection) as a dependancy.

Installation
------------

The preferred way to install Flat Theme is through [composer](http://getcomposer.org/download/).
Depending on your composer installation, run *one* of the following commands:

```
composer require --prefer-dist p2made/yii2-triangle-theme "*"
```

or

```
php composer.phar require --prefer-dist p2made/yii2-triangle-theme "*"
```

Alternatively add:

```
"p2made/yii2-triangle-theme": "*"
```

to the requires section of your `composer.json` file & p2y2bootstrapSocialAsset will be installed next time you run `composer update`.

The files are installed via Yii's recommended usage of the `fxp/composer-asset-plugin`.

Quick Start
-----------

Once the extension is installed, you can have a *preview* by reconfiguring the path mappings of the view component:

```php
	'components' => [
		'view' => [
			'theme' => [
				'pathMap' => [
					'@app/views' => '@vendor/p2made/yii2-triangle-theme/example-views/flat'
				],
			],
		],
	],
```

This asset bundle provides sample files for layout and view (see folder `example-views/`), they are **not meant to be customized directly in the `vendor/` folder**. If you do that, your changes will be lost next time you run `composer update`.

Therefore it is recommended to **copy the views into your application** and adjust them to your needs.

To view the sample pages in `site/pages/` you need to modify `actions()` in the `SiteController`:

	public function actions()
	{
		return [
			...
			'page' => [
				'class' => 'yii\web\ViewAction',
			],
		];
	}

Customization
-------------

- Copy files from `vendor/p2made/yii2-triangle-theme/example-views/triangle` (or other theme) to `@app/views`.
- Remove the custom `view` configuration from your application by deleting the path mappings, if you have made them before.
- Edit your views adhering to html markup `http://shapebootstrap.net/item/flat-theme-free-responsive-multipurpose-site-template/` & the example views.

Known Issues
------------

- sample pages in `site/pages/` return a 403 error when viewed in the Y11 2 Advanced backend.

I've not been able to resolve this. It may be an issue on my development machine.

To Do
-----



