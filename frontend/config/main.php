<?php

use yii\log\FileTarget;
use common\models\User;

$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'xdsfeapp',
    'name' => 'XDS',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-xdsfeapp',
            'baseUrl' => ''
        ],
        'user' => [
            'identityClass' => User::class,
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-xdsfe', 'httpOnly' => true],
        ],
        'session' => [
            'name' => 'xdsfeapp',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '/' => 'site/index',
                'request/<slug:\w+>' => 'site/request'
            ],
        ],
    ],
    'params' => $params,
];
