<?php
include("connection.php");

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
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
                <img class="profile_img" src="" alt="student dp">
                <h3></h3>
              </div>
              <?php
                 while($row = mysqli_fetch_assoc($result))
                    {
              ?>
              <div class="card-body">
                <p class="mb-0"><strong class="pr-1">Admin ID:</strong><?php echo $row['User_ID'] ?></p>
                <p class="mb-0"><strong class="pr-1">Name:</strong><?php echo $row['First_Name' AND 'Last_Name'] ?></p>
                <p class="mb-0"><strong class="pr-1">User Role:</strong><?php echo $row['User_Type'] ?></p>
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
                    <th width="30%">Date of Birth</th>
                    <td width="2%">:</td>
                    <td><?php echo $row['DOB'] ?></td>
                  </tr>
                  <tr>
                    <th width="30%">Gender</th>
                    <td width="2%">:</td>
                    <td><?php echo $row['Gender'] ?></td>
                  </tr>
                  <tr>
                    <th width="30%">National Identity Card No</th>
                    <td width="2%">:</td>
                    <td><?php echo $row['NIC'] ?></td>
                  </tr>
                  <tr>
                    <th width="30%">Address</th>
                    <td width="2%">:</td>
                    <td><?php echo $row['Address'] ?></td>
                  </tr>
                  <tr>
                    <th width="30%">Email</th>
                    <td width="2%">:</td>
                    <td><?php echo $row['Email'] ?></td>
                  </tr>
                  <tr>
                    <th width="30%">Mobile No</th>
                    <td width="2%">:</td>
                    <td><?php echo $row['MobileNo'] ?></td>
                  </tr>
                  <tr>
                    <th width="30%">UserName</th>
                    <td width="2%">:</td>
                    <td><?php echo $row['Username'] ?></td>
                  </tr>
                  <tr>
                    <th width="30%">Password</th>
                    <td width="2%">:</td>
                    <td><?php echo $row['Password'] ?></td>
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