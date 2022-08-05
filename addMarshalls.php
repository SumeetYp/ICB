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
    <link rel="stylesheet" href="./css/addMarshalls.css">
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
            <a href="./index.php">Home</a>
                <a href="./profile.php">Profile</a>
                <a href="./trainings.php">My Training</a>
                <a href="./events.php">My Events</a>
                <a href="./donate.php">Donate</a>
                <a href="./differenceIMade.php">Difference I Made</a>
                <a href="./shareMyStory.php">Share My Story</a>
                <a href="./addMarshalls.php" style="background-color: #D9D9D9;">Add a Marshal</a>
                <a href="./settings.php">Settings & Support</a>
                <a href="./coreTeam.php">Contact Team</a>
                <a href="./alert.php">Send an Alert</a>
            </ul>
            <div class="cross">
                <img src="./images/cross.png" alt="">
            </div>
        </div>
    </div>
    <div class="addMarshall">
        <div class="marshalls">
            <a target="_blank" href="./membersRegistration.php" class="addMember">
                <div class="details">
                    <div>Member</div>
                    <div>Membership Fee: &#8377;499/-</div>
                    <div>Eligibility: 18+ Only</div>
                </div>
            </a>
            <a target="_blank" href="./studentsRegistration.php" class="addSchool">
                <div class="details">
                    <div>School</div>
                    <div>SLTP Fee: &#8377;199/-</div>
                    <div>Eligibility: Must be enrolled in School</div>
                </div>
            </a>
            <a target="_blank" class="addVolunteer">
                <div class="details">
                    <div>Volunteers</div>
                    <div>(Not Now)</div>
                </div>
            </a>
        </div>
    </div>
    <script src="./js/sideBar.js"></script>
</body>
</html>