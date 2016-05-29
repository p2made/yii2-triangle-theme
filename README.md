P2Triangle Theme v0.3.10
================

Triangle Theme from [ShapeBootstrap](http://shapebootstrap.net) as a frontend UI for Yii 2 Framework.

P2Triangle Theme contains [AssetBundles for Yii 2.0 Framework](http://www.yiiframework.com/doc-2.0/guide-structure-assets.html)
which registers the CSS & JS files for the Triangle UI.

It declares [`p2made/yii2-asset-collection`](https://github.com/p2made/yii2-asset-collection) as a dependancy.

*!!!* This theme still has some rough & unfinished bits. It's only been let out of the cage so I can begin using it in other projects.

Installation
------------

The preferred way to install P2Triangle Theme is through [composer](http://getcomposer.org/download/).
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

to the requires section of your `composer.json` file & P2Triangle Theme will be installed next time you run `composer update`.

The files are installed via Yii's recommended usage of the `fxp/composer-asset-plugin`.

Quick Start
-----------

Once the extension is installed, you can have a *preview* by reconfiguring the path mappings of the view component:

```php
	'components' => [
		'view' => [
			'theme' => [
				'pathMap' => [
					'@app/views' => '@vendor/p2made/yii2-triangle-theme/views/multicolor',
					// for the single color version use this line instead...
					//'@app/views' => '@vendor/p2made/yii2-triangle-theme/views/singlecolor',
				],
			],
		],
	],
```

This asset bundle provides sample files for layout and view (see folder `views/`), they are **not meant to be customized directly in the `vendor/` folder**. If you do that, your changes will be lost next time you run `composer update`.

Therefore it is recommended to **copy the views into your application** and adjust them to your needs.

To view pages in `site/pages/` you need to modify `actions()` in the `SiteController`:

```php
	public function actions()
	{
		return [
			...
			'page' => [
				'class' => 'yii\web\ViewAction',
			],
		];
	}
```

Customization
-------------

- Copy files from `vendor/p2made/yii2-triangle-theme/views-preview/sb-admin-2` (or other theme) to `@app/views`.
- Remove the custom `view` configuration from your application by deleting the path mappings, if you have made them before.
- Edit your views adhering to html markup `http://shapebootstrap.net/item/triangle-free-responsive-multipurpose-template/` & the example views.

Known Issues
------------

- sample pages in `site/pages/` return a 403 error when viewed in the Y11 2 Advanced backend. This doesn't happen in the Y11 2 Advanced frontend.

I've not been able to resolve this. It may be an issue on my development machine. For my own use of this theme it isn't important as I'll only be using this as a frontend.



