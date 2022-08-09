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
                <a href="./donate.php">Donate</a>
                <a href="./differenceIMade.php">Difference I Made</a>
                <a href="./shareMyStory.php">Share My Story</a>
                <a href="./addMarshalls.php">Add a Marshal</a>
                <a href="./settings.php">Settings & Support</a>
                <a href="./coreTeam.php">Contact Team</a>
                <a href="./alert.php" style="background-color: #D9D9D9;">Send an Alert</a>
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