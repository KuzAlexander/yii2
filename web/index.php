<?php

use yii\web\Application;

define('YII_DEBUG', true);

require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

ini_set('display_errors', true);

$config = require(__DIR__ . '/../config/web.php');

(new Application($config))->run();
