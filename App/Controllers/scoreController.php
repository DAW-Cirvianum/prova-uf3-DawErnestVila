<?php
include_once("App/Models/Score.php");
include_once("App/Models/Quiz.php");

class scoreController extends Controller
{

    public function index($id)
    {
        $quizMOdel = new Quiz();
        $scoreModel = new Score();
        $params['scores'] = $scoreModel->getAll();
        $params['quizes'] = $quizMOdel->getAll();
        $this->render("score/index", $params, "site");
    }
}
