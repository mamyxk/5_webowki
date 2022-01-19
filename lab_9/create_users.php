<?php

require('db_config.php');

$query1 = "INSERT INTO `Users` (`id`, `login`, `passowrd`, `firstname`, `lastname`) VALUES ('1', 'Kamil1', 'NotKamil', 'Kamil', 'Haniszewski'); ";
$query2 = "INSERT INTO `Users` (`id`, `login`, `passowrd`, `firstname`, `lastname`) VALUES ('2', 'Kamil2', 'NotKamil', 'Kamil', 'Lontkowski'); ";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }else{
    $conn ->query($query1);
    $conn ->query($query2);
  }
?>