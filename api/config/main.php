<?php

$db = require(__DIR__ . '/../../config/db.php');
$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'name' => 'RESTFull',
    'timeZone' => 'Asia/Tashkent',
    'basePath' => dirname(__DIR__) . '/..',
    'bootstrap' => ['log'],
    'aliases' => [
        '@uploads'    =>  dirname(dirname(__DIR__)) . '/web/uploads',
    ],
    'components' => [
        'request' => [
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ]
        ],
        'user' => [
            'identityClass' => 'app\models\Users',
            'enableAutoLogin' => false,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                    'logFile' => '@app/runtime/logs/api.log',
                ],
                [
                    'class' => 'yii\log\FileTarget',
                    'categories' => ['save'],
                    'logFile' => '@runtime/logs/save.log',
                    'logVars' => []
                ],
            ],
        ],
        'urlManager' => [
            'showScriptName' => false,
            'enablePrettyUrl' => true,
            'enableStrictParsing' => true,
            'rules' => [
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => ['v1/product','v1/post'],
                    'extraPatterns' => [
                        'POST color' => 'color',
                        'GET color' => 'color',
                        'OPTIONS color' => 'color',

                        'POST create-post' => 'create-post',
                        'GET create-post' => 'create-post',
                        'OPTIONS create-post' => 'create-post',
                        'POST news' => 'news',
                        'GET news' => 'news',
                        'OPTIONS news' => 'news',
                    ],
                ],
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ],
        ],
        'db' => $db,
    ],
    'modules' => [
        'v1' => [
            'class' => 'app\api\modules\v1\Module'
        ],
        'v2' => [
            'class' => 'app\api\modules\v2\Module'
        ],
    ],
    'params' => $params,
];

return $config;