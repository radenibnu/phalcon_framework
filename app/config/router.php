<?php

$router = $di->getRouter();
// $router = new Phalcon\Mvc\Router();

// Define your routes here
// $router->add('/login', array( 
//     'controller' => 'users', 
//     'action' => 'login', 
//  ));

//  return $router;
 
$router->handle($_SERVER['REQUEST_URI']);
