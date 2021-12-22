<?php
session_start();
session_unset();
echo "Wylogowanie";
die();
header('Location: index.php');

?>