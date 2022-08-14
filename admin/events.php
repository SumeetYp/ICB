<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (!(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)){
        header("Location: ./index_login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Event</title>

    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/utils.css">

</head>
<body>
    
    <?php
        include './header.php';
    ?>
    <br>
    <div class="eventNavbar">
        <button class="eButton upButton" role="button">Upcoming</button>    
        <button class="eButton pastButton" role="button">Past</button>    
    </div>

    <div class="eventBox">
        <div class="upcomingEvent">
            <br>
            <div class="eventRow">
                <div class="eventColor" style="background-color: #E01518;"></div>
                <div class="eventName">up Feeding</div>
                <div class="eventDate">!9 June 22</div>
            </div>
            <div class="eventRow">
                <div class="eventColor" style="background-color: #FFBE00;"></div>
                <div class="eventName">Safe Sex</div>
                <div class="eventDate">!9 June 22</div>
            </div>
            <div class="eventRow">
                <div class="eventColor" style="background-color: #533CF5;"></div>
                <div class="eventName">Mental Health</div>
                <div class="eventDate">!9 June 22</div>
            </div>
            <div class="eventRow">
                <div class="eventColor" style="background-color: #41D950;"></div>
                <div class="eventName">Tree Plantation</div>
                <div class="eventDate">!9 June 22</div>
            </div>
            <br>
        </div>
        <div class="pastEvent">
            <br>
            <div class="eventRow">
                <div class="eventColor" style="background-color: #E01518;"></div>
                <div class="eventName">past Feeding</div>
                <div class="eventDate">!9 June 22</div>
            </div>
            <div class="eventRow">
                <div class="eventColor" style="background-color: #FFBE00;"></div>
                <div class="eventName">Safe Sex</div>
                <div class="eventDate">!9 June 22</div>
            </div>
            <div class="eventRow">
                <div class="eventColor" style="background-color: #533CF5;"></div>
                <div class="eventName">Mental Health</div>
                <div class="eventDate">!9 June 22</div>
            </div>
            <div class="eventRow">
                <div class="eventColor" style="background-color: #41D950;"></div>
                <div class="eventName">Tree Plantation</div>
                <div class="eventDate">!9 June 22</div>
            </div>
            <br>
        </div>

        <div class="addEvent">
            <center>
            <h4 class="aeHead">Add Event</h4>
            </center>
            <form>
            <div class="aeForm">
                <br>
                <div class="aeRow">
                    <div class="aeTitle">Name:</div>
                    <div class="aeBox">
                        <input placeholder="Event Name" pattern="[a-zA-Z]" type="text">
                    </div>
                </div>
                <div class="aeRow">
                    <div class="aeTitle">Initiative:</div>
                    <div class="aeBox">
                            <select>
                                <option selected="true" disabled="disabled">Event Inititative</option>     
                                <option value="">Animal Feeding</option>
                                <option value="">Safe Sex</option>
                                <option value="">Mental Health</option>
                                <option value="">Tree Plantation</option>
                            </select>
                    </div>
                </div>
                <div class="aeRow">
                    <div class="aeTitle">Table Name:</div>
                    <div class="aeBox">
                        <input class="tableName" pattern="[a-zA-Z0-9_-]" placeholder="Event Table Name" type="text">
                        <img class="setInfo" src="./images/info.png">
                        <span class="hiddenText">Event Name (lowercase) + date <br> eg: animalfeeding_19-07-2023 </span>
                    </div>
                </div>
                <div class="aeRow">
                    <div class="aeTitle">Date:</div>
                    <div class="aeBox">
                        <input class="neDate" placeholder="DD" step="1" min="1" max="32" type="number">
                        <input placeholder="MM" step="1" min="1" max="12" type="number">
                        <input placeholder="YYYY" min="2022" type="text">
                    </div>
                </div>
                <div class="aeRow">
                    <div class="aeTitle">Time:</div>
                    <div class="aeBox">
                        <input placeholder="HH" step="1" min="0" max="24" type="number">
                        <input placeholder="MM" step="1" min="0" max="60" type="number">
                    </div>
                </div>
                <div class="aeRow">
                    <div class="aeTitle">Venue:</div>
                    <div class="aeBox">
                        <input placeholder="Event Venue" type="text">
                    </div>
                </div>
                <div class="aeRow">
                    <div class="aeTitle">Requirements:</div>
                    <div class="aeBox">
                        <input placeholder="Event Requirements" type="text">
                    </div>
                </div>
                <br>
                <center>
                <input type="submit" class = "button neButton" value="Save and Continue">
                </center>
                <br>
            </div>
            </form>
        </div>
    </div>

    <br><br><br>
    <script src="./js/main.js"></script>
    <script src="./js/sideBar.js"></script>
</body>
</html>