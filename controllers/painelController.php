<?php 

    class painelController extends Controller{

        public function index() {
            $user_id = $_SESSION["user_id"];
            if ($user_id == ""):
                header("Location:".BASE_URL);
                die();
            endif;
            $this->loadView("painel");
        }

        public function data() {
            include_once "models/painel_model.php";
            $painel = new Painel_Model();
            $res = $painel->data();
            echo json_encode($res);
        }

        public function active() {
            $user_id = Data::str(INPUT_POST, "user_id");
            $active = Data::str(INPUT_POST, "active");

            include_once "models/painel_model.php";
            $painel = new Painel_Model();

            return $painel->update('users', array("active"=>$active), "id = {$user_id}");
        }

        public function delete() {
            $user_id = Data::str(INPUT_POST, "user_id");
            include_once "models/painel_model.php";
            $painel = new Painel_Model();
            return $painel->del('users', "id = {$user_id}");
        }

        public function add() {
            include_once "models/painel_model.php";
            $painel = new Painel_Model();
            
            $user_id = Data::str(INPUT_POST, "user_id");
            $data = array(
                "name"  => Data::str(INPUT_POST, "name"),
                "user"  => Data::str(INPUT_POST, "user"),
                "email" => Data::str(INPUT_POST, "email"),
                "pass"  => Data::str(INPUT_POST, "pass")
            );
            return $painel->add($user_id, $data);
        }

        public function get() {
            include_once "models/painel_model.php";
            $painel = new Painel_Model();            
            $user_id = Data::str(INPUT_POST, "user_id"); 
            echo json_encode($painel->get($user_id));
        }

    }

?>