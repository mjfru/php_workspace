<?php

session_start();
require __DIR__ . "/../vendor/autoload.php";
require '../helpers.php';

use Framework\Router;



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