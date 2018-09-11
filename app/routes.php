<?php


$router->get('', 'PagesController@welcome');

$router->get('task', 'PagesController@index');

$router->get('about', 'PagesController@about');

$router->get('contact', 'PagesController@contact');

$router->get('about/culture', 'PagesController@culture');

$router->post('signup', 'PagesController@signup');

$router->get('user', 'UsersController@index');
