<?php


class QueryBuilder
{
    protected $pdo;
	
	function __construct(PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	public function SelectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}