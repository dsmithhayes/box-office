<?php

require_once 'vendor/autoload.php';

use DI\Container;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

$container = new Container();
AppFactory::setContainer($container);

$app = AppFactory::create();

return $app;
