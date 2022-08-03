<?php

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/donate.css" />
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/header.css" />
  </head>
  <body>
    <!-- Navigation Bar -->
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
        <img class="check" src="./images/check 1admin.png" alt="" />
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
    <script src="./js/sideBar.js"></script>

    <!-- donate page  -->
    <p class="heading">Donate</p>
    <div class="container">
      <div class="first-donate">
        <div class="align1">
          <div class="donate">
            <h2>Donate</h2>
          </div>
          <div class="d-donate">
            <h3>without 80G</h3>
          </div>
        </div>
      </div>
      <div class="second-donate">
        <div class="align2">
          <div class="donate">
            <h2>Donate</h2>
          </div>
          <div class="d-donate">
            <h3>with 80G</h3>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
