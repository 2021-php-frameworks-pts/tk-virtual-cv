<?php

$config = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . 'credentials.ini', true);

return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => $config['db']['dsn'],
            'username' => $config['db']['username'],
            'password' => $config['db']['password'],
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
