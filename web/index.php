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




$app->get('/students', function () {
   $StudentTable= new \Practica\Model\StudentTable();
    var_dump($StudentTable->findAll());
    return '';
});


$app->match('/{ControllerName}/{ActionName}',function ($ControllerName, $ActionName) use($app) {

    $ControllerName= ucfirst($ControllerName);
    $class="\\Practica\\Controllers\\{$ControllerName}Controller";
    $method="{$ActionName}Action";
    $controller=new $class;

    return  $controller->$method($app['request'],$app);

} );

$app['debug']= true;

$app->run();