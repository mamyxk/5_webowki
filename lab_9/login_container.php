<?php
session_start();
if(!isset($_SESSION['logged'])){
    ?>
<div class="topnav">
  <a class="active" href="#home">Home</a>
  
  <div class="login-container">
  <form action="./data.php" style="float:right;">
      <button type="submit">Rejestruj</button>
  </form>
    <form method="post" action="./login_form.php">
      <input type="text" placeholder="Username" name="username">
      <input type="text" placeholder="Password" name="psw">
      <button type="submit">Login</button>
    </form>
    
  </div>
</div>

<?php
}else{
?>
<div class="topnav">
  <a class="active" href="#home">Home</a>
  
  <div class="login-container">
    <form action="./logout.php">
      <button type="submit">Logout</button>
    </form>
    <span class="login-uname" style="float:right;"><?php  echo $_SESSION['logged'];?></span>
    <form action="./data.php" style="float:right;">
      <button type="submit">Edytuj Dane</button>
    </form>
  </div>
  
    
</div>

<?php
}
?>
