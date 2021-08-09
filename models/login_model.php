<?php
    class Login_Model extends Core {

        public function login($user, $pass) {
            $sql = "select id, name, email, pass from users where user = '{$user}' and pass = MD5('{$pass}') and active = 1";
            $res = $this->db->select($sql);
            $_SESSION["user_id"] = $res[0]["id"]??"";
            return (count($res) > 0) ? array("msg"=>"success") : array("msg"=>"error");            
        }

    }
?>