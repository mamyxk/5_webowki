<?php
if(isset($_POST['wybor_kolor'])){
    if($_POST['wybor_kolor'] == "kolor1"){
        setcookie("background", "rgb(243, 229, 248)", time() + 60, "/");
    }elseif($_POST['wybor_kolor'] == "kolor2"){
        setcookie("background", "rgb(175, 229, 248)", time() + 60, "/");
    }
    else{
        setcookie("background", "rgb(247, 223, 180)", time() + 60, "/");
    }
    header('Location: index.php');
}else{
    header('Location: index.php');
}

?>