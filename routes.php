<?php


/*$router->register([

    '' => 'controllers/index.php',
    'about' => 'controllers/about.php',
    'contact' => 'controllers/contact.php',
    'signup' => 'controllers/signup.php',
    'about/culture' => 'controllers/about-culture.php'
]);*/

$router->get('', 'controllers/index.php');

$router->get('about', 'controllers/about.php');

$router->get('contact', 'controllers/contact.php');

$router->get('about/culture', 'controllers/about-culture.php');

$router->post('signup', 'controllers/signup.php');
