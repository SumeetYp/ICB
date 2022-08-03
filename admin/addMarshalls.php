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
          <a href="./index.html" target="_blank">Home</a>
          <a href="./stats.html" target="_blank">Stat</a>
          <a href="./events.html" target="_blank">Event</a>
          <a href="./announcement.html" target="_blank">Announcements</a>
          <a href="./donate.html" target="_blank">Donate</a>
          <a href="./addMarshalls.html" target="_blank">Add a Marshal</a>
          <a href="./alert.html" target="_blank">Send an Alert</a>
        </ul>
        <div class="cross">
          <img src="./images/cross.png" alt="" />
        </div>
      </div>
    </div>
    <div class="addMarshall">
      <a href="./membersRegistration.html" target="_blank" class="addMember">
        <div class="details">
          <div>Member</div>
          <div>Membership Fee: &#8377;499/-</div>
          <div>Eligibility: 18+ Only</div>
        </div>
      </a>
      <a href="./studentsRegistration.html" target="_blank" class="addSchool">
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