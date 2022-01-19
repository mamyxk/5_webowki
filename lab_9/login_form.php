<?php

require('db_config.php');

session_start();

if(isset($_SESSION['logged'])){
    //Zalogowany
    echo "juz zalogowany";
}else{
    //Niezalogowany
    if(isset($_POST['username'])){
        $connection = new mysqli($db_host, $db_user, $db_pass,$db_name);
        if ($connection->connect_error) {
            echo "DB error";
            die("Connection failed: " . $connection->connect_error);
          }else{

            echo "Connected to db";
            $uname = mysqli_real_escape_string($connection,$_POST['username']);
            $psw = mysqli_real_escape_string($connection,$_POST['psw']);
            $sql = "SELECT * FROM Users where login = ".$uname." and password = ".$psw.";";
            $result = mysqli_query($connection,$sql);
            $num_rows = mysqli_num_rows($result);
            var_dump($num_rows);
            if($num_rows){
                echo "Zalogowano";
                $_SESSION['logged']=$_POST['username'];
            }
          echo "Connected successfully";
        }
    }else{
        echo "Uname not set";
    }
}

?>