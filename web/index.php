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

$app->get('/events', function () {

    $eventTable=new \Practica\Model\EventsTable();

    var_dump($eventTable->findAll());

    return '';

});

$app->get('/tasks', function () {

    $taskTable=new \Practica\Model\TasksTable();

    var_dump($taskTable->findAll());

    return '';

});


$app->get('/faculties', function () {

    $facultyTable=new \Practica\Model\FacultiesTable();

    var_dump($facultyTable->findAll());

    return '';

});


$app->get('/departments', function () {

    $departmentTable=new \Practica\Model\DepartmentsTable();

    var_dump($departmentTable->findAll());

    return '';

});



$app->get('/phone_numbers', function () {

    $phone_numberTable=new \Practica\Model\PhoneNumbersTable();

    var_dump($phone_numberTable->findAll());

    return '';

});





$app->run();
