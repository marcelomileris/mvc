<?php
    class Data {

        static public function str($type, $field) {
            return strtoupper(trim(filter_input($type, $field, FILTER_SANITIZE_SPECIAL_CHARS)));
        }
        
    }

?>