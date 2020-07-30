<?php

namespace backend\assets;

use dmstr\adminlte\web\AdminLteAsset;
use yii\web\AssetBundle;

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
        AdminLteAsset::class
    ];
}
