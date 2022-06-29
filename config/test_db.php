<?php
$config = parse_ini_file( $_SERVER['DOCUMENT_ROOT'] . '/' . 'credentials.ini', true);

$db = require __DIR__ . '/db.php';
// test database! Important not to run tests on production or development databases
$db['dsn'] = $config['db']['driver']
. ':host=' . $config['db']['host']
. ';port=' . $config['db']['port']
. ';dbname=' . $config['db']['schema'];

return $db;
