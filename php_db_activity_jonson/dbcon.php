<?php 
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $db_name = "php_db";

    $conn = new mysqli($hostname, $username, $password, $db_name);

    if ($conn) {
       // echo "Successfully Connected";
    }
    else {
        //echo "Error: ".$conn->connection_error;
    }
 
?>