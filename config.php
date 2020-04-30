<?php

require "environment.php";

$config = array();

if (ENVIRONMENT == "DEV") :
    define ("BASE_URL", "http://192.168.5.164/coi/");
    $config["dbname"]   = "coi";
    $config["host"]     = "localhost";
    $cofnig["dbuser"]   = "root";
    $config["pass"]     = "";
else:
    define ("BASE_URL", "http://192.168.5.164/coi/");
    $config["dbname"]   = "coi";
    $config["host"]     = "localhost";
    $cofnig["dbuser"]   = "root";
    $config["pass"]     = "";
endif;

?>