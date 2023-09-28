<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
if (!(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true)) {
  header("Location: ./index.php");
}
if (!isset($_SESSION['type'])) {
  header("Location: ../index.html");
}
$searchOn = ''
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Learn: Care For Bharat</title>
  <link rel="stylesheet" href="./css/donate.css" />
  <link rel="stylesheet" href="./css/header.css" />
  <link rel="stylesheet" href="./css/utils.css">
  <link rel="stylesheet" href="./css/dashboard.css" />
  <style>
    <?php include "./css/header.css" ?>
    <?php include "./css/search.css" ?>
  </style>
  <script src="./js/sliderAccordian.js" defer></script>
  <script src="./js/sideBar.js" defer></script>
</head>

<body>
  <!-- Navigation Bar -->
  <?php
  include './header.php';
  ?>
  <header>
  <div class="welcome">
  <div class="welcome-strip"></div>
  <div class="profile-icon">
      <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
        <!-- SVG path for your profile icon -->
      </svg>
    </div>
  <div class="welcome-text">Welcome to ICB</div>
  <div class="uid-text">UID: 16426790</div>
  <div class="dashboard-text">Dashboard</div>
  <div class="welcome-container">
    <a href="#"></a>
    <a href="#"></a>
    <a href="#"></a>
    <a href="#"></a>
  </div>
  <div class="cards-container">
    <div class="card card-left">
      <div class="card-content">
        <span class="card-title">TOTAL SELLS</span>
        <div class="card-icon">
          <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
            <!-- SVG path for your icon -->
          </svg>
          <span class="card-text">Rs 1500</span>
        </div>
        <a href="#" class="card-link" target="_blank"></a>
      </div>
    </div>
    <div class="card card-center">
      <div class="card-content">
        <span class="card-title">TOTAL EARNING</span>
        <div class="card-icon">
          <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
            <!-- SVG path for your icon -->
          </svg>
          <span class="card-text">Rs 1500</span>
        </div>
        <a href="#" class="card-link" target="_blank"></a>
      </div>
    </div>
    <div class="card card-right">
      <div class="card-content">
        <span class="card-title">MY NETWORK</span>
        <div class="card-icon">
          <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
            <!-- SVG path for your icon -->
          </svg>
          <span class="card-text">40</span>
        </div>
        <a href="#" class="card-link" target="_blank"></a>
      </div>
    </div>
  </div>
</div>

</body>

</html>