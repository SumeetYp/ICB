<?php

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/marshall.css" />

    <title>Document</title>
  </head>
  <body>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <a class="title">Add Marshall</a>
    <nav>
      <div class="menu">
        <div></div>
        <div></div>
        <div></div>
      </div>
      <div class="userName">Username</div>

      <div class="profilePicture">
        <img src="./images/profile.jpg" alt="" />
        <img class="check" src="./images/check 1admin.png" alt="" />
      </div>
    </nav>
    <div class="sideBar hideSideBar">
      <div class="sideItems">
        <!-- Side Elements -->
        <ul>
          <a href="./index.php" target="_blank">Home</a>
          <a href="./stats.php" target="_blank">Stat</a>
          <a href="./events.php" target="_blank">Event</a>
          <a href="./announcement.php" target="_blank">Announcements</a>
          <a href="./donate.php" target="_blank">Donate</a>
          <a href="./addMarshalls.php" target="_blank" style="background-color: #D9D9D9;">Add a Marshal</a>
          <a href="./alert.php" target="_blank">Send an Alert</a>
        </ul>
        <div class="cross">
          <img src="./images/cross.png" alt="" />
        </div>
      </div>
    </div>
    <div class="addMarshall">
      <a href="./membersRegistration.php" target="_blank" class="addMember">
        <div class="details">
          <div>Member</div>
          <div>Membership Fee: &#8377;499/-</div>
          <div>Eligibility: 18+ Only</div>
        </div>
      </a>
      <a href="./studentsRegistration.php" target="_blank" class="addSchool">
        <div class="details">
          <div>School</div>
          <div>SLTP Fee: &#8377;199/-</div>
          <div>Eligibility: Must be enrolled in School</div>
        </div>
      </a>
    </div>
    <script src="./js/marshall.js"></script>
  </body>
</html>
