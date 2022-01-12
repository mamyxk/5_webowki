<?php

require('db_config.php');

$conn = new mysqli($db_host, $db_user, $db_pass);

if(isset($_SESSION['logged'])){
    //Zalogowany
}else{
    //Niezalogowany
    if(isset($_POST['uname'])){
        $connection = new mysqli($db_host, $db_user, $db_pass);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          echo "Connected successfully";
    }
}



?>