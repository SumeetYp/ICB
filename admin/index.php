<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/utils.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <div class="sideBar">
        <div class="sideItems">

            <!-- Side Elements -->
            <ul>
                <a href="./index.php" style="background-color: #D9D9D9;">Home</a>
                <a href="./stats.php">Stats</a>
                <a href="./events.php">Event</a>
                <a href="./announcement.php">Announcement</a>
                <a href="./donate.php">Donate</a>
                <a href="./addMarshalls.php">Add a Marshal</a>
                <a href="./alert.php">Send an Alert</a>
            </ul>
            <div class="cross">
                <img src="./images/cross.png" alt="">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="search-container">
            <table class="tableSearch">
                <tr>
                    <td>
                        <input class="search" type="text" placeholder="Search for friends..." name="search">
                    </td>
                    <td class="searchLogo">
                        <a href=""><i class="fa fa-search"></i></a>
                    </td>
                </tr>
            </table>
        </div>
        <div class="announcements d-none">
            <div class="announceHead">Big & Major Announcement</div>
            <div class="announceList">
                <ul class="announces"></ul>
            </div>
        </div>
        <div class="opportunities d-none">
            <div class="opportunityHead">Opportunities Calendar</div>
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
    <script src="./js/announcementHome.js"></script>
    <script src="./js/opportunity.js"></script>
    <script src="./js/sideBar.js"></script>
</body>
</html>