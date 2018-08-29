<?php

/*function connectToDb(){

	try {

	  return new PDO('mysql:host=database;port=3306;dbname=simplex', 'root', 'common404');

	} catch (PDOException $e) {

		die($e->getMessage());
	}
	
}*/


function fetchAllTask($pdo)
{
	$statement = $pdo->prepare('select * from todo');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

}