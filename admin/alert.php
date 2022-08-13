<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  if (!(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)){
    header("Location: ./index_login.php");
  }
?>
<!DOCTYPE html>

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/alert.css" />
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/utils.css">
   
    
  </head>
  <b>
    <?php
      include 'header.php';
    ?>
    <a class="heading">Send an alert</a>
    <div class="container">
      <form>
        <!-- Name -->
        <div class="form-group">
          <label id="name-label" for="name">Name:</label>
          <input class="height" id="name" type="text" placeholder="Full Name of Patient/Contact Person" required/>
          <span class="validity"></span>
        </div>
        <!-- type of Emergency -->
        <div class="form-group">
          <label id="name-label" for="name">Type:</label>
          <select
            name="Types of Emergency"
            id="select"
            placeholder="Types of Emergency" required/>
            <option value="none" selected disabled hidden>Types of Emergency: </option>
            <option value="Human Care">Human Care</option>
            <option value="Animal Care">Animal Care</option>
            <option value="Relief/Pandemic">Relief/Pandemic</option>
            <option value="Medical">Medical</option>
          </select>
          <span class="validity"></span>
        </div>
       <!-- place -->
        <div class="form-group">
          <label id="name-label" for="name">Place:</label>
          <input class="height" id="name" type="text" placeholder="" required />
          <span class="validity"></span>
        </div>
        <!-- address -->
        <div class="form-group">
          <label id="textarea-label" for="comments">Address:</label>
          <input class="height" id="name" type="text" placeholder="Patient’s Address" required />
        </div>
        <!-- phone no -->
        <div class="form-group">
          <label id="name-label" for="name">Phone:</label>
          <input class="height" id="name"  type="number" placeholder="Phone Number of Patient/Contact Person"required/>
          <span class="validity"></span>
        </div>

        <div class="form-group">
          <input id="submit" type="submit" class="submit" value="Alert" />
        </div>
      </form>
    </div>
    
    <script src="./js/sideBar.js"></script>

  </body>
</html>
