<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Forms</title>
  </head>
  <body>
  <?php
$name = $surname = $number = $email = $state = $city = $interest = $gender = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $surname = $_POST["surname"];
  $number = $_POST["number"];
  $email = $_POST["email"];
  $state = $_POST["state"];
  $city = $_POST["city"];
  if (isset($_POST['interest']) && !empty($_POST['interest'])) {
    $interest = $_POST["interest"];
  }
  if (isset($_POST['gender']) && !empty($_POST['gender'])) {
    $gender = $_POST["gender"];
  }
}
?>
    <div class="signup-content">
      <div class="signup-form">
        <form
          method="POST"
          class="register-form"
          id="register-form"
          action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
          novalidate
        >
          <h2>Student registration form</h2>
          <div class="form-row">
            <div class="form-group">
              <label for="name">Name :</label>
              <input type="text" name="name" id="name" value="<?php echo $name ?>"/>
            </div>
            <div class="form-group">
              <label for="surname">Surname :</label>
              <input type="text" name="surname" id="surname" value="<?php echo $surname ?>" />
            </div>
          </div>
          <div class="form-group">
            <label for="number">Number :</label>
            <input type="text" name="number" id="number" placeholder="111222333" value="<?php echo $number ?>" />
          </div>
          <div class="form-radio">
            <label for="gender" class="radio-label">Gender :</label>
            <div class="form-radio-item">
              <input type="radio" name="gender" id="male" value="male" />
              <label for="male">Male</label>
              <span class="check"></span>
            </div>
            <div class="form-radio-item">
              <input type="radio" name="gender" id="female" value="female"/>
              <label for="female">Female</label>
              <span class="check"></span>
            </div>
          </div>
          <div class="form-radio">
            <label for="interest" class="radio-label">Interest :</label>
            <div class="form-radio-item">
              <input type="checkbox" name="interest[]" value="nodejs" id="nodejs" />
              <label for="nodejs">NodeJS</label>
            </div>
            <div class="form-radio-item">
              <input type="checkbox" name="interest[]" value="php" id="php" />
              <label for="PHP">PHP</label>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="state">State :</label>
              <div class="form-select">
                <select name="state" id="state">
                  <option value=""></option>
                  <option value="dolnoslaskie">Dolnośląskie</option>
                  <option value="mazowiecke">Mazowiecke</option>
                  <option value="opolskie">Opolskie</option>
                  <option value="slaskie">Śląskie</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="city">City :</label>
              <div class="form-select">
                <select name="city" id="city">
                  <option value=""></option>
                  <option value="wroclaw">Wrocław</option>
                  <option value="warszawa">Warszawa</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" value="<?php echo $email ?>"/>
          </div>
          <div class="form-submit">
            <input
              type="submit"
              value="Reset All"
              class="submit"
              name="reset"
              id="reset"
            />
            <input
              type="submit"
              value="Submit Form"
              class="submit"
              name="submit"
              id="submit"
            />
          </div>
        </form>
      </div>
    </div>
    <?php
echo "<h2>Your Input:</h2>";
echo $name . "<br>";
echo $surname . "<br>";
echo $number . "<br>";
echo $email . "<br>";
echo $gender . "<br>";
echo $state . "<br>";
echo $city . "<br>";
// foreach($interest as $interes){
//     echo $interes . " ";
// }
?>
  </body>
</html>
