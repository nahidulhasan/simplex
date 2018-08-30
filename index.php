<?php

$query = require 'core/bootstrap.php';

$tasks = $query->SelectAll('todo');


require 'views/index.view.php';