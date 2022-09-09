<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  if (!(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)){
    header("Location: ./index.php");
  }
  if (!(isset($_SESSION['type']) && $_SESSION['type']=='admin')){
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

    <title>CareforBharat</title>
  </head>
  <body>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <a class="title">Add Announcement</a>
    <?php
      include './header.php';
    ?>
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
    <script src="./js/sideBar.js"></script>
  </body>
</html>
