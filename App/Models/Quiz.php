<?php

    include_once(__DIR__ . "/Orm.php");
    class Quiz extends Orm {

        public function __construct() {
            parent::__construct('quizzes');
        }

        public static function createTable(){
            $db = new Database();
            $sql = "CREATE TABLE IF NOT EXISTS `quiz`.`quizzes` (
                `id` INT NOT NULL AUTO_INCREMENT,
                `quiz_name` VARCHAR(100) NOT NULL,
                `quiz_subject` VARCHAR(100) NOT NULL,
                PRIMARY KEY (`id`)
            ) ENGINE=InnoDB;";
            $db->queryDataBase($sql);

        }

 


    }

?>