<?php
  include 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR BASED BUS TICKET RESERVATION & TRACKING SYSTEM - FORGOT PASSWORD</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <a href="login.php"><button class="back-arrow-icon"><i class="fa fa-arrow-left" aria-hidden="true"></i></button></a>
    <div class="log">
        <table>
        <form method="post" action="" id="forgotpass">
           <h3 class="login-head">Forgot Password</h3><br />

           <tr>
                 <td>
                     <label for="email">
                         Email
                     </label>
                 </td>
                 <td><input type="email" name="email" class= "reg-item" size="30" required/></td>
           </tr>

           <tr>
               <td>
                   <button type="submit" class="submit_btn" name="forgot_btn">Submit</button>
               </td>
           </tr>
        </form>
    </table>
    </div>
</body>
</html>
