<?php
/*
 Title: This page is accessible by admins only, for making announcemnets.

 Dependencies:
 - None
*/
    // 1. session_status() checks for the status of session.

  if (session_status() == PHP_SESSION_NONE) {
    // If session_status is equal to PHP_SESSION_NONE
    // Then start the session using session_start()
    session_start();
  }
    // 2. Checking if session variable logged_in is set not null and logged_in value is true
  if (!(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)){
    // Redirect to index.php page for login.
    header("Location: ./index.php");
  }
  // 3. If session type variable is not  set  
  if (!(isset($_SESSION['type']) && $_SESSION['type']=='admin')){
    // Redirect to index.html page.
    header("Location: ../index.html");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/header.css" />
    <link rel="stylesheet" href="./css/announcement.css" />
    <link rel="stylesheet" href="./css/utils.css">
    <style>
        <?php include "./css/header.css" ?>
    </style>
    <link rel="stylesheet" href="./css/bottomNav.css">
    <script src="./js/sideBar.js" defer></script>
    <script src="./js/sliderAccordian.js" defer></script>
    <title>CareforBharat</title>
  </head>
  <body>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <a class="title">Add Announcement</a>
    <?php
      include './header.php';
    ?>
    
    <!-- 
      Form to accept user details.
      - Action will be forwarded to `./database/addAnnouncement.php./database/addAnnouncement.php`
      - method: POST
      #### Accepts:
      |Name of value| name |
      |---|---|
      | End Timestamp |`endData` |
      | Announcement | `announcement`|

      #### Button
      |Name of value| type |
      |---|---|
      |Save & Continue | `submit` | 
    -->


    <div class="addAnnouncement">
      <form id="announcement-page" action="./database/addAnnouncement.php" method="POST">
        <div class="form-group">
          <label id="name-label" for="endDate">End Timestamp:</label>
          <input id="endDate" type="date" name="endDate" required placeholder="DD" />
          <span class="validity"></span>
        </div>
        <div class="form-group">
          <label id="textarea-label" for="announcement">Announcement:</label>
          <textarea id="announcement" form="announcement-page" name="announcement" cols="70" rows="10" required></textarea>
        </div>
        <div class="form-group">
          <input id="submit" class="button" name="announcementSubmit" type="submit" value="Save & Continue"/>
        </div>
      </form>
    </div>
    <?php include "./components/bottomNav.php";?>
    <script src="./js/sideBar.js"></script>
  </body>
</html>
