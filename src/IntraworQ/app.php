<?php

$view = $app->view();
$view->parserDirectory = __DIR__ . '/tmp/smarty';
$view->parserCompileDirectory = __DIR__ . '/tmp/compiled';
$view->parserCacheDirectory = __DIR__ . '/tmp/cache';
$view->parserExtensions = array(
	__DIR__ . '/vendor/slim/views/Slim/Views/SmartyPlugins',
	);

$app->error(function (\Exception $e) use ($app) {
    $app->render('error.tpl',['exception' => $e]);
});

$app->notFound(function () use ($app) {
    $app->render('404.tpl', ['uri' => $app->request->getResourceUri()]);
});

$app->get('/', function () use($app) {
	$app->render('index.tpl', ['message'=>'Sample project']);
});