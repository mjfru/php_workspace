<?php
require '../helpers.php';
require basePath('Database.php');
require basePath('Router.php');

// Instantiating the router:
$router = new Router();

// Getting routes:
$routes = require basePath('routes.php');
// loadView('home');

// inspect($uri);
// inspect($method);

// Get current URI & HTTP method:
$uri = $_SERVER['REQUEST_URI'];
// inspectAndDie($uri);
$method = $_SERVER['REQUEST_METHOD'];

// Route the request
$router->route($uri, $method);

// php -S localhost:8000 -t public