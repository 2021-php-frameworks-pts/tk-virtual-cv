<?php

$config = parse_ini_file( $_SERVER['DOCUMENT_ROOT'] . '/' . 'credentials.ini', true);

echo "DSN" . $config['db']['dsn'];

return [
    'class'    => 'yii\db\Connection',
    'dsn' => $config['db']['driver']
        . ':host=' . $config['db']['host']
        . ';port=' . $config['db']['port']
        . ';dbname=' . $config['db']['schema'],
    'username' => $config['db']['username'],
    'password' => $config['db']['password'],
    'charset'  => 'utf8',
];
