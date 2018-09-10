<?php


 require 'vendor/autoload.php';
 require 'core/bootstrap.php';


 \App\Core\Router::load('routes.php')
    ->direct(App\Core\Request::uri(), \App\Core\Request::method());
