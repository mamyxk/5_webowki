<?php
session_start();
require('db_config.php');
$connection = new mysqli($db_host, $db_user, $db_pass,$db_name);
if(isset($_SESSION['logged'])){
    $login = mysqli_real_escape_string($connection,$_POST['login']);
    $name = mysqli_real_escape_string($connection,$_POST['name']);
    $surname = mysqli_real_escape_string($connection,$_POST['surname']);
    $sql = "update Users SET login = '{$login}', firstname = '{$name}', lastname = '{$surname}' where login = '{$_SESSION['logged']}';";

    mysqli_query($connection,$sql);
}else{

}

header('Location: index.php');
?>