<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/events.css">
    <link rel="stylesheet" href="./css/utils.css">
    <title>Document</title>
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
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfAcQBipWyY0qIXJvbIEOnGmkvcXJBKA-3Yg&usqp=CAU" alt="">
            <img class="check" src="./images/check 1admin.png" alt="">
        </div>
    </nav>

    <!-- SideBar Menu -->
    <div class="sideBar hideSideBar">
        <div class="sideItems">

            <!-- Side Elements -->
            <ul>
                <a href="./index.html">Home</a>
                <a href="./profile.html">Profile</a>
                <a href="./trainings.html">My Training</a>
                <a href="./events.html">My Events</a>
                <a href="./donate.html">Donate</a>
                <a href="./differenceIMade.html">Difference I Made</a>
                <a href="./shareMyStory.html">Share My Story</a>
                <a href="./addMarshalls.html">Add a Marshal</a>
                <a href="./settings.html">Settings & Support</a>
                <a href="./coreTeam.html">Contact Team</a>
                <a href="./alert.html">Send an Alert</a>
            </ul>
            <div class="cross">
                <img src="./images/cross.png" alt="">
            </div>
        </div>
    </div>

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
    <script src="./js/sideBar.js"></script>
    <script src="./js/opportunity.js"></script>
    <script src="./js/event.js"></script>
</body>
</html>