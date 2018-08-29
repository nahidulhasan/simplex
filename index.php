<?php

require 'Task.php';

require 'functions.php';


$pdo = ConnectToDb();

$tasks = fetchAllTask($pdo);

require 'index.view.php';