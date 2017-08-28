<?php


class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


    /**
     * @param $table
     * @param $parameters
     * insert a set of data into a specific database table
     */
    public function insert($table, $parameters)
    {
        $sql = sprintf('INSERT INTO %s(%s) VALUES(%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );
        try {
            $statement = $this->pdo->prepare($sql);

            foreach ($parameters as $key => $value) {
                $parameters[':' . $key] = $value;
                unset($parameters[$key]);
            }
            $statement->execute($parameters);
        } catch (Exception $e) {
            //dd($e);
        }
    }
}