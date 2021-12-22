

<?php
session_start();
if (isset($_COOKIE['background'])){
    echo '<body style="background-color:'.$_COOKIE['background'].';>';
}else{
    echo '<body style="background-color:rgb(243, 229, 248);>';
}
?>
<form action="logout.php" method="post">
    <button type="submit">Wyloguj</button>
</form>
<?php
echo "<br \>";
if(isset($_SESSION['logged'])){
    echo "Zalogowany uzytkownik: ".$_SESSION['logged'];
}else{
    ?>
<form action="form.php" method="post">

  <div class="container">
    <label for="login"><b>Login</b></label>
    <input type="text" placeholder="Uzytkownik" name="login" required>

    <label for="password"><b>Hasło</b></label>
    <input type="password" placeholder="Wpisz hasło" name="password" required>

    <button type="submit">Login</button>

  </div>
</form> <?php
}
echo "<br \>";
echo "Session id: ".session_id();

?>

<form action="change_color.php" method="post">
  <input type="radio" id="kolor1" name="wybor_kolor" value="kolor1">
  <label for="kolor1">kolor1</label><br>
  <input type="radio" id="kolor2" name="wybor_kolor" value="kolor2">
  <label for="kolor2">kolor2</label><br>
  <input type="radio" id="kolor3" name="wybor_kolor" value="kolor3">
  <label for="kolor3">kolor3</label>
  <button type="submit">Zmien kolor</button>
</form>

</body>