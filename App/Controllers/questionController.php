<?
include_once("App/Models/Quiz.php");
include_once("App/Models/Question.php");
include_once("App/Models/Answer.php");

class questionController extends Controller
{
    public function index($id)
    {
        $quizModel = new Quiz();
        $quiz = $quizModel->getById($id);
        $questionModel = new Question();
        $questions = $questionModel->getAll();
        $realQuestions = array();
        foreach ($questions as $question) {
            if ($question['quiz_id'] == $id) {
                $realQuestions[] = $question;
            }
        }
        $params = array(
            "quiz" => $quiz,
            "questions" => $realQuestions,
        );
        $this->render("question/index", $params, "site");
    }

    public function store($id)
    {
        $question = array(
            'question' => $_POST['question'],
            'quiz_id' => $id,
        );
        $questionModel = new Question();
        $idQuestion = $questionModel->add($question, true);

        // str_contains()
        $answer1 = array(
            'answer' => $_POST['a1'],
            'correct' => $_POST['correct'] == "a1" ? 1 : 0,
            'question_id' => $idQuestion,
        );
        $aController = new Answer();
        $aController->add($answer1);
        $answer2 = array(
            'answer' => $_POST['a2'],
            'correct' => $_POST['correct'] == "a2" ? 1 : 0,
            'question_id' => $idQuestion,
        );
        $aController = new Answer();
        $aController->add($answer2);
        $answer3 = array(
            'answer' => $_POST['a3'],
            'correct' => $_POST['correct'] == "a3" ? 1 : 0,
            'question_id' => $idQuestion,
        );
        $aController = new Answer();
        $aController->add($answer3);
        header('Location: /question/index/' . $id);
    }

    public function destroy($idQuestion)
    {
        $questionModel = new Question();
        $questionModel->delete($idQuestion);

        header('Location: /question/index/' . $_GET['quiz_id']);
    }
}
