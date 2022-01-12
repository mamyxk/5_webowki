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

    <form action="/action_page.php" style="border:1px solid #ccc; border-radius: 3px;">
        <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="login"><b>Login</b></label>
            <input type="text" placeholder="Enter login" name="login" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Name" name="name" required>

            <label for="surname"><b>Surname</b></label>
            <input type="text" placeholder="Surname" name="surname" required>

            <div class="clearfix">
                <button type="button" class="cancelbtn">Cancel</button>  
                <button type="submit" class="signupbtn">Sign Up</button>
            </div>
        </div>
    </form>

</body>

</html>