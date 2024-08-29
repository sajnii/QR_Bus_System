<?php
include("connection.php");

$query_1 = "SELECT * FROM users";
$result = mysqli_query($conn, $query_1);

$query_2 = "SELECT * FROM drivenlicense"
?>


<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>QR BASED BUS TICKET RESERVATION & TRACKING SYSTEM</title>
   <link rel="stylesheet" type="text/css" href="styles.css">
   <link rel="stylesheet" hr(ef="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
   <!-- Bootstrap CSS -->
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
</head>
<body>
     <div class="student-profile py-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="card shadow-sm">
              <div class="card-header bg-transparent text-center">
                <h3>Driven License Information</h3>
              </div>
              <?php
              while ($row = mysqli_fetch_assoc($result)) {
                  ?>
              <div class="card-body">
                <p class="mb-0"><strong class="pr-1">Admin ID:</strong><?php echo $row['Bus_Driver_ID'] ?></p>
                <p class="mb-0"><strong class="pr-1">Name:</strong><?php echo $row['First_Name' and 'Last_Name'] ?></p>
                <p class="mb-0"><strong class="pr-1">User Role:</strong>Bus Driver</p>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="card shadow-sm">
              <div class="card-header bg-transparent border-0">
                <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
              </div>
              <div class="card-body pt-0">
                <table class="table table-bordered">
                  <tr>
                    <th width="30%">Driven License ID</th>
                    <td width="2%">:</td>
                    <td><?php echo $row['License_ID'] ?></td>
                  </tr>
                  <tr>
                    <th width="30%">Issued Date</th>
                    <td width="2%">:</td>
                    <td><?php echo $row['Issued_Date'] ?></td>
                  </tr>
                  <tr>
                    <th width="30%">Expired Date</th>
                    <td width="2%">:</td>
                    <td><?php echo $row['Expired_Date'] ?></td>
                  </tr>  
                </table>
              </div>
            </div>
            <?php
              }
              ?>
          </div>
        </div>
      </div>
    </div>
</body>
</html>