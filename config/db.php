<?php

$config = parse_ini_file( $_SERVER['DOCUMENT_ROOT'] . 'credentials.ini', true);

echo "DSN" . $config['db']['dsn'];

return [
    'class'    => 'yii\db\Connection',
    'dsn'      => $config['db']['dsn'],
    'username' => $config['db']['username'],
    'password' => $config['db']['password'],
    'charset'  => 'utf8',
];
