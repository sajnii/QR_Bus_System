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
        <h3 class="login-head">Bus Information</h3><br /><br />
        <table>
           <form method="post" href="#" id="busfrm">
               <tr>
                 <td>
                     <label for="bid">
                         Bus ID
                     </label>
                 </td>
                 <td><input type="text" name="uid" class= "reg-item" size="10" required/></td>
               </tr>

               <tr>
                 <td>
                     <label for="route">
                         Bus Route
                     </label>
                 </td>
                 <td><input type="text" name="route" class= "reg-item" size="255" required/></td>
               </tr>

               <tr>
                 <td>
                     <label for="nseat">
                         Number of Seats
                     </label>
                 </td>
                 <td><input type="number" name="nseat" class= "reg-item" size="5" required/></td>
               </tr>

                <tr>
                  <td>
                     <label for="nbuses">
                         Number of Buses 
                     </label>
                  </td>
                 <td><input type="number" name="nbuses" class= "reg-item" size="5" required/></td>
               </tr>

                <tr>
                 <td>
                     <label for="mobile">
                         Contact No
                     </label>
                 </td>
                 <td><input type="number" name="mobile" class= "reg-item" size="10" required/></td>
               </tr>

               <tr>
                 <td>
                     <button class="submit_btn" name="log_insert">Submit</button>
                 </td>
                 <td>
                     <button class="cancel_btn" name="cancel">Cancel</button>
                 </td>
               </tr>
           </form>
        </table>
    </div>
</body>
</html>
