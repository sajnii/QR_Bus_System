<?php
include("connection.php");
include("crud/license_crud.php");
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
   <a href="dashboard.php"><button class="back-arrow-icon"><i class="fa fa-arrow-left" aria-hidden="true"></i></button></a>
   <div class="log">
        <h3 class="login-head">DRIVEN LICENSE INFORMATION</h3><br /><br />
        <table>
           <form method="post" href="#" id="licensefrm" onsubmit="return formData()">
               <tr>
                 <td>
                     <label for="lid">
                         License ID
                     </label>
                 </td>
                 <td><input type="text" name="lid" class= "reg-item" size="10" required/></td>
               </tr>

               <tr>
                 <td>
                     <label for="idate">
                         License Issued Date
                     </label>
                 </td>
                 <td><input type="date" name="idate" class= "reg-item" size="8" required/></td>
               </tr>

               <tr>
                 <td>
                     <label for="edate">
                         License Expired Date
                     </label>
                 </td>
                 <td><input type="date" name="edate" class= "reg-item" size="8" required/></td>
               </tr>

                <tr>
                 <td>
                     <label for="driverid">
                         Bus Driver ID
                     </label>
                 </td>
                 <td><input type="text" name="driverid" class= "license-insert" size="10" required/></td>
               </tr>

               <tr>
                 <td>
                     <button type="submit" class="submit_btn" name="license-insert">Submit</button>
                 </td>
                 <td>
                     <button type="reset" class="cancel_btn" name="cancel">Cancel</button>
                 </td>
               </tr>
           </form>
        </table>
   </div>

   <script>
       function formData() {
           let lid = document.forms["licensefrm"]["lid"].value;
           if (lid == "" && lid.length <= 10) {
               alert("License must be included maximum 10 characters.");
               return false;
           }

           let idate = document.forms["licensefrm"]["idate"].value;
           if (idate == "") {
               alert("License issued date must be filled.");
               return false;
           }

           let edate = document.forms["icensefrm"]["edate"].value;
           if (edate == "") {
               alert("License expired date must be filled.");
               return false;
           }
       }
   </script>
</body>
</html>
