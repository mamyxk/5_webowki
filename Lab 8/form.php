<?php
session_start();
$accounts = array (
    "Krzysztof" => "12345",
    "Pawel" => "321"
);
if(isset($accounts[$_POST['login']])){
    if($accounts[$_POST['login']] == $_POST['password']){
        echo "Zalogowano";
        $_SESSION['logged'] = $_POST['login'];
        header('Location: index.php');
    }else{
        echo "Zly login lub haslo";
        header('Location: index.php');
    }
}else{
    echo "Nie ma";
    header('Location: index.php');
}

?>