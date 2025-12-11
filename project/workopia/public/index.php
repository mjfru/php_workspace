<?php
require '../helpers.php';
// loadView('home');

$uri = $_SERVER['REQUEST_URI'];
// inspectAndDie($uri);
require basePath('router.php');


// php -S localhost:8000 -t public