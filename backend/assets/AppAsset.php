<?php

namespace backend\assets;

use yii\web\AssetBundle;
use yii\web\YiiAsset;
use yii\bootstrap\BootstrapAsset;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot/inc';
    public $baseUrl = '@web/inc';
    public $css = [
        'css/styles.css',
    ];
    public $js = [
        'js/main.js'
    ];
    public $depends = [
        YiiAsset::class,
        BootstrapAsset::class,
    ];
}
