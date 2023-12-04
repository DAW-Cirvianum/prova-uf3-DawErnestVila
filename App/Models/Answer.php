<?php

    include_once(__DIR__ . "/Orm.php");
    class Answer extends Orm {

        public function __construct() {
            parent::__construct('answers');
        }

        public static function createTable(){
            $db = new Database();
            $sql ="CREATE TABLE quiz.answers (
                id INT AUTO_INCREMENT PRIMARY KEY,
                answer VARCHAR(256),
                correct BOOLEAN,
                question_id INT,
                FOREIGN KEY (question_id) REFERENCES quiz.questions(id) ON DELETE CASCADE
            );";
            
            $db->queryDataBase($sql);

        }


    }

?>