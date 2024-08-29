<?php
include("connection.php");
include("crud/location_crud.php");
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>QR BASED BUS TICKET RESERVATION & TRACKING SYSTEM - LOCATION</title>
   <link rel="stylesheet" type="text/css" href="styles.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   <a href="dashboard.php"><button class="back-arrow-icon"><i class="fa fa-arrow-left" aria-hidden="true"></i></button></a>
   <div class="log">
        <h3 class="login-head">Location Data</h3><br /><br />
           <form method="POST" href="#" id="locationfrm" onsubmit="return formData()">
             <table>  
                <tr>
                 <td>
                     <label for="locid">
                         Location ID
                     </label>
                 </td>
                 <td><input type="text" name="locid" id="locid" class= "reg-item" size="10" required/></td>
               </tr>

                <tr>
                 <td>
                     <label for="province">
                          Province
                     </label>
                 </td>
                 <td><input type="text" name="province" id="province" class= "reg-item" size="255" required/></td>
               </tr>

                <tr>
                 <td>
                     <label for="city">
                         City
                     </label>
                 </td>
                 <td><input type="text" name="city" id="city" class= "reg-item" size="255" required/></td>
               </tr>

                <tr>
                 <td>
                     <label for="zcode">
                         Zip Code
                     </label>
                 </td>
                 <td><input type="number" name="zcode" id="zcode" class= "reg-item" size="10" required/></td>
               </tr>

               <tr>
                 <td>
                     <button type="submit" class="submit_btn" name="submit-location">Submit</button>
                 </td>
                 <td>
                     <button type="reset" class="cancel_btn" name="cancel">Cancel</button>
                 </td>
               </tr>       
             </table>
           </form>

           <script>
               function formData() {
                  let locid = document.forms["locationfrm"]["locid"].value;
                  if (locid == "" && locid.length <= 10) {
                     alert("Location ID number must be included maximum 10 characters.");
                     return false;
                  }

                   let province = document.forms["locationfrm"]["province"].value;
                   if (province == "") {
                     alert("Province must be filled.");
                     return false;
                   }

                   let city = document.forms["locationfrm"]["city"].value;
                   if (city == "") {
                     alert("City must be filled.");
                     return false;
                   }

                   let zcode = document.forms["locationfrm"]["zcode"].value;
                   if (zcode == "" && zcode.length == 5) {
                     alert("Zip code must be included 5 characters.");
                     return false;
                  }

               }
           </script>
   </div>
</body>
</html>
