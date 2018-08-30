<?php

$query = require 'core/bootstrap.php';

//$tasks = $query->SelectAll('todo');


//require 'views/index.view.php';


$router = new Router;


$uri = trim($_SERVER["REQUEST_URI"], '/');


require 'routes.php';


require $router->direct($uri);