<?php
include("connection.php");
include("log_category_view.php");

if(isset($_POST['delete_btn'])) {
    $id = $_POST['log_id'];

    $query = "DELETE FROM login_category WHERE LID= '$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run) {
        echo '<script>alert("Data deleted!");</script>';
        header("location:log_category_view.php");
    }else {
        echo '<script>alert("Error!");</script>';
    }
}
?>