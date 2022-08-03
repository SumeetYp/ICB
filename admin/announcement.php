<?php

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="./css/header.css" /> -->
    <link rel="stylesheet" href="./css/announcement.css" />

    <title>Document</title>
  </head>
  <body>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <a class="title">AddAnnouncement</a>
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
    <div class="addAnnouncement">
      <form id="announcement-page">
        <div class="form-group">
          <label id="name-label" for="name">End Timestamp:</label>
          <input id="name" type="date" required placeholder="DD" />
          <span class="validity"></span>
        </div>
        <div class="form-group">
          <label id="textarea-label" for="comments">Announcement:</label>
          <textarea id="comments" cols="70" rows="10" required></textarea>
        </div>
        <div class="form-group">
          <input
            id="submit"
            class="button"
            type="submit"
            value="Save & Continue"
          />
        </div>
      </form>
    </div>
    <script src="./js/announcement.js"></script>
  </body>
</html>