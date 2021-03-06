<?php

ob_start();
session_start();

use Slim\Factory\AppFactory;

require_once(dirname(__DIR__) . '/vendor/autoload.php');

$container = require(path('config') . '/container.php');
AppFactory::setContainer($container);

$app = AppFactory::create();
$app->addErrorMiddleware(true, true, true);
$app->setBasePath(app('site.basePath'));

$webRoutes = require(path('routes') . '/web.php');
$apiRoutes = require(path('routes') . '/api.php');

$webRoutes($app);
$apiRoutes($app);

$app->run();

ob_end_flush();