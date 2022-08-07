<?php

?>
<!DOCTYPE html>

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/alert.css" />
   
    
  </head>
  <b>
    <nav>
      <!-- Hamburger Icon -->
      <div class="hamBurger">
        <div></div>
        <div></div>
        <div></div>
      </div>

      <?php

            include './config.php';
            $sql = "SELECT * FROM users";
            $result = mysqli_query($mysqli, $sql) or die("SQL Failed");
            $output = NULL;
            if(mysqli_num_rows($result) > 0){
                $output = mysqli_fetch_array($result);
            }
            mysqli_close($mysqli);
            echo "<div class='userName'>" . $output['username'] . "</div>" . "\n" .
                    "<div class='profilePicture'>" . "\n" .
                    "<img class='profPic' src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfAcQBipWyY0qIXJvbIEOnGmkvcXJBKA-3Yg&usqp=CAU' alt=''>" . "\n" .
                    "<img class='check' src='./images/check 1admin.png' alt=''>" . "\n" .
                 "</div>";

        ?>
    </nav>

    <!-- SideBar Menu -->
    <div class="sideBar">
      <div class="sideItems">
        <!-- Side Elements -->
        <ul>
          <a href="./index.php">Home</a>
          <a href="./stats.php">Stats</a>

          <a href="./events.php">Event</a>
          <a href="./announcement.php">Announcements</a>
          <a href="./donate.php">Donate</a>

          <a href="./addMarshalls.php">Add a Marshal</a>

          <a href="./alert.php" style="background-color: #D9D9D9;">Send an Alert</a>
        </ul>
        <div class="cross">
          <img src="./images/cross.png" alt="" />
        </div>
      </div>
    </div>
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
