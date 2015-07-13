<?php

require_once __DIR__.'/../vendor/autoload.php';

use Silex\Provider\FormServiceProvider;
$app = new Silex\Application();

$app->register(new FormServiceProvider());

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../SRC/Practica/Views',
));
$app->register(new Silex\Provider\TranslationServiceProvider(), array(
    'locale_fallbacks' => array('en'),
));

$app->get('/', function () {
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
    var_dump($StudentTable->insert());

    return 'The end!';
});

$app->get('/StudentParticipate', function () {
    $StudentParticipateTable= new \Practica\Model\StudentParticipate\StudentParticipateTable();
    var_dump($StudentParticipateTable->findAll());

    return 'The end!';
});

$app->get('/Task', function () {
    $TaskTable= new \Practica\Model\Task\TaskTable();
    var_dump($TaskTable->findAll());

    return 'The end!';
});

$app->match('/{controllerName}/{actionName}',function($controllerName,$actionName)
    use ($app)
{
    $controllerName=ucfirst($controllerName);
    $class= "\\Practica\\Controllers\\{$controllerName}Controller";
    $method= "{$actionName}Action";
    $controller = new $class;
    return $controller->$method($app['request'],$app);

});

$app['debug'] = true;
$app->run();
