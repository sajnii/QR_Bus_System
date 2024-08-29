<?php
include("connection.php");
include("crud/log_category_crud.php");
include("log_category.php");
?>

<!DOCTYPE HTML>
<html>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>QR BASED BUS TICKET RESERVATION & TRACKING SYSTEM</title>
   <link rel="stylesheet" type="text/css" href="styles.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <?php
    $id = $_POST['log_id'];

    $query = "SELECT * FROM login_category WHERE LID='$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run) {
        while($row = mysqli_fetch_array($query_run)) {
            ?>
             <div class="log">
                 <h3 class="login-head">Update Log Type</h3><br /><br />
        <table>
           <form method="post" href="log_category_view.php" id="log_categoryfrm" onsubmit="return formData()">
               
              

               <tr>
                 <td>
                     <label for="log_type">
                         Login Type
                     </label>
                 </td>
               </tr>
             
               <tr>
                 <td><input type="text" name="log_type" class= "reg-item" size="255" value="<?php echo $row['log_type'] ?>"></td>
               </tr>

               <tr>
                 <td>
                     <button type="submit" class="submit_btn" name="update_log">Submit</button>
                 </td>
               </tr>
            </form>
         </table>

             </div>
            <?php
        }
    }
    else {
        echo '<script>alert ("Error"); </script>';
    }
    ?>

</body>
</html>