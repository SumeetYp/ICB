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

      <!-- Username -->
      <div class="userName">Username</div>

      <!-- User's Profile Picture -->
      <div class="profilePicture">
        <img src="./images/profile.jpg" alt="" />
        <img
          class="check"
          id="right-tick"
          src="./images/check 1admin.png"
          alt=""
        />
      </div>
    </nav>

    <!-- SideBar Menu -->
    <div class="sideBar">
      <div class="sideItems">
        <!-- Side Elements -->
        <ul>
          <a href="./index.html">Home</a>
          <a href="./stats.html">Stat</a>

          <a href="./events.html">Event</a>
          <a href="./announcement.html">Announcements</a>
          <a href="./donate.html">Donate</a>

          <a href="./addMarshalls.html">Add a Marshal</a>

          <a href="./alert.html">Send an Alert</a>
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