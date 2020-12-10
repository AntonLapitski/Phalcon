<?php

use Phalcon\Mvc\Router;

$router = new Router();

$router->add(
    '/login',
    [
        'controller' => 'IndexController',
        'action'     => 'index',
    ]
);


return $router;