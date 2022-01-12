<?php

require('db_config.php');

$query_create_db = "create database ".$db_name.";";

$query_create_table_users = "create table Users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(20) NOT NULL,
    passowrd VARCHAR(128) NOT NULL,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(40) NOT NULL
    )";

$conn = new mysqli($db_host, $db_user, $db_pass);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }else{
    $conn ->query($query_create_db);
    $conn ->select_db($db_name);
    $conn ->($query_create_table_users);
  }
  



?>