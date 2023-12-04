<?
include_once("App/Models/Quiz.php");
include_once("App/Models/Question.php");
include_once("App/Models/Answer.php");

class gameController extends Controller
{
    public function index($id)
    {
        $quizModel = new Quiz();
        $quiz = $quizModel->getById($id);
        $questionModel = new Question();
        $questions = 
        $params = array(
            "quiz" => $quiz,
        );
        $this->render("game/index", $params, "site");
    }
}
