<?php
if(!isset($_SESSION['logged'])){
    ?>
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <div class="login-container">
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
    <span class="login-uname">Username</span>
    <form>
      <button type="submit">Logout</button>
    </form>
  </div>
</div>

<?php
}
?>
