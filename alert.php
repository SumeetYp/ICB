<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/header.css"> -->
    <link rel="stylesheet" href="./css/alert.css">

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
            <img class="check" id="right-tick" src="./images/check 1admin.png" alt="">
        </div>
    </nav>

    <!-- SideBar Menu -->
    <div class="sideBar">
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
                <a href="./alert.html" style="background-color: #D9D9D9;">Send an Alert</a>
            </ul>
            <div class="cross">
                <img src="./images/cross.png" alt="">
            </div>
        </div>
    </div>
    <h2>Send an alert</h2>
    <div class="container">
        <form>
            <label>Name:</label>
            <input type="text" placeholder="Full Name of Patient/Contact Person" required><br><br>
            <label>Type:</label>
            <select name="Types of Emergency:" id="cars" aria-placeholder="Types of Emergency:">
                <option value="Human Care">Human Care</option>
                <option value="Animal Care">Animal Care</option>
                <option value="Relief/Pandemic">Relief/Pandemic</option>
                <option value="Medical">Medical</option>
            </select><br><br>
            <label>Place:</label>
            <input type="text" required><br><br>
            <label>Address:</label>
            <input type="text" placeholder="Patient’s Address" required><br><br>
            <label>Phone:</label>
            <input type="number" placeholder="Phone Number of Patient/Contact Person" required><br><br>
            <div class="btn">
                <input type="submit" class="submit">
            </div>
        </form>
    </div>
    <script src="./js/sideBar.js"></script>
    <script src="./js/alert.js"></script>


</body>

</html>