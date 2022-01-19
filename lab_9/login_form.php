<?php

require('db_config.php');

$conn = new mysqli($db_host, $db_user, $db_pass);
session_start();

if(isset($_SESSION['logged'])){
    //Zalogowany
}else{
    //Niezalogowany
    if(isset($_POST['uname'])){
        $connection = new mysqli($db_host, $db_user, $db_pass,$db_name);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
            $uname = $mysqli -> real_escape_string($_POST['uname']);
            $psw = $mysqli -> real_escape_string($_POST['psw']);
            $sql = "SELECT * FROM Users where login = ".$uname." and password = ".$psw.";";
            $result = $conn ->query($sql);
            if(mysqli_num_rows($result)==1){
                echo "Zalogowano";
                $_SESSION['logged']=$_POST['uname'];
            }
          echo "Connected successfully";
    }
}

?>