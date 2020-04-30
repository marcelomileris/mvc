<?php
    class Controller {

        public function loadView($viewName, $params = array()) {
            extract($params);
            require "views/".$viewName.".php";
        }

        public function loadTemplate($viewName, $params = array()) {
            require "views/template.php";
        }

        public function loadViewInTemplate($viewName, $params = array()) {
            extract($params);
            require "views/" . $viewName . ".php";
        }
    }

?>