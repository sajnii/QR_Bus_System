<?php
include("connection.php");
include("crud/log_category_crud.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR BASED BUS TICKET RESERVATION & TRACKING SYSTEM</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <a href="dashboard.php"><button class="home-icon"><i class="fa fa-home"></i></button></a>
    <div class="log">
        <h3 class="login-head">Login Type Data</h3><br /><br />
        <table>
           <form method="post" href="log_category_view.php" id="log_categoryfrm" onsubmit="return formData()">
               <tr>
                 <td>
                     <label for="log_id">Login ID</label>
                 </td>
                 <td><input type="text" name="log_id" class= "reg-item" size="10" required/></td>
               </tr>

               <tr>
                 <td>
                     <label for="log_type">
                         Login Type
                     </label>
                 </td>
                 <td><input type="text" name="log_type" class= "reg-item" size="255" required/></td>
               </tr>

               <tr>
                 <td>
                     <button type="submit" class="submit_btn" name="log_categorybtn">Submit</button>
                 </td>
                 <td>
                     <button type="reset" class="cancel_btn" name="cancel">Cancel</button>
                 </td>
               </tr>
            </form>

        </table>
    </div>

    <script>
        fuction formData() {
           let log_id = document.forms["log_categoryfrm"]["log_id"].value;
           if (log_id == "" && log_id.length <= 10) {
               alert("Login category ID must be included maximum 10 characters.");
               return false;
           }

           let log_type = document.forms["log_categoryfrm"]["log_type"].value;
           if (log_type == "") {
               alert("Login Type must be filled.");
               return false;
           }
        }
    </script>
</body>
</html>