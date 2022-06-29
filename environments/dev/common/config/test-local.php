<?php

$config = parse_ini_file( $_SERVER['DOCUMENT_ROOT'] . '/' .'credentials.ini', true);

return [
    'components' => [
        'db' => [
            'dsn' => $config['db']['driver']
                . ':host=' . $config['db']['host']
                . ';port=' . $config['db']['port']
                . ';dbname=' . $config['db']['schema'],
        ],
    ],
];
