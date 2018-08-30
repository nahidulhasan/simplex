<?php

$query = require 'core/bootstrap.php';


$router = new Router;


$uri = trim($_SERVER["REQUEST_URI"], '/');


require Router::load('routes.php')
    ->direct($uri);


//require 'routes.php';


//require $router->direct($uri);