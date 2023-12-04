<?php

include_once(__DIR__ . "/Orm.php");
class Quiz extends Orm
{

    public function __construct()
    {
        parent::__construct('quizzes');
    }

    public static function createTable()
    {
        $db = new Database();
        $sql = "CREATE TABLE IF NOT EXISTS `quiz`.`quizzes` (
                `id` INT NOT NULL AUTO_INCREMENT,
                `quiz_name` VARCHAR(100) NOT NULL,
                `quiz_subject` VARCHAR(100) NOT NULL,
                PRIMARY KEY (`id`)
            ) ENGINE=InnoDB;";
        $db->queryDataBase($sql);
    }

    public function getQuestions($id)
    {
        $db = new Database();
        $sql = "SELECT COUNT(*) FROM questions WHERE quiz_id = :quiz_id";
        $params = array(
            ":quiz_id" => $id,
        );

        $result = $db->queryDataBase($sql, $params);
        return $result->fetch()['COUNT(*)'];
    }
}
