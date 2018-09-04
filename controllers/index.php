<?php


$tasks = $app['database']->SelectAll('todo');


require 'views/index.view.php';