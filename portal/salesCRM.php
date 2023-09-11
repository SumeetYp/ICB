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
        <table>
          <tr>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>ID</th>
            <th>Customer Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Status</th>
          </tr>
          <?php echo"
          <tr>
              <td>Product101</td>
              <td>2</td>
              <td>C930</td>
              <td>Temp temp</td>
              <td>12345467890</td>
              <td>abc@gmail.com</td>
              <td>Pitching</td>
            </tr>";
          ?>
           <?php echo"
          <tr>
              <td>Product102</td>
              <td>2</td>
              <td>C930</td>
              <td>Temp temp</td>
              <td>12345467890</td>
              <td>abc@gmail.com</td>
              <td>Closed</td>
            </tr>";
          ?>
        </table>
      </div>
      <div class="sales-table table-hide" id="table-2">
      <table>
          <tr>
            <th>&nbsp;&nbsp;&nbsp;</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>ID</th>
            <th>Customer Details</th>
            <th>Total Price</th>
            <th>Pay</th>
            <th>Status</th>
          </tr>
          <?php echo"
          <tr>
            <td><input type='checkbox'></td>
            <td>Product102</td>
            <td>2</td>
            <td>C930</td>
            <td>Temp temp</td>
            <td>123</td>
            <td><a href='#'><button>Pay</button></a></td>
            <td>Pending</td>
            </tr>";
          ?>
           <?php echo"
          <tr>
              <td><input type='checkbox'></td>
              <td>Product102</td>
              <td>2</td>
              <td>C930</td>
              <td>Temp temp</td>
              <td>123</td>
              <td><a href='#'><button>Pay</button></a></td>
              <td>Paid</td>
            </tr>";
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
