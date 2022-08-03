<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/training.css">

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
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfAcQBipWyY0qIXJvbIEOnGmkvcXJBKA-3Yg&usqp=CAU"
                alt="">
            <img class="check" src="./images/check 1admin.png" alt="">
        </div>
    </nav>

    <!-- SideBar Menu -->
    <div class="sideBar">
        <div class="sideItems">

            <!-- Side Elements -->
            <ul>
                <a href="./index.html">Home</a>
                <a href="./profile.html">Profile</a>
                <a href="./trainings.html" style="background-color: #D9D9D9;">My Training</a>
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

    <!-- training section -->
    <div class="container">
        <h3 id="training" onclick="changetraining()">My Training</h3>
        <h3 id="completed" onclick="changecomplete()">Completed</h3>
    </div>
    <!-- mt training -->

    <!-- completed-training -->
    <div id="completed-training">
        <h3 class="c-t-text">This box is designated for the ‘completed’ Trainings.</h3>
        <div class="download">
            <img src="./images/download.svg" alt="">
        </div>
    </div>
    <!-- ongoing-training -->
    <div id="ongoing-training">
        <h3 class="c-t-text">This box is designated for the ‘Ongoing’ Trainings.</h3>
        <div class="play">
            <img src="./images/play.png" alt="">
        </div>
    </div>
    <hr>


    <!-- book now -->


    <h2>Book Now</h2>


    <!-- images  -->


    <div class="book-now">
        <div class="images">
            <h3>Leadership <br> Training</h3>
            <button>Enroll</button>
        </div>
        <div class="images">
            <h3>Leadership <br> Training</h3>
            <button>Enroll</button>
        </div>
    </div>
    <hr>
    <script src="./js/sideBar.js"></script>
    <script src="./js/training.js"></script>

</body>

</html>