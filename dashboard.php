<?php
session_start();

if (isset($_SESSION['username'])) {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>QR BASED BUS TICKET RESERVATION & TRACKING SYSTEM</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <script defer src="admin.js"></script>
      <script drfer src="operator.js"></script>
      <script drfer src="driver.js"></script>
      <script drfer src="passenger.js"></script>
   </head>
<body>
  <div class="navbar">
    <div class="logo-details">
      <i class="fa fa-bus"></i>
      <span class="logo_name"></span>
    </div>
    <a href="logout.php" class="logout_btn">LOGOUT</a>
      <ul class="nav-links">
        <li>
          <a href="dashboard.php" class="active">
            <i class="fa fa-home" ></i>
            <span class="links_name">Home</span>
          </a>
        </li> 
        <li>
          <a href="admin_page.php">
            <i class="fa fa-user"></i>
            <span class="links_name" onclick="openPopup">Administrator</span>
          </a>
        </li>
        <li>
          <a href="operator_page.php">
            <i class="fa fa-user"></i>
            <span class="links_name">Bus Operator</span>
          </a>
        </li>
        <li>
          <a href="driver_page.php">
            <i class="fa fa-user"></i>
            <span class="links_name">Bus Driver</span>
          </a>
        </li>
        <li>
          <a href="passenger_page.php">
            <i class="fa fa-user"></i>
            <span class="links_name">Passenger</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <img src="images/profile.jpg" alt="">
        <span class="admin_name"></span>
      </div>
    </nav>
    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic"></div>
            <div class="number"></div>
            <div class="indicator">
              <span class="text"></span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic"></div>
            <div class="number"></div>
            <div class="indicator">
              <span class="text"></span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic"></div>
            <div class="number"></div>
            <div class="indicator">
              <span class="text"></span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic"></div>
            <div class="number"></div>
            <div class="indicator">
              <span class="text"></span>
            </div>
          </div>
        </div>
      </div>
      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title"></div>
          <div class="sales-details">
         
          </div>
          <div class="button">
            <a href="#"></a>
          </div>
        </div>
        <div class="top-sales box">
          <div class="title"></div>
          <ul class="top-sales-details">
            <li>
            <a href="#">
              <span class="product"></span>
            </a>
            <span class="price"></span>
          </li>
          <li>
            <a href="#">
              <span class="product"></span>
            </a>
            <span class="price"></span>
          </li>
          <li>
            <a href="#">
              <span class="product"></span>
            </a>
            <span class="price"></span>
          </li>
          <li>
            <a href="#">
              <span class="product"></span>
            </a>
            <span class="price"></span>
          </li>
          <li>
            <a href="#">
              <span class="product"></span>
            </a>
            <span class="price"></span>
          </li>
          <li>
            <a href="#">
              <span class="product"></span>
            </a>
            <span class="price"></span>
          <li>
            <a href="#">
              <span class="product"></span>
            </a>
            <span class="price"></span>
          </li>
<li>
            <a href="#">
              <span class="product"></span>
            </a>
            <span class="price"></span>
          </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>
</body>
</html>


