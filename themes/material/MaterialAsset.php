<?php

namespace app\themes\material;

use yii\web\AssetBundle;

class MaterialAsset extends AssetBundle
{
    public $sourcePath = '@app/themes/material/assets';
    public $css = [
        'css/materialize.css',
        'css/style.css',
        'css/custom.css'
    ];
    public $js = [
        'js/init.js',
        'js/materialize.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}