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


    public function insert($table, $params)
    {
        $sql = sprintf("INSERT INTO %s (%s) VALUES (%s)",
           $table,
           implode(',', array_keys($params)),

           ":".implode(', :', array_keys($params))

           );
        

        try{

            $stmt = $this->pdo->prepare($sql);

            $stmt->execute($params);

        }catch (Exception $e)
        {
            die($e->getMessage());
        }

    }
}