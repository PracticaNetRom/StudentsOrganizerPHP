<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/hello', function () {
    return 'Hello!';
});

$app->get('/student', function () {

    $studentTable=new \Practica\Model\StudentsTable();

    var_dump($studentTable->findAll());

    return '';

});






$app->run();
