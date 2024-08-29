<?php

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
        <h3 class="login-head">Bus Schedule Data</h3><br /><br />
        <table>
           <form method="post" href="#" name="schfrm" onsubmit="return formData()">
               <tr>
                 <td>
                     <label for="bno">
                         Bus Number
                     </label>
                 </td>
                 <td><input type="text" name="bno" class= "reg-item" size="10" required/></td>
               </tr>

               <tr>
                 <td>
                     <label for="start">
                         Start From
                     </label>
                 </td>
                 <td><input type="text" name="start" class= "reg-item" size="255" required/></td>
               </tr>

               <tr>
                 <td>
                     <label for="reach">
                         Reach To
                     </label>
                 </td>
                 <td><input type="text" name="reach" class= "reg-item" size="255" required/></td>
               </tr>

               <tr>
                 <td>
                     <label for="stime">
                         Start Time
                     </label>
                 </td>
                 <td><input type="time" name="stime" class= "reg-item" size="10" required/></td>
               </tr>

               <tr>
                 <td>
                     <label for="rtime">
                         Reach Time
                     </label>
                 </td>
                 <td><input type="time" name="rtime" class= "reg-item" size="10" required/></td>
               </tr>

               <tr>
                 <td>
                     <label for="date">
                         Available Date
                     </label>
                 </td>
                 <td><input type="date" name="date" class= "reg-item" size="8" required/></td>
               </tr>

               <tr>
                 <td>
                     <button class="submit_btn" name="register">Submit</button>
                 </td>
                 <td>
                     <button class="cancel_btn" name="cancel">Cancel</button>
                 </td>
               </tr>
           </form>
        </table>
   </div>

   <script>
       function formData() {
           let bno = document.forms["schfrm"]["bno"].value;
           if (bno == "" && bno.length <= 10) {
               alert("Bus number must be included maximum 10 characters.");
               return false;
           }

           let start = document.forms["schfrm"]["start"].value;
           if (start == "") {
               alert("Start location must be filled.");
               return false;
           }

           let reach = document.forms["schfrm"]["reach"].value;
           if (reach == "") {
               alert("Reach location must be filled.");
               return false;
           }

           let stime = document.forms["schfrm"]["stime"].value;
           if (stime = "") {
               alert("Start time must be filled.");
               return false;
           }

           let rtime = document.forms["schfrm"]["rtime"].value;
           if (rtime = "") {
               alert("Reach time must be filled.");
               return false;
           }

           let date = document.forms["schfrm"]["date"].value;
           if (date = "") {
               alert("Available date must be filled.");
               return false;
           }
       }
   </script>

</body>
</html>