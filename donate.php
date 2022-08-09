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
    <link rel="stylesheet" href="./css/donate.css">
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

        <?php

            include './config.php';
            $sql = "SELECT * FROM users";
            $result = mysqli_query($mysqli, $sql) or die("SQL Failed");
            $output = NULL;
            $checkSrc = NULL;
            $borderColor = NULL;
            if(mysqli_num_rows($result) > 0){
                $output = mysqli_fetch_array($result);
                if($output){
                    switch($output['type']){
                        case "admin": $borderColor= '#0ED678'; 
                                      $checkSrc= './images/check 1admin.png';
                                      break;
                        case "member": $borderColor= '#2196F3';
                                       $checkSrc= './images/memberProfile.svg';
                                       break;
                        case "volunteer": $borderColor= '#FFBE00';
                    }
                }
            }
            $display = '';
            if($checkSrc == NULL){
                $display = 'd-none';
            }
            mysqli_close($mysqli);
            echo "<div class='userName'>" . $output['username'] . "</div>" . "\n" .
                    "<div class='profilePicture'>" . "\n" .
                    "<img class='profPic' src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfAcQBipWyY0qIXJvbIEOnGmkvcXJBKA-3Yg&usqp=CAU' style='border-color: " . $borderColor . ";' alt=''>" . "\n" .
                    "<img class='check" . $display . "' src='" . $checkSrc . "' alt=''>" . "\n" .
                 "</div>";

        ?>
    </nav>

    <!-- SideBar Menu -->
    <div class="sideBar">
        <div class="sideItems">

            <!-- Side Elements -->
            <ul>
                <a href="./index.php">Home</a>
                <a href="./profile.php">Profile</a>
                <a href="./trainings.php">My Training</a>
                <a href="./events.php">My Events</a>
                <a href="./donate.php" style="background-color: #D9D9D9;">Donate</a>
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
    <script src="./js/sideBar.js"></script>

    <!-- donate page  -->
    <div class="container">
        <div class="first-donate">
            <div class="another-div">
                <div class="donate">
                    <h2>
                        Donate
                    </h2>
                </div>
                <div class="d-donate">
                    <h3>
                        without 80G
                    </h3>
                </div>
            </div>
        </div>
        <div class="second-donate">
            <div class="another-div">
                <div class="donate">
                    <h2>
                        Donate
                    </h2>
                </div>
                <div class="d-donate">
                    <h3>
                        without 80G
                    </h3>
                </div>
            </div>
        </div>
    </div>

</body>

</html>