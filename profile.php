<?php
include './config.php';
$sql = "SELECT * FROM users";
$resultUser = mysqli_query($mysqli, $sql) or die("SQL Failed");
$outputUser = NULL;
mysqli_close($mysqli);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/profile-css/style.css">
    <link rel="stylesheet" href="css/profile-css/main.css">
    <link rel="stylesheet" href="css/profile-css/header.css">

</head>

<body>


    <nav>

        <!-- Hamburger Icon -->
        <div class="hamBurger">
            <div></div>
            <div></div>
            <div></div>
        </div>

        <?php

        $checkSrc = NULL;
        $borderColor = NULL;
        if (mysqli_num_rows($resultUser) > 0) {
            $outputUser = mysqli_fetch_array($resultUser);
            if ($outputUser) {
                switch ($outputUser['type']) {
                    case "admin":
                        $borderColor = '#0ED678';
                        $checkSrc = './images/check 1admin.png';
                        break;
                    case "member":
                        $borderColor = '#2196F3';
                        $checkSrc = './images/memberProfile.svg';
                        break;
                    case "volunteer":
                        $borderColor = '#FFBE00';
                }
            }
        }
        $display = '';
        if ($checkSrc == NULL) {
            $display = 'd-none';
        }
        echo "<div class='userName'>" . $outputUser['username'] . "</div>" . "\n" .
            "<div class='profilePicture'>" . "\n" .
            "<img class='profPic' src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfAcQBipWyY0qIXJvbIEOnGmkvcXJBKA-3Yg&usqp=CAU' style='border-color: " . $borderColor . ";' alt=''>" . "\n" .
            "<img class='check" . $display . "' src='" . $checkSrc . "' alt=''>" . "\n" .
            "</div>";

        ?>
    </nav>

    <!-- SideBar Menu -->
    <div class="sideBar hideSideBar">
        <div class="sideItems">

            <!-- Side Elements -->
            <ul>
                <a href="./index.php">Home</a>
                <a href="./profile.php" style="background-color: #D9D9D9;">Profile</a>
                <a href="./trainings.php">My Training</a>
                <a href="./events.php">My Events</a>
                <a href="./donate.php">Donate</a>
                <a href="./differenceIMade.php">Difference I Made</a>
                <a href="./shareMyStory.php">Share My Story</a>
                <a href="./addMarshalls.php">Add a Marshal</a>
                <a href="./settings.php">Settings & Support</a>
                <a href="./coreTeam.php">Contact Team</a>
                <a href="./alert.php">Send an Alert</a>
            </ul>
            <div class="cross">
                <img src="./images/cross.png" alt="">
            </div>
        </div>
    </div>

    <section class="range-slider">

        <div class="container-slide"></div>
        <div class="range-slider-container-slide">
            <?php
            date_default_timezone_set('Asia/Kolkata');
            $date = date('Y-m-d');
            $currDate = strtotime($date);
            $expire = strtotime($outputUser["expirationDate"]);
            echo "<input type='range' class='range' min='0' max='365' step='1' value='" . ceil(abs($expire - $currDate) / 86400) . "'>"
            ?>
            <div class="percentage">
                <span></span>
            </div>
        </div>



        <script>
            const rangeEl = document.querySelector('input')
            const percentage = document.querySelector('.percentage')
            const percentageSpan = document.querySelector('.percentage span')
            range()
            rangeEl.addEventListener('input', range)
            function range() {
                percentage.style.left = `${rangeEl.value / rangeEl.max * 100}%`;
                percentageSpan.innerText = `${rangeEl.value} Days`;
                percentage.style.filter = `hue-rotate(${rangeEl.value}deg)`
            }
        </script>

    </section>


    <!-- Header Section -->

    <header id="topSection" style="overflow: hidden;">
        <div class="container grid grid-header">
            <div class="profilePicture">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfAcQBipWyY0qIXJvbIEOnGmkvcXJBKA-3Yg&usqp=CAU" alt="">
                <img class="check2" src="images/check 1admin.png" alt="">
            </div>
        </div>

        <div class="user-details">
            <div class="user-name-div">
                <span class="username">
                    <?php
                        echo $outputUser["username"];
                    ?>
                </span>
            </div>

            <div class="numbers">
                <span class="post">
                    <?php
                        echo ucwords($outputUser["type"]);
                    ?>
                </span>
                <span class="follower">Joined on 
                    <?php
                        $date = strtotime($outputUser["registrationDate"]);
                        $monthYear = date('M, Y', $date);
                        $date = date('d', $date);
                        $dateEnds = substr($date, 1);
                        if($date[0] == 0)$date = $dateEnds;
                        $dateSuffix = 'th';
                        switch($dateEnds){
                            case '1': $dateSuffix = 'st';
                                      break;
                            case '2': $dateSuffix = 'nd';
                                      break;
                            case '3': $dateSuffix = 'rd';
                                      break;
                        }
                        switch($date){
                            case '11': $dateSuffix = 'th';
                                       break;
                            case '12': $dateSuffix = 'th';
                                       break;
                            case '13': $dateSuffix = 'th';
                                       break;
                        }
                        echo $date . $dateSuffix . ' ' . $monthYear;
                    ?>
                </span>
            </div>

            <!-- <div class="name-div">
                <span class="name">WebApp | UI | Coding</span>
            </div>

            <div class="light-div">
                <span class="light-name">Interests</span>
            </div> -->

            <div class="bio-div">
                <p class="bio">
                    <?php
                        echo $outputUser["bio"];
                    ?>
                </p>
            </div>
        </div>
        </div>

        <div class="container">

            <?php
                echo "<a href='" . $outputUser["instagram"] . "' target='_blank'><button class='btn follow-btn'>Instagram</button></a>
                <a href='" . $outputUser["telegram"] . "' target='_blank'><button class='btn follow2-btn'>Telegram</button></a>";
            ?>
            <!---   <button class="btn msg-btn">Connect<img src="images/user.png"></button>  -->
            <button id="btn-edit" class="profile-btn">Edit Profile</button>
            <button id="save" form="form" class="save-btn">Save</button>
            <button id="cancel" class="cancel-btn">Cancel</button>
            <br><br><br><br><br><br>
        </div>

    </header>


    <!-- Main Content Section -->

    <section id="edit" class="main-content d-flex">
        <div class="container2 d-flex">
            <div class="login-page d-flex">
                <div class="form">
                    <?php
                        echo "<form id='form' class='register-form' action='./database/editProfile.php?userId=$outputUser[id]' method='POST'>";
                    ?>
                        <h1> Edit Profile</h1>
                        <span class="line">
                            <label>Phone:</label>
                            <?php
                                echo "<input name='mobile' type='phone' placeholder='phone' value='" . $outputUser["mobile"] . "' required/>";
                            ?>
                        </span>
                        <span class="line">
                            <label>Bio:</label>
                            <?php
                                echo "<textarea name='bio' placeholder='Type'>" . $outputUser["bio"] . "</textarea>";
                            ?>
                        </span>
                    </form>
                </div>
            </div>





        </div>
    </section>




    <script src="js/profile-js/script.js"></script>
    <script src="js/sideBar.js"></script>
</body>

</html>