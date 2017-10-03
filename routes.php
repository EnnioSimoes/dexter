<?php

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use League\Route\Strategy\ApplicationStrategy;
use League\Route\Strategy\JsonStrategy;

$container = new League\Container\Container;

$container->share('response', Zend\Diactoros\Response::class);
$container->share('request', function () {
    return Zend\Diactoros\ServerRequestFactory::fromGlobals(
        $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
    );
});

$container->share('emitter', Zend\Diactoros\Response\SapiEmitter::class);

$route = new League\Route\RouteCollection($container);
############## LIST ROUTES ##############
##### Whrite yours routes in here ####### 

$route->get('/clientes/gerenciar', 'App\Controller\ClienteController::index');

############## END LIST ROUTES ##############
$response = $route->dispatch($container->get('request'), $container->get('response'));
$container->get('emitter')->emit($response);

