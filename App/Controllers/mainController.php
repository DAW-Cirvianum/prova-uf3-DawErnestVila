<?php

class mainController extends Controller
{

    public function index()
    {
        if (isset($_SESSION['name'])) {
            unset($_SESSION['name']);
        }
        $this->render("main/index", [], "site");
    }
}
