<?php

// phpinfo();
require_once __DIR__ .('/../vendor/autoload.php');

define('APP_ROOT', dirname(__DIR__));

// var_dump(APP_ROOT, '<br>');

use App\Routing\Router;

$router = new Router();
$router->handleRequest($_SERVER["REQUEST_URI"]);

// echo("<h1>Hello World</h1>");

