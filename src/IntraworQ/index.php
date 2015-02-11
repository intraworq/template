<?php 

require __DIR__ . '/../../vendor/autoload.php';

$app = new \Slim\Slim([
	'view' => new \Slim\Views\Smarty(),
	'templates.path' => __DIR__ . '/Views',
	'debug' => true
	]);

require_once('app.php');

$app->run();