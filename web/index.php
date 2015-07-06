<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/hello', function () {
    return 'Hello!';
});

$app->get('/Students', function () {
    $StudentTable= new \Practica\Model\StudentTable();
    var_dump($StudentTable->findAll());

    return 'Welcome to Students!';
});

$app->run();
