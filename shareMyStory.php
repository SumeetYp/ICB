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
    <link rel="stylesheet" href="./css/shareMyStory.css">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
                <a href="./shareMyStory.php" style="background-color: #D9D9D9;">Share My Story</a>
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

    <!-- shareMyStory -->


    <div class="container">
        <div class="profilePicture pp-sms">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfAcQBipWyY0qIXJvbIEOnGmkvcXJBKA-3Yg&usqp=CAU"
                alt="">
            <img class="check right-tick" src="./images/check 1admin.png" alt="">
        </div>
        <div class="name">
            <h2> FULL NAME</h2>
        </div>
        <div class="role">
            <h2>Admin</h2>
        </div>
        <div class="sm-container">
            <div class="add-post">
                <h3>Add Post</h3>
                <img src="./images/plus.png" alt="">
            </div>
            <div class="share-my-story">
                <h3>Share My Story</h3>
                <img src="./images/share (1).png" alt="">
            </div>
            <div class="add-previous-story">
                <h3>Add Private Story</h3>
                <img src="./images/story.png" alt="">
            </div>
        </div>
        <div class="post-something">
            <img src="./images/upload.gif" alt="" class="upload-image"> <br>
            <h4 class="textt">Post Something!</h4> <br>
            <form action="">
                <label class="custom-file-upload">
                    <input type="file" />
                    Choose File
                </label>
                <input type="submit" class="btn">
            </form>
        </div>
        <div class="no-post-yet">
            <h2>No Post Yet</h2>
        </div>
    </div>
    
    <script src="./js/sideBar.js"></script>
</body>

</html>