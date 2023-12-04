<?php
include_once("App/Models/Quiz.php");

class quizController extends Controller
{

    public function index()
    {
        if (!isset($_SESSION['name'])) {
            $_SESSION['name'] = $_POST['name'];
        }
        $quizModel = new Quiz();
        $quizes = $quizModel->getAll();
        foreach ($quizes as &$quiz) {
            $quizModel = new Quiz();
            $result = $quizModel->getQuestions($quiz['id']);
            $quiz['questions'] = $result;
        }
        $params = array(
            "name" => isset($_SESSION['name']) ? $_SESSION['name'] : null,
            "quizzes" => $quizes,
        );
        $this->render("quiz/index", $params, "site");
    }

    public function store()
    {
        $quiz = array(
            "quiz_name" => $_POST['quiz_name'],
            "quiz_subject" => $_POST['quiz_subject'],
        );
        $quizModel = new Quiz();
        $quizModel->add($quiz);
        header('Location: /quiz/index');
    }

    public function destroy($id)
    {
        $quizModel = new Quiz();
        $quizModel->delete($id);
        header("Location: /quiz/index");
    }
}
