<?php

$host = $_ENV['MYSQL_HOST'];
$dbname = $_ENV['MYSQL_NAME'];
$username = $_ENV['MYSQL_USER'];
$password = $_ENV['MYSQL_PASS'];
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
