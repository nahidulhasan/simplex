<?php

use App\Core\App;


define('ROOT_DIR', realpath(__DIR__ . '/../'));

$dotenv = new Dotenv\Dotenv(ROOT_DIR);

$dotenv->load();


App::bind('config', require 'config.php');


App::bind('database', new QueryBuilder(

    Connection::make(App::get('config')['database']))
);


function view($name, $data)
{

    extract($data);

    return require "views/{$name}.view.php";

}
