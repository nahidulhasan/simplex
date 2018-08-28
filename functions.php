<?php

function connectToDb(){

	try {

	  return new PDO('mysql:host=127.0.0.1;port=33030;dbname=simplex', 'root', 'common404');

	} catch (PDOException $e) {

		die($e->getMessage());
	}
	
}