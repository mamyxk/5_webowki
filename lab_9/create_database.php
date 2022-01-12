<?php

require('db_config.php');

$query_create_db = "create database ".$db_name.";";



$conn = new mysqli($db_host, $db_user, $db_pass);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }else{
    $conn ->query($query_create_db);
    header('Location: create_tables.php');
  }
  
?>