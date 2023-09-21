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

<div id="edit-form-details" class="make-sticky">
  <img src="https://cdn-icons-png.flaticon.com/128/463/463612.png" alt="close" id="edit_form_close" class="close_add-details"/>

          <form method="post" action="database/updateOrderDetails.php" class="order_edit_form">
            <div class="edit_order_details">
              <h4>Edit Order Details</h4>
              <div class="edit_order_area">
                <div class="edit_order_area__image">
                  <img src="" alt="Product Image"/>
                </div>
                <div class="edit_order_area__details">
                <div id="edit_order_area__details__product_id">Product Id:</div>
                <div id="edit_order_area__details__product_name">Temp ProductNmae</div>
                <div id="edit_order_area__details__product_qty"><input type="number" id="product_qty" name="quantity" max="10" min="1" value="1" placeholder="Quantity" class="input_details"></div>
                </div>
              </div>
            </div>
            <div class="edit_customer_details">
            <h4>Edit Customer Details</h4>
            <div class="edit_customer_details">
              <input for="customer_name" class="input_details_50" value="Temp" placeholder="Customer Name" minlength="2" required /> 
              <input for="whatsapp" class="input_details_50" value="9876543212" placeholder="Phone Number" min="1000000000" max="9999999999" required /> 
              <input for="email" class="input_details" value="abc@gmail.com" placeholder="Email" required /> 
              <input for="state" class="input_details_50" value="Temp" placeholder="Customer Name" minlength="2" required /> 
              <input for="city" class="input_details_50" value="" placeholder="City" required /> 
              <input for="address" type="textarea" class="input_details" value="" placeholder="Address" required /> 
              <input for="pin" class="input_details_50" value="" placeholder="Pin Code" min="100000" max="999999" required /> 

            </div>
            </div>
            <input type="submit" class="form_btn" value="Update" id="edit_update_btn"/>
          </form>
        </div>
<div class="add-details">
  <h2 class="add-details__title">Add New Customer</h2>
  <img src="https://cdn-icons-png.flaticon.com/128/463/463612.png" alt="close" class="close_add-details"/>
  <div id="content"></div>
          <form action="database/addCustomer.php" method="post">
          <label for="product_id" class="form_label"><div>Product ID:</div> 
              <select name="product_id" id="product_id" class="form-input" required>
              </select>
            </label>
            <label for="product_name" class="form_label"><div>Product Name: </div>
              <select name="product_name" id="product_name" class="form-input" required>

              </select></label>
            <label class="form_label" for="product_qty"><div>Quantity: </div><input for="product_qty"  class="form-input" name="product_qty" placeholder="1,2,..." required/></label>
            <!-- <label for="product_name">Customer ID: <input for="customer_id" name="customer_id"/></label> -->
            <label class="form_label" for="product_cust_name"><div>Customer Name: </div><input class="form-input" for="customer_name" name="product_cust_name" required/></label>
            <label class="form_label" for="cust_email"><div>Email: </div><input class="form-input" for="product_name" name="cust_email" required/></label>
            <label class="form_label" for="cust_whatasapp"><div>Whatsapp Number: </div><input class="form-input" for="cust_whatasapp" name="cust_whatasapp" required /></label>
            <label class="form_label" for="cust_address"><div>Address: </div><input class="form-input" for="cust_address" name="cust_address" required/></label>
            <label class="form_label" for="cust_city"><div>City: </div><input class="form-input" for="cust_city" name="cust_city" required/></label>
            <label class="form_label" for="cust_state"><div>State: </div><input class="form-input" for="cust_state" name="cust_state" required/></label>
            <label class="form_label" for="cust_pin"><div>Pin: </div><input class="form-input" for="cust_pin" name="cust_pin" required/></label>
            <label for="status" class="form_label"><div>Status:</div> 
              <select name="status" id="status" class="form-input" required>
                <option value="1">Pitching</option> //Pitching: 1
                <option value="2">Closed</option> // Closed: 2
                <option value="0">Cancelled</option> // Canclled: 0
              </select>
            </label>
            <input type="submit">
          </form>
        </div>

    <div class="sales">
      <div class="sales-tab">
        <div class="sale-tab active-option" id="sale-tab-1">Prospectus</div>
        <div class="sale-tab" id="sale-tab-2">Sold</div>
      </div>
      <div class="sales-table" id="table-1">
        <div class="table" id="prospectus">
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
          
        <!-- </table> -->

      </div>
      <button class="add_new"><img src="./images/add.png" class="add" alt="Add new details"/></button>

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
    xmlhttp.open("GET",`database/getProductList.php`,true);
    xmlhttp.send();
  </script>

  <script defer>
  </script>
   
</html>
