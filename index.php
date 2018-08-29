<?php

require 'Task.php';

require 'database/Connection.php';

require 'functions.php';


$pdo = Connection::make();

$tasks = fetchAllTask($pdo);


require 'index.view.php';