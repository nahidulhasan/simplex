<?php

require 'Task.php';

$query = require 'bootstrap.php';

$tasks = $query->SelectAll('todo');


require 'index.view.php';