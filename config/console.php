<?php
return [
    'id' => 'app_catalog',
    'basePath' => realpath(__DIR__ . '/../'),
    'components' => [
        'db' => require(__DIR__ . '/db.php'),
    ],
];