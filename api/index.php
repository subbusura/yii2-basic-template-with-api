<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../protected/vendor/autoload.php');
require(__DIR__ . '/../protected/vendor/yiisoft/yii2/Yii.php');
require(__DIR__ . '/../protected/api/config/aliases.php');

$config = require(__DIR__ . '/../protected/api/config/main.php');




$application = new yii\web\Application($config);
$application->run();
