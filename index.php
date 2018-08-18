<?php

require 'Task.php';


$statement = $pdo->prepare('select * from todo');

$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');


var_dump($tasks[0]->foobar());


require 'index.view.php';