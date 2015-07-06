<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/students', function () {
   $StudentTable= new \Practica\Model\StudentTable();
    var_dump($StudentTable->findAll());
    return '';
});
$app->run();
