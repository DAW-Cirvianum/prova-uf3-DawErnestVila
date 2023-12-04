<?
include_once("App/Models/Quiz.php");
include_once("App/Models/Question.php");
include_once("App/Models/Answer.php");
include_once("App/Models/Score.php");

class gameController extends Controller
{
    public function index($id)
    {
        $quizModel = new Quiz();
        $quiz = $quizModel->getById($id);
        $questionModel = new Question();
        $questions = $questionModel->getByQuizId($id);
        $answers = array();

        foreach ($questions as $question) {
            $answerModel = new Answer();
            $answers[] = $answerModel->getByQuestionId($question['id']);
        }

        $params = array(
            "quiz" => $quiz,
            "questions" => $questions,
            "answers" => $answers,
        );
        $this->render("game/index", $params, "site");
    }

    public function finish($quiz_id)
    {
        $answersModel = new Answer();
        $answersDB = $answersModel->getAll();
        $answers = array();
        $answers2 = array();
        $total = 0;
        $correct = 0;
        $incorrect = 0;



        foreach ($_POST as $post) {
            $answers[] = $post;
        }

        for ($i = 0; $i < count($answers) - 1; $i++) {
            $answers2[] = $answers[$i];
        }


        // echo "<pre>";
        // var_dump($answers2);
        // echo "</pre>";

        foreach ($answers2 as $answer) {
            $answersModel = new Answer();
            $answerDB = $answersModel->getById($answer);
            // echo "<pre>";
            // var_dump($answerDB);
            // echo "</pre>";
            if ($answerDB['correct'] != 0) {
                $correct++;
                $total++;
            } else {
                $incorrect++;
                $total = $total - 0.5;
            }
        }
        $numAnswers = count($answers2);

        $newtotal =  ($total * 10) / $numAnswers;


        $score = array(
            'grade' => $newtotal,
            'correct_answers' => $correct,
            'incorrect_answers' => $incorrect,
            'quiz_id' => $quiz_id,
            'name' => $_POST['name']
        );

        $scoreModel = new Score();
        $scoreModel->add($score);
        header('Location: /score/index/' . $quiz_id);
    }
}
