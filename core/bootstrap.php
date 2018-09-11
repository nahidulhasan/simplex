<?php

use App\Core\App;


define('ROOT_DIR', realpath(__DIR__ . '/../'));

$dotenv = new Dotenv\Dotenv(ROOT_DIR);

$dotenv->load();


App::bind('config', require 'config.php');


App::bind('database', function(){
    new QueryBuilder(
        Connection::make(App::get('config')['database'])
    );
});


/**
 * Load view part
 *
 * @param $name
 * @param null $data
 * @return mixed
 */
function view($name, $data = null)
{
    if (!empty($data)) {
        extract($data);
    }

    return require "app/views/{$name}.view.php";
}
