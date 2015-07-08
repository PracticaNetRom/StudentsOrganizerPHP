<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/hello', function () {
    return 'Hello!';
});

$app->get('/DeparOrganizer', function () {
    $DeparOrganizerTable= new \Practica\Model\DeparOrganizer\DeparOrganizerTable();
    var_dump($DeparOrganizerTable->findAll());

    return 'The end!';
});

$app->get('/Departaments', function () {
    $DepartamentTable= new \Practica\Model\Departament\DepartamentTable();
    var_dump($DepartamentTable->findAll());

    return 'The end!';
});

$app->get('/Events', function () {
    $EventTable= new \Practica\Model\Event\EventTable();
    var_dump($EventTable->findAll());

    return 'The end!';
});

$app->get('/Faculties', function () {
    $FacultyTable= new \Practica\Model\Faculty\FacultyTable();
    var_dump($FacultyTable->findAll());

    return 'The end!';
});

$app->get('/FacultyAndStudent', function () {
    $FacultyAndStudentTable= new \Practica\Model\FacultyAndStudent\FacultyAndStudentTable();
    var_dump($FacultyAndStudentTable->findAll());

    return 'The end!';
});

$app->get('/PhoneNumber', function () {
    $PhoneNumberTable= new \Practica\Model\PhoneNumber\PhoneNumberTable();
    var_dump($PhoneNumberTable->findAll());

    return 'The end!';
});

$app->get('/PhoneNumberType', function () {
    $PhoneNumberTypeTable= new \Practica\Model\PhoneNumberType\PhoneNumberTypeTable();
    var_dump($PhoneNumberTypeTable->findAll());

    return 'The end!';
});


$app->get('/Students', function () {
    $StudentTable= new \Practica\Model\Student\StudentTable();
    var_dump($StudentTable->findAll());

    return 'The end!';
});






$app->run();
