<?php

class Database
{
    private $connection;
    private $db_host = "mysql";
    private $db_name = "quiz";
    private $db_user = "hector";
    private $db_pass = "123456";


    public function __construct()
    {
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];
        
        $this->connection = new PDO("mysql:host=$this->db_host;dbname=$this->db_name", $this->db_user, $this->db_pass, $options);

        $this->connection->exec("SET CHARACTER SET UTF8");
    }

    public function getConnection()
    {
        return $this->connection;
    }

    public function getLastId()
    {
        return $this->connection->lastInsertId();
    }   



    public function closeConnection()
    {
        $this->connection = null;
    }

    public function queryDataBase($sql, $params = null, $id = false)
    {
        
        try {
            $statement = $this->connection->prepare($sql);
            if($params != null) {
                $success = $statement->execute($params);
            } else {
                $success = $statement->execute();
            }
            if($id){
                $result = $this->getLastId();
            }else{
                $result = $statement;
            }
            self::closeConnection();
            return $result;


        } catch (Exception $ex) {
            $error = $ex->getMessage();
            echo $ex->getMessage();
            self::closeConnection();
            return null;
        }

    }


}