<?php
$config = [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];

if (YII_ENV_DEV) {
    if (!isset($config['bootstrap'])) {
        $config['bootstrap'] = [];
    }
    $config['bootstrap'][] = 'gii';
    if (!isset($config['modules'])) {
        $config['modules'] = [];
    }
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module'
    ];
}

return $config;
