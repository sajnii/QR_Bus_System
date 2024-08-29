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
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!--Bootstrap CSS-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="margin: 50px;">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3 class="login-head">User Category</h3>
                        <br /><br />
                    </div>
                    <div>
                           
                               <?php
                               $query = "SELECT * FROM login_category";
                               $query_run = mysqli_query($conn, $query);
                               ?>

                               <table class="table table-border table-striped">
                                   <thead>
                                       <tr>
                                           <th>LID</th>
                                           <th>Login Type</th>
                                           <th>Edit</th>
                                           <th>Delete</th>
                                       </tr>
                                   </thead>

                               <?php
                               if($query_run) {
                                   while($row = mysqli_fetch_array($query_run)) {
                               ?>
                               <tbody>
                                   <tr>
                                       <th><?php echo $row['LID']; ?></th>
                                       <th><?php echo $row['Login_Type']; ?></th>

                                       <input type="hidden" name="id" value="<?php echo $row['LID']?>" />
                                       <th><a href="edit_log.php" class="btn btn-success">Edit</a></th>
                                       
                                       <th><a href="delete_log.php" name="delete_btn" class="btn btn-danger">Delete</a></th>
                                   </tr>
                               </tbody>
                               <?php  
                                       
                                       
                                   }
                               }
                               else {
                                   echo "No Record Found!";
                               }
                               ?>
                       </table>
                    </div>
                 </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>