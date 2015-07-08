<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/hello', function () {
    return 'Hello!';
});

$app->get('/student',function(){
    $studentTable = new \Practica\Model\StudentTable();
    var_dump($studentTable->findAll());

    return 'student';
});

$app->run();


