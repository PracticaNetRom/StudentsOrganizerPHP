<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/hi', function () {
    return 'Buna!';
});

$app->run();
