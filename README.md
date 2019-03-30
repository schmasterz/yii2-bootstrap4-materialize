# yii2-bootstrap4-materialize

Yii2 asset for boostrap4-materialize, a CSS Framework based on [Material Design](https://materializecss.com/).

### Requirements

The minimum requirement by yii2-bootstrap4-materialize that your Web server supports PHP 5.4 and Yii2 framework > 2.0.14.

### Install via Composer

```
$ php composer.phar require schmasterz/yii2-bootstrap4-materialize "master@dev"
```

### Usage


You can  use boostrap4-materialize in the css layer of your application. To achieve this, you need to include boostrap4-materialize as a dependency of your Asset file
```php
public $depends = [
    'schmasterz\materialize\BootstrapMaterializeAsset',
];
```
or add it to your view file
```php
schmasterz\materialize\BootstrapMaterializeAsset::register($this),
```


