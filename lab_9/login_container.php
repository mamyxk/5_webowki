<?php
if(isset($_SESSION['logged'])){
    ?>
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <div class="login-container">
    <form action="/action_page.php">
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
    <form action="/action_page.php">
      <button type="submit">Logout</button>
    </form>
  </div>
</div>

<?php
}
?>
