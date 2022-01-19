<!DOCTYPE html>
<html>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        max-width: 700px;
        max-height: 1000px;
        margin: 0 auto;
        margin-top: 20px;
    }

    * {
        box-sizing: border-box
    }

    /* Full-width input fields */
    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
        border-radius: 3px;
    }

    input[type=text]:focus,
    input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    /* Set a style for all buttons */
    button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
        border-radius: 3px;
    }

    button:hover {
        opacity: 1;
    }

    .cancelbtn {
        padding: 14px 20px;
        background-color: #f44336;
    }

    .cancelbtn,
    .signupbtn {
        float: left;
        width: 50%;
    }

    .container {
        padding: 16px;
    }

    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    @media screen and (max-width: 300px) {

        .cancelbtn,
        .signupbtn {
            width: 100%;
        }
    }
</style>

<body>

    <form action="/data_action.php" method="post" style="border:1px solid #ccc; border-radius: 3px;">
        <div class="container">
            <?php
            session_start();
            $name = "Jan";
            $surname = "Kowalski";
            $login = "login";
            if (isset($_SESSION['logged'])) {
                require('db_config.php');

                $connection = new mysqli($db_host, $db_user, $db_pass,$db_name);
                $sql = "SELECT * FROM Users where login = '{$_SESSION['logged']}';";
                $result = mysqli_query($connection,$sql);
                var_dump($result);



                echo '<h1>Hello logged user</h1>';
                echo '<label for="login"><b>Login</b></label>';
                echo '<input type="text" placeholder="Enter login" name="login" required value="' . $login . '">';

                echo '<label for="name"><b>Name</b></label>';
                echo '<input type="text" placeholder="Name" name="name" required value="' . $name . '">';

                echo '<label for="surname"><b>Surname</b></label>';
                echo '<input type="text" placeholder="Surname" name="surname" required value="' . $surname . '" >';

                echo '<div class="clearfix">';
                echo '<button type="button" class="cancelbtn">Cancel</button>';
                echo '<button type="submit" class="signupbtn">Change data</button>';
                echo '</div>';
            }
            else {
                echo '<h1>Sign Up</h1>';
                echo '<p>Please fill in this form to create an account.</p>';
                echo '<hr>';
                
                echo '<label for="login"><b>Login</b></label>';
                echo '<input type="text" placeholder="Enter login" name="login" required>';

                echo '<label for="psw"><b>Password</b></label>';
                echo '<input type="password" placeholder="Enter Password" name="psw" required>';

                echo '<label for="psw-repeat"><b>Repeat Password</b></label>';
                echo '<input type="password" placeholder="Repeat Password" name="psw-repeat" required>';

                echo '<label for="name"><b>Name</b></label>';
                echo '<input type="text" placeholder="Name" name="name" required>';
                
                echo '<label for="surname"><b>Surname</b></label>';
                echo ' <input type="text" placeholder="Surname" name="surname" required>';
                
                echo '<div class="clearfix">';
                echo '<button type="button" class="cancelbtn">Cancel</button>';
                echo '<button type="submit" class="signupbtn">Sign Up</button>';
                echo '</div>';
            }

            ?>

        </div>
    </form>

</body>

</html>