<?php

    include_once(__DIR__ . "/Orm.php");
    class Score extends Orm {

        public function __construct() {
            parent::__construct('scores');
        }

        public static function createTable(){
            $db = new Database();
            $sql = "CREATE TABLE IF NOT EXISTS quiz.scores (
                id INT AUTO_INCREMENT PRIMARY KEY,
                grade FLOAT NOT NULL,
                correct_answers INT NOT NULL,
                incorrect_answers INT NOT NULL,
                quiz_id INT NOT NULL,
                name VARCHAR(150) NOT NULL,
                FOREIGN KEY (quiz_id) REFERENCES quiz.quizzes(id)
            ) ENGINE=InnoDB;";
            $db->queryDataBase($sql);

        }




    }

?>