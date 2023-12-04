<?php 
    include_once("App/Models/Quiz.php");
    include_once("App/Models/Question.php");
    include_once("App/Models/Answer.php");
    include_once("App/Models/Score.php");
    class resetController extends Controller{
            
            public function run(){
 
                $db = new Database();
                $sql = 'DROP TABLE IF EXISTS quizzes,questions,answers,scores';
                $db->queryDataBase($sql);
               
                Quiz::createTable();
                Question::createTable();
                Answer::createTable();
                Score::createTable();

                $quiz = [
                    "quiz_name" => "Geography Quiz",
                    "quiz_subject" => "Geography"
                ];


                $quizModel = new quiz();

                $quizModel->add($quiz);

                $questionModel = new Question();
                
                $question = [
                    "question" => "Capital of France?",
                    "quiz_id" => 1
                ];

                $questionModel->add($question);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Paris",
                    "correct" => '1',
                    "question_id" => 1
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Madrid",
                    "correct" => '0',
                    "question_id" => 1
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Barcelona",
                    "correct" => '0',
                    "question_id" => 1
                ];

                $answerModel->add($answer);
                
                $questionModel = new Question();

                $question = [
                    "question" => "Continent of the Great Wall of China?",
                    "quiz_id" => 1
                ];

                $questionModel->add($question);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Asia",
                    "correct" => '1',
                    "question_id" => 2
                ];

                $answerModel->add($answer);


                $answerModel = new Answer();

                $answer = [
                    "answer" => "Africa",
                    "correct" => '0',
                    "question_id" => 2
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Europe",
                    "correct" => '0',
                    "question_id" => 2
                ];

                $answerModel->add($answer);
 
                $questionModel = new Question();

                $question = [
                    "question" => "Longest river in the world?",
                    "quiz_id" => 1
                ];

                $questionModel->add($question);


                $answerModel = new Answer();

                $answer = [
                    "answer" => "Amazon",
                    "correct" => '0',
                    "question_id" => 3
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Yangtze",
                    "correct" => '0',
                    "question_id" => 3
                ];

                $answerModel->add($answer);


                $answerModel = new Answer();

                $answer = [
                    "answer" => "Nile",
                    "correct" => '1',
                    "question_id" => 3
                ];


                $answerModel->add($answer);

                $questionModel = new Question();

                $question = [
                    "question" => "Largest country in the world?",
                    "quiz_id" => 1
                ];

                $questionModel->add($question);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Russia",
                    "correct" => '1',
                    "question_id" => 4
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "China",
                    "correct" => '0',
                    "question_id" => 4
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "USA",
                    "correct" => '0',
                    "question_id" => 4
                ];

                $answerModel->add($answer);

                $questionModel = new Question();

                $question = [
                    "question" => "Largest ocean in the world?",
                    "quiz_id" => 1
                ];

                $questionModel->add($question);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Atlantic",
                    "correct" => '0',
                    "question_id" => 5
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Pacific",
                    "correct" => '1',
                    "question_id" => 5
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Indian",
                    "correct" => '0',
                    "question_id" => 5
                ];

                $answerModel->add($answer);

                
                //          QUIZ 2



                $quiz = [
                    "quiz_name" => "Spain History Quiz",
                    "quiz_subject" => "History"
                ];


                $quizModel = new quiz();

                $quizModel->add($quiz);

                $questionModel = new Question();

                $question = [
                    "question" => "Who was the first king of Spain?",
                    "quiz_id" => 2
                ];

                $questionModel->add($question);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Ferdinand II of Aragon",
                    "correct" => '0',
                    "question_id" => 6
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Isabella I of Castile",
                    "correct" => '0',
                    "question_id" => 6
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Charles I of Spain",
                    "correct" => '1',
                    "question_id" => 6
                ];

                $answerModel->add($answer);

                $questionModel = new Question();

                $question = [
                    "question" => "Who was the last king of Spain?",
                    "quiz_id" => 2
                ];

                $questionModel->add($question);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Juan Carlos I",
                    "correct" => '0',
                    "question_id" => 7
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Alfonso XIII",
                    "correct" => '0',
                    "question_id" => 7
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Alfonso XII",
                    "correct" => '1',
                    "question_id" => 7
                ];

                $answerModel->add($answer);

                $questionModel = new Question();

                $question = [
                    "question" => "Who was the first president of Spain?",
                    "quiz_id" => 2
                ];

                $questionModel->add($question);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Francisco Franco",
                    "correct" => '0',
                    "question_id" => 8
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Adolfo Suárez",
                    "correct" => '1',
                    "question_id" => 8
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Felipe González",
                    "correct" => '0',
                    "question_id" => 8
                ];

                $answerModel->add($answer);

                $questionModel = new Question();

                $question = [
                    "question" => "Who was the first prime minister of Spain?",
                    "quiz_id" => 2
                ];  

                $questionModel->add($question);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Francisco Franco",
                    "correct" => '0',
                    "question_id" => 9
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Adolfo Suárez",
                    "correct" => '1',
                    "question_id" => 9
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Felipe González",
                    "correct" => '0',
                    "question_id" => 9
                ];

                $answerModel->add($answer);

                $questionModel = new Question();

                $question = [
                    "question" => "Who was the first president of the Second Spanish Republic?",
                    "quiz_id" => 2
                ];

                $questionModel->add($question);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Francisco Franco",
                    "correct" => '0',
                    "question_id" => 10
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Manuel Azaña",
                    "correct" => '1',
                    "question_id" => 10
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Felipe González",
                    "correct" => '0',
                    "question_id" => 10
                ];

                $answerModel->add($answer);

                $quiz = [
                    "quiz_name" => "Catalonia Quiz",
                    "quiz_subject" => "Society"
                ];

                $quizModel = new quiz();

                $quizModel->add($quiz);

                $questionModel = new Question();

                $question = [
                    "question" => "What is the capital of Catalonia?",
                    "quiz_id" => 3
                ];  

                $questionModel->add($question);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Barcelona",
                    "correct" => '1',
                    "question_id" => 11
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Girona",
                    "correct" => '0',
                    "question_id" => 11
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Tarragona",
                    "correct" => '0',
                    "question_id" => 11
                ];

                $answerModel->add($answer);

                $questionModel = new Question();

                $question = [
                    "question" => "What is the official language of Catalonia?",
                    "quiz_id" => 3
                ];

                $questionModel->add($question);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Spanish",
                    "correct" => '0',
                    "question_id" => 12
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Catalan",
                    "correct" => '1',
                    "question_id" => 12
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "French",
                    "correct" => '0',
                    "question_id" => 12
                ];

                $answerModel->add($answer);

                $questionModel = new Question();

                $question = [
                    "question" => "What is the official name of Catalonia?",
                    "quiz_id" => 3
                ];

                $questionModel->add($question);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Catalonia",
                    "correct" => '0',
                    "question_id" => 13
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Catalan Republic",
                    "correct" => '0',
                    "question_id" => 13
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Catalan Republic of Spain",
                    "correct" => '1',
                    "question_id" => 13
                ];

                $answerModel->add($answer);

                $questionModel = new Question();

                $question = [
                    "question" => "What is the official name of the Catalan government?",
                    "quiz_id" => 3
                ];

                $questionModel->add($question);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Generalitat",
                    "correct" => '1',
                    "question_id" => 14
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Generalitat of Catalonia",
                    "correct" => '0',
                    "question_id" => 14
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Catalan Government",
                    "correct" => '0',
                    "question_id" => 14
                ];

                $answerModel->add($answer);

                $questionModel = new Question();

                $question = [
                    "question" => "What is the official name of the Catalan Parliament?",
                    "quiz_id" => 3
                ];

                $questionModel->add($question);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Parliament of Catalonia",
                    "correct" => '0',
                    "question_id" => 15
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Catalan Parliament",
                    "correct" => '1',
                    "question_id" => 15
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Catalan Government",
                    "correct" => '0',
                    "question_id" => 15
                ];

                $answerModel->add($answer);

                
                $quiz = [
                    "quiz_name" => "Formula one",
                    "quiz_subject" => "Sports"
                ];

                $quizModel = new quiz();

                $quizModel->add($quiz);

                $questionModel = new Question();

                $question = [
                    "question" => "Who is the current Formula One world champion?",
                    "quiz_id" => 4
                ];

                $questionModel->add($question);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Lewis Hamilton",
                    "correct" => '0',
                    "question_id" => 16
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Max Verstappen",
                    "correct" => '1',
                    "question_id" => 16
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Fernando Alonso",
                    "correct" => '0',
                    "question_id" => 16
                ];

                $answerModel->add($answer);

                $questionModel = new Question();

                $question = [
                    "question" => "Who is the youngest Formula One world champion?",
                    "quiz_id" => 4
                ];

                $questionModel->add($question);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Sebastian Vettel",
                    "correct" => '1',
                    "question_id" => 17
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Lewis Hamilton",
                    "correct" => '0',
                    "question_id" => 17
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Fernando Alonso",
                    "correct" => '0',
                    "question_id" => 17
                ];

                $answerModel->add($answer);

                $questionModel = new Question();

                $question = [
                    "question" => "Who is the oldest Formula One world champion?",
                    "quiz_id" => 4
                ];

                $questionModel->add($question);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Juan Manuel Fangio",
                    "correct" => '1',
                    "question_id" => 18
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Lewis Hamilton",
                    "correct" => '0',
                    "question_id" => 18
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Fernando Alonso",
                    "correct" => '0',
                    "question_id" => 18
                ];

                $answerModel->add($answer);

                $questionModel = new Question();

                $question = [
                    "question" => "Who is the driver with more Formula One world championships?",
                    "quiz_id" => 4
                ];

                $questionModel->add($question);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Michael Schumacher",
                    "correct" => '1',
                    "question_id" => 19
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Lewis Hamilton",
                    "correct" => '0',
                    "question_id" => 19
                ];

                $answerModel->add($answer);

                $answerModel = new Answer();

                $answer = [
                    "answer" => "Fernando Alonso",
                    "correct" => '0',
                    "question_id" => 19
                ];

                $answerModel->add($answer);

                


                $scoreModel = new Score();

                $score = [
                    "grade" => 5.75,
                    "quiz_id" => 1,
                    "correct_answers" => 6,
                    "incorrect_answers" => 1,
                    "name" => "John Doe"
                ];

                $scoreModel->add($score);

                $scoreModel = new Score();

                $score = [
                    "quiz_id" => 2,
                    "grade" => 7.5,
                    "correct_answers" => 3,
                    "incorrect_answers" => 2,
                    "name" => "Mike Smith"
                ];

                $scoreModel->add($score);

                $scoreModel = new Score();

                $score = [
                    "quiz_id" => 3,
                    "grade" => 10,
                    "correct_answers" => 5,
                    "incorrect_answers" => 0,
                    "name" => "Jane Doe"
                ];

                $scoreModel->add($score);

                $scoreModel = new Score();

                $score = [
                    "quiz_id" => 4,
                    "grade" => 7.5,
                    "correct_answers" => 3,
                    "incorrect_answers" => 2,
                    "name" => "Christian Stuani"
                ];

                $scoreModel->add($score);

                header("Location: /items/index");
                die();
                
            }

    }

?>