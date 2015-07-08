<?php

require_once __DIR__.'/../vendor/autoload.php';

use Silex\Provider\FormServiceProvider;

$app = new Silex\Application();

$app->register(new FormServiceProvider());

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../src/Practica/Views',
));
$app->register(new Silex\Provider\TranslationServiceProvider(), array(
    'locale_fallbacks' => array('en'),
));



$app->get('/hello', function () {
    return 'Hello!';

});


$app->get('/students', function () {

$StudentTable = new \Practica\Model\StudentTable();
    var_dump($StudentTable->findAll());
    return 'Students Hello';
});
$app->match("/{controllerName}/{actionName}",function($controllerName, $actionName)
use ($app)
{
    $controllerName = ucfirst($controllerName);
    $class = '\\Practica\\Controller\\'.$controllerName.'Controller';
    $method = "{$actionName}Action";
    $controller = new $class;
    return $controller->$method ($app ['request'],$app );
});


$app ['debug'] = true;
$app->run();
