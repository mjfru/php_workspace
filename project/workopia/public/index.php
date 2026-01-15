<?php
require __DIR__ . "/../vendor/autoload.php";
require '../helpers.php';

use Framework\Router;

// require basePath('Framework/Router.php');
// require basePath('Framework/Database.php');

// spl_autoload_register(function ($class) {
//   $path = basePath('Framework/' . $class . '.php');
//   if (file_exists($path)) {
//     require $path;
//   }
// });

// Instantiating the router:
$router = new Router();

// Getting routes:
$routes = require basePath('routes.php');
// loadView('home');

// inspect($uri);
// inspect($method);

// Get current URI & HTTP method:
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// inspectAndDie($uri);

// Route the request
$router->route($uri);

// php -S localhost:8000 -t public