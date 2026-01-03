<?php
require '../helpers.php';
require basePath('Database.php');
$config = require basePath('config/db.php');

$db = new Database($config);
// loadView('home');



// inspect($uri);
// inspect($method);

require basePath('Router.php');
$router = new Router();
$routes = require basePath('routes.php');

$uri = $_SERVER['REQUEST_URI'];
// inspectAndDie($uri);
$method = $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);

// php -S localhost:8000 -t public