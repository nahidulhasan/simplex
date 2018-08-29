<?php


class Connection 
{	
	
	public static function make()
	{

	   try {

		  return new PDO('mysql:host=database;port=3306;dbname=simplex', 'root', 'common404');

		} catch (PDOException $e) {

			die($e->getMessage());
		}

	}

}