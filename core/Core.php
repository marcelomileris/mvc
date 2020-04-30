<?php

    class Core {

        /**
         * Param 1 -> controller
         * Param 2 -> action
         * Param 3,4,5,... -> parameters
         */
        public function init() {

            $url = "/" . (isset($_GET["url"]) ? $_GET["url"] : "");  
            
            $params = array();
            if (!empty($url) && $url != "/"):

                $url = explode("/", $url);
                array_shift($url);        
                
                $currentController = $url[0]."Controller";
                array_shift($url);

                $currentAction = (isset($url[0]) && !empty($url[0])) ? $url[0] : "index";
                array_shift($url);

                $params = (count($url) > 0) ? $url : array();           
            else:

                $currentController  = "homeController";
                $currentAction      = "index";

            endif;

            $controller = new $currentController();
            call_user_func_array(array($controller, $currentAction), $params);

        }

    }

?>