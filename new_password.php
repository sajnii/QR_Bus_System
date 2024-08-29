<!Doctype html>
<html>
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR BASED BUS TICKET RESERVATION & TRACKING SYSTEM - NEW PASSWORD</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
     <div class="log">
         <table>
             <form method="post" action="new_password.php" id="newpass">
                 <h3 class="login-head">Reset Password</h3>

                 <?php include("message.php"); ?>
                  <tr>
                    <td>
                       <label for="pwd">
                           New Password
                       </label>
                    </td>
                    <td><input type="password" name="pwd" class= "reg-item" size="10" required/></td>
                  </tr>

                  <tr>
                     <td>
                        <label for="confirm-pwd">
                            Confirm New Password
                         </label>
                     </td>
                     <td><input type="password" name="pwd" class= "reg-item" size="10" required/></td>
                  </tr>

                 <tr>
                     <td>
                        <button type="submit" class="submit_btn" name="new-password">Submit</button>
                     </td>
                 </tr>
             </form>
         </table>
     </div>
</body>
</html>
