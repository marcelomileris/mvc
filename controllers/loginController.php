<?php 

    class loginController extends Controller{

        public function index() {
            $this->loadView("login");
        }

        public function do() {
            include_once "models/login_model.php";
            $login = new Login_Model();
            $user  = Data::str(INPUT_POST, "user");
            $pass   = Data::str(INPUT_POST, "pass");

            $res = $login->login($user, $pass);
            echo json_encode($res);
        }
    }

?>