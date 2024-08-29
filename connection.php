<?php

$conn = mysqli_connect("localhost", "root", "", "qr_bus_system");
if($conn == false) {
    die("connection Error" . mysqli_connect_error());
}

?>
