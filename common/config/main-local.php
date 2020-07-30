<?php

use yii\swiftmailer\Mailer as SwiftMailer;
use yii\db\Connection as DBConnection;
use yii\debug\Module as Debug;
use yii\gii\Module as Gii;

$config = [
    'components' => [
        'db' => [
            'class' => DBConnection::class,
            'dsn' => 'mysql:host=localhost;dbname=yiijobtest',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => SwiftMailer::class,
            'viewPath' => '@common/mail',
//            'useFileTransport' => true,
        ],
    ],
];
if (!YII_ENV_TEST) {
    if ((defined('YII_FE') && YII_FE)||(defined('YII_BE') && YII_BE)) {
        $config['bootstrap'][] = 'debug';
        $config['modules']['debug'] = [
            'class' => Debug::class,
//            'allowedIPs' => ['*'],
        ];

        $config['bootstrap'][] = 'gii';
        $config['modules']['gii'] = [
            'class' => Gii::class,
//            'allowedIPs' => ['*'],
        ];
    }
}

return $config;