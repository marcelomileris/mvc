<?php
    class homeController extends Controller {

        public function index() {

            $params = array(
                "info" => "Marcelo Mileris"
            );
            
            $this->loadTemplate("home", $params);
        }
        
    }

?>