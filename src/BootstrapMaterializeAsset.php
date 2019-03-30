<?php
namespace schmasterz\materialize;

use yii\web\AssetBundle;

class BootstrapMaterializeAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap4-materialize/dist';
    public $js = [
        'js/materialize.js'
    ];
    public $css = [
        'css/materialize.css',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}