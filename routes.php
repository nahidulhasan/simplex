<?php


$router->get('', 'PagesController@index');

$router->get('about', 'PagesController@about');

$router->get('contact', 'PagesController@contact');

$router->get('about/culture', 'PagesController@culture');

$router->post('signup', 'PagesController@signup');
