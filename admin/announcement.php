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

    <a class="title">Add Announcement</a>
    <nav>
      <div class="menu">
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
    <div class="sideBar hideSideBar">
      <div class="sideItems">
        <!-- Side Elements -->
        <ul>
          <a href="./index.php">Home</a>
          <a href="./stats.php">Stats</a>
          <a href="./events.php">Event</a>
          <a href="./announcement.php" style="background-color: #D9D9D9;">Announcements</a>
          <a href="./donate.php">Donate</a>
          <a href="./addMarshalls.php">Add a Marshal</a>
          <a href="./alert.php">Send an Alert</a>
        </ul>
        <div class="cross">
          <img src="./images/cross.png" alt="" />
        </div>
      </div>
    </div>
    <div class="addAnnouncement">
      <form id="announcement-page" action="./database/addAnnouncement.php" method="POST">
        <div class="form-group">
          <label id="name-label" for="endDate">End Timestamp:</label>
          <input id="endDate" type="date" name="endDate" required placeholder="DD" />
          <span class="validity"></span>
        </div>
        <div class="form-group">
          <label id="textarea-label" for="announcement">Announcement:</label>
          <textarea id="announcement" name="announcement" cols="70" rows="10" required></textarea>
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
