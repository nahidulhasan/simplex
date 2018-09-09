<?php


App::bind('config', require 'config.php');


App::bind('database', new QueryBuilder(

    Connection::make(App::get('config')['database']))
);


function view($name, $data)
{

    return require "views/{$name}.view.php";

}
