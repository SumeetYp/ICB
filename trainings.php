<?php
    include './config.php';

    $sql = "SELECT * FROM users";
    $resultUser = mysqli_query($mysqli, $sql) or die("SQL Failed");
    $outputUser = NULL;
    $checkSrc = NULL;
    $borderColor = NULL;
    if(mysqli_num_rows($resultUser) > 0){
        $outputUser = mysqli_fetch_array($resultUser);
        if($outputUser){
            switch($outputUser['type']){
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

    $sql = "SELECT * FROM trainings";
    $resultTrainings = mysqli_query($mysqli, $sql) or die("SQL Failed");
    $outputTrainings = [];
    if(mysqli_num_rows($resultTrainings) > 0){
        while($row = mysqli_fetch_assoc($resultTrainings)){
            $outputTrainings[] = $row;
        }
    }

    $completedTrainings = [];
    $ongoingTrainings = [];
    for($x=0; $x<sizeof($outputTrainings); $x++){
        $trainingTableName = $outputTrainings[$x]['trainingTableName'];
        $id = $outputUser['id'];
        $sql = "SELECT * FROM $trainingTableName WHERE id=$id";
        $resultTrainingTable = mysqli_query($mysqli, $sql) or die("SQL Failed");
        $outputTrainingTable = NULL;
        if(mysqli_num_rows($resultTrainingTable) > 0){
            $outputTrainingTable = mysqli_fetch_array($resultTrainingTable);
            if($outputTrainingTable['enrolledUserCompleted']!=0){
                $completedTrainings[] = (object) ['id' => $outputTrainingTable['id'], 'enrolledUsername' => $outputTrainingTable['enrolledUsername'], 'enrolledUserMobile' => $outputTrainingTable['enrolledUserMobile'], 'enrolledUserEmail' => $outputTrainingTable['enrolledUserEmail'], 'enrollmentDate' => $outputTrainingTable['enrollmentDate'], 'enrolledUserCompleted' => $outputTrainingTable['enrolledUserCompleted'], 'trainingTableName' => $trainingTableName];
            }
            else{
                $ongoingTrainings[] = (object) ['id' => $outputTrainingTable['id'], 'enrolledUsername' => $outputTrainingTable['enrolledUsername'], 'enrolledUserMobile' => $outputTrainingTable['enrolledUserMobile'], 'enrolledUserEmail' => $outputTrainingTable['enrolledUserEmail'], 'enrollmentDate' => $outputTrainingTable['enrollmentDate'], 'enrolledUserCompleted' => $outputTrainingTable['enrolledUserCompleted'], 'trainingTableName' => $trainingTableName];
            }
        }
    }
    
    mysqli_close($mysqli);
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
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/training.css">
    <link rel="stylesheet" href="./css/utils.css">

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
            
            $display = '';
            if($checkSrc == NULL){
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
    <div class="sideBar">
        <div class="sideItems">

            <!-- Side Elements -->
            <ul>
                <a href="./index.php">Home</a>
                <a href="./profile.php">Profile</a>
                <a href="./trainings.php" style="background-color: #D9D9D9;">My Training</a>
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

    <div class="container">
        <div class="head">
            <div class="enrolledTrainingsHead">My Trainings</div>
            <div class="completedTrainingsHead active">Completed</div>
        </div>
        <div class="enrollments d-block">
            <?php 
                if(sizeof($ongoingTrainings)==0){
                    echo "You have not enrolled in any training yet";
                }
                else {
                    for($x=0; $x<sizeof($ongoingTrainings); $x++){
                        echo "<div class='enrolledTraining'>
                                <div class='enrolledTrainingHeading'>" . $ongoingTrainings[$x]->trainingTableName . "</div>
                                <div class='enrolledTrainingData'>
                                    <img src='./images/play.png' alt=''>
                                </div>
                              </div>";
                    }
                }
            ?>
        </div>
        <div class="completedTrainings d-none">
            <?php
                if(sizeof($completedTrainings)==0){
                    echo "You have not completed in any training yet";
                }
                else {
                    for($x=0; $x<sizeof($completedTrainings); $x++){
                        echo "<div class='completedTraining'>
                                <div class='completedTrainingHeading'>" . $ongoingTrainings[$x]->trainingTableName . "</div>
                                <div class='completedTrainingData'>
                                    <img src='./images/download.svg' alt=''>
                                </div>
                              </div>";
                    }
                }
            ?>
        </div>


        <!-- book now -->

        <?php
            $display = '';
            if(sizeof($outputTrainings) == 0){
                $display = 'd-none';
            }
            echo "<div class='bookings " . $display . "'>" . "\n" .
                "<h2>Book Now</h2>" . "\n" . 
                "<div class='book-now'>" . "\n";
            for($x= 0; $x<sizeof($outputTrainings); $x++){
                echo "<div class='images'>" . "\n" . 
                    "<h3>" . $outputTrainings[$x]["trainingName"] . "</h3>" . "\n" .
                    "<a href='./database/enrollTraining.php?training=" . $outputTrainings[$x]["trainingTableName"] . "&userId=$outputUser[id]'><button>Enroll</button></a></div>";
            }
            echo "</div>";
        ?>
    </div>
    <script src="./js/sideBar.js"></script>
    <script src="./js/training.js"></script>

</body>

</html>