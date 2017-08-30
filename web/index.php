<?php
// web/index.php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

//Definitions
$app['debug'] = true;

//Using Twig template Framework
$app->register(new Silex\Provider\TwigServiceProvider(), [
    'twig.path' => __DIR__.'/../views',
]);

//using Doctrine DBal
$app->register(new Silex\Provider\DoctrineServiceProvider(), [
	'db_options'=> [
	'driver' => 'pdo_sqlite',
	'path' => __DIR__.'/../database/app.db',
	],
]);

$app->get('/bookings/create', function () use ($app) {
    return $app['twig']->render('base.html.twig');

});

$app->run();
?>