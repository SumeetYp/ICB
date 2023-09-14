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
  $searchOn = '';

  $productList = '';
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
        <?php include "./css/salesCRM.css" ?>  
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

<div class="add-details">
  <h2 class="add-details__title">Add New Customer</h2>
  <img src="https://cdn-icons-png.flaticon.com/128/463/463612.png" alt="close" class="close_add-details"/>
  <div id="content"></div>
          <form action="" method="post">
          <label for="product_id" class="form_label"><div>Product ID:</div> 
              <select name="product_id" id="product_id" class="form-input">
                <?php
                  //code for getting product_ids enrolled from database
                ?>
                <option value="temp">Temp 1</option>
                <option value="temp">Temp 2</option>
                <option value="temp">Temp 3</option>
                <option value="temp">Temp 4</option>

              </select>
            </label>
            <label for="product_name" class="form_label"><div>Product Name: </div>
              <select name="product_name" id="product_name" class="form-input">
                <!-- <option value="temp">Temp 1</option>
                <option value="temp">Temp 2</option>
                <option value="temp">Temp 3</option>
                <option value="temp">Temp 4</option> -->

              </select></label>
            <label class="form_label" for="product_qty"><div>Quantity: </div><input for="product_quantity"  class="form-input" name="product_quantity" placeholder="1,2,..."/></label>
            <!-- <label for="product_name">Customer ID: <input for="customer_id" name="customer_id"/></label> -->
            <label class="form_label" for="product_cust_name"><div>Customer Name: </div><input class="form-input" for="customer_name" name="customer_name"/></label>
            <label class="form_label" for="product_name"><div>Phone: </div><input class="form-input" for="product_name" name=""/></label>
            <label class="form_label" for="product_name"><div>Email: </div><input class="form-input" for="product_name" name=""/></label>
            <label class="form_label" for="product_name"><div>Whatsapp Number: </div><input class="form-input" for="product_name" name=""/></label>
            <label class="form_label" for="product_name"><div>Address: </div><input class="form-input" for="product_name" name=""/></label>
            <label class="form_label" for="product_name"><div>City: </div><input class="form-input" for="product_name" name=""/></label>
            <label class="form_label" for="product_name"><div>State: </div><input class="form-input" for="product_name" name=""/></label>
            <label class="form_label" for="product_name"><div>Pin: </div><input class="form-input" for="product_name" name=""/></label>
            <input type="submit">
          </form>
        </div>
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
            <div class="th">Further Details</div>
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
              <div class='td'><button>Add Details</button></div>
            </div>";
          ?>
           <?php echo"
          <div class='tr'>
          <div class='td'>Product101</div>
          <div class='td'>2</div>
          <div class='td'>C930</div>
          <div class='td'>Temp temp</div>
          <div class='td'>12345467890</div>
          <div class='td'>abc@gmail.com</div>
          <div class='td'>Pitching</div>
          <div class='td'><button>Add Details</button></div>

        </div>";


          ?>
        <!-- </table> -->
        <button class="add_new"><img src="" class="add" alt="Add new details"/></button>

      </div>
      </div>
      <div class="sales-table table-hide" id="table-2">
      <table>
          <div class="tr">
            <div class="th">&nbsp;&nbsp;&nbsp;</div>
            <div class="th">Product Name</div>
            <div class="th">Quantity</div>
            <div class="th"> Customer ID</div>
            <div class="th">Customer Details</div>
            <div class="th">Total Price</div>
            <div class="th">Pay</div>
            <div class="th">Status</div>
          </div>
          <?php echo"
          <div class='tr'>
            <div><input type='checkbox'></div>
            <div class='td'>Product102</div>
            <div class='td'>2</div>
            <div class='td'>C930</div>
            <div class='td'>Temp temp</div>
            <div class='td'>123</div>
            <div class='td'><a href='#'><button>Pay</button></a></div>
            <div class='td'>Pending</div>
            </div>";
          ?>
           <?php echo"
          <div class='tr'>
              <div class='td'><input type='checkbox'></div>
              <div class='td'>Product102</div>
              <div class='td'>2</div>
              <div class='td'>C930</div>
              <div class='td'>Temp temp</div>
              <div class='td'>123</div>
              <div class='td'><a href='#'><button>Pay</button></a></div>
              <div class='td'>Paid</div>
            </div>";
          ?>


        </table>
        <div class="total-amount">
            <div>Grand Total: <?php
            $totalPay = "20370"; 
            echo "₹".$totalPay."/-";
            ?>
            </div>
          <a href="#"><button>Pay</button></a>
          </div>
      </div>
    </div>

    <h1 id="response"></h1>
  </body>
  <script defer>
  var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        let ids = "";
        let names = "";
        let products = JSON.parse(this.responseText);
        for(const key in products){
          ids+=`<option value='${key}'>${key}</option>`;
          names+=`<option value='${products[key]}'>${products[key]}</option>`;
        }
        document.getElementById("product_id").innerHTML = ids;
        document.getElementById("product_name").innerHTML = names;
      }
    };
    xmlhttp.open("GET",`database/getProductList.php?id=${<?php echo $_SESSION['id']; ?>}`,true);
    xmlhttp.send();
  </script>
</html>
