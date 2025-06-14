<?php 

require_once __DIR__ .('/../vendor/autoload.php');

define('APP_ROOT', dirname(__DIR__));

use App\Routing\Router;

$router = new Router();
$router->handleRequest($_SERVER["REQUEST_URI"]);
