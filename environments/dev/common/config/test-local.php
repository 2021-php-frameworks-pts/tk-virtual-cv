<?php

$config = parse_ini_file( $_SERVER['DOCUMENT_ROOT'] . 'credentials.ini', true);

return [
    'components' => [
        'db' => [
            'dsn' => $config['db']['dsn'],
        ],
    ],
];
