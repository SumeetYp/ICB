<?php  
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (!(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)){
        header("Location: ./index_login.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Stats Page</title>
        <link rel="stylesheet" href="./css/main.css">	
        <link rel="stylesheet" href="./css/header.css">	
        <link rel="stylesheet" href="./css/utils.css">
    </head>
    <body>
        
        <?php
            include './header.php';
        ?>
        <h3 class="achHeading">Initiative Stats</h3>

        <div class="graphBox">
        <svg class="circle-container" viewBox="2 -2 28 36" xmlns="http://www.w3.org/2000/svg">
            <circle class="circle-container__background" r="17" cx="16" cy="16"></circle>
            <circle
              class="ringA circle-container__progress"
              r="17"
              cx="16"
              cy="16"
              style="stroke-dashoffset: 15"
            ></circle>

            <circle class="circle-container__background" r="14" cx="16" cy="16"></circle>
            <circle
              class="ringB circle-container__progress"
              r="14"
              cx="16"
              cy="16"
              style="stroke-dashoffset: 60" pathlength="100"
            ></circle>

            <circle class="circle-container__background" r="11" cx="16" cy="16"></circle>
            <circle
              class="ringC circle-container__progress"
              r="11"
              cx="16"
              cy="16"
              style="stroke-dashoffset: 20" pathlength="100"
            ></circle>

            <circle class="circle-container__background" r="8" cx="16" cy="16"></circle>
            <circle
              class="ringD circle-container__progress"
              r="8"
              cx="16"
              cy="16"
              style="stroke-dashoffset: 40" pathlength="100"
            ></circle>

            <circle class="circle-container__background" r="5" cx="16" cy="16"></circle>
            <circle
              class="ringE circle-container__progress"
              r="5"
              cx="16"
              cy="16"
              style="stroke-dashoffset: 20" pathlength="100"
            ></circle>
          </svg>
          <div class="legends">
            <div class="eventRow">
                <div class="eventColor" style="background-color: #533CF5;"></div>
                <div class="eventName">Mental Health</div>
            </div>
            <div class="eventRow">
                <div class="eventColor" style="background-color: #2EC5B6;"></div>
                <div class="eventName">Mission Shiksha</div>
            </div>
            <div class="eventRow">
                <div class="eventColor" style="background-color: #E01518;"></div>
                <div class="eventName">Animal Safety</div>
            </div>
            <div class="eventRow">
                <div class="eventColor" style="background-color: #41D950;"></div>
                <div class="eventName">Environment</div>
            </div>
            <div class="eventRow">
                <div class="eventColor" style="background-color: #FFBE00;"></div>
                <div class="eventName">Sex Education</div>
            </div>
          </div>
          </div>
          <div class="grapfData">
            <div class="gData1">
            <br>
            <h3 class="achHeading">Achievements</h3>
            <br>
            <div class="achievements">
                <div class="eventRow" style="margin-bottom: 0; margin-top: 0;">
                    <div class="achColor" style="background-color: #fff;"></div>
                    <div class="eventName"><b>Events</b> </div>
                    <div class="eventDate"><b>Events Held</b></div>
                </div>
                <div class="eventRow" style="margin-bottom: 0; margin-top: 0;">
                    <div class="achColor" style="background-color: #533CF5;"></div>
                    <div class="eventName">Mental Health</div>
                    <div class="eventDate">1</div>
                </div>
                <div class="eventRow" style="margin-bottom: 0; margin-top: 0;">
                    <div class="achColor" style="background-color: #2EC5B6;"></div>
                    <div class="eventName">Mission Shiksha</div>
                    <div class="eventDate">2</div>
                </div>
                <div class="eventRow" style="margin-bottom: 0; margin-top: 0;">
                    <div class="achColor" style="background-color: #E01518;"></div>
                    <div class="eventName">Animal Safety</div>
                    <div class="eventDate">4</div>
                </div>
                <div class="eventRow" style="margin-bottom: 0; margin-top: 0;">
                    <div class="achColor" style="background-color: #41D950;"></div>
                    <div class="eventName">Environment</div>
                    <div class="eventDate">45</div>
                </div>
                <div class="eventRow" style="margin-bottom: 0; margin-top: 0;">
                    <div class="achColor" style="background-color: #FFBE00;"></div>
                    <div class="eventName">Sex Education</div>
                    <div class="eventDate">1</div>
                </div>
                <div class="eventRow" style="margin-bottom: 0; margin-top: 0;">
                    <div class="achColor" style="background-color: #D9D9D9;"></div>
                    <div class="eventName">Other</div>
                    <div class="eventDate">-</div>
                </div>
            </div>
          </div>
          <div class="gData2">
            <br>
            <h3 class="achHeading">Events Data</h3>
            <br>
            <div class="achievements">
                <div class="eventRow" style="margin-bottom: 0; margin-top: 0;">
                    <div class="eventName">Total Events Held:</div>
                    <div class="eventDate">45</div>
                </div>
                <div class="eventRow" style="margin-bottom: 0; margin-top: 0;">
                    <div class="eventName">Total Marshals:</div>
                    <div class="eventDate">119</div>
                </div>
            </div>
            </div>
          </div>

        <br>
        <script src="./js/main.js"></script>
        <script src="./js/sideBar.js"></script>
    </body>
</html>