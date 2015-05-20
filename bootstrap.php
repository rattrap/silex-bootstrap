<?php

define('IS_DEV', (getenv('environment') === 'dev'));

error_reporting(IS_DEV ? E_ALL : 0);
ini_set('display_errors', IS_DEV);

require_once __DIR__ . '/vendor/autoload.php';

$app = new \Silex\Application();
$app['debug'] = IS_DEV;


$app->register(new \Silex\Provider\ServiceControllerServiceProvider());
$app->register(new \Acme\HelloWorld\Provider());
$app->run();