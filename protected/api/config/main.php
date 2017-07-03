<?php



$config = [

    'id' => 'app-api',

    'basePath' => dirname(__DIR__),

    'bootstrap' => ['log'],

    'modules'=>[

          'v1'=>[

           'class' => 'api\modules\v1\Module',
           ],

    ],

    'components' => [

     'authManager' => [

            'class' => 'yii\rbac\DbManager',

        ],

        'user' => [

            'identityClass' => 'api\modules\v1\models\User',

            'enableAutoLogin' =>false,

        ],

        'request' => [
    				'parsers' => [
    						'application/json' => 'yii\web\JsonParser',
    				]
    		],

      'response' => [

            'class' => 'yii\web\Response',

            'on beforeSend' => function ($event) {

                $response = $event->sender;

                if ($response->data !== null) {

                    if($response->isSuccessful)

                    {

                        $response->data = [

                                'success' => $response->isSuccessful,

                                'data' => $response->data,

                                'statusCode'=>$response->statusCode,

                                'error'=>null

                        ];
 

                    }else{

                    
                        $response->data = [

                                'success' => $response->isSuccessful,

                                'data' =>null,

                                'statusCode'=>$response->statusCode,

                                'error'=> $response->data,

                        ];

                            

                        

                    }

                    $response->statusCode = 200;

                }

            },

        ],

    	'errorHandler' => [

    			'errorAction' => 'v1/default/error',

    	],

    	'cache' => [

    			'class' => 'yii\caching\FileCache',

    	],

        'log' => [

            'traceLevel' => YII_DEBUG ? 3 : 0,

            'targets' => [

                [

                    'class' => 'yii\log\FileTarget',

                    'levels' => ['error', 'warning'],

                ],

            ],

        ],

          'urlManager' =>[

                'enablePrettyUrl' => true,

                'showScriptName' => false,

                'rules' => [

                        [
                               'class'  => 'yii\rest\UrlRule',

                                'controller'  => [

                                        'v1/user'

                                ],

                                'pluralize'=>false,

                                 'except' => ['view','delete', 'create', 'update'],

                                'extraPatterns' => [
                                        'GET  dashboard/<id>' => 'dashboard',
                                       
                                ]

                

                        ]

                ],

        ],

        'db' => require(__DIR__ . '/db.php'),

        

    ],
    
    'params' =>require(__DIR__ . '/params.php'),
    'defaultRoute'=>'v1/default/index'

];





return $config;

