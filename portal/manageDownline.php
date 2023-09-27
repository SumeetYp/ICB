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
    <title>Learn: Care For Bharat</title>
    <link rel="stylesheet" href="./css/donate.css" />
    <link rel="stylesheet" href="./css/header.css" />
    <link rel="stylesheet" href="./css/utils.css">
    <style>
        <?php include "./css/header.css"; ?>
        <?php include "./css/search.css"; ?>
        <?php include "./css/manageDownline.css"; ?>
        <?php include "./css/bottomNav.css"; ?>
        <?php include "./css/dpuserProfile.css"; ?>
    </style>
    <script src="./js/sliderAccordian.js" defer></script>
    <script src="./js/sideBar.js" defer></script>
</head>
  <body>
    <!-- Navigation Bar -->
    <?php
      include './header.php';
    ?>
    
    <div class="downline-top">
      <div id="downline_details">
        <div id="downline_details__username"><?php echo $_SESSION['full_name'];?></div>
        <div id="downline_details__id">UID: <?php echo $_SESSION['id'];?></div>
      </div>
      <div id="downline_income">
        <div id="downline_income__details">
          <div id="downline_income__message">Total&nbsp;Income</div>
          <div id="downline_income__total">&nbsp;₹<?php echo "2000"?>/-</div> 
          <!-- Need to add data from backend -->
        </div>
      </div>
    </div>
    <h2 class="downline_title">My Downline</h2>
    
    <!-- <?php echo '<pre>'; var_dump($_SESSION); echo '</pre>'; ?> -->
    <div class="my_downline_table">
      <div class="my_downline_table__header">
        <div class="my_downline_table_col my_downline_table__header__profile_dp"></div>
        <div class="my_downline_table__header__uid mydownline_col">UID</div>
        <div class="my_downline_table__header__name mydownline_col">Name</div>
        <div class="my_downline_table__header__mobile mydownline_col">Mobile</div>
        <div class="my_downline_table__header__total_income mydownline_col">Total Income</div>
        <div class="my_downline_table__header__myshare mydownline_col">My % Share</div>
      </div>

      <div class="my_downline_table__body">
          <div class="my_downline__card">
            <div class="my_downline_table_col my_downline_table__header__profile_dp">
              <?php 
                $user_image_path = $_SESSION['profile'];
                // $profile_check_image = $_SESSION['']
              ?>
              <?php include "./components/dpuserProfile.php"; ?>
            </div>
            <div class="my_downline_table__header___right">
              
              <div class="my_downline_table__header__uid mydownline_col">UID</div>
              <div class="my_downline_table__header__name mydownline_col">Name</div>
              <div class="my_downline_table__header__mobile mydownline_col">Mobile</div>
              <div class="my_downline_table__header__total_income mydownline_col">Total Income</div>
              <div class="my_downline_table__header__myshare mydownline_col">My % Share</div>
            </div>
          </div>
      </div>
    </div>


    <?php
      include "./components/bottomNav.php";
    ?>
  </body>
</html>
