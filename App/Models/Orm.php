<?php
class Orm {

    protected $model;
    protected $db;


    public function __construct($model) {

        $this->model = $model;
        $this->db = new Database();
   
    }


    public function getAll() {
        //return $_SESSION[$this->model];
        $sql = "SELECT * FROM $this->model";
        $result = $this->db->queryDataBase($sql);
        return $result->fetchAll();
        
        
    }

    public function getById($id) {
        $sql = "SELECT * FROM $this->model WHERE id = :id";
        $params = [
            ":id" => $id
        ];

        $result = $this->db->queryDataBase($sql, $params);
        return $result->fetch();
    }


    public function add($data, $id = false) {

        if(!isset($data['id'])){
            $columns = implode(", ", array_keys($data));
            $values = ":" . implode(", :", array_keys($data));

            $sql = "INSERT INTO $this->model ($columns) VALUES ($values);";


        foreach ($data as $key => $value) {
            $params[":$key"] = $value;
        }
        }else{
            $values_sql_update = "";

            foreach ($data as $key => $value) {
                if($key != "id")
                $values_sql_update .= "$key = :$key, ";
            }
    
            $values_sql_update = substr($values_sql_update, 0, -2);

            $sql = "UPDATE $this->model SET $values_sql_update WHERE id = :id;";


            foreach ($data as $key => $value) {
                $params[":$key"] = $value;
            }
        }
        $result = $this->db->queryDataBase($sql, $params, $id);
        return $result;
    }


    public function delete($id) {
        $sql = "DELETE FROM $this->model WHERE id = :id";
        $params = [
            ":id" => $id
        ];
        $result = $this->db->queryDataBase($sql, $params);
        return $result;
    }
}
?>