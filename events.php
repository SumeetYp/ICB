<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/events.css">
    <link rel="stylesheet" href="./css/utils.css">
    <title>Document</title>
</head>
<body>
    <!-- Navigation Bar -->
    <?php
        include './header.php';
    ?>

    <div class="container">
        <div class="head">
            <div class="enrolledEventsHead">Enrolled</div>
            <div class="attendedEventsHead active">Attended</div>
        </div>
        <div class="enrollments d-block">
            <div class="enrolledEvent">
                <div class="enrolledEventHeading"></div>
                <div class="enrolledEventData">
                    <img src="./images/eye.svg" alt="">
                </div>
            </div>
            <div class="enrolledEvent">
                <div class="enrolledEventHeading"></div>
                <div class="enrolledEventData">
                    <img src="./images/eye.svg" alt="">
                </div>
            </div>
        </div>
        <div class="attendedEvents d-none">
            <div class="attendedEvent">
                <div class="attendedEventHeading"></div>
                <div class="attendedEventData">
                    <a href=""><img src="./images/download.svg" alt=""></a>
                </div>
            </div>
            <div class="attendedEvent">
                <div class="attendedEventHeading"></div>
                <div class="attendedEventData">
                    <a href=""><img src="./images/download.svg" alt=""></a>
                </div>
            </div>
        </div>
        <div class="opportunities d-none">
            <div class="opportunityHead">Enroll Now</div>
            <div class="opportunityList">
                <!-- Slideshow container -->
                <div class="slideshow-container">
                    <!-- next button -->
                    <a class="prev" onclick="plusSlides(-1)">&#62;&#62;</a>
                    <div class="slides"></div>
                    <a class="next" onclick="plusSlides(1)">&#62;&#62;</a>
                </div>
                <br>
                <!-- The dots/circles -->
                <div style="text-align:center" class="dots"></div>
            </div>
        </div>
    </div>
    <script src="./js/opportunity.js"></script>
    <script src="./js/event.js"></script>
</body>
</html>