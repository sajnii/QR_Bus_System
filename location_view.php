<?php
require_once("connection.php");

$query = "SELECT * FROM location";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR BASED BUS TICKET RESERVATION & TRACKING SYSTEM</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3 class="login-head">Location Data</h3><br /><br />
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg dark text-white">
                                <td>Location ID</td>
                                <td>Province</td>
                                <td>City</td>
                                <td>Zip Code</td>
                            </tr>

                            <tr>
                                <?php
                                  while($row = mysqli_fetch_assoc($result))
                                  {
                                ?>
                                  <td><?php echo $row['Location_ID'] ?></td>
                                  <td><?php echo $row['Province'] ?></td>
                                  <td><?php echo $row['City'] ?></td>
                                  <td><?php echo $row['Zip_Code'] ?></td>
                                  <td><a href="" class="submit_btn">Edit</a></td>
                                  <td><a href="" class="cancel_btn">Delete</a></td>
                            </tr>
                            <?php
                                  }
                            ?>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>