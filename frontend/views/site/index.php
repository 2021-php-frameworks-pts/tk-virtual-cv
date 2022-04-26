<?php

/** @var yii\web\View $this */

use yii\db\Connection;
use yii\db\Query;

$path = $_SERVER['DOCUMENT_ROOT'] . '/' . 'credentials.ini';

$credentials = parse_ini_file($path, true);

var_dump($credentials);

//$connection = new Connection([
//    'dsn' => $credentials['db']['dsn'],
//    'username' => $credentials['db']['username'],
//    'password' => $credentials['db']['password'],
//    'charset' => 'utf8',
//]);

//var_dump($connection);
//
//$connection->open();
//
//print $connection->isActive;

//try {
//    var_dump(Yii::$app->user);
//} catch (exception $exception) {
//    print "abcd";
//    var_dump($exception);
//}
//
//var_dump(Yii::$app);
//
//var_dump("2");
//
//Yii::$app->db->open();
//
//var_dump("3");
//
//var_dump(Yii::$app->db);
//
//var_dump("4");

//$sql = 'SHOW TABLES';
//try {
//    $tables = $connection
//        ->createCommand($sql)
//        ->queryAll();
//} catch (\yii\db\Exception $e) {
//    printError($e);
//}
//print_r($tables);

//var_dump(Yii::$app->db->schema->getTableNames());
//
// TODO DB is not created localy! It is not visivle in php my admin
$skills = (new Query()) // Array with arrays
    ->select(['id'])
    ->from('skills')
    ->all();
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Congratulations!</h1>

        <p class="lead">You have successfully created your frontend Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p><?php
                    echo "Skill list: \n";
                    var_dump($skills);
                    ?>
                </p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
