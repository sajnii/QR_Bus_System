<?php
include("connection.php");
include("crud/login_crud.php");

if($_SERVER["REQUEST_METHOD"])
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR BASED BUS TICKET RESERVATION & TRACKING SYSTEM</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4./7.0/css/font-awesome.min.css">
</head>
<body>

    <h4>

        <?php
        error_reporting(0);
        session_start();
        session_destroy();

        echo $_SESSION['loginmessage'];
        ?>

    </h4>

    <a href="index.php"><button class="home-icon"><i class="fa fa-home"></i></button></a>
    <div class="log">
        <h3 class="login-head">User Login</h3><br /><br />
    <form method="post" action="dashboard.php" name="loginfrm" onsubmit="return formData()">
        <label for="un">Username</label>
        <input type="text" name="username" size="12" class= "login-item" required/><br /><br />

        <label for="pw">Password</label>
        <input type="password" name="password" size="10" class="login-item" required/><br /><br /><br />

        <button type="submit" class="submit_btn" name="submit">Submit</button>
        <button type="reset" class="cancel_btn">Cancel</button><br /><br />

        <a class="forgot_pwd" href="forgot_password.php">Forgot Password</a><br /><br />

        <p>Don't have an account? <a href="register.php" class="register">Register Now</a></p>
    </form>
    </div>

    <script>
        function formData() {
             let username = document.forms["loginfrm"]["username"].value;
             if (username == "" && username.length <= 12) {
             alert("Username must be included maximum 12 characters.");
             return false;
           }

           let password = document.forms["loginfrm"]["passwoerd"].value;
           if (password == "" && password.legth <= 10) {
               alert("Password must be included maximum 10 characters.");
               return false;
           }
        }
    </script>
</body>
</html>
