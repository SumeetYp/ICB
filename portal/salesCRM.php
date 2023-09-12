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
    <meta name="viewport" content="widdiv=device-widdiv, initial-scale=1.0" />
    <title>Sales CRM: Care For Bharat</title>
    <link rel="stylesheet" href="./css/donate.css" />
    <link rel="stylesheet" href="./css/header.css" />
    <link rel="stylesheet" href="./css/utils.css">
    <link rel="stylesheet" href="./css/salesCRM.css">
    <style>
        <?php include "./css/header.css" ?>
        <?php include "./css/search.css" ?>
    </style>
    <script src="./js/sliderAccordian.js" defer></script>
    <script src="./js/sideBar.js" defer></script>
    <script src="./js/salesCRM.js" defer></script>
</head>
  <body>
    <!-- Navigation Bar -->
    <?php
      include './header.php';
    ?>
    <?php
      include './components/searchBar.php';
    ?>
    <div class="sales">
      <div class="sales-tab">
        <div class="sale-tab active-option" id="sale-tab-1">Prospectus</div>
        <div class="sale-tab" id="sale-tab-2">Sold</div>
      </div>
      <div class="sales-table" id="table-1">
        <div class="table">
        <!-- <table> -->
          <div class="tr">
            <div class="th">Product Name</div>
            <div class="th">Quantity</div>
            <div class="th">ID</div>
            <div class="th">Customer Name</div>
            <div class="th">Phone Number</div>
            <div class="th">Email</div>
            <div class="th">Status</div>
</div>
          <?php echo"
          <div class='tr'>
              <div class='td'>Product101</div>
              <div class='td'>2</div>
              <div class='td'>C930</div>
              <div class='td'>Temp temp</div>
              <div class='td'>12345467890</div>
              <div class='td'>abc@gmail.com</div>
              <div class='td'>Pitching</div>
            </div>";
          ?>
           <?php echo"
          <div>
              <div>Product102</div>
              <div>2</div>
              <div>C930</div>
              <div>Temp temp</div>
              <div>12345467890</div>
              <div>abc@gmail.com</div>
              <div>Closed</div>
            </div>";
          ?>
        <!-- </table> -->
</div>
      </div>
      <div class="sales-table table-hide" id="table-2">
      <table>
          <div>
            <div>&nbsp;&nbsp;&nbsp;</div>
            <div>Product Name</div>
            <div>Quantity</div>
            <div>ID</div>
            <div>Customer Details</div>
            <div>Total Price</div>
            <div>Pay</div>
            <div>Status</div>
          </div>
          <?php echo"
          <div>
            <div><input type='checkbox'></div>
            <div>Product102</div>
            <div>2</div>
            <div>C930</div>
            <div>Temp temp</div>
            <div>123</div>
            <div><a href='#'><button>Pay</button></a></div>
            <div>Pending</div>
            </div>";
          ?>
           <?php echo"
          <div>
              <div><input type='checkbox'></div>
              <div>Product102</div>
              <div>2</div>
              <div>C930</div>
              <div>Temp temp</div>
              <div>123</div>
              <div><a href='#'><button>Pay</button></a></div>
              <div>Paid</div>
            </div>";
          ?>
        </table>
        <div>
            <div>Grand Total: <?php
            $totalPay = "20370"; 
            echo "₹".$totalPay."/-";
            ?>
            </div>
          <a href="#"><button>Pay</button></a>
          </div>
      </div>
    </div>
  </body>
</html>
