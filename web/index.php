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

$app->get('/student',function(){
    $studentTable = new \Practica\Model\StudentTable();
    var_dump($studentTable->findAll());

    return 'student';
});

$app->match('/{ControllerName}/{ActionName}',function($ControllerName,$ActionName) use($app){

    $ControllerName=ucfirst($ControllerName);
    $class='\\Practica\\Controller\\'.$ControllerName.'Controller';
    $Method = $ActionName . 'Action';
    $Controller = new $class;
    return $Controller->$Method($app['request'],$app);
});




$app ['debug'] =true;

$app->run();


