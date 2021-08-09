<?php
    class Painel_Model extends Core {

        public function data() {
            $sql = "select id, date_format(created, '%d/%c/%Y %H:%i') as created, user, name, email, pass, active from users order by created desc";
            return $this->db->select($sql);
        }

        public function get($user_id) {
            $sql = "select id, user, name, email, pass, active from users where id = {$user_id}";
            return $this->db->select($sql);
        }

        public function update($table, $data, $where) {
            return $this->db->update($table, $data, $where);
        }

        public function del($table, $where) {
            return $this->db->delete($table, $where);
        }

        public function add($user_id, $data) {
            if ($user_id == "")
                return $this->db->insert("users", $data);
            else
                return $this->db->update("users", $data, "id = {$user_id}");
        }

    }
?>