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


    /**
     * @param $table
     * @param $parameters
     * @return mixed
     * Takes an array of column names and values and returns all of the rows
     * that match the values passed in
     */
    public function fetchWhereEquals($table, $parameters)
    {
        $whereString = '';

        $numParams = count($parameters);
        $i = 0;

        // Generate the query string and prepares the parameters variable for the PDO statement
        foreach($parameters as $key => $value) {
            $whereString .= "{$key}=:{$key}";

            // Add a 'AND' statement to the where clause only if we aren't
            // on the last parameter
            if(!(++$i === $numParams)) {
                $whereString .= ' AND ';
            }

            $parameters[':' . $key] = $value;
            unset($parameters[$key]);
        }

        $sql = sprintf('SELECT * FROM %s WHERE %s',
            $table,
            $whereString
        );

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
            $results = $statement->fetchAll();

            return $results;
        } catch (PDOException $e) {
            dd($e);
        }
    }

    public function removeById($table, $idArr)
    {
        $sql = sprintf('DELETE FROM %s WHERE %s',
            $table,
            'id=:id'
        );

        try {

            $statement = $this->pdo->prepare($sql);
            $idArr = [':id' => $idArr['id']];
            $statement->execute($idArr);

        } catch (PDOException $e) {
            dd($e);
        }
    }
}