<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);
return [
    'id' => 'ebook_vistart_me',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'ebook_vistart_me\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf_ebook_vistart_me',
        ],
        'user' => [
            'identityClass' => 'common\model\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity_ebook_vistart_me', 'httpOnly' => true],
        ],
        'session' => [
            'name' => '_session_ebook_vistart_me'
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
            'suffix' => '.html',
            'rules' => [
                'index' => 'site/index',
            ],
        ],
    ],
    'params' => $params,
];
