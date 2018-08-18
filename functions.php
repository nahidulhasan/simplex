<?php


pbulic function connectToDb(){

	try {

	$pdo = new PDO('mysql:host=127.0.0.1;dbname=simplex', 'root', '');

	} catch (PDOException $e) {

		die($e->getMessage());
	}
	
}