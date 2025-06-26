<?php 

require_once __DIR__ .('/../vendor/autoload.php');

define('APP_ROOT', dirname(__DIR__));
define('APP_ENV', './config/.env.local');

use App\Routing\Router;

$router = new Router();
$router->handleRequest($_SERVER["REQUEST_URI"]);

// use App\Db\Mysql;

// $mysql = Mysql::getInstance();
// // // echo('<pre>');
// // // var_dump($mysql);
// // // echo('</pre>');
// var_dump($mysql->getPDO());
// $mysql->getPDO();


/*
use App\Routing\Router;

$pageController = new PageController();
$paeControler->home();
 */