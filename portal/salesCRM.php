<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  if (!(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)){
    header("Location: ./index.php");
  }
  if (!isset($_SESSION['type'])){
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
    <title>Sales CRM: Care For Bharat</title>
    <link rel="stylesheet" href="./css/donate.css" />
    <link rel="stylesheet" href="./css/header.css" />
    <link rel="stylesheet" href="./css/utils.css">
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
    <?php
      include './components/searchBar.php';
    ?>
  </body>
</html>
