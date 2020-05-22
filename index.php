<?php

require_once 'Router.php';
require_once 'Controller.php';

$controller = new Controller;

$router = new Router($_SERVER['REQUEST_METHOD'], $_GET, file_get_contents('php://input'), $controller);
$router->run();
