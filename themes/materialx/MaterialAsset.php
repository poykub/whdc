<?php

namespace app\themes\materialx;

use yii\web\AssetBundle;

class MaterialAsset extends AssetBundle
{
    public $sourcePath = '@app/themes/materialx/assets';
    public $css = [
        'css/bootstrap-material-design.css',
        //'css/style.css',
        'css/custom.css',
        'css/ripples.min.css'
    ];
    public $js = [
        'js/material.min.js',
        'js/ripples.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}