<?php

    include_once(__DIR__ . "/Orm.php");
    class Question extends Orm {

        public function __construct() {
            parent::__construct('questions');
        }


        public static function createTable(){
            $db = new Database();
            
            $sql = "CREATE TABLE IF NOT EXISTS quiz.questions (
                id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                question VARCHAR(256) NOT NULL,
                quiz_id INT NOT NULL,
                FOREIGN KEY (quiz_id) REFERENCES quiz.quizzes(id) ON DELETE CASCADE
                ) ENGINE=InnoDB;";


            $db->queryDataBase($sql);

        }





    }

?>