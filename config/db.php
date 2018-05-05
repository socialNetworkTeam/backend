<?php
$DB_HOST = getenv('DB_HOST');
$DB_NAME = getenv('DB_NAME');
$DB_USER = getenv('DB_USER');
$DB_PASSWORD = getenv('DB_PASSWORD');

return [
    'class' => 'yii\db\Connection',
    'dsn' => "mysql:host=$DB_HOST;dbname=$DB_NAME",
    'username' => $DB_USER,
    'password' => $DB_PASSWORD,
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
