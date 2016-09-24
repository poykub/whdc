<?php

namespace app\themes\materialui;

use yii\web\AssetBundle;

class MaterialAsset extends AssetBundle
{
    public $sourcePath = '@app/themes/materialui/assets';
    public $css = [
        'css/base.min.css',
        'css/project.min.css',
        'css/custom.css'
    ];
    public $js = [
        'js/base.min.js',
        'js/project.min.js'];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}