<?php
    class Router{

        private $controller;
        private $method;
        private $id;

        public function __construct(){
            $this->matchRoute();
        }

        public function matchRoute(){

            $url = explode('/', URL);
            $this->controller = !empty($url[0]) ? $url[0] : 'main';
            $this->method = !empty($url[1]) ? $url[1] : 'index';
            $this->id = !empty($url[2]) ? $url[2] : null;
            $this->controller = $this->controller . 'Controller';
            require_once(__DIR__ . "/Controllers/" . $this->controller . ".php");
        }

        public function run(){
            $controller = new $this->controller();
            $method = $this->method;
            $controller->$method($this->id);
        }
    }
?>