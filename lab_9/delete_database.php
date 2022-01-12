<?php

require('db_config.php');

$query_drop = "drop database ".$db_name.";";

$conn = new mysqli($db_host, $db_user, $db_pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $conn ->query($query_drop);

?>