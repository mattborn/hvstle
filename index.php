<?php

require 'vendor/autoload.php';

$app = new \Slim\Slim();

$pdo = new PDO('sqlite:.db');
$db = new NotORM($pdo);

$app->get('/', function () use ($app, $db) {
    echo "Hello, world!";
});

$app->run();
