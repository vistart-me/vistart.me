<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);
return [
    'id' => '_vistart_me',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => '_vistart_me\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf_vistart_me',
        ],
        'user' => [
            'identityClass' => 'common\model\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity_vistart_me', 'httpOnly' => true],
        ],
        'session' => [
            'name' => '_session_vistart_me'
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning']
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

            ],
        ],
    ],
    'params' => $params,
];
