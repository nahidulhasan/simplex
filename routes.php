<?php


/*$router->register([

    '' => 'controllers/index.php',
    'about' => 'controllers/about.php',
    'contact' => 'controllers/contact.php',
    'signup' => 'controllers/signup.php',
    'about/culture' => 'controllers/about-culture.php'
]);*/

$router->get('', 'PagesController@index');

$router->get('about', 'PagesController@about');

$router->get('contact', 'PagesController@contact');

$router->get('about/culture', 'PagesController@culture');

$router->post('signup', 'PagesController@signup');
