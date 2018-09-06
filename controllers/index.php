<?php


$tasks = App::get('database')->SelectAll('todo');


require 'views/index.view.php';